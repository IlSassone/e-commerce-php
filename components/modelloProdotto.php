<?php
    class Articolo{
        public $id;
        public $nome;
        public $descrizione;
        public $prezzo;
        public $linkImmagine;
        public $valuta;


        function __construct($data){
            $this->id = $data["ID"];
            $this->nome = $data["Nome"];
            $this->descrizione = $data["Descrizione"];
            $this->prezzo = $data["Prezzo"];
            $this->linkImmagine = $data["LinkImmagine"];
            $this->valuta = $data["Valuta"];
        }


        function toHtml(){
            print($this->id);
        }
    }


?>