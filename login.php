<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    
</head>
<body>
    <?php
     include 'bootstrap.php';
    ?>
    <h1 class="text-center" style="font-family: 'Solway', serif; color: #5822a3;"> Login  </h1>
       <div class="container col-md-4 text-center" style="font-family: 'Solway', serif;">
         <form action="" method="post">
         <div class="form-group" style='color: #0dd61a;'>
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your E-mail" required >
   
  </div>
  <div class="form-group"  style='color: #0dd61a;'>
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"placeholder="Your password" required >
  </div>
  
  <button type="submit"  id="singlebutton" name="singlebutton" class="btn btn-primary">Login</button> 
     
     <br>
     <h5 style="color: #2d8043;">OR!</h5>
  
  <a class="btn btn-primary center-block "  data-toggle="collapse" href="register.php" role="button" aria-expanded="false" aria-controls="collapseExample">
   Register
  </a>
  
   
         </form>
       </div>
</body>
</html>