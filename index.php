<?php get_header(); ?>

  <div class="container">
    <div class="row justify-content-center" id="post-row">
      <?php if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="col-lg-3 col-md-6 col-sm-12" id="post">

            <div class="post-featured-image">
              <a href="<?php the_permalink(); ?>">
                <?php  the_post_thumbnail('medium'); ?>
              </a>
            </div>

            <h3>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
              </a>
            </h3>

            <p class="post-info"><?php echo "Published " . get_the_date(); echo " | "; echo "Written by: " . get_the_author(); ?></p>
            <?php the_excerpt(); ?>

            <a class="btn btn-primary btn-sm" href="<?php the_permalink(); ?>">Read More</a>
          </div>


        <?php } // ends while loop
      } // ends if statement
      ?>
    </div>
  </div>

<?php get_footer(); ?>
