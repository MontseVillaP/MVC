<?php

require_once('conversor.php');
extract($_POST);
    
    $objCon= new conversor();

$objCon->setValores($n1,$n2,$n3);
   

    switch($convert){
        case 'cm' : $objCon->cm();
        $cadena=$objCon->getValores();
         break;
        case 'mm':  $objCon->mm();
        $cadena=$objCon->getValores();
        break;
        case 'km':  $objCon->km();
        $cadena=$objCon->getValores();
        break;
        case 'dc': $objCon->dc();
        $cadena=$objCon->getValores();
        break;
        case 'ml': $objCon->ml();
        $cadena=$objCon->getValores();
        break;
        case 'mg': $objCon->mg();
        $cadena=$objCon->getValores();
        break;
        case 'gr': $objCon->gr();
        $cadena=$objCon->getValores();
        break;


    }
        include ('Index.php');
        return $cadena;


?>