<?php
    include_once 'header.php';
?>

				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="login.php">Belépés</a></li>
				</ul>
			</nav>

			<div class="form-container">

				<h1>Regisztráció</h1>

				<form action="includes/signup-inc.php" method="POST" autocomplete="off">
					<input type="text" name="name" required placeholder="Teljes név">

					<input type="text" name="username" required placeholder="Felhasználónév">

					<input type="text" name="email" required placeholder="E-mail cím">

					<input type="password" name="password" id="pswd" required placeholder="Jelszó">

					<input type="password" name="password2" required placeholder="Megerősítő jelszó">
					
					<input type="submit" name="singup-btn" value="Regisztráció">
				</form>
			</div>

			<?php 
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyImput"){
						echo "Fill all the fields";
					} elseif ($_GET["error"] == "invalidUsername") {
						echo "Rossz felhasználónév";
					} elseif ($_GET["error"] == "invalidEmail") {
						echo "Rossz email cím";
					} elseif ($_GET["error"] == "passwordsDontMatch") {
						echo "Jelszavak nem egyformák";
					} elseif ($_GET["error"] == "usernameTaken") {
						echo "Foglalt felhasználónév";
					} elseif ($_GET["error"] == "stmtFailed") {
						echo "Foglalt felhasználónév";
					} elseif ($_GET["error"] == "usernameTaken") {
						echo "Foglalt felhasználónév";
					} elseif ($_GET["error"] == "none") {
						echo "Szép volt";
					}
				}
			?>

		</section>
			
<?php
    include_once 'footer.php';
?>