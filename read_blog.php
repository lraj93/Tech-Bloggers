<!DOCTYPE html>
	<html>
	<head>
		<meta charset="UTF-8">
		<title>TechBlogger's-Home</title>
		<meta name="description" content="Description of your site goes here">
		<meta name="keywords" content="keyword1, keyword2, keyword3">
		<link href="css/style.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div class="main">
			<div class="page">
				<div class="header">
					<div class="banner">
						<h1>Tech Blogger's</h1>
					</div>
					<div class="topmenu">
						<ul>
							<li style="border-left: medium none;"><a href="home.php">Home</a></li>
							<li><a href="aboutus.html">About Us</a></li>
							<li><a href="signup.php">Sign Up</a></li>
							<li><a href="login.php">Login</a></li>
						</ul>
					</div>
				</div>
				<div class="content">
					<div class="content-in">
						<div class="left-panel">
							<h2>Categories</h2>
							<div class="left-content">
								<ul>
									<?php
									include 'left_content.php';
									?>
								</ul>
							</div>
							<div class="gap"></div>
							<h2>Recent Updates</h2>
							<div class="left-content">
								<ol>
									<?php
									include 'left_recent.php';
									?>
								</ol>
							</div>
						</div>
						<div class="right-panel">
							<div class="right-panel-in">
								<div class="row">
									<h2 class="title"><span>Welcome to <span>Tech Blogger's</span></span></h2>
									<div class="row2">
<?php
include 'connect.php';
if(isset($_GET["user_id"])){
	$user_id=$_GET["user_id"];
	$sql="SELECT name, title,content FROM blog b inner join user u on b.user_id=u.id WHERE u.id='$user_id' order by inserted_ts desc";
}else if(isset($_GET["category_id"])){
	$category_id=$_GET["category_id"];
	$sql="SELECT name, title,content FROM blog b inner join user u on b.user_id=u.id WHERE b.category_id='$category_id' order by inserted_ts desc";
}else if(isset($_GET["blog_id"])){
	$blog_id=$_GET["blog_id"];
	$sql="SELECT name, title,content FROM blog b inner join user u on b.user_id=u.id WHERE b.id=$blog_id order by inserted_ts desc";
}else{
	$sql="SELECT name, title,content FROM blog b inner join user u on b.user_id=u.id order by inserted_ts desc limit 1";
}

$result = $conn->query($sql);

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		echo "<p><h1>".$row["title"]."</h1></p>";
		echo "<p>".$row["content"]."</p></br>";
		echo "<p><h4><span >Created by:&nbsp;".$row["name"]."</span></h4></p>";
		echo"-----------------------------------------------------------------------------";
		echo"-----------------------------------------------------------------------------";
		echo"-----------------------------------------------------------------------------";
		echo"-----------------------------------------------------------------------------";
	}
}else{
	echo "<p>No blogs in this section</p>";
}
?>
</div>
</body>
</html>