<?php 
session_start();
if (isset($_SESSION['uid_session'])) {
  header("location: afterlogin.php");
}else{
}
  ?>

  
   <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Document</title>
  </head>
  <body>
   <?php
   include 'bootstrap.php';
   include 'navbarindex.php';
   ?>
   <br>
   
  <?php
      
       include "slidingimages.php";
       ?>
    
        <div class="container">
        <br>
        <br>
        <br>
        <?php
         include 'posts.php';
         ?>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

       <!-- footer -->
       <footer id="main-footer" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center py-4">
                    <h3 class="text-light">No waste Food</h3>
                    <p class="text-light">Copyright &copy; 2019 <span id="year"></span></p>
                    <button class="btn btn-primary" data-toggle="modal" data-target="#contactmodal">Contact Us</button>
                </div>
            </div>
        </div>
    </footer>


</body>
</html>
