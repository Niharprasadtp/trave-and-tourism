<?php
$connection=mysqli_connect("localhost","root","","tours_travels");
$fullname=$_POST["fullname"];
$username=$_POST["username"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$password=$_POST["password"];
$confirm=$_POST["confirm"];
$gender=$_POST["gender"];
echo $fullname;
echo $username;
echo $email;
echo $phone;
echo $password;
echo $confirm;
echo $gender;

$sql="insert into user_tbl(fullname,username,email,phone,password,confirm,gender)
value('$fullname','$username','$email','$phone','$password','$confirm','$gender')";
echo $sql;



mysqli_query($connection,$sql);
?>
