
<!DOCTYPE html>
<html>
<head>
	<title>BOOK WEB CREATION</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="java.js"></script>
	<?php

	if(isset($_POST['read_no'])) {
		$conn = new mysqli("localhost","root","","readers");

		$lname = $_POST['lname'];
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$address = $_POST['address'];
		$age = $_POST['age'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$read_no = $_POST['read_no'];

		$result = $conn->query("SELECT * FROM info WHERE read_no='$read_no' LIMIT 1");
		if(mysqli_num_rows($result)> 0) {
			echo "<script>alert('READER NUMBER ALREADY EXIST')</script>";
		} else {
			$result = $conn->query("INSERT INTO info(lastname, firstname, midname, address, age, gender, email, read_no) values('$lname', '$fname' , '$mname', '$address', '$age','$gender', '$email', '$read_no')");
		header("location: display.php");
		}
	} else {}
	?>
</head>
<body>
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>	
				<li><a href="about.php">About</a></li>	
				<li><a href="display.php">Records</a></li>
			</ul>
		</div>

		<div class="title">
			<h1>Reader's Information</h1>
			<h1>System</h1>
		</div>
		<div class="button">
			<button class="btn" id="btn">Form</button>
		</div>
		<p>Click the button to fill-up information</p>

	<center>
	<div class="form-adjust" id="div1">
		<h1>Reader's Information Form</h1>
		<center>
		<form method="POST" action="index.php">
			<input class="name" type="text" name="lname" placeholder="Last Name" required="#">
			<input class="name" type="text" name="fname" placeholder="First Name" required="#">
			<input class="name" type="text" name="mname" placeholder="Middle Name" required="#">
			<input class="address" type="text" name="address" placeholder="Address" required="#">
			<input class="age" type="text" name="age" placeholder="Age" required="#">
			<input class="gender" type="text" name="gender" placeholder="Gender" required="#">
			<input class="email" type="text" name="email" placeholder="Email" required="#">
			<input class="read_no" type="text" name="read_no" placeholder="Reader Number" required="#">
			<button id="bton">Submit</button>
		</form>
		</center>
	</div>
	</center>
	<div class="point"></div>

</body>
</html>