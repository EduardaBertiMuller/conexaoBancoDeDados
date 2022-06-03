<?php 

//endereço do servidor
$hostname="localhost";
$bancodedados="bancodedados";
$usuario="root";
//senha vazia
$senha="";

$mysqli=new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno){
    echo "Falha ao conectar: ( ".$mysqli->connect_error;
}

?>