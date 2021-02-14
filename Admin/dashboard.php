<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    } 
    include('../Includes/template.php');
    include('../Controls/adminControl.php');
    include('../Controls/general.php');
?>
        <head><link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/adminDashboard.css"></head>
        <div class="mainUP">
            <div class="card c1">
                <h3>Events</h3><p> <?php echo getEventCount(); ?></p>
            </div>
            <div class="card c2">
                <h3>Vendors</h3> <p><?php echo getVendorCount(); ?></p>
            </div>
            <div class="card c3">
                <h3>Customers</h3><p><?php echo getUserCount(); ?></p> 
            </div>
        </div>
        <div class="recent">
            
        </div>
    </div>    
</div>
