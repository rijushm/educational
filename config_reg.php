<?php

$name = $_POST['user_name'];
$email = $_POST['user_email'];
$phone = $_POST['user_phone'];
$gender = $_POST['user_age'];
$bio = $_POST['user_bio'];
$course = $_POST['user_course'];
$password = $_POST['user_password'];
$cpassword = $_POST['user_password_confirm'];

$pass = password_hash($password,PASSWORD_BCRYPT);
$cpass = password_hash($cpassword,PASSWORD_BCRYPT);

$conn = new mysqli('localhost','root','','ceedmycontact');

if($conn->connect_error){
	?>
	<script type="text/javascript">
		alert("Connection failed!");
	</script>
	<?php
}else{
	if($password === $cpassword){
		$stmt = $conn->prepare("insert into registration(name,email,phone,gender,bio,course,password,cpassword) values(?,?,?,?,?,?,?,?)");
			$stmt->bind_param("ssisssss",$name,$email,$phone,$gender,$bio,$course,$pass,$cpass);
			$stmt->execute();
			?>
			<script type="text/javascript">
				alert("Submitted Successfully");
			</script>
			<?php
			$stmt->close();
			$conn->close();
			header('location:index.php');
		}else{
			?>
			<script type="text/javascript">
				var result = confirm( "password is not matched" );

				if ( result ) {
				    // the user clicked ok
				     <?php
				    header('location:registration.php');
				    ?>
				} else {
				    // the user clicked cancel or closed the confirm dialog.
				}
			</script>
			<?php
			
		}
}

?>







