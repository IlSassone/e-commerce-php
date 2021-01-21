<?php
    include('../components/navbar.php');
    include("../components/connessione.php");
    include("../components/modelloProdotto.php");

    if(!array_key_exists("id", $_GET)){
        header("Location: /");
    }

    $sql = "SELECT a.*, c.Nome as NomeCategoria, c.Colore as ColoreBadge FROM articoli a, categorie c WHERE a.Categoria=c.ID and a.ID={$_GET["id"]}  limit 1";

    $righe = eseguiquery($sql);
    $prodotto = $righe[0];
    $obj = new Articolo($prodotto);
    $html = "<!DOCTYPE html>
<html lang='it'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>

    <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet' />
    <!--Totally optional :) -->

</head>

<body class='font-sans leading-normal tracking-normal'>
    $nav
    {$obj->fullView()}
    
</body>

</html>";

print($html);

?>