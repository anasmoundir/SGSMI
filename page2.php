<?php
      include_once 'config.php';
      if(isset($_POST['email']) && isset($_POST['password']))
      {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $data = "email=".$email;
            
      
            if (empty($email))
            {
                  $var = "email name is required";
                  header("location: login.php?error=$var&$data");
            }
            else if (empty($password))
            {
                  $var = "password name is required";
                  header("location: login.php?error=$var&$data");
            }
            else
            {
                  
                  $sql= "SELECT * FROM `admin` WHERE gmail = '$email'";
                  $result = mysqli_query($conn,$sql);
                  $row = mysqli_fetch_assoc($result);
                  $variable = $row['nom_utilisateur']; 
                  $variable2 = $row['id_admin'];
                  if((password_verify($password, $row['password']) == true )&& (mysqli_num_rows($result) > 0))
            {
                   $_SESSION['nom_utilisateur'] = $variable;

                   $_SESSION['idadmin'] =  $variable2;
                   header("location: categorie.php");
            }
                  else 
                  {

                        $var = "enter the valid email or password ".$variable;
                        header("location: login.php?error=$var&$data");
                  }

                  }
            }
