<?php
    class Articolo{
        public $id;
        public $nome;
        public $descrizione;
        public $prezzo;
        public $linkImmagine;
        public $valuta;
        public $categoria;
        public $colore;

        function __construct($data){
            $this->id = $data["ID"];
            $this->nome = $data["Nome"];
            $this->descrizione = $data["Descrizione"];
            $this->prezzo = $data["Prezzo"];
            $this->linkImmagine = ($data["LinkImmagine"]!= null)? $data["LinkImmagine"]: "https://via.placeholder.com/500";
            $this->valuta = $data["Valuta"];
            $this->categoria = $data["NomeCategoria"];
            $this->colore = $data["ColoreBadge"];
        }
        
        public function fullView(){
            $button = "";
            if (array_key_exists('EMAIL', $_SESSION)) {
                $button = "<a href='../components/addtocart.php?itemid={$this->id}'><button
                            class='bg-transparent hover:bg-gray-900 text-gray-900 hover:text-white rounded shadow hover:shadow-lg py-2 px-4 border border-gray-900 hover:border-transparent'>
                            Aggiungi al carrellon
                        </button></a>";
            }
            else {
                $button = "<a href='./login.php'><button
                            class='bg-transparent text-gray-900 rounded shadow py-2 px-4 border border-gray-900'>
                            Non sei loggato, rimediamo!
                        </button></a>";
            }
            return "<!--Hero-->
                <div class='container mx-auto flex flex-col md:flex-row items-center my-5 md:my-10'>
                    <!--Left Col-->
                    <div class='flex flex-col w-full lg:w-1/2 justify-center items-start pt-6 pb-24 px-6'>
                        <div style='padding-top: 0.1em; padding-bottom: 0.1rem; color: white; background-color: {$this->colore};' class='text-xs px-3 rounded-full font-bold'>
                            {$this->categoria}
                        </div>
                        <h1 class='font-bold text-3xl my-4'>{$this->nome}</h1>
                        <p class='leading-normal mb-4'>
                            {$this->prezzo} {$this->valuta}
                        </p>
                        <p class='leading-normal mb-4'>
                            {$this->descrizione}
                        </p>
                        $button
                    </div>
                    <!--Right Col-->
                    <div class='w-full lg:w-1/2 lg:py-6 text-center'>
                        <!--Add your product image here-->
                        <img alt='immagineProdotto' class='block h-auto w-full' src='{$this->linkImmagine}' />
                    </div>

                </div>";
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
                        <div style='padding-top: 0.1em; padding-bottom: 0.1rem; color: white; background-color: {$this->colore};' class='text-xs px-3 rounded-full font-bold'>
                            {$this->categoria}
                        </div>
                    </footer>

                </article>
            ";
        }
    }


?>