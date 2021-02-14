
<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    } 
    include('../Includes/template.php');
      
?>
<link rel="stylesheet" type="text/css" href="../css/profile.css">
<link rel="stylesheet" type="text/css" href="../css/adminRegister.css">
<div class="container">
            <h1><div style="text-align: center; padding-top: 10px;">ADD USER</div></h1>
            
            <form method="POST" action="../Controls/registrationControl.php">
                <div class = "user form" id ="user">
                <input type="hidden" name="userType" value="User">
                
                <label for="useremail"><b>Email Address</b></label><br>
                <input type="email" placeholder="Email Address" name="useremail" id="useremail" required>
                <br>
                <label for="firstname"><b>First Name</b></label><br>
                <input type="text" placeholder="First Name" name="firstname" id="firstname" required>
                <br>
                <label for="lastname"><b>Last Name</b></label><br>
                <input type="text" placeholder="Last Name" name="lastname" id="lastname" required>
                <br>
                <label for="username"><b>Usename</b></label><br>
                <input type="text" placeholder="Username" name="username" id="username" required>
                <br>
                <label for="male"><b>Gender</b></label><br>
                <input type="radio" id="male" name="gender" value="M">
                <label for="male">Male</label><br>
                <input type="radio" id="female" name="gender" value="F">
                <label for="female">Female</label><br><br>
                <br>
                <label for="dob"><b>Date of Birth :</b></label><br>
                <input type="date" placeholder="Date of Birth" name="dob" id="dob"><br><br>
                <br>
                <label for="usercontactno"><b>Contact Number</b></label><br>
                <input type="text" placeholder="Contact Number" name="usercontactno" id="usercontactno" required>
                <br>
                <label for="useraddress"><b>Address</b></label><br>
                <input type="text" placeholder="Your Address" name="useraddress" id="useraddress">
                <br>
                <label for="userpsw"><b>Password</b></label><br>
                <input type="password" placeholder="Password" name="userpsw" id="userpsw" onkeyup='checkPassword();' required>
                <br>
                <label for="userpsw_repeat"><b>Repeat Password</b></label><br>
                <input type="password" placeholder="Repeat Password" name="userpsw_repeat" id="userpsw_repeat" onkeyup='checkPassword();' required>
                <span id="passtext"></span>
                <br>
                
                <div class="button-wrap" >

                <button type="" class="cancelbtn btn" name="cancelbtn" id="cancelbtn"><a href="./users.php">Cancel</a></button>
                <input type="submit" name="userRegisterBtn2" id="userRegisterBtn2" value="Add" class="btn solid btn-wrapper">
                    
                </div>
                </div>
            </form>

        </div>
</div>
    
</body>
</html>