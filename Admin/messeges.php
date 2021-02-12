<?php
    
    session_start();
    if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!='true' || $_SESSION['userType']!='Admin'){
      header("Location: ../login.php");
    } 

    echo "<link rel='stylesheet' type='text/css' href='../css/contactus_messege.css' />";
    
    include('../Includes/template.php');
    //include('../Controls/userControl.php');
    include('../Controls/general.php'); 
    
   
?>

 <div class="container" >

  <table id="customers">
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Messege</th>
          </tr>
  <?php

      $messeges = getAllMesseges();
      while($row = mysqli_fetch_assoc($messeges)){
        echo "
        
        
          <tr>
            <td>".$row['name']."</td>
            <td>".$row['email']."</td>
            <td>".$row['phone']."</td>
            <td>".$row['messege']."</td>
          </tr>

        ";
      }
  ?>
  </table>

</div>

</div>
</body>
</html>