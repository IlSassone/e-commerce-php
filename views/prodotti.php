<?php


    include('components/navbar.php');
    include("components/connessione.php");
    include("components/modelloProdotto.php");
    //print_r($_POST);
    $prodotti = Array();

    $sql = "SELECT * FROM articoli";

    $righe = eseguiquery($sql);

    
    foreach($righe as $chiave => $arr){
        $prodotti[] = new Articolo($arr);
    }

    $cards = "";

    foreach($prodotti as $prod){
        $cards.= $prod->toHtml();
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