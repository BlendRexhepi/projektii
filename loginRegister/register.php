<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   body{
     background-color: #92a8d1;
    }
    .form{
    width: 300px;
    height: 500px;
    background: linear-gradient(to top, rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%);
    position: absolute;
    top: 80px;
    right: 600px;
    border-radius: 10px;
    padding:25px ;

}
.form h2{
    width: 220px;
    font-family: sans-serif;
    text-align: center;
    color: blue;
    font-size: 22px; 
    background-color: white ;
    border-radius: 10px;
    margin: 2px;
    padding: 8px;
}
 .f input{
    width: 240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid white;
    border-top: none;
    border-right: none ;
    border-left: none;
    color: white;
    font-size: 15px;
    letter-spacing: 1px;
    margin-top: 30px;
    font-family: sans-serif;
}
.form input:focus{
    outline: none;
}
::placeholder{
    color: white;
    font-family:Arial ;
}
.btnn{
    width: 240px;
    height: 40px;
    background: white;
    margin-top: 30px;
    font-size: 22px;
    border-radius: 10px;
    cursor: pointer;
    color:blue;
}
.btnn:hover{
    background: white;
    color: white;
}
.form a{
    text-decoration: none;
    color: white;
}

</style>

    


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

    <body>

    <div class="form">
        <div class="f">
           <form  method="post">
            <h2>register Here</h2>
            <input type="text" name="name"  placeholder="name">
            <label style="color: white" for="name" id="nameMsg"></label>>
            <input type="text" name="surname"   placeholder="surname">
            <label style="color: white" for="surname" id="surnameMsg"></label>
            <input type="text" name="email"   placeholder="email">
            <label style="color: white" for="email" id="emailMsg"></label>
            <input type="text" name="username"  placeholder="username">
            <label style="color: white" for="username" id="usernameeMsg"></label>
            <input type="password" name="password"  placeholder="password">
            <label style="color: white" for="password" id="passworddMsg"></label>
            </div>
           
            <input type="submit" name="register" value="register" class="btnn">
</form>
</div>

</body>
</html>