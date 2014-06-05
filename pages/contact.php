<?php 

require("../config.php");
$lang = "cs";
$menu = "contact";
require("../pages/template_header.php");

?>

        <section class="text">
            
            <div class="wrapper">

            	<div class="left-side">
                </div>

                <div class="right-side">

                	<div class="header">
                    <h1>Kontakt</h1>
                    <div class="logo-element"></div>
                	</div>

                	<div class="contact-wrapper">
                    <div class="contact-box">

					<h2>Výhradní prodejce</h2>

					<a href="http://www.nopalreality.cz" target="_blank">
					<img src="<?php echo URL; ?>/images/nopal_logo.png" alt="NOPAL logo">
					</a>

					<p>
					Dienzenhoferovy sady 2<br>
					150 00 Praha 5<br>
					</p>
					<p>
					T: +420 257 317 898<br>
					E: <a href="mailto:info@nopalreality.cz">info@nopalreality.cz</a><br>
					W: <a href="http://www.nopalreality.cz" target="_blank">www.nopalreality.cz</a><br>
					</p>

					<h2>Makléři</h2>

					<p>
					Petr Moťka<br>
					T: +420 606 692 812<br>
					E: <a href="mailto:petr.motka@nopalreality.cz">petr.motka@nopalreality.cz</a><br>
					</p>
					
					<p>
					Jana Sestini<br>
					T: +420 721 800 413<br>
					E: <a href="mailto:jana.sestini@nopalreality.cz">jana.sestini@nopalreality.cz</a><br>
					</p>

					</div>
                    <div class="contact-box">

					<h2>Služby architekta</h2>

					<a href="http://www.nopalreality.cz" target="_blank">
					<img src="<?php echo URL; ?>/images/nopal_logo.png" alt="NOPAL logo">
					</a>

					<p>
					Dienzenhoferovy sady 2<br>
					150 00 Praha 5<br>
					</p>
					<p>
					T: +420 257 317 898<br>
					E: <a href="mailto:info@nopalreality.cz">info@nopalreality.cz</a><br>
					W: <a href="http://www.nopalreality.cz" target="_blank">www.nopalreality.cz</a><br>
					</p>

					</div>
					</div>


				<?php require("template_form.php"); ?>

                </div>

            </div>
        </section>

<?php require("../pages/template_footer.php"); ?>