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
                  $sql= "SELECT * FROM `admin` WHERE gmail = '$email' AND password = '$password'";
                  $result = mysqli_query($conn,$sql);
                  $row = mysqli_fetch_assoc($result);
                  $variable = $row['nom_utilisateur']; 
                  if(mysqli_num_rows($result) > 0)
                  {
                   $_SESSION['nom_utilisateur'] = $variable;
                   header("location: categorie.php");
                    
                  }else 
                  {

                        $var = "enter the valid email or password ".$variable;
                        header("location: login.php?error=$var&$data");
                  }

                  }
            }
