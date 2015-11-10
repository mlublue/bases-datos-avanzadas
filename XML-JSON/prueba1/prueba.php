<?php

// funcion que recive el  URL  del archivo xml y regresa una cadena con el archivo convertido a json
function XMLtoJSON($xml) {

// recibe el contenido del archivo XML 
  //$xml_cnt = file_get_contents($xml);    
  
  // elimina enters, returns y tabs(opcional)
  //$xml_cnt = str_replace(array("\n", "\r", "\t"), '', $xml_cnt);    

  // remplaza  comillas dobles por comillas simples, 
  //para asegurar que la función XML sencilla pueda analizar el código XML correctamente (opcional)
  //$xml_cnt = trim(str_replace('"', "'", $xml_cnt));
  

if (file_exists($xml)) {
    $xmlL = simplexml_load_file($xml);
 
    print_r($xml);
} else {
    exit('Error abriendo');
}



//lee todo lo que hay en el archivo 
  //$simpleXml = simplexml_load_file($xml);

// regresa una cadena con el archivo ya codifiado a tra ves de la funcion json_encode
  return json_encode($xmlL);    
}


//imprimiendo el archivo peliculas a traves de la funcion XMLtoJSON que codifica los archivos
print_r (XMLtoJSON('prueba.xml'));


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>JSON</title>
</head>
<body background="http://cdn.wonderfulengineering.com/wp-content/uploads/2013/11/apple-wallpaper-background-2.jpg">

	<h1>XML a JSON</h1>
	<h2> Ya esta convertido desde un archivo XML</h2>
	
	
</body>
</html>