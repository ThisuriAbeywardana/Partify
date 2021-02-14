
<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
        header("Location: ../login.php");
    } 
    include('../Includes/template.php');
    require_once('../Controls/general.php'); 
        $id = $_POST['Id'];   
        $res = viewAdmin($id);
        while($row=mysqli_fetch_assoc($res)){
            $userType = $_SESSION['userType'];
           
                $name = $row['fName'].' '.$row['lName'];
                $username=$row['username'];
                $email=$row['email'];
                $contactNo=$row['contactNo'];
?>
<link rel="stylesheet" type="text/css" href="../css/profile.css">
<div class="profile">
<h2><?php echo $name ?>'s Profile</h2>
    <div class="wrap">
    <?php 
        
                echo "<div class='lable'>Name  </div> <span>".$name."</span>
                <div class='lable'>Userame  </div> <span>".$username."</span>
                <div class='lable'>Email Address  </div> <span>".$email."</span>
                <div class='lable'>Account Type  </div> <span>".$userType."</span>
                <div class='lable'>Contact Number  </div> <span>".$contactNo." </span>";
        }
    ?>     
    </div>
    <div class="forms">
        <form action="../Controls/deleteAccount.php" method="POST">
            <button type="submit" id="delete" class="btn" name="btnDelete">Delete Account</button>
        </form>
        <form action="./editAdmin.php" method="POST">
            <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
            <button type="submit" id="editAccountBtn" class="btn" name="btnDelete">Edit Account</button>
        </form>
        
    </div>
    

</div>
</div>
    
</body>
</html>