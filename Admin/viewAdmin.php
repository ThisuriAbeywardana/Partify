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
            <div class="title">VIEW admin</div>
        </div>
    <div class="midContent">
        <?php
        include('../Controls/general.php');
        $adminId=$_POST['Id'];
        $admins = viewAdmin($adminId);
        // echo $_POST['Id'];    
        // while($row=mysqli_fetch_assoc($admins)){
        //     // if()

        // }
        ?>
        <div class="tabel">
                    <?php
                        echo "<table class='viewAdminTable' border=2>
                        <thead>
                        <tr>
                        <th class='col col2'>Email</th>
                        <th class='col col3'>Name</th>
                        <th class='col col3'>Contact_No</th>
                        </tr></thead><tbody>";

                        while($row=mysqli_fetch_assoc($admins)){

                                $email = $row['email'];
                                $name = $row['fName'].' '.$row['lName'];
                                $contactNo = $row['contactNo'];
                                echo '<br>';
                            
                                echo '</td><td>'.$email.'</td><td>'.$name.'</td><td>'.$contactNo.'</td>'; 
                                
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