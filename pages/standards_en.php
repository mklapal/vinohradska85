<?php 

require("../config.php");
$lang = "en";
$menu = "standards";
require("../pages/template_header_en.php");

?>

        <section class="text">
            
            <div class="wrapper">

                <div class="left-side">

                	<div class="logo-element"></div>
                    <p>
                        During the renovation of the house interior a great care is taken on the details and material used. From ceramics to sanitary facilities, everything is Italian made.
                    </p>
                    <p>
                        The renovation is done to the highest standard with regard to the original architectural details like doors, windows, iron and tile works etc. The goal is to keep the ambiance and feeling of the elegant Art Nouveau style.  High ceilings and large windows let in plenty of natural light which adds to the overall quality of the entire project.
					</p>
                    <div class="logo-element"></div>

                </div>

                <div class="right-side">

                    <div class="header">
                    <h1>Standards</h1>
                    <div class="logo-element"></div>
                    </div>

                    <a href="<?php echo(URL); ?>/content/standards_1.jpg" data-lightbox="image-1">
                    <img src="<?php echo(URL); ?>/content/standards_1.jpg" class="full-size" alt="" />
                    </a>

                    <a class="standards-link" href="<?php echo(URL); ?>/content/standards_1.jpg" data-lightbox="image-2">
                    Italian made ceramics >>>
                	</a>

                    <a href="<?php echo(URL); ?>/content/standards_2.jpg" data-lightbox="image-1">
                    <img src="<?php echo(URL); ?>/content/standards_2.jpg" class="full-size" alt="" />
                    </a>
					
					<a class="standards-link" href="<?php echo(URL); ?>/content/standards_2.jpg" data-lightbox="image-2">
                    Italian made sanitary facilities >>>
                	</a>

                    <a href="<?php echo(URL); ?>/content/standards_3.jpg" data-lightbox="image-1">
                    <img src="<?php echo(URL); ?>/content/standards_3.jpg" class="full-size" alt="" />
                    </a>

                    <a class="standards-link" href="<?php echo(URL); ?>/content/standards_3.jpg" data-lightbox="image-2">
                    Regard to the original architectural details >>>
                	</a>

                </div>

            </div>
        </section>

<?php require("../pages/template_footer_en.php"); ?>