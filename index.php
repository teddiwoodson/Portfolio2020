<?php get_header(); ?>

    <!--======================= Header ====================-->
    	<main class="">
    		<div class="jumbotron jumbotron-fluid">
    		<div class="container">
    		</br>
    		</br>
    		</br>
    		</br>
    		</br>
    			<p class="lead"><div class="welcome">
    				<h1>Hi, Im Teddi.</h1>
    				<p>Designer. Developer. Creator.</p>
    				<a href="#" type="button" class="btn btn-primary btn-lg">▼</a>
    			</div></p>
    		</div>
    	</div>
    	</main>

    <!--======================= About ====================-->
    	<div class="container">
    		<div class="card mt-5 mb-5 border-0" style="max-width: 100%;">
    	  	<div class="row no-gutters">
    	    	<div class="col-md-4">
    	      	<img src="<?php echo get_template_directory_uri(); ?>/img/headshot.jpg" class="about card-img" alt="...">
    	    	</div>
    		    <div class="col-md-8">
    		      <div class="card-body">
    		        <h2 class="card-title">About</h5>
    		        <p class="card-text">Blurb about Teddi</p>
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
    						<a href="<?php echo get_template_directory_uri(); ?>/img/resume.jpg" target="_blank" type="button" class="btn btn-primary btn-lg">Resume</a>
    		      </div>
    		    </div>
    	  	</div>
    	</div>

    <!--======================= Portfolio ====================-->
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
    		<img src="<?php echo get_template_directory_uri(); ?>/img/write.png" class="card-img-top" alt="...">
    		  <div class="card-body">
    		    <h5 class="card-title">Copy Writing</h5>
    		    <p class="card-text">Blurb.</p>
    		  </div>
    		</div>
    	</div>
    	<div class="card-deck mt-5">
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/brand.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Branding</h5>
            <p class="card-text">Blurb</p>
          </div>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/project.png" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">Project Management</h5>
            <p class="card-text">Blurb</p>
          </div>
        </div>
        <div class="card">
          <img src="<?php echo get_template_directory_uri(); ?>/img/seo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">SEO</h5>
              <p class="card-text">Blurb.</p>
            </div>
        </div>

    	</div>
    </div>


    <!-- ======================= Blog Posts ==================-->
<section class="row justify-content-center">
  <?php if(have_posts()){ while(have_posts()){the_post(); ?>
  <div class="grid">
    <figure class="effect-steve">
      <?php  the_post_thumbnail('thumbnail'); ?>
      <figcaption>
        <a href="<?php the_permalink(); ?>">
      </figcaption>
    </figure>
  </div>
      <?php } // ends while loop
    } // ends if statement
    ?>
</section>

    <!--======================= Resume ====================-->

<?php get_footer(); ?>
