<!DOCTYPE html>
<html>
<head>
	<title>Admin - Contact form - Demo</title>
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

	<section class="admin pt-5 text-center">
     <div class="mt-5">
         <h3 class="text-center">Admin - Contact Forms Submissions </h3>

         <a href="reg-forms.php" class="btn btn-success rounded mb-4">Registrations Forms</a>

         <table class="text-center">
             <tr>
                 <th >ID</th>
                 <th >First Name</th>
                 <th >Last Name</th>
                 <th >Email</th>
                 <th >Phone</th>
                 <th >Inquiry</th>
                 <th >Message</th>
             </tr>
             <?php
             $conn = mysqli_connect("localhost","root","","ceedmycontact");
             if ($conn-> connect_error) {
                 die("Connection failde:". $conn-> connect_error);
             }

             $sql = "SELECT ID, firstName, lastName,email,phone,inquiry,message from contact";
             $result = $conn-> query($sql);

             if ($result-> num_rows > 0) {
                 # code...
                while ($row = $result-> fetch_assoc()) {
                    # code...
                    echo "<tr><td>".$row["ID"]."</td><td>".$row["firstName"]."</td><td>".$row["lastName"]."</td><td>".$row["email"]."</td><td>".$row["phone"]."</td><td>".$row["inquiry"]."</td><td>".$row["message"]."</td><tr>";
                }
             }else{
                echo "0 result";
             }

             $conn-> close();
             ?>
         </table>
     </div>   
    </section>


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