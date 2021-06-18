<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="jquery.min.js"></script>
	<script type="text/javascript" src="java.js"></script>
</head>
<body>
		<div class="menu">
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="about.php">About</a></li>		
				<li><a href="display.php">Record</a></li>
			</ul>
		</div>

	<div class="displayDiv">
		<div class="innerDiv1">
			<center><font class="search">
				<input type="text" name="search" id="search" placeholder="Search here ..">
			</font></center>
		</div>
		<div>
			<h3>Reader's Record</h3>
		</div>
		<table>
			<thead>
				<tr class="row1">
					<td>Line #</td>
					<td>Last Name</td>
					<td>First Name</td>
					<td>Reader Number</td>

				</tr>
			</thead>
			<tbody id="displayHere">
		</table>
	</div>
	
	<center>
	<div class="form-adjust" id="div2" style="display: none;">
		<button class="cancelButton">X</button>
		<h1>Reader's Information Form</h1>
		<center>
			<form>
			<input type="hidden" style="cursor: pointer;" name="id" readonly="">
			<input class="name" style="cursor: pointer;" type="text" name="lname" readonly="">
			<input class ="name" style="cursor: pointer;" type="text" name="fname" readonly="">
			<input class="name" style="cursor: pointer;" type="text" name="mname" readonly="">
			<input class="address" style="cursor: pointer;" type="text" name="address" readonly="">
			<input class="age" style="cursor: pointer;" type="text" name="age" readonly="">
			<input class="gender" style="cursor: pointer;" type="text" name="gender" readonly="">
			<input class="email" style="cursor: pointer;" type="text" name="email" readonly="">
			<input class="read_no" style="cursor: pointer;" type="text" placeholder="read_no" readonly="">
			</form>
			<button id="btonEdit">Edit</button>
			<button id="btonRemove">Remove</button>
		</center>
	</div>
	</center>
	<div id="rows"></div>
	<div class="forLabel">
			<form>
			<input type="hidden" style="cursor: pointer;" name="id" readonly="">
			<input class="name" style="cursor: pointer;" type="text" placeholder="Last Name" readonly="">
			<input class ="name" style="cursor: pointer;" type="text" placeholder="First Name" readonly="">
			<input class="name" style="cursor: pointer;" type="text" placeholder="Middle Name" readonly="">
			<input class="address" style="cursor: pointer;" type="text" placeholder="Address" readonly="">
			<input class="age" style="cursor: pointer;" type="text" placeholder="Age" readonly="">
			<input class="gender" style="cursor: pointer;" type="text" placeholder="Gender" readonly="">
			<input class="email" style="cursor: pointer;" type="text" placeholder="Email" readonly="">
			<input class="read_no" style="cursor: pointer;" type="text" placeholder="Reader Number" readonly="">
			</form>
	</div>
	<div class="forLabelEdit">
			<form>
			<input type="hidden" style="cursor: pointer;" name="id" readonly="">
			<input class="name" style="cursor: pointer;" type="text" placeholder="Last Name" readonly="">
			<input class ="name" style="cursor: pointer;" type="text" placeholder="First Name" readonly="">
			<input class="name" style="cursor: pointer;" type="text" placeholder="Middle Name" readonly="">
			<input class="address" style="cursor: pointer;" type="text" placeholder="Address" readonly="">
			<input class="age" style="cursor: pointer;" type="text" placeholder="Age" readonly="">
			<input class="gender" style="cursor: pointer;" type="text" placeholder="Gender" readonly="">
			<input class="email" style="cursor: pointer;" type="text" placeholder="Email" readonly="">
			<input class="read_no" style="cursor: pointer;" type="text" placeholder="Reader Number" readonly="">
	</div>
	<center>
	<div class="form-adjust3" id="div3" style="display: none;">
		<button class="cancelButtonDiv3">X</button>
		<h1>Edit Reader's Information</h1>
		<center>
		<form id="formEdit">
			<input type="hidden" name="id" readonly="">
			<input class="name" type="text" name="lname">
			<input class ="name" type="text" name="fname">
			<input class="name" type="text" name="mname">
			<input class="address" type="text" name="address">
			<input class="age" type="text" name="age">
			<input class="gender" type="text" name="gender">
			<input class="email" type="text" name="email">
			<input class="read_no" type="text" name="read_no">
		</form>
		</center>
			<button id="saveChanges">Save Changes</button>
	</div>
	</center>
</body>
</html>