<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Internetki</title>
	<link rel="stylesheet" type="text/css" href="style.css">
 		
</head>

<body>
	<div id="gora" class="logo">
			<h2>LOGO</h2>
	</div>
	<div class="lewyFloat">
		<div class="srodek noBackground">
			<ul class="noDeco1">
				<li class='lewo'><span><a class="noDeco" href="index.php?subpage=home">Home</a></span></li>
				<li class="lewo"><span><a class="noDeco" href="index.php?subpage=form">Formularz</a></span></li>
			</ul>
		</div>
	</div>
<?php
	$subpage=$_GET['subpage'];
	function doExist(input){
		if(!isset($input)){
			if(!empty($input)){
				return 0;
			}
			return 1;
		}
		return 2;
	}
	switch ($subpage) {
		case 'form':
			foreach ($_POST as $value => $var) {
				$existCode=doExist($var);
				if ($existCode == 1){
					$_POST[$var] = "Empty value";
				}elseif ($existCode == 2) {
					$_POST[$var] = "Value is not initialized";
				}
				switch ($value) {
					case 'name':
						# code...
						break;
					case 'surename':
						# code...
						break;
					case 'mSurename':
						# code...
						break;
					case 'mail':
						# code...
						break;
					case 'postcode':
						# code...
						break;
					default:
						echo "Following variable was not registered, probably should not be used!!!";
						exit(1);
						break;
				}
				$_SESSION[sizeof($_SESSION)] = $_POST;	
				}

			}
			break;
		default:
			include 'home.php';
			break;
	}
?>	
	<div class="lewyFloat">
		<div class="srodek links">
			<ul class="linkPadding">
				<li ><span><a href="https://www.google.pl">www.google.pl</a></span></li>
				<li ><span><a href="https://www.bing.com">www.bing.pl</a></span></li>
			</ul>
		</div>
	</div>
	<div class="clr"></div>
	<div id="stopka" class="logo">
		<h2>Stopka</h2>
	</div>
</body>
</html>

<?php
session_destroy();
?>