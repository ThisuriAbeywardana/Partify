<?php
require_once('../Includes/db/dbConnection.php');
$db = DBConnection::getInstance();
$connection = $db->getConnection();
    $name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $messege=$_REQUEST['messege'];
$query=mysqli_query($connection,
"INSERT INTO con_user(name,email,phone,messege) VALUES('$name','$email','$phone','$messege')") or die(mysqli_error($db_connect));
mysqli_close($connection);
header("location: ../index.php");
?>