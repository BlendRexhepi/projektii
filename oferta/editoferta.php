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
$qry = "SELECT * FROM oferta where id ='$id'";
$run = $conn -> query($qry);
if($run-> num_rows > 0){
    while($row = $run->fetch_assoc()){
        $name = $row['name'];
        $description = $row['description'];
        $price = $row['price'];
   
    }
}
?>
<form method="POST">
            <input type="text" name="name"  value="<?php echo $name?>"><br>
            <input type="text" name="description"   value="<?php echo $description ?>"><br>
            <input type="text" name="price"    value="<?php echo $price?>"><br>
             <input type="submit" value="update" name="update">
</form>
       </body>
</html>
   
 <?php

 if(isset($_POST['update'])){
     $name = $_POST['name'];
     $description = $_POST['description'];
     $price = $_POST['price'];


     $qry ="UPDATE oferta set name ='$name', description='$description', price='$price' WHERE id = $id";

     if(mysqli_query($conn , $qry)){
         header('location:../dashboard/dashboard.php');
     }else{
         echo "error";
     }
 }
 ?>