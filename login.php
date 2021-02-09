<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
<div class="bg-image"><?php include('./includes/header.php'); ?></div>
<div class="container">
      <div class="forms-container">
      
            <?php
                if(isset($_SESSION['status'])){
                    echo "<div style='text-align: center; height: 45px; background-color: rgba(0, 0, 0, 0.5); color: red; padding-top: 10px; font-size:20px'>";
                    echo $_SESSION['status'];
                    echo '</div>';
                    session_unset();
                    session_destroy();
                }
            ?>
        
        <br>
        <div class="signin">
        <form action="./Controls/loginControl.php" method="post">
        <br><br><br><br><h2 class="title">LOG IN</h2><br><br>
            <div class="input-field">
            <img src="./Assets/icon1.png" width=73% height=73% >
            <input type="text" placeholder="Username" name="uname" required>
            </div><br>
            <div class="input-field" >
            <img src="./Assets/icon2.png" >
            <input type="password" placeholder="Password" name="psw" required>
            </div><br><br>
            <!-- <table><tr><td><input type="submit" name="btnLogin" value="Login" class="btn solid">
            <td><p>&emsp;&emsp;&emsp;</p></td>
            <td><button type="button" class="btn cancelbtn">Cancel</button></td> </tr></table>
            <div class="btn-field"> -->
            <div class="button-wrap" >
            <input type="submit" name="btnLogin" id="btnLogin" value="Login" class="btn solid btn-wrapper">
                <div class="btn solid btn-wrapper" id="btnRegister">
                    <a href="./register.php">Register</a>
                </div>
            </div>
            </div> 
             
            <!-- <span class="p"><a href="../partify/register.php"><i>I already have an account</i></a></span> -->
            
    </div>
</form>

</body>
</html>