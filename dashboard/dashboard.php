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
    <h3>User List</h3>
    <table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>surname</th>
        <th>email</th>
        <th>username</th>
        <th>password</th>
        <th>actions</th>
    </tr>
    <?php
       $sql = "SELECT * FROM user";
       $run = $conn->query($sql);
       if($run ->num_rows > 0){
           while($row = $run ->fetch_assoc()){   
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['surname']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['password']; ?></td>
        <td>
            <a href="addUser.php">add</a>
            <a href="editUser.php?id_user=<?php echo $row['id']; ?>">edit</a>
            <a href="deleteUser.php?delete_id=<?php echo $row['id']; ?>">delete</a>
        </td>
    </tr>
    <br>
    
<?php
   }
} 

     ?>
      </table> <br>

<h3>Lista e Ofertave</h3>
<table border="1">
<tr>
   <th>id</th>
   <th>name</th>
   <th>desc</th>
   <th>cmimi</th>
   <th>actions</th>
</tr>
<?php
  $sql1 = "SELECT * FROM oferta";
  $run = $conn->query($sql1);
  if($run ->num_rows > 0){
      while($row = $run ->fetch_assoc()){   
?>
<tr>
   <td><?php echo $row['id']; ?></td>
   <td><?php echo $row['name']; ?></td>
   <td><?php echo $row['desc']; ?></td>
   <td><?php echo $row['cmimi']; ?></td>
   <td>
        <a href="addOfert.php">shto Ofert</a>
       <a href="editOferta.php?id=<?php echo $row['id']; ?>">edit</a>
       <a href="deleteOferta.php?id=<?php echo $row['id']; ?>">delete</a>
   </td>
</tr>
<br>

<?php
}
} 

?>      
</table> 