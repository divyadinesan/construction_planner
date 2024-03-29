<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Construction Planner</title>

    <!-- google fonts -->
    <link href="<?php echo base_url('Asset/Customer//fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap')?>" rel="stylesheet">
    <link href="<?php echo base_url('Asset/Customer///fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@1,500;1,700&display=swap')?>" rel="stylesheet">

    <!-- Template CSS -->
    <link rel="stylesheet" href="<?php echo base_url('Asset/Customer/css/style-starter.css')?>">
  </head>
  <body>
<!--header-->
<header id="site-header" class="fixed-top">
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark stroke">
      <h1>
        <a class="navbar-brand">
          <span class="fa fa-industry"></span>Construction Planner<span class="logo">Construction Software</span></a>
      </h1>

      <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
      <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
        data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
        <span class="navbar-toggler-icon fa icon-close fa-times"></span>
        </span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mx-lg-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url('index.php/Customer_controller/index')?>">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item @@about__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Customer_controller/about')?>">About</a>
          </li>
          
          <li class="nav-item @@contact__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Customer_controller/contact')?>">Contact</a>
          </li>
           <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Admin_controller/admin_login')?>">Admin</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Architecture_controller/architecture_login')?>">Architecture</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Designer_controller/designer_login')?>">Designer</a>
          </li>
          <li class="nav-item @@services__active">
            <a class="nav-link" href="<?php echo base_url('index.php/Contractor_controller/contractor_login')?>">Contractor</a>
          </li>
        </ul>
      </div>

      <div class="top-quote mr-lg-2 mt-lg-0 mt-3 d-lg-block d-none">
        <a href="<?php echo base_url('index.php/Customer_controller/customer_login')?>" class="btn btn-style btn-primary">Login Now</a>
      </div>
      <!-- toggle switch for light and dark theme -->
      <div class="mobile-position">
        <nav class="navigation">
          <div class="theme-switch-wrapper">
            <label class="theme-switch" for="checkbox">
              <input type="checkbox" id="checkbox">
              <div class="mode-container py-1">
                <i class="gg-sun"></i>
                <i class="gg-moon"></i>
              </div>
            </label>
          </div>
        </nav>
      </div>
      <!-- //toggle switch for light and dark theme -->
    </nav>
  </div>
</header>
<!--/header-->
<!-- main-slider -->
<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
        <div class="owl-one owl-carousel owl-theme">
            <div class="item">
                <li>
                    <div class="slider-info banner-view bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>We will provide the best <span>Industrial</span> service</h5>
                                    <p class="mt-4 pr-lg-4">Industrious is the production of goods or related services
                                        here within an economy indicator of its relevant. </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info  banner-view banner-top1 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>We provides effective <span>Building</span> solutions</h5>
                                    <p class="mt-4 pr-lg-4">Industrious is the production of goods or related services
                                        here within an economy indicator of its relevant. </p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top2 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>We will provide the best <span>Industrial</span> service</h5>
                                    <p class="mt-4 pr-lg-4">Industrious is the production of goods or related services
                                        here within an economy indicator of its relevant. </p>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
            <div class="item">
                <li>
                    <div class="slider-info banner-view banner-top3 bg bg2">
                        <div class="banner-info">
                            <div class="container">
                                <div class="banner-info-bg">
                                    <h5>We provides effective <span>Building</span> solutions</h5>
                                    <p class="mt-4 pr-lg-4">Industrious is the production of goods or related services
                                        here within an economy indicator of its relevant. </p>
                                    <a class="btn btn-style btn-primary mt-sm-5 mt-4 mr-2" href="about.html"> Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </div>
        </div>
    </div>
</section>
<!-- /main-slider -->
<div class="w3l-grids-slider pt-5" id="about" style="background-color: grey">
    <div class="container ">
        <div class="w3l-customers row my-lg-5 my-sm-4" >
            <div class="col-md-12">
                <div class="owl-three owl-carousel owl-theme logo-view">
                    <div class="item">
                        <div class="grid">
                            <span class="fa fa-flask"></span>
                            <h4><a href="#url">Chemical Research</a></h4>
                        </div>
                    </div>
                   
                    <div class="item">
                        <div class="grid">
                            <span class="fa fa-cogs"></span>
                            <h4><a href="#url">Fuel & Gas Management</a></h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="grid">
                            <span class="fa fa-sun-o"></span>
                            <h4><a href="#url">Power & Energy Sector</a></h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="grid">
                            <span class="fa fa-tint"></span>
                            <h4><a href="#url">Petrolium Refinery</a></h4>
                        </div>
                    </div>
                    <div class="item">
                        <div class="grid">
                            <span class="fa fa-lightbulb-o"></span>
                            <h4><a href="#url">Eco and Bio Power</a></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>


