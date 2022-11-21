<?php
include 'config.php';
$t=time();
$date = date("Y-m-d",$t);
$val = $_SESSION['idadmin'];


if(isset($_POST['instruname'])&&isset($_POST['nbrstock'])&&isset($_POST['categorie']))
{
      $instru_name = $_POST['instruname'];
      $nbr_stk = $_POST['nbrstock'];
      $categorie = $_POST['categorie'];

if(empty($instru_name))
{
      $color ="danger";
      $msg = "fill  the name please ";
      header("location: dashboard.php?error=$msg&$color");
}else if (empty($nbr_stk))
{
      $color ="danger";
      $msg = "fill  the nbr please ".$nbr_stk;
      header("location: dashboard.php?error=$msg&$color");
}else if(empty($categorie))
{     
      $color ="danger";
      $msg = "select  the categorie please ";
      header("location: dashboard.php?error=$msg&$color");
}else
{
     

      $add = "INSERT INTO `instrument`(`nom_instrument`, `nbr_istock`, `id_categorie`) VALUES ('$instru_name','$nbr_stk' ,'$categorie')";
      mysqli_query($conn,$add);
      $color ="success";
      $msg = "the product added well";

      $searsh ="SELECT * FROM `instrument` ORDER BY `id_instrument` DESC LIMIT 1";
      $resultat = mysqli_query($conn,$searsh);
      $rowsearsh = mysqli_fetch_assoc($resultat);
      $target = $rowsearsh['id_instrument'];
      $updattop3 = "INSERT INTO `operation`(`date_operation`, `id_instrument`, `id_admin`) VALUES ('$date','$target','$val')";
      mysqli_query($conn,$updattop3);
      header("location: categorie.php?error=$msg");
      
}
}
 else
 {
       $msg = "error ". $categorie ;
       header("location: categorie.php?error=$msg");
 }


if(isset($_POST['delete']))
      {
      $id_instr = $_POST['id-hidden'];
       $delete = "DELETE FROM `instrument` WHERE `instrument`.`id_instrument` = $id_instr";
       mysqli_query($conn,$delete);
      //store operATION
      $updattop = "INSERT INTO `operation`(`date_operation`, `id_instrument`, `id_admin`) VALUES ('$date',' $id_instr','$val')";
      mysqli_query($conn,$updattop);
      header("location: categorie.php?error=$msg");     
      }

if(isset($_POST['update']))
{     
      $id_instr = $_POST['id-hidden'];
      $name =$_POST['instruname1'];
      $nbr = $_POST['nbrstock1'];
      $categorie_id = $_POST['categorie1'];
     
      $update = "UPDATE `instrument` SET `nom_instrument` = '$name', `nbr_istock` = '$nbr', `id_categorie` = '$categorie_id ' WHERE `instrument`.`id_instrument` = $id_instr";
       mysqli_query($conn,$update);
       //store operation
       $updattop2 = "INSERT INTO `operation`(`date_operation`, `id_instrument`, `id_admin`) VALUES ('$date',' $id_instr','$val')";
       mysqli_query($conn,$updattop2);
       header("location: categorie.php?error=$msg");
}


?>