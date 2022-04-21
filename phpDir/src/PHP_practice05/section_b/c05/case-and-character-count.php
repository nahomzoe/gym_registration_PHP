<?php
$text = 'Home sweet home';
$text_count = strlen($text);
$text_uppercase = strtoupper($text);
$text_lowercase = strtolower($text);
?>
<?php include 'includes/header.php'; ?>

<p>

<?php echo $text_count ?> <br>
<?php echo $text_uppercase ?> <br>
<?php echo $text_lowercase ?>

</p>

<?php include 'includes/footer.php'; ?>