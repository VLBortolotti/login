<?php include './includes/header.php' ?>

		<main>
			<h2 id="form-title">Login</h2>

			<form id="login-form" action="includes/login.inc.php" method="post">
				<input type="text" placeholder="username/email" name="username_email">

				<input type="text" placeholder="password" name="password">

				
				<button type="submit" name="submit">
					Login
				</button>
			</form>

		</main>

<?php include './includes/footer.php' ?>