<?php 
    session_start();
    if(!isset($_SESSION['user_email'])){    
        header("location:../home/login.php");
}
    else if($_SESSION['usertype'] == "user"){
    header("location:../home/login.php");
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koodai: Admin</title>
    <link rel="stylesheet" href="../admin/admin_style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300..700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <div class="sidebar">
            <h2>Ecom Admin</h2>
            <ul>
                <li><a href="">Dashboard</a></li>
                <li><a href="../admin/adminpage.php">Users</a></li>
                <li><a href="../admin/add_product.php">Add Products</a></li>
                <li><a href="">View Products</a></li>
            </ul>
        </div>
        <div class="header">
            <div class="admin_header">
                <a href="../logout.php">Logout</a>
            </div>
            <div class="info">
                <h1>Add Products</h1>
                <div class="my_form">
                    <form>
                        <div class="div_deg">
                            <label>Title</label>
                            <input type="text" name="title">
                        </div>
                        <div class="div_deg">
                            <label>Description</label>
                            <textarea name="description"></textarea>
                        </div>
                        <div class="div_deg">
                            <label>Price</label>
                            <input type="number" name="price">
                        </div>
                        <div class="div_deg">
                            <label>Quantity</label>
                            <input type="number" name="qty">
                        </div>
                        <div class="div_deg">
                            <input type="submit" name="add_product" value="Add Product">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>