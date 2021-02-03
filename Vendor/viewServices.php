<!-- <?php
    // session_start();
    // if(!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']!='true' && $_SESSION['userType']!='User'){
    //     header("Location: ../login.php");
    // }
    // include('../Includes/header.php');
    // include('../Controls/userControl.php');
    
    ?> -->
    <?php
        require_once('../dbConnection.php');
        $db = DBConnection::getInstance();
        $connection = $db->getConnection();
    ?>
    <div class="body">
        <!-- <?php include('../Includes/navbar.php'); ?> -->
        
        <div class="title">
            VIEW services
        </div>
        <div>
            <?php
            $user=16;//$_SESSION['userId'];
    
                $query= "SELECT * FROM service WHERE spId=$user";
                
                $query_run=mysqli_query($connection,$query);
                $row = mysqli_fetch_assoc($query_run);
                $count=0;
                    
                if($row['catering']=='Y'){
                    echo "<table><tr><th>Catering</th></tr>";
                    $count++;
    
                    $meal= "SELECT breakfast,lunch,dinner FROM catering WHERE spId=$user";
                    $query_meal=mysqli_query($connection,$meal);
                    if(mysqli_num_rows($query_meal) > 0) {
                        while($row = mysqli_fetch_assoc($query_meal)){
                            if($row['breakfast']=='Y'){
                                echo "<tr><td>Breakbast<td></tr>";
                            }
                            if($row['lunch']=='Y'){
                                echo "<tr><td>Lunch<td></tr>";
                            }
                            if($row['dinner']=='Y'){
                                echo "<tr><td>Dinner<td></tr>";
                            }
                        }
                    }
    
                    echo "</table>";
                }
    
                $photo="SELECT albumType FROM photography WHERE spId=$user";
                $query_photo=mysqli_query($connection,$photo);
                if($row['photography']=='Y'){
                    echo "<table><tr><th>Photography</th></tr>";
                    $count++;
    
                    if(mysqli_num_rows($query_photo) > 0) {
                        while($row = mysqli_fetch_assoc($query_photo)){
                            echo "<tr><td>".$row['albumType']."</td></tr>";
                        }
                    }
    
                    echo "</table>";
                }
    
                $video="SELECT type FROM videography WHERE spId=$user";
                $query_video=mysqli_query($connection,$video);
                if($row['videography']=='Y'){
                    echo "table><tr><th>Videography</th></tr>";
                    $count++;
    
                    if(mysqli_num_rows($query_video) > 0) {
                        while($row = mysqli_fetch_assoc($query_video)){
                            echo "<tr><td>".$row['type']."</td></tr>";
                        }
                    }
                        
                    echo "</table>";
                }
    
                $decor="SELECT type FROM decoration WHERE spId=$user";
                $query_decor=mysqli_query($connection,$decor);
                if($row['decoration']=='Y'){
                    echo "<table><tr><th>Decorations</th></tr>";
                    $count++;
    
                    if(mysqli_num_rows($query_decor) > 0) {
                        while($row = mysqli_fetch_assoc($query_decor)){
                            echo "<tr><td>".$row['type']."</td></tr>";
                        }
                    }
                        
                    echo "</table>";
                }
    
                $location="SELECT packtype,address FROM location WHERE spId=$user";
                $query_location=mysqli_query($connection,$location);
                if($row['location']=='Y'){
                    echo "<table><tr><th>Location</th></tr>";
                    $count++;
    
                    if(mysqli_num_rows($query_location) > 0) {
                        while($row = mysqli_fetch_assoc($query_location)){
                            echo "<tr><td>".$row['packType']."</td></tr>";
                            echo "<tr><td>".$row['address']."</td></tr>";
                        }
                    }
                        
                    echo "</table>";
                }
    
                if($count==0){
                    echo "NO SERVICES ADDED.";
                }
            ?>
            <form action="editService.php" method="post">
                    <button type="submit" name="editbtn" class="btn"> EDIT</button>
            </form>
    
            <form action="deleteServices.php" method="post">
                <button type="submit" name="deletebtn" class="btn"> DELETE</button>
            </form>
            </div>
        
    </div>