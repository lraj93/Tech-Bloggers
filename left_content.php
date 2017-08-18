<?php
	include 'connect.php';
	
	$sql = "SELECT id, name FROM category order by name";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo "<li><a href='read_blog.php?category_id=".$row["id"]."'>".$row["name"]."</a></li>";
		}
	}
?>