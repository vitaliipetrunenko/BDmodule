<?php
include ("conn.php");
$client =$_GET['input'];
$sql = "CALL `procm4_1`('".$client."');";
echo $sql;
$result = $dbcon->query($sql);
$picbeetween = "<a href='options.php'><img src='img.jpg' ></img></a>";

if ($result !==false && $result->num_rows > 0) {
  
  // запрос процедура вложенный
  echo "<table border=4>";
  echo "<tr><th>ID</th></tr>";
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["VART"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

echo $picbeetween;

?>