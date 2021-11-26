<?php
    $title = 'Da Vincijev kod';
    $link  = 'https://hr.wikipedia.org/wiki/Da_Vincijev_kod';
    print '
    <!DOCTYPE HTML>
    <html lang="hr">
        <head>
            <title>2 zadatak</title>
		    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
		    <meta name="description" content=" Rjesenje drugog zadatka">
		    <meta name="keywords" content="Da Vincijev Kod, Dana Brown, triler">
		    <meta name="author" content="Damir Eri">
		    <meta name="viewport" content="width=device-width, initial-scale=1">
		    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
        </head>
    <body>
        <h1>' . $title . '</h1>
        <p>Da Vincijev kod (eng: The Da Vinci Code) je kriminalistički triler američkog pisca Dana Browna objavljen 2003. godine.<br>
        <p>Roman je kombinacija zabavnog romana s raznim elementima teorija zavjere.<br>
        <a href="' . $link .'" target="_blank">' . $link . '</a></p>
    </body>
    </html>';
?>