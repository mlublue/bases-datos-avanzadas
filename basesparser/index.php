<?php
    //kreira se DOMDocument objekat
    $xmlDoc = new DOMDocument();

    //u xml objekat se ucitava xml fajl
    $xmlDoc->load("CFDi_A5.xml");

    //dodeljuje se promenljivoj koreni element
    $x = $xmlDoc->documentElement;

    //prolazi se kroz petlju tako sto se ispisuje informacija o podelementima
    foreach ($x->childNodes AS $item){
        print $item->nodeName . " = " . $item->nodeValue . "<br />";
    }

   
?>
