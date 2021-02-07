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
    <title>Users</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="icon" href="../Assets/partify.gif">
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
        <div class="users midContent">
            <?php
            include('../Controls/general.php');
            $users = getAllUsers();    
            
            ?>
            <div class="tabel">
                    <?php
                        echo "<table class='userTable'>
                        <thead>
                        <tr>
                        <th class='col col2'>Name</th>
                        <th class='col col2'>Email</th>
                        <th class='col col3'>gender</th>
                        <th class='col col3'>DOB</th>
                        <th class='col col3'>Contact No</th>
                        <th class='col colBtn'></th>
                        <th class='col colBtn'></th></tr></thead><tbody>";
                        while($row=mysqli_fetch_assoc($users)){
                            $name = $row['fName'].' '.$row['lName'];
                            echo $name;
                            $email = $row['email'];
                            $gender = $row['gender'];
                            $dob = $row['dob'];
                            $contactNo = $row['contactNo'];
                            $address = $row['address'];
                            echo '<br>';

                            echo '</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$gender.'</td><td>'.$contactNo.'</td><td>'.$address.'</td>';
                            echo '<td>';

                            echo '<form action="./viewUser.php" method="post">
                                <input type="hidden" name="userId" value="'.$row['userId'].'">
                                <button type="submit" name="viewUser" class="btnView btn">View</button>
                                </form></td>';
                                echo '<td><form action="../Controls/deleteAccount.php" method="POST">
                                <input type="hidden" name="userId" value="'.$row['userId'].'">
                                <button type="submit" name="deleteUser" id="deleteVendor" class="btn btnDelete">Delete</button>
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
</body>
</html>