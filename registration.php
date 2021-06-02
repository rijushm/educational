<!DOCTYPE html>
<html>
<head>
	<title>Registration - Demo</title>
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
	<br>
	<br>
	<br>

<section class="reg_from mt-0">
	<form action="config_reg.php" method="post" class="">
      
        <h1 class="">Registration</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name" required="">
          
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email" required="">
          
          <label>Gender</label>
          <input type="radio" id="under_13" value="M" name="user_age"><label for="under_13" class="light">Male</label><br>
          <input type="radio" id="under_13" value="F" name="user_age"><label for="under_13" class="light">Female</label><br>
          <input type="radio" id="under_13" value="O" name="user_age"><label for="under_13" class="light">Others</label><br>

          <label for="phone" class="mt-2">Phone Number:</label>
          <input type="number" id="phone" name="user_phone" required>
                  </fieldset>
        
        <fieldset>
          <legend><span class="number">2</span>Your profile</legend>
          <label for="bio">Biography:</label>
          <textarea id="bio" name="user_bio"></textarea>
        </fieldset>
        <fieldset>
        <label for="job">Interested Course:</label>
        <select id="job" name="user_course">
          <optgroup label="Web">
            <option value="UPSC/IAS">UPSC/IAS</option>
            <option value="MPSC">MPSC</option>
            <option value="SSC BANK RAILWAY">SSC BANK RAILWAY</option>
            <option value="CAT">CAT</option>
            <option value="MAT">MAT</option>
            <option value="XAT">XAT</option>
            <option value="MBA">MBA</option>
            <option value="SSC TEST SERIES">SSC TEST SERIES</option>
            <option value="OTHERS">Others</option>
          </optgroup>
        </select>
          
          <label for="password">Password:</label>
          <input type="password" required id="password" name="user_password">

          <label for="password">Confirm Password:</label>
          <input type="password" required id="password" name="user_password_confirm">
        
        </fieldset>
        <button type="submit">Sign Up</button>
      </form>
</section>

<h4 class="text-center my-2">Already have an account? <a href=""> Log In</a></h4>



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