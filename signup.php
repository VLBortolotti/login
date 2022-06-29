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

<?php include './includes/footer.php' ?>