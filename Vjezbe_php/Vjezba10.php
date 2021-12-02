<!DOCTYPE HTML>
<html>
	<head>
        <title>10 zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content=" Rjesenje desetog zadatka">
		<meta name="keywords" content="zadatak, ispis, riječi, rečenice">
		<meta name="author" content="Damir Eri">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
	<body>
		<h1>ISPIS BROJA RIJEČI U REČENICI</h1>
		<form action="" method="post">
			<label for="ulaz">ULAZNI NIZ: </label>
            <br>
			<input type="text" name="ulaz" size="100" value="">
            <br><br>
			<input type="submit" name="submit" value="ISPIŠI BROJ RIJEČI">
            <br><br>
		</form>
		<?php
        //Drugi nacin je---> if ($SERVER[REQUEST_METHOD"] == "POST")
			if(isset($_POST['submit']))
			{ 	$unos =$_POST['ulaz'];
				/* $broj_rijeci = str_word_count($unos);
				echo "Ulazni niz: ". $unos . ". sadrži ". $broj_rijeci ." riječi.";
			    return 0; */
			 
			 $unos = trim($unos);
			 
			 if(empty($unos)) { $broj_rijeci = 0; } else { $broj_rijeci = substr_count($unos, ' ') + 1; }
		
				switch($broj_rijeci) {
					case 0 :
					echo 'Nema upisa!';
					break;
					case 1 :
					echo "Ulazni niz: ". $unos . ". sadrži ". $broj_rijeci ." riječ.";
					break;
					case $broj_rijeci > 1 :
					echo "Ulazni niz: ". $unos . ". sadrži ". $broj_rijeci ." riječi.";
					break;
				}
			 
			}
		?>
	</body>
</html>
