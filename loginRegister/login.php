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
<body>
    <form action="login.php" method="POST">
        <input type="text" name="username"> <br> <br>
        <input type="password" name="password"> <br> <br>
        <input type="submit" name="loginBtn" value="Log In">
        <a href="register.php">register</a>
    </form>
    <?php 
    if(isset($_POST['loginBtn'])){
        if(empty($_POST['username']) || empty($_POST['password'])){
            echo "Fill All fields";
        }else{
            $username = $_POST['username'];
            $password = $_POST['password'];
             
            if($username == "bb" && $password=="bb"){
                session_start();
                $_SESSION['username']=$username;
                $_SESSION['role']="admin";
                header("location:home.php");
            }elseif($username == "nn" && $password=="nn"){
                session_start();
                $_SESSION['username']=$username;
                $_SESSION['role']="user";
                header("location:home.php");
            }else{
                echo "Username incorrect";
            }
        }
    }
    
    ?>
</body>
</html>

<?php
}
?>