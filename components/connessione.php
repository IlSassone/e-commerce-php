<?php

    include('../environment.php');
    $conn = mysqli_connect("remotemysql.com", "mO8L6KYQgg",$_ENV["PASS"], "mO8L6KYQgg");

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

