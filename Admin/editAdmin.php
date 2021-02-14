<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }
    include('../Includes/template.php');  
    $accountId = $_POST['id'];
    include('../Controls/general.php');
    $adminDetails = getAdminDetails($accountId);
    $res = mysqli_fetch_assoc($adminDetails);
?>



    <link rel="stylesheet" type="text/css" href="../css/adminRegister.css">
    <div>
    <link rel="stylesheet" type="text/css" href="../css/main.css"></div>
    
    <form method="POST" action="../Controls/adminControl.php" class="form">
    <h2 id="header">Update Administrator Account</h2>
    <input type="hidden" name="id" value="<?php echo $accountId ?>">
            <div class = "admin" id ="admin">
            <br><br>
            <label for="email"><b>Email Address</b></label><br>
            <input type="email" placeholder="Email" name="email" id="email" value="<?php echo $res['email'] ?>" required><br><br>
            
            <label for="fname"><b>First Name</b></label><br>
            <input type="text" placeholder="First Name" name="fname" id="fname" value="<?php echo $res['fName'] ?>" required><br><br>

            <label for="lname"><b>Last Name</b></label><br>
            <input type="text" placeholder="Last Name" name="lname" id="lname" value="<?php echo $res['lName'] ?>" required><br><br>

            <label for="contactno"><b>Contact Number</b></label><br>
            <input type="text" placeholder="Email" name="contactno" id="contactno" value="<?php echo $res['contactNo'] ?>" required><br><br>


            <button type="submit" class="adminregisterbtn" name="updateAdminButton" id="updateAdminButton">Update Administrator</button>
            <hr>
            </div>
    </form>
</div>
<?php //include('../includes/footer.php') ?>
</body>
</html>