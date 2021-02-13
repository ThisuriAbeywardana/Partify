<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true'){
        header("Location: ../login.php");
    }
    require_once('../Includes/db/dbConnection.php');

    $db = DBConnection::getInstance();
    $connection = $db->getConnection();

    if(isset($_POST['btnDelete'])){
        $userId = $_SESSION['userId'];
        $sql="DELETE FROM user WHERE userId='$userId'";
        if(mysqli_query($connection,$sql)===TRUE){
            echo 'deleted';
            header("Location: ./logoutControl.php");
        }else{
            echo 'failed';
        }
    }
    if(isset($_POST['btnDeleteUser'])){
        $userId = $_POST['userId'];
        $sql="DELETE FROM user WHERE userId='$userId'";
        if(mysqli_query($connection,$sql)===TRUE){
            echo 'deleted';
            $_SESSION['btnDeleteUser']="User account Deleted Successfully";
            header("Location: ./logoutControl.php");
        }else{
            echo 'failed';
            $_SESSION['btnDeleteUser']="User account Deletion Failed";
        }
    }
    if(isset($_POST['deleteVendor'])){
        $userId = $_POST['spId'];
        $sql="DELETE FROM user WHERE userId='$userId'";
        if(mysqli_query($connection,$sql)===TRUE){
            echo 'deleted';
            $_SESSION['deleteVendor']="Vendor account Deleted Successfully";
            header("Location: ./logoutControl.php");
        }else{
            echo 'failed';
            $_SESSION['deleteVendor']="Vendor account Deletion Failed";
        }
    }
    // $sql="DELETE FROM user WHERE userId='$userId'";
    //     if(mysqli_query($connection,$sql)===TRUE){
    //         echo 'deleted';
    //         header("Location: ./logoutControl.php");
    //     }else{
    //         echo 'failed';
    //     }
    
     if(isset($_POST['deleteAdmin'])){
        $userId = $_POST['id'];
        $sql="DELETE FROM user WHERE userId='$userId'";
        if(mysqli_query($connection,$sql)===TRUE){
            echo 'deleted';
            
            $_SESSION['deleteAdmin']="Admin account Deleted Successfully";
        }else{
            $_SESSION['deleteAdmin']="Admin account Deletion Failed";
        }
        header("Location: ../Admin/administrators.php");
     }
?>