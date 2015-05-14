<?php
$xml = new SimpleXMLElement('<xml/>');

include '/pages/dbconnect.php';

//print_r($conn);
//print "<br/>";

$stmt= $conn->query('Select * from territoire');



while ($row=$stmt->fetch(PDO::FETCH_ASSOC )){
		$id=$row['id'];
		$territoireID = $row['territoireId'];
		$city=$row['city'];
		$zip=$row['zipCode'];


		$territoire = $xml->addChild('Territoire');
		
		$territoire->addChild('id',$id);
		$territoire->addChild('territoireId', $territoireID);
		$territoire->addChild('territoireId', $id);
		$territoire->addChild('city', $city);
		$territoire->addChild('zip', $zip);
		
			
}

// //generate XML Schema


Header('Content-type: text/xml');
print($xml->asXML());

