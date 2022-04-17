<?php
    include_once 'header.php';
?>

				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="login.php" class="jelenlegi">Belépés</a></li>
				</ul>
			</nav>


			<div class="form-container">
				<img src="img/avatar.png" alt="Avatar" class="avatar-icon">

				<h1>Bejelentkezés</h1>

				<form action="includes/loin-inc.php" method="POST" autocomplete="off">
					<input type="text" name="username" required placeholder="Felhasználónév vagy Email cím">

					<input type="password" name="password" id="pswd" required placeholder="Jelszó">

					<div class="checkbox-text">
						<div class="checkbox-container">
							<label>
								<input type="checkbox" id="remember">
								Emlékezz rám
							</label>
						</div>

						<a href="#">Elfelejtett jelszó?</a>
					</div>
					
					<input type="submit" name="login-btn" value="Bejelentkezés">

					<div class="signup">
						<span>Nincs fiókod? <a href="signup.php">Regisztrálj</a></span>
					</div>
				</form>
			</div>

			<?php 
				if (isset($_GET["error"])) {
					if ($_GET["error"] == "emptyImput"){
						echo "Fill all the fields";
					} elseif ($_GET["error"] == "wrongLogin") {
						echo "Rossz belépési adatok";
					}
				}
			?>

		</section>

<?php
    include_once 'footer.php';
?>