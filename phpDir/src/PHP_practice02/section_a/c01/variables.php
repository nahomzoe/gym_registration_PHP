<?php
$name = 'Snicker';
$price = '10euro';
echo $name .' is cost '. $price;
/* 
  Write you php code here

   */


?>
<!DOCTYPE html>
<html>

<head>
  <title>Variables</title>
  <link rel="stylesheet" href="css/styles.css">
</head>

<body>
  <h1>The Candy Store</h1>
  <?php 
 $costofcandy = array("Reese's Cups"=>"10", "Skittles"=>"15", "Snickers"=>"20");

foreach($costofcandy as $x => $x_value) {
  echo "Candy Type=" . $x . ", Price=" . $x_value;
  echo "<br>";
}



 
?>


</body>

</html>