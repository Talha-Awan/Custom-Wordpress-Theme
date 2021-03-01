<?php get_header();?>

<!-- ======= Intro Section ======= -->
<section id="intro" 
style="background-image: url('<?php header_image();?>'); 
width: '<?php echo absint(get_custom_header()->width);?>'
height='<?php echo absint(get_custom_header()->height);?>'"
>

    <div class="intro-content">
        <h2>Making <span>your ideas</span><br>happen!</h2>
        <div>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
            <a href="#portfolio" class="btn-projects scrollto">Our Projects</a>
        </div>
    </div>

    <div id="intro-carousel" class="owl-carousel">
        <!-- <img alt="" src="<?php //header_image();?>" width="<?php //echo absint(get_custom_header()->width);?>"  -->
        <!-- height="<?php //echo absint(get_custom_header()->height);?>"> -->
    </div>

</section><!-- End Intro Section -->

<main id="main">

<!-- ======= About Section ======= -->
<section id="about" class="wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 about-img">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/about-img.jpg" alt="">
      </div>

      <div class="col-lg-6 content">
        <h2>Lorem ipsum dolor sit amet, consectetur adipiscing</h2>
        <h3>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>

        <ul>
          <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
          <li><i class="ion-android-checkmark-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
          <li><i class="ion-android-checkmark-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
        </ul>

      </div>
    </div>

  </div>
</section><!-- End About Section -->

<!-- ======= Services Section ======= -->
<section id="services">
  <div class="container">
    <div class="section-header">
      <h2>Services</h2>
      <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
    </div>

    <div class="row">

      <div class="col-lg-6">
        <div class="box wow fadeInLeft">
          <div class="icon"><i class="fa fa-bar-chart"></i></div>
          <h4 class="title"><a href="">Lorem Ipsum</a></h4>
          <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident etiro rabeta lingo.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="box wow fadeInRight">
          <div class="icon"><i class="fa fa-picture-o"></i></div>
          <h4 class="title"><a href="">Dolor Sitema</a></h4>
          <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata nodera clas.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="box wow fadeInLeft" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-shopping-bag"></i></div>
          <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
          <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur trinige zareta lobur trade.</p>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="box wow fadeInRight" data-wow-delay="0.2s">
          <div class="icon"><i class="fa fa-map"></i></div>
          <h4 class="title"><a href="">Magni Dolores</a></h4>
          <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum rideta zanox satirente madera</p>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Services Section -->

<!-- ======= Clients Section ======= -->
<section id="clients" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Clients</h2>
      <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
    </div>

    <div class="owl-carousel clients-carousel">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/client-1.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/client-2.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/client-3.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/client-4.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/client-5.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/client-6.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/client-7.png" alt="">
      <img src="<?php echo get_template_directory_uri();?>/assets/img/clients/client-8.png" alt="">
    </div>

  </div>
</section><!-- End Clients Section -->

<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Our Portfolio</h2>
      <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">App</li>
          <li data-filter=".filter-card">Card</li>
          <li data-filter=".filter-web">Web</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 1</h4>
          <p>App</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-1.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 2</h4>
          <p>App</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-3.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 2</h4>
          <p>Card</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-4.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
          <a href="<?php echo get_template_directory_uri();?>/portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 2</h4>
          <p>Web</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-5.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>App 3</h4>
          <p>App</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-6.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 1</h4>
          <p>Card</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 1"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Card 3</h4>
          <p>Card</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-8.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <img src="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
        <div class="portfolio-info">
          <h4>Web 3</h4>
          <p>Web</p>
          <a href="<?php echo get_template_directory_uri();?>/assets/img/portfolio/portfolio-9.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
          <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

