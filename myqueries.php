<?php
$conn = new mysqli("localhost", "root", "", "readers");
$result = $conn->query("SELECT * FROM info");
$data = array();
$i = 0;
while($row = mysqli_fetch_array($result)) {
	$data[$i]['data'] = array(
		'id' => $row['read_id'],
		'lastname' => $row['lastname'],
		'firstname' => $row['firstname'],
		'midname' => $row['midname'],
		'address' => $row['address'],
		'age' => $row['age'],
		'gender' => $row['gender'],
		'email' => $row['email'],
		'read_no' => $row['read_no']
	);
	$i++;
}

echo json_encode($data);
?>