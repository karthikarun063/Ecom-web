<?php 
    session_start();
    if(!isset($_SESSION['user_email'])){    
        header("location:../home/login.php");
    }
    else if($_SESSION['usertype'] == "admin"){
        header("location:../home/login.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koodai</title>
</head>
<body>
    <h1>This is User Page</h1>
</body>
</html>