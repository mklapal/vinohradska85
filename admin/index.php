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
            

            <div class="login-box">
                <p>Přihlášení do administrace</p>
                <form action="login.php" method="POST">
                    <input name="username" placeholder="username">
                    <input name="password" placeholder="password" type="password">
                    <input type="submit" value="login">
                </form>
                <p>
                <?php
                    if(!empty( $_GET['error'])){
                        echo ("špatně zadané přihlašovací údaje!");
                    }
                ?>
                </p>
            </div>

            </div>
    	</section>

    	<footer>
            <div class="wrapper">

            </div>
    	</footer>

    </body>
</html>