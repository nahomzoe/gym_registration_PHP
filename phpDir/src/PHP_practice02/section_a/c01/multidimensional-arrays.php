<?php

$offers = [
  ['name'=> 'BMW','price' => 1000000, 'stock' => 200],
  ['name'=> 'Totota','price' => 250000, 'stock' => 80],
  ['name'=> 'Benz','price' => 350000, 'stock' => 100],
  ['name'=> 'Renute','price' => 50000, 'stock' => 290]
];

?>
<!DOCTYPE html>
<html>

<head>
  <title>Multidimensional Arrays</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <h2>Offers</h2>
  <p><?php echo $offers[0]['name'];?> - <?php echo $offers[0]['price'];?> - <?php echo $offers[0]['stock'];?></p>
  <p><?php echo $offers[1]['name'];?> - <?php echo $offers[1]['price'];?> - <?php echo $offers[1]['stock'];?></p>
  <p><?php echo $offers[2]['name'];?> - <?php echo $offers[2]['price'];?> - <?php echo $offers[2]['stock'];?></p>

</body>

</html>