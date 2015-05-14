<?php

$xml = simplexml_load_file("../cd-catalog.xml");

//echo $xml->CD[1]->TITLE." by ". $xml->CD[1]->ARTIST;
//echo count($xml);

for ($i=1;$i<=(count($xml)+1);$i++){
	echo $i."- ".$xml->CD[$i]->TITLE."<br/>";
}


foreach($xml->cd as $cd){
	
}

// echo "<pre>";
// print_r($xml);

