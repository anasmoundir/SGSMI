<?php include_once 'config.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link  rel="stylesheet" type = "text/css"  href = "css/style.css">
      <title>sign up page</title>
</head>
<body class="d-flex "  >

      <img width="100px" class="d-none d-lg-block d-xl-block rounded vh-100"  style="flex: 0 0 55%;" src="images/guitar-756326_1920.jpg" alt="guitar image">
      <div class="col d-flex d-sm-inline-flex">
      <div   style="flex: 45%;" class="container">
      <div class="card-body  ">
      <div class="text-center">
      <img src="images/pngwing.png"  width ="90" alt="">
      <h3 class= "py-2">welcome to your store admin side</h3>
      </div>

       <div class = "container card-text h-75 d-flex justify-content-center  align-items-center ">

       <form style="height:500px" class = "form-control-lg shadow w-75 p-5  " action = "page.php" method = "post">
       <h4>create your account </h4>
      
      <?php if(isset($_GET['error'])) : ?>
      <div class="alert alert-danger" role="alert">
      <?php 
      echo $_GET['error']; ?>
       </div>
      <?php endif?> 


      <?php if(isset($_GET['success'])) : ?>
      <div class="alert alert-success" role="alert">
      <?php 
      echo $_GET['success']; ?>
       </div>
      <?php endif?> 

      <div class="mb-3">
      <label for="exampleInputEmail1">full name</label>
      <input type="text" 
      class="form-control"  
      name = "fullname"  
      id ="name"
      placeholder =" enter your full name  here "
      value = "<?php echo (isset($_GET['fullname'])) ? $_GET['fullname'] : "";  ?>">
      </div>

      <div class="mb-3">
            <label for="exampleInputEmail1">gmail</label>
            <input type="email" 
            class="form-control"   
            name = "email"  
            placeholder =" enter your gmail   here  "
            value = "<?php echo (isset($_GET['email'])) ? $_GET['email'] : "";  ?>">  
      </div>

      <div class="mb-3">
            <label for="exampleInputEmail1">password</label>
            <input type="text" class="form-control" name = "password"   placeholder =" enter your password here " >

      </div>
      <button type='submit'  onsubmit="validate(,,)"    class='btn btn-primary'>sign up</button>
      <a href="login.php" class = "link-secondary">login</a>

      </form>
      </div>
      </div>
</div>
      <script src ="validation.js"></script>
      </body>
      
      </html>   