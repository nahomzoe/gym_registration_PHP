<?php
$nutrition = array('carbs'=>10,'protein'=>20,'fat'=>5);
$nutrition['fat'] = 35;
$nutrition['fiber'] =  4.2;
$nutrition['iron'] =  5.2;

/* 
  Write you php code here

   */

?>
<!DOCTYPE html>
<html>

<head>
  <title>Updating Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Nutrition (per 100g)</h2>
 <p>Carbs: <?php echo $nutrition['carbs'];?>%</p>
 <p>Protein: <?php echo $nutrition['protein'];?>%</p>
 <p>Fat: <?php echo $nutrition['fat'];?>%</p>
 <p>Fiber: <?php echo $nutrition['fiber'];?>%</p>
 <p>Iron: <?php echo $nutrition['iron'];?>%</p>

</body>

</html>