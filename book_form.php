<?php

   $connection = mysqli_connect('localhost','root','','tours_travels');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $arrivals = $_POST['arrivals'];
      $leaving = $_POST['leaving'];

      $request = " insert into book_form(name, email, phone, address, location, guests, arrivals, leaving) values('$name','$email','$phone','$address','$location','$guests','$arrivals','$leaving') ";
      mysqli_query($connection, $request);
      echo 'Booked Successfully';
      header('location:book.html'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>