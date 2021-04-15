

<?php
include ("conn.php");
//$client =$_GET['input'];
$sql = <<<'EOD'
select prod_name as 'product',
sum(if(client_catalog.client_name='Ресторан "Дубки"', product_catalog.prod_price*order_contents.order_quantity, 0)) as 'Ресторан "Дубки"',
sum(if(client_catalog.client_name='Ресторан "Сатурн"', product_catalog.prod_price*order_contents.order_quantity, 0)) as 'Ресторан "Сатурн"',
sum(if(client_catalog.client_name='Кафе "Світлана"', product_catalog.prod_price*order_contents.order_quantity, 0)) as 'Кафе "Світлана"'
from order_contents, product_catalog, client_catalog, order_catalog where client_catalog.client_code=order_catalog.client_code AND order_contents.order_code=order_catalog.order_code AND product_catalog.prod_code=order_contents.prod_code
group by product_catalog.prod_name;
EOD;


echo $sql;
$result = $dbcon->query($sql);
$picbeetween = "<a href='options.php'><img src='img.jpg' ></img></a>";

if ($result !==false && $result->num_rows > 0) {
  
  // запрос перекрестный
  echo "<table border=4>";
  echo "<tr><th>ID</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["product"]."</td><td>".$row['Ресторан "Дубки"']."</td><td>".$row['Ресторан "Сатурн"']."</td><td>".$row['Кафе "Світлана"']."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

echo $picbeetween;

?>