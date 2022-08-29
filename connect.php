<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	/*$gender = $_POST['gender'];*/
	$email = $_POST['email'];
	$location = $_POST['location'];
	$number = $_POST['number'];
	

	// Database connection
	$conn = new mysqli('localhost','root','','placeorder');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into foodOrder(firstName, lastName,email,location,number) values( ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssss", $firstName, $lastName, $email, $location,$number);//$number
		$execval = $stmt->execute();
		echo $execval;
		echo "Order successful...";
		$stmt->close();
		$conn->close();
	}
?>