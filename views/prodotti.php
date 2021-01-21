<?php

    function startsWith($haystack, $needle){
        $length = strlen($needle);
        return substr($haystack, 0, $length) === $needle;
    }

    include('../components/navbar.php');
    include("../components/connessione.php");
    include("../components/modelloProdotto.php");
    $prodotti = Array();
    if(!array_key_exists("search", $_POST)){

        $sql = "SELECT a.*, c.Nome as NomeCategoria, c.Colore as ColoreBadge FROM articoli a, categorie c WHERE a.Categoria=c.ID";
    }
    else{
        $key = $_POST["search"];
        if(startsWith($key, "#")){
            $key = str_replace("#", '', $key);
            $sql="SELECT a.*, c.Nome as NomeCategoria, c.Colore as ColoreBadge FROM articoli a, categorie c WHERE a.Categoria=c.ID and c.Nome LIKE '%{$key}%'";
        }
        else{
            $sql = "SELECT a.*, c.Nome as NomeCategoria, c.Colore as ColoreBadge FROM articoli a, categorie c WHERE a.Categoria=c.ID and a.Nome LIKE '%{$key}%'";
        }
    }
    $righe = eseguiquery($sql);

    
    foreach($righe as $chiave => $arr){
        $prodotti[] = new Articolo($arr);
    }

    $cards = "";

    foreach($prodotti as $prod){
        $cards.= $prod->toHtml();
    }
    if($cards=="") $cards= "Nessun prodotto con questi criteri di ricerca, oppure il db è morto, non si sa";
    $html = " <!doctype html>
                <html>
                    <head>
                        <meta charset='UTF-8' />
                        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                    
                        <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet' />
                    <!-- ... -->
                    </head>
                    <body>
                        $nav
                        <div class='container my-4 mx-auto'>
                            <div class='flex flex-col sm:flex-row flex-nowrap'>
                                $cards
                            </div>
                        </div>
                    </body>
                </html>";
        
    print($html);





?>