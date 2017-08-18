<?php
include('connect.php');

$category_id=$_POST['category_id'];
$title=$_POST['title'];
$content=$_POST['content'];
$user_id=$_POST['user_id'];

$sql = "INSERT INTO blog(category_id, user_id, title, content)VALUES($category_id, $user_id, '$title', '$content')";
if ($conn->query($sql) === TRUE) {
	$conn->close();
	header("Location: home.php?user_id=".$user_id);
} else {
	$conn->close();
	header("Location: create_blog.php?message=error&user_id=".$user_id);
}
?>