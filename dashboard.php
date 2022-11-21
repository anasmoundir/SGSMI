<?php
include 'config.php';
$categorie = $_GET['name'];
 $id= $_GET['id'];
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
        $var++;
      echo" <tbody>
             <tr>
             
             <th scope='row'>$var</th>
            <td  id='{$row['id_instrument']}nameins' data-name= {$row['nom_instrument']}>{$row['nom_instrument']}</td>
            <td id='{$row['id_instrument']}numins' data-nbr= {$row['nbr_istock']} >{$row['nbr_istock']}</td>
            <td id='{$row['id_instrument']}cateins' data-categorie= {$id}  >$categorie</td>
            <input value = '{$row['id_instrument']}' name = 'id' type ='hidden' >
               <td>    
               <button type='button' class='btn btn-primary' onclick = 'fill({$row['id_instrument']})' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>
 manage your items
</button>
               </td>
            </tr>
          
      </tbody>";
      } 
 ?>
 </table>
 <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  + ADD
</button>
</div>  
</body>
</html>


<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">manage your products</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  action = "addinstrument.php" method = "Post">
        <input type="hidden" name ='id-hidden' id = "hidden-id">
      <label for="exampleInputPassword1"  class="form-label">nom instrument</label>
      <input type="text" name ="instruname1" id = "fillname"  class="form-control" id="instrumentname">
      <label for="exampleInputPassword1" class="text-uppercase form-label">nbr stock</label>
    <input type="number" name= "nbrstock1" id = 'fillqte'  class="form-control" id="nbrinstock">
    <label for="exampleInputPassword1" class="text-uppercase form-label">categorie</label>
    <select  name = 'categorie1' class='form-select' id ='fillcategorie'>
            <option    selected>categories</option>
            <?php
      $request = "SELECT `id_categorie`, `name` FROM `categorie`";
      $resulta = mysqli_query($conn, $request );
      while($row1 = mysqli_fetch_assoc($resulta))
      {echo "<option  value='{$row1['id_categorie']}'>{$row1['name']}</option>";
      } 
    
     ?>
       </select>
    
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class='btn btn-danger' type ='submit' name = 'delete' >delete</button>
        <button  class='btn btn-warning' type ='submit' name = 'update'>upDate</button>
      </div>
      </form>
    </div>
  </div>
</div>





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 " id="exampleModalLabel">+ADD Products</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  action = "addinstrument.php" method = "post">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="text-uppercase">nom instrument </label>
    <input type="text" name ="instruname" class="form-control" id="instrumentname">
      <div class="mb-3">
      <label for="exampleInputPassword1" class="text-uppercase  form-label">nbr stock</label>
     <input type="number" name= "nbrstock" class="form-control" id="nbrinstock">
      </div>

      <label for="exampleInputPassword1" class="text-uppercase  form-label">categorie</label>
      <select name = 'categorie' class='form-select' aria-label='Default select example'>
            <option selected>Open this select menu</option>
            <?php
      $request = "SELECT `id_categorie`, `name` FROM `categorie`";
      $resulta = mysqli_query($conn, $request );
      while($row1 = mysqli_fetch_assoc($resulta))
      {echo "<option  value = '{$row1['id_categorie']}'>{$row1['name']}</option>";
      } 
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
<script src ="script.js"></script>


