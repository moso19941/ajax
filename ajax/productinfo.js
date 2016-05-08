xmlHttpObject=new XMLHttpRequest();

function showProduct(){
		//alert(" I am in show product");
		//echo "<p>if</p>";
		var product_id = document.getElementById("productlist").value;
		xmlHttpObject.open("POST", "productinfo.php", true);
		xmlHttpObject.onreadystatechange= getProductCallback;
		xmlHttpObject.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		xmlHttpObject.send("product_id="+product_id);

}

function getProductCallback(){
	
	if (xmlHttpObject.readyState==4){
		if (xmlHttpObject.status==200){
			
			document.getElementById("product_info").innerHTML = 
			//'<span style="color:green;">'+xmlHttpObject.responseText+'</span>';
			  '<span style="color:green;">'+parseXML(xmlHttpObject.responseXML)+'</span>';
			   '<span style="color:green;">'+parseXML(xmlHttpObject.responseXML)+'</span>';
		}
	}else{
		//alert("Something went wrong!");
	}
	
}
function parseXML(xml){
	var i;
	var str="";
	var x = xml.getElementsByTagName("product");
	//document.write("x.length: "+ x.length);
	for (i = 0; i <x.length; i++) { 
		var id = "id: "+ x[i].getElementsByTagName("id")[0].childNodes[0].nodeValue +"<br>";
		var name = "name: "+ x[i].getElementsByTagName("name")[0].childNodes[0].nodeValue +"<br>";
		var cat = "category: "+ x[i].getElementsByTagName("category")[0].childNodes[0].nodeValue +"<br>";
		var price = "price: "+ x[i].getElementsByTagName("price")[0].childNodes[0].nodeValue +"<br>";
		
		str = id + name + cat +price;

	}
	return price;
}


function parseJson(json){


	
}