<?php
session_start();

include("index.php");
include("functions.php");

$user_data = check_login($conn);


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
<?php
include './header/header.php';
?>

  <div class="container my-5 card p-3">
  <h2>New member</h2>
  <form  method="post">

  <div class="form-group my-3">
    <label class="my-1">First name</label>
    <input type="text" class="form-control" placeholder="Enter your first name" name="firstname" autocomplete="off">
  </div>

  <div class="form-group my-3">
    <label class="my-1">Last name</label>
    <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" autocomplete="off">
  </div>

  <div class="form-group my-3">
    <label class="my-1">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off">
  </div>

  <div class="form-group my-3">
    <label class="my-1">Phone number</label>
    <input type="text" class="form-control" placeholder="Enter your phone number" name="phone" autocomplete="off">
  </div>

  <div class="form-group my-3">
    <label class="my-1">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
  </div>


  
  <button type="submit" class="btn btn-outline-primary" name="submit">Submit</button>
</form>

  </div>
  </body>
</html>