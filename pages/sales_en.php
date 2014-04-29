<?php 

require("../config.php");
$lang = "en";
$menu = "sales";
require("../pages/template_header_en.php");

?>

        <section class="text sales">
            
            <div class="wrapper">

                <div class="left-side">

                    <div class="logo-element"></div>
                    <p>
                        In total 21 apartments and 2 commercial spaces have been created due to the fact that the whole building has been carefully refurbished in modern apartments of high standard and different types and sizes. Living spaces are with the south orientation to the park and have a full day-light. 
                    </p>
                    <p>
                        Each unit has a possibility to buy a cellar in the basement of the house. Owners can also spend a leisure time in pleasing and quite garden located in the courtyard of the house.
                    </p>
                    <div class="logo-element"></div>

                </div>

                <div class="right-side">

                    <div class="header">
                    <h1>Sales</h1>
                    <div class="logo-element"></div>
                    </div>

                    <table class="sales-table">
                    <tr>
                        <td class="number">Flat No.</td>
                        <td class="floor">Floor</td>
                        <td class="Disposition">Disposition</td>
                        <td class="area">Area</td>
                        <td class="note">Note</td>
                        <td class="status">Status</td>
                        <td class="price">Price</td>
                        <td class="docs">Documentation</td>
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
        <td class="left">'.$key['floor_en'].'</td>
        <td class="left">'.$key['disposition'].'</td>
        <td class="right">'.$key['area'].' m&sup2;</td>
        <td class="left">'.$key['note_en'].'</td>
        <td class="left">'.$key['status_en'].'</td>
        <td class="right">'.$key['price_en'].'</td>
        <td class="center">
            <a href="'.URL.'/content/pdfs/flat_'.$key['number'].'_en.pdf" target="_blank">
                <img class="pdf-icon" src="'.URL.'/images/pdf-icon.png" alt="download" />
            </a>
        </td>
    </tr>
    ');
}

?>

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
            <h1>Apartment '.$key['number'].'</h1>
            <table>
            <tr>
                <td>Floor:</td>
                <td>'.$key['floor_en'].'</td>
            </tr>
            <tr>
                <td>Area:</td>
                <td>'.$key['area'].'</td>
            </tr>
            <tr>
                <td>Disposition:</td>
                <td>'.$key['disposition'].'</td>
            </tr>
            <tr>
                <td>Note:</td>
                <td>'.$key['note_en'].'</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
            </tr>
            <tr>
                <td>Status:</td>
                <td>'.$key['status_en'].'</td>
            </tr>
            <tr>
                <td>Price:</td>
                <td>'.$key['price_en'].'</td>
            </tr>
            <tr>
                <td colspan="2" class="download">
                    <a href="'.URL.'/content/pdfs/flat_'.$key['number'].'_en.pdf" target="_blank">
                    <img class="pdf-icon" src="'.URL.'/images/pdf-icon.png" alt="download" /> download >>>
                    </a>
                </td>
            </tr>
            </table>

        </div>

    </div>
    ');
}

?>

                </div>

            </div>
        </section>

<?php require("../pages/template_footer_en.php"); ?>