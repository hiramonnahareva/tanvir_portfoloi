<!DOCTYPE html>
<html lang="en">

<html lang="<?php language_attributes(); ?>" class="no-js">
<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <?php wp_head(); ?>
</head>
 <body <?php body_class(); ?>>
 
  <header>
  <nav>
      <div class="nav">
        <input type="checkbox" id="nav-check">
        <div class="nav-header">
          <div class="nav-title">
          <img src="<?php header_image(); ?>" alt="">
          </div>
        </div>
        <div class="nav-btn">
          <label for="nav-check">
            <span></span>
            <span></span>
            <span></span>
          </label>
        </div>
        <div class="nav-links">
          <label for="nav-check" class="cross-icon" id="cross">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/cross.png" alt="">
           </label>
          <div class="nav_list">
            <a href="#" target="_blank">About</a>
            <a href="#" target="_blank">Recant Work</a>
            <a href="#" target="_blank">Benifits</a>
            <a href="#" target="_blank">Recant Work</a>
            <a href="#" target="_blank">Resources</a>
          </div>
          <div class="btn-container">
            <button class="nav-contact-btn"><span>Contact</span> <img src="<?php echo get_template_directory_uri(); ?>/assets/link.png" alt=""></button>
          </div>
        </div>
      </div>
    </nav>
    <div class="banner">
      <h1>DESIGN<img id="designicon" src="<?php echo get_template_directory_uri(); ?>/assets/designicon.svg" alt=""> DEVELOP<img src="<?php echo get_template_directory_uri(); ?>/assets/developicon.svg" alt=""> <br> PRESENTATION<img src="<?php echo get_template_directory_uri(); ?>/assets/presentationicon.svg" alt=""></h1>
      <p>Expert in branding, UI/UX, and presentation design. Develops <br> branded landing pages and websites.</p>
      <div class="service-btn">
        <button>Services</button>
      </div>
    </div>
  </header>
  <main>
    <!-- About Me -->
    <section id="about">
      <div class="about-section">
        <div class="about-image">
          <img class="profile" src="<?php echo get_template_directory_uri(); ?>/assets/profile.png" alt="Profile Image">
        </div>
        <div class="about-content">
          <h2>Hi! It's Tanvir 👋</h2>
          <p>Welcome! I design interfaces, build Wordpress sites, and create Deck Slides and solopreneurship. <img
              src="<?php echo get_template_directory_uri(); ?>/assets/hand.svg" alt=""></p>
          <p>Thanks for Visiting my site. </p>
          <p> Kind Regards, &nbsp; Tanvir Hasan</p>
        </div>
    </section>
    <!-- project section -->

   
  <section id="recent_work" class="projects-section">
      <div class="container">
        <div class="section-heading text-center">
          <h2>Recent Projects</h2>
          <p>We Design Branding, Websites and Presentation. Here I attached few of them.</p>
        </div>
       
        <div class="project-grid">
        <?php $gallery = new wp_Query([
          'post_type' => 'gallery',
        ]); 
        while($gallery -> have_posts()) : $gallery -> the_post(); ?>
                   
           
           
          <div class="project-item">
            <?php the_post_thumbnail(); ?>
          </div>
          <?php endwhile; ?>
        </div>
    </section>
    <!-- project section -->
    <section class="title-section">
      <div class="title-container">
      <h2 class="title">What I do for my Clients: <img src="<?php echo get_template_directory_uri(); ?>/assets/start.svg" alt=""> Branding <img src="<?php echo get_template_directory_uri(); ?>/assets/53.svg" alt=""> Wordpress Website <img src="<?php echo get_template_directory_uri(); ?>/assets/Vector-1.svg" alt="">  Presentation </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/start.svg" alt="">
      <h2 class="title">What I do for my Clients: <img src="<?php echo get_template_directory_uri(); ?>/assets/start.svg" alt=""> Branding <img src="<?php echo get_template_directory_uri(); ?>/assets/53.svg" alt=""> Wordpress Website <img src="<?php echo get_template_directory_uri(); ?>/assets/Vector-1.svg" alt="">  Presentation </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/start.svg" alt="">
      <h2 class="title">What I do for my Clients: <img src="<?php echo get_template_directory_uri(); ?>/assets/start.svg" alt=""> Branding <img src="<?php echo get_template_directory_uri(); ?>/assets/53.svg" alt=""> Wordpress Website <img src="<?php echo get_template_directory_uri(); ?>/assets/Vector-1.svg" alt="">  Presentation </h2>
      <img src="<?php echo get_template_directory_uri(); ?>/assets/start.svg" alt="">
      <h2 class="title">What I do for my Clients: <img src="<?php echo get_template_directory_uri(); ?>/assets/start.svg" alt=""> Branding <img src="<?php echo get_template_directory_uri(); ?>/assets/53.svg" alt=""> Wordpress Website <img src="<?php echo get_template_directory_uri(); ?>/assets/Vector-1.svg" alt="">  Presentation </h2>
    </div>
    </section>
    <!-- Brand section -->
    <section class="brands-graphics-section">
      <div class="container">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Rectangle 14.png" alt="Brand Image">
        </div>
        <div class="content">
          <h2>Brands and Graphics</h2>
          <ul>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> Design Branding </li>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> UI/UX Design </li>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> Stationary & Social Media </li>
          </ul>
          <div class="tag-container">
            <span class="tag">Photoshop</span>
            <span class="tag">Illustrator</span>
            <span class="tag">Figma</span>
            <a href="#" class="learn-more-button">Learn More</a>
          </div>
        </div>
      </div>
    </section>
 <!-- Brand section -->

    <section id="brand" class="brands-graphics-section">
      <div class="container">
        <div class="content">
          <h2>Brands and Graphics</h2>
          <ul>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> Design Branding </li>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> UI/UX Design </li>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> Stationary & Social Media </li>
          </ul>
          <div class="tag-container">
            <span class="tag">Photoshop</span>
            <span class="tag">Illustrator</span>
            <span class="tag">Figma</span>
            <a href="#" class="learn-more-button">Learn More</a>
          </div>
        </div>
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/Rectangle 14.png" alt="Brand Image">
        </div>
      </div>
    </section>
 <!-- Brand section -->

    <section class="brands-graphics-section">
      <div class="container">
          <div class="image">
            <img src="<?php echo get_template_directory_uri(); ?>/Rectangle 14.png" alt="Brand Image">
          </div>
        <div class="content">
          <h2>Brands and Graphics</h2>
          <ul>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> Design Branding </li>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> UI/UX Design </li>
            <li><span class="round-background"><img src="<?php echo get_template_directory_uri(); ?>/assets/right.svg" alt=""></span> Stationary & Social Media </li>
          </ul>
          <div class="tag-container">
            <span class="tag">Photoshop</span>
            <span class="tag">Illustrator</span>
            <span class="tag">Figma</span>
            <a href="#" class="learn-more-button">Learn More</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Resources section -->

    <section id="resources" class="Tips-Tools-section">
      <div class="container">
        <div class="content">
          <h2>Tips & Tools that boost your business growth</h2>
          <p>Share my experiences & used tools that boost my workflow. I hope that also help you.</p>
        </div>
          <div class="blog-resource-container">
            <div class="blog-resource">
            </div>
            <div class="blog-resource">
            </div>
          </div>
      </div>
    </section>
    <!-- breand logo section -->
    <section>
      <div class="brand-logos">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/brandlogo.png" alt="">
      </div>
      
    </section>

    <!-- Review section -->
    <section>
      <div class="review-section">
        <div class="review-content">
          <p>Fantastic job by Tanvir. He's done the audio and slideshow creation from my files for my entire online course. I highly recommend him.</p>
          <h4>Kathryn Price</h4>
          <span> Author, Speaker & Mentor.</span>
        </div>
        <div class="review-image">
          <img class="profile" src="<?php echo get_template_directory_uri(); ?>/assets/Kathryn.png" alt="Profile Image">
        </div>
    </section>
    <!-- why me section  -->

    <section id="benifits">
      <div class="why-me-section">
        <h2>Why Me</h2>
        <div class="why-me-container">
          <div class="column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/pan.svg" alt="Image 1">
            <h5>100% Unique Design</h5>
            <p>All of my designs are unique and Design from scratch</p>
          </div>
          <div class="column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Frame (5).png" alt="Image 2">
            <h5>Fast Turnaround </h5>
            <p>I will do fast project. Within 24 hours project.</p>
          </div>
          <div class="column">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/Frame (6).png" alt="Image 3">
            <h5>Satisfaction Guaranty</h5>
            <p>I'll revise the designs until you're 100% satisfied.</p>
          </div>
        </div>
      </div>
      
    </section>

    <!-- accordion -->

   <section>
    <div class="faq-container">
      <div class="faq-content">
        <h2>FAQs</h2>
      <div class="faq">
        <div class="question">
          <h3>How many years of exexperience you have?</h3>
          <img class="arrow-img" width="20px" src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" alt="">
        </div>
        <div class="answer">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt quos facilis, illum sit consectetur distinctio fugit quis cumque! Inventore in reprehenderit dolor beatae debitis sunt cum exercitationem consectetur architecto!</p>
        </div>
      </div>
      <div class="faq">
        <div class="question">
          <h3>Do you work with Agency?</h3>
          <img class="arrow-img" width="20px" src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" alt="">
        </div>
        <div class="answer">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt quos facilis, illum sit consectetur distinctio fugit quis cumque! Inventore in reprehenderit dolor beatae debitis sunt cum exercitationem consectetur architecto!</p>
        </div>
      </div>
      <div class="faq">
        <div class="question">
          <h3>How many clients you have worked with?</h3>
          <img class="arrow-img" width="20px" src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" alt="">
        </div>
        <div class="answer">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt quos facilis, illum sit consectetur distinctio fugit quis cumque! Inventore in reprehenderit dolor beatae debitis sunt cum exercitationem consectetur architecto!</p>
        </div>
      </div>
      <div class="faq">
        <div class="question">
          <h3>What if I don't like the design?</h3>
          <img class="arrow-img" width="20px" src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" alt="">
        </div>
        <div class="answer">
          <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Esse nesciunt quos facilis, illum sit consectetur distinctio fugit quis cumque! Inventore in reprehenderit dolor beatae debitis sunt cum exercitationem consectetur architecto!</p>
        </div>
      </div>
      </div>
    </div>
   </section>
    

    <!-- contact me -->
    <section id="contact">
      <div class="contact-section">
        <div class="contact-content">
         <div class="contact-btn-container">
          <button>Contact</button>
         </div>
          <h2>It is time to escape the ordinary — lets work</h2>
          <form>
            <div class="form-input">
              <div class="form-flex">
                <div class="form-group">
                  <label for="name">What's your name?</label>
                  <input type="text" id="name" name="name" required>
                </div>
                <div class="form-group">
                  <label for="email">What's your email?</label>
                  <input type="email" id="email" name="email" required>
                </div>
                <div class="form-group">
                  <label for="topic">Select a Discussion Topic</label>
                  <select id="topic" name="topic" required>
                    <option value="">-- Select --</option>
                    <option value="topic1">Topic 1</option>
                    <option value="topic2">Topic 2</option>
                    <option value="topic3">Topic 3</option>
                  </select>
                </div>
                <div class="form-group">
                  <label for="budget">What's your budget?</label>
                  <input type="text" id="budget" name="budget">
                </div>
              </div>
              <div class="form-group">
                <label for="message">Write Details about your project...</label>
                <textarea id="message" name="message" rows="4" required></textarea>
              </div>
            </div>
            <div class="submit-btn-container">
              <button type="submit">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/Group 29063.png" alt="">
    <div class="border"></div>
  <p>Understanding Document Object Model in JavaScript</p>
</footer>
  
  <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
  <?php wp_footer(); ?>
</body>

</html>