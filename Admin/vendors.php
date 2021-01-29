<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!='true' && $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }
    include('../Includes/header2.php');
    
?>
<div class="container">
    <?php 
        include('./nav.php'); 
        include('../Controls/general.php');
        $vendors = getAllVendors();    
        while($row=mysqli_fetch_assoc($vendors)){
            $name = $row['fName'].' '.$row['lName'];
            echo $name;
        }
    ?>

    <!-- show all users -->


    <style type="text/css">

</style>




</div>