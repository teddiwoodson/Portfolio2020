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

          <a class="btn btn-primary btn-lg"><?php previous_post_link( 'Previous' ); ?></a>
          <a class="btn btn-primary btn-lg"><?php next_post_link( 'Next' ); ?></a>

          <a class="btn btn-primary btn-lg" href="<?php echo get_home_url(); ?>">Home</a>
        </div>
        <div>
      </main>
    </div>
  </div>
<?php get_footer(); ?>
