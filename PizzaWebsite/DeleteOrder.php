<html>
	<head>
	<title>Delete Order</title>
	<meta charset ="utf-8" />
</head>

<body>

<?php
session_start();

include 'inc_DBConnect.php';

$newOrder = $_SESSION['order_id'];
$orderToDelete = $newOrder;
//delete

echo "Are you sure you want to delete " . $newOrder;
echo "<form action='DeleteOrder.php'>
    	<input type ='submit' value='$newOrder' name='delete' 'yes'/>
		  </form>";


if (isset($_GET['delete']))
{
	$sql = "DELETE FROM orders WHERE order_id = '$orderToDelete'";

	if($DBConnection->query($sql) === TRUE){
	echo "Record deleted successfully";
}

	else {
	echo "Error deleting record: " . $DBConnection->error;
}
}

$DBConnection->close();

?>
</body>
</html>
