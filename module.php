<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
</head>
<body style="background-color:gray; display:flex;align-items:center;justify-content:center;height:100vh;flex-direction:column;">
   <h1 style="color:lightgreen;">запросики</h1>
   <div>
<a href="que1.php"><button style="border-radius:15px;">Запрос 1</button></a>
<a href="que2input.php"><button style="border-radius:15px;">Запрос 2</button></a>
<a href="que3.php"><button style="border-radius:15px;">Запрос 3</button></a>
</div>
<?php
include ("conn.php");


?>
</body>
</html>