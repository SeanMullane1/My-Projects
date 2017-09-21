<!DOCTYPE html>
<head>
    <meta charset = "utf-8">
        <title>View Order</title>
</head>
<body>
<?php

      include "inc_DBConnect.php";

      function test_input($data, $DBConnection){
        $data = trim($data);
        $data = stripslashes($data);
        $data = mysqli_real_escape_string($DBConnection, $data);
        return $data;
      }



      $OrderID = uniqid();
      session_start();
      $_SESSION["order_id"] = $OrderID;


      // if ($_SERVER['REQUEST_METHOD'] == POST) form has been submitted by POST method

      $firstName = $lastName = $address = $emailAddress = $phoneNo = "";


      if($_SERVER['REQUEST_METHOD'] == "POST"){
        $firstName = test_input($_POST["firstName"], $DBConnection);
        $lastName = test_input($_POST["lastName"], $DBConnection);
        $address = test_input($_POST["address"], $DBConnection);
        $emailAddress = test_input($_POST["emailAddress"], $DBConnection);
        $phoneNo = test_input($_POST["phoneNo"], $DBConnection);
        $price = test_input($_POST["totalPrice"], $DBConnection);

        if ($_POST['pizzaSize'] == "small")
        {
          $size = "small";
        }

        if ($_POST['pizzaSize'] == "medium")
        {
          $size = "medium";
        }

        if ($_POST['pizzaSize'] == "large")
        {
          $size = "large";
        }


        if(isset($_POST['student']))
            {
            $student = "y";

            }
         else {
           $student = "n";
         }

        if(isset($_POST['addAnchovies']))
            {
              $anchovies = "y";
            }
        else
            {
              $anchovies = "n";
            }

        if(isset($_POST['addPineapple']))
            {
              $pineapple = "y";
            }
        else
            {
              $pineapple = "n";
            }

        if(isset($_POST['addPepperoni']))
            {
              $pepperoni = "y";
            }
        else
            {
              $pepperoni = "n";
            }

        if(isset($_POST['addOlives']))
            {
              $olives = "y";
            }
        else
            {
              $olives = "n";
            }

        if(isset($_POST['addOnion']))
            {
              $onion = "y";
            }
        else
            {
              $onion = "n";
            }
        if(isset($_POST['addPeppers']))
            {
              $peppers = "y";
            }
        else
            {
              $peppers = "n";
            }

$SQL = "INSERT INTO orders (order_id, student, firstName, lastName, address, email, phone, price, size,
anchovies, pineapple, pepperoni,peppers, olives, onion) VALUES ('$OrderID','$student', '$firstName', '$lastName', '$address', '$emailAddress',
'$phoneNo','$price', '$size', '$anchovies', '$pineapple', '$pepperoni','$peppers', '$olives', '$onion')";

      if (mysqli_query($DBConnection, $SQL))
      {
          echo "New record created successfully";
      }
      else
      {
        echo "Error: " . $SQL . "<br>" . mysqli_error($DBConnection);
      }
          mysqli_close($DBConnection);


      }

include 'Receipt.html.php';

?>
</body>
</html>
