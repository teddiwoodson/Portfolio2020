<?php get_header(); ?>
  <div class="container">
    <div class="row">
      <main class="col-md-12" id="posts">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
              <h2 class="entry-title"><?php the_title(); ?></h2>

              <?php the_content(); ?>
          <?php  } //this ends while loop
          }// this ends if statement
        ?>
      </main>
    </div>
  </div>
<?php get_footer(); ?>
