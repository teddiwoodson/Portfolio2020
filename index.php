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
    </div>
<!--- =============== Stats Divider ================ -->

<!-- start count stats -->

<section id="counter-stats" class="wow fadeInRight divider" data-wow-duration="1.4s">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-6 stats">
				<i class="fa fa-code" aria-hidden="true"></i>
				<div class="counting" data-count="900000">0</div>
				<h5>Lines of code</h5>
			</div>

			<div class="col-lg-3 col-6 stats">
				<i class="fa fa-check" aria-hidden="true"></i>
				<div class="counting" data-count="280">0</div>
				<h5>Projects done</h5>
			</div>

			<div class="col-lg-3 col-6 stats">
				<i class="fa fa-user" aria-hidden="true"></i>
				<div class="counting" data-count="75">0</div>
				<h5>Happy clients</h5>
			</div>

			<div class="col-lg-3 col-6 stats">
				<i class="fa fa-coffee" aria-hidden="true"></i>
				<div class="counting" data-count="999">0</div>
				<h5>Cups of coffee</h5>
			</div>


		</div>
		<!-- end row -->
	</div>
	<!-- end container -->

</section>

<!-- end cont stats -->
<section class="divider">
  <div id="carouselExampleIndicators" class="carousel" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="d-block" style="background-color:red;">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Graphic Designer, Tampa Bay Lightning</h3>
              <h6 class="card-subtitle mb-2 text-muted"></h6>
              <h6 class="card-subtitle mb-2 text-muted">October 2019 - May 2020</h6>
              <ul class="card-text">
                <li>Designed print & digital assets for the Tampa Bay Lightning & affiliate organizations including AMALIE Arena, the University of South Florida & the Yuengling Center</li>
                <li>Worked on deadlines to produce collateral such as flyers, web advertisements, animated graphics, & social posts for new & ongoing campaigns</li>
                <li>Collaborated with other departments to create assets for distribution to 600,000+ fans</li>
                <li>Ensured final graphics & layouts were visually appealing & adhered to brand guidelines</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-block">
          <div class="card">
            <div class="card-body">
              <h3 class="card-title">Graphic Designer</h3>
              <h6 class="card-subtitle mb-2 text-muted">Hello</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="d-block">
          <div class="card">
            <div class="card-body"  >
              <h3 class="card-title">Card title</h3>
              <h6 class="card-subtitle mb-2 text-muted">Goodbye</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="card-link">Card link</a>
              <a href="#" class="card-link">Another link</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  </div>

</section>

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
    </div>-->
    </div>

<!-- ======================= Skills ==================-->
<div class="container">
    <div class="card mt-5 mb-5 border-0" style="max-width: 100%;">
      <div class="row about d-flex justify-content-center align-items-center">
        <div class="col-md-7">
          <div class="card-body">
            <section class="skills">
              <p>Web Design</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Adobe Creative Suite</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Branding</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Project Management</p>
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
</div>

    <!-- ======================= Blog Posts ==================-->
<div class="container">
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
</div>

    <!--======================= Resume ====================-->

<?php get_footer(); ?>
