<?php

    if(!array_key_exists("id", $_GET)){
        header("Location: /");
    }
    
    print($_GET["id"]);


?>