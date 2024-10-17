<?php
    session_start();
    // Database connection
    $conn = mysqli_connect('localhost', 'root', 'root', 'php_ecom');

    if(isset($_POST['register'])){
        // Retrieving form data
        $u_name = $_POST['name'];
        $u_email = $_POST['email'];
        $u_phone = $_POST['phone'];
        $u_address = $_POST['address'];
        $u_password = $_POST['password'];
        $usertype = "user";

        // Inserting data into the database
        $sql = "INSERT INTO users (name,email,password,phone,address,usertype) 
                VALUES('$u_name','$u_email','$u_password','$u_phone','$u_address','$usertype')";

        $data = mysqli_query($conn, $sql);

        if($data) {
            $_SESSION['message'] = "Registered Successfully"; // Setting session message
        } else {
            $_SESSION['message'] = "Registration Failed"; // Handling insertion failure
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
        <h2>
            <?php
                if (isset($_SESSION['message'])) {
                    echo $_SESSION['message'];
                    unset($_SESSION['message']); // Clear the message after displaying it
                }
            ?>
        </h2>
        <h2>Register Form:</h2>
        <form action="" method="POST">
            <div class="input_deg">
                <label>Name:</label>
                <input type="text" name="name" required>
            </div>
            <div class="input_deg">
                <label>Email:</label>
                <input type="email" name="email" required>
            </div>
            <div class="input_deg">
                <label>Phone:</label>
                <input type="number" name="phone" required>
            </div>
            <div class="input_deg">
                <label>Address:</label>
                <input type="text" name="address" required>
            </div>
            <div class="input_deg">
                <label>Password:</label>
                <input type="password" name="password" required>
            </div>
            <div class="input_deg">
                <input type="submit" name="register" value="Register">
            </div>
        </form>
    </div>
</body>
</html>
