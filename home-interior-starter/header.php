<?php 
   function active ($currect_page)
   {
	   $url_array=explode('/', $_server['REQUEST_URI']);
	   $url=end($url_array);
	   if($currect_page == $url)
	   {
		   echo 'active'; //class name in css
	   }
   }
   ?>
<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!doctype php>
<php lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="//fonts.googleapis.com/css2?family=Cabin:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">

  <title>Home Interior - Interior Category Bootstrap Responsive Website Template | Home : W3layouts</title>

  <!-- Template CSS -->
  <link rel="stylesheet" href="assets/css/style-starter.css">
</head>

<body>
<!-- header top-->
<section class="w3l-top-header-content d-md-block d-none">
  <div class="hny-top-menu">
      <div class="top-hd">
          <div class="container">
              <div class="row">
                  <ul class="social-top">
                      <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                      <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                      <li><a href="#"><span class="fa fa-instagram"></span></a> </li>
                      <li><a href="#"><span class="fa fa-linkedin"></span> </a> </li>
                  </ul>
                  <ul class="accounts ml-auto">
                      <li class="top_li">
                          <span class="fa fa-phone"></span>
                          <a href="tel:+142 5897555">+142 5897555</a>
                      </li>

                      <li class="top_li">
                          <span class="fa fa-clock-o"></span> Mon - Fri: 10:00 - 18:00
                      </li>
                      <li class="top_li mr-lg-0"><span class="fa fa-envelope-o"></span><a
                              href="mailto:info@example.com">info@example.com </a>
                      </li>

                  </ul>
              </div>
          </div>
      </div>
  </div>
</section>
<!-- //header top-->

<!--header-->
<header>
  <div class="container">
      <nav class="navbar navbar-expand-lg">
          <h1><a class="navbar-brand" href="index.php">
                  <span class="sub-log">Home</span> Interior
              </a></h1>
          <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
          <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav mx-lg-auto">
                  <li class="nav-item active <?php active('index.php')?>">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item @@about__active <?php active('about.php')?>">
                      <a class="nav-link" href="about.php">About</a>
                  </li>
                  <li class="nav-item @@contact__active <?php active('contact.php')?>">
                      <a class="nav-link" href="contact.php">Contact</a>
                  </li>
				  <li class="nav-item @@contact__active <?php active('login.php')?>">
                      <a class="nav-link" href="login.php">Login</a>
                  </li>
				  <li class="nav-item @@contact__active <?php active('signup.php')?>">
                      <a class="nav-link" href="signup.php">Signup</a>
                  </li>
              </ul>
          </div>

          <div class="d-lg-block d-none">
              <a href="contact.php" class="btn btn-style btn-primary">Enquire</a>
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
<!-- //header -->