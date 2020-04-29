<?php

$a = "holamundo";


//Funciones
function miFuncion(){
    global $a;
    $a = "cambiar texto";
}



miFuncion();
echo $a;


//Arreglos
$array_1 = array();
$alumno = array();

$array_1[]=1;
$array_1[]=2;
$array_1[]="hola";

//var_dump($array_1);

$alumno['Cve_unica']="2929292";
$alumno['nombre']="ariel";
$alumno['apellido']="mani";

//var_dump($array_2);

//Json
$json = json_decode($alumno);

//$alumno_aux = json_decode($json);
//echo $array_2['Valor2'];

//Clases
class Aux {
    public $x;
    public $y;

}

$aux = new Aux();

$aux->x ="Valor X"

var_dump($aux);



?>