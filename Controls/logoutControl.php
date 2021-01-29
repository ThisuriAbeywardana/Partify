<?php
    session_start();
    if(isset($_POST['btnLogout'])){
        unset($_SESSION['userId']);
        unset($_SESSION['username']);
        unset($_SESSION['userType']);
        unset($_SESSION['loggedIn']);
        header("Location: ../index.php");
    }

?>