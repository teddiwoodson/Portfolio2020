<?php get_header(); ?>

    <!--======================= Header ====================-->
    	<main class="">
        <div class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center">
          <div class="jumbo-content">
          <h1>Hello, world!</h1>
          <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
          <hr class="my-4">
          <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </p>
          </div>
        </div>
    	</main>

    <!--======================= About ====================-->
    	<div class="container">
    		<div class="card mt-5 mb-5 border-0" style="max-width: 100%;">
    	  	<div class="row about d-flex justify-content-center align-items-center">
    	    	<div class="col-md-4">
    	      	<img src="<?php echo get_template_directory_uri(); ?>/img/headshot.jpg" class="about card-img" alt="...">
    	    	</div>
    		    <div class="col-md-7">
    		      <div class="card-body">
    		        <h2 class="card-title">Hi, I'm Teddi!</h5>
    		        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    						<a href="#" target="_blank" type="button" class="btn btn-primary btn-lg">View Portfolio</a>
                <a href="<?php echo get_template_directory_uri(); ?>/img/resume.jpg" target="_blank" type="button" class="btn btn-primary btn-lg">Download Resume</a>
    		      </div>
    		    </div>
    	  	</div>
    	</div>

    <!--======================= Services ====================
    <div class="">
    	<div class="card-deck mt-5">
    		<div class="card">
    		  <img src="<?php echo get_template_directory_uri(); ?>/img/graphic.png" class="card-img-top" alt="...">
    		  <div class="card-body">
    		    <h5 class="card-title">Graphic Design</h5>
    		    <p class="card-text">Blurb</p>
    		  </div>
    		</div>
    		<div class="card">
    		  <img src="<?php echo get_template_directory_uri(); ?>/img/web.png" class="card-img-top" alt="...">
    		  <div class="card-body">
    		    <h5 class="card-title">Web Development</h5>
    		    <p class="card-text">Blurb</p>
    		  </div>
    		</div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/brand.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Branding</h5>
            <p class="card-text">Blurb</p>
          </div>
        </div>
    	</div>
    </div>
    </div> -->

<!-- ======================= Skills ==================-->

    <div class="card mt-5 mb-5 border-0" style="max-width: 100%;">
      <div class="row about d-flex justify-content-center align-items-center">
        <div class="col-md-7">
          <div class="card-body">
            <section class="skills">
              <p>HTML</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>CSS</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>JavaScript</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Photoshop</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-4">
          <h2 class="card-title">My Skills</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
  </div>

    <!-- ======================= Blog Posts ==================-->
    <section class="row justify-content-center work">
      <div class="col-12">
        <h2>My Work</h2>
      </div>
      <?php if(have_posts()){
        while(have_posts()){
          the_post(); ?>
          <div class="grid">
            <a href="<?php the_permalink(); ?>">
              <figure class="effect-ming">
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

    <!--======================= Resume ====================-->

<?php get_footer(); ?>
