
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://ogp.me/ns#" xmlns:fb="https://www.facebook.com/2008/fbml" lang="en" dir="ltr">
  <head>
	<?php echo $this->Html->script('jquery'); ?>
    <title><?php echo $title_for_layout; ?></title>
    <link href="" rel="shortcut icon" type="image/x-icon" />
 
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
 
    
  
     <link href="app/webroot/css/core.css" media="screen" rel="stylesheet" type="text/css" />
     <link href="app/webroot/css/index.css" media="screen" rel="stylesheet" type="text/css" />
    
  </head>

  <body browser="windows">


    <header id="header" >
  
  <article class="fit-fixed">
    <article class="fit-fixed" id="header__nav-container">
      <div id="header__nav" class="grid-col-12 grid-row grid-col--no-spacing">
        <div id="header__mobile-dropdown-button-container" class="grid-col-1 grid-col--no-padding grid-col--no-margin grid-col--float-right" exclude="tablet desktop">
          <a id="header__mobile-dropdown-button" class="js-toggle-profile-dropdown header__nav__link">
            <div class="header__nav__link__label">
              <h5>☰</h5>
            </div>
          </a>
        </div>


          <div class="grid-col-2 grid-col--float-right grid-col--no-padding grid-col--no-margin" exclude="phone">
            <a href="signup" class="header__nav__link js-sign-up" id="header__sign-up">
              <div class="header__nav__link__button">
                <button class="button button--primary button--small button--all-caps button--fill-space">
                  Sign up
                </button>
              </div>
</a>          </div>

          <div class="grid-col-2 grid-col--float-right grid-col--no-padding grid-col--no-margin" exclude="phone">
            <a href="login" class="header__nav__link js-sign-in" id="header__sign-in">
              <div class="header__nav__link__button">
                <button class="button button--white button--small button--all-caps button--fill-space">
                  Login
                </button>
              </div>
</a>          </div>


        </div>


      <div id="header__logo">
        <a href="/" id="header__logo__link">
          <img alt="" class="logo__image--full no-rescale" src="img/zdemylogo.png" />
</a>      </div>


    </article>
  </article>
  <div id="notices" exclude="phone"></div>
</header>

<main class="schools index ">

<?php echo $this->Session->flash(); ?>
<?php echo $this->fetch('content'); ?>

</main>

        <footer id="footer" class="color-scheme--darkgrey">
  <div id="footer__main">
    <article class="fit-fixed">

      <div class="grid-row padding-top--half">

        <div class="grid-col-6">
          <img alt="Logo--grey" class="margin-bottom--1" id="footer__logo" src="img/zdemylogo.png" />
          <p>Teaching the world how to code.</p>


          <div id="footer__company__links">
            <a href="/about">About Us</a>
            <a href="/about/jobs">We&#x27;re hiring</a>
            <a href="/blog">Blog</a>
          </div>
        </div>

        <div class="grid-col-6 grid-row grid-col--no-margin">
          <div class="grid-col-6 grid-col--no-padding">
            <h5><strong>Test your skills</strong></h5>
            <ul>
              <li><a href="/skills/make-a-website">Html5 Tests</a></li>
              <li><a href="/skills/make-an-interactive-website">Ruby on rails tests</a></li>
            </ul>

            <ul class="margin-top--1">
              <li><a href="/tracks/web">HTML &amp; CSS</a></li>
              <li><a href="/tracks/javascript">Javascript</a></li>
              <li><a href="/tracks/jquery">jQuery</a></li>
              <li><a href="/tracks/python">Python</a></li>
              <li><a href="/tracks/ruby">Ruby</a></li>
              <li><a href="/tracks/php">PHP</a></li>
            </ul>
          </div>
          <div class="grid-col-6 grid-col--no-padding">
            <h5><strong>Other Programs</strong></h5>
            <ul>
              <li><a href="/schools">Schools</a></li>
              <!--<li><a href="/enterprise">Enterprise</a></liv>-->
              <li><a href="/stories">Stories</a></li>
              <li><a href="/teach">Teach</a></li>
            </ul>

            <h5 class="margin-top--1"><strong>Follow us</strong></h5>
            <ul>
              <li><a href="http://www.twitter.com/codecademy">Twitter</a></li>
              <li><a href="http://www.facebook.com/codecademy">Facebook</a></li>
              <li><a href="https://plus.google.com/+codecademy/posts">Google+</a></li>
              <li><a href="/blog">Blog</a></li>
            </ul>
          </div>
        </div>
      </div>
    </article>
  </div>

  <article id="footer__legal">
    <div class="grid-row fit-fixed">
      <div class="grid-col-6 grid-col--no-margin margin-top--none margin-bottom--none">
        <div id="footer__legal__links">
          <small>
            <a href="/help">Help</a>
            <a href="/policy">Privacy Policy</a>
            <a href="/terms">Terms</a>
          </small>
        </div>
      </div>

      <div class="grid-col-6 grid-col--no-margin grid-row margin-top--none margin-bottom--none">
        <div class="grid-col-7 grid-col--no-spacing">
          <div id="footer__legal__copyright">
            <small>
              :)
            </small>
          </div>
        </div>

        <div id="footer__locale" class="grid-col-5 grid-col--no-spacing margin-top-bottom--none grid-col--align-right">
          <div class="field field--select field-select--small field-select--transparent">
 
  <div class="field-select__down-arrow-icon">
    <span class="new-cc-icon icon--"> &copy; 2014 Zdemy</span>

  </div>
</div>

        </div>

      </div>
    </div>
  </article>
</footer>


   
    
  </body>
</html>
