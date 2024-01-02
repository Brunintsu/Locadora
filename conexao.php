<?php


$servidor = "localhost";
$dbusuario = "root";
$dbsenha = "senac";
$dbname = "godriver";

$con = mysqli_connect("localhost","root","senac","godriver");
if(!$con){
    die('Falha na conexão. '.mysqli_connect_error());
}
?>