<?php
    session_start();

    include('./validate.php');
    require_once('../includes/db/dbConnection.php');
    $db = DBConnection::getInstance();
    $connection = $db->getConnection();

    if(isset($_POST['deleteEvent'])){
        echo 'yes';
        $eventId = $_POST['bId'];
        $sql = 'DELETE FROM booking WHERE bookingId ='.$eventId;
        $res = mysqli_query($connection,$sql);
        if($res===TRUE){
            $_SESSION['state']="Booking Deleted Successfully";
            header("location: ../Admin/events.php");
        }else {
            echo  'not dlyed';
        }

    }
    if(isset($_POST['adminregisterbtn'])){
        $email=validate($_POST['email']);
        $fname=validate($_POST['fname']);
        $lname=validate($_POST['lname']);
        $contactno=validate($_POST['contactno']);
        $adminusername=validate($_POST['adminusername']);
        $psw=validate($_POST['psw']);
        $psw_repeat=validate($_POST['psw_repeat']);

        $hash_ac = password_hash($psw, PASSWORD_BCRYPT);

        $sql = "INSERT INTO user
        VALUES (NULL , '$adminusername' , '$hash_ac' , 'Admin')";
        mysqli_query($connection,$sql);
        $adminId=mysqli_insert_id($connection);
        $sql = "INSERT INTO admindetail VALUES ('$adminId' , '$email' , '$fname' , '$lname' , '$contactno')";
        // echo $sql;
        $res = mysqli_query($connection,$sql);
        // echo $res."abc";
        if($res===TRUE){
            $_SESSION['state']="Admin Registered Successfully";
        }else {
            $_SESSION['state']="Admin not Registered";
        }
    }
?>