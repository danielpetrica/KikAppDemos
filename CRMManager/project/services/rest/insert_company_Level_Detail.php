<?php
/**
* Rest client services.
* @author KikApp PHP Generator
* @version Beta 1 build 0.1.39 
*/

header('Content-Type: application/json;');

$empty = array();

$name=""; 
$address=""; 
$phone=""; 
$image=""; 

$varDefault = array(
		ucfirst("name")=>$name, 
		ucfirst("address")=>$address, 
		ucfirst("phone")=>$phone, 
		ucfirst("image")=>$image, 
							
	);

$result = array_merge(
            $empty, $varDefault
        );	

echo json_encode($result);
?>
