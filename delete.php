<?php
$conn = new mysqli("localhost", "root", "", "readers");

$iddel = $_GET['iddel'];

$result = $conn->query("DELETE from info WHERE read_id='".$iddel."'");

$data['success'] = false;

if($result) {
	$data['success'] = true;
}
echo json_encode($data);
?>