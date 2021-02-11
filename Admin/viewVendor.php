<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vendor Details</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
</head>
<body>
<div class="container">
    <?php 
        include('./nav.php'); 
    ?>  
    <div class="right">
        <?php
        include('../Includes/header2.php');

        ?>
        <div class="midContent">
        <?php
        include('../Controls/general.php');
        $vendors = viewVendor();    
        // while($row=mysqli_fetch_assoc($vendors)){
        //     // if()

        // }
        ?>
        <div class="tabel">
                    <?php
                        echo "<table class='viewVendorTable'>
                        <thead>
                        <tr>
                        <th class='col col2'>Catering</th>
                        <th class='col col3'>Photography</th>
                        <th class='col col3'>Videography</th>
                        <th class='col col3'>Decoration</th>
                        <th class='col col3'>Location</th></tr></thead><tbody>";

                        while($row=mysqli_fetch_assoc($vendors)){
                                // if()
                                //$name = $row['name'];
                                $catering = $row['catering'];
                                $photography = $row['photography'];
                                $videography = $row['videography'];
                                $decoration = $row['decoration'];
                                $location = $row['location'];
                                echo '<br>';
                            
                                echo '<tr><td>'.$catering.'</td><td>'.$photography.'</td><td>'.$videography.'</td><td>'.$decoration.'</td><td>'.$location.'</td>'; 
                                // .$name.'</td><td>'.$row['catering'].'</td><td>'.$row['photography'].'</td><td>'.$row['videograpghy'].'</td><td>'.$row['decoration'].'</td>'
                                echo '<td></tr>';
                            }
                            echo '</tbody></table>';
                    ?>
        </div>
    </div>

    <!-- show all users -->


    <!-- <style type="text/css">

</style> -->




</div>
</body>
</html>