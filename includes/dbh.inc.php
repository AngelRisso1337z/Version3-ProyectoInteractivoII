<?php 
$hn = 'localhost';
$un = 'root';
$pw = 'root';
$db = 'redsocial';

$conn = new mysqli($hn, $un, $pw, $db);
if ($conn->connect_error) die("Error en Conexion");
