<?php
include '../databaseConnection/db.php'
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
<form method="POST">
    <input type="text" name="name" class="form" placeholder="name">
    <input type="text" name="surname" class="form"  placeholder="surname">
    <input type="text" name="email" class="form"  placeholder="email">
    <input type="text" name="username" class="form"  placeholder="username">
    <input type="password" name="password" class="form"  placeholder="password">
    <input type="submit" value="submit" name="submit">
</form>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $qry ="INSERT INTO user values(null,'$name','$surname','$email','$username','$password')";
    if(mysqli_query($conn, $qry)){
        header('location:dashboard.php');
    }
    else{
        echo "error";
    }
}
?>
</body>
</html>
