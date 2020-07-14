<?php

$servidor  = "localhost";
$usuario = "popser84_root";
$senha ="Band2019";
$dbname = "popser84_pop";

//criar conexao

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

if(!$conn){

    die("Falha na conexao: "  . mysqli_conect_error() );
}else{
    
}

?>