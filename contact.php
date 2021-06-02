<!DOCTYPE html>
<html>
<head>
	<title>Contact Us - Demo</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>

	<header>
		<?php
		include 'header.php';
		?>
	</header>

	   <!-- contact section start -->

<section class="contact_section pt-5" style="background:#f00e6b;">
	<div class="">
		<h2 class="text-center mt-5 text-light">Contact Us</h2>
		<div class="row">
			<div class="col-sm-6 p-5">
				<div class="bg-light rounded text-center">
					<h3 class="pt-4" style="color: #f00e6b;">Can't Find an Answer ?</h3>
					<p class="mx-4">
						Don’t worry our counselling experts are eagerly waiting to answer your call or email. Our promise is to provide the most up to date and accurate answers to help you understand what we do in depth.
					</p>
					<img src="img/contact.svg" class="bounce-top img-fluid mx-5 mb-5">
				</div>
			</div>

			<div class="col-sm-6 p-5">
				<div class="bg-light rounded p-4">
					<form action="config.php" method="post">
					  <div class="form-row m-2">
						    <div class="col-sm-12">
						    	<label for="">First Name</label>
						      <input type="text" class="form-control" placeholder="First name" required name="firstName">
						    </div>
						</div>
						<div class="form-row m-2">
						    <div class="col-sm-12">
						    	<label for="">Last Name</label>
						      <input type="text" class="form-control" placeholder="Last name" required name="lastName">
						    </div>
						</div>
					    <div class="form-group col-md-12 mt-2">
					      <label for="inputEmail4">Email</label>
					      <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="email" required>
					    </div>
					    <div class="form-group col-md-12">
					      <label for="inputEmail4">Phone Number</label>
					      <input type="number" class="form-control" id="inputnumber" name="phone" placeholder="Phone Number" required>
					    </div>
					    <div class="form-group col-md-4">
					      <label for="inputState">Select Inquiry</label>
					      <select id="inputState" name="inquiry" class="form-control">
					        <option value="course" selected>Courses</option>
					        <option value="Fee Structure">Fee structure</option>
					        <option value="Online Reg">Online Registration</option>
					        <option value="New Batch">New Batch</option>
					        <option value="Toppers and Selection">Toppers & Selection</option>
					        <option value="Campus Address">Campus Address</option>
					        <option value="Others (Please Specify)">Others (Please Specify)</option>
					      </select>
					    </div>
					    <div class="form-group col-md-12">
					      <textarea type="number" name="message" class="form-control" id="message" placeholder="Type Your Message Here..."></textarea>
					    </div>
					  <button type="submit" name="submit" class="btn btn-primary ml-3" style="background: #f00e6b; outline: none; border: 2px solid #fff; border-radius: 5px;">Submit</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

   <!-- contact section start -->


	<?php
	include 'footer.php';
	?>

	<?php
	include 'nav-script.php';
	?>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>