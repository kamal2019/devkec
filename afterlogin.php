<?php 
session_start();
$phone=$_SESSION['phone_session'];
 ?>
<html>
    <head>
        <!-- <style type='text/css'>
            span {
                text-decoration:underline;
                color:blue;
                cursor:pointer;
            }
        </style>
        -->
    </head>
    <body>
 <?php
 include 'bootstrap.php';
 ?>
<?php
     include 'navbarafterlogin.php';
     ?>
   


      
      
        <?php
       include 'slidingimages.php';
       include 'postfordistribute.php';
?>

       

       ?> 
             
  

      
  </div>
</body>
</html>
