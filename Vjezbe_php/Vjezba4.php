<?php
    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(E_ALL);
?>
<!DOCTYPE HTML>
<html>
	<head>
        <title>4 zadatak</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta name="description" content=" Rjesenje cetvrtog zadatka">
		<meta name="keywords" content="Da Vincijev Kod, Dana Brown, triler">
		<meta name="author" content="Damir Eri">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	</head>
<body>
	<form action="Vjezba4.php" method="post">
		<p><label for="a">VRIJEDNOST a:</label><input type="number" name="a"></p>
		<p><label for="b">VRIJEDNOST b:</label><input type="number" name="b"></p>
		<p><input type="submit" value="POSALJI"></p>
	</form>
	<?php
		$_a=$_POST['a'];
		$_b=$_POST['b'];
		$c=(3*$_a-$_b)/2;
		print '
		<p>a ='.$_a .'</p>
		<p>b ='.$_b .'</p>
		<p>c =(3*'.$_a.'-'.$_b.')/2 = '.$c .'</p>'
			
	?>
</body>
</html>