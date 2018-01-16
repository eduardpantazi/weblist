<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Weblist Directory - 2018</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/weblist.css">
	<link rel="stylesheet" href="<?php echo site_url(); ?>assets/css/fontawesome-all.min.css">
	<!-- cand am net -->
	<!--- <link href="https://use.fontawesome.com/releases/v5.0.2/css/all.css" rel="stylesheet"> -->
</head>
<body>
	<nav class="navbar navbar-expand-md bg-primary navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#"><i class="fa d-inline fa-lg fa-cloud"></i><b>&nbsp;weblist</b></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent" aria-controls="navbar2SupportedContent" aria-expanded="false"
        aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>"><i class="fas d-inline fa-home"></i>&nbsp;Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>top10"><i class="fas d-inline fa-list"></i>&nbsp;Top 10</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url(); ?>user/register"><i class="fas d-inline fa-user-plus"></i>&nbsp;Register</a>
          </li>
        </ul>
        <a class="btn navbar-btn ml-2 text-white btn-secondary" href="<?php echo site_url(); ?>user/login"><i class="fas d-inline fa-user"></i> Sign in</a>
      </div>
    </div>
  </nav>
  <div class="container">

    <?php
      //echo $_SESSION['logged'] . "<br />";
      //echo $_SESSION['my_email'] . "<br />";
      //echo "<img class='img-circle' src='". gravatar($_SESSION['my_email']). "'>";
      //echo getRealIpAddr();
      ?>