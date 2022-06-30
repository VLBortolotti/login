<?php include './includes/header.php' ?>

		<main>
			<h2 id="form-title">Sign Up</h2>
		
			<form id="login-form" action="includes/signup.inc.php" method="post">
				<input type="text" placeholder="full name" name="name">

				<input type="text" placeholder="email" name="email">
				
				<input type="text" placeholder="username" name="uid">
				
				<input type="password" placeholder="password" name="pwd">

				<input type="password" placeholder="repeat password" name="pwdrepeat">
				
				<button type="submit" name="submit">
					Sign Up
				</button>
			</form>
		</main>
<?php
//checking if a certain URL exists inside of the URL 
if(isset($_GET["error"])) {
	//checking what kind of error, if there is any, that is
	if($_GET["error"] == "emptyinput") {
		echo "<p>You forgot to fill in all fields</p>";
	}

	else if ($_GET["error"] == "invalidUid") {
		echo "<p>Choose a proper username</p>";
	}

	else if ($_GET["error"] == "email") {
		echo "<p>Choose a proper email</p>";
	}

	else if ($_GET["error"] == "passwordsdontmatch") {
		echo "<p>Passwords don't match.</p>";
	}

	else if ($_GET["error"] == "stmtfailed") {
		echo "<p>Something went wrong. Try again</p>";
	}

	else if ($_GET["error"] == "usernametaken") {
		echo "<p>Choose another username. It's been already taken.</p>";
	}

	else if ($_GET["error"] == "none") {
		echo "<p>You've successfully signed up!</p>";
	}
}	

include './includes/footer.php' 
?>