<?php

require("session_check.php");

/*
script works with xml file for reading, editing and saving 
*/

if ($_POST) {

$file = 'sales.xml';

$xml = new SimpleXMLElement("<?xml version=\"1.0\" encoding=\"utf-8\" ?><flats></flats>");

//print_r($_POST);

foreach ($_POST['style'] as $flat_number => $value) {

   //echo $key;
   //echo "-";
   //echo $value;
   
   $flat = $xml->addChild('flat');
   $flat->addAttribute('number', $flat_number);
   
   //style
   $flat->addChild('style', $_POST['style'][$flat_number]);
   
   //status
   $status_cs = $flat->addChild('status', $_POST['status'][$flat_number]['cs']);
   $status_cs->addAttribute('lang', 'cs');
   $status_en = $flat->addChild('status', $_POST['status'][$flat_number]['en']);
   $status_en->addAttribute('lang', 'en');
   
   //price
   $price_cs = $flat->addChild('price', $_POST['price'][$flat_number]['cs']);
   $price_cs->addAttribute('lang', 'cs');
   $price_en = $flat->addChild('price', $_POST['price'][$flat_number]['en']);
   $price_en->addAttribute('lang', 'en');

   //description
   $desc_cs = $flat->addChild('description', $_POST['description'][$flat_number]['cs']);
   $desc_cs->addAttribute('lang', 'cs');
   $desc_en = $flat->addChild('description', $_POST['description'][$flat_number]['en']);
   $desc_en->addAttribute('lang', 'en');
   
    
   //echo "<hr>";
}

//echo "update success!";

//save back
$xml->asXml($file);

header("location: sales.php?info=updated");

}

?>