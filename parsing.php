<?php

function readHTML_backJSON($path) {
    $file = file_get_contents($path);
    return $file;
}

$file = file_get_contents("Hitchman.html");


$result = fopen("result.json", "r+");

$title = substr($file, strpos( $file, "<title>"),(strpos($file, "</title>")-(strpos($file,"<title>"))));


// fwrite($result, $resultats);
// preg_match("<title>", $file , $matches, PREG_OFFSET_CAPTURE);
// print_r($matches);

$regex = '/<title>(.*)( — The Movie Database \(TMDb\))<\/title>/';
$resultat = []; 
$match = preg_match_all($regex, $file, $resultat);
$pattern = '<';
$resultats = $resultat[1];
print_r($resultats);
// print_r(json_encode($resultats));