<!-- our products -->

<!-- //our products -->

<section class="w3l-progressblock py-5" id="why" >
    <div class="container py-lg-5 py-md-3">
        <div class="row">
            <div class="col-lg-6 about-right-faq">
                <h3 class="title-big">Why Choose <span>Us?</span></h3>
                <p class="mt-lg-4 mt-3 mb-lg-5 mb-4">Lorem ipsum viverra feugiat. Pellen tesque libero ut justo,
                    ultrices in ligula. Semper at tempufddfel. Lorem ipsum dolor sit amet consectetur adipisicing
                    elit. Non quae, fugiat ad.</p>
                <div class="progress-info info1">
                    <h6 class="progress-tittle">Quality Services <span class="">80%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 80%"
                            aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info2">
                    <h6 class="progress-tittle">Working Ability <span class="">95%</span>
                    </h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 95%"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
                <div class="progress-info info3">
                    <h6 class="progress-tittle">Machine Power <span class="">75%</span></h6>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 75%"
                            aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 stats mt-lg-0 mt-4 pl-lg-5 align-self" style="background-color: grey">
                <div class="row">
                    <div class="col-md-6 col-sm-4 col-6 stat">
                        <span class="fa fa-user-o" style="color: white"></span>
                        <div class="stats-info">
                            <span class="number" style="color: white">125</span>
                            <h4 style="color: white">Team Members</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6 stat">
                        <span class="fa fa-smile-o" style="color: white"></span>
                        <div class="stats-info">
                            <span class="number" style="color: white">350+</span>
                            <h4 style="color: white">Happy Clients</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6 stat">
                        <span class="fa fa-star-o" style="color: white"></span>
                        <div class="stats-info">
                            <span class="number" style="color: white">1200+</span>
                            <h4 style="color: white">5 Star rating</h4>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-4 col-6 stat">
                        <span class="fa fa-lightbulb-o" style="color: white"></span>
                        <div class="stats-info">
                            <span class="number" style="color: white">150</span>
                            <h4 style="color: white">Completed Jobs</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="w3l-bg-image">
    <div class="bg-mask py-5">
        <div class="container py-lg-5 py-sm-4 py-2">
            <div class="text-align text-center py-lg-4 py-md-3">
                <h3 class="title-big"><span>Industrious</span> provides the best service for sustainable progress.</h3>
                <p class="mt-4">It is a long established fact that a reader will be distracted by the readable content
                    of a page when
                    looking at its layout.</p>
                
                <a class="btn btn-style btn-white mt-sm-5 mt-4" href="<?php echo base_url('index.php/Customer_controller/contact')?>"> Contact Us</a>
            </div>
        </div>
    </div>
</div>

<section class="feature-style-one py-5" style="background-color: grey">
    <div class="container py-lg-4 py-md-3">
        <div class="row px-2">
            <div class="col-lg-4 col-md-6 px-2">
                <div class="single-feature-style-one dark">
                    <div class="icon-box"> 
                        <span class="fa fa-lightbulb-o"></i>
                    </div>
                    <div class="text-box">
                        <h3>Creative Ideas</h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-2 mt-md-0 mt-4">
                <div class="single-feature-style-one primary">
                    <div class="icon-box"> 
                        <span class="fa fa-shield"></i>
                    </div>
                    <div class="text-box">
                        <h3>Super Safety</h3>
                       
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 px-2 mt-lg-0 mt-4">
                <div class="single-feature-style-one dark">
                    <div class="icon-box"> 
                        <span class="fa fa-headphones"></i>
                    </div>
                    <div class="text-box">
                        <h3>24/7 Support</h3>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
 <!-- footer -->
 <section class="w3l-footer">
  <div class="w3l-footer-16-main py-5">
    <div class="container pt-lg-4">
     
      <div class="d-flex below-section justify-content-between align-items-center pt-4 mt-5">
        <div class="columns text-lg-left text-center">
            <p>@2023 | CONSTRUCTION PLANNER |<a href="https://atees.org/" target="_blank">
             ATEES Infomedia Pvt Ltd</a>
          </p>
        </div>
        
      </div>
    </div>
  </div>

  <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
    <span class="fa fa-angle-up"></span>
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };

    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- //move top -->
  <script>
    $(function () {
      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });
  </script>
