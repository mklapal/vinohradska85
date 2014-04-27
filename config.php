<?php

define("URL", "http://localhost:8080/vinohradska85");


function xml($data, $flat, $node, $lang=null){
    //print_r($data);
    if ($lang){
       $string = "flat[@number='".$flat."']/".$node."[@lang='".$lang."']"; 
    } else {
       $string = "flat[@number='".$flat."']/".$node."";
    }
    
    //echo $string;
    $return = $data->xpath($string);
    if ($return){
        $return = array_pop($return);
    } else {
        $return = null;
    }
    
    return $return;
}

?>