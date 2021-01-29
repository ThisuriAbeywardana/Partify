<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!='true' && $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }
    include('../Includes/header.php');
    
?>
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