<!-- ======= Testimonials Section ======= -->
<section id="testimonials">
  <div class="container">
    <div class="section-header">
      <h2>Testimonials</h2>
      <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
    </div>
    <div class="owl-carousel testimonials-carousel">

      <div class="testimonial-item">
        <p>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
          Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-1.jpg" class="testimonial-img" alt="">
        <h3>Saul Goodman</h3>
        <h4>Ceo &amp; Founder</h4>
      </div>

      <div class="testimonial-item">
        <p>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
          Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-2.jpg" class="testimonial-img" alt="">
        <h3>Sara Wilsson</h3>
        <h4>Designer</h4>
      </div>

      <div class="testimonial-item">
        <p>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
          Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-3.jpg" class="testimonial-img" alt="">
        <h3>Jena Karlis</h3>
        <h4>Store Owner</h4>
      </div>

      <div class="testimonial-item">
        <p>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
          Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-4.jpg" class="testimonial-img" alt="">
        <h3>Matt Brandon</h3>
        <h4>Freelancer</h4>
      </div>

      <div class="testimonial-item">
        <p>
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-left.png" class="quote-sign-left" alt="">
          Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
          <img src="<?php echo get_template_directory_uri();?>/assets/img/quote-sign-right.png" class="quote-sign-right" alt="">
        </p>
        <img src="<?php echo get_template_directory_uri();?>/assets/img/testimonial-5.jpg" class="testimonial-img" alt="">
        <h3>John Larson</h3>
        <h4>Entrepreneur</h4>
      </div>

    </div>

  </div>
</section><!-- End Testimonials Section -->

<!-- ======= Call To Action Section ======= -->
<section id="call-to-action" class="wow fadeInUp">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 text-center text-lg-left">
        <h3 class="cta-title">Call To Action</h3>
        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
      </div>
      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="#">Call To Action</a>
      </div>
    </div>

  </div>
</section><!-- End Call To Action Section -->

<!-- ======= Team Section ======= -->
<section id="team" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Our Team</h2>
    </div>
    <div class="row">
      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="pic"><img src="<?php echo get_template_directory_uri();?>/assets/img/team-1.jpg" alt=""></div>
          <div class="details">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="pic"><img src="<?php echo get_template_directory_uri();?>/assets/img/team-2.jpg" alt=""></div>
          <div class="details">
            <h4>Sarah Jhinson</h4>
            <span>Product Manager</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="pic"><img src="<?php echo get_template_directory_uri();?>/assets/img/team-3.jpg" alt=""></div>
          <div class="details">
            <h4>William Anderson</h4>
            <span>CTO</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="member">
          <div class="pic"><img src="<?php echo get_template_directory_uri();?>/assets/img/team-4.jpg" alt=""></div>
          <div class="details">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
            <div class="social">
              <a href=""><i class="fa fa-twitter"></i></a>
              <a href=""><i class="fa fa-facebook"></i></a>
              <a href=""><i class="fa fa-google-plus"></i></a>
              <a href=""><i class="fa fa-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Team Section -->

<!-- ======= Contact Section ======= -->
<section id="contact" class="wow fadeInUp">
  <div class="container">
    <div class="section-header">
      <h2>Contact Us</h2>
      <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum fore</p>
    </div>

    <div class="row contact-info">

      <div class="col-md-4">
        <div class="contact-address">
          <i class="ion-ios-location-outline"></i>
          <h3>Address</h3>
          <address>A108 Adam Street, NY 535022, USA</address>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-phone">
          <i class="ion-ios-telephone-outline"></i>
          <h3>Phone Number</h3>
          <p><a href="tel:+155895548855">+1 5589 55488 55</a></p>
        </div>
      </div>

      <div class="col-md-4">
        <div class="contact-email">
          <i class="ion-ios-email-outline"></i>
          <h3>Email</h3>
          <p><a href="mailto:info@example.com">info@example.com</a></p>
        </div>
      </div>

    </div>
  </div>

  <div class="container mb-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>

  <div class="container">
    <div class="form">
      <form action="forms/contact.php" method="post" role="form" class="php-email-form">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
          </div>
          <div class="form-group col-md-6">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
          <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
          <div class="validate"></div>
        </div>
        <div class="form-group">
          <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
          <div class="validate"></div>
        </div>

        <div class="mb-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>

        <div class="text-center"><button type="submit">Send Message</button></div>
      </form>
    </div>

  </div>
</section><!-- End Contact Section -->

</main><!-- End #main -->

<?php get_footer();?>