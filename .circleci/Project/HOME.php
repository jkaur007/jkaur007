<?php
define("serverName", "localhost");  //Our Computer: localhost, 127.0.0.1
define("database", "project");
define("username", "datingUser");
define("password", "datingUser");

$connection = new mysqli(serverName, username, password, database);

?>
<!DOCTYPE html>
<html lang="en-CA">
<head>
<title>welcome and features page</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <style>
        body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}

        h1,h5,h6{
            background-color: #4d4d4d;
            color: #f5c6cb;
            text-align: center;
            font-size: 40px;

        }
        h2,h3,h4,h5,h6{  background-color: #4d4d4d;
            color: #6bebd1;
            text-align: center;
            font-size: 26px;
        }
        p{  text-align: center;
            font-size: 20px;
        }
        a {
            font-size: 20px;
            background-color: gray;
            text-align: center;
             text-decoration: none;
            display: inline-block;
             padding: 14px 20px;

         }

        a:hover {
            background-color: #ddd;
            color: black;
        }

        .reg,.log,.prem{
            background-color: purple;
            color: white;
            float: right;
        }
        * {box-sizing:border-box}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {   background-color: black;
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 20%;
            border-radius: 1px 0 0 1px;

        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover,prem:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }
     </style>
</head>
<body>
<!-- header -->
<header>
<nav class="pill-nav">
        <a class="active" href="#home">Home</a>
        <a href="#aboutUs">ABOUT US</a>
        <a href="#security">SECURITY AND PRIVACY</a>
        <a href="#CONTACTUS">CONTACT US</a>
    </nav>
<aside>
    <a href="register.php" class="reg"> REGISTER &raquo;</a>
    <a href="login.html" class="log">LOGIN &raquo;</a>
    <a href="payment.php" class="prem">PREMIUM &raquo;</a>
</aside>
<h1>welcome to our dating aap for finding a partner!
<br>
    start a new beginning with us
</h1>
<div><h2>different membership offers:</h2><p><hr>
    <h3> without login<br></h3>
        <p>o  View Profiles.<br>
            o  Search.<br></p><hr>
       <h4>•in regular membership (registered):<br></h4>
    <p>o Modify their own profile (personal info, images, whether to receive<br>
        notification’s, add photo…)<br>
        o Send Winks<br>
        o Send Messages<br></p><hr>

    <h5> •in a premium user:<br></h5>
    <p>  o Have a favorite List<br>
        o See if message is read or winks read.<br>
        o See if someone added/removed them to their favorite list<br><hr>

    </p></div>
