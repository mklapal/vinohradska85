<?php
require("session_check.php");
?>

<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>index mockup</title>
        <link href="../style/css/style.css" rel="stylesheet">
        <!--[if !IE]>-->
        <style type="text/css">
            body {font-size:16px;}
        </style>
        <!--<[endif]-->
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400italic,700italic' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700' rel='stylesheet' type='text/css'>

    </head>
    <body>
    	<header>
            <div class="wrapper js-top-anchor">
    		<h1 class="header-logo-left"><a href="">Vinohradská85.cz</a></h1>
            <h2 class="header-logo-right"><a href="">... Your place to live</a></h2>
            
            </div>
    	</header>

        <section class="admin-text">
            <div class="wrapper">
            
            <h1>Uprava statusů a cen bytů</h1>

<?php
if (isset($_GET['info']) && $_GET["info"] === "updated"){
    echo '<p class="info">Data byla aktualizována</p>';
}
?>

<form action="sales_update.php" method="POST">
<?php

$file = 'sales.xml';

$xml = simplexml_load_file($file);

foreach ($xml as $iter) {
    
   //print_r($iter);
 
   echo ('
   <table border="0">
   <tr>
   <td>Číslo bytu</td>
   <td>Status CZ</td>
   <td>Status EN</td>
   <td>Cena CZ</td>
   <td>Cena EN</td>
   <td>Style</td>
   <td>Popisek CZ</td>
   <td>Popisek EN</td>
   </tr>
   <tr>
   <td class="flat-no">'.$iter["number"].'</td>
   <td><input name="status['.$iter["number"].'][cs]" value="'.$iter->status[0].'"></td>
   <td><input name="status['.$iter["number"].'][en]" value="'.$iter->status[1].'"></td>
   <td><input name="price['.$iter["number"].'][cs]" value="'.$iter->price[0].'"></td>
   <td><input name="price['.$iter["number"].'][en]" value="'.$iter->price[1].'"></td>
   <td><input name="style['.$iter["number"].']" value="'.$iter->style.'"></td>
   <td><input name="description['.$iter["number"].'][cs]" value="'.$iter->description[0].'"></td>
   <td><input name="description['.$iter["number"].'][en]" value="'.$iter->description[1].'"></td>
   </tr>
   </table>
   ');
   
   echo "<hr>";
}



?>

<input value="aktualizovat" type="submit" />

</form>

<?php
if (isset($_GET['info']) && $_GET["info"] === "updated"){
    echo '<p class="info">Data byla aktualizována</p>';
}
?>


<a href="login.php?logout=true">Odhlásit se z administrace</a>


            </div>
    	</section>

    	<footer>
            <div class="wrapper">

            </div>
    	</footer>

    </body>
</html>