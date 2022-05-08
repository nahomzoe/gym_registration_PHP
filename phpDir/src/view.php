<?php
include 'index.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <title>My PHP project</title>
</head>
<body>
    <div class="container">
        <button  type="button" class="btn btn-outline-secondary my-5"> <a href="form.php" class="text-dark">Add member</a> </button>

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