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
    <style>

       *{
            margin:0;
            padding:0;
        }
        body{
           width:100vw;
           height:100vh;
           flex-direction:row;
           display:flex;
        }
        .products{
            width:30%;
            height:80%;
            margin-top:20px;
            border:2px inset indigo;
            display:flex;
            flex-direction:row;
        }
        .product{
           width:400px;
           min-height:40%;
           border:2px inset lightgray;
           display:flex;
           flex-direction:column;
           margin:50px;
        }
         
      
    </style>
   <body>
       <?php
    $sql = "SELECT * FROM oferta ";
    $run = $conn->query($sql);
    if($run ->num_rows > 0){
        while($row = $run ->fetch_assoc()){ ?>
    
    <div class="products">
      <div class="product">
              <img src="cap.jpg"> 
         <p> <?php echo $row['name']; ?></p>
            <h1>  <?php echo $row['desc'];  ?></h1> 
           <p><?php echo $row['cmimi']; ?></p>
                <a href="../bookings/rezervo.php">rezervo</a>
      </div>
    </div>
    
<?php
        }
        }
        ?>





</body>
</html>