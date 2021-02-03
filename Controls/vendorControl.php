<?php
include('../includes/db/dbConnection.php');
include('validate.php');

//A new Vendor adds services


mysqli_autocommit($connection,FALSE);
// mysqli_commit($connection);
$status=TRUE;

if(isset($_POST['btnAddService'])){

    $spId=2;//$_SESSION['userId']

    //add catering options
    if(isset($_POST['needMeal'])){
        $provideMeal='Y';

        //add breakfast
        if(isset($_POST['breakfast'])){
            $breakfast='Y';
            $breakfastPrice=validate($_POST['breakfastPrice']);
        }
        else{
            $breakfast='N';
            $breakfastPrice=NULL;
        }

        //add lunch
        if(isset($_POST['lunch'])){
            $lunch='Y';
            $lunchPrice=validate($_POST['lunchPrice']);
        }
        else{
            $lunch='N';
            $lunchPrice=NULL;
        }

        //add dinner
        if(isset($_POST['dinner'])){
            $dinner='Y';
            $dinnerPrice=validate($_POST['dinnerPrice']);
        }
        else{
            $dinner='N';
            $dinnerPrice=NULL;
        }

        $meal = "INSERT INTO catering VALUES ('$spId','$breakfast','$lunch','$dinner','$breakfastPrice','$lunchPrice','$dinnerPrice')";
        $result = mysqli_query($connection,$meal);
        if(!$result===TRUE){
            $status=FALSE;
        }else{
            echo 'no';
        }

    }else {
        $provideMeal='N';
    }

    //add photography options
    if(isset($_POST['needPhotography'])){
        $providePhotography='Y';

        //add packages
        for ($i=0; $i < count($_POST['typeP']);  $i++) { 
                $ptype=$_POST['typeP'][$i];
                $pdesc=$_POST['descriptionP'][$i];
                $pprice=$_POST['priceP'][$i];

                $photo = "INSERT INTO photography VALUES ('$spId','$ptype','$pprice','$pdesc')";
                $result = mysqli_query($connection,$photo);
                if(!$result===TRUE){
                    $status=FALSE;
                }else{
                    echo 'no';
                }
            }
        

    }else{
        $providePhotography='N';
    }

    //add videography options
    if(isset($_POST['needVideography'])){
        $provideVideography='Y';

         //add packages
         for ($i=0; $i < count($_POST['typeV']);  $i++) { 
            $vtype=$_POST['typeV'][$i];
            $vdesc=$_POST['descriptionV'][$i];
            $vprice=$_POST['priceV'][$i];

            $video = "INSERT INTO videography VALUES ('$spId','$vtype','$vprice','$vdesc')";
            $result = mysqli_query($connection,$video);
            if(!$result===TRUE){
                $status=FALSE;
            }else{
                echo 'no';
            }
        }
    }else{
        $provideVideography='N';
    }

    //add decoration options
    if(isset($_POST['needDecoration'])){
        $provideDecor='Y';

         //add packages
         for ($i=0; $i < count($_POST['typeD']);  $i++) { 
            $dtype=$_POST['typeD'][$i];
            $ddesc=$_POST['descriptionD'][$i];
            $dprice=$_POST['priceD'][$i];

            echo $dtype;

            $decor = "INSERT INTO decoration VALUES ('$spId','$dtype','$dprice','$ddesc')";
            $result = mysqli_query($connection,$decor);
            if(!$result===TRUE){
                $status=FALSE;
            }else{
                echo 'no';
            }
        }

    }else{
        $provideDecor='N';
    }

    //add location options
    if(isset($_POST['needLocation'])){
        $provideLocation='Y';

        if(isset($_POST['swimmingPool'])){
            $pool='Y';
        }
        if(isset($_POST['airCondition'])){
            $ac='Y';
        }
        $location=validate($_POST['locationName']);

         //add packages
         for ($i=0; $i < count($_POST['typeL']);  $i++) { 
            $ltype=$_POST['typeL'][$i];
            $ldesc=$_POST['descriptionL'][$i];
            $lprice=$_POST['priceL'][$i];

            $place = "INSERT INTO location VALUES ('$spId','$ltype','$lprice','$ldesc','$location','$ac','$pool')";
            $result = mysqli_query($connection,$place);
            if(!$result===TRUE){
                $status=FALSE;
            }else{
                echo 'no';
            }
        }


    }else{
        $provideLocation='N';
    }

    $sqlvendor= "INSERT INTO service VALUES ($spId,$provideMeal,$providePhotography,$provideVideography,$provideDecor,$provideLocation)";
    $result = mysqli_query($connection,$sqlvendor);
    if($result===TRUE){
        $status=FALSE;
    }else{
            echo 'no';
    }
    
        
    if(!$status){
        mysqli_rollback($connection);
        }
    }    
?>