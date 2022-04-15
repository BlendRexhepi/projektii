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
<style>

#section1{
    position: relative;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    flex-direction: row;
    width:100%;
    height: 800px;
    background:black;
 }
 .text{
    width: 65%;
    height: 80%;
    margin-top: auto;
    color: white;
}
</style>
   <body>
       <?php
    $sql = "SELECT * FROM news ";
    $run = $conn->query($sql);
    if($run ->num_rows > 0){
        while($row = $run ->fetch_assoc()){ ?>
    
    <div id="section1">
            <div class="text">
                <h1><?php echo $row['name'];?></h1>
                <p>   <?php echo $row['desc'];?>  </p>
            </div>
        </div>
    
<?php
        }
        }
        ?>





</body>
</html>