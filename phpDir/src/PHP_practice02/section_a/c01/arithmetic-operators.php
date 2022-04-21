<?php
$item = array('desta'=>5,'teter'=>5,'mar'=>5);
$totalprice=($item['desta']+$item['teter']+$item['mar']);
$tax = ($totalprice * 20)/100

/* 
  Write you php code here

   */

?>
<!DOCTYPE html>
<html>

<head>
  <title>Mathematical Operators</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Shopping Cart</h2>
 <p>Mr.John bought <?php echo count($item)?> items and the total price is <?php echo $totalprice;?> and we cut <?php echo $tax;?> euro which is 20% of the the total price.</p>

</body>

</html>