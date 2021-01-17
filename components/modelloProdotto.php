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
            $this->linkImmagine = ($data["LinkImmagine"]!= null)? $data["LinkImmagine"]: "https://via.placeholder.com/500";
            $this->valuta = $data["Valuta"];
        }


        public function toHtml(){
            return "
                <article class='p-4 overflow-hidden rounded-lg shadow-lg lg:w-1/5 md:w-1/3 sm:w-screen'>

                    <a href='../views/singoloProdotto.php?id={$this->id}'>
                        <img alt='immagineProdotto' class='block h-auto w-full' src='{$this->linkImmagine}' />
                    </a>
                    <header class='flex  p-2 md:p-4'>
                        <h1 class='text-lg'>
                            <a class='no-underline hover:underline text-black' href='../views/singoloProdotto.php?id={$this->id}'>
                                {$this->nome}
                            </a>
                            <p class='text-grey-darker text-sm'>
                                {$this->prezzo} {$this->valuta}
                            </p>
                        </h1>
                        
                    </header>

                    <footer class='flex items-center justify-between leading-none p-2 md:p-4'>
                        <a class='flex items-center no-underline hover:underline text-black' href='../views/singoloProdotto.php?id={$this->id}'>
                            <p class='ml-2 text-sm'>
                                Dettagli
                            </p>
                        </a>
                    </footer>

                </article>
            ";
        }
    }


?>