<html lang="en">
<head>
    <title>Register</title>
    <script src="./js/registerUser.js"></script>
    <link rel="stylesheet" href="./css/registerUser.css">
</head>
<body>
    <form method="POST" action="./Controls/registrationControl.php">
        <div class="container">
            <h1><div style="text-align: center;">Register Here</div></h1>
            <hr>

            <label for="type"><b>I am a : </b></label>

            <select name="type" id="type" onchange="jsFunction1();">
                <option value="">- Select Type -</option>
                <option value="user" >User</option>
                <option value="vendor">Service Provider</option>
                
            </select>

            <div class = "user form" id ="user">
            <br><br>
            <label for="useremail"><b>Email Address</b></label><br>
            <input type="useremail" placeholder="Enter Email" name="useremail" id="useremail"><br><br>

            <label for="firstname"><b>First Name</b></label>
            <input type="text" placeholder="Enter First Name" name="firstname" id="firstname">

            <label for="lastname"><b>Last Name</b></label>
            <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname">

            <label for="username"><b>User Name</b></label>
            <input type="text" placeholder="Enter User Name" name="username" id="username">

            <label for="male"><b>Gender</b></label><br>
            <input type="radio" id="male" name="gender" value="M">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="F">
            <label for="female">Female</label><br><br>

            <label for="dob"><b>Date of Birth</b></label><br>
            <input type="date" placeholder="Enter Date of Birth" name="dob" id="dob"><br><br>

            <label for="usercontactno"><b>Contact Number</b></label>
            <input type="text" placeholder="Enter Contact Number" name="usercontactno" id="usercontactno">

            <label for="userpsw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="userpsw" id="userpsw">

            <label for="userpsw-repeat"><b>Repeat Password</b></label>
            <input type="password" placeholder="Repeat Password" name="userpsw-repeat" id="userpsw-repeat">
            <hr>
            <button type="submit" class="userregisterbtn" name="userregisterbtn">Register</button>
            </div>


            <div class = "vendor form" id="vendor">
                <br><br>

                <label for="username"><b>User Name</b></label>
                <input type="text" placeholder="Enter your User Name" name="username" id="username">

                <label for="name"><b>Name of my Business</b></label>
                <input type="text" placeholder="Enter your Business Name" name="businessname" id="name">

                <label for="address"><b>Address</b></label>
                <input type="text" placeholder="Enter your Address" name="address" id="address">

                <label for="vendoremail"><b>Email Address</b></label><br>
                <input type="vendoremail" placeholder="Enter Email" name="vendoremail" id="vendoremail"><br><br>

                <label for="vendorcontactno"><b>Contact Number of my Business</b></label>
                <input type="text" placeholder="Enter Contact Number" name="vendorcontactno" id="vendorcontactno">

                <label for="service"><b>Service</b></label>
                <input type="text" placeholder="Enter your service" name="service" id="service">

                <label for="vendorpsw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="vendorpsw" id="vendorpsw">
    
                <label for="vendorpsw-repeat"><b>Repeat Password</b></label>
                <input type="password" placeholder="Repeat Password" name="vendorpsw-repeat" id="vendorpsw-repeat">
                <hr>
                <button type="submit" class="vendorregisterbtn" name="vendorregisterbtn">Register</button>
                </div>

            <button type="submit" class="vendorregisterbtn" name="vendorregisterbtn">Register</button>

            <p><i>Already have an account?</i> <a href="../login/login.html">Log in</a>.</p>

        </div>

        </div>
    </form>


</body>
</html>
