<?php 
session_start();
$_SESSION['username']="";
session_destroy();
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tours and travel</title>

    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="stylee.css">

</head>
<body>
    
<!-- header section starts  -->

<header>

    <div id="menu-bar" class="fas fa-bars"></div>

    <a href="#" class="logo"><span>T</span>ravel</a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="packages.html">packages</a>
        <a href="#review">review</a>
        <a href="#contact">contact</a>
    </nav>

    <div class="icons">
        <i class="fas fa-search" id="search-btn"></i>
        <i class="img" id="login-btn"><img src="images/agent.png" class="avatar"  alt="avatar" ></i>
    </div>

    <form action="" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>
    </form>

</header>

<!-- header section ends -->

<!-- login form container  -->
<div class="login-form-container">
    <i class="fas fa-times" id="form-close"></i>
<div class="dropdown-item">
	<div class="imgBox" onclick="myFunction()">
		<img src="images/agent.png" alt="">
	</div>
	<div class="dropdown-content">
		<div class="content">
			<div class="name">
                
            </div>
			<div class="occupation">
                echo .$+SESSION['username'];
		</div>
		<ul class="links">
			<li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> My Profile</a></li>
			<li><a href="#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit Profile</a></li>
			<div class="divider"></div>
			<li><a href="#"><i class="fa fa-cogs" aria-hidden="true"></i> Settings</a></li>
			<li><a href="#"><i class="fa fa-question" aria-hidden="true"></i> Help</a></li>
			<div class="divider"></div>
			<li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>
		</ul>
	</div>
</div>
</div>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>adventure is worthwhile</h3>
        <p>dicover new places with us, adventure awaits</p>
        <a href="#" class="btn">discover more</a>
    </div>

    <div class="controls">
        <span class="vid-btn active" data-src="images/vid-1.mp4"></span>
        <span class="vid-btn" data-src="images/vid-2.mp4"></span>
        <span class="vid-btn" data-src="images/vid-3.mp4"></span>
        <span class="vid-btn" data-src="images/vid-4.mp4"></span>
        <span class="vid-btn" data-src="images/vid-5.mp4"></span>
    </div>

    <div class="video-container">
        <video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
    </div>

</section>

<!-- home section ends -->



<!-- review section starts  -->

<section class="review" id="review">

    <h1 class="heading">
        <span>r</span>
        <span>e</span>
        <span>v</span>
        <span>i</span>
        <span>e</span>
        <span>w</span>
    </h1>

    <div class="swiper-container review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic1.jpg" alt="">
                    <h3>Nihar</h3>
                    <p>I enjoy the stay in NH touring hotel, room is new, clean, bright, staffs are friendly, breakfast is nice with a lot variety, and very fresh</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic2.jfif" alt="">
                    <h3>Pravid</h3>
                    <p>Good website</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic3.jfif" alt="">
                    <h3>Sheljin</h3>
                    <p>Good website!</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="box">
                    <img src="images/pic4.jfif" alt="">
                    <h3>Vinay</h3>
                    <p>Good website</p>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

<!-- review section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">
    
    <h1 class="heading">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>

    <div class="row">

        <div class="image">
            <img src="images/contact-img.svg" alt="">
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="name">
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <input type="number" placeholder="number">
                <input type="text" placeholder="subject">
            </div>
            <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
            <input type="submit" class="btn" value="send message">
        </form>

    </div>
    
</section>

<!-- contact section ends -->

<!-- brand section  -->
<section class="brand-container">

    <div class="swiper-container brand-slider">
      
    </div>

</section>

<!-- footer section  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>MINI PROJECT TEAM 007</p>
        </div>
        <div class="box">
            <h3>branch locations</h3>
            <a href="#">india</a>
            <a href="#">USA</a>
            <a href="#">japan</a>
            <a href="#">france</a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">book</a>
            <a href="#">packages</a>
            <a href="#">services</a>
            <a href="#">gallery</a>
            <a href="#">review</a>
            <a href="#">contact</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">twitter</a>
            <a href="#">linkedin</a>
        </div>

    </div>

    <h1 class="credit"> created by <span> mini project team 7</span> | all rights reserved! </h1>

</section>
















<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="script.js">
    function myFunction() {
  var dropdownContent = document.querySelector('.dropdown-content');
  dropdownContent.classList.toggle('dropdown-toggle');
}
</script>

</body>
</html>
?>