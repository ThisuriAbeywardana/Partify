<?php
    session_start();
    // if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
    //     header("Location: ../login.php");
    // }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Admin</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/adminRegister.css">
    <script src="../js/registerAdmin.js"></script>
</head>
<body>

<div class="container">
    <?php include('./nav.php'); ?>


    <!-- add new administrator form should come here -->
    
    <form method="POST" action="../Controls/adminControl.php" class="form">

            <div class = "admin" id ="admin">
            <br><br>
            <label for="email"><b>Email Address</b></label><br>
            <input type="email" placeholder="Email" name="email" id="email" required><br><br>
            
            <label for="fname"><b>First Name</b></label>
            <input type="text" placeholder="First Name" name="fname" id="fname" required><br><br>

            <label for="lname"><b>Last Name</b></label>
            <input type="text" placeholder="Last Name" name="lname" id="lname" required><br><br>

            <label for="contactno"><b>Contact Number</b></label><br>
            <input type="text" placeholder="Email" name="contactno" id="contactno" required><br><br>

            <label for="adminusername"><b>Username</b></label>
            <input type="text" placeholder="Username" name="adminusername" id="adminusername" required><br><br>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Password" name="psw" id="psw" onkeyup='checkPassword3();' required><br><br>

            <label for="psw_repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" onkeyup='checkPassword3();' required><br><br>
            <span id="passtext3"></span><br><br>
            <button type="submit" class="adminregisterbtn" name="adminregisterbtn" id="adminregisterbtn">Register</button>
            <hr>
            </div>
    </form>
</div>

</body>
</html>