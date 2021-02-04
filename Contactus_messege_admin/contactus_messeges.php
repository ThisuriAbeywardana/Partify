<?php
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
    header("Location: ../login.php");} 
    
    include('../contact_us/contactus_dbconnect.php');
    $conn = mysqli_connect('localhost','root','','contactus');
    if(mysqli_connect_errno()){
        echo 'failed to connect to MYSQL'.mysqli_connect_errno();

    }
    $query='SELECT * FROM con_user WHERE id='.$id;
    $result=mysqli_query($conn,$query);
    $post =mysqli_fetch_assoc($result);

    mysqli_free_result($result);
    mysqli_close_($conn);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactus messeges</title>
    <link rel="stylesheet" type="text/css" href="../css/main.css">
    <link rel="stylesheet" type="text/css" href="../css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../css/header2.css">
    <link rel="stylesheet" type="text/css" href="../css/profile.css">
    <link rel="stylesheet" type="text/css" href="../css/footer.css">
    <link rel="stylesheet" type="text/css" href="contactus_popup.css">
    <script type='text/javascript' src='contactus_popup.js'></script>

</head>
<body>
 <div class="container" >
    
    <!-- Trigger/Open The Modal -->
<button id="myBtn">view details</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <p><h3><?php echo $post['name'];?></h3>
    <h3><?php echo $post['email'];?></h3>
    <h3><?php echo $post['phone'];?></h3>
    <h3><?php echo $post['messege'];?></h3>
    </p>
  </div>

</div>

</div>
</body>
</html>