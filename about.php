<?php
    include_once 'header.php';
?>

				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="blog.php">Blog</a></li>
					<li><a href="about.php" class="jelenlegi">About</a></li>
					<li><a href="login.php">Belépés</a></li>
				</ul>
			</nav>

			<div class="form-container">
				<h4>Választanál, de nem tudod milyet?</h4>
			    <div class="text-area">
			        <p class="quiz">Gondod akadt választani kiskedvencet? Ne aggódj ezzel a kérdőivvel rájöhetsz melyik állat is való
			            hozzád legjobban.</p>
			    </div>
			    <form method="post">
			    	<label>
			    		Teljes név:
			    		<input type="text" required class="input row"/>
			    	</label>

			    	<label>
			    		Email cím
			    		<input type="text" required class="input row"/>
			    	</label>

					<label>
						Születési dátum:
						<input type="date" class="input row"/>
					</label>

	                <label>
	                	Naponta hány órát vagy otthon:
	                	<input type="number" required class="input row"/>
	                </label>

					<label>
						Mekkora területen laksz (m<sup>2</sup>): 
						<div class="input"><input id="terulet" type="number" name="area" required class="input row"/>
					</label>

					<div class="radio-button-container input">
	                    <label><input type="radio" name="x" value="kinti"> Kint tartanám</label>
	                    <label><input type="radio" name="x" value="benti"> Bent tartanám</label>
	                    <label><input type="radio" name="x" value="kintiBenti"> Bejöhet, ha akar</label>
	                </div>

					<label class="input">
						Van elég mozgástere?
						<input type="checkbox" name="mozgas">
					</label>

					<label class="input">
						Allergiás vagy az állatszőrre?
						<input type="checkbox" name="allergia">
					</label>

                	<select id="buy-option" class="input row">
	                    <option value="10k-25k">Havonta mennyit szánnál a vásárlásra?</option>
	                    <option value="25k-50k">5.000 - 10.000 Ft</option>
	                    <option value="50k-100k">10.000 - 15.000 Ft</option>
	                    <option value="100k-500k">15.000 - 30.000 Ft</option>
	                    <option value="500k+">30.000 felett</option>
                	</select>

			        <div id="under">
			            <textarea name="comment" maxlength="200" placeholder="Ide írd egyéb hozzászólásod! (Max. 200 karakter)"></textarea>
			            <br/>
			        </div>

			        <div class="submit">
			        	<input type="submit" name="submit-btn" value="Elküldés" class="elkuld"/>
		            	<input type="reset" name="reset-btn" value="Visszaállítás" class="visszaallit" />
			        </div>
			    </form>
			</div>
		</section>

<?php
    include_once 'footer.php';
?>