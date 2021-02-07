<?php 
    session_start();
?>
<html lang="en">
<head>
    <title>Log in</title>
    <link rel="stylesheet" type="text/css" href="./css/login.css">
</head>
<body>
<div class="container">
      <div class="forms-container">
      <div style="text-align: center;">
            <?php
                if(isset($_SESSION['status'])){
                    echo $_SESSION['status'];
                    session_unset();
                    session_destroy();
                }
            ?>
        </div>
        <br>
        <div class="signin">
        <form action="./Controls/loginControl.php" method="post">
        <br><br><br><br><h2 class="title">LOG IN</h2><br><br>
            <div class="input-field">
            <img src="./Assets/icon1.png" width=73% height=73% >
            <input type="text" placeholder="Username" name="uname" required>
            </div><br>
            <div class="input-field">
            <img src="./Assets/icon2.png" width=73% height=73% >
            <input type="password" placeholder="Password" name="psw" required>
            </div><br><br>
            <table><tr><td><input type="submit" name="btnLogin" value="Login" class="btn solid">
            <td><p>&emsp;&emsp;&emsp;</p></td>
            <td><button type="button" class="btn cancelbtn">Cancel</button></td> </tr></table>

             
            <span class="p"><a href="../partify/register.php"><i>I already have an account</i></a></span>
            
    </div>
</form>

</body>
</html>