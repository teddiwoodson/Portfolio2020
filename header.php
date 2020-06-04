<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

  <title><?php bloginfo('name');?></title>

  	<meta name="viewport" content="width=device-width, initial-scale=1">

<!--link to our style.css file -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>

<link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

  <?php wp_head(); ?>
</head>

<body class="container-fluid">
<header>
  <?php if(get_header_image() == '') {?>
      <h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
    }else {?>
      <a href="<?php echo get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" atl="logo" /></a>

    <?php } ?>

  <!--    Made by Erik Terwan    -->
<!--   24th of November 2015   -->
<!--        MIT License        -->
<nav role='navigation'>
  <div id="menuToggle">
    <!--
    A fake / hidden checkbox is used as click reciever,
    so you can use the :checked selector on it.
    -->
    <input type="checkbox" />

    <!--
    Some spans to act as a hamburger.

    They are acting like a real hamburger,
    not that McDonalds stuff.
    -->
    <span></span>
    <span></span>
    <span></span>

    <!--
    Too bad the menu has to be inside of the button
    but hey, it's pure CSS magic.
    -->
    <ul id="menu">
      <?php
        if(has_nav_menu('top-menu')) {
          wp_nav_menu(array('theme_location' => 'top-menu', 'container_class' => 'top-menu-class'));
        } else{
          echo "Please select a top menu through the dashboard";
        }
      ?>
    </ul>
  </div>
</nav>

</header>
