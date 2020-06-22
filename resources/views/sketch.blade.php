@extends('layouts.front')

@section('styles')

@stop

@section('content')

    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <img class ="navbar-brand js-scroll-trigger"src="{{asset('front_assets/img/logo.png')}}" alt="Smiley face" height="124" width="175"> </a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="{{route('careers')}}">careers</a>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--  <a class="nav-link js-scroll-trigger" href="#about">About</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--  <a class="nav-link js-scroll-trigger" href="#team">Team</a>-->
                    <!--</li>-->
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header -->
    <header class="masthead">
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Welcome To Digital Capital</div>
                <div class="intro-heading text-uppercase">e-Business Solutions</div>
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a>
                <!--<a class="btn btn-info btn-xl text-uppercase js-scroll-trigger" href="FLYER TEST 1.pdf">Download our Brochure</a>-->

            </div>
        </div>
    </header>

    <!-- Services -->
    <section class="page-section" id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Services</h2>
                    <h3 class="section-subheading text-muted">Transfers you to the e-Business World</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-shopping-bag fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">E-Commerce</h4>
                    <p class="text-muted">We’ll be there to support you at every juncture in creating your eCommerce site. From planning and branding to UI/UX. We’ll design your site in-house and carry out all stages of development, including fully comprehensive QA cycles.</p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">Web Applications</h4>
                    <p class="text-muted">If you are looking to produce your next creative idea or want development tools to simplify your business process and increase productivity, Digital Capital uses proven methodology and strategy to develop the solution that will put you in control, helping you grow by freeing up time to focus on what you're good at.</p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-mobile fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">Mobile Applications</h4>
                    <p class="text-muted">Delivering end-to-end Custom Mobile application development, whether you need a custom, native iOS, Android app. If you have a business that seeks to reach its customers through internet, the mobile users need to be tapped. The most effective way to do it right now is having your own mobile application.</p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-users fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">Custom CRM Development</h4>
                    <p class="text-muted">Whether you have a large corporation or a small business, we can serve B2B or B2C companies running CRM solutions as well as middle-sized and small businesses, we have a broadened understanding of customer touchpoints and can optimize functionality to CRM software packages. We provide the necessary technology for managing all your company’s relationships and interactions with customers and potential clients.
                    </p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-question fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">IT Consulting</h4>
                    <p class="text-muted">Digital Capital offers the full life cycle of IT support and consultancy: Assess, Advise, Design, Deploy, IT Support &amp; Managed IT Services. </p>
                </div>
                <div class="col-md-4">
          <span class="fa-stack fa-4x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-server fa-stack-1x fa-inverse"></i>
          </span>
                    <h4 class="service-heading">Web Monitoring and Maintenance</h4>
                    <p class="text-muted">Website Maintenance is the cornerstone to our company’s vast range of services, without it, your website can quickly become tired, suffer from bugs and open to security vulnerabilities. We offer a range of Website Maintenance Subscription Packages to suit any budget.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light page-section" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{asset('front_assets/img/portfolio/01-thumbnail.jpg')}}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Deelak</h4>
                        <p class="text-muted">e-Commerce</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img class="img-fluid" src="{{asset('front_assets/img/portfolio/02-thumbnail.jpg')}}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Deelak App</h4>
                        <p class="text-muted">Mobile Applications</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img style="height:280px;" class="img-fluid" src="{{asset('front_assets/img/portfolio/vr.jpg')}}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Virtual Reality  </h4>
                        <p class="text-muted">IRIS VR TRAINING</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fas fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img style="height:280px; width: 355px;" class="img-fluid" src="{{asset('front_assets/img/portfolio/dressing2.webp')}}" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Virtual Reality  </h4>
                        <p class="text-muted">Dressing</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About -->
    <!--<section class="page-section" id="about">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-lg-12 text-center">-->
    <!--        <h2 class="section-heading text-uppercase">About</h2>-->
    <!--        <h3 class="section-subheading text-muted"></h3>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-lg-12">-->
    <!--        <ul class="timeline">-->
    <!--          <li>-->
    <!--            <div class="timeline-image">-->
    <!--              <img class="rounded-circle img-fluid" src="img/about/1.png" alt="">-->
    <!--            </div>-->
    <!--            <div class="timeline-panel">-->
    <!--              <div class="timeline-heading">-->
    <!--                <h4>July 2018</h4>-->
    <!--                <h4 class="subheading">Our Humble Beginnings</h4>-->
    <!--              </div>-->
    <!--              <div class="timeline-body">-->
    <!--                <p class="text-muted">The idea of Digital Capital came about due to us seeing a vacuum that needs to be filled. A need to automate & develop solutions transferring you to the e-Business World.</p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </li>-->
    <!--          <li class="timeline-inverted">-->
    <!--            <div class="timeline-image">-->
    <!--              <img class="rounded-circle img-fluid" src="img/about/2.png" alt="">-->
    <!--            </div>-->
    <!--            <div class="timeline-panel">-->
    <!--              <div class="timeline-heading">-->
    <!--                <h4>September 2018</h4>-->
    <!--                <h4 class="subheading">Digital Capital is Born</h4>-->
    <!--              </div>-->
    <!--              <div class="timeline-body">-->
    <!--                <p class="text-muted">After doing lots and lots of research, we’ve successfully opened our first branch, so that we could manifest our dream and use our skills to help you get the most out of your business.</p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </li>-->
    <!--          <li>-->
    <!--            <div class="timeline-image">-->
    <!--              <img class="rounded-circle img-fluid" src="img/about/3.png" alt="">-->
    <!--            </div>-->
    <!--            <div class="timeline-panel">-->
    <!--              <div class="timeline-heading">-->
    <!--                <h4>May 2019</h4>-->
    <!--                <h4 class="subheading">First Project is Alive</h4>-->
    <!--              </div>-->
    <!--              <div class="timeline-body">-->
    <!--                <p class="text-muted">Our first project was Deelak, A Magento marketplace that offers a variety of products. We have developed the website and the mobile application based on the modern methodologies and design patterns.-->
    <!--                  Deelak is now Live and you can check it, it was officially released last month.</p>-->
    <!--              </div>-->
    <!--            </div>-->
    <!--          </li>-->
    <!--          <li class="timeline-inverted">-->
    <!--            <div class="timeline-image">-->
    <!--              <h4>Be Part-->
    <!--                <br>Of Our-->
    <!--                <br>Story!</h4>-->
    <!--            </div>-->
    <!--          </li>-->
    <!--        </ul>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    <!-- Team -->
    <!--<section class="bg-light page-section" id="team">-->
    <!--  <div class="container">-->
    <!--    <div class="row">-->
    <!--      <div class="col-lg-12 text-center">-->
    <!--        <h2 class="section-heading text-uppercase">Our Amazing Team</h2>-->
    <!--        <h3 class="section-subheading text-muted">You can never go wrong when you have a great team to work with.</h3>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--    <div class="row">-->
    <!--      <div class="col-sm-4">-->
    <!--        <div class="team-member">-->
    <!--          <h4>Ahmed Moatasem</h4>-->
    <!--          <p class="text-muted">Lead IOS Developer</p>-->
    <!--          <ul class="list-inline social-buttons">-->
    <!--            <li class="list-inline-item">-->
    <!--              <a href="mailto:a.moatasem@dc.com.eg">-->
    <!--                <i class="far fa-envelope"></i>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="list-inline-item">-->
    <!--              <a href="https://www.linkedin.com/in/ahmed-moatasem/">-->
    <!--                <i class="fab fa-linkedin-in"></i>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--          </ul>-->
    <!--        </div>-->
    <!--      </div>          -->
    <!--      <div class="col-sm-4">-->
    <!--        <div class="team-member">-->
    <!--          <h4>Yasser Hassan</h4>-->
    <!--          <p class="text-muted">Lead Android Developer</p>-->
    <!--          <ul class="list-inline social-buttons">-->
    <!--            <li class="list-inline-item">-->
    <!--              <a href="mailto:y.hassan@dc.com.eg">-->
    <!--                <i class="far fa-envelope"></i>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="list-inline-item">-->
    <!--              <a href="https://www.linkedin.com/in/yasser-hassan-1a744b167/">-->
    <!--                <i class="fab fa-linkedin-in"></i>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--          </ul>-->
    <!--        </div>-->
    <!--      </div>-->

    <!--      <div class="col-sm-4">-->
    <!--        <div class="team-member">-->
    <!--          <h4>Ibrahim Shohdy</h4>-->
    <!--          <p class="text-muted">Lead Software Engineer</p>-->
    <!--          <ul class="list-inline social-buttons">-->
    <!--            <li class="list-inline-item">-->
    <!--              <a href="mailto:i.shohdy@dc.com.eg">-->
    <!--                <i class="far fa-envelope"></i>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--            <li class="list-inline-item">-->
    <!--              <a href="https://www.linkedin.com/in/ibrahim-shohdy-a210ab110/">-->
    <!--                <i class="fab fa-linkedin-in"></i>-->
    <!--              </a>-->
    <!--            </li>-->
    <!--          </ul>-->
    <!--        </div>-->
    <!--      </div>-->
    <!--    </div>-->
    <!--  </div>-->
    <!--</section>-->

    <!-- Contact -->
    <section class="page-section" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">We'd Love to hear from you.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form id="contactForm" name="sentMessage" novalidate="novalidate">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->


    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Deelak</h2>
                                <p class="item-intro text-muted">Shopping cart software is purchasing goods and or services, track customers, and tie together all aspects of e-commerce into one cohesive whole.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('front_assets/img/portfolio/01-full.jpg')}}" alt="">
                                <p>Deelak.com aims to bring real deals/ bargains on a daily basis. Our mission is to bring the best offers to all Egyptians with a seamless e-commerce experience. This entails working hard at the front and back ends of the business. Therefore, our challenging business model makes us proud of coming into the Egyptian market as a SME.</p>
                                <ul class="list-inline">
                                    <li>Date: May 2019</li>
                                    <li>Category: e-Commerce</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Deelak App</h2>
                                <p class="item-intro text-muted">Shopping cart app is purchasing goods and or services, track customers, and tie together all aspects of e-commerce into one cohesive whole.</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('front_assets/img/portfolio/02-full.jpg')}}" alt="">
                                <p>Deelak's product lines available at its application include Coupons, consumer electronics, beauty products, gourmet food, health and personal-care items, jewelry, watches, musical instruments and more.</p>
                                <p>
                                    This app offers best daily deals and best flash sale with best prices.
                                    Deelak.com allows you to pay by different ways using your favorite like Cash on Delivery (COD), Credit card, Fawry and offers the return policy from 7 working days to 14 days
                                    With Delak.com you can:
                                    Search and buy the new deals and sale
                                    -Track your order
                                    - Edit your profile and change your password
                                    - Manage your address
                                    -Save your entire product to the wish list.
                                    - Save money on your wallet</p>
                                <ul class="list-inline">
                                    <li>Date: May 2019</li>
                                    <li>Category: Mobile Applications</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Virtual Reality</h2>
                                <p class="item-intro text-muted">IRIS VR TRAINING</p>
                                <img class="img-fluid d-block mx-auto" src="{{asset('front_assets/img/portfolio/vr.jpg')}}" alt="">
                                <!--<p>vr</p>-->
                                <p>
                                    Virtual reality simulation that help worker and civil Engineers building TeleCommunication Towers</p>
                                <ul class="list-inline">
                                    <li>Date: May 2020</li>
                                    <li>Category: Virtual Reality</li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl"></div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 mx-auto">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <h2 class="text-uppercase">Virtual Dressing</h2>
                                <p class="item-intro text-muted">bridal Dressing Room</p>
                                <a href='https://digitalcapital.com.eg/dressing/index.html'> <img href="https://digitalcapital.com.eg/dressing/index.html" class="img-fluid d-block mx-auto" src="{{asset('front_assets/img/portfolio/dressing2.webp')}}" alt=""></a>
                                <!--<p>vr</p>-->
                                <p>
                                    bridal dressing software is an online application for brides to choose her dream dress </p>
                                <a href="https://digitalcapital.com.eg/dressing/index.html" target='blank'>click here</a>
                                <ul class="list-inline">
                                    <li>Date: May 2020</li>
                                    <li>Category: Unity Development </li>
                                </ul>
                                <button class="btn btn-primary" data-dismiss="modal" type="button">
                                    <i class="fas fa-times"></i>
                                    Close Project</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop


@section('script')

@stop