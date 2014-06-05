<?php 

require("../config.php");
$lang = "cs";
$menu = "location";
require("../pages/template_header.php");

?>

        <section class="text">
            
            <div class="wrapper">

                <div class="left-side">

                    <ul>
                        <li><a href="#position" class="js-btn-position selected">Pozice</a></li>
                        <li><a href="#transport" class="js-btn-position">Doprava</a></li>
                        <li><a href="#services" class="js-btn-position">Služby</a></li>
                        <li><a href="#landmarks" class="js-btn-position">Památky</a></li>
                    </ul>

                    <p class="address">
                    <a href="https://goo.gl/maps/Vk9Yz" target="_blank"><img class="img-left" src="<?php echo(URL); ?>/content/mapa.png" alt="map" /></a>
                    <br>
                    <a href="https://goo.gl/maps/Vk9Yz" target="_blank">
                        >>> prohlédnout na Google Mapy
                    </a>
                    <br>
                    <br>
                    Vinohradská 1193/85<br>
                    Praha 2 - Vinohrady<br>
                    Czech Republic<br>
                    </p>

                </div>

                <div class="right-side">

                <section class="js-position js-section">
                    <div class="header">
                    <h1>Pozice</h1>
                    <div class="logo-element"></div>
                    </div>

                    <p>
                    Rezidenční projekt VINOHRADSKÁ 85 se nachází v rezidenční čtvrti Vinohrady. Krátkou chůzi můžete dojít k hlavním historickým památkám Prahy či navštívit některý z parků, které jsou v okolí. Dům má krásný výhled na sady Svatopluka Čecha.
                	</p>
                    <p>
                    Náměstí "Jiřího z Poděbrad", s moderním a zajímavým kostelem Jože Plečnika z roku 1932 je jen 200 metrů daleko, stejně tak i hlavní náměstí Prahy 2 - "náměstí Míru" s Divadlem na Vinohradech a kostelem sv. Ludmily.
                	</p>
                    <p>
                    Dnešní čtvrť byla původně součástí řídce osídlené krajiny mimo Prahu. Změna přišla až s rozhodnutím císaře Karla IV v roce 1358 zřídit vinice kolem města. V současné době Vinohrady patří mezi nejoblíbenější lokality, poskytující velmi kvalitní bydlení, atraktivní parky a veškerou občanskou vybavenost na dosah ruky.
                	</p>

                    <a href="<?php echo(URL); ?>/content/location_img_position.jpg" data-lightbox="image-1">
                    <img src="<?php echo(URL); ?>/content/location_img_position.jpg" class="full-size" alt="position map" />
                    </a>

                </section>
                <section class="js-transport js-section">
                    <div class="header">
                    <h1>Doprava</h1>
                    <div class="logo-element"></div>
                    </div>

                    <p>
                    Pokud jde o veřejnou dopravu, tak pouhých100 metrů je vzdálenost stanice metra A "Jiřího z Poděbrad" a v bezprostřední blízkosti rezidence se nacházejí tramvajové zastávky, Vinohradskou třídou vede tramvajová linka 11 směrem k Václavskému náměstí. 
                	</p>

                    <a href="<?php echo(URL); ?>/content/location_img_transport.jpg" data-lightbox="image-2">
                    <img src="<?php echo(URL); ?>/content/location_img_transport.jpg" class="full-size" alt="trasport map" />
                    </a>

                </section>
                <section class="js-services js-section">
                    <div class="header">
                    <h1>Služby</h1>
                    <div class="logo-element"></div>
                    </div>

                    <p>
                    Popularita Vinohrad, jako prestižní vilové čtvrti, není založena jen na kráse budov fasád se skvělou atmosférou ulic, ale také pro přední pořadí v Praze v oblasti gastronomických služeb ve smyslu kvality a kvantity. Vinohrady - čtvrť s velkým výběrem české a mezinárodní kuchyně, tradičních českých hospod a restaurací.
                	</p>
                    <p>
                    Nedaleko rezidence se nachází zrenovovaný Vinohradský pavilon, kde vznikla výstava a prodejní centrum luxusního interiéru na ploše více než dva a půl tisíce metrů čtverečních. V přízemí této památkově chráněné budovy se nachází galerie pavilonu pro výstavy obrazů a uměleckých děl.
                	</p>
                    <p>
                    Nejznámějším vinohradským nákupním centrem je "Atrium Flora", nacházející se na stejnojmenné stanici metra.
                	</p>
                    <p>
                    Jak "náměstí Míru" tak i "náměstí Jiřího z Poděbrad" hostí řadu sezónních akcí, jako jsou například farmářské trhy, které se konají pravidelně dvakrát týdně, počínaje jarním obdobím.
					</p>
					<p>
					Jedna z hlavních pražských nemocnic – "Vinohradská nemocnice" se nachází na východním okraji Vinohrad, v těsné blízkosti stanice metra Želivského.
					</p>

                    <a href="<?php echo(URL); ?>/content/location_img_services.jpg" data-lightbox="image-3">
                    <img src="<?php echo(URL); ?>/content/location_img_services.jpg" class="full-size" alt="services map" />
                    </a>

                </section>
                <section class="js-landmarks js-section">
                    <div class="header">
                    <h1>Památky</h1>
                    <div class="logo-element"></div>
                    </div>

                    <p>
                    Mezi zajímavé památky a místa bezesporu patří Žižkovská televizní věž a hlavní zeleně v této oblasti, "Riegrovy sady" - dobře známé díky Park Café a pivní zahradě s venkovní restaurací, jako oblíbeným místem pro běžce a rodiny. Hlavní náměstí na Vinohradech - "Náměstí Míru" s Divadlem na Vinohradech, kostel sv. Ludmily z roku 1892, Národní dům a radnice Praha 2, "náměstí Jiřího z Poděbrad".
                	</p>

                    <a href="<?php echo(URL); ?>/content/location_img_landmarks.jpg" data-lightbox="image-4">
                    <img src="<?php echo(URL); ?>/content/location_img_landmarks.jpg" class="full-size" alt="landmarks map" />
                    </a>

                </section>

                </div>

            </div>
        </section>

<?php require("../pages/template_footer.php"); ?>