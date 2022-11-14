<?php
    
    $serverName = "";
    $cnnectionOptions = [
        "Database" => "",
        "Uid" => "",
        "PWD" => ""
    ];
    $user = '';
    $password = '';
    $db = 'tickets';
    $host = 'localhost';

    $db_connect = new mysqli($host, $user, $password, $db);
    mysqli_set_charset($db_connect,"utf8");

    if ($db_connect->connect_error == true) {
        //echo('Falha na conexão');
        $msg_connect = 'Falha na conexão: ' . $db_connect->connect_error;
        $continuar = false;
    } else {
        $msg_connect = 'Conexão feita com sucesso';
        //echo($msg_connect);
        $continuar = true;
    }
?>