<!-- Slideshow container -->
<div class="slideshow-container">

    <!-- Full-width images with number and caption text -->
    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/img/decorimage2.webp" style="width:80%">

    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/img/decorimage1.jpg.webp" style="width:80%">

    </div>

    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/img/decorimage3.webp" style="width:80%">

    </div>
    <div class="mySlides fade">
        <div class="numbertext"></div>
        <img src="assets/img/decorimage4.webp" style="width:80%">

    </div>
    <!-- Next and previous buttons -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>
    <body class="w3-light-grey">
    <!-- w3-content defines a container for fixed size centered content,
    and is wrapped around the whole page content, except for the footer in this example -->
    <div class="w3-content" style="max-width:1400px">

        <h1>Posts worldwide <span class="w3-tag"></span></h1>
        <p>for more login with us</p>

        <!-- Grid -->
        <div class="w3-row">
            <!-- Blog entries -->
            <div class="w3-col l8 s12">
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="assets/img/p1.jpg" alt="Nature" style="width:100%">
                    <div class="w3-container">
                        <h3><b>SEA</b></h3>
                        <h5>Title description, <span class="w3-opacity">April 7, 2021</span></h5>
                    </div>

                    <div class="w3-container">
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                            tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-tag">0</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <!-- Blog entry -->
                <div class="w3-card-4 w3-margin w3-white">
                    <img src="assets/img/p2.jpg" alt="Norway" style="width:100%">
                    <div class="w3-container">
                        <h3><b>Match image</b></h3>
                        <h5>Title description, <span class="w3-opacity">April 2, 2021</span></h5>
                    </div>

                    <div class="w3-container">
                        <p>Mauris neque quam, fermentum ut nisl vitae, convallis maximus nisl. Sed mattis nunc id lorem euismod placerat. Vivamus porttitor magna enim, ac accumsan tortor cursus at. Phasellus sed ultricies mi non congue ullam corper. Praesent tincidunt sed
                            tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
                        <div class="w3-row">
                            <div class="w3-col m8 s12">
                                <p><button class="w3-button w3-padding-large w3-white w3-border"><b>READ MORE »</b></button></p>
                            </div>
                            <div class="w3-col m4 w3-hide-small">
                                <p><span class="w3-padding-large w3-right"><b>Comments  </b> <span class="w3-badge">2</span></span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END BLOG ENTRIES -->
            </div>

            <!-- Introduction menu -->
            <div class="w3-col l4">
                <!-- About Card -->
                <div class="w3-card w3-margin w3-margin-top">
                    <img src="assets/img/avataaars2.svg" style="width:50%">
                    <div class="w3-container w3-white">
                        <h4><b>My Name</b></h4>
                        <p>Just me, myself and I, exploring the universe of knownment. I have a heart of love and a interest of lorem ipsum and mauris neque quam . I want to share my world with you.s0,follow me</p>
                    </div>
                </div><hr>

                <!-- Posts -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Popular Posts</h4>
                    </div>
                    <ul class="w3-ul w3-hoverable w3-white">
                        <li class="w3-padding-16">
                            <img src="assets/img/p2.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Lorem</span><br>
                            <span>Sed mattis nunc</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="assets/img/p3.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Ipsum</span><br>
                            <span>Praes tinci sed</span>
                        </li>
                        <li class="w3-padding-16">
                            <img src="assets/img/p5.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Dorum</span><br>
                            <span>Ultricies congue</span>
                        </li>
                        <li class="w3-padding-16 w3-hide-medium w3-hide-small">
                            <img src="assets/img/p6.jpg" alt="Image" class="w3-left w3-margin-right" style="width:50px">
                            <span class="w3-large">Mingsum</span><br>
                            <span>Lorem ipsum dipsum</span>
                        </li>
                    </ul>
                </div>
                <hr>

                <!-- Labels / tags -->
                <div class="w3-card w3-margin">
                    <div class="w3-container w3-padding">
                        <h4>Tags</h4>
                    </div>
                    <div class="w3-container w3-white">
                        <p><span class="w3-tag w3-black w3-margin-bottom">Travel</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">New York</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">London</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">IKEA</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">NORWAY</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">DIY</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Baby</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Family</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">News</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Clothing</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Shopping</span>
                            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Sports</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Games</span>
                        </p>
                    </div>
        </div><br>
    </div>
    <footer class="w3-container w3-dark-grey w3-padding-32 w3-margin-top">
        <button class="w3-button w3-black w3-disabled w3-padding-large w3-margin-bottom">Previous</button>
        <button class="w3-button w3-black w3-padding-large w3-margin-bottom">Next »</button>
        <p>Powered by JASMINE</a></p>
    </footer>
<script src="js/slideshow.js"></script>
<footer>
    <h5 id="security">SECURITY</h5>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis lobortis tellus nec lectus egestas rutrum. Duis porttitor ipsum non ex dignissim dictum. Mauris eleifend suscipit elementum. Curabitur nec felis aliquet, sodales orci ut, dignissim massa. Quisque ut nulla pharetra, semper nulla euismod, molestie sapien. Nunc ut justo id lectus lobortis congue eu molestie orci. Duis tincidunt libero eu iaculis imperdiet. Nam id odio ac tortor egestas hendrerit non in augue. Sed tempus finibus placerat. Suspendisse mauris nisl, rhoncus ut ipsum ac, varius mollis arcu. Nam fringilla risus vitae gravida lacinia. Vestibulum in tortor sed mi auctor sodales vitae in enim. Aliquam erat volutpat.</p>

<h6 id="aboutUs">ABOUT US</h6>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
    <a href="contactme.php" id="CONTACTUS">CONTACT US</a>
</footer>
</body>
</html>