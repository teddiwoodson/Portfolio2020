<?php get_header(); ?>

    <!--======================= Header ====================-->
    	<main class="" id="home">
        <div class="jumbotron jumbotron-fluid d-flex justify-content-center align-items-center">
          <div class="jumbo-content">
          <h1>TEDDI WOODSON</h1>
          <p class="lead">Designer. Developer. Creator.</p>
          <hr class="my-4">
          <p class="lead">
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
          </p>
          </div>
        </div>
    	</main>

    <!--======================= About ====================-->
    	<div class="container" id="about">
    		<div class="card mt-5 mb-5 border-0" style="max-width: 100%;">
    	  	<div class="row teddi d-flex justify-content-center align-items-center">
    	    	<div class="col-md-4">
    	      	<img src="<?php echo get_template_directory_uri(); ?>/img/headshot.jpg" class="card-img" alt="...">
    	    	</div>
    		    <div class="col-md-7">
    		      <div class="card-body">
    		        <h2 class="card-title">Hi, I'm Teddi!</h5>
    		        <p class="card-text">My name is Teddi Woodson and I'm an emerging digital content creator currently seeking opportunities to showcase my skills in the marketing space. I believe that each and every one of us has a story to tell and I want be a part of telling those stories through the creation of written, graphic and web-based content.</p>

                <p class="card-text">I recently earned a Master’s Degree in Mass Communication from the University of Florida, where I specialized in web design. While completing my degree I also worked as a Graphic Designer for the Tampa Bay Lightning. Now that I’ve finished my degree, I am looking for new opportunities that will allow me to put my marketing, development and design skills into practice.</p>

                <p class="card-text">Feel free to check out my resume, take a look at my work, or send me a message!</p>

                <a href="<?php echo get_template_directory_uri(); ?>/img/resume.jpg" target="_blank" type="button" class="btn btn-primary btn-lg">Download Resume</a>
                <a href="mailto: teddiwoodson@gmail.com" target="_blank" type="button" class="btn btn-primary btn-lg">Get in Touch</a>
    		      </div>
    		    </div>
    	  	</div>
    	</div>
    </div>

<!-- ======================= Experience ==================-->

<section id="experience">
  <div class="row divider align-items-center">
    <div class="col-md-7">
      <div class="container">
        <div class="accordion justify-content-center" id="accordionExample">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Graphic Designer
                </button>
              </h5>
              <h6 class="card-subtitle mb-2 text-muted">Tampa Bay Lightning</h6>
            </div>

            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
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
          <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Marketing and Communications Intern
              </button>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">Center for Arts in Medicine</h6>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">August 2018 - October 2018</h6>
              <ul class="card-text">
                <li>Created flyers and posters to promote graduate programs and certification courses offered by the Center</li>
                <li>Edited pre-recorded video clips to be featured on the Center for Arts in Medicine Facebook and Instagram pages</li>
                <li>Designed Google AdWords campaigns to promote graduate programs, this resulted in a 20% page click increase</li>
                <li>Analyzed the effectiveness of current social media content and made recommendations for future posts such as posting more content on students and faculty as they generated more social media interactions</li>
              </ul>
            </div>
          </div>
          </div>
          <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Marketing and Communications Intern
              </button>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">FIS Global</h6>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <h6 class="card-subtitle mb-2 text-muted">June 2017 - August 2017</h6>
              <ul class="card-text">
                <li>Wrote and gathered content for company-wide newsletters that were distributed to 15,000+ employees</li>
                <li>Researched and analyzed industry competitors social media practices to better understand market competition</li>
                <li>Recommended changes for the company blog site which resulted in more frequent and targeted blog posts</li>
                <li>Identified potential publication opportunities to promote new products and upcoming corporate initiatives</li>
              </ul>
            </div>
          </div>
          </div>
        </div>

      </div>
    </div>
    <div class="divider-img col-md-5">
      <img src="<?php echo get_template_directory_uri(); ?>/img/experience.jpg" class="card-img" alt="...">
    </div>
  </div>
</section>


<!-- ======================= Skills ==================-->
<div class="container">
    <div class="card mt-5 mb-5 border-0" style="max-width: 100%;">
      <div class="row teddi d-flex justify-content-center align-items-center">
        <div class="col-md-7">
          <div class="card-body">
            <section class="skills">
              <p>Web Design</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 100%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Strategic Communication</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 100%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Branding</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 85%" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Graphic Design</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 88%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p>Social Media</p>
              <div class="progress">
                <div class="progress-bar bg-success-green" role="progressbar" style="width: 88%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </section>
          </div>
        </div>
        <div class="col-md-4">
          <h2 class="card-title">My Skills</h5>
            <p class="card-text">I am proficient in HTML, CSS, JavaScript and the Adobe Creative Suite. Over the past few years, I have focused also worked to expand my knowledge of strategic communication, Search Engine Optimization (SEO) and social media marketing.</p>
        </div>
      </div>
  </div>
</div>

<section>
  <div class="row divider align-items-center">
    <div class="divider-img col-md-5">
      <img src="<?php echo get_template_directory_uri(); ?>/img/education.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-7">
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">B.S. in Public Relations</h5>
            <h6 class="card-subtitle mb-2 text-muted">University of Florida, Spring 2019</h6>
            <p class="card-text">Concentration in Business and Entrepreneurship</p>
          </div>
        </div>
        <hr class="my-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">M.A. in Mass Communication</h5>
            <h6 class="card-subtitle mb-2 text-muted">University of Florida, Spring 2020</h6>
            <p class="card-text">Specialization in Web Design and Development</p>
          </div>
        </div>
      </div>

      </div>

  </div>
</section>

    <!-- ======================= Blog Posts ==================-->
<div class="container mt-5 mb-5" id="work">
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
