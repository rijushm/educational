<?php

$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$inquiry = $_POST['inquiry'];
$message = $_POST['message'];

$conn = new mysqli('localhost','root','','ceedmycontact');

if($conn->connect_error){
	?>
	<script type="text/javascript">
		alert("Connection failed!");
	</script>
	<?php
}else{
	$stmt = $conn->prepare("insert into contact(firstName,lastName,email,phone,inquiry,message) values(?,?,?,?,?,?)");
	$stmt->bind_param("sssiss",$firstName,$lastName,$email,$phone,$inquiry,$message);
	$stmt->execute();
	?>
	<script type="text/javascript">
		alert("Submitted Successfully");
	</script>
	<?php
	$stmt->close();
	$conn->close();
	header('location:index.php');
}

?>