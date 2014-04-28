<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>index mockup</title>
        <link href="<?php echo(URL); ?>/style/css/style.css" rel="stylesheet">
        <!--[if !IE]>-->
        <style type="text/css">
            body {font-size:16px;}
        </style>
        <!--<[endif]-->
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="<?php echo(URL); ?>/scripts/lightbox.min.js"></script>
        <link href="<?php echo(URL); ?>/scripts/css/lightbox.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700&subset=latin,latin-ext,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>

    </head>
    <body>
    	<header>
            <div class="wrapper">
    		<h1 class="header-logo-left"><a href="">Vinohradská85.cz</a></h1>
            <h2 class="header-logo-right"><a href="">... Your place to live</a></h2>
            
            <nav class="main-menu">
                    <ul>
                        <li><a href="<?php echo URL; ?>/" class="<?php if($menu === "index") { echo "selected"; } ?>">home</a></li>
                        <li><a href="<?php echo URL; ?>/location" class="<?php if($menu === "location") { echo "selected"; } ?>">location</a></li>
                        <li><a href="<?php echo URL; ?>/sales" class="<?php if($menu === "sales") { echo "selected"; } ?>">sales</a></li>
                        <li><a href="<?php echo URL; ?>/photos" class="<?php if($menu === "photos") { echo "selected"; } ?>">photos</a></li>
                        <li><a href="<?php echo URL; ?>/standards" class="<?php if($menu === "standards") { echo "selected"; } ?>">standards</a></li>
                        <li><a href="<?php echo URL; ?>/info" class="<?php if($menu === "info") { echo "selected"; } ?>">info</a></li>
                        <li><a href="<?php echo URL; ?>/financing" class="<?php if($menu === "financing") { echo "selected"; } ?>">financing</a></li>
                        <li><a href="<?php echo URL; ?>/contact" class="<?php if($menu === "contact") { echo "selected"; } ?>">contact</a></li>
                    </ul>
            </nav>

            <nav class="lang-menu">
                    <ul>
                        <li><a href="/" class="<?php if($lang === "cz") { echo "selected"; } ?>">cz</a></li>
                        <li><a href="/en" class="<?php if($lang === "en") { echo "selected"; } ?>">en</a></li>
                    </ul>
            </nav>
            
            <div class="hanka-hack-background"></div>

            </div>
    	</header>