<?php
	$str = file_get_contents('lotsCopy.json');
	$jsonArray=json_decode($str, true);
	//dd($jsonArray);
	echo '<pre>' . print_r($jsonArray, true) . '</pre>';
?>