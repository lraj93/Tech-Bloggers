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
                    if(isset($_GET["error"])){
                      echo "<span> Error creating blog. Please try again</span>";
                    }
                    ?>
  <form action="post_blog.php" method="Post">
    <select name="category_id">
      <?php
      include 'connect.php';

      $sql = "SELECT id, name FROM category order by name";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          echo "<option value='".$row["id"]."'>".$row["name"]."</option>";
        }
      }
      ?>
    </select>
    <br><br><br>
    <?php
      echo "<input type='hidden' name='user_id' value='".$_GET["user_id"]."' />";
    ?>
    <textarea rows="1" cols="50" name="title" ></textarea><br>
    <textarea rows="15" cols="50" name="content" ></textarea><br>
    <input type="submit" value="Create an Blog">
  </form>
</body>
</html>