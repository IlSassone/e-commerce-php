<?php

    include('../environment.php');
    if(in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1'))) { 
    }
    $conn = mysqli_connect("prova-laravel.cv7lz07jnv6w.eu-central-1.rds.amazonaws.com","admin","provaprova","ecommerce");

    if (($conn == false) || ($conn->connect_errno)) {
        echo "Errore in connessione MySQL()";
        exit();
    }
    
    function eseguiquery($sql)
    {
        global $conn;
        $resultset = $conn->query($sql);
        $righe = mysqli_fetch_all($resultset, MYSQLI_ASSOC);
        return $righe;
    }

    function insert($sql)
    {
        global $conn;
        mysqli_query($conn, $sql);
    }



?>

