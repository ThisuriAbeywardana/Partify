<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"  type="text/css" href="../css/nav.css">
    <link rel="stylesheet"  type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="../css/forms.css">

    <style>
        *{
            padding: 0;
            margin: 0;
            overflow: hidden;
        }
        body{
            background-color: #0e0e23;
        }
        .main-wrap{
            display: grid;
            grid-template-columns: 15% 85%;
        }
        .right{
            display: grid;
            grid-template-rows: 9vh 91vh;
            
        }
        .mainContent{
            background-color: #252954;
            overflow-y: auto;
            margin: 5px 15px;
            border-radius: 8px;
            color: rgb(225, 225, 226);
        }
        .header{
            padding: 3px 0px;
        }
        
.head{
    height: 7vh;
    width: 100%;
    background-color: #252954;
    margin: 5px 15px;
    border-radius: 8px;
    color: rgb(225, 225, 226);
}
.head .username{
    float: right; 
    padding: 0px 25px 0px 0px;
    font-size: 20px;
    font-family: Arial, Helvetica, sans-serif;
}
.logo img{
    height: 60px;
    border-radius: 50%;
}
        

    </style>
</head>
<body>
    <div class="main-wrap">
        <div class="navbar"  >
            <?php
               
                switch ($_SESSION['userType']) {
                    case 'User':
                        include('../User/nav.php');
                        break;
                    case 'Admin':
                        include('../Admin/nav.php');
                        break;
                    case 'Vendor':
                        include('../Vendor/nav.php');
                        break;
                    default:
                        # code...
                        break;
                }
            ?>
        </div>
        <div class="right">
            <div class="header">
                <?php include('../Includes/header2.php'); ?>
            </div>
            <div class="mainContent">
                
           