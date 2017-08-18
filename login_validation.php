<?php
include 'connect.php';
$email=$_POST['email'];
$pass=$_POST['password'];
$sql = "SELECT id, password FROM user where email='$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      if($row["password"]==$pass){
      	header("location: create_blog.php?user_id=".$row["id"]);
		echo "Logged in successfully.";
		
	  }else{
		header("location: login.php?message=error");
	  }
    }
} else {
    header("location: login.php?message=error");
}
$conn->close();
?>