<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/adminRegister.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
</head>
<body>

<div class="container">
    <?php include('./nav.php'); ?>


    <!-- add new administrator form should come here -->
    
    <form method="POST" action="" class="form">

            <div class = "admin" id ="admin">
            <br><br>
            <label for="email"><b>Email Address</b></label><br>
            <input type="email" placeholder="Enter Email" name="email" id="email" required><br><br>

            <label for="firstname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="firstname" id="firstname" required><br><br>

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname" required><br><br>

            <label for="username"><b>User Name</b></label>
            <input type="text" placeholder="Enter User Name" name="username" id="username" required><br><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>

            <label for="psw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required><br><br>

            <button type="submit" class="registerbtn" name="registerbtn">Register</button>
            <hr>
            </div>
    </form>
</div>
<?php include('../includes/footer.php') ?>
</body>
</html>