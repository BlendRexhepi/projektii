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
    height: 550px;
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
            <input type="text" name="name"  placeholder="name" id="name">
            <label style="color: white" for="name" id="nameMsg"></label>
            <input type="text" name="surname"   placeholder="surname" id="surname">
            <label style="color: white" for="surname" id="surnameMsg"></label>
            <input type="text" name="email"   placeholder="email" id="email">
            <label style="color: white" for="email" id="emailMsg"></label>
            <input type="text" name="username"  placeholder="username" id="username">
            <label style="color: white" for="username" id="usernameMsg"></label>
            <input type="password" name="password"  placeholder="password" id="password">
            <label style="color: white" for="password" id="passwordMsg"></label>
            </div>
           
            <input type="submit" name="register" value="register" class="btnn" id="registerButton">
</form>
</div>
<script>
var registerButton = document.getElementById("registerButton");
var nameMsg = document.getElementById("nameMsg");
var surnameMsg = document.getElementById("surnameMsg");
var emailMsg = document.getElementById("emailMsg");
var usernameMsg = document.getElementById("usernameMsg");
var passwordMsg = document.getElementById("passwordMsg");


var emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var usernameRegex = /\w+[._-]?\w+/;
var passwordRegex = /^[A-Z][a-z]{5}\d{3}[!*._-]{1}/;

registerButton.addEventListener("click", function (event) {
  var name = document.getElementById("name").value;
  var surname = document.getElementById("surname").value; 
  var email = document.getElementById("email").value;
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;
  
  if (name == "" || name == null) {
    nameMsg.innerText = "* Please fill the name field";
    event.preventDefault();
  }
  if (surname == "" || surname == null) {
    surnameMsg.innerText = "* Please fill the surname field";
    event.preventDefault();
  }
  //email validation
  if (email == "" || email == null) {
    emailMsg.innerText = "* Please fill the email field";
    event.preventDefault();
  } else {
    if (emailRegex.test(email)) {
      emailMsg.innerText = "";
    } else {
      emailMsg.innerText =
        "* Please fill the email field correctly";
      event.preventDefault();
    }
  }
  if (username == "" || username == null) {
    usernameMsg.innerText = "* Please fill the username field";
    event.preventDefault();
  } else {
    if (usernameRegex.test(username)) {
      usernameMsg.innerText = "";
    } else {
      usernameMsg.innerText =
        "* Please fill the username field correctly (ex. john123, 123john, john_john, john.123 etc)";
      event.preventDefault();
    }
  }

  //password validation
  if (password == "" || password == null) {
    passwordMsg.innerText = "* Please fill the password field";
    event.preventDefault();
  } else {
    if (passwordRegex.test(password)) {
      passwordMsg.innerText = "";
    } else {
      passwordMsg.innerText =
        "* Your password must contain  1 uppercase, 5 lowercase letters, 3 digits and 1 symbol [!*-_.]";
      event.preventDefault();
    }
  }
});

</script>
</body>
</html>