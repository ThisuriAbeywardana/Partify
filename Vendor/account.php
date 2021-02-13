<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!='true' && $_SESSION['userType']!='Vendor'){
        header("Location: ../login.php");
    }
    include('../includes/template.php');
?>
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <style>
        .mainContent{
            overflow: hidden;
        }
    </style>
   
    <?php
       
        include('../Includes/profile.php');  
          
    ?>
    </div>
        
           
    </div>
    
</body>
</html>