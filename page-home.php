<?php
/*
    Template Name: Home
    Template Type: Page
*/
 ?>

<?php get_header(); ?>

<main class="container">

  <section class="row justify-content-center">
    <div class="col-md-12 justify-content-center">
      <?php dynamic_sidebar('hero-image-home'); ?>
    </div>
  </section>

  <section class="row justify-content-center">
    <div class="col-md-8 align-items-center">
      <?php dynamic_sidebar('about-widget'); ?>
    </div>
  </section>

  <section class="row justify-content-center" id="yellow-section">
    <div class="col-md-10 justify-content-center">
      <p id="quote">“Dandelions, like all things in nature are beautiful when you take the time to pay attention to them.” ― June Stoyer</p>
    </div>
  </section>

  <section class="row justify-content-center">
    <div class="col-md-4">
      <?php dynamic_sidebar('left-widget'); ?>
    </div>
    <div class="col-md-4 ">
      <?php dynamic_sidebar('middle-widget'); ?>
    </div>
    <div class="col-md-4 ">
      <?php dynamic_sidebar('right-widget'); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
