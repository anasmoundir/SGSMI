<?php
include 'config.php';

$id = $_GET['id'];
$categorie =$_GET['name'];
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
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  + ADD
</button>
 </div>


<div class=" container">
 <table class="table table-bordered">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">instrument name</th>
      <th scope="col">QTE</th>
      <th scope="col">categorie</th>
      <th scope="col">Action</th>
           </tr>
       </thead>
      <?php 
      $sql ="SELECT * FROM `instrument` WHERE id_categorie = $id";
      $result = mysqli_query($conn,$sql);
      while($row = mysqli_fetch_assoc($result))
      {
            
      echo" <tbody>
             <tr>
             <th scope='row'>1</th>
            <td>{$row['nom_instrument']}</td>
            <td>{$row['nbr_istock']}</td>
            <td>$categorie</td>
               <td>    
               <button class='btn btn-danger'>Danger</button>
               <button  class='btn btn-warning'>Warning</button>
               </td>
            </tr>
      </tbody>";


      } 
 ?>
 </table> 
</div>  
</body>
</html>

<script type="text/javascript" src="managecategorie.js"></script>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">+ADD Products</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="text-uppercase"">nom instrument </label>
    <input type="text" class="form-control" id="instrumentname" aria-describedby="emailHelp">
      <div class="mb-3">
      <label for="exampleInputPassword1" class="text-uppercase" form-label">nbr stock</label>
     <input type="text" class="form-control" id="nbrinstock">
      </div>
      <select class='form-select' aria-label='Default select example'>
            <option selected>Open this select menu</option>
            <?php
      $request = "SELECT `id_categorie`, `name` FROM `categorie`";
      $resulta = mysqli_query($conn, $request );
      while($row1 = mysqli_fetch_assoc($resulta))
      {echo "<option value='{$row1['id_categorie']}'>{$row1['name']}</option>";
      } 
      var_dump($row1);
      ?>
       </select>

       <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Save changes</button>
      </div>

      
      </form>
     
      </div>
     
    </div>
  </div>
</div>


