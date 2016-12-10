
<?php include("includes/top.php");?>

<div id="contact-page">
<section class="module parallax parallax-1">
  <div class="container">
   <h1>Contact</h1>
  </div>
</section>

<section class="module content">
  <div class="container">
    <h2>What can I do for you?</h2>
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
