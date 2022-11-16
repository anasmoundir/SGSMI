<?php

      include_once 'config.php';
      if(isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['password']))
      {
            $fname = $_POST['fullname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $data = "fullname=".$fname."&&email=".$email;

            if(empty($fname))
            {
                  $var = "full name is required";
                  header("Location: signup.php?error=$var&$data");

            }
            else if (empty($email))
            {
                  $var = "email name is required";
                  header("location: signup.php?error=$var&$data");
            }
            else if (empty($password))
            {
                  $var = "password name is required";
                  header("location: signup.php?error=$var&$data");
            }
            else
            {
                  $password = password_hash($password,PASSWORD_ARGON2I);
                  $sql = "INSERT INTO `admin`(`nom_utilisateur`, `gmail`, `password`) VALUES ( '$fname','$email','$password')";
                  mysqli_query($conn,$sql);
                  header("location: signup.php?success=your account has been created succesfully");
                  exit;
            }
      }
