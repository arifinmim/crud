<?php
include 'connect.php';
if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql="DELETE FROM `description` WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        //echo "Deleted successfully";
        header('localhost:display.php');
    }else{
        die(mysqli_error($conn));
    }
}
?>