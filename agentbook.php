<?php

   $connection = mysqli_connect('localhost','root','','tours_travels');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $address = $_POST['address'];
      $guests = $_POST['guests'];
      $image= $_FILES['image']['name'];
      $image_tmp_name= $_FILES['image']['tmp_name'];
      $image_folder= 'uploaded_img/'.$image;

      $request = " insert into agentbook(destination, tourdetails, price, xtra, gsb, image) values('$name','$email','$phone','$address','$guests','$image') ";
      mysqli_query($connection, $request);
      if($request){
         move_uploaded_file($image_tmp_name,$image_folder);
         echo 'added Successfully';
      header('location:agentmodule.php'); 
      }else{
         echo 'something went wrong please try again!';
      }

   }else{
      echo 'something went wrong please try again!';
   }

?>