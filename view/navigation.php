<?php 
	require_once(__DIR__ . "/../model/config.php");
	require_once(__DIR__ . "/../controller/login-verify.php");

?>

<nav>
	<ul>
		<li>
                    <?php
			if(authenticateUser()){

			}
			else{

			}

			?>
			<h1>Welcome to This Blog</h1>
			<a href="controller/logout-user.php">Logout</a>
			<a href="post.php">Create Post</a>
		</li>
	</ul>
</nav>	