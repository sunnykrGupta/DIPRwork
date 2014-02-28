
<?php

session_start();
//require("includes/connection.php");
$connection = pg_connect("host=localhost port=5433 dbname=drdo user=user1 password=8090");
         if (!$connection) {
          die("Database connection failed: ");
          }
// getting info from login page

$empid = $_POST['empid'];
$logid = $_POST['login'];
$pass1 = $_POST['pass1'];
$pass2 = $_POST['pass2'];
$email = $_POST['email'];

$name= $_POST['name'];
$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$sex = $_POST['sex'];
$grade = $_POST['grade'];
$role = $_POST['role'];
$design = $_POST['designation'];

//print all inputs

/*echo $empid . "<br>";
echo $logid . "<br>";
echo $pass1 . "<br>";
echo $pass2 . "<br>";
echo $email . "<br>";

echo $name . "<br>";
echo $address . "<br>";
echo $city . "<br>";
echo $state . "<br>";
echo $zip . "<br>";
echo $sex . "<br>";
echo $grade . "<br>";
echo $role . "<br>";
echo $design . "<br>";    */

// code for database entry


/* $query = "INSERT INTO friends(firstname, surname, emailaddress) VALUES('" . $firstname . "', '" . $surname . "', '" . $emailaddress . "')"; */

$query = "INSERT INTO register (empid,email,name,address,city,state,zip,sex,pay,role,design)
		VALUES ('" .$empid. "','" . $email . "','" . $name . "','" . $address . "','" . $city . "','" . $state . "','" . $zip . "','" . $sex . "','" . $grade . "','" . $role . "','" . $design . "')";

$result = pg_query($connection, $query);

if ($result) {
		
		header("Refresh: 3; url=admin.php");
		echo "<pre><strong>SUCCESSFULLY subject created....</strong></pre>";
	} 
	else {
		// Display error message.
		echo "<p >Subject creation failed.</p>";
		echo "<p>" . pg_last_error() . "</p>";
	}

?>


<?php
// close connection
		pg_close($connection);

?>
