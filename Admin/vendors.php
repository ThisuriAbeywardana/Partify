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
    <!-- <link rel="stylesheet" type="text/css" href="../css/vendor.css"> -->
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">

</head>
<body>

<div class="container">
    <?php 
        include('./nav.php'); 
    ?>  
    <div class="right">
        <?php
        include('../includes/header2.php');
        
        ?>
        <div class="midContent adminViewVendor">
        <?php
         if(isset($_SESSION['state'])){
            $state = $_SESSION['state'];
            unset($_SESSION['state']);
            echo '<h3 style="text-align: center; padding-top: 15px; padding-bottom: 0; color:red">'.$state.'</h3>';
        }

        include('../Controls/general.php');
        //all vendors
        $vendors = getAllVendors();
        
        ?>
        
    <div class="tabel3">
                    <?php
                        echo "<table class='vendorTable'>
                        <thead>
                        <tr>
                        <th class='col col2'>Name</th>
                        //<th class='col col2'>Catering</th>
                        // <th class='col col3'>Photography</th>
                        // <th class='col col3'>Videography</th>
                        // <th class='col col3'>Decoration</th>
                        <th class='col colBtn'></th>
                        <th class='col colBtn'></th></tr></thead><tbody>";    
                        while($row=mysqli_fetch_assoc($vendors)){
                                // if()
                                // echo $row['name'];
                                // echo $row['catering'];
                                // echo $row['photography'];
                                // echo $row['videograpghy'];
                                // echo $row['decoration'];
                                // echo '<br>';
                            
                                echo '</td><td>'.$row['businessname'].'</td><td>'; 
                                // .$row['catering'].'</td><td>'.$row['photography'].'</td><td>'.$row['videograpghy'].'</td><td>'.$row['decoration'].'</td>'
                                echo '<td>';
                                
                                echo '<form action="./viewVendor.php" method="post">
                                <input type="hidden" name="spId" value="'.$row['spId'].'">
                                <button type="submit" name="viewVendor" class="btnView btn">View</button>
                                </form></td>';
                                echo '<td><form action="../Controls/deleteAccount.php" method="POST">
                                <input type="hidden" name="spId" value="'.$row['spId'].'">
                                <button type="submit" name="deleteVendor" id="deleteVendor" class="btn btnDelete">Delete</button>
                                </form></td></tr>';
                            }
                            echo '</tbody></table>';      
                    ?>
        </div>
    </div>

    <!-- show all users -->


    <style type="text/css">

</style>




</div>