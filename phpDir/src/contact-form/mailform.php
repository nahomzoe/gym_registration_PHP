
<style>
    <?php include 'webform.css'?>
</style>
<?php
    if (isset($_POST['submit'])) {
      $mailto = "asfaw.nahom@bc.fi";
      $email = $_POST['email'];
      $name = $_POST['name'];
      $subject = $_POST['subject'];
      $message = 
      "You have a new message from: \nEmail: " . $email . "\n" . "Name: " .$name . "\n" . "Message: " . $_POST['message'];
      
      $headers = "Sender: ". $email;
      $parameters = $name;

      if (mail($mailto, $subject, $message, $headers, $parameters)) {
          echo "<h2>Thank you" . ", " . $name . "!". " " . "Your message was successfully sent.</h2>"; 
      } else {
          echo "<h2>Something went wrong</h2>";
      }
    }
  ?>