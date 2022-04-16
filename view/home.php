<?php 
session_start();
  $hide="";
  if(!isset($_SESSION['username'])){
      header("location:../loginRegister/login.php");
  }else{
      if(isset($_SESSION['role'])){
          $role = $_SESSION['role'];
          if($role == "user"){
           $hide="hide";
          }
      }     

?>
<!DOCTYPE html>
<html lang="en">
<head>    
    <title>FlyWithMe.</title>
    <link rel="stylesheet" href="pro.css">
    <style>
        .hide{
            display:none;
        }
    </style>
</head>
<?php
include "../header/header.php";
?>
<body>
    <section class="banner">
       
        <div class="imgBx">
            <img src="ist.jpg" class="active">
            <img src="cap.jpg">
            <img src="com.jpg">

        </div>
        <div class="contentBx">
            <div class="active">
                <h2>OFERTE/Istanbul</h2>
                <p>Perfitoni nga ofertat e fundit</p>
                
                <a href="../oferta/oferta.php">ME SHUME</a>
            </div>
            <div>
                <h2>OFERTE/Capadocia</h2>
                <p>Perfitoni nga ofertat e fundit</p>
                <a href="../oferta/oferta.php">ME SHUME</a>
            </div>
            <div>
                <h2>OFERTE/Maldive</h2>
                <p>Perfitoni nga ofertat e fundit</p>
                <a href="../oferta/oferta.php">ME SHUME</a>
            </div>
        </div>
        <ul class="controls">
            <li onclick="PrevSlide();PrevSlideText();"></li>
            <li onclick="nextSlide();nextSlideText()"></li>
        </ul>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="#">Prishtine</a></li>
                        <li><a href="#">Ferizaj</a></li>
                        <li><a href="#">Prizren</a></li>
                        <li><a href="#">Mitrovic</a></li>


                    </ul>
                </div>
                <div class="footer-col">
                    <h4>get help</h4>
                    <ul>
                        <li><a href="#">+3894676161</a></li>
                        <li><a href="#">+3939884565</a></li>
                        <li><a href="#">+3659745856</a></li>
                        <li><a href="#">+3625954444</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>online</h4>
                    <ul>
                        <li><a href="#">FlyWithMe-facebook.com</a></li>
                        <li><a href="#">FlyWithMe-instagram.com</a></li>
                        <li><a href="#">FlyWithMe-twitter.com</a></li>
                        <li><a href="#">FlyWithMe-pinterest.com</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>follow us</h4>
                    <div class="social">
                        <a href="https://twitter.com/" ><img src="twitter.png" alt=""></a>
                        <a href="https://www.facebook.com/"><img src="facebook.png" alt=""></a>
                        <a href="https://www.instagram.com"><img src="instagram.png" alt=""></a>
                        <a href="https://www.pinterest.com"><img src="pinterest.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        
    </footer>
    <script src="pro.js"></script>
</div>
    <?php
  }
  ?>
</body>
</html>