<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
?>

<!DOCTYPE HTML>
<html>
	<head>
        <title>5 zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content=" Rjesenje petog zadatka">
		<meta name="keywords" content="Pogodi broj, broj, probaj ponovo">
		<meta name="author" content="Damir Eri">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
       	
	</head>
	<body style="margin: 20px;">

       <?php
		$random = rand(1,9);
       //$num = $_POST ['num'];
		print '
		<h1 style="margin: 20px;px;font: size 18px;px;">Igra (POGODI BROJ)</h1>
		<form action="" method="post" id="pogodi broj">		    
		    <label>UPIŠI JEDAN BROJ OD 1 DO 9*</label>
		    <input type="number" name="num" id="num" required="required" value="'. $num . '" autofocus>
		    
		</form>';
		    if (isset($_POST['num'])) {
				if ($_POST['num'] == $random) {
					print '<p style="background-color: LightBlue; width: fit-content">Pogodak, probaj ponovo!</p>';			    
			}
			else if($_POST['num'] != $random) {
			    print '<p style="background-color: Red; width: fit-content">Krivo, probaj ponovo!</p>';
			}
			print '<p style="margin-top:10px;">Zamišljeni broj je '.$random.'</p>';
		    }
    	?>
    </body>
</html>