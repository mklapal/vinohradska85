<?php

require("session_check.php");

/*
script works with xml file for reading, editing and saving 
*/

if ($_POST) {

if (file_exists('flats.json'))
  {
  $data = json_decode(file_get_contents('flats.json'), true);
}  else {
  $data = null;
}

//print_r($_POST);
//print_r($data);

//echo "<hr>";

$output = array();
//foreach ($_POST['style'] as $flat_number => $value) {
foreach ($data['flats'] as $item) {

   $object = array();
   $number = $item['number'];

   $object['number'] = $number;
   $object['floor_cs'] = $item['floor_cs'];
   $object['floor_en'] = $item['floor_en'];
   $object['disposition'] = $item['disposition'];
   $object['area'] = $item['area'];

   $object['note_cs'] = $_POST[$number.'/note_cs'];
   $object['note_en'] = $_POST[$number.'/note_en'];
   $object['status_cs'] = $_POST[$number.'/status_cs'];
   $object['status_en'] = $_POST[$number.'/status_en'];
   $object['price_cs'] = $_POST[$number.'/price_cs'];
   $object['price_en'] = $_POST[$number.'/price_en'];

   $output[] = $object;
}

//echo "update success!";

//save back
$wrapper['flats'] = $output;

json_encode($wrapper);

$file = 'flats.json';
file_put_contents($file, json_encode($wrapper));
//print_r($wrapper);

header("location: sales.php?info=updated");

}

?>