<!DOCTYPE html>
<head>
	<title>Pizza Order Receipt</title>
	<meta charset="utf-8">
</head>

<body>

	<h1>Reciept</h1>
<?php

echo "OrderID: " . $OrderID;
echo "<br>";
echo "Name: " . $firstName ." ". $lastName;
echo "<br>";
echo "eMail: " . $emailAddress;
echo "<br>";
echo "Address: " . $address;
echo "<br>";
echo "Phone No: " . $phoneNo;
echo "<br>";
echo "Size: " . $size;
echo "<br>";
echo "Price: " . "€".$price;
echo "<br>";
echo "Student: " . $student;
echo "<br>";

echo "<h3>Topppings</h3>";
echo "Anchovies: " . $anchovies;
echo "<br>";
echo "Pineapple: " . $pineapple;
echo "<br>";
echo "Pepperoni: " . $pepperoni;
echo "<br>";
echo "Olives: " . $olives;
echo "<br>";
echo "Onions: " . $onion;
echo "<br>";
echo "Peppers: " . $peppers;
echo "<br>";

echo "<h3>Update/Delete</h3>";

echo "<a href='DeleteOrder.php'>Delete Order</a>";
echo "<br>";
echo "<a href='UpdateOrder.php?OrderID=".$OrderID."'>Update Order</a>";






?>

</body>
</html>
