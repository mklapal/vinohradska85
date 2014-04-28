<?php 

require("../config.php");
$lang = "en";
$menu = "sales";
require("../pages/template_header_en.php");

?>

        <section class="text">
            
            <div class="wrapper">

<table class="sales">
<tr>
    <td class="number">Flat No.</td>
    <td class="floor">Floor</td>
    <td class="area">Plocha</td>
    <td class="disposition">Dispozice</td>
    <td class="status">Status</td>
    <td class="price">Cena</td>
    <td class="desc">Pozn.</td>
    <td class="docs">Dokumentace</td>
</tr>

<?php

if (file_exists('../admin/sales.xml'))
  {
  $data = simplexml_load_file('../admin/sales.xml');
}  else {
  $data = null;
}

echo ('
<tr>
    <td><a class="onpage" href="#1529_101">1529/101</a></td>
    <td>B1/G</td>
    <td>64,93 m&sup2;</td>
    <td>-</td>
    <td>'.xml($data,'1529_101','status','cs').'</td>
    <td>'.xml($data,'1529_101','price','cs').'</td>
    <td>'.xml($data,'1529_101','description','cs').'</td>
    <td>
        <a href="'.URL.'/content/pdfs/flat_1529_101_cz.pdf" target="_blank">
            <img src="'.URL.'/images/pdf-icon.png" alt="download" />
        </a>
    </td>
</tr>

<tr>
    <td><a class="onpage" href="#1529_101">1529/101</a></td>
    <td>B1/G</td>
    <td>64,93 m&sup2;</td>
    <td>-</td>
    <td>'.xml($data,'1529_101','status','cs').'</td>
    <td>'.xml($data,'1529_101','price','cs').'</td>
    <td>'.xml($data,'1529_101','description','cs').'</td>
    <td>
        <a href="'.URL.'/content/pdfs/flat_1529_101_cz.pdf" target="_blank">
            <img src="'.URL.'/images/pdf-icon.png" alt="download" />
        </a>
    </td>
</tr>

<tr>
    <td><a class="onpage" href="#1529_101">1529/101</a></td>
    <td>B1/G</td>
    <td>64,93 m&sup2;</td>
    <td>-</td>
    <td>'.xml($data,'1529_101','status','cs').'</td>
    <td>'.xml($data,'1529_101','price','cs').'</td>
    <td>'.xml($data,'1529_101','description','cs').'</td>
    <td>
        <a href="'.URL.'/content/pdfs/flat_1529_101_cz.pdf" target="_blank">
            <img src="'.URL.'/images/pdf-icon.png" alt="download" />
        </a>
    </td>
</tr>

<tr>
    <td><a class="onpage" href="#1529_101">1529/101</a></td>
    <td>B1/G</td>
    <td>64,93 m&sup2;</td>
    <td>-</td>
    <td>'.xml($data,'1529_101','status','cs').'</td>
    <td>'.xml($data,'1529_101','price','cs').'</td>
    <td>'.xml($data,'1529_101','description','cs').'</td>
    <td>
        <a href="'.URL.'/content/pdfs/flat_1529_101_cz.pdf" target="_blank">
            <img src="'.URL.'/images/pdf-icon.png" alt="download" />
        </a>
    </td>
</tr>


');

?>

</table>

            </div>
        </section>

<?php require("../pages/template_footer_en.php"); ?>