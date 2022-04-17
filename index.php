<?php
	include_once 'header2.php';
?>

				<ul>
					<li><a href="index.php" class="jelenlegi">Home</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="about.php">About</a></li>
					<li><a href="login.php">Belépés</a></li>
				</ul>
			</nav>

			<div class="content">
				<div class="textBox">
					<h2>Ők nem csak állatok<br>Hanem a <span>Társaid</span></h2>

					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tortor leo, ultrices et varius suscipit, facilisis eu nibh. Fusce sit amet risus eu quam iaculis vulputate non in mauris. Etiam viverra sem nec massa rhoncus, a venenatis augue pulvinar. Fusce felis nisl, commodo id volutpat non, bibendum eu massa.</p>
					
					<a href="#">Learn more</a>
				</div>
				
				<ul class="mini">
					<li><img src="img/cat.png" onclick="imgSlider('img/transparent-cat2.png');changeCircleColor('#017143')"></li>
					<li><img src="img/dog.png" onclick="imgSlider('img/transparent-dog.png');changeCircleColor('#eb4795')"></li>
					<li><img src="img/hamster.png" onclick="imgSlider('img/transparent-tengeri-malac.png');changeCircleColor('#D2691E')"></li>
					<li><img src="img/fish.png" onclick="imgSlider('img/transparent-fish.png');changeCircleColor('#0052cc')"></li>
				</ul>

				<div class="imgBox">
					<img class="cat" src="img/transparent-cat2.png">
				</div>
			</div>
		</section>


		<script type="text/javascript">
			function imgSlider(anything){
				document.querySelector('.cat').src = anything;
			}
			function changeCircleColor(color){
				const circle = document.querySelector('.kör');
				circle.style.background = color;
			}
		</script>

<?php
	include_once 'footer.php';
?>