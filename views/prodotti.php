<?php

    include("components/connessione.php");
    include("components/modelloProdotto.php");

    $prodotti = Array();

    $sql = "SELECT * FROM articoli";

    $righe = eseguiquery($sql);

    
    foreach($righe as $chiave => $arr){
        $prodotti[] = new Articolo($arr);
    }


    $html = " <!doctype html>
                <html>
                    <head>
                        <meta charset='UTF-8' />
                        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                    
                        <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet' />
                    <!-- ... -->
                    </head>
                    <body>
                        prodotti
                    </body>
                </html>";
        
    print($html);





?>