<?php
include '../databaseconnection/db.php';
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
    <input type="text" name="name" class="form" >
    <input type="text" name="desc" class="form"  placeholder="name">
    <input type="text" name="cmimi" class="form"  placeholder="cmimi">
    <input type="submit" value="submit" name="submit">
</form>


<?php
if(isset($_POST['submit'])){
    $img = $_POST['name'];
    $name = $_POST['desc'];
    $cmimi = $_POST['cmimi'];
    
    $qry ="INSERT INTO oferta values(null,'$name','$desc','$cmimi')";
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