<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>TechBlogger's-Signup </title>
  <meta name="description" content="Description of your site goes here">
  <meta name="keywords" content="keyword1, keyword2, keyword3">
  <link href="css/style.css" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="css/normalize.css">
  <style type="text/css">
  .topmenu {
   font-family: verdana;
 }
 </style>
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
            <li style="border-left: medium none;"><a href="home.html">Home</a></li>
            <li><a href="aboutus.html">About Us</a></li>
            <li><a href="signup.html">Sign Up</a></li>
            <li><a href="login.php">Login</a></li>
          </ul>
        </div>
      </div>
      <div class="content">
        <div class="content-in">
          <menu></menu><div class="left-panel">
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
              <div class="container">
                <div class="profile">
                  <div class="form">
                    <div id="signup">
                      <h1>Sign Up Here</h1>
                      <?php
                      if(isset($_GET["message"])){
                        echo "<span>Email ID already exists</span>";
                      }
// define variables and set to empty values
                      $nameErr = $emailErr = $passwordErr = "";
                      $name = $email = $password= "";

                      if ($_SERVER["REQUEST_METHOD"] == "POST") {
                       if (empty($_POST["name"])) {
                         $nameErr = "Name is required";
                       } else {
                         $name = test_input($_POST["name"]);
                       }

                       if (empty($_POST["email"])) {
                         $emailErr = "Email is required";
                       } else {
                         $email = test_input($_POST["email"]);
                       }

                       if (empty($_POST["password"])) {
                         $password = "";
                       } else {
                         $password = test_input($_POST["password"]);
                       }

                     }

                     function test_input($data) {
                       $data = trim($data);
                       $data = stripslashes($data);
                       $data = htmlspecialchars($data);
                       return $data;
                     }
                     ?>
                     <form action="validation.php" method="post">
                      <div class="top-row">
                        Name
                        <input type="text" name="name" required/> <?php echo $nameErr;?>
                      </div><br>
                      Email Address<span class="req"></span>
                      <input type="email" name="email" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"/><?php echo $emailErr;?><br>
                      Set A Password<span class="req"></span>
                      <input type="password" required autocomplete="off" name="password"/>
                      <?php echo $passwordErr;?></br>
                    </div>
                    <button type="submit" class="button button-block"/>Get Started</button><br>
                  </form>
                </div>
              </div>
            </div><!-- tab-content -->
          </div> <!-- /form -->
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<script src="js/index.js"></script>
</div>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!--DO NOT Remove The Footer Links-->
<div class="footer">
  <p>&copy; Copyright 2016. Designed by <a target="_blank" href="http://www.techbloggers.com">www.techbloggers.com</a></p>
</div>
</div>
</div>
<!--DO NOT Remove The Footer Links-->
<!--Designed by--><a target="_blank" href="http://www.htmltemplates.net">
<img src="images/footer.gif" class="copyright" alt="html templates"></a>
<!--DO NOT Remove The Footer Links-->
</body></html>