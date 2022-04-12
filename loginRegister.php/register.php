<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<?php 
include "../databaseconnection/databaseConnection.php";

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($conn, "INSERT INTO `user` VALUES('','$name','$surname','$email','$username','$password')");
    echo'<script type="text/javascript">
          alert("register succes")
          window.location="login.php"
          </script>';

}
?>


    <form  method="post">
            <h2>register Here</h2>
            <input type="text" name="name" class="form" placeholder="name">
            <input type="text" name="surname" class="form"  placeholder="surname">
            <input type="text" name="email" class="form"  placeholder="email">
            <input type="text" name="username" class="form"  placeholder="username">
            <input type="password" name="password" class="form"  placeholder="password">
            

            <input type="submit" name="register" value="register">
</form>
</div>

</body>
</html>