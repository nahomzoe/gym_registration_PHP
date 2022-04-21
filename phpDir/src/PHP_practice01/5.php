<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
	  echo sqrt(2);


/*  Step1: Use a pre-built math function here */


/*
	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
$num = array(1, 2 , 3, 4, 5, 6, 7, 8, 9, 10);
$num1 = array(55,66,77);
$result = array_merge($num,$num1);
print_r($result);

function cube($n)
{
    return ($n * $n * $n);
}

$a = [1, 2, 3, 4, 5];
$b = array_map('cube', $a);
print_r($b[3]);

$a = [1, 2, 3, 4, 5];
 array_rand($a);
print_r($a);
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>