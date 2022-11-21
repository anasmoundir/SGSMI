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
<div class="row ">
<?php 
$sql = "SELECT * FROM categorie";
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
     echo" <div class='col-md-6 '>
            <div class='card' >
            <h5 class='card-title'>{$row['name']}</h5>
            <img class='card-img-top' src='https://mdbootstrap.com/img/Photos/Others/images/76.jpg' alt='Card image cap'>
                  <div class='card-body'>
                  <p class='card-text'>{$row['Description']}</p>
                  <a href='dashboard.php?id={$row['id_categorie']}&name={$row['name']}' class ='btn btn-danger'>see the items</a>
                  </div>
            </div>
      </div>
";
}
?>
</div>
</div>


</body>
</html>