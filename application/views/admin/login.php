<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>">
   <title>Admin - login </title>

</head>

<body>
   <div class="login col-md-4 mx-auto text-center">
      <h1>ADMIN LOGIN</h1>
      <hr>
      <form method="post" action="<?php echo site_url('admin/login/verify'); ?>">
         <div class="form-group">
            <input type="text" name="username" placeholder="Username" class="form-control">
         </div>

         <div class="form-group">
            <input type="password" name="password" placeholder="Password" class="form-control">
         </div>

         <div class="form-group">
            <input type="submit" name="submit" value="Login" class="btn btn-primary">
         </div>
   </div>
   </form>
   </div>
</body>

</html>