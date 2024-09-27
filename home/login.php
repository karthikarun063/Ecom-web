<?php
    
    session_start();

    $conn = mysqli_connect("localhost","root","root","php_ecom");


    if(isset($_POST['login'])){
        $u_email = $_POST['email'];
        $u_password = $_POST['password'];

        $sql = "SELECT * from users Where email='".$u_email."' AND password ='".$u_password."'";

        $result = mysqli_query($conn,$sql);

        $row = mysqli_fetch_array($result);

        if($row['usertype'] == "user"){
            $_SESSION['$user_email'] = $u_email;
            $_SESSION['$usertype'] = "user";
            header("location:userpage.php");            
        }

        else if($row['usertype'] == "admin"){
            $_SESSION['$user_email'] = $u_email;
            $_SESSION['$usertype'] = "admin";
            header("location:../admin/adminpage.php");            
        }

        else{
            echo "Username or password is wrong";
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koodai: Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="my_form">
        <h2>Login form:</h2>
        <form action="" method="POST">
            <div class="input_deg">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="input_deg">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="input_deg">
                <input type="submit" name="login" value="login" >
            </div>
        </form>
    </div>
</body>
</html>