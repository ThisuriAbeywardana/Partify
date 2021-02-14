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
    <div class="title">
            <div class="title">VIEW User</div>
        </div>
    <div class="midContent">
        <?php
        include('../Controls/general.php');
        $userId=$_POST['uid'];
        $users = viewUser($userId);
        // echo $_POST['id'];    
        // while($row=mysqli_fetch_assoc($users)){
        //     // if()

        // }
        ?>
        <div class="tabel">
                    <?php
                         echo "<table class='userTable' border=2>
                         <thead>
                         <tr>
                         <th class='col col2'>Email</th>
                         <th class='col col3'>Name</th>
                         <th class='col col5'>Gender</th>
                         <th class='col col5'>DoB</th>
                         <th class='col col5'>ContactNo</th>
                         <th class='col col6'>Address</th>
                         </tr></thead><tbody>";

                         while($row=mysqli_fetch_assoc($users)){
                            $email = $row['email'];
                            $name = $row['fName'].' '.$row['lName'];
                            $gender = $row['gender'];
                            $dob = $row['dob'];
                            $contactNo = $row['contactNo'];
                            $address = $row['address'];
                            echo '<br>';

                            
                            echo '</td><td>'.$email.'</td><td>'.$name.'</td><td>'.$gender.'</td><td>'.$dob.'</td><td>'.$contactNo.'</td><td>'.$address.'</td>';
                            echo '<td>';
                            
                        }
                            echo '</tbody></table>';
                    ?>
        </div>
    </div>
    
?>
</div>
</div>
            
     }
    ?>
    <!-- show all users -->


    <!-- <style type="text/css">

</style> -->




</div>
</body>
</html>