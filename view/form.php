<?php 
        require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

	$date = new DateTime('today');
?>
<div>
	<h1>Create Blog Post</h1>
	<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
		<div>
			<label for="title">Title: </label>
			<input type="text" name="title"/>
		</div>
		<div>
			<p><label for="post">Post: </label>
			<textarea name="post"></textarea>
		</div>
			<p><button type="submit">Submit</button>
		</div>
			<p>The date is : <?php echo $date->format('m/d/Y') ?></p>

	</form>
</div>