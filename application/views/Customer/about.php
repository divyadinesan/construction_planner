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
  <body style="background-color:grey">
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
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb">
    <div class="breadcrumb-bg breadcrumb-bg-about py-5">
        <div class="container pt-lg-5 pt-md-3 p-lg-4 pb-md-3">
            <h2 class="title">About Us</h2>
            <ul class="breadcrumbs-custom-path mt-2 text-center">
                <li><a href="<?php echo base_url('index.php/Customer_controller/index')?>">Home</a></li>
                <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> About Us </li>
            </ul>
        </div>
    </div>
</section>
<!-- //about breadcrumb -->

<section class="w3l-aboutblock2" id="story">
  <div class="py-5">
    <div class="container py-lg-4 py-md-3">
      <div class="cwp4-two row">
        <div class="cwp4-text col-lg-6">
            <span class="title-small">Few Words</span>
          <h3 class="title-big">Something about <span>Us</span></h3>
          <p class="mt-4"> Constrauction Planner is a Private Limited organization controlled by well experienced young and dynamic partners. We undertake contract works in Kerala for building construction and our group of professionals are providing home building services to customers for over 10 years. Our focus has been to provide the finest & most comprehensive residential and commercial construction services. We are engaged in designing of modern houses and apartments, repair and renovation contracts, prepare plans & building estimation.

We also undertake interior design, decoration, landscaping etc. for villas and bungalows. The company obligate to meet client's requirement up to their maximum satisfaction. Our expertise team works with the land owners to prepare custom design for any construction project.
          </p>
          <ul class="cont-4 mt-4">
            <li><span class="fa fa-check"></span>Signing contract with major investor, Our Work Growth.</li>
            <li><span class="fa fa-check"></span>Service Management, Company history at a glance.</li>
            <li><span class="fa fa-check"></span>1500 Employed for our business Support and Analysis</li>
            <li><span class="fa fa-check"></span>Our Employee Growth Measuring Performance.</li>
          </ul>
        </div>
        <div class="cwp4-image col-lg-6 pl-lg-6 mt-lg-0 mt-md-5 mt-4">
          <img src="<?php echo base_url('Asset/Customer/images/about1.jpg')?>" class="radius-image img-fluid" alt="">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- team section -->

<!-- //teamsection -->

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