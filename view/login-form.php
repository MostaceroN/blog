<?php

	require_once(__DIR__ . "/../model/config.php");
?>
<div>
	<h1>Login</h1>

	<form method="post" action="<?php echo $path . "controller/login-user.php"?>">

		<div>
			<label for="username">Username: </label>
			<input type="text" name="username" placeholder ="Username"/>
		</div>

		<div>
			<label for="password">Password: </label>
                        <input type="password" name="password" placeholder="Password"/>
		</div>

		<div>
			<button type="submit">Submit</button>
		</div>
	</form>
</div>