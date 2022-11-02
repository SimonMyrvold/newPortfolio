<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="./css/main.css">

    </head>
    <body onload="showevent()">

        <img class="background-img" src="img/backgroundImage.jpg" alt="">
    
        <section id="header">
                
            <nav>
                <div class="reveal-nav">
                    <ul class="topnav" id="dropdownClick">
                        <li class="dropdownIcon"><a href="javascript:void(0);" onclick="dropdownMenu()">&#9776;</a></li>
                        <li class="topnav-right"><a href="#header">Home</a></li>
                        <li class="topnav-right"><a href="#about-me-achor">About me</a></li>
                        <li class="topnav-right"><a href="#projekt-section">Portfolio</a></li>
                        
                    </ul>
                </div>
            </nav>
    
        </section>
    
        <div class="nametag">
            <h1>Simon Myrvold </h1>
            <p>Junior web developer from Sjöbo, Sweden</p>
        </div>
    
        <a href="" id="about-me-achor">a</a>
    
    <div class="om-mig">
    
        <section id="om-mig">
    
            
    
            <h1 class="om-mig-title">About Me</h1>
            <div id="container-om-mig" width="100%">
                <img class="profilbild" src="img/profil.png" alt="">
                <p>I'm a student from Sjöbo, Sweden with an urge to create and explore on the web. I'm looking forward to the next couple of years ahead, both to learn and get experience with my end goal that is creating lasting friendships with the people I will be working with.</p>
            </div>
    
        </section>
        
        <section id="kontakt-section">
    
            <div class="kontakt">
                <div class="kontakt-columns">
                    <a href="https://twitter.com/Simon_Myrvold">
                    <div class="kontakt-columns-content">
                        <i class="fab fa-twitter fa-7x"></i>
                        <h2>Twitter</h2>
                    </div>
                    </a>
                </div>
                <div class="kontakt-columns">
                    <a href="https://www.instagram.com/simon_myrvold/">
                    <div class="kontakt-columns-content">
                        <i class="fab fa-instagram fa-7x"></i>
                        <h2>Instagram</h2>
                    </div>
                    </a>
                </div>
                <div class="kontakt-columns">
                    <a href="https://www.linkedin.com/in/simon-myrvold-9766a0218/">
                    <div class="kontakt-columns-content">
                        <i class="fab fa-linkedin fa-7x"></i>
                        <h2>Linkedin</h2>
                    </div>
                    </a>
                </div>
                <div class="kontakt-columns">
                    <a href="https://github.com/">
                    <div class="kontakt-columns-content">
                        <i class="fab fa-github fa-7x"></i>
                        <h2>Github</h2>
                    </div>
                    </a>
                </div>
            </div>
    
        </section>
    
        <div id="kontakt-text">
            <h2><a href="mailto:simon.johan.myrvold@gmail.com">simon.johan.myrvold@gmail.com</a></h2>
            <h3>Phone number +46 (0)723728322</h3>
        </div>
    
    </div>
    
        <section id="projekt-section">
    
            <h1 class="projekt-title">Portfolio </h1>
    
            <div class="projekt">
                <div class="projekt-columns">
                    <div class="projekt-columns-content">
                        <a href="Better-Call-Lucas-M-2/src/html/html.html" target="_blank">
                        <img src="img/BetterCallLucas.PNG" alt="" width="100%" height="250px">
                        <p>Better Call Lucas</p>
                        </a>
                    </div>
                </div>
                <div class="projekt-columns">
                    <div class="projekt-columns-content">
                        <a href="GFX/index.html" target="_blank">
                        <img src="img/GFX.PNG" alt="" width="100%" height="250px">
                        <p>Portfolio 2 </p>
                        </a>
                    </div>
                </div>
              <!--
                <div class="projekt-columns">
                    <div class="projekt-columns-content">
                        <img src="https://picsum.photos/350/200/?random=3" alt="" width="100%" height="250px">
                        <p>Portfolio 3</p>
                    </div>
                </div>
                <div class="projekt-columns">
                    <div class="projekt-columns-content">
                        <img src="https://picsum.photos/350/200/?random=4" alt="" width="100%" height="250px">
                        <p>Portfolio 4</p>
                    </div>
                </div>
                <div class="projekt-columns">
                    <div class="projekt-columns-content">
                        <img src="https://picsum.photos/350/200/?random=5" alt="" width="100%" height="250px">
                        <p>Portfolio 5</p>
                    </div>
                </div>
                <div class="projekt-columns">
                    <div class="projekt-columns-content">
                        <img src="https://picsum.photos/350/200/?random=6" alt="" width="100%" height="250px">
                        <p>Portfolio 6</p>
                    </div>
                </div>
            </div> -->
    
        </section>
    
        <section id="kunskaper-section">
    
                <div class="kunskaper">
                    <div class="kunskaper-columns">
                        <div class="kunskaper-columns-content">
                            <i class="fab fa-html5 fa-7x"></i>
                            <h2>HTML</h2>
                        </div>
                    </div>
                    <div class="kunskaper-columns">
                        <div class="kunskaper-columns-content">
                            <i class="fab fa-css3-alt fa-7x"></i>
                            <h2>CSS</h2>
                        </div>
                    </div>
                    <div class="kunskaper-columns">
                        <div class="kunskaper-columns-content">
                            <i class="fab fa-php fa-7x"></i>
                            <h2>PHP</h2>
                        </div>
                    </div>
                    <div class="kunskaper-columns">
                        <div class="kunskaper-columns-content">
                            <i class="fab fa-bootstrap fa-7x"></i>
                            <h2>Bootstrap</h2>
                        </div>
                    </div>
                </div>
    
        </section>
    
        <section id="footer">
    
            <div class="footer">
    
    
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="far fa-envelope"></i>
              
              <p class="footer-text"> SimonMyrvold </p>
            </div>
        
        </section>
    
    <script src="Main.js"></script>
    </body>
</html>
