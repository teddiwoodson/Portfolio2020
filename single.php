<?php get_header(); ?>
  <div class="container">
    <div class="row justify-content-center">
      <main class="col-12 post">
        <?php
          if(have_posts()) {
            while(have_posts()){
              the_post(); ?>
              <h2 class="entry-title"><?php the_title(); ?></h2>
              <?php the_content(); ?>

          <?php  } //this ends while loop
          }// this ends if statement
        ?>
        <div class="d-flex justify-content-around">
          <div class=""><?php next_post_link( '%link', 'Next' ); ?></div>
          <div class=""><?php previous_post_link( '%link', 'Previous' ); ?></div>
        </div>
        <a class="btn btn-primary btn-lg" href="<?php echo get_home_url(); ?>">Return Home</a>
        <div>
      </main>
    </div>
  </div>
<?php get_footer(); ?>
