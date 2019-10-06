<?php include "menu.php"; ?>
	<h2>Post</h2>
	<p>
		This is the Post.
		<form class="" action="show_post.php" method="post">
			<label for="en">Etunimi</label><br>
			<input type="text" id="en" name="en" value="" placeholder="etunimi" required ><br>
			<label for="sn">Sukunimi</label><br>
			<input type="text" id="sn" name="sn" value="" placeholder="sukunimi"><br>
			<br>
			<br>
			<label for="kieli">Kielet</label><br>
			<select class="" id="kieli" name="kieli">
				<option value="suomi">Suomi</option>
				<option value="ruotsi">Ruotsi</option>
				<option value="englanti">Englanti</option>
			</select>
			<br>
			<br>
			<label for="sukup">Sukupuoli</label><br>
			<input type="radio" id="sukup" name="sukupuoli" value="mies">Mies<br>
			<input type="radio" id="sukup" name="sukupuoli" value="nainen">Nainen<br>
			<input type="radio" id="sukup" name="sukupuoli" value="muu">Muu<br>
			<br>
			<br>
			<label for="kulkun">Kulkuneuvo</label><br>
			<input type="checkbox" id="kulkun" name="kulkuneuvo1" value="pyora">Minulla on polkupyörä<br>
			<input type="checkbox" id="kulkun" name="kulkuneuvo2" value="pyora">Minulla on auto<br>
			<input type="checkbox" id="kulkun" name="kulkuneuvo3" value="pyora">Minulla on moottoripyörä<br>
			<br>
			<br>
			<label for="txtk">Lisätiedot</label><br>
			<textarea id=txtk name="lisatiedot" rows="8" cols="80"></textarea>
			<br>
			<br>
			<label for="pvm">Päivämäärä</label><br>
			<input type="date" id="pvm" name="pvm" value=""><br>
			<br>
			<label for="syntv">Syntymävuosi</label><br>
			<input type="number" id="syntv" name="syntymavuosi" value="" min=1900>
			<br>
			<br>
			<input type="submit" name="tallenna" value="Tallenna">

		</form>
	</p>
	<?php include "footer.php"; ?>
