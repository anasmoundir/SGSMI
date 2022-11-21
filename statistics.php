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
<div class="container">
<div class="row">
  <div class=" col-sm-4">
      <div class="card h-100 ">
          <h5 class="card-header">Admin</h5>
          <div class="card-body  justify-content-around">
          
            <?php
            $count = "SELECT count(id_admin) FROM `admin`";
            $nbr = mysqli_query($conn,$count);
            $row = mysqli_fetch_assoc($nbr);
            $t=time();
            $date = date("Y-m-d",$t);
            echo"
            <img src='images\admin.png'>
            <h5 class='card-title'>Admin User</h5>
            <p class='card-text'>$date, MORROCO</p>
            <h2 class='card-text text-success'>total users :  {$row['count(id_admin)']}</h2>"
            ?>
          </div>
        </div>
  </div>
  <div class="col-sm-4 ">
      <div class="card h-100">
          <h5 class="card-header">total product</h5>
          <div class="card-body">
            <?php
              $count2 = "SELECT count(id_instrument) FROM `instrument`";
              $nbr2 = mysqli_query($conn,$count2);
              $row2 = mysqli_fetch_assoc($nbr2);
              echo "
              <img src='images\product.png'>
            <h5 class='card-title'>total products</h5>
            <p class='card-text'>$date ,MORROCO</p>
            <h2 class='card-text text-success'>total products : {$row2['count(id_instrument)']}</h2>
            ";?>
          </div>
        </div>
  </div>
  <div class="col-sm-4">
      <div class="card h-100 ">
          <h5 class="card-header">Actions</h5>
          <div class="card-body">
            <?php
              $count3 = "SELECT count(id_operation) FROM `operation`";
              $nbr3 = mysqli_query($conn,$count3);
              $row3 = mysqli_fetch_assoc($nbr3);
              echo "
              <img src='images\analyses.png'>
              <h5 class='card-title'>operations</h5>
            <p class='card-text'>$date , MORROCO</p>
            <h3 class='card-text text-success'>NBR operation :  {$row3['count(id_operation)']}</h3>
            ";
            ?>
            </div>
        </div>
  </div>
  
</div>
</div>
<div class=" container my-3">
 <table class="table  table-striped">
  <thead class="bg-dark text-light" >
    <tr>

      <th scope="col">OPERATION DATE</th>
      <th scope="col">ID PRODUCT</th>
      <th scope="col">USER</th>
      <th scope="col">Actions</th>
           </tr>
       </thead>
      <?php 
  
    
      $sql ="SELECT * FROM `operation`";
      $result = mysqli_query($conn,$sql);
      echo "<tbody>";
      while($row = mysqli_fetch_assoc($result))
      {
       $sql2 ="SELECT  `nom_utilisateur` FROM `admin` WHERE `id_admin`=  {$row['id_admin']}";
      $result2 = mysqli_query($conn,$sql2);
      $row2 = mysqli_fetch_assoc($result2);
        if($row['type_operation'] === "Add")
        {
          $color = "btn btn-success"; 
        }
        else if ($row['type_operation'] === "delete")
        {
          $color ="btn btn-danger";
        }else if(trim($row['type_operation']) === "update")
        {
          $color = "btn btn-warning";
        }
      

      echo" 
             <tr>
             

            <td  >{$row['date_operation']}</td>
            <td >{$row['id_instrument']}</td>
            <td  >
           {$row2['nom_utilisateur']}
            
            </td>

            <td >
            <div  disabled class='w-100 {$color}'>
            {$row['type_operation']}
            </div>
             </td>
            </tr>
          
      ";
      } 
      echo "</tbody>";
 ?>
 </table>
</div>  
</body>
</html>