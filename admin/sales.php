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

if (file_exists('flats.json'))
  {
  $data = json_decode(file_get_contents('flats.json'), true);
}  else {
  $data = null;
}

foreach ($data['flats'] as $item) {
    
   //print_r($iter);
 
   echo ('
   <table border="0">
   <tr>
   <td>Číslo bytu</td>
   <td>Status CZ</td>
   <td>Status EN</td>
   <td>Cena CZ</td>
   <td>Cena EN</td>
   <td>Popisek CZ</td>
   <td>Popisek EN</td>
   </tr>
   <tr>
   <td class="flat-no">'.$item["number"].'</td>
   <td><input name="'.$item["number"].'/status_cs" value="'.$item['status_cs'].'"></td>
   <td><input name="'.$item["number"].'/status_en" value="'.$item['status_en'].'"></td>
   <td><input name="'.$item["number"].'/price_cs" value="'.$item['price_cs'].'"></td>
   <td><input name="'.$item["number"].'/price_en" value="'.$item['price_en'].'"></td>
   <td><input name="'.$item["number"].'/note_cs" value="'.$item['note_cs'].'"></td>
   <td><input name="'.$item["number"].'/note_en" value="'.$item['note_en'].'"></td>
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