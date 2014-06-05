<?php 

require("../config.php");
$lang = "cs";
$menu = "sales";
require("../pages/template_header.php");

?>

        <section class="text sales">
            
            <div class="wrapper">

                <div class="left-side">

                    <div class="logo-element"></div>
                    <p>
                        Kompletně zrekonstruovaný dům, podle moderních parametrů na bydlení, má k dispozici 21 bytů a 2 nebytové prostory různých velikostí. Obývací prostory jsou s orientací na jih s volným výhledem do parku. 
                    </p>
                    <p>
                        Ke každé bytové jednotce je možné pořídit nově vybudovaný sklep v suterénu domu. K domu také patří příjemná a klidná zahrada ve dvoře, která je ideální pro chvíle odpočinku.
                    </p>
                    <p>
                        Projekt je v současné době ve výstavbě, předpokládaný termín kolaudace 12/2014.
                    </p>
                    <div class="logo-element"></div>

                </div>

                <div class="right-side">

                    <div class="header">
                    <h1>Prodej</h1>
                    <div class="logo-element"></div>
                    </div>

                    <table class="sales-table">
                    <tr>
                        <td class="number">Č.</td>
                        <td class="floor">Podlaží</td>
                        <td class="Disposition">Dispozice</td>
                        <td class="area">Plocha</td>
                        <!-- <td class="note">Pozn.</td> -->
                        <td class="status">Stav</td>
                        <td class="price">Cena</td>
                        <td class="docs">Dokumentace</td>
                    </tr>

<?php

if (file_exists('../admin/flats.json'))
  {
  $data = json_decode(file_get_contents('../admin/flats.json'), true);
}  else {
  $data = null;
}

//print_r($data);

foreach ($data["flats"] as $key) {

    echo ('
    <tr>
        <td class="left">
        <a class="js-onpage" href="#'.$key['number'].'">
            '.$key['number'].'
        </a>
        </td>
        <td class="left">'.$key['floor_cs'].'</td>
        <td class="left">'.$key['disposition'].'</td>
        <td class="right">'.$key['area'].' m&sup2;</td>
        <!-- <td class="left">'.$key['note_cs'].'</td> -->
        <td class="left">'.$key['status_cs'].'</td>
        <td class="right">'.$key['price_cs'].'</td>
        <td class="center">
            <a href="'.URL.'/content/'.$key['number'].'_cz.pdf" target="_blank">
                <img class="pdf-icon" src="'.URL.'/images/pdf-icon.png" alt="stáhni" />
            </a>
        </td>
    </tr>
    ');
}

?>

                    <tr>
                        <td class="left">sklepy</td>
                        <td class="left">-1.</td>
                        <td class="left">sklepní kóje</td>
                        <td class="right">-</td>
                        <!-- <td class="left">'.$key['note_cs'].'</td> -->
                        <td class="left">k prodeji</td>
                        <td class="right">-</td>
                        <td class="center">
                            <a href="<?php echo URL ?>/content/cellar_cz.pdf" target="_blank">
                                <img class="pdf-icon" src="<?php echo URL ?>/images/pdf-icon.png" alt="download" />
                            </a>
                        </td>
                    </tr>


                    </table>

<?php

//print_r($data);

foreach ($data["flats"] as $key) {

    echo ('
    <div class="flat" id="'.$key['number'].'">

        <div class="image">
            <a href="'.URL.'/content/sales_flat_'.$key['number'].'.png" data-lightbox="image-1">
                <img src="'.URL.'/content/sales_flat_'.$key['number'].'.png" alt="">
            </a>
        </div>
        <div class="data">
            <h1>Byt '.$key['number'].'</h1>
            <table>
            <tr>
                <td>Podlaží:</td>
                <td>'.$key['floor_cs'].'</td>
            </tr>
            <tr>
                <td>Plocha:</td>
                <td>'.$key['area'].' m&sup2;</td>
            </tr>
            <tr>
                <td>Dispozice:</td>
                <td>'.$key['disposition'].'</td>
            </tr>
            <!--
            <tr>
                <td>Poznámka:</td>
                <td>'.$key['note_cs'].'</td>
            </tr>
            -->
            <tr>
                <td>&nbsp;</td>
                <td></td>
            </tr>
            <tr>
                <td>Stav:</td>
                <td>'.$key['status_cs'].'</td>
            </tr>
            <tr>
                <td>Cena:</td>
                <td>'.$key['price_cs'].'</td>
            </tr>
            <tr>
                <td colspan="2" class="download">
                    <a href="'.URL.'/content/'.$key['number'].'_cz.pdf" target="_blank">
                    <img class="pdf-icon" src="'.URL.'/images/pdf-icon.png" alt="download" /> dokumentace >>>
                    </a>
                </td>
            </tr>
            </table>

        </div>

    </div>
    ');
}

    echo ('
    <div class="flat" id="">

        <div class="image">
            <a href="'.URL.'/content/sales_basement.png" data-lightbox="image-1">
                <img src="'.URL.'/content/sales_basement.png" alt="">
            </a>
        </div>
        <div class="data">
            <h1>Sklepy</h1>
            <table>
            <tr>
                <td>Podlaží:</td>
                <td>-1.</td>
            </tr>
            <tr>
                <td>Plocha:</td>
                <td>-</td>
            </tr>
            <tr>
                <td>Dispozice:</td>
                <td>sklepní kóje</td>
            </tr>
            <!--
            <tr>
                <td>Poznámka:</td>
                <td></td>
            </tr>
            -->
            <tr>
                <td>&nbsp;</td>
                <td></td>
            </tr>
            <tr>
                <td>Stav:</td>
                <td>K prodeji</td>
            </tr>
            <tr>
                <td>Cena:</td>
                <td>-</td>
            </tr>
            <tr>
                <td colspan="2" class="download">
                    <a href="'.URL.'/content/cellar_cz.pdf" target="_blank">
                    <img class="pdf-icon" src="'.URL.'/images/pdf-icon.png" alt="download" /> dokumentace >>>
                    </a>
                </td>
            </tr>
            </table>

        </div>

    </div>
    ');

?>

                </div>

            </div>
        </section>

<?php require("../pages/template_footer.php"); ?>