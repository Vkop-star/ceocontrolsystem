<?php

$usuario = "root";
$senha = "";
$bancodedados = "ceocontrolsystem";
$hostname = "localhost";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
if($mysqli->connect_errno) {
    echo "Falha ao Conectar: (".$mysqli->connect_errno.")".$mysqli->connect_error;
}