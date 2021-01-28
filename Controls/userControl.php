<?php
    session_start();
    require_once('../Includes/db/dbConnection.php');
    $db = DBConnection::getInstance();
    $connection = $db->getConnection();

    include('validate.php');

    //Book New event

    if(isset($_POST['btnBookEvent'])){
        $eventName=validate($_POST['eventName']);
        $eventType=validate($_POST['eventType']);
        $eventLocation=validate($_POST['eventLocation']);
        $eventDate=validate($_POST['eventDate']);
        $startTime=validate($_POST['startTime']);
        $endTime=validate($_POST['endTime']);
        $userId=$_SESSION['userId'];
        echo 'User id :'.$_SESSION['username'];
       
        //Meals 
        if(isset($_POST['needMeal'])){
            $cateringService=validate($_POST['cateringService']);
            $mealType=validate($_POST['mealType']);
            $meal='Y';
            

        }else{
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
            $photographer=validate($_POST['videographer']);
            $photographyPackage=validate($_POST['videographyPackage']);
            $videography='Y';
        }else{
            $videography='N';
        }

        if(isset($_POST['needDecoration'])){
            $photographer=validate($_POST['decorator']);
            $photographyPackage=validate($_POST['decoratorPackage']);
            $decoration = 'Y';
        }else{
            $decoration = 'N';
        }
         
        $sqlBooking = "INSERT INTO booking  VALUES (NULL,$userId,'$eventName','$eventType','$eventDate','$startTime','$endTime','$meal','$photography','$videography','$decoration')";
        
        
        
        
        $result = mysqli_query($connection,$sqlBooking);
        if($result===TRUE){
            $bookingID=mysqli_insert_id($connection);
            if($meal='Y'){
                $sqlMeal = "INSERT INTO cateringbooking VALUES ('$bookingID',' ";
                
            }
        }else{
            echo 'no';
        }
        
    }

?>