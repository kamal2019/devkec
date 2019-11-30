<html>
    <head>
        <style type='text/css'>
            span {
                text-decoration:underline;
                color:blue;
                cursor:pointer;
            }
        </style>
        <script>
        //     // show the given page, hide the rest
        //     function show(elementID) {
        //         // try to find the requested page and alert if it's not found
        //         var ele = document.getElementById(elementID);
        //         if (!ele) {
        //             alert("no such element");
        //             return;
        //         }

        //         // get all pages, loop through them and hide them
        //         var pages = document.getElementsByClassName('page');
        //         for(var i = 0; i < pages.length; i++) {
        //             pages[i].style.display = 'none';
        //         }

        //         // then show the requested page
        //         ele.style.display = 'block';
        //     }
         </script>
    </head>
    <body>
 <?php
 include 'bootstrap.php';
 ?>
<?php
     include 'navbarafterlogin.php';
     ?>
   


        <div class="container">
      <div>
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
