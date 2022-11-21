<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Document</title>
</head>
<body>

<?php
include 'navbar.php';
?>
<div class="row ">
  <div class="col-6 col-md-4">
      <div class="card">
          <h5 class="card-header">Admin</h5>
          <div class="card-body">
            <h5 class="card-title">Admin User</h5>
            <?php
            $count = "SELECT count(id_admin) FROM `admin`";
            $nbr = mysqli_query($conn,$count);
            $row = mysqli_fetch_assoc($nbr);
            $t=time();
            $date = date("Y-m-d",$t);
            echo"
            
            <p class='card-text'>$date, MORROCO</p>
            <h2 class='card-text text-success'>total users :  {$row['count(id_admin)']}</h2>"
            ?>
          </div>
        </div>
  </div>
  <div class="col-6 col-md-4">
      <div class="card">
          <h5 class="card-header">total product</h5>
          <div class="card-body">
            <?php
              $count2 = "SELECT count(id_instrument) FROM `instrument`";
              $nbr2 = mysqli_query($conn,$count2);
              $row2 = mysqli_fetch_assoc($nbr2);
              echo "
            <h5 class='card-title'>total products from all categories</h5>
            <p class='card-text'>$date ,MORROCO</p>
            <h2 class='card-text text-success'>total products : {$row2['count(id_instrument)']}</h2>
            ";?>
          </div>
        </div>
  </div>
  <div class="col-6 col-md-4">
      <div class="card">
          <h5 class="card-header">Operations</h5>
          <div class="card-body">
          <a href ='userhistory.php'>click here to see the historique of the operations</a>
            <?php
              $count3 = "SELECT count(id_operation) FROM `operation`";
              $nbr3 = mysqli_query($conn,$count3);
              $row3 = mysqli_fetch_assoc($nbr3);
              echo "
              
            <p class='card-text'>$date , MORROCO</p>
            <h3 class='card-text text-success'>NBR operation :  {$row3['count(id_operation)']}</h3>
            ";
            ?>
            </div>
        </div>
  </div>
  
</div>
</body>
</html>