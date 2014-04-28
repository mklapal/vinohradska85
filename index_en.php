<?php 

require("config.php");
$lang = "en";
$menu = "index";
require("pages/template_header_en.php");

?>

    	<section class="main js-background">
            <div class="wrapper">
            
                <article class="box1">
                    <div class="logo-element"></div>
                    <h1>Vinohradská 85</h1>
                    <p>
                        The residential project VINOHRADSKA 85 is located in the prestigious, elegant and well-known residential quarter of Vinohrady in the immediate proximity of the City centre. Just 10 minutes walk you have the Wenceslas Square, one of the main city squares with the National Museum and the Prague State Opera, and within a short-range of 200m walking distance you can find a several public parks such as the most pleasant “Riegrovy sady”.
                    </p>
                    <div class="logo-element"></div>
                    
                </article>

                <div class="bcg-buttons">
                    <ul>
                        <li class="js-bcg active">0</li>
                        <li class="js-bcg">1</li>
                        <li class="js-bcg">2</li>
                    </ul>
                </div>

            </div>

        </section>

        <section class="text">
            
            <div class="wrapper">

            <section class="box">
                <div class="header">
                <h2>Modern Apartments</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                In total 21 apartments and 2 commercial spaces have been created due to the fact that the whole building has been carefully refurbished in modern apartments of high standard and different types and sizes. Living spaces are with the south orientation to the park and have a full day-light.
                </p>
                <p class="more">
                    <a href="">see more >>> </a>
                </p>
            </section>

            <section class="box">
                <div class="header">
                <h2>In the Hearth of Prague</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                VINOHRADSKA 85 is an historical building from the late 19th century   with direct and marvellous view from south to the park Svatopluk Čech's, Vinohradská Avenue and Vinohrady Water Tower.
                <img class="img-center" src="<?php echo(URL); ?>/content/mapa.png" alt="map" />
                </p>
                <p class="more">
                    <a href="">see more >>> </a>
                </p>
            </section>
            
            <section class="box">
                <div class="header">
                <h2>The Highest Standard</h2>
                <div class="logo-element"></div>
                </div>

                <p class="box-text">
                The renovation is done to the highest standard with regard to the original architectural details like doors, windows, iron and tile works etc. The goal is to keep the ambiance and feeling of the elegant Art Nouveau style.  High ceilings and large windows let in plenty of natural light which adds to the overall quality of the entire project.
                </p>
                <p class="more">
                    <a href="">see more >>> </a>
                </p>
            </section>

            </div>
    	</section>

<?php require("pages/template_footer_en.php"); ?>