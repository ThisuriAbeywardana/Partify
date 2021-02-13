<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }
    include('../Includes/template.php');  
?>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
</head>
<body>
   
<div class="container">
    <?php 
        // include('./nav.php'); 
    ?>
    <div class="right"> -->



    <?php
        //include('../Includes/header2.php');
    ?>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
        <div class="users midContent">
            <?php
            include('../Controls/general.php');
            $users = getAllUsers();    
            
            ?>
            <div class="tabel">
                <div class="btn-green">
                    <a href="./adminRegiUser.php">Add User</a>
                </div>
                    <?php
                        echo "<table class='userTable' border=2>
                        <thead>
                        <tr>
                        <th class='col col1'>Name</th>
                        <th class='col col2'>Email</th>
                        <th class='col col3'>gender</th>
                        <th class='col col4'>DOB</th>
                        <th class='col col5'>Contact No</th>
                        <th class='col col6'>Address</th>
                        <th class='col colBtn'>View</th>
                        <th class='col colBtn'>Delete</th></tr></thead><tbody>";
                        while($row=mysqli_fetch_assoc($users)){
                            $name = $row['fName'].' '.$row['lName'];
                            $email = $row['email'];
                            $gender = $row['gender'];
                            $dob = $row['dob'];
                            $contactNo = $row['contactNo'];
                            $address = $row['address'];
                            echo '<br>';

                            echo '</td><td>'.$name.'</td><td>'.$email.'</td><td>'.$gender.'</td><td>'.$dob.'</td><td>'.$contactNo.'</td><td>'.$address.'</td>';
                            echo '<td>';

                            echo '<form action="./viewUser.php" method="post">
                                <input type="hidden" name="userId" value="'.$row['userId'].'">
                                <button type="submit" name="viewUser" class="btnView btn">View</button>
                                </form></td>';
                                echo '<td><form action="../Controls/deleteAccount.php" method="POST">
                                <input type="hidden" name="userId" value="'.$row['userId'].'">
                                <button type="submit" name="deleteUser" id="deleteUser" class="btn btnDelete">Delete</button>
                                </form></td></tr>';
                                // echo '<td><form action="../Controls/editAccount.php" method="POST">
                                // <input type="hidden" name="userId" value="'.$row['userId'].'">
                                // <button type="submit" name="editUser" id="editUser" class="btn btnEdit">Edit</button>
                                // </form></td></tr>';
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