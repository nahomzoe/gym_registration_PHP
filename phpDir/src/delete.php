<?php
include 'index.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="delete from `members` where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfull";
        header('location:view.php');

    }else {
        die(mysqli_error($conn));
    }
}
?>