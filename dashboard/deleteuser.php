<?php
include "../databaseconnection/db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = mysqli_query($conn, "DELETE FROM user WHERE id = '$id'");
    if($query){
     header("location:dashboard.php");
    }else{
     echo "<script>alert('Sorry delete query not work!')</script>";
    }
   }
?>