<?php
/*
    Home page con vista prodotti
    pattern master-detail (su lista articoli)
    lista=>scheda prodotto
    4) Nella scheda prodotto aggiungere un bottone "Metti nel carrello"
    4) Nella scheda prodotto aggiungere un bottone "Metti nel carrello"
    5) nell'header di pagina aggiungiamo "Vai al pagamento"
    Quando va al carrello deve essere loggato
*/



$request = $_SERVER['REQUEST_URI'];

    if (str_contains($request, "/p")) require __DIR__ . '/views/singoloProdotto.php';
    else {
        switch ($request) {
            case '/':
                require __DIR__ . '/views/prodotti.php';
                break;
            case '':
                require __DIR__ . '/views/prodotti.php';
                break;
            case '/login':
                require __DIR__ . '/views/login.php';
                break;
            case '/carrello':
                require __DIR__ . '/views/carrello.php';
                break;
            case '/validate':
                require __DIR__ . '/components/validateLogin.php';
                break;
            default:
                require __DIR__ . '/views/404.html';
                break;
        }

    }
