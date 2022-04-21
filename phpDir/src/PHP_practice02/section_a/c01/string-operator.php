<?php
$item = array('desta'=>5,'teter'=>5,'mar'=>63);
$totalprice=($item['desta']+$item['teter']+$item['mar']);
$tax = ($totalprice * 20)/100;
$customer = ['Andy','John','Nahom'];
$greeting = ' Thank you for coming!'
/* 
  Write you php code here

   */

?>
<!DOCTYPE html>
<html>

<head>
  <title>String Operator</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Mr.<?=$customer[2].=$greeting?></h2>
  <p><?= 'Total Item: '. count($item)?></p>
  <p><?= 'Total Price: '. $totalprice?></p>
  <p><?= 'Tax 20%: '. $tax?></p>
  

</body>

</html>