</section>
<!-- //footer -->
<!-- Template JavaScript -->
<!-- <script src="assets/js/jquery-3.3.1.min.js"></script> -->

<script src="<?php echo base_url('Asset/Customer/js/jquery-1.9.1.min.js')?>"></script>

<script src="<?php echo base_url('Asset/Customer/js/theme-change.js')?>"></script>
<!-- responsive tabs -->
<script src="<?php echo base_url('Asset/Customer/js/easyResponsiveTabs.js')?>"></script>

<!--Plug-in Initialisation-->
<script type="text/javascript">
 $(document).ready(function () {
   //Horizontal Tab
   $('#parentHorizontalTab').easyResponsiveTabs({
     type: 'default', //Types: default, vertical, accordion
     width: 'auto', //auto or any width like 600px
     fit: true, // 100% fit in a container
     tabidentify: 'hor_1', // The tab groups identifier
     activate: function (event) { // Callback function if tab is switched
       var $tab = $(this);
       var $info = $('#nested-tabInfo');
       var $name = $('span', $info);
       $name.text($tab.text());
       $info.show();
     }
   });
 });
</script>

<script src="<?php echo base_url('Asset/Customer/js/owl.carousel.js')?>"></script>
<!-- script for banner slider-->
<script>
  $(document).ready(function () {
    $('.owl-one').owlCarousel({
      loop: true,
      margin: 0,
      nav: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 1,
          nav: false
        },
        480: {
          items: 1,
          nav: false
        },
        667: {
          items: 1,
          nav: true
        },
        1000: {
          items: 1,
          nav: true
        }
      }
    })
  })
</script>
<!-- //script -->
<script>
  $(document).ready(function () {
    $('.owl-three').owlCarousel({
      margin: 20,
      nav: false,
      dots: false,
      responsiveClass: true,
      autoplay: true,
      autoplayTimeout: 5000,
      autoplaySpeed: 1000,
      autoplayHoverPause: false,
      responsive: {
        0: {
          items: 2
        },
        480: {
          items: 2
        },
        767: {
          items: 3
        },
        992: {
          items: 4
        },
        1280: {
          items: 5
        }
      }
    })
  })
</script>

<!-- script for testimonials -->
<script>
 $(document).ready(function () {
   $('.owl-testimonial').owlCarousel({
     loop: true,
     margin: 0,
     nav: true,
     responsiveClass: true,
     autoplay: false,
     autoplayTimeout: 5000,
     autoplaySpeed: 1000,
     autoplayHoverPause: false,
     responsive: {
       0: {
         items: 1,
         nav: false
       },
       480: {
         items: 1,
         nav: false
       },
       667: {
         items: 1,
         nav: true
       },
       1000: {
         items: 1,
         nav: true
       }
     }
   })
 })
</script>
<!-- //script for testimonials -->

<script src="<?php echo base_url('Asset/Customer/js/jquery.magnific-popup.min.js')?>"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>

<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->

<!--/MENU-JS-->
<script>
  $(window).on("scroll", function () {
    var scroll = $(window).scrollTop();

    if (scroll >= 80) {
      $("#site-header").addClass("nav-fixed");
    } else {
      $("#site-header").removeClass("nav-fixed");
    }
  });

  //Main navigation Active Class Add Remove
  $(".navbar-toggler").on("click", function () {
    $("header").toggleClass("active");
  });
  $(document).on("ready", function () {
    if ($(window).width() > 991) {
      $("header").removeClass("active");
    }
    $(window).on("resize", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
    });
  });
</script>
<!--//MENU-JS-->

<script src="<?php echo base_url('Asset/Customer/js/bootstrap.min.js')?>"></script>

</body>

</html>