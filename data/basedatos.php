<?php
$db = new mysqli('localhost', 'root', '123456', 'inmobilaria');
if(!$db){
    echo 'Error al conectar la base de datos';
    exit;
}