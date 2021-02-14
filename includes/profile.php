<div class="profile">
<h2>My Profile</h2>
    <div class="wrap">
    <?php 
        require_once('../Controls/general.php'); 
        $res = getUSerDetails($_SESSION['userId']);
        while($row=mysqli_fetch_assoc($res)){
            $userType = $_SESSION['userType'];
            if($userType=='Vendor' || $userType=='User'){
                $name = $row['name'];
                $username=$row['username'];
                $email=$row['email'];
                $contactNo=$row['contactNo'];
                $address=$row['address'];
                echo "<div class='lable'>Name  </div> <span>".$name."</span>
                <div class='lable'>Userame  </div> <span>".$username."</span>
                <div class='lable'>Address  </div> <span>". $address."</span>
                <div class='lable'>Email Address  </div> <span>".$email."</span>
                <div class='lable'>Account Type  </div> <span>".$userType."</span>
                <div class='lable'>Contact Number  </div> <span>".$contactNo." </span>";
            }else if($userType=='Admin'){
                $name = $row['fName'].' '.$row['lName'];
                $username=$row['username'];
                $email=$row['email'];
                $contactNo=$row['contactNo'];
                echo "<div class='lable'>Name  </div> <span>".$name."</span>
                <div class='lable'>Userame  </div> <span>".$username."</span>
                <div class='lable'>Email Address  </div> <span>".$email."</span>
                <div class='lable'>Account Type  </div> <span>".$userType."</span>
                <div class='lable'>Contact Number  </div> <span>".$contactNo." </span>";
            }
            else{
               
            }
            
         
        }

    ?>
    
        
    </div>
    

    <div class="forms">
        <form action="../Controls/deleteAccount.php" method="POST">
            <button type="submit" id="delete" class="btn" name="btnDelete">Delete Account</button>
        </form>
        <form action="../Controls/logoutControl.php" method="post">
            <button type="submit" id="logout" class="btn">Logout</button>
        </form>
    </div>
    

</div>