<?php
require_once('../include/dbdbConnection.php');
include('./validate.php');

$db = DBConnection::getInstance();
$connection = $db->getConnection();

//A new Vendor adds services


// mysqli_autocommit($connection,FALSE);
// mysqli_commit($connection);
$status=TRUE;

if(isset($_POST['btnEditService'])) {

    $spId=14;//$_SESSION['userId'];

  
    //add photography options
    if(isset($_POST['needPhotography'])){
        $providePhotography='Y';

        
        //add packages
        for ($i=0; $i < count($_POST['typeP']);  $i++) { 
        $ptype=$_POST['typeP'][$i];
        $pdesc=$_POST['descriptionP'][$i];
        $pprice=$_POST['priceP'][$i];
        $pid=$_POST['idP'][$i];

        echo $pid;

        if($pid=="0"){
            $photo = "INSERT INTO photography VALUES (NULL,'$spId','$ptype','$pprice','$pdesc')";
            $result = mysqli_query($connection,$photo);
            if($result){
                $status=FALSE;
            }else{
                echo 'yes';
            }
        }    
        else{
            $photo = "UPDATE photography SET albumType='$ptype',price='$pprice',description='$pdesc' WHERE pId='$pid' AND spId='$spId'";
            $result = mysqli_query($connection,$photo);
            if($result){
                $status=FALSE;
            }else{
                echo 'no';
            } 
        }
        }
    }   
        
    }    
?>