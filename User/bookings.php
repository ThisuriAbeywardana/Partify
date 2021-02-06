<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='User'){
        header("Location: ../login.php");
    }  
    include('../Includes/template.php');
    include('../Controls/userControl.php');
    include('../Controls/general.php'); 

?>
        
        <div class="midContent booking">
            
                <div class="tabel" >
                <button type="submit" class="btn-green btn"><a href="./bookEvent.php">Book Event</a></button>
                <?php
                        echo "<table class='bookingTable' style='border: 1px solid red;'>
                        <thead>
                        <tr>
                        <th class='col col1'>Event Name</th>
                        <th class='col col2'>Type</th>
                        <th class='col col3'>Date</th>
                        <th class='col colBtn'></th>
                        <th class='col colBtn'></th></tr></thead><tbody>";
                        $res = getUserBooking();
                        while($row = mysqli_fetch_assoc($res)){
                            $name = $row['eventName'];
                            $type = $row['type'];
                            $date = $row['date'];
                            $status = $row['status'];
                            $bookingId = $row['bookingId'];
                            echo "<tr><td>$name</td><td>$type</td><td>$date</td>";
                            echo '<td>';
                            
                            echo '<form action="./editEvent.php" method="post">
                            <input type="hidden" name="bId" value="'.$bookingId.'">
                            <button type="submit" name="viewEvent" class="btn btnview">View</button>
                            </form></td>';
                            echo '<td><form action="../Controls/adminControl.php" method="post">
                            <input type="hidden" name="bId" value="'.$bookingId.'">
                            <button type="submit" name="deleteEvent" id="deleteEvent" class="btn btnDelete">Delete</button>
                            </form></td></tr>';
                        }
                        echo '</tbody></table>';
                ?>
                
                </div>
                
                        
        
    </div>
    </div>
    
    
           
    </div>
    
</body>
</html>