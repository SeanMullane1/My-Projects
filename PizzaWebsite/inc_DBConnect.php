<?php

$serverName = "localhost";
$userName = "root";
$password = "";


			$DBConnection = mysqli_connect($serverName, $userName, $password);

			if($DBConnection === FALSE)
			{
				$error = "<p>Unable to connect to the database server.</p>\n";
				echo $error;
				exit;
			}
			else
			{
				//successful connection
				$DBName = "pizza";


				if(!mysqli_select_db($DBConnection, $DBName))
					{
						$error = "<p> Unable to select the $DBName database!</p>";
						echo $error;
						exit;
					}
					echo "DEBUG PRINT : Database connection established.<br>";
			}

?>
