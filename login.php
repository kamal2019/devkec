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
    <h1 class="text-center" style="font-family: 'Solway', serif;"> Login  </h1>
       <div class="container" style="font-family: 'Solway', serif;">
         <form action="" method="post">
         <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your E-mail">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1"placeholder="Your password" >
  </div>
  
  <button type="submit" class="btn btn-primary">Login</button> <br>
  <label> New Here <br>
  <a class="btn btn-primary text-center" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
   Register
  </a>
  </label>
         </form>
       </div>
</body>
</html>