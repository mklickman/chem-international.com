<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <title>Welcome | Chem International</title>

  <link rel="shortcut icon" href="img/favicon.png">

  <link rel="stylesheet" href="css/app.css" />
  

  <script src="js/vendor/custom.modernizr.js"></script>

</head>
<body>

  <header class="row">
    <a href="/" class="logo large-6 columns">
      <img class="logo-mark" src="img/chem-international-logo.png" alt="Chem International Logo">
      <h1 class="logo-type">Chem International</h1>
    </a><!-- .logo -->
    
    <nav class="large-6 columns hide-for-small">
      <a href="interior.php" class="first-child<?php if ($interior == true) {echo ' current';} ?>">Products</a>
      <a href="interior.php">About</a>
      <a href="interior.php">Contact</a>
      <a href="interior.php">Sign In</a>
    </nav>

    <select name="mobile-nav" class="mobile-nav show-for-small">
      <option value="/" default>Home</option>
      <option value="products">Products</option>
      <option value="about">About</option>
      <option value="contact">Contact</option>
      <option value="sign-in">Sign In</option>
    </select>
  </header>