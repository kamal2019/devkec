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
       include 'posts.php';
?>

       

       ?> 
             
  

       <footer id="main-footer" class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col text-center py-4">
                    <h3 class="text-light">No waste Food</h3>
                    <p class="text-light">Copyright &copy; 2019 <span id="year"></span></p>
                    <button class="btn btn-light text-light" data-toggle="modal" data-target="#contactmodal"><a href="includes/logout.inc.php">Logout</a></button>
                </div>
            </div>
        </div>
    </footer>
  </div>
</body>
</html>
