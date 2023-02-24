<?php

    if (isset($_POST['fullname']) && isset($_POST['username']) &&isset($_POST['password']) &&
        isset($_POST['gender']) && isset($_POST['user']) && isset($_POST['email']) 
        && isset($_POST['phone'])) {
        
        $fullname = $_POST['fullname'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $user = $_POST['user'];

        $host = "localhost";
        $dbUsername = "root";
        $dbPassword = "";
        $dbName = "tours_travels";

        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);

        if ($conn->connect_error) {
            die('Could not connect to the database.');
        }
        else {
            $Select = "SELECT email FROM user_tbl WHERE email = ? LIMIT 1";
            $Insert = "INSERT INTO user_tbl(fullname,username,email, phone, password, gender,usertype) values(?,?,?,?,?,?,?)";

            $stmt = $conn->prepare($Select);
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $stmt->bind_result($resultEmail);
            $stmt->store_result();
            $stmt->fetch();
            $rnum = $stmt->num_rows;

            if ($rnum == 0) {
                $stmt->close();

                $stmt = $conn->prepare($Insert);
                $stmt->bind_param("sssisss",$fullname,$username, $email, $phone, $password, $gender,$user);
                if ($stmt->execute()) {
                    header('location:home.html');
                }
                else {
                    echo $stmt->error;
                }
            }
            else {
                echo "Someone already registers using this email.";
            }
            $stmt->close();
            $conn->close();
        }
    }
    else {
        echo "All field are required.";
        die();
    }

?>