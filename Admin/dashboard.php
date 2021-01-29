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
    <title>Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    
</head>
<body>
<?php include('../Includes/header2.php') ?>

<div class="container">
    <?php 
        include('./nav.php'); 
        include('../Controls/general.php');
            
        
    ?>
    <div class="mainUP">
        <div class="card">
            Events <?php echo getEventCount(); ?>
        </div>
        <div class="card">
            Vendors <?php echo getVendorCount(); ?>
        </div>
        <div class="card">
            Accounts <?php echo getUserCount(); ?>
        </div>
    </div>



</div>
