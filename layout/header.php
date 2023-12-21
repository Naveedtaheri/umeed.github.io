<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title><?= $_GET['title'];?></title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="css/admission.css">

        <!----===== Boxicons CSS ===== -->
        <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  </head>
  <body>
  <?php session_start(); ?>
    <?php include 'db.php'?>
    <?php include 'functions.php'?>
  






