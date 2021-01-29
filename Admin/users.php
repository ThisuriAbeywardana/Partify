<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!='true' && $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <!-- <link rel="stylesheet" type="text/css" href="../css/header2.css"> -->
</head>
<body>
 <?php include('../Includes/header2.php'); ?>  
<div class="container">
    <?php 
        include('./nav.php'); 
        include('../Controls/general.php');
        $users = getAllUsers();    
        while($row=mysqli_fetch_assoc($users)){
            $name = $row['fName'].' '.$row['lName'];
            echo $name;
        }
    ?>

    <!-- show all users -->


    <style type="text/css">

</style>




</div>