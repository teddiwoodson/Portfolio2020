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

    div class="">
	<div class="card-deck mt-5">
		<div class="card">
		  <img src="img/graphic.png" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Graphic Design</h5>
		    <p class="card-text">Blurb</p>
		  </div>
		</div>
		<div class="card">
		  <img src="img/web.png" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Web Development</h5>
		    <p class="card-text">Blurb</p>
		  </div>
		</div>
		<div class="card">
		<img src="img/write.png" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Copy Writing</h5>
		    <p class="card-text">Blurb.</p>
		  </div>
		</div>
	</div>
	<div class="card-deck mt-5">
		<div class="card">
		  <img src="img/brand.png" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Branding</h5>
		    <p class="card-text">Blurb</p>
		  </div>
		</div>
		<div class="card">
		  <img src="img/project.png" class="card-img-top" alt="...">
		  <div class="card-body">
		    <h5 class="card-title">Project Management</h5>
		    <p class="card-text">Blurb</p>
		  </div>
		</div>
		<div class="card">
			<a rel="shrink" class="shrink"><img src="img/seo.png" class="card-img-top" alt="...">
			  <div class="card-body">
			    <h5 class="card-title">SEO</h5>
			    <p class="card-text">Blurb.</p>
			  </div></a>
		</div>
	</div>
	<a type="button" class="btn btn-primary btn-lg">Click Here to View My Portfolio</a>
</div>

<?php get_footer(); ?>
