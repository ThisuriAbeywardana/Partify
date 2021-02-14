
<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    } 
    include('../Includes/template.php');
    include('../Includes/profile.php');  
?>
<link rel="stylesheet" type="text/css" href="../css/profile.css">
</div>
    
</body>
</html>