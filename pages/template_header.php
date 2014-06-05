<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <link rel="icon" href="<?php echo(URL); ?>/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo(URL); ?>/favicon.ico" type="image/x-icon">
        <title>Vinohradska85.cz ... Your place to live</title>
        <link href="<?php echo(URL); ?>/style/css/style.css" rel="stylesheet">
        <!--[if !IE]>-->
        <style type="text/css">
            body {font-size:16px;}
        </style>
        <!--<[endif]-->
        <script src="//code.jquery.com/jquery-1.9.1.js"></script>
        <script src="//code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
        <script src="<?php echo(URL); ?>/scripts/lightbox.min.js"></script>
        <script src="<?php echo(URL); ?>/scripts/jquery.smooth-scroll.min.js"></script>
        
        <link href="<?php echo(URL); ?>/scripts/css/lightbox.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic|PT+Sans+Narrow:400,700&subset=latin,latin-ext,cyrillic-ext,cyrillic' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <header class="<?php if(isset($homepage)) { echo "homepage"; } ?>">
            <div class="wrapper">
            <h1 class="header-logo-left"><a href="<?php echo(URL); ?>/<?php echo($lang); ?>">Vinohradská85.cz</a></h1>
            <h2 class="header-logo-right"><a href="<?php echo(URL); ?>/<?php echo($lang); ?>">... Your place to live</a></h2>
            
            <nav class="main-menu">
                    <ul>
                        <li><a href="<?php echo URL; ?>/<?php if($lang === "cs") { echo ""; } ?>" class="<?php if($menu === "index") { echo "selected"; } ?>">úvod</a></li>
                        <li><a href="<?php echo URL; ?>/lokalita" class="<?php if($menu === "location") { echo "selected"; } ?>">lokalita</a></li>
                        <li><a href="<?php echo URL; ?>/prodej" class="<?php if($menu === "sales") { echo "selected"; } ?>">prodej</a></li>
                        <!--
                        <li><a href="<?php echo URL; ?>/photos" class="<?php if($menu === "photos") { echo "selected"; } ?>">photos</a></li>
                        -->
                        <li><a href="<?php echo URL; ?>/standardy" class="<?php if($menu === "standards") { echo "selected"; } ?>">standardy</a></li>
                        <li><a href="<?php echo URL; ?>/informace" class="<?php if($menu === "info") { echo "selected"; } ?>">informace</a></li>
                        <li><a href="<?php echo URL; ?>/financovani" class="<?php if($menu === "financing") { echo "selected"; } ?>">financování</a></li>
                        <li><a href="<?php echo URL; ?>/kontakt" class="<?php if($menu === "contact") { echo "selected"; } ?>">kontakt</a></li>
                    </ul>
            </nav>

            <nav class="lang-menu">
                    <ul>
                        <li><a href="<?php echo URL; ?>/" class="<?php if($lang === "cs") { echo "selected"; } ?>">cz</a></li>
                        <li><a href="<?php echo URL; ?>/en" class="<?php if($lang === "en") { echo "selected"; } ?>">en</a></li>
                    </ul>
            </nav>
            
            <div class="hanka-hack-background"></div>

            </div>
        </header>