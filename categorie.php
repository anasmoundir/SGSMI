<?php
include 'config.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.2/js/bootstrap.min.js" integrity="sha512-5BqtYqlWfJemW5+v+TZUs22uigI8tXeVah5S/1Z6qBLVO7gakAOtkOzUtgq6dsIo5c0NJdmGPs0H9I+2OHUHVQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body >
<div class="nav mb-5">
      <?php include 'navbar.php';?>
</div>


<div class="container">
<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categorie 1</h5>
        <img class="w-50" src="./images/girl-842719_640.jpg" alt="">
        <p class="card-text">Donec nec justo eget felis facilisis fermentum. .</p>
        <a href="#" data-cat="1" class="btn btn-primary">go to categorie products</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categorie 2</h5>
        <img class="w-50" src="./images/girl-842719_640.jpg" alt="">
        <p class="card-text"> Aliquam porttitor mauris sit amet orci. Aenean dignissim pellentesque felis.</p>
        <a href="#"  data-cat="1" class="btn btn-primary">go to categorie products</a>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categorie 3</h5>
        <img class="w-50" src="./images/girl-842719_640.jpg" alt="">
        <p class="card-text">Donec nec j Aenean dignissim pellentesque felis.</p>
        <a href="#" data-cat="1" class="btn btn-primary">go to categorie products</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Categorie 4</h5>
        <img class="w-50" src="./images/girl-842719_640.jpg" alt="">
        <p class="card-text">Donec nec justosit amet orci. Aenean dignissim pellentesque felis.</p>
        <a href="#" data-cat="1" class="btn btn-primary">go to categorie products</a>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>