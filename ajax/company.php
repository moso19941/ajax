<?php



if (isset($_GET['keyword'])){
	
/*	header('Content-Type: text/xml');
	echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
	echo ('<response>');
	$keyword = $_GET['keyword'];

	$name_database = array('mohamed', 'ali', 'anis', 'salah', 'mounir', 'kamel', 'salim');

	if (in_array($keyword, $name_database)){
		echo $keyword." is registered in our database";
	}else if ($keyword ==''){
		echo "Enter a name, please!";
	}else{
		echo "Sorry, ". $keyword." is not registered";
	}

	echo ('</response>');*/
	$keyword = $_GET['keyword'];

	$name_database = array ('{

									{"Name" : "Sulaiman"},
									{"Name" : "Anis"},
									{"Name" : "Ali"},
									{"Name" : "salah"},
									{"Name" : "kamel"},
									{"Name" : "salim"}

							}');

	if (in_array($keyword, $name_database)){
		echo $keyword." is registered in our database";
	}else if ($keyword ==''){
		echo "Enter a name, please!";
	}else{
		echo "Sorry, ". $keyword." is not registered";
	}


}
?>