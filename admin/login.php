<?php
session_start();

if( !empty($_POST['username']) && !empty($_POST['password'])) {
	if(($_POST['username']==='jmeno') && ($_POST['password']==='heslo')) {

		//souhlasí, nastavíme session, může jich být více a můžeš v nich přenášet třeba jméno přihlášeného...
		$_SESSION['prihlasen']=1;
		//a znovunačteme stránku (předpokládám že je to index v kořeni webu
		header("location: sales.php");
	} else {
		header("location: index.php?error=error");
	}
} elseif (!empty($_POST)) {
	header("location: index.php?error=error");
}

if(isset($_GET['logout']))
{
    session_destroy();
    header("location: index.php");
}

?>