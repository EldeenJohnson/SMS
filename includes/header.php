<?php 
//This includes the session file. This file contains code that starts/resumes a session
//By having it in the header file, it will be included on every page, allowing session capability to be used on every page across the website.
include_once 'includes/session.php'
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    
    <link rel="stylesheet" href="css/site.css" />

    <title>School Management System - <?php echo $title ?></title>

  </head>
  <body>
</br>
</br>
</br>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">ABC Academy</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse container" id="navbarNavAltMarkup">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-warning" aria-current="page" href="registration.php"><b>Registration</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="contact.php">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="about.php">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="policy.php">Privacy Policy</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="viewrecords.php">View Records</a>
        </li>
      </ul>
      <div class="navbar-nav">
        <?php  
          if(!isset($_SESSION['userid'])) {
        ?>
          <a class="nav-link" href="login.php">Login</a>
        <?php } else { ?>
          <a class="nav-link" href="#">Hello <?php echo $_SESSION['username'] ?>!</a>
          <a class="nav-link" href="logout.php">Logout</a>
        <?php } ?>
    </div>
  </div>
</nav>

  <div class="container mb-10">
  
  
