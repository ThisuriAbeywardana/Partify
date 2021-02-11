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
        include('./nav.php'); 
    ?>
    <div class="right">
        <?php 
            include('../Includes/header2.php');

        ?>
        <div class="midContent adminViewEvents">
            <?php
            if(isset($_SESSION['state'])){
                $state = $_SESSION['state'];
                unset($_SESSION['state']);
                echo '<h3 style="text-align: center; padding-top: 15px; padding-bottom: 0; color:red">'.$state.'</h3>';
            }
           
            include('../Controls/general.php');
            //all events
            $events = viewEvent();
            
            ?>

        <div class="tabel">
                        <?php
                            echo "<table class='bookingTable'>
                            <thead>
                            <tr>
                            <th class='col col1'>Starting Time</th>
                            <th class='col col2'>End Time</th>
                            <th class='col col3'>Meal</th>
                            <th class='col col3'>Photography</th>
                            <th class='col col3'>Videography</th>
                            <th class='col col3'>Decoration</th></tr></thead><tbody>";

                            while($row = mysqli_fetch_assoc($events)){
                            
                                echo '<tr><td>'.$row['startTime'].'</td><td>'.$row['endTime'].'</td><td>'.$row['meal'].'</td><td>'.$row['photography'].'</td><td>'.$row['videography'].'</td><td>'.$row['decoration'].'</td><td>'.$row['location'].'</td><td>'.$row['status'].'</td>';
                                echo '<td></tr>';
                            }
                            echo '</tbody></table>';
                        ?>
                </div>
            
    
    
    </div>
</body>
</html>