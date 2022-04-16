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
            <a href="adduser.php">add</a>
            <a href="edituser.php?id=<?php echo $row['id']; ?>">edit</a>
            <a href="deleteuser.php?id=<?php echo $row['id']; ?>">delete</a>
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
   <td><?php echo $row['description']; ?></td>
   <td><?php echo $row['price']; ?></td>
   <td>
        <a href="../oferta/addoferta.php">shto Ofert</a>
       <a href="../oferta/editoferta.php?id=<?php echo $row['id']; ?>">edit</a>
       <a href="../oferta/deleteoferta.php?id=<?php echo $row['id']; ?>">delete</a>
   </td>
</tr>
<br>

<?php
}
} 

?>      
</table> 
<h3>bookings</h3>
    <table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>surname</th>
        <th>email</th>
        <th>username</th>
        <th>phone number</th>
        <th>oferta</th>
        <th>actions</th>
    </tr>
    <?php
       $sql = "SELECT * FROM bookings";
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
        <td><?php echo $row['phone']; ?></td>
        <td><?php echo $row['oferta_name']; ?></td>
        <td>
            <a href="../bookings/addbooking.php">add</a>
            <a href="../bookings/editbooking.php?id=<?php echo $row['id']; ?>">edit</a>
            <a href="../bookings/deletebooking.php?id=<?php echo $row['id']; ?>">delete</a>
        </td>
    </tr>
    <br>
    
<?php
   }
} 

     ?>
      </table> <br>
      <h3>aboutus</h3>
    <table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>desc</th>
        <th>actions</th>
    </tr>
    <?php
       $sql = "SELECT * FROM aboutus";
       $run = $conn->query($sql);
       if($run ->num_rows > 0){
           while($row = $run ->fetch_assoc()){   
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['description']; ?></td>
  
        <td>
            <a href="../About us/add.php">add</a>
            <a href="../About us/edit.php?id=<?php echo $row['id']; ?>">edit</a>
            <a href="../About us/delete.php?id=<?php echo $row['id']; ?>">delete</a>
        </td>
    </tr>
    <br>
    
<?php
   }
} 

     ?>
      </table> <br>
      <h3>contactus</h3>
    <table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>desc</th>
        <th>actions</th>
    </tr>
    <?php
       $sql = "SELECT * FROM contactus";
       $run = $conn->query($sql);
       if($run ->num_rows > 0){
           while($row = $run ->fetch_assoc()){   
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['description']; ?></td>
  
        <td>
            <a href="../Contact us/add.php">add</a>
            <a href="../Contact us/edit.php?id=<?php echo $row['id']; ?>">edit</a>
            <a href="../Contact us/delete.php?id=<?php echo $row['id']; ?>">delete</a>
        </td>
    </tr>
    <br>
    
<?php
   }
} 

     ?>
      </table> <br>
      <h3>News</h3>
    <table border="1">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>desc</th>
        <th>actions</th>
    </tr>
    <?php
       $sql = "SELECT * FROM  news";
       $run = $conn->query($sql);
       if($run ->num_rows > 0){
           while($row = $run ->fetch_assoc()){   
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['description']; ?></td>
  
        <td>
            <a href="../news/add.php">add</a>
            <a href="../news/edit.php?id=<?php echo $row['id']; ?>">edit</a>
            <a href="../news/delete.php?id=<?php echo $row['id']; ?>">delete</a>
        </td>
    </tr>
    <br>
    
<?php
   }
} 

     ?>
      </table> <br>