<?php 

require("../config.php");
$lang = "en";
$menu = "location";
require("../pages/template_header_en.php");

?>

        <section class="text">
            
            <div class="wrapper">

                <div class="left-side">

                    <ul>
                        <li><a href="#position" class="js-btn-position selected">Position</a></li>
                        <li><a href="#transport" class="js-btn-position">Transport</a></li>
                        <li><a href="#services" class="js-btn-position">Services</a></li>
                        <li><a href="#landmarks" class="js-btn-position">Landmarks</a></li>
                    </ul>

                    <p class="address">
                    <a href="https://goo.gl/maps/Vk9Yz" target="_blank"><img class="img-left" src="<?php echo(URL); ?>/content/mapa.png" alt="map" /></a>
                    <br>
                    <a href="https://goo.gl/maps/Vk9Yz" target="_blank">
                        >>> see google maps
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
                    <h1>Position</h1>
                    <div class="logo-element"></div>
                    </div>

                    <p>
                    The residential project VINOHRADSKÁ 85 is located on the main east-west avenue of Vinohrady, <strong>Vinohradská Avenue</strong>, leading from Wenceslas Square to Žižkov and Strašnice,  in one of Prague’s most reputed residential and high-living areas in the city call <strong>Vinohrady</strong>. The residence VINOHRADSKÁ 85 is facing directly to the nice and pleasant park Svatopluka Čecha and is really close to the main green space in the area, “Riegrovy sady”.
                    </p>
                    <p>
                    The square of “Jiřího z Poděbrad” with the modern and interesting church by Jože Plečnik built in 1932 is just 200 meters far, as well as “náměstí Míru”, the main square of Prague 2, with the Vinohrady Theatre and Gothic  Revival Saint Ludmila Church.
                    </p>
                    <p>
                    The present-day district was originally part of the sparsely populated countryside outside the Prague. Change came through the decision of Emperor Charles IV in 1358 to establish vineyards around the city. Nowadays the high-quality housing, accessibility to the city centre, attractive parks, a good selection of restaurants, and good facilities make Vinohrady consistently popular among foreign and domestic residents.
                    </p>

                    <a href="<?php echo(URL); ?>/content/location_img_position.jpg" data-lightbox="image-1">
                    <img src="<?php echo(URL); ?>/content/location_img_position.jpg" class="full-size" alt="position map" />
                    </a>

                </section>
                <section class="js-transport js-section">
                    <div class="header">
                    <h1>Transport</h1>
                    <div class="logo-element"></div>
                    </div>

                    <p>
                    In terms of public transport, trams and Metro are the most convenient means of reaching the district. Currently, tram numbers 11, 10 and 16 go through the area. The number 11, a key route in the quarter, runs very frequently and is connecting the area with historical centre directly within few minutes. Metro - line A runs along the southern edge of Prague, and just 100 meters from VINOHRADSKÁ 85 is located the metro station “Jířího z Poděbrad”.
                    </p>

                    <a href="<?php echo(URL); ?>/content/location_img_transport.jpg" data-lightbox="image-2">
                    <img src="<?php echo(URL); ?>/content/location_img_transport.jpg" class="full-size" alt="trasport map" />
                    </a>

                </section>
                <section class="js-services js-section">
                    <div class="header">
                    <h1>Services</h1>
                    <div class="logo-element"></div>
                    </div>

                    <p>
                    The popularity of Prague 2 – Vinohrady district as a prestigious residential area is not based only on the beauty of the buildings facades and the great atmosphere of the streets, but also for its ranking among the top in Prague in the area of gastronomic services in terms of quality and quantity. Vinohrady district is full with a good selection of Czech and international cuisines, such as traditional Czech pubs and restaurants with more cosmopolitan meals.
                    </p>
                    <p>
                    Vinohrady is good for traditional, locally-owned shops. However, the shopping malls are in Vinohrady too, like Atrium Flora located on metro line A  - station “Flora”. Nearby,  you can also find newly renovated “Vinohradský pavilon “,  where was established an exhibition and sales centre of luxury interior design on an area of more than two and half thousand square meters. In the ground floor of this listed building is situated Gallery of Pavilion, which is used for exhibitions of paintings and works of art.
                    </p>
                    <p>
                    At a more informal level, both “náměstí Míru” and “náměstí Jířího z Poděbrad” host a range of seasonal events, such as Christmas markets and Food markets, this took a place twice a week starting from spring time.
                    </p>
                    <p>
                    One of Prague‘s main hospitals, Vinohradská nemocnice, is located on the eastern edge of Vinohrady, close to Želivského metro station. 
                    </p>

                    <a href="<?php echo(URL); ?>/content/location_img_services.jpg" data-lightbox="image-3">
                    <img src="<?php echo(URL); ?>/content/location_img_services.jpg" class="full-size" alt="services map" />
                    </a>

                </section>
                <section class="js-landmarks js-section">
                    <div class="header">
                    <h1>Landmarks</h1>
                    <div class="logo-element"></div>
                    </div>

                    <p>
                    Important sights to visit: The Žižkov television tower and the main green space in the area, “Riegrovy sady”, well known thanks to the Park Café, comprising a beer garden and indoor restaurant and it is also a favoured spot for joggers and families among others. The main squares of Vinohrady - “náměsti Míru” with the Vinohrady Theatre, Gothic  Revival Saint Ludmila Church from 1892, the National House and the Prague 2 town hall, “náměstí Jiřího z Poděbrad”
                    </p>

                    <a href="<?php echo(URL); ?>/content/location_img_landmarks.jpg" data-lightbox="image-4">
                    <img src="<?php echo(URL); ?>/content/location_img_landmarks.jpg" class="full-size" alt="landmarks map" />
                    </a>

                </section>

                </div>

            </div>
        </section>

<?php require("../pages/template_footer_en.php"); ?>