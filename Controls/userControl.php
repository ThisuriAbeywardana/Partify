<?php
     if(!isset($_SESSION['loggedIn'])){
        session_start();
     }
    
    require_once('../Includes/db/dbConnection.php');
    $db = DBConnection::getInstance();
    $connection = $db->getConnection();

    include('validate.php');

    //Book New event
    
    if(isset($_POST['btnBookEvent'])){
        echo 'clcked';  
        $eventName=validate($_POST['eventName']);
        $eventType=validate($_POST['eventType']);
        $eventLocation=validate($_POST['eventLocation']);
        $eventDate=validate($_POST['eventDate']);
        $startTime=validate($_POST['startTime']);
        $endTime=validate($_POST['endTime']);
        $userId=$_SESSION['userId'];
        // echo 'User id :'.$_SESSION['username'];
       
        //Meals 
        if(isset($_POST['needMeal'])){
            $cateringService=validate($_POST['cateringService']);
            $mealType=validate($_POST['mealType']);
            $noOfPlates=validate($_POST['noOfPlates']);
            // $platePrice=validate($_POST['platePrice']);
            // $total=$platePrice*$noOfPlates;
            $meal='Y';
            echo $cateringService;

        }else{
            echo 'Meals No';
            $meal='N';
        }
        
        if(isset($_POST['needPhotography'])){
            $photographer=validate($_POST['photographer']);
            $photographyPackage=validate($_POST['photographyPackage']);
            $photography='Y';

        }else{
            $photography='N';
        }

        if(isset($_POST['needVideography'])){
            $videographer=validate($_POST['videographer']);
            $videographyPackage=validate($_POST['videographyPackage']);
            $videography='Y';
        }else{
            $videography='N';
        }

        if(isset($_POST['needDecoration'])){
            $decorator=validate($_POST['decorator']);
            $decoratorPackage=validate($_POST['decoratorPackage']);
            $decoration = 'Y';
        }else{
            $decoration = 'N';
        }
         
        $sqlBooking = "INSERT INTO booking VALUES (NULL,'$userId','$eventName','$eventType','$eventDate','$startTime','$endTime','$meal','$photography','$videography','$decoration','PENDING')";
    
        $status=TRUE;
        $result = mysqli_query($connection,$sqlBooking);
        echo 'Result : '.$result;
        if($result){
            $bookingID=mysqli_insert_id($connection);
            if($meal=='Y'){
                $sqlMeal = "INSERT INTO cateringbooking VALUES ('$bookingID','$cateringService','$meal','$noOfPlates')";
                $result = mysqli_query($connection,$sqlMeal);
                if(!$result){
                    $status=FALSE;
                }
            }
            if($photography=='Y'){
                $sqlPhoto = "INSERT INTO photographybooking VALUES ('$bookingID','$photographer','$photographyPackage')";
                $result = mysqli_query($connection,$sqlMeal);
                if(!$result){
                    $status=FALSE;
                }
            }
            if($videography=='Y'){
                $sqlVideo = "INSERT INTO videographybooking VALUES ('$bookingID','$videographer','$videographyPackage')";
                $result = mysqli_query($connection,$sqlVideo);
                if(!$result){
                    $status=FALSE;
                }
            }
            if($decoration=='Y'){
                $sqlDecoration = "INSERT INTO decorationbooking VALUES ('$bookingID','$decoration','$decoratorPackage')";
                $result = mysqli_query($connection,$sqlDecoration);
                if(!$result){
                    $status=FALSE;
                }
            }

            if($status){
            }
        }else{
            echo 'no';
        }
        if(!$status){

        }
        header("location: ../User/bookings.php");
        
    }


    //get all catering services
    function getServicesProviders($type){
        global $connection;
        switch ($type) {
            case 'meal':
                $sql = "SELECT u.name,u.spId FROM vendor u INNER JOIN service c WHERE u.spId=c.spId AND c.catering='Y'";
                return mysqli_query($connection,$sql);
            case 'photo':
                $sql = "SELECT p.albumType,v.name,v.spId FROM vendor v,service s,photography p WHERE v.spId=s.spId AND s.photography='Y' AND p.spId=s.spId";
                return mysqli_query($connection,$sql);
            case 'video':
                $sql = "SELECT p.type,v.name,v.spId FROM vendor v,service s,videography p WHERE v.spId=s.spId AND s.videography='Y' AND p.spId=s.spId";
                return mysqli_query($connection,$sql);
            case 'deco':
                $sql = "SELECT p.type,v.name,v.spId FROM vendor v,service s,decoration p WHERE v.spId=s.spId AND s.decoration='Y' AND p.spId=s.spId";
                return mysqli_query($connection,$sql);
                
        }
        
       
        
    }


    //get event data

    function getEvent($id){
        $sql = "SELECT * FROM booking b,catering c,videography v,phptography p,decoration d WHERE"

    }
?>