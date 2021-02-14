<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    }
    include('../Includes/template.php');  
?>



    <link rel="stylesheet" type="text/css" href="../css/adminRegister.css">
    <!-- add new administrator form should come here --><div>
    <link rel="stylesheet" type="text/css" href="../css/main.css"></div>
    <form method="POST" action="../Controls/adminControl.php" class="form">
    <h2 id="header">Register Administrator</h2>
            <div class = "admin" id ="admin">
            <br><br>
            <label for="email"><b>Email Address</b></label><br>
            <input type="email" placeholder="Email" name="email" id="email" required><br><br>
            
            <label for="fname"><b>First Name</b></label><br>
            <input type="text" placeholder="First Name" name="fname" id="fname" required><br><br>

            <label for="lname"><b>Last Name</b></label><br>
            <input type="text" placeholder="Last Name" name="lname" id="lname" required><br><br>

            <label for="contactno"><b>Contact Number</b></label><br>
            <input type="text" placeholder="Email" name="contactno" id="contactno" required><br><br>

            <label for="adminusername"><b>Username</b></label><br>
            <input type="text" placeholder="Username" name="adminusername" id="adminusername" required><br><br>

            <label for="psw"><b>Password</b></label><br>
            <input type="password" placeholder="Password" name="psw" id="psw" onkeyup='checkPassword3();' required><br><br>

            <label for="psw_repeat"><b>Repeat Password</b></label><br>
            <input type="password" placeholder="Repeat Password" name="psw_repeat" id="psw_repeat" onkeyup='checkPassword3();' required><br><br>
            <span id="passtext3"></span><br><br>
            <button type="submit" class="adminregisterbtn" name="adminregisterbtn" id="adminregisterbtn">Register</button>
            <hr>
            </div>
    </form>
</div>
<?php //include('../includes/footer.php') ?>
</body>
</html>