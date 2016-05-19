<?php
session_start();
include('include/database.php');


$user = $_POST['username'];
$pass = $_POST['password'];


$sql = "SELECT * FROM user where username = '" . $user."' and password ='" . $pass."'";

$result = mysqli_query($conn, $sql);
//$result = $conn->query($sql);

if (mysqli_num_rows($result) > 0) {
	$_SESSION["checklogin2"]=$user;
   echo 'correct';
} else{
	echo 'wrong';
}

$conn->close();
?>