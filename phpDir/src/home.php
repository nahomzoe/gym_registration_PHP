<?php
include 'index.php';
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];
    if ($firstname == "") {
      echo 'first name is required';
    }
    
    $sql="insert into `members`(firstname,lastname,email,phonenumber,password) values('$firstname','$lastname','$email','$phone','$password')";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Data inserted successfully";
        header('location:view.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="stylehome.css">
    <title>My PHP project</title>
  </head>
  <body>
  <div class="home">
      <h1>One Fitness Clubs & Gyms</h1>
      <h2>Membership Type</h2>
  <video autoplay muted loop>
          <source src="./assets/gym.mp4" type="video/mp4" />
        </video>
        <ul>
    <li><a href="./form.php"><i class="fa fa-button" aria-hidden="true">Gold</i></a></li>
    <li><a href="./form.php"><i class="fa fa-button" aria-hidden="true">Silver</i></a></li>
    <li><a href="./form.php"><i class="fa fa-button" aria-hidden="true">Bronze</i></a></li>
 
  
  </ul>

        
       
  </div>
  </body>
</html>