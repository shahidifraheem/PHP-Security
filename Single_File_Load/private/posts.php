<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Home</title>
</head>

<body>

	<style type="text/css">
		* {
			font-family: tahoma;
			font-size: 14px;
		}

		.container {
			padding: 10px;
			box-shadow: 0px 0px 10px #aaa;
			margin: auto;
			margin-top: 20px;
			width: 100%;
			max-width: 800px;
			min-height: 100px;

		}

		.post {
			border-bottom: solid thin #ccc;
		}

		.text {
			padding: 4px;
			background-color: #eee;
		}

		.timestamp {
			font-size: 12px;
			color: #aaa;
			float: right;
		}
	</style>
	<center>
		<h1>Posts</h1>
	</center>
	<?php include("header.php"); ?>

	<div class="container" style="">

		<center>
			<h1 style="color:#f0f;">All Posts</h1>
		</center>

		<?php

		// if (access("admin")) {
		//get posts
		$post_class = new Posts();
		$result = $post_class->get_home_posts();

		if ($result) {
			foreach ($result as $row) {
				//display posts
				echo "
			<div class='post'>
			<div>
			<h2>$row[title]</h2>
			</div>
			<p class='text'>" . substr($row['post'], 0, 200) . "</p>
			<a href='post?id=" . $row['id'] . "'>..read more..</a>
			<p class='timestamp'>" . date("jS M, Y", strtotime($row['date'])) . "</p>
			<br style='clear: both;'>
			</div>
			";
			}
		}
		// } else {
		// 	echo "Sorry! you don't have access";
		// }
		?>

	</div>
	<?php include("footer.php"); ?>