<?php
include 'config.php';
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['username']))
{


      $email = $_POST['email'];
      $password = $_POST['password'];
      $username = $_POST['username'];
      

      if (empty($email))
      {
            $var = "email name is required";
            header("location: profil.php?error=$var");
      }
      else if (empty($password))
      {
            $var = "password name is required";
            header("location: profil.php?error=$var");
           
      }
      else if (empty($password))
      {
            $var = "password name is required";
            header("location: profil.php?error=$var");
      }

      $sql = "UPDATE `admin` SET  nom_utilisateur = '$username',gmail = '$email', password= '$password' where  nom_utilisateur = '$username'";
      mysqli_query($conn,$sql);
      $var = "success=profile has been updated successfully";
}
else
{
      $var = "error=oops something went wrong";
}
header("location: profil.php?succes=$var");



?>