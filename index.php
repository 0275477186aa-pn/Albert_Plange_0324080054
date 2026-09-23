<?php include("includes/header.php");?>

			<!-- CTA -->
				<section id="cta">
					<h2>Login form</h2>
					<form action="login.php" method="POST">
						<input type="text" name="username" placeholder="Enter your username" /> <br>
						<input type="password" name="password" placeholder="Enter your password" /> <br>
						<button type="submit">login</button>
					</form>
				</section>
<?php include("includes/footer.php"); ?>