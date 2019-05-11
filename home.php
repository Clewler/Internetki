<div class="float padding">
		<div class="srodek">
			<form action="index.php?subpage=form" method="POST">
				<div class="row">
					<div class="column">Imie:</div>
					<div class="column"><input type="text" name="name"></div>
				</div>
				<div class="row">
					<div class="column">Nazwisko:</div>
					<div class="column"><input type="text" name="surename"></div>
				</div>
				<div class="row">
					<div class="column">Plec:</div>
					<div class="column"><input type="radio" name="gender" value="male" checked class="floatless"> Male <br>
  						<input type="radio" name="gender" value="female" class="floatless">Female</div>
				</div>
				<div class="row">
					<div class="column">Nazwisko Panienskie:</div>
					<div class="column"><input type="text" name="mSurename"></div>
				</div>
				<div class="row">
					<div class="column">Email:</div>
					<div class="column"><input type="text" name="mail"></div>
				</div>
				<div class="row">
					<div class="column">Kod Pocztowy:</div>
					<div class="column"><input type="text" name="postcode"></div>
				</div>
				<span id="sendButton"><input type="submit" name="Send"></input></span>
			</form>
		</div>
	</div>