<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial;
}
    header{ 
   position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    display: flex;
    justify-content: space-between;
    z-index: 10000;
    padding: 10px 100px;
}
header .logo{
    position: relative;
    color: #fff;
    font-weight: 700;
    font-size: 2em;
    text-decoration: none;
}
header ul{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
header ul li{
    position: relative;
    list-style: none;
    margin-left: 40px;
}
header ul li a{
    color: #fff;
    text-decoration: none;
    
}
</style>
<body>
<header>
        <a href="#" class="logo">FlyWithMe.</a> 
        <ul id>
            <li><a href="../view/home.php">Home</a></li>
            <li><a href="../About us/about.php">About us</a></li>
            <li><a href="../Contact us/contactus.php">Contact us</a></li>
            <li><a href="../news/news.php">News</a></li>
            <li><a href="../oferta/oferta.php">Ofertat</a></li>
            <li><a class="<?php echo $hide?>" href="../dashboard/dashboard.php">Dashboard</a></li>
            <li><a href="../loginRegister/logout.php">LOG OUT</a></li>
                
        </ul>  
       
    </header>
</body>
</html>