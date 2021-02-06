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
        if(isset($_POST['needLocation'])){
            $location=validate($_POST['locationProvider']);
            $locationType=validate($_POST['locationType']);
            $location = 'Y';
        }else{
            $location = 'N';
        }
         
        $sqlBooking = "INSERT INTO booking VALUES (NULL,'$userId','$eventName','$eventType','$eventDate','$startTime','$endTime','$meal','$photography','$videography','$decoration','$location','PENDING')";
        // echo $sqlBooking;
        $status=TRUE;
        $result = mysqli_query($connection,$sqlBooking);
        // echo 'Result : '.$result;
        if($result){
            $bookingID=mysqli_insert_id($connection);
            if($meal=='Y'){
                $sqlMeal = "INSERT INTO cateringbooking VALUES ('$bookingID','$cateringService','$mealType','$noOfPlates')";
                // echo 'meal type :'.$mealType;
                $result = mysqli_query($connection,$sqlMeal);
                print_r($result);
                if(!$result){
                    $status=FALSE;
                }
            }else {
                echo 'no meal';
            }
            if($photography=='Y'){
                echo "yes inside";
                $sqlPhoto = "INSERT INTO photographybooking VALUES ('$bookingID','$photographer','$photographyPackage')";
                echo $sqlPhoto;
                $result = mysqli_query($connection,$sqlPhoto);
                
                if(!$result){
                    $status=FALSE;
                }
            }
            if($videography=='Y'){
                $sqlVideo = "INSERT INTO videographybooking VALUES ('$bookingID','$videographer','$videographyPackage')";
                $result = mysqli_query($connection,$sqlVideo);
                echo '<br />';
                echo 'res : '.$result;
                echo '<br />';
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
            if($location=='Y'){
                $sqlLocation = "INSERT INTO locationbooking VALUES ('$bookingID','$location','$locationType')";
                $result = mysqli_query($connection,$sqlLocation);
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
            case 'location':
                $sql = "SELECT p.packtype as 'type',v.name,v.spId FROM vendor v,service s,location p WHERE v.spId=s.spId AND s.location='Y' AND p.spId=s.spId";
                return mysqli_query($connection,$sql);
                
        }
        
       
    }

    function getTypes($id){
        global $connection;
        $sql = "SELECT packtype as 'type' from location WHERE spId='$id'";
        return mysqli_query($connection,$sql);
    }
    // get event data

    function getEvent($id){
        global $connection;
        
        $sqlBooking = 'SELECT * FROM booking WHERE bookingId='.$id;
        $resBooking = mysqli_query($connection,$sqlBooking);
        while($row = mysqli_fetch_assoc($resBooking)){
            return $row;
        }
       


    }
    function getMeals($spvId){
        global $connection;
        $sqlMeal = 'SELECT * FROM cateringbooking WHERE bookingId='.$spvId;
        $resMeal = mysqli_query($connection,$sqlMeal);
        return mysqli_fetch_assoc($resMeal);
        
    }
    function getPhoto($spvId){
        global $connection;
        $sqlMeal = 'SELECT * FROM photographybooking WHERE bookingId='.$spvId;
        $resMeal = mysqli_query($connection,$sqlMeal);
        return mysqli_fetch_assoc($resMeal);
        
    }
    function getVideo($spvId){
        global $connection;
        $sqlMeal = 'SELECT * FROM videographybooking WHERE bookingId='.$spvId;
        $resMeal = mysqli_query($connection,$sqlMeal);
        return mysqli_fetch_assoc($resMeal);
        
    }
    function getDeco($spvId){
        global $connection;
        $sqlMeal = 'SELECT * FROM decorationbooking WHERE bookingId='.$spvId;
        $resMeal = mysqli_query($connection,$sqlMeal);
        return mysqli_fetch_assoc($resMeal);
        
    }
    function getLocation($spvId){
        global $connection;
        $sqlMeal = 'SELECT * FROM decorationbooking WHERE bookingId='.$spvId;
        $resMeal = mysqli_query($connection,$sqlMeal);
        return mysqli_fetch_assoc($resMeal);
        
    }
    // getEvent('48');
?>


<!-- while($row = mysqli_fetch_assoc($resBooking)){
            // array_push($final,$row['eventName'],$row['type'],$row['date'],$row['startTime'],$row['endTime'],$row['meal'],$row['photography'],$row['videography'],$row['decoration']);
            $final = array_merge($final,$row);
            // print_r($final);
           
            
            if($final['photography']=='y' || $final['photography']=='Y' ){
                
                $sqlPhoto = 'SELECT * FROM photographybooking WHERE bookingId='.$id;
                $resPhoto = mysqli_query($connection,$sqlPhoto);
                while($rowInner = mysqli_fetch_assoc($resPhoto)){
                    $final = array_merge($final,$rowInner); 
                }
                

            }
            if($final['videography']=='y' || $final['videography']=='Y'){
                
                $sqlvideo = 'SELECT * FROM photographybooking WHERE bookingId='.$id;
                $resVideo = mysqli_query($connection,$sqlvideo);
                while($rowInner = mysqli_fetch_assoc($resVideo)){
                    $final = array_merge($final,$rowInner); 
                }

            }
            if($final['decoration']=='y' || $final['decoration']=='Y'){
                // echo 'yes meal';
                $sqlDeco = 'SELECT * FROM decorationbooking WHERE bookingId='.$id;
                $resDeco = mysqli_query($connection,$sqlDeco);
                while($rowInner = mysqli_fetch_assoc($resDeco)){
                    $final = array_merge($final,$rowInner); 
                }

            }
        }
         -->