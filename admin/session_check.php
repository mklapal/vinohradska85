<?php

session_start();

if((!empty($_SESSION['prihlasen'])) && ($_SESSION['prihlasen']===1)) {
    //echo 'Jste přihlášen.';
} else {
    header("location: index.php?error=error");
}

?>