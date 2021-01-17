<?php
    include("./components/connessione.php");
    session_start();
    //print_r($_POST);
    $sql = "SELECT * FROM clienti WHERE Email='{$_POST["email"]}' and Password='{$_POST["password"]}' LIMIT 1";
    $righe = eseguiquery($sql);
    print_r($righe);
    if(count($righe)==1){
        $user = $righe[0];
        print_r($user);
        $_SESSION["EMAIL"] = $user["Email"];
        $_SESSION["AVATAR"] = $user["LinkImmagine"];
        $_SESSION["NOME"] = $user["Nome"];
        $_SESSION["COGNOME"] = $user["Cognome"];
        $_SESSION["CF"] = $user["CF"];
        header("location: /");
    }
    else {
        header("location: /login");
    }



?>