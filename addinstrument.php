<?php
include 'config.php';

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
      header("location: categorie.php?error=$msg");
}
}
else
{
      $msg = "error ". $categorie ;
      header("location: categorie.php?error=$msg");
}
?>