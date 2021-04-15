<?php
include ("conn.php");
$sql = "select order_catalog.order_code,client_name,order_date,payment_date from order_catalog,client_catalog where order_catalog.client_code = client_catalog.client_code and payment_date is NULL and order_date<'2004-08-12'";
$result = $dbcon->query($sql);
$picbeetween = "<a href='options.php'><img src='img.jpg' ></img></a>";

if ($result !==false && $result->num_rows > 0) {
  
  // запрос до даты
  echo "<table border=4>";
  echo "<tr><th>ID</th><th>Name</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["order_code"]."</td><td>".$row["client_name"]."</td><td>".$row["order_date"]."</td><td>".$row["payment_date"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

echo $picbeetween;

?>