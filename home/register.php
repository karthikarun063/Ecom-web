<?php
    $conn = mysqli_connect('localhost', 'root', 'root', 'php_ecom');


    if(isset($_POST['register'])){
        $u_name = $_POST['name'];
        $u_email = $_POST['email'];
        $u_phone = $_POST['phone'];
        $u_address = $_POST['address'];
        $u_password = $_POST['password'];
        $usertype = "user";

        $sql = "INSERT INTO users (name,email,password,phone,address,usertype) VALUES('$u_name','$u_email','$u_password','$u_phone','$u_address','$usertype')";

        $data = mysqli_query($conn,$sql);

        if($data)
        {
            echo "Registered Sucessfully";
        }
    }   
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koodai: Register</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <div class="my_form">
        <h2>Register Form:</h2>
        <form action="" method="POST">
            <div class="input_deg">
                <label>Name:</label>
                <input type="text" name="name">
            </div>
            <div class="input_deg">
                <label>Email:</label>
                <input type="email" name="email">
            </div>
            <div class="input_deg">
                <label>Phone:</label>
                <input type="number" name="phone">
            </div>
            <div class="input_deg">
                <label>Address:</label>
                <input type="text" name="address">
            </div>
            <div class="input_deg">
                <label>Password:</label>
                <input type="password" name="password">
            </div>
            <div class="input_deg">
                <input type="submit" name="register" value="register">
            </div>
        </form>
    </div>
</body>
</html>