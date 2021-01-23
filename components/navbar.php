<?php
    session_start();
    $navContent = "";
    if(!array_key_exists('EMAIL', $_SESSION)){
        $navContent = "<a href='./login.php' class='text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium'>Login</a>";
    }
    else{
        $navContent = "<div class='absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0'>
                        <a href='./carrello.php'>
                            <button class='bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white'>
                                <span class='sr-only'>Vai al Carrello</span>
                                <img src='../assets/shopping-bag.svg'>
                            </button>
                        </a>

                    <!-- Profile dropdown -->
                    <div class='ml-3 relative'>
                        <div>
                            <button class='bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white' id='user-menu' aria-haspopup='true'>
                                <span class='sr-only'>Open user menu</span>
                                <img class='h-8 w-8 rounded-full' src='{$_SESSION["AVATAR"]}' alt='>
                            </button>
                        </div>
                        <!--
                            Profile dropdown panel, show/hide based on dropdown state.

                            Entering: 'transition ease-out duration-100'
                            From: 'transform opacity-0 scale-95'
                            To: 'transform opacity-100 scale-100'
                            Leaving: 'transition ease-in duration-75'
                            From: 'transform opacity-100 scale-100'
                            To: 'transform opacity-0 scale-95'
                        -->
                        <div class='show origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5' role='menu' aria-orientation='vertical' aria-labelledby='user-menu' id='drop'>
                            <a href='#' class='block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100' role='menuitem'>Your Profile</a>
                            <a href='#' class='block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100' role='menuitem'>Settings</a>
                            <a href='./logout.php' class='block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100' role='menuitem'>Sign out</a>
                        </div>
                    </div>";
    }


    
    $nav = "<nav class='bg-gray-800'>
        <div class='max-w-7xl mx-auto px-2 sm:px-6 lg:px-8'>
            <div class='relative flex items-center justify-between h-16'>
                <div class='absolute inset-y-0 left-0 flex items-center sm:hidden'>
                    <!-- Mobile menu button-->
                    <button class='inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white' aria-expanded='false' id='burger'>
                        <span class='sr-only'>Open main menu</span>
                        <!-- Icon when menu is closed. -->
                        <!--
                Heroicon name: menu

                Menu open: 'hidden', Menu closed: 'block'
            -->
                        <svg class='block h-6 w-6' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor' aria-hidden='true'>
                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 6h16M4 12h16M4 18h16' />
                        </svg>
                        <!-- Icon when menu is open. -->
                        <!--
                Heroicon name: x

                Menu open: 'block', Menu closed: 'hidden'
            -->
                        <svg class='hidden h-6 w-6' xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' stroke='currentColor' aria-hidden='true'>
                            <path stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M6 18L18 6M6 6l12 12' />
                        </svg>
                    </button>
                </div>
                <div class='flex-1 flex items-center justify-center sm:items-stretch sm:justify-start'>
                    <div class='flex-shrink-0 flex items-center'>
                        <img class='h-8 w-auto' src='../assets/terminal.svg' alt='Workflow'>
                    </div>
                    <div class='hidden sm:block sm:ml-6'>
                        <div class='flex space-x-4'>
                            <!-- Current: 'bg-gray-900 text-white', Default: 'text-gray-300 hover:bg-gray-700 hover:text-white' -->
                            <a href='./prodotti.php' class='bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium'>Prodotti</a>

                            <div class='relative mx-auto text-gray-600'>
                                <form method='POST' action='./prodotti.php'>
                                    <input class='border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none' type='search'
                                        name='search' placeholder='Search'>
                                    <button type='submit' class='absolute right-0 top-0 mt-2 mr-2'>
                                        <img src='../assets/search.svg'/>
                                    </button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
                $navContent
                </div>
            </div>
        </div>

        <!--
        Mobile menu, toggle classes based on menu state.

        Menu open: 'block', Menu closed: 'hidden'
    -->
        <div class='hidden sm:hidden' id='burger-menu'>
            <div class='px-2 pt-2 pb-3 space-y-1'>
                <!-- Current: 'bg-gray-900 text-white', Default: 'text-gray-300 hover:bg-gray-700 hover:text-white' -->
                <a href='#' class='bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium'>Prodotti</a>
                <div class='relative mx-auto text-gray-600'>
                    <form method='POST' action='./prodotti.php'>
                        <input class='border-2 border-gray-300 bg-white h-10 px-5 pr-16 rounded-lg text-sm focus:outline-none' type='search'
                            name='search' placeholder='Search'>
                        <button type='submit' class='absolute right-0 top-0 mt-2 mr-2 text-white-500'>
                            <img src='../assets/search.svg'/>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
    <style>
        .show{
            display:none;
        }
    </style>
    <script>
        try{
            document.getElementById('user-menu').addEventListener('click', ()=>{
                document.getElementById('drop').classList.toggle('show');
            });
        }catch(e){}
        
        document.getElementById('burger').addEventListener('click', () => {
            document.getElementById('burger-menu').classList.toggle('hidden');
        });

    </script>

    ";


?>
