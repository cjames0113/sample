<?php
$conn = new mysqli("localhost", "root", "", "readers");

$id = $_POST['id'];
$ln = $_POST['lname'];
$fn = $_POST['fname'];
$mn = $_POST['mname'];
$adr = $_POST['address'];
$age = $_POST['age'];
$gend = $_POST['gender'];
$email = $_POST['email'];
$read_no = $_POST['read_no'];

$result = $conn->query("UPDATE info set lastname='$ln', firstname='$fn', midname='$mn', address='$adr', age='".$age."', gender='$gend', email='$email', read_no='".$read_no."' WHERE read_id='".$id."'");

$data['success'] = false;

if($result) {
	$data['success'] = true;
}
echo json_encode($data);
?>