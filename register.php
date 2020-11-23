<?php  
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';
?>


<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Signin Template · Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">
  </head>
    <body class="text-center">

      <form action="register.php" method="POST" class="form-signin">
        <img class="mb-4" src="assets/images/logo/logo.jpg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign up</h1>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" name="reg_fname" placeholder="First Name" value="<?php 
          if(isset($_SESSION['reg_fname'])) {
            echo $_SESSION['reg_fname'];
          } 
          ?>" required>
          <br>
          <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="text" id="inputEmail" class="form-control" name="reg_lname" placeholder="Last Name" value="<?php 
          if(isset($_SESSION['reg_lname'])) {
            echo $_SESSION['reg_lname'];
          } 
          ?>" required>
          <br>
          <?php if(in_array("Your first name must be between 2 and 25 characters<br>", $error_array)) echo "Your first name must be between 2 and 25 characters<br>"; ?>

        <label for="inputEmail" class="sr-only">Email address</label>
         <input type="email" id="inputEmail" class="form-control" name="reg_email" placeholder="Email" value="<?php 
            if(isset($_SESSION['reg_email'])) {
              echo $_SESSION['reg_email'];
            } 
            ?>" required>
        <br>
        <label for="inputEmail" class="sr-only">Confirm Email address</label>
        <input type="email" id="inputEmail" class="form-control" name="reg_email2" placeholder="Confirm Email" value="<?php 
          if(isset($_SESSION['reg_email2'])) {
            echo $_SESSION['reg_email2'];
          } 
          ?>" required>
          <br>
          <?php if(in_array("Email already in use<br>", $error_array)) echo "Email already in use<br>"; 
          else if(in_array("Invalid email format<br>", $error_array)) echo "Invalid email format<br>";
          else if(in_array("Emails don't match<br>", $error_array)) echo "Emails don't match<br>"; ?>


        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" name="reg_password" placeholder="Password" required>


        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="inputPassword" class="form-control" name="reg_password2" placeholder="Confirm Password" required>
        <br>
        <?php if(in_array("Your passwords do not match<br>", $error_array)) echo "Your passwords do not match<br>"; 
        else if(in_array("Your password can only contain english characters or numbers<br>", $error_array)) echo "Your password can only contain english characters or numbers<br>";
        else if(in_array("Your password must be betwen 5 and 30 characters<br>", $error_array)) echo "Your password must be betwen 5 and 30 characters<br>"; ?>

        <input class="btn btn-lg btn-primary btn-block" type="submit" name="register_button" value="Register">
          <br>

          <?php if(in_array("<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>", $error_array)){

          echo "<span style='color: #14C800;'>You're all set! Go ahead and login!</span><br>"; 
          header("Location: login.php");
          }
          ?>

        <a href="login.php" id="signin" class="signin">Already have an account? Sign in here!</a>
      </form>
     
     
  </body>
</html>
