<?php
require_once('../Includes/db/dbConnection.php');
$db = DBConnection::getInstance();
$connection = $db->getConnection();
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $messege=$_REQUEST['messege'];
$query=mysqli_query($connection,
"INSERT INTO contactus VALUES(NULL,'$name','$email','$phone','$messege')");
mysqli_close($connection);
header("location: ../contactus.php");
?>