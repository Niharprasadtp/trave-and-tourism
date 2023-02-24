<?php


if (isset($_POST['password']) && isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
   
    //database connection

    $con = new mysqli("localhost","root","","tours_travels");
    if($con->connect_error){
        die("Failed to connect : ".$con->connect_error);
    }else {
        $stmt = $con->prepare("select*from user_tbl where email=?");
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt_result=$stmt->get_result();
        if($stmt_result->num_rows > 0){
            $data=$stmt_result->fetch_assoc();
            if($data['password']==$password){
                if($data['email']=='admin@gmail.com'){
                    $_SESSION['email']=$email;
                    header('location:admin/index.php');
                }
                elseif($data['usertype']=='a'){

                    
                
            
                        
                        echo"<h1>login sucessfully</h2>";

                        header('location:agentmodule.php');
                    }else{
                        header('location:customer.html');
                    }
                
                }
    else{
                echo"<h1>Invalid Email or password</h2>";
            }

        }else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    }
}
?>
