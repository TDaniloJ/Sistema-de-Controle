<?php

require_once "config.php";

// Conexão ao banco de dados
function con() {
    global $con, $host, $user, $pass, $db;

    $con = mysqli_connect($host, $user, $pass, $db);

    if (!$con) {
        die("Falha na conexão: " . mysqli_connect_error());
    }
}









?>