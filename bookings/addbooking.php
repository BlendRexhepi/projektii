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
    <input type="text" name="phone" class="form"  placeholder="phone number">
    <input type="text" name="oferta_name" class="form"  placeholder="oferta">
    <input type="submit" value="submit" name="submit">
</form>


<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $phone = $_POST['phone'];
    $oferta_name = $_POST['oferta_name'];
    
    $qry ="INSERT INTO bookings values(null,'$name','$surname','$email','$username','$phone','$oferta_name')";
    if(mysqli_query($conn, $qry)){
        echo'<script type="text/javascript">
          alert("booking succesfully")
          window.location="../dashboard/dashboard.php"
          </script>';
    }
    else{
        echo "error";
    }
}
?>
</body>
</html>