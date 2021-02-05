<?php
    session_start();

    include('./validate.php');
    require_once('../includes/db/dbConnection.php');
    $db = DBConnection::getInstance();
    $connection = $db->getConnection();

    if(isset($_POST['userRegisterBtn'])){
        $useremail=validate($_POST['useremail']);
        $firstname=validate($_POST['firstname']);
        $lastname=validate($_POST['lastname']);
        $username=validate($_POST['username']);
        $gender=validate($_POST['gender']);
        $dob=validate($_POST['dob']);
        $usercontactno=validate($_POST['usercontactno']);
        $useraddress=validate($_POST['useraddress']);
        $userpsw=validate($_POST['userpsw']);
        $userpsw_repeat=validate($_POST['userpsw_repeat']);
        
        $hash_u = password_hash($userpsw, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user
        VALUES (NULL , '$username' , '$hash_u' , 'User')";
        mysqli_query($connection,$sql);
        $userId=mysqli_insert_id($connection);
        $sql = "INSERT INTO userdetail VALUES ('$userId' , '$useremail' , '$firstname' , '$lastname' , '$gender' , '$dob' , '$usercontactno' , '$useraddress')";
        // echo $sql;
        $res = mysqli_query($connection,$sql);
        // echo $res."abc";
        if($res===TRUE){
            $_SESSION['state']="User Registered Successfully";
        }else {
            $_SESSION['state']="User not Registered";
        }
    }
    if(isset($_POST['vendorRegisterBtn'])){
        $vendorusername=validate($_POST['vendorusername']);
        $businessname=validate($_POST['businessname']);
        $vendoraddress=validate($_POST['vendoraddress']);
        $vendoremail=validate($_POST['vendoremail']);
        $vendorcontactno=validate($_POST['vendorcontactno']);
        $vendorpsw=validate($_POST['vendorpsw']);
        $vendorpsw_repeat=validate($_POST['vendorpsw_repeat']);

        $hash = password_hash($vendorpsw, PASSWORD_BCRYPT);



        $sql = "INSERT INTO user
        VALUES (NULL, '$vendorusername' , '$hash' , 'Vendor')";
        
        
       
        mysqli_query($connection,$sql);
        $spId=mysqli_insert_id($connection);

        $sql = "INSERT INTO vendor
        VALUES ('$spId' , '$businessname' , '$vendoraddress' , '$vendoremail' , '$vendorcontactno')";

        $res = mysqli_query($connection,$sql);
        if($res===TRUE){
            $_SESSION['state']="Vendor Registered Successfully";
        }else {
            $_SESSION['state']="Vendor not Registered";
        }
    }
?>