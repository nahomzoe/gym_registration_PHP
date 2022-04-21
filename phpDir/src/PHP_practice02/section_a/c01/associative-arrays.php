<?php
$nutrition = array('carbs'=>10,'protein'=>20,'fat'=>5);

/* 
  Write you php code here

   */

?>
<!DOCTYPE html>
<html>

<head>
  <title>Associative Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
  <?php
  echo 'The nutrition value is '. $nutrition['carbs']+$nutrition['protein']+$nutrition['fat']. ' '.'per 100 gram';
  ?>

</body>

</html>