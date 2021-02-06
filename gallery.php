<?php 
    session_start();
?>
<?php
   include('./Includes/header.php');
 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <link rel="stylesheet" type="text/css" href="./css/gallery.css">
      <title>Image Gallery</title>
      
   </head>
   <body>

      
      <h1>PARTIFY GALLERY</h1>

   <div class="grid-container">
   
      <div class="grid-item"> <a target="_blank" href="./Assets/img/birthday/b1.jpg">
         <img src="./Assets/img/birthday/b1.jpg">
         </a></div>
      <div class="grid-item"><a target="_blank" href="./Assets/img/decoration/d1.jpg">
         <img src="./Assets/img/decoration/d1.jpg">
         </a></div>
      <div class="grid-item"><a target="_blank" href="./Assets/img/catering/c1.jpg">
            <img src="./Assets/img/catering/c1.jpg" alt="Forest">
            </a></div>  
      <div class="grid-item"><a target="_blank" href="./Assets/img/catering/c2.jpg">
            <img src="./Assets/img/catering/c2.jpg">
            </a></div>
      <div class="grid-item"><a target="_blank" href="./Assets/img/reception/r1.jpg">
            <img src="./Assets/img/reception/r1.jpg">
            </a></div>
      <div class="grid-item"><a target="_blank" href="./Assets/img/photovideography/p1.jpg">
            <img src="./Assets/img/photovideography/p1.jpg">
            </a></div>
      <div class="grid-item"> <a target="_blank" href="./Assets/img/photovideography/p2.jpg">
            <img src="./Assets/img/photovideography/p2.jpg">
            </a></div> 
      <div class="grid-item"> <a target="_blank" href="./Assets/img/photovideography/p3.jpg">
            <img src="./Assets/img/photovideography/p3.jpg">
            </a></div>
      <div class="grid-item"> <a target="_blank" href="../Assets/img/wedding/w1.jpg">
            <img src="./Assets/img/wedding/w1.jpg">
            </a></div>
      <div class="grid-item"> <a target="_blank" href="../Assets/img/wedding/w2.jpg">
            <img src="./Assets/img/wedding/w2.jpg">
            </a></div>
      <div class="grid-item"> <a target="_blank" href="../Assets/img/wedding/w3.jpg">
            <img src="./Assets/img/wedding/w3.jpg">
            </a></div>
      <div class="grid-item"> <a target="_blank" href="../Assets/img/wedding/w4.jpg">
            <img src="./Assets/img/wedding/w4.jpg">
            </a></div>
   </div>

      
   <?php
        include('./includes/footer.php');
    ?>
   </body>
</html