<?php 

require("config.php");
$lang = "cs";
$menu = "index";
$homepage = true;
require("pages/template_header.php");

?>

    	<section class="main js-background">
            <div class="wrapper">
            
                <article class="box1">
                    <div class="logo-element"></div>
                    <h1>Vinohradská 85</h1>
                    <p>
                        Rezidenční projekt Vinohradská 85 je situován v prestižní, elegantní a velmi žádané rezidenční čtvrti Vinohrady v bezprostřední blízkosti centra města - Václavské náměstí,  Národní muzeum a Státní opera Praha a v bezprostřední blízkosti se nacházejí oblíbené "Riegrovy sady".
                    </p>
                    <div class="logo-element"></div>
                    
                </article>

                <div class="bcg-buttons">
                    <ul>
                        <li class="js-bcg active">0</li>
                        <li class="js-bcg">1</li>
                        <li class="js-bcg">2</li>
                        <li class="js-bcg">3</li>
                    </ul>
                </div>

            </div>

        </section>

        <section class="text">
            
            <div class="wrapper">

            <section class="box">
                <div class="header">
                <h2>Moderní byty</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                Kompletně zrekonstruovaný dům, podle moderních parametrů na bydlení, má k dispozici 21 bytů a 2 nebytové prostory různých velikostí. Obývací prostory jsou s orientací na jih s volným výhledem do parku.</p>
                <p class="more">
                    <a href="<?php echo URL; ?>/prodej">více >>> </a>
                </p>
            </section>

            <section class="box">
                <div class="header">
                <h2>V srdci Prahy</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                Vinohradská 85 - historická budova z konce 19. století s přímým a nádherným výhledem z jihu na sady Svatopluka Čecha, Vinohradskou třídu a Vinohradskou vodárnu.
                <img class="img-center" src="<?php echo(URL); ?>/content/mapa.png" alt="map" />
                </p>
                <p class="more">
                    <a href="<?php echo URL; ?>/lokalita">více >>> </a>
                </p>
            </section>
            
            <section class="box">
                <div class="header">
                <h2>Nejvyšší standard</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                Rekonstrukce vysokého standardu byla provedena s nejvyšší citlivostí k původním architektonickým prvkům, jako jsou dveře, okna, podlahy, kování, dekorace atd. Cílem bylo zachovat atmosféru secesní doby. Vysoké stropy a velká okna dodávají bytům světlo a prostor, což významně přispívá ke kvalitě bytového projektu.
            	</p>
                <p class="more">
                    <a href="<?php echo URL; ?>/standardy">více >>> </a>
                </p>
            </section>

            </div>
    	</section>

<?php require("pages/template_footer.php"); ?>