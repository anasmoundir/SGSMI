<!DOCTYPE html>
<?php include 'config.php';?>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <title>Document</title>
</head>
<body>

      <div>
            <?php include 'navbar.php';?>
      </div>
      <?php 
       $theusername = $_SESSION['nom_utilisateur'];
       $sql= "SELECT * FROM `admin` WHERE nom_utilisateur = '$theusername'";
       $result = mysqli_query($conn,$sql);
       $row = mysqli_fetch_assoc($result);
       $variable1 = $row['nom_utilisateur']; 
       $variable2 = $row['gmail'];
       $variable3 = $row['password'];     
      ?>
       <div class="container">
      <form action="pofileupdate.php" method="post">
      <?php if(isset($_GET['error'])) : ?>
      <div class="alert alert-danger" role="alert">
      <?php 
      echo $_GET['error']; ?>
       </div>
      <?php endif?> 


      <?php echo "
      <div class='mb-3'>
    <label for='exampleInputEmail1' class='form-label'>User Name</label>
    <input disabled type='text' class='form-control' id='usernameInputEmail1' value = '$variable1' name ='username'>
    <div id='usernamehelp' class='form-text'></div>
  </div>"?>
  <?php echo "
  <div class='mb-3'>
    <label for='exampleInputEmail1' class='form-label'>Email address</label>
    <input type='email' class='form-control' id='exampleInputEmail1' value = '$variable2'  aria-describedby='emailHelp' name = 'email'>
    <div id='emailHelp' class='form-text'>We'll never share your email with anyone else.</div>
  </div>" ?>
    <?php echo "
  <div class='mb-3'>
    <label for='exampleInputPassword1' class='form-label'>Password</label>
    <input type='password' name = 'password' class='form-control' id='exampleInputPassword1'>
  </div>
  "?>
  <button type="submit" class="btn btn-primary">update info!</button>
</form>
</div> 

</body>
</html>