<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlyWithMe</title>
    <link rel="stylesheet" href="pro.css">
</head>
<body>
    <header>
        <a href="#" class="logo">FlyWithMe.</a> 
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#section1">About us</a></li>
            <li><a href="#section2">Contact us</a></li>
            <li><button class="loginR" onclick="login()" >log in/Register</button></li>
              
          </ul>  
    </header>
       <section class="banner">
       
        <div class="imgBx">
            <img src="ist.jpg" class="active">
            <img src="cap.jpg">
            <img src="com.jpg">

        </div>
        <div class="form" id="form">
            <input type="text" name="usernameL" id="username" placeholder="username">
            <label style="color: white" for="username" id="usernameMsg"></label>
            <input type="password" name="passwordL" id="password" placeholder="password">
            <label style="color: white"  for="password" id="passwordMsg"></label>

            <button class="btnn" type="button" id="loginButton" >login</button>
           
            <p class="link" style="color: white;">Dont have an account?<br>
            <button class="signup" onclick="signup()" color white>signup</button>
            <button class="exit" onclick="exit()">exit</button>
                   
           </div>
           <div class="form1" id="form1" >
            <h2>register Here</h2>
            <input type="text" name="name" id="name" placeholder="name">
            <input type="text" name="email" id="email" placeholder="email">
            <label style="color: white" for="email" id="emailMsg"></label>
            <input type="text" name="username" id="usernamee" placeholder="username">
            <label style="color: white" for="username" id="usernameeMsg"></label>
            <input type="password" name="passwordL" id="passwordd" placeholder="password">
            <label style="color: white" for="password" id="passworddMsg"></label>

            <button class="btnn1" id="registerButton">register</button>
            <button class="exit1" onclick="exit1()">exit</button>
              
           </div>
        <div class="contentBx">
            <div class="active">
                <h2>OFERTE/Istanbul</h2>
                <p>Perfitoni nga ofertat e fundit</p>
                
                <a href="#">ME SHUME</a>
            </div>
            <div>
                <h2>OFERTE/Capadocia</h2>
                <p>Perfitoni nga ofertat e fundit</p>
                <a href="#">ME SHUME</a>
            </div>
            <div>
                <h2>OFERTE/Maldive</h2>
                <p>Perfitoni nga ofertat e fundit</p>
                <a href="#">ME SHUME</a>
            </div>
        </div>
        <ul class="controls">
            <li onclick="PrevSlide();PrevSlideText();"></li>
            <li onclick="nextSlide();nextSlideText()"></li>
        </ul>
     
        </section>
      <div id="section1">
        <div class="text">
            <h1>About us</h1>
             <p>FlyWithMe is a travel agnecy.<br>
               It offers travel packets in affordable prices for all clients   

             </p>
        </div>
     </div>
       
           <div id="section2">
                <div class="textt">
                    <h1>Contact us</h1>
                    <p>For more information Contact us in options below<br>
                    <pre>+3834555542    FlyWithMe@gmail.com</pre>  
                    
                    </p>
                </div>
            </div>
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
</body>
</html>