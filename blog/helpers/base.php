<?php

    $BASE_URL ="http://". $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].dirname($_SERVER['REQUEST_URI'].'?').'/';
    // server_name = nome do servidor
    // server port = qual porta o servidor esta usando
    // dirname = funçao para pegar a pasta raiz
    // request_uri = superGlobal mostra o caminho depois do dominio

    // echo dirname($_SERVER['REQUEST_URI']);

?>