<!DOCTYPE html>
<html>
<head>
<title><?php echo $title_for_layout; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Bootstrap -->
<?php echo $this->Html->css(array('style', 'bootstrap', 'bootstrap-responsive','jquery.bxslider')); ?>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,900,700italic,900italic' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
  <div class="container">
    <div class="row-fluid">
      <div class="span2">
        <div class="logo"><?php echo $this->Html->image('logo.png', array('alt' => 'logo', 'url' => '/')); ?></div>
      </div>
      <div class="span9 pull-right">
        <div class="login_signup_main"> 
          <?php
           echo $this->Html->link('Login', '/login');
           echo $this->Html->link('Sign Up Free', '/signup');
          ?>
        </div>
        <div class="navbar navbar-inverse ">
          <div class="navbar-inner">
            <div class="container">
              <div data-target=".nav-collapse" data-toggle="collapse" class="pull-left menu_text hidden-desktop">Menu </div>
              <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar collapsed" type="button"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
              <div class="nav-collapse collapse" style="height: 0px;">
                <ul class="nav">
                  <li > <a class="current" href="index.html">Home<span>Active interview</span></a> </li>
                  <li> <a href="#how_it_work">How it Works<span>Screenshot Tour</span></a> </li>
                  <li> <a href="#features">Features<span>Features of Interview</span></a> </li>
                  <li> <a href="#pricing">Pricing <span>Read our posts</span></a> </li>
                  <li> <a href="#faq">FAQ<span>Read our </span></a> </li>
                  <li> <a href="#contact">Contact <span>Contact us today!</span></a> </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>


<footer>
  <div class="footer_bottom">
    <p>© 2014 Interview - Video Interviewing & Phone Screening Solutions |<a href="#"> Privacy Policy</a> |<a href="#"> Terms of Service</a></p>
  </div>
</footer>
<script type="text/javascript" src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.bxslider.min.js"></script> 
<script>
$(document).ready(function(){
  $('.slider1').bxSlider({
    slideWidth: 218,
    minSlides: 1,
    maxSlides: 3,
    slideMargin: 10
  });
  $('.slider2').bxSlider({
    mode: 'vertical',
    slideWidth: 500,
    minSlides: 2,
    slideMargin: 10
  });
  $('.slider3').bxSlider({
    slideWidth: 1170,
    minSlides: 1,
    maxSlides: 1,
    slideMargin: 10
  });
});
</script> 
<script>
    $('.carousel').carousel({
    interval: 2000
    })</script>
</body>
</html>