<?php
$dbhost = "localhost:3306";
$dbuser = "root";
$dbpass = "";
$dbname = "store";

//mysql_connect($dbhost,$dbuser,$dbpass) or die('cannot connect to the server');
//mysql_select_db($dbname) or die('database selection problem');

$conn=mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$product_id = $_POST["product_id"];

//echo $product_id;

if ($product_id==0){
	echo "Please, select a product";
}else{
	//query the database
	$sql="SELECT * from products where id=$product_id";

	$result = $conn->query($sql);

	if ($result->num_rows == 1) {
		// output data of each row
		$row = $result->fetch_assoc();
		//echo "<b>id:</b> " . $row["id"]. " name: " . $row["name"]. " category:" . $row["category"]. " price:" . $row["price"]."<br>";
		header('Content-Type: text/xml');
		echo ('<?xml version="1.0" encoding="UTF-8" standalone="yes"?>');
		/*echo"<product>
				<id>" . $row["id"]. "</id>
				<name>" . $row["name"]. "</name>
				<category>" . $row["category"]. "</category>
				<price>" . $row["price"]. "</price>
			</product>";*/
			$array = {"id"=>$row["id"], "name"=>$row["name"],"category"=> $row["category"], "price"=>$row["price"]};
			$json_message = json_encode($array);
			echo $json_message;
		//JSON constructred manually
		echo('{"id": "'. $row["id"].'"}, "name": "'. $row["name"].'"},"category": "'. $row["category"].'"},"price": "'. $row["price"].'"},');

	} else {
		echo "product not found";
	}
	$conn->close();

}

?>