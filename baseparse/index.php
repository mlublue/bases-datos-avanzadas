<?php
    $xmlDoc = new DOMDocument();
    $xmlDoc->load("CFDi_A5.xml");
    $x = $xmlDoc->documentElement;

    $Comprobante = $x -> getElementsByTagName('Comprobante');
    $Emisor = $x -> getElementsByTagName('Emisor');
    $DomicilioFiscal = $x -> getElementsByTagName('DomicilioFiscal');
    $ExpedidoEn = $x -> getElementsByTagName('ExpedidoEn');
    $RegimenFiscal = $x -> getElementsByTagName('RegimenFiscal');
    $Receptor = $x -> getElementsByTagName('Receptor');
    $Concepto = $x -> getElementsByTagName('Concepto');

echo "---------------------------------------------------- <BR>";
    foreach ($Comprobante as $domi){
      echo $domi->getAttribute('version') . "<br>";
      echo $domi->getAttribute('serie') . "<br>";
      echo $domi->getAttribute('folio') . "<br>";
      echo $domi->getAttribute('fecha') . "<br>";
      echo $domi->getAttribute('sello') . "<br>";
      echo $domi->getAttribute('certificado') . "<br>";
      echo $domi->getAttribute('formaDePago') . "<br>";
      echo $domi->getAttribute('metodoDePago') . "<br>";
      echo $domi->getAttribute('LugarExpedicion') . "<br>";
      echo $domi->getAttribute('noCertificado') . "<br>";
      echo $domi->getAttribute('tipoDeComprobante') . "<br>";
      echo $domi->getAttribute('descuento') . "<br>";
      echo $domi->getAttribute('subTotal') . "<br>";
      echo $domi->getAttribute('total') . "<br>";  
    }

echo "---------------------------------------------------- <BR>";
    foreach ($Emisor as $emi){
      echo $emi->getAttribute('nombre') . "<br>";
      echo $emi->getAttribute('rfc') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
    foreach ($DomicilioFiscal as $domi){
      echo $domi->getAttribute('calle') . "<br>";
      echo $domi->getAttribute('codigoPostal') . "<br>";
      echo $domi->getAttribute('colonia') . "<br>";
      echo $domi->getAttribute('estado') . "<br>";
      echo $domi->getAttribute('localidad') . "<br>";
      echo $domi->getAttribute('municipio') . "<br>";
      echo $domi->getAttribute('noExterior') . "<br>";
      echo $domi->getAttribute('pais') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
foreach ($ExpedidoEn as $domi){
      echo $domi->getAttribute('calle') . "<br>";
      echo $domi->getAttribute('codigoPostal') . "<br>";
      echo $domi->getAttribute('colonia') . "<br>";
      echo $domi->getAttribute('estado') . "<br>";
      echo $domi->getAttribute('localidad') . "<br>";
      echo $domi->getAttribute('municipio') . "<br>";
      echo $domi->getAttribute('noExterior') . "<br>";
      echo $domi->getAttribute('pais') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
foreach ($RegimenFiscal as $emi){
      echo $emi->getAttribute('Regimen') . "<br>";
      echo $emi->getAttribute('rfc') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
    foreach ($Receptor as $emi){
      echo $emi->getAttribute('nombre') . "<br>";
      echo $emi->getAttribute('rfc') . "<br>";
    }
echo "---------------------------------------------------- <BR>";
    foreach ($Concepto as $domi){
      echo $domi->getAttribute('cantidad') . "<br>";
      echo $domi->getAttribute('unidad') . "<br>";
      echo $domi->getAttribute('noIdentificacion') . "<br>";
      echo $domi->getAttribute('descripcion') . "<br>";
      echo $domi->getAttribute('valorUnitario') . "<br>";
      echo $domi->getAttribute('importe') . "<br>";
    }




/*
    foreach ($x->childNodes AS $item){
        print $item->nodeName . " = " . $item->nodeValue . "<br />";
        //print $item->telefon . "=" . $item->nodeValue . "<br />";
        //echo "emma";
    }
    */
    //foreach ($x->getElementsByTagName('telefon') as $telefon) {
        //print $telefon->nodeName . " = " . $telefon->nodeValue . "<br />";
        /*print "model: " . $telefon->childNodes->item(2)->nodeValue .
          " model: " . $telefon->childNodes->item(1)->nodeValue .
          " proizvodjac: " . $telefon->childNodes->item(2)->nodeValue .
          " cena: " . $telefon->childNodes->item(0)->nodeValue;
          echo "<br>";
        foreach($x->childNodes as $fila) {
            print $fila->nodeName . " = " . $fila->nodeValue . "<br />";
            //printf("Name: %s - Type: %s - Value: %s\n", $node->nodeName, $node->nodeType, urlencode($node->nodeValue));
            //printf("Name: %s - Type: %s - Value: %s\n");
            //printf($node->nodeName);
            /*print "emma: " . $telefon->childNodes->item(0)->nodeValue .
          " model: " . $telefon->childNodes->item(1)->nodeValue .
          " proizvodjac: " . $telefon->childNodes->item(2)->nodeValue .
          " cena: " . $telefon->childNodes->item(3)->nodeValue;
          echo "<br>";*/
            //printf($node->nodeType);
            //printf(urlencode($node->nodeValue));
        //}
    //}
?>