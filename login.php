<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechBlogger's-Login</title>
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
								<h2 class="title">
									<span>Welcome to <span>Tech Blogger's</span></span>
								</h2>
							<div class="row2">
								<div id="login">   
									<h1>Welcome Back!</h1>
									<?php
									if(isset($_GET["message"])){
										echo "<span> Invalid Email Id/Password</span>";
									}
									?>
									<form action="login_validation.php" method="post">
										Email Address<input type="text" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/>
										Password<input type="password" name="password"/>
										<button class="button button-block"/>Log In</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer"></div>
</body>
</html>