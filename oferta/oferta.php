<?php
include "../header/header.php";

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
            top: 0;
            padding:0;
        }
        body{
           background:lightgray;
           width:100vw;
           height:100vh;
           flex-direction:row;
           display:flex;
        }
        .products{
            margin-bottom:50px;
            margin-top: 50px;
            width:30%;
            height:80%;
            margin-top:20px;
        
            display:flex;
            flex-direction:row;
        }
        .product{
           width:400px;
           min-height:40%;
           border:2px inset black;
           display:flex;
           flex-direction:column;
           margin:50px;
        }
        .btn {
           background-color: #199319;
           color: white;
           padding: 20px 150px;
           text-decoration: none;
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
              <img src="../view/cap.jpg"> 
              <h1><?php echo $row['name']; ?></h1>
              <p>  <?php echo $row['description'];  ?></p> 
           <p><?php echo $row['price']; ?></p>
                <a class="btn" href="../bookings/rezervo.php">REZERVO</a>
      </div>
    </div>
    
<?php
        }
        }
        ?>





</body>
</html>