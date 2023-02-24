<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>agent post</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/stylesmk.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.html">home</a>
      <a href="about.html">about</a>
      <a href="packages.html">package</a>
      <a href="book.html">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/tours.webp) no-repeat">
   <h1>POST DETAILS OF TRIP</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">POST DETAILS OF TRIP</h1>

   <form action="agentbook.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>TOURIST PLACE NAME :</span>
            <input type="text" placeholder="enter place name" name="name">
         </div>
         <div class="inputBox">
            <span>TOURIST DETAILS</span>
            <input type="text" placeholder="Enter tour details" name="email">
         </div>
         <div class="inputBox">
            <span>PER HEAD PRICE</span>
            <input type="number" placeholder="enter the price " name="phone">
         </div>
         <div class="inputBox">
            <span>EXTRA ACTIVITIES</span>
            <input type="text" placeholder="add extra activities" name="address">
         </div>
         
         <div class="inputBox">
            <span>GOLD,SILVER,BRONZE</span>
            <input type="text" placeholder="ENTER WHICH CATEGORY" name="guests">
         </div>

         <div class="inputBox">
            <span>IMAGES</span>
            <input type="file" placeholder="add images" name="image" accept="image/jpg, image/jpeg, image/png">
         </div>
         
      </div>

      <input type="submit" value="post" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.html"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.html"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.html"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.html"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> about us</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

   </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/scriptsmk.js"></script>

</body>
</html>