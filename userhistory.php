<?php
include 'config.php';
 $var  = 0;
     

  

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
<div class="nav">
      <?php include 'navbar.php';?>
</div>
<div class ="container">
 <div class="d-flex justify-content-end">
 


 </div>


<div class=" container">
 <table class="table table-striped table-bordered">
  <thead class="bg-dark text-light" >
    <tr>
      <th scope="col">#</th>
      <th scope="col">OPERATION DATE</th>
      <th scope="col">ID PRODUCT</th>
      <th scope="col">USER</th>
           </tr>
       </thead>
      <?php 
      

      





    
      $sql ="SELECT * FROM `operation`";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result))
      {
       $sql2 ="SELECT  `nom_utilisateur` FROM `admin` WHERE `id_admin`=  {$row['id_admin']}";
      $result2 = mysqli_query($conn,$sql2);
      $row2 = mysqli_fetch_assoc($result2);
     
        $var++;
      echo" <tbody>
             <tr>
             
             <th scope='row'>$var</th>
            <td  >{$row['date_operation']}</td>
            <td >{$row['id_instrument']}</td>
            <td  >
           {$row2['nom_utilisateur']}
            
            </td>
            </tr>
          
      </tbody>";
      } 
 ?>
 </table>
</div>  
</body>
</html>