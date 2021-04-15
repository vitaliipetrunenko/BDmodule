<?php
$dblocation = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbbase = "bada2s";

$dbcon=@mysqli_connect($dblocation,$dbuser,$dbpassword);
if(!$dbcon)
  {
    exit("<P> Сервер не доступний </P>");
  }
  else{
      echo "<p>Подключились к серверу!</p>";
  }

if(!mysqli_select_db($dbcon,$dbbase))
  {
    exit("<P> База не доступна </P>");
  }
  else{
    echo "<p>Подключились к базе!</p>";
}


?>