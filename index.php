<?php include("includes/top.php");?>

<div id="home-page">
<section class="module parallax parallax-1">
  <div class="container">
   <img src="images/BrownAE-logo-grey-white.svg" alt="Laissez Faire Logo" />
  </div>
</section>

<section class="content">
  <div class="container">
    <h3>Hello, my name is</h3>
    <h2>Aaron E. Brown</h2>
    <p class="center">(Also known as "Brownie")</p>
  </div>
  <div class="intro-graphics-wrapper">
      <div class="intro-graphic">
        <img src="images/developer.svg" alt="Front-end developer icon" title="Front End Developer">
        <h3>Front-End Developer</h3>
      </div>
      <div class="intro-graphic">
        <img src="images/retroatom.svg" alt="Designer" title="Designer">
        <h3>Designer</h3>
      </div>
      <div class="intro-graphic">
        <img src="images/Thumb-up.svg" alt="People Person" title="People Person">
        <h3>People Person</h3>
      </div>
  </div>
</section>
<section class="content">
    <div class="seo"><p>As a Seattle based front-end web developer and designer, I enjoy building rich UX/UI that are beautiful, easy to understand and use. I work well with others and I am passionate about clear communication, solid solutions, understanding user needs, and designing and building a platform that intuitively bridges that gap.</p></div>
    <a name="portfolio"><a><!-- Put here to make the location more accurate -->
</section>

<section class="content">
    <h2 class="center">Portfolio</h2>
    <div class="wrapper">
      <div class="demo-graphics">
        <a href='http://www.scc.brownae.com/seattlecentral/web202/protosite/index.php' target="_blank" ><img src="images/neat-shaving-co-Demo.png" alt="Neat Shaving Co. website" title="Neat Shaving Co. website">
        <h4>Neat Shaving Co.</h4></a>
        <p>Brief case study. Designed Logo, UX/UI, Checkout procedure.</P>
      </div>

      <div class="demo-graphics">
        <a href='http://www.scc.brownae.com/seattlecentral/web120/fp/index.php' target="_blank" ><img src="images/Laissez-faire-studios-Demo.png" alt="Laiessez Faire Studios" title="Laiessez Faire Studios">
        <h4>Laiessez Faire Studios</h4></a>
        <p>Brief case study. Designed Logo, UX/UI, Checkout procedure.</P>
      </div>

      <div class="demo-graphics">
        <a href='http://www.thelifteveryvoicefoundation.org/' target="_blank" ><img src="images/Lift-Every-Voice-Foundation-Demo.png" alt="The Lift Every Voice Foundation" title="The Lift Every Voice Foundation">
        <h4>Lift Every Voice Foundation</h4></a>
        <p>Brief case study. Designed Logo, UX/UI, Checkout procedure.</P>
      </div>


      <div class="demo-graphics">
        <a href='http://scootaboot.com/' target="_blank" ><img src="images/Scoot-aboot-Demo.png" alt="Scoot Aboot" title="Banff Vespa tour">
        <h4>Scoot Aboot</h4></a>
        <p>Brief case study. Designed Logo, UX/UI, Checkout procedure.</P>
      </div>
    </div>

</section>
<section class="content">
      <h2 class="center">Languages, Skills, Tools</h2>
      <h3>Current + <span>In Process<span></h3>
      <div class="dev-icons wrapper">
          <img src="images/icons/html5.svg" alt="HTML5 logo" title="HTML5">
          <img src="images/icons/css3.svg" alt="CSS3 logo" title="CSS3">
          <img src="images/icons/javascript.svg" alt="JavaScript logo" title="JavaScript">
          <img src="images/icons/jquery_logo.svg" alt="jQuery logo" title="jQuery">
          <img src="images/icons/nodejs_small.svg" alt="Node.js logo" title="Node.js">
          <img src="images/icons/angular_simple.svg" alt="AngularJS logo" title="AngularJS">
          <img src="images/icons/php.svg" alt="PHP logo" title="PHP">
          <img src="images/icons/mysql.svg" alt="mySQL logo" title="mySQL">
          <img src="images/icons/github_badge.svg" alt="GitHub logo" title="GitHub">
          <img src="images/icons/gulp.svg" alt="Gulp logo" title="Gulp">
          <img src="images/icons/sass.svg" alt="Sass logo" title="Sass">
          <img src="images/icons/illustrator.svg" alt="Adobe Illustrator logo" title="Adobe Illustrator">
          <img src="images/icons/photoshop.svg" alt="Adobe Photoshop logo" title="Adobe Photoshop">
          <img src="images/icons/atom.svg" alt="Atom logo" title="Atom">
      </div>

      <a name="contact"><a> <!-- Put here to make the location more accurate -->
</section>

<section class="module content">
  <div class="container">
    <h2>Contact</h2>
    <div id="contact-form">
      <?php
        /*
         * Below are 2 different forms to be re-used
         *
         * Only use one at a time, comment out the other 1!
         *
         */
        include "includes/simple.php"; #demonstrates a simple contact form
        //include "includes/multiple.php";#demonstrates multiple form elements


	?>
	 <p class="clear-recaptcha"></p>
        </div>
  </div>
</section>

</div>

<?php include ("includes/bottom.php");?>
