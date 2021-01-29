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
            //all events
        ?>
    </div>
    <?php include('../Includes/footer.php'); ?>
</body>
</html>