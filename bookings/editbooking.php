<?php
include "../databaseconnection/db.php";
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

<?php
$id = $_GET['id'];
$qry = "SELECT * FROM bookings where id ='$id'";
$run = $conn -> query($qry);
if($run-> num_rows > 0){
    while($row = $run->fetch_assoc()){
        $name = $row['name'];
        $surname = $row['surname'];
        $email = $row['email'];
        $username = $row['username'];
        $phonenumber = $row['phone_number'];
        $oferta = $row['oferta'];
    }
}
?>
<form method="POST">
            <input type="text" name="name" class="form"  value="<?php echo $name?>"><br>
            <input type="text" name="surname" class="form"   value="<?php echo $surname ?>"><br>
            <input type="text" name="email" class="form"   value="<?php echo $email ?>"><br>
            <input type="text" name="username" class="form"   value="<?php echo $username ?>"><br>
            <input type="password" name="password" class="form"   value="<?php echo $phonenumber ?>"><br>
            <input type="password" name="password" class="form"   value="<?php echo $oferta ?>"><br>
             <input type="submit" value="update" name="update">
</form>
       </body>
</html>
   
 <?php

 if(isset($_POST['update'])){
     $name = $_POST['name'];
     $surname = $_POST['surname'];
     $email = $_POST['email'];
     $username = $_POST['username'];
     $phonenumber = $_POST['phone_number'];
     $oferta = $_POST['oferta'];

     $qry ="UPDATE bookings set name ='$name', surname = '$surname', email ='$email', username ='$username', phone_number='$phonenumber', oferta ='$oferta'    WHERE id = $id";

     if(mysqli_query($conn ,$qry)){
         header('location:../dashboard/dashboard.php');
     }else{
         echo "error";
     }
 }
 ?>