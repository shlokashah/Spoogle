<?php
// $email = $_REQUEST['emailid'];
$password = $_REQUEST['password'];
// $email='';
// $password='';
//
// if( !empty($_POST['email-id']) ) {
//   $email = $_REQUEST['email-id'];
// }
// else if( !empty($_POST['password']) ) {
//   $password = $_REQUEST['password'];
// }


  // echo "" . $email . "<br>" . $password. "<br><br>";

$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "spoogle";

$conn = new mysqli($servername, $username, $pass, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// $sql = "INSERT INTO users (first_name,last_name,email,password,gender) VALUES ($firstName,$lastName,$email,$password,$gender)";
$sql = "SELECT * FROM users WHERE password='$password';";
$result= $conn->query($sql);
$row = $result->fetch_assoc();

session_start();
$name=$row['first_name'];
$_SESSION['currentUser']=$name;
$_SESSION["LAST_ACTIVITY"] = time();

$sql1 = "UPDATE users SET loggedIn=1 WHERE first_name='$name';";
$result1= $conn->query($sql1);

$conn->close();

echo '
<script type="text/javascript">alert("Logged In!!!");
</script>
<script>
window.open("start.php","_self");
</script>';

?>
