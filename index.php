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
print_r($request);


header("location: views/prodotti.php");