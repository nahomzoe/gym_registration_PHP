
<style>
    <?php include "conversion.css" ?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Conversion app</h1>
<div class="main">

<?php  
    function celFar (float $num1)
    {
        return ($num1 * 9/5) + 32;
    }

	function celKelv (float $num1)
	{
		return $num1 + 273.15;
	}

    if (isset($_POST['submit'])) {
    $celsius = $_POST['celsius']; 
    $farenheit = celFar($celsius);
    $kelvin = celKelv ($celsius);
    }
?>

<form method="post" action="" class="form-field">
    <div class="form-field">
    <label for="celsius">Celsius</label>
    <input 
    type="number" 
    name="celsius" 
    required
    placeholder="Celsius">
    </div>
 

    <div class="form-field">
    <label for="farenheit">Farenheit</label>
    <input 
    type="number" 
    name="farenheit" 
    value = "<?= $farenheit; ?>"
    placeholder="Farenheit">
    </div>
  

    <div class="form-field">
    <label for="kelvin">Kelvin</label>
    <input 
    type="number" 
    name="kelvin" 
    value = "<?= $kelvin; ?>"
    placeholder="Kelvin">
    </div>
    
    
    <div class="form-field">
    <input type="submit" name="submit" value="Convert" class="submit"> 
    </div>
   

</form> 

<?php  
    function kilometerToMeter (int $kmhr)
    {
        return ($kmhr / 3.6);
    }

	function kilometerToKnot (int $kmhr)
	{
		return $kmhr / 1.852;
	}

    if (isset($_POST['submit1'])) {
        $kilometePerHour = $_POST['kilometerPerHour']; 
        $meterPerSecond = kilometerToMeter($kilometePerHour);
        $knot = kilometerToKnot($kilometePerHour);
        }
    
    //  else {
    //     $gram = $_GET['gram'];
    //     $kilogram = gramKilogram($gram);
    // }
?>


<form method="post" action="" class="form-field">
    <div class="form-field">
    <label for="kilometerPerHour">Kilometer/hour</label>
    <input 
    type="number" 
    name="kilometerPerHour" 
    value = "<?= $kilometerPerHour; ?>"
    placeholder="Kilometer/hour">
    </div>
  
    
    <div class="form-field">
    <label for="meterPerSecond">Meter/second</label>
    <input 
    type="number" 
    name="meterPerSecond" 
    value = "<?= $meterPerSecond; ?>"
    placeholder="Meter/Second">
    </div>
   

    <div class="form-field">
    <label for="kont">Knot<span>______</span></label>
    <input 
    type="number" 
    name="knot" 
    value = "<?= $knot; ?>"
    placeholder="Knot">
    </div>  
   
    
    <div class="form-field">
    <input type="submit" name="submit1" value="Convert" class="submit"> 
    </div>
  
<!-- added a convert button --> 
</form> 


<?php  
    function kilogramsGram (float $num1)
    {
        return ($num1 * 1000);
    }

	function gramKilogram (float $num2)
	{
		return $num2/1000;
	}

    if (isset($_GET['submit'])) {
    $kilogram = $_GET['kilogram']; 
    $gram = kilogramsGram($kilogram);
    }
    
    //  else {
    //     $gram = $_GET['gram'];
    //     $kilogram = gramKilogram($gram);
    // }
?>

<form method="get" action="" class="form-field">
    <div class="form-field">
    <label for="kilogram">Kilogram</label>
    <input 
    type="number" 
    name="kilogram" 
    value = "<?= $kilogram; ?>"
    placeholder="Kilogram">
    </div>
    
    
    <div class="form-field">
    <label for="gram">Gram</label>
    <input 
    type="number" 
    name="gram" 
    value = "<?= $gram; ?>"
    placeholder="Gram">
    </div>
    

    <div class="form-field">
    <input type="submit" name="submit" value="Convert" class="submit"> 
    </div>
   
<!-- added a convert button --> 
</form> 
    </div>

  <p>copyright</p>
</body>
</html>
