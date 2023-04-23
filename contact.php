




<?php include 'header.php';?>
<?php

require_once __DIR__.'/vendor/autoload.php';
require_once __DIR__.'/config.php';

// session_start();

if (!empty($_SESSION['_contact_form_error'])) {
    $error = $_SESSION['_contact_form_error'];
    unset($_SESSION['_contact_form_error']);
}

if (!empty($_SESSION['_contact_form_success'])) {
    $success = true;
    unset($_SESSION['_contact_form_success']);
}

?>
<div class="container">

<h1 class="title">Contact</h1>


<!-- form -->
<div class="contact">



       <div class="row">
       	
       	<div class="col-sm-12">
       	<div class="map">
		   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3796.1558274306844!2d73.65622057484345!3d17.92488448305695!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc265520dc472f7%3A0x9cdf18e339eee39b!2sOYO%2077019%20Hotel%20Anupam!5e0!3m2!1sen!2sin!4v1682143947280!5m2!1sen!2sin" width=100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       	<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9933.460884430251!2d-0.13301252240929382!3d51.50651527467666!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2snp!4v1414314152341" width="100%" height="300" frameborder="0"></iframe>	 -->
       	</div>


	


		<div class="col-sm-6 col-sm-offset-3">
			<div class="spacer">   		

       		<h4>Write to us</h4>
			<form role="form" action="emails/submit.php" method="post">
			<div class="form-group">	
			<input type="text" name="name" class="form-control" id="name" placeholder="Name">
			</div>
			<div class="form-group">
			<input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
			</div>
			<div class="form-group">
			<input type="phone" name="phone" class="form-control" id="phone" placeholder="Phone">
			</div>
			<div class="form-group">
			<textarea type="text" name="msg" class="form-control"  placeholder="Message" rows="4"></textarea>
			</div>
					
			<button type="submit" class="btn btn-default">Send</button>
			</form>
			</div>


       	</div>





       </div>
</div>
</div>
<!-- form -->

</div>
<?php include 'footer.php';?>