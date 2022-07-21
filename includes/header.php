<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!--Google Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Secular+One&display=swap" rel="stylesheet" />
  <!--CSS Link-->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsiveNavBar.css" />

  <title><?php echo($title);?> | Conesville</title>
</head>

<header>
  <div class="navbar">
    <div class="navbar-content justify">
      <a href="index" class="logo">
        <img src="/images/logo.png" alt="logo of conesville" />
      </a>
      <div class="burger navbar-toggle toggle" id="js-navbar-toggle">
        <div class="l1"></div>
        <div class="l2"></div>
        <div class="l3"></div>
      </div>
      <ul class="mainnav active" id="menu">
        <?php include('includes/nav.html'); ?>
      </ul>
    </div>
  </div>