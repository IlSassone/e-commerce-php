<?php
    include('../components/loginForm.php');
    include('../components/connessione.php');

    $html = " <!doctype html>
            <html>
                <head>
                    <meta charset='UTF-8' />
                    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
                
                    <link href='https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css' rel='stylesheet' />
                <!-- ... -->
                </head>
                <body>
                    $login
                </body>
            </html>";

    print($html);
?>
