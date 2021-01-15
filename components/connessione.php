<?php

    $conn = mysqli_connect("localhost","root","","webbi-commerce");

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

