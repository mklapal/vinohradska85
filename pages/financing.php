<?php 

require("../config.php");
$lang = "cs";
$menu = "financing";
require("../pages/template_header.php");

?>

        <section class="text">
            
            <div class="wrapper">

                <div class="left-side">

                </div>

                <div class="right-side">

                    <div class="header">
                    <h1>Financování</h1>
                    <div class="logo-element"></div>
                    </div>

                    <h2>
	                	ÚSTNÍ REZERVARCE (NEZÁVAZNÁ REZERVACE)
	                </h2>
                	<p>
						Ústní rezervace je nezávazné vyjádření předběžného zájmu o koupi nemovitosti na základě které Vám realitní makléř rezervuje po dobu tří dnů požadovanou nemovitost. Po uplynutí této lhůty, musí být tato rezervace buď potvrzena podpisem Rezervační smlouvy, nebo zaniká, a o koupi dané nemovitosti se může ucházet další zájemce.
					</p>
					
					<h2>
						REZERVAČNÍ SMLOUVA (ZÁVAZNÁ REZERVACE)
					</h2>
					<p>
						Závaznou rezervací se rozumí podpis Rezervační smlouvy, jejímž podpisem se Prodávající zavazuje nenabízet danou nemovitost dalším zájemcům. Rezervační smlouva zavazuje Kupujícího k úhradě rezervačního poplatku ve výši 200.000 CZK do 5 (pěti) pracovních dnů od jejího podpisu a obě smluvní strany k podepsání Smlouvy o budoucí smlouvě o převodu vlastnictví jednotky. V případě podpisu Kupní smlouvy je tato rezervační záloha započtena do kupní ceny.
					</p>
					
					<h2>
						SMLOUVA O BUDOUCÍ SMLOUVĚ O PŘEVODU VLASTNICTVÍ JEDNOTKY (BUDOUCÍ KUPNÍ SMLOUVA)
					</h2>
					<p>
						Po kolaudaci jednotek bude podepsána Budoucí Kupní smlouva Při podpisu této smlouvy musí být již Kupujícím předložen způsob financování nemovitosti a zaplacena další splátka ve výši 15 % z kupní ceny.  Zbývající část Kupní ceny je Kupujícím hrazena na Vázaný jistotní účet. Smlouva o Vázaném jistotním účtu se podepisuje společně s Budoucí kupní smlouvou a slouží jako úschova kupní ceny.
					</p>

					<h2>
						SMLOUVA O PŘEVODU VLASTNICTVÍ JEDNOTKY (KUPNÍ SMLOUVA)
					</h2>
					<p>
						Do 30 kalendářních dnů po podpisu Budoucí kupní smlouvy je podepsána Kupní smlouva. Před podpisem Kupní smlouvy je klient povinen uhradit zbývající část kupní ceny předmětných nemovitostí na Vázaný jistotní účet.
					</p>


				<?php require("template_form.php"); ?>

                </div>

            </div>
        </section>

<?php require("../pages/template_footer.php"); ?>