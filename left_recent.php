<?php
	include 'connect.php';
	
	$sql = "SELECT id, SUBSTR(title, 1, 10) short_title, SUBSTR(content, 1, 20) short_desc from blog order by inserted_ts desc limit 2";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<li><span><strong>".$row["short_title"]."</strong>".$row["short_desc"]."</span><a href='read_blog.php?blog_id=".$row["id"]."' class='more'>read more...</a></li>";
		}
	}
?>