<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");  
    }
    include('../Includes/template.php');
    include('../Controls/userControl.php');
    

?>


    <div class="tabel">
        <div class="btn-green">
            <a href="../Admin/registerAdmin.php">Add Administrator</a>
        </div>
        <?php
        include('../Controls/general.php');
                            echo "<table class='bookingTable'>
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
                                
                                echo '<form action="./viewEvent.php" method="post">
                                <input type="hidden" name="bId" value="'.$row['userId'].'">
                                <button type="submit" name="viewEvent" class="btnView btn">View</button>
                                </form></td>';
                                echo '<td><form action="../Controls/adminControl.php" method="POST">
                                <input type="hidden" name="bId" value="'.$row['userId'].'">
                                <button type="submit" name="deleteEvent" id="deleteEvent" class="btn btnDelete">Delete</button>
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