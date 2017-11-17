<?php 
	$servername = "localhost";
	$username = "root";
	$password = "";

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9
	try{
    $dbh = new pdo( "mysql:host=localhost;dbname=lazzypropertiesdb",
                    $username,
                    $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $ex){
		echo 'Connection failed: ' . $ex->getMessage();
	}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
	$conn = new mysqli($servername, $username, $password);

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	} 
	echo "Connected successfully";
>>>>>>> 0af9efb084afc4fbb89a13414bb47a599c5f880b
>>>>>>> e546d66233d9b50b8a5c8bbfeb9c639fd4a561fc
>>>>>>> 5c5879bd5f8a92a246db466aa84c4fe5d97f27e9

 ?>