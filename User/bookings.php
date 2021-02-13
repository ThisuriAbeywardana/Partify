<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='User'){
        header("Location: ../login.php");
    }  
    include('../Includes/template.php');
    include('../Controls/userControl.php');
    include('../Controls/general.php'); 

?>
        <link rel="stylesheet" href="../css/table.css">
        <div class="midContent booking">
                <div style="padding-top: 20px; margin: 0; text-align: center; font-size: 30px; color: white;">
                    <?php
                        if(isset($_SESSION['deleteEvent'])){   
                            echo $_SESSION['deleteEvent'];
                            unset($_SESSION['deleteEvent']);
                        }

                    ?>
                </div>
                <div class="table" >
                <button type="submit" class="btn-green btn bookeventBtn"><a href="./bookEvent.php">Book Event</a></button>
                <?php
                        echo "<table class='bookingTable'>
                        <thead>
                        <tr>
                        <th class='col col1 tableHeader'>Event Name</th>
                        <th class='col col2 tableHeader'>Type</th>
                        <th class='col col3 tableHeader'>Date</th>
                        <th class='col colBtn'></th>
                        <th class='col colBtn'></th></tr></thead><tbody>";
                        $res = getUserBooking();
                        while($row = mysqli_fetch_assoc($res)){
                            $name = $row['eventName'];
                            $type = $row['type'];
                            $date = $row['date'];
                            $status = $row['status'];
                            $bookingId = $row['bookingId'];
                            echo "<tr><td class='col col1'>$name</td><td class='col col2'>$type</td><td class='col col3'>$date</td>";
                            echo '<td>';
                            
                            echo '<form action="./editEvent.php" method="post" class="view colBtn">
                            <input type="hidden" name="bId" value="'.$bookingId.'">
                            <button type="submit" name="viewEvent" class="btn btnview">Edit</button>
                            </form></td>';
                            echo '<td><form action="../Controls/userControl.php" method="post" class="delete colBtn">
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