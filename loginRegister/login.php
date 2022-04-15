<?php 
   session_start();
if(isset($_SESSION['username'])){
    header("location:../view/home.php");
}else{
   

?>

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
    height: 380px;
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
<body>
    <div class="form">
        <div class="f">
        <h2>login here</h2>
    <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="username" id="username"> 
        <label style="color: white" for="username" id="usernameMsg"></label>
        <input type="password" name="password" placeholder="password" id="password">
        <label style="color: white"  for="password" id="passwordMsg"></label>
        </div>
        <input type="submit" name="loginBtn" value="Log In" class="btnn" id="loginButton"><br>
       <br> <a href="register.php" class="link">dont have an account? Register</a>
    </form>
    </div>

    <?php 
    if(isset($_POST['loginBtn'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo "Fill All fields";
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
             
            if($username == "blend21" && $password=="Blendi987*"){
                session_start();
                $_SESSION['username']=$username;
                $_SESSION['role']="admin";
                header("location:../view/home.php");
            }elseif($username == "erblin11" && $password=="Erblin123*"){
                session_start();
                $_SESSION['username']=$username;
                $_SESSION['role']="user";
                header("location:../view/home.php");
            }else{
                echo "Username incorrect";
            }
        }
    }
    
    ?>
    <script>
        var loginButton = document.getElementById("loginButton");

var usernameMsg = document.getElementById("usernameMsg");
var passwordMsg = document.getElementById("passwordMsg");

var usernameRegex = /\w+[._-]?\w+/;
var passwordRegex = /^[A-Z][a-z]{5}\d{3}[!*._-]{1}/;

loginButton.addEventListener("click", function (event) {
  var username = document.getElementById("username").value;
  var password = document.getElementById("password").value;

  //username validation
  if (username == "" || username == null) {
    usernameMsg.innerText = "* Please fill the username field";
    event.preventDefault();
  } else {
    if (usernameRegex.test(username)) {
      usernameMsg.innerText = "";
    } else {
      usernameMsg.innerText =
        "* Please fill the username field correctly";
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
        "*Please fill the password field correctly";
      event.preventDefault();
    }
  }
});
    </script>
</body>
</html>

<?php
}
?>