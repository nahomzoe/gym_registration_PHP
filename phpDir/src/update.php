<?php
session_start();
include("index.php");
include("functions.php");
$id=$_GET['updateid'];
$sql="select * from `members` where id=$id";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$phone=$row['phonenumber'];
$password=$row['password'];

if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $password=$_POST['password'];

    $sql="update `members` set id=$id,firstname='$firstname',lastname='$lastname',email='$email',phonenumber='$phone',password='$password' where id=$id";

    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "updated successfully";
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
  <h2>Update member</h2>
  <form method="post">

  <div class="form-group my-3">
    <label class="my-1">First name</label>
    <input type="text" class="form-control" placeholder="Enter your first name" name="firstname" autocomplete="off" value=<?php echo $firstname;?>>
  </div>

  <div class="form-group my-3">
    <label class="my-1">Last name</label>
    <input type="text" class="form-control" placeholder="Enter your last name" name="lastname" autocomplete="off" value=<?php echo $lastname;?>>
  </div>

  <div class="form-group my-3">
    <label class="my-1">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email" name="email" autocomplete="off" value=<?php echo $email;?>>
  </div>

  <div class="form-group my-3">
    <label class="my-1">Phone number</label>
    <input type="text" class="form-control" placeholder="Enter your phone number" name="phone" autocomplete="off" value=<?php echo $phone;?>>
  </div>

  <div class="form-group my-3">
    <label class="my-1">Password</label>
    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off" value=<?php echo $password;?>>
  </div>


  
  <button type="submit" class="btn btn-outline-primary" name="submit">Update</button>
</form>

  </div>
  </body>
</html>