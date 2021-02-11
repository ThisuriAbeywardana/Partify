<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Vendor'){
        header("Location: ../login.php");
    }
    
    include('../Includes/template.php');
    
        require_once('../includes/db/dbConnection.php');
        $db = DBConnection::getInstance();
        $connection = $db->getConnection();
    ?>
    
    <div class="body">
        
<link rel="stylesheet" href="../cssview.css">
<div class="title">
            <div class="title">VIEW Orders</div>
        </div>
        <div>
            <?php
            $user=$_SESSION['userId'];
                $query= 'SELECT * FROM service WHERE spId='.$user;
                $query_run=mysqli_query($connection,$query);

                while($rowMain = mysqli_fetch_assoc($query_run)){
                    
                        
                    if($rowMain['catering']=='Y'){
                        echo "<table><tr><th>Catering</th></tr>";
        
                        $meal= 'SELECT bookingId,mealName,noOfPlates FROM cateringbooking WHERE spId='.$user;
                        $query_meal=mysqli_query($connection,$meal);
                        if(mysqli_num_rows($query_meal) > 0) {
                            while($row = mysqli_fetch_assoc($query_meal)){
                                echo "<tr><td>".$row['bookingId']."</td>";
                                echo "<tr><td>".$row['mealName']."</td>";
                                echo '<td>'.$row['noOfPlates'].'</td></tr>';
                            }
                        }
        
                        echo "</table>";
                    }
        
                    $photo='SELECT * FROM photographybooking WHERE spId='.$user;
                    $query_photo=mysqli_query($connection,$photo);
                    if($rowMain['photography']=='Y'){
                        echo "<table><tr><th>Photography</th></tr>";
        
                        if(mysqli_num_rows($query_photo) > 0) {
                            while($row = mysqli_fetch_assoc($query_photo)){
                                echo "<tr><td>".$row['bookingId']."</td>";
                                echo '<td>'.$row['albumType'].'</td></tr>';
                
                            }
                        }
        
                        echo "</table>";
                    }
        
                    $video='SELECT * FROM videographybooking WHERE spId='.$user;
                    $query_video=mysqli_query($connection,$video);
                    if($rowMain['videography']=='Y'){
                        echo "<table><tr><th>Videography</th></tr>";
                        if(mysqli_num_rows($query_video) > 0) {
                            while($row = mysqli_fetch_assoc($query_video)){
                                echo "<tr><td>".$row['bookingId']."</td>";
                                echo '<td>'.$row['albumType'].'</td></tr>';
                            }
                        }
                            
                        echo "</table>";
                    }
        
                    $decor='SELECT * FROM decorationbooking WHERE spId='.$user;
                    $query_decor=mysqli_query($connection,$decor);
                    if($rowMain['decoration']=='Y'){
                        echo "<table><tr><th>Decorations</th></tr>";
        
                        if(mysqli_num_rows($query_decor) > 0) {
                            while($row = mysqli_fetch_assoc($query_decor)){
                                echo "<tr><td>".$row['bookingId']."</td>";
                                echo '<td>'.$row['decorationType'].'</td></tr>';
                            }
                        }
                            
                        echo "</table>";
                    }
        
                    $location='SELECT * FROM locationbooking WHERE spId='.$user;
                    $query_location=mysqli_query($connection,$location);
                    if($rowMain['location']=='Y'){
                        echo "<table><tr><th>Location</th></tr>";
        
                        if(mysqli_num_rows($query_location) > 0) {
                            while($row = mysqli_fetch_assoc($query_location)){
                                echo "<tr><td>".$row['bookingId']."</td>";
                                echo '<td>'.$row['locationType'].'</td></tr>';
                            }
                        }
                            
                        echo "</table>";
                    }
        
                    
                }
            ?>
    
            
        
        
        
        
    </div>