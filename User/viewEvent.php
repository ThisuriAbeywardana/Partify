<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!='true' && $_SESSION['userType']!='User'){
        header("Location: ../login.php");
    }
    include('../Includes/header.php');
    include('../Controls/userControl.php');
    
?>
<div class="body">
    <?php include('../Includes/navbar.php'); ?>
    <link rel="stylesheet" href="../css/userDashboard.css">
    <table border="1px">
        <tr>
            <th>Event Name</th>
            <th>Event Type</th> 
        </tr>
        <tr>
            <td align="center">ev 1</td>
            <td>Party</td>  
            <td>
                <form action="./editEvent.php" method="post">
                    <!-- <input type="hidden" name="bookingid" id="" value=""> Add id here -->
                    <button type="submit" name="btnEditEvent">Edit</button></td>
                </form>
                
            <td>
                <form action="./deleteEvent.php" method="post">
                    <!-- <input type="hidden" name="bookingid" id="" value=""> Add id here -->
                    <button type="submit" name="btnDeleteEvent">Edit</button></td>
                </form>    
            
            
            <button type="submit">Delete</button></td>
        </tr>
        
    </table>

    
</div>