<?php
session_start();
include("index.php");
include("functions.php");
?>

<?php
include './header/headerview.php';
?>
    <div class="container card p-3">
    <h2>All members</h2>
        <button  type="button" class="btn btn-outline-secondary my-5 p-2"> <a href="form.php" class="text-dark">Add member</a> </button>

    <table class="table table-success table-striped">
        <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First name</th>
      <th scope="col">Last name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone number</th>
      <th scope="col">Password</th>
      <th scope="col"></th>
    </tr>
    </thead>
    <tbody>
    <?php
    $sql="select * from `members`";
    $result=mysqli_query($conn,$sql);
    if($result){
        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $firstname=$row['firstname'];
            $lastname=$row['lastname'];
            $email=$row['email'];
            $phone=$row['phonenumber'];
            $password=$row['password'];
            echo '
            <tr>
            <th scope="row">'.$id.'</th>
            <td>'.$firstname.'</td>
            <td>'.$lastname.'</td>
            <td>'.$email.'</td>
            <td>'.$phone.'</td>
            <td>'.$password.'</td>
            <td>
            <button  type="button" class="btn btn-outline-primary"><a href="update.php?updateid='.$id.'" class="text-dark">Update</a></button>
            <button  type="button" class="btn btn-outline-danger"><a href="delete.php?deleteid='.$id.'" class="text-dark">Delete</a></button>
             </td>
            </tr>
            ';
        }
    }

    
       
    ?>
    </tbody>
   
    </table>

    </div>
</body>
</html>