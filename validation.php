<?php
include 'connect.php';

$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];

$sql = "INSERT INTO user (name, email, password) VALUES ('$name', '$email', '$pass')";

if ($conn->query($sql)===TRUE) {
	$conn->close();
	header("location: login.php");
} else {
	$conn->close();
	header("location: signup.php?message=fail");
}
?>
