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
                <article class='p-4 md:m-4 md:min-w-500 overflow-hidden rounded-lg shadow-lg lg:w-1/5 md:w-1/3 sm:w-screen'>

                    <a href='#'>
                        <img alt='immagineProdotto' class='block h-auto w-full' src='{$this->linkImmagine}' />

                    <header class='flex items-center justify-between leading-tight p-2 md:p-4'>
                        <h1 class='text-lg'>
                            <a class='no-underline hover:underline text-black' href='#'>
                                Article Title
                            </a>
                        </h1>
                        <p class='text-grey-darker text-sm'>
                            14/4/19
                        </p>
                    </header>

                    <footer class='flex items-center justify-between leading-none p-2 md:p-4'>
                        <a class='flex items-center no-underline hover:underline text-black' href='#'>
                            <img alt='Placeholder' class='block rounded-full' src='https://picsum.photos/32/32/?random'>
                            <p class='ml-2 text-sm'>
                                Author Name
                            </p>
                        </a>
                        <a class='no-underline text-grey-darker hover:text-red-dark' href='#'>
                            <span class='hidden'>Like</span>
                            <i class='fa fa-heart'></i>
                        </a>
                    </footer>

                </article>
            ";
        }
    }


?>