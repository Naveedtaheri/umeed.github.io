<!DOCTYPE html>
<!---Coding By CoderGirl | www.codinglabweb.com--->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login & Registration</title>
  <!---Custom CSS File--->
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <?php session_start();?>
<?php include 'db.php'?>
<?php include 'functions.php'?>

  <div class="container">

<?php
if(isset($_POST['login'])){
login($connection,$_POST['email'],$_POST['password']);
}

if(isset($_GET['task'])){
  if($_GET['task']==='logout'){
      session_destroy();
      header('location:login.php?title=login');
  }
}


?>

    <input type="checkbox" id="check">
    <div class="login form">
      <header>Login</header>
      <form action="login.php?title=login" method='POST'>
        <input type="text" placeholder="Enter your email" name='email'>
        <input type="password" placeholder="Enter your password" name='password'>
        <!-- <a href="#">Forgot password?</a> -->
        <input type="submit" class="button" value="Login" name='login'>
      </form>
      <div class="signup">
        <span class="signup">Don't have an account?
         <label for="check">Signup</label>
        </span>
      </div>
    </div>
    
<?php



if(isset($_POST['signup'])){
  $fullname=$_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];

  $s="INSERT INTO profiles VALUES('','$fullname','$email','$phone','$password')";
  $connection->query($s);
}


?>




    <div class="registration form">
      <header>Signup</header>
      <form action="login.php" method='POST'>
        <input type="text" placeholder="Enter your name" name='name' required>
        <input type="email" placeholder="Enter your email" name='email' required>
        <input type="text" placeholder="Enter your phone" name='phone'required >
        <input type="password" placeholder="Create a password" name='password' required>
        <!-- <input type="password" placeholder="Confirm your password"> -->
        <input type="submit" class="button" value="Signup" name='signup'>
      </form>
      <div class="signup">
        <span class="signup">Already have an account?
         <label for="check">Login</label>
        </span>
      </div>
    </div>




  </div>


</body>
</html>
