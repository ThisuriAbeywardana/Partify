<html>
    <head>
        <link rel="stylesheet" href="../css/bookEvent.css">
        <title>Add Services</title>
        <script src="../js/edit.js" type="text/javascript"></script>
    </head>
    <?php
        require_once('../includes/db/dbConnection.php');
        $db = DBConnection::getInstance();
        $connection = $db->getConnection();
    ?>
    <body>
        <div>This is the header</div>
        <div class="container">
            <form action="../Controls/vendorEdit.php" method="post" class="form">
            <div class="section">
                <div class="title">Edit Services</div>
            </div>

            <?php
                $user=15;//$_SESSION['userId'];
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
            echo '<table id="photo" cellspacing="1">';
            
            if(mysqli_num_rows($query_photo) > 0) {
                while($row = mysqli_fetch_assoc($query_photo)){
                    
                    echo '<tr><td>'.$row['albumType'].'</td><td>'.$row['price'].'</td><td>'.$row['description'].'</td><td>'.$row['pId'].'</td></tr>';
                }
                
            }

            echo '</table>';

            ?>
                
            <input type="text" name="packagePhoto" id="packagePhoto" placeholder="Package name">
            <input type="number" name="pricePhoto" id="pricePhoto" placeholder="price">
            <input type="text" name="descriptionPhoto" id="descriptionPhoto" placeholder="description">
            <input type="hidden" name="idp" id="idp">
            <input type="hidden" name="alreadyExists" id="alreadyExists">
            <button onclick="adddetails('tablePhoto','packagePhoto','pricePhoto','descriptionPhoto','idp');" type="button" name="update">Add package</button></br>
            
            <table id="tablePhoto">
                <tr>
                    <th>Package</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
                <?php
                
            ?>
            </table>
            </div>

            <hr>
            <!-- videography section -->

            <div class="checkbox">
                <input type="checkbox" name="needVideography" id="needVideography" class="box" onchange="displaySection('secVideography','needVideography')">
                <span class="span">Videography</span>
            </div>

            <div class="section secVideography" id="secVideography">
                <div class="label">Select Packages</div>
            </br>

            <?php
            $video='SELECT * FROM videography WHERE spId='.$user;
            $query_video=mysqli_query($connection,$video);
            echo '<b>Existing packages</b>';
            echo '<table id="video" cellspacing="1">';
            if(mysqli_num_rows($query_video) > 0) {
                while($row = mysqli_fetch_assoc($query_video)){
    
                    echo '<tr><td>'.$row['type'].'</td><td>'.$row['price'].'</td><td>'.$row['description'].'</td><td>'.$row['pId'].'</td></tr>';
                }
                
            }

            echo '</table>';

            ?>

            <input type="text" name="packageVideo" id="packageVideo" placeholder="Package name">
            <input type="number" name="priceVideo" id="priceVideo" placeholder="price">
            <input type="text" name="descriptionVideo" id="descriptionVideo" placeholder="description">
            <input type="hidden" name="idv" id="idv">
            <input type="hidden" name="alreadyExists" id="alreadyExists">
            <button onclick="adddetails('tableVideo','packageVideo','priceVideo','descriptionVideo','idv');" type="button">Add package</button></br>

            <table id="tableVideo">
                <tr>
                    <th>Package</th>
                    <th>Price</th>
                    <th>Description</th>
                </tr>
            </table>
            </div> 

            <hr>