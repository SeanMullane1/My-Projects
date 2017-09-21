<html>
<head>
	<meta charset = "utf-8">
	<title>Update Order</title>
</head>

<body>
<?php

include 'inc_DBConnect.php';

//getting id
$OrderID = $_GET['OrderID'];

//getting the order
$SQL = "SELECT * FROM orders WHERE order_id = '$OrderID' ";

$result = $DBConnection->query($SQL);

$row = $result->fetch_assoc();



function test_input($data, $DBConnection){
	$data = trim($data);
	$data = stripslashes($data);
	$data = mysqli_real_escape_string($DBConnection, $data);
	return $data;
}


//load in values

$firstName = $row['firstname'];
$lastName = $row['lastname'];
$emailAddress = $row['email'];
$phoneNo = $row['phone'];
$address = $row['address'];
$student = $row['student'];
$price = $row['price'];
$size = $row['size'];
$anchovies = $row['anchovies'];
$peppers = $row['peppers'];
$pepperoni = $row['pepperoni'];
$onion = $row['onion'];
$olives = $row['olives'];
$pineapple = $row['pineapple'];







echo " </br>First Name: <input type = 'text' name = 'firstname' size = '20' maxlength = '40' value = '$firstName' </br></br> ";

echo " </br>Last Name: <input type = 'text' name = 'lastname' size = '20' maxlength = '40' value = '$lastName'</br></br> ";

echo " </br>Email: <input type = 'text' name = 'email' size = '20' maxlength = '40' value = '$emailAddress'</br></br> ";

echo " </br>Phone No: <input type = 'text' name = 'phone' size = '20' maxlength = '40' value = '$phoneNo'</br></br> ";

echo " </br>Address: <input type = 'text' name = 'address' size = '20' maxlength = '40' value = '$address'</br></br> ";


//size
echo " <br> Small <input type = 'radio' name = 'size' value = 'Small' $size > \t ";
echo " Medium<input type = 'radio' name = 'size' value = 'Medium' >\t  ";
echo " Large<input type = 'radio' name = 'size' value = 'Large'><br>  ";

//student
echo " </br>Student: <input type = 'checkbox' name = 'student' value = 'Student'</br></br> ";

//Toppings
echo " </br>Anchovies: <input type = 'checkbox' name = 'anchovies' value = '$anchovies'<\t>";

echo " Peppers: <input type = 'checkbox' name = 'peppers' value = '$peppers'<\t> ";

echo " Onions: <input type = 'checkbox' name = 'onions' value = '$onion'<\t> ";

echo " Olives: <input type = 'checkbox' name = 'olives' value = '$olives'<\t> ";

echo " Pepperoni: <input type = 'checkbox' name = 'pepperoni' value = '$pepperoni'<\t> ";

echo " Pineapple: <input type = 'checkbox' name = 'pineapple' value = '$pineapple'<\t> ";
echo "<form action='UpdateOrder.php'>
<br> <br><input type = submit value = 'update' name = 'update' 'yes'>

 </form>";




//Update

if (isset($_POST['update'])){

$sql = "UPDATE orders SET firstname = '$firstName'  WHERE order_id = '$OrderID'";

if($DBConnection->query($sql) === TRUE){
echo "Record updated successfully";
include 'Reciept.html.php';
}

else {
echo "Error deleting record: " . $DBConnection->error;
}

}




$DBConnection->close();




?>

</body>
</html>
