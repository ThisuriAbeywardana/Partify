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
        $admins = viewAdmin();    
        // while($row=mysqli_fetch_assoc($vendors)){
        //     // if()

        // }
        ?>
        <div class="tabel">
                    <?php
                        echo "<table class='viewVendorTable'>
                        <thead>
                        <tr>
                        <th class='col col2'>Email</th>
                        <th class='col col3'>Name</th>
                        <th class='col col3'>Gender</th>
                        <th class='col col3'>DOB</th>
                        <th class='col col3'>Contact_No</th>
                        <th class='col col3'>Address</th></tr></thead><tbody>";

                        while($row=mysqli_fetch_assoc($admins)){
                                // if()
                                $email = $row['email'];
                                $name = $row['fName'].' '.$row['lName'];
                                $gender = $row['gender'];
                                $dob = $row['dob'];
                                $contactNo = $row['contactNo'];
                                $address = $row['address'];
                                echo '<br>';
                            
                                echo '</td><td>'.$email.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$dob.'</td><td>'.$contactNo.'</td><td>'.$address.'</td>'; 
                                // .$row['catering'].'</td><td>'.$row['photography'].'</td><td>'.$row['videograpghy'].'</td><td>'.$row['decoration'].'</td>'
                                echo '<td>';
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