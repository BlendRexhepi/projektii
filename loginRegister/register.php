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
include "../databaseconnection/db.php";

$errorn=$errors=$errore=$erroru=$errorp="";

if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['email']) && isset($_POST['username']) && isset($_POST['password'])){
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

if(empty($name)){
    $error="name field is required  ";
}
if(empty($surname)){
    $errors="surname field is required";
}
if(empty($email)){
    $errore="email field is required";
}else{
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errore="email is invalid";
    }
}
if(empty($username)){
    $erroru="username field is required";
}else{
    if(!preg_match("/\w+[._-]?\w+/", $username)){
        $erroru="username is invalid";
    }
}
if(empty($password)){
    $errorp="password field is required";
}else{
    if(!preg_match("/^[A-Z][a-z]{5}\d{3}[!*._-]{1}/", $password)){
        $errorp="password is invalid";
    }
}
if($errorn!='name field is required' && $errors!='surname field is required' && $errore!='email field is required' && $errore!='email is invalid' && $erroru!="username field is required" && $erroru!="username is invalid" && $errorp!="password field is required" && $errorp!="password is invalid"){
    mysqli_query($conn, "INSERT INTO `user` VALUES('','$name','$surname','$email','$username','$password')");
   echo'<script type="text/javascript">
         alert("register succes")
         window.location="login.php"
         </script>';
   }

}
?>



<div class="form1" id="form1" >
    <p style="color: red">
        <?php if(isset($errorn)){
            echo $errorn;
        }
        if(isset($errors)){
            echo $errors;
        }
        if(isset($errore)){
            echo $errore;
        }
        if(isset($erroru)){
            echo $erroru;
        }
        if(isset($errorp)){
            echo $errorp;
        }
            ?>
    </p>
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