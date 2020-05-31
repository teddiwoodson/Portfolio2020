<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name');?></title>

  <!--link to our style.css file -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>"/>

  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

  <?php wp_head(); ?>
</head>

<body>
<header>
    <div class="container">
      <div class="row justify-content-center align-items-baseline">
        <div class="col-lg-3" id="logo-img">
        <?php if(get_header_image() == '') {?>
            <h1><a href="<?php echo get_home_url();?>"><?php bloginfo('name');?></a></h1><?php
          }else {?>
            <a href="<?php echo get_home_url();?>"><img src="<?php header_image();?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" atl="logo" /></a>

          <?php } ?>
        </div>
        <div class="col-lg-9 d-flex justify-content-end">
          <nav>
            <?php
              if(has_nav_menu('top-menu')) {
                wp_nav_menu(array('theme_location' => 'top-menu', 'container_class' => 'top-menu-class'));
              } else{
                echo "Please select a top menu through the dashboard";
              }
            ?>
          </nav>
        </div>
      </div>
    </div>
  </header>
