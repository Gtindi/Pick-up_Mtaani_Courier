<?php
header('Content-Type: application/json');

require_once('db_connect.php');

$sqlQuery = "SELECT id, s_name, weight, price, height FROM parcel ORDER BY height";

$result = mysqli_query($conn,$sqlQuery);

$data = array();
foreach ($result as $row) {
	$data[] = $row;
}

mysqli_close($conn);

echo json_encode($data);
?>
<!----dreamville420--->