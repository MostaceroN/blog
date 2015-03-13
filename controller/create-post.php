<<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
		
	</div>
</body>
</html>

<?php
	require_once(__DIR__ . "/../model/config.php");

	$date = new DateTime('today');
	$time = new DateTime('America/Los_Angeles');

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);
        $query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post'");
	if($query){
		echo "<p><h1>$title</h1></p>" . "<p>$post</p>";
		echo "Posted on: " . $date->format("m/d/y") . " at " . $time->format("G;i");
	}

	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	echo "<li><a href=" . "$path" . "index.php" . ">Home</li>";
	?>
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
</form>