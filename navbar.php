<?php 
include 'page2.php';
include_once 'config.php';
if($_SESSION['nom_utilisateur'] == NULL)
{
      header('location: login.php');
}

?>
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<div class="shadow w-100 mb-5">
  <nav class="navbar navbar-expand-lg bg-primary">
  <div class="container-fluid d-flex justify-content-between">

      <div>
    <img src="images/pngwing.png" style= " width :70px; " alt="">
      <a > <small>musical store </small></a>
      </div>


<div class ="  d-none d-sm-block d-md-block d-sm-none ">
       <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav list-unstyled px-5">
        <li class="nav-item">
        <a href="profil.php" style =" color: black;" class=" h4 px-5">Profil</a>
        </li>
        <li class="nav-item">
        <a href="categorie.php" style =" color: black;" class="h4 px-5">Categorie</a>
        </li>
        <li class="nav-item">
        <a href="statistics.php" style =" color: black;" class="h4 px-5">Dashboard</a>
        </li>
        </div>
</div>
        <div>

 
      <div  class="dropstart d-none d-sm-block ">  
        <img  src = "https://picsum.photos/50" type="image" class=" dropstart dropdown-toggle  rounded-circle px-5" data-bs-toggle="dropdown" aria-expanded="false">
     <ul class="dropdown-menu">
    <li><a class="dropdown-item  text-center" href="#"><?php
      $t=time();
      echo(date('Y-m-d',$t));;
      ?>  </a></li>
    <li><a class="dropdown-item" href="#"><?php echo $_SESSION['nom_utilisateur'];  ?></a></li>
    <li><a class="dropdown-item" href="profil.php">personal information</a></li>
    <li><hr class="dropdown-divider"></li>
    <li><a class="dropdown-item" name ="logout" href="logout.php">logout</a></li>

      </ul>
</div>

      </div>
      <div class=" d-xl-none d-md-none ">
       <button class="navbar-toggler  " type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
       <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a href="profil.php" class="text-white display-7 h4 px-5">profil</a>
        </li>
        <li class="nav-item">
        <a href="categorie.php" class="text-white display-7 h4 px-5">categorie</a>
        </li>
        <li class="nav-item">
        <a href="statistics.php" class="text-white display-7 h4 px-5">dashboard</a>
        </li>
        </div>
</div>




    </div>
</nav>



  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</div>
<div>
      
</div>