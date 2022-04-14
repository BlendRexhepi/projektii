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
        $img = $row['img'];
        $name = $row['name'];
        $cmimi = $row['cmimi'];
    }
}
?>
<form method="POST">
            <input type="text" name="img" class="form"  value="<?php echo $img ?>"><br>
            <input type="text" name="name" class="form"   value="<?php echo $name ?>"><br>
            <input type="text" name="cmimi" class="form"   value="<?php echo $cmimi ?>"><br>
             <input type="submit" value="update" name="update">
</form>
       </body>
</html>
   
 <?php

 if(isset($_POST['update'])){
     $img = $_POST['img'];
     $name = $_POST['name'];
     $cmimi = $_POST['cmimi'];

     $qry ="UPDATE oferta set img ='$img', name = '$name', cmimi ='$cmimi' WHERE id = $id";

     if(mysqli_query($conn ,$qry)){
         header('location:./dashboard/dashboard.php');
     }else{
         echo "error";
     }
 }
 ?>