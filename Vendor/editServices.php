<html>
    <head>
        <link rel="stylesheet" href="../css/bookEvent.css">
        <title>Add Services</title>
        <script src="../js/edit.js" type="text/javascript"></script>
    </head>
    <?php
        require_once('./dbConnection.php');
        $db = DBConnection::getInstance();
        $connection = $db->getConnection();
    ?>
    <body>
        <div>This is the header</div>
        <div class="container">
            <form action="./vendorControl.php" method="post" class="form">
            <div class="section">
                <div class="title">Edit Services</div>
            </div>

            <?php
                $user=16;//$_SESSION['userId'];
            ?>

            

            <div class="checkbox">
                <input type="checkbox" name="needPhotography" id="needPhotography" class="box" onchange="displaySection('secPhotography','needPhotography')">
                <span class="span">Photography</span>
            </div>

            <div class="section secPhotography" id="secPhotography">
                <div class="label">Edit/Select Packages</div>
            </br>

            <?php
            $photo='SELECT * FROM photography WHERE spId='.$user;
            $query_photo=mysqli_query($connection,$photo);
            echo '<b>Existing packages</b>';
            echo '<table id="photo" onclick="run()">';
            if(mysqli_num_rows($query_photo) > 0) {
                while($row = mysqli_fetch_assoc($query_photo)){
                    echo '<tr ><td>'.$row['albumType'].'</td><td>'.$row['price'].'</td><td>'.$row['description'].'</td></tr>';
                }
            }

            echo '</table>';

            ?>
                
            <input type="text" name="packagePhoto" id="packagePhoto" placeholder="Package name">
            <input type="number" name="pricePhoto" id="pricePhoto" placeholder="price">
            <input type="text" name="descriptionPhoto" id="descriptionPhoto" placeholder="description">
            <button onclick="addPhoto();" type="button">Add package</button>
            <button type="button">Update package</button></br>
            
            <table id="tablePhoto">
                <tr>
                    <th>Package</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </table>
            </div>

            <hr>
            </form>       
                
    
        </div>
    </body>
</html>