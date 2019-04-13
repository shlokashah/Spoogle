<?php

	$firstName = $_REQUEST['FirstName'];
	$lastName = $_REQUEST['LastName'];
	$email = $_REQUEST['EmailId'];
	$password = $_REQUEST['Password'];
	$gender = $_REQUEST['Gender'];


	$servername = "localhost";
	$username = "root";
	$pass = "";
	$dbname = "spoogle";

	$conn = new mysqli($servername, $username, $pass, $dbname);

	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	// $sql = "INSERT INTO users (first_name,last_name,email,password,gender) VALUES ($firstName,$lastName,$email,$password,$gender)";
	$sql = "INSERT INTO users (first_name,last_name,email,password) VALUES ('$firstName','$lastName','$email','$password');";

	if ($conn->query($sql) === TRUE) {
			echo '
			<script type="text/javascript">alert("Registration successful!!!");
			</script>
			<script>
			window.open("start.php","_self");
			</script>';
	} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>
