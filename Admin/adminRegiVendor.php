<html lang="en">
<head>
    <title>Register</title>
    <!-- <script src="../js/registerUser.js"></script> -->
    <link rel="stylesheet" type="text/css" href="../css/regiUser1.css">
</head>
<body>
        <div class="container">
            <h1><div style="text-align: center;">ADD VENDOR</div></h1>
            <hr>
            <form method="POST" action="../Controls/registrationControl.php">
            <div class = "vendor form" id="vendor">
            <input type="hidden" name="userType" value="Vendor">
                <br><br>

                <label for="vendorusername"><b>Username</b></label>
                <input type="text" placeholder="Username" name="vendorusername" id="vendorusername" required>

                <label for="name"><b>Name of my Business</b></label>
                <input type="text" placeholder="Enter your Business Name" name="businessname" id="name" required>

                <label for="vendoraddress"><b>Address</b></label>
                <input type="text" placeholder="Enter your Address" name="vendoraddress" id="vendoraddress" required>

                <label for="vendoremail"><b>Email Address</b></label><br>
                <input type="vendoremail" placeholder="Enter Email" name="vendoremail" id="vendoremail" required><br><br>

                <label for="vendorcontactno"><b>Contact Number of my Business</b></label>
                <input type="text" placeholder="Enter Contact Number" name="vendorcontactno" id="vendorcontactno" required>

                <label for="vendorpsw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="vendorpsw" id="vendorpsw" onkeyup='checkPassword2();' required>
    
                <label for="vendorpsw_repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="vendorpsw_repeat" id="vendorpsw_repeat" onkeyup='checkPassword2();' required>
                <span id="passtext2"></span>
                <hr>
                <!-- <button type="submit" class="btn vendorRegisterBtn" name="vendorRegisterBtn" id="vendorRegisterBtn">Register</button> -->
                <div class="button-wrap" >
                <input type="submit" name="vendorRegisterBtn" id="vendorRegisterBtn" value="Add" class="btn vendorRegisterBtn">
                <div class="btn solid btn-wrapper" id="cancelbtn">
                    <a href="./vendors.php">Cancel</a>
                </div>
            </div>
                </div>
            </form>


        </div>

        </div>
    </form>


</body>
</html>
