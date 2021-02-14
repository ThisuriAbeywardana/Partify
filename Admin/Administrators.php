<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }
    require_once('../includes/db/dbConnection.php');
    $db = DBConnection::getInstance();
    $connection = $db->getConnection();
    include('../includes/template.php');
?>  
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <div class="midContent">
    <div class="status">
    <p>
    <?php
    if(isset( $_SESSION['deleteAdmin'])){
        echo  $_SESSION['deleteAdmin'];
    unset( $_SESSION['deleteAdmin']);
    }
    ?>
    </p>
    <div class="tabel">
        <div class="btn-green">
            <a href="../Admin/registerAdmin.php">Add Administrator</a>
        </div>
        <?php
        include('../Controls/general.php');
                            echo "<table class='bookingTable' border=2>
                            <thead>
                            <tr>
                            <th class='col col1'>Username</th>
                            <th class='col col2'>Email</th>
                            <th class='col col3'>Contact</th>
                            <th class='col colBtn'></th>
                            <th class='col colBtn'></th></tr></thead><tbody>";


                            $admins = getAllAdmins();    
                            while($row=mysqli_fetch_assoc($admins)){
                                $name = $row['fName'].' '.$row['lName'];
                                $email = $row['email'];
                                $contact = $row['contactNo'];
                                                
                                echo '<tr><td>'.$name.'</td><td>'.$email.'</td><td>'.$contact.'</td>';
                                echo '<td>';
                                
                                echo '<form action="./viewAdmin.php" method="post">
                                <input type="hidden" name="Id" value="'.$row['adminId'].'">
                                <button type="submit" name="viewAdmin" id="viewAdmin" class="btnView btn">View</button>
                                </form></td>';
                                echo '<td><form action="../Controls/deleteAccount.php" method="POST">
                                <input type="hidden" name="id" value="'.$row['adminId'].'">
                                <button type="submit" name="deleteAdmin" id="deleteAdmin" class="btn btnDelete">Delete</button>
                                </form></td></tr>';
                            }
                            echo '</tbody></table>';
                        
        
        
        
        
        ?>
        </div>
    
    </div>
    </div>
    <!-- show all users -->


    




</div>
</body>
</html>