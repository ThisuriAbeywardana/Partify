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