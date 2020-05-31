<?php get_header(); ?>

<!-- ======================= Blog Posts ==================-->

  <section class="row justify-content-center">
    <?php if(have_posts()){
      while(have_posts()){
        the_post(); ?>
        <div class="grid">
          <a href="<?php the_permalink(); ?>">
            <figure class="effect-steve">
              <?php  the_post_thumbnail('medium'); ?>
              <figcaption>
                <h2><?php the_title(); ?></h2>
                <p><?php the_excerpt(); ?></p>
              </figcaption>
            </figure>
          </a>
        </div>
      <?php } // ends while loop
    } // ends if statement
    ?>
    </section>

<?php get_footer(); ?>
