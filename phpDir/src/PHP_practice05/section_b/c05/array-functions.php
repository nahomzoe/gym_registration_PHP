<?php
// Write PHP code here
//step 1 create array 
$greetings = ['Hi','Shalom','Moi','Hola','Ciao'];
$greetings_key = array_rand($greetings);
$greetings = $greetings[$greetings_key]; //random key is used to select greetings from array
 //step 2
 $bestsellers = ['ink','pencil','notebook','pen'];
 $bestsellers_count = count($bestsellers);
 $bestsellers_text = implode(',', $bestsellers);
 //step3: array  holding only one customers details
 //e.g first nname, surname, email
 $customer = ['firstname' => 'Asfaw','lastname' => 'Nahom','email' => 'nahom130g'];
 //step4
 //Hint: array_key_exists()
 //concatenate with greeting
 if(array_key_exists('firstname',$customer)){
    $greetings .= '  '.$customer['firstname'];
 }

    


?>
<?php include 'includes/header.php'; ?>

<h1>Best Sellers</h1>
<?php echo $greetings ?>
<p>Out top <?php echo $bestsellers_count ?></p>
<b>Items for todays are:</b>
<?php echo $bestsellers_text?>




<?php include 'includes/footer.php'; ?>