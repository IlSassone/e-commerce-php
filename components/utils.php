<?php

    $navbar = '<!-- This example requires Tailwind CSS v2.0+ -->
        <nav class="bg-gray-800">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <!-- Icon when menu is closed. -->
                <!--
                    Heroicon name: menu

                    Menu open: "hidden", Menu closed: "block"
                -->
                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <!-- Icon when menu is open. -->
                <!--
                    Heroicon name: x

                    Menu open: "block", Menu closed: "hidden"
                -->
                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
                </button>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0 flex items-center">
                <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">
                <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">
                </div>
                <div class="hidden sm:block sm:ml-6">
                <div class="flex space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="#" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">Dashboard</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Team</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Projects</a>
                    <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Calendar</a>
                </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button class="bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: bell -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
                </button>

                <!-- Profile dropdown -->
                <div class="ml-3 relative">
                <div>
                    <button class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                    <span class="sr-only">Open user menu</span>
                    <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                    </button>
                </div>
                <!--
                    Profile dropdown panel, show/hide based on dropdown state.

                    Entering: "transition ease-out duration-100"
                    From: "transform opacity-0 scale-95"
                    To: "transform opacity-100 scale-100"
                    Leaving: "transition ease-in duration-75"
                    From: "transform opacity-100 scale-100"
                    To: "transform opacity-0 scale-95"
                -->
                <div class="origin-top-right absolute right-0 mt-2 w-48 rounded-md shadow-lg py-1 bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="user-menu">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Your Profile</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Sign out</a>
                </div>
                </div>
            </div>
            </div>
        </div>

        <!--
            Mobile menu, toggle classes based on menu state.

            Menu open: "block", Menu closed: "hidden"
        -->
        <div class="hidden sm:hidden">
            <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="#" class="bg-gray-900 text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Team</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Projects</a>
            <a href="#" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
            </div>
        </div>
        </nav>
';

    $login = "<div class='min-h-screen flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8'>
        <div class='max-w-md w-full space-y-8'>
            <div>
                <img class='mx-auto h-12 w-auto' src='../assets/lock.svg'
                    alt='Workflow'>
                <h2 class='mt-6 text-center text-3xl font-extrabold text-gray-900'>
                    Sign in to your account
                </h2>
                <p class='mt-2 text-center text-sm text-gray-600'>
                    Or
                    <a href='#' class='font-medium text-indigo-600 hover:text-indigo-500'>
                        sign-up now
                    </a>
                </p>
            </div>
            <form class='mt-8 space-y-6' action='#' method='POST'>
                <input type='hidden' name='remember' value='true'>
                <div class='rounded-md shadow-sm -space-y-px'>
                    <div>
                        <label for='email-address' class='sr-only'>Email address</label>
                        <input id='email-address' name='email' type='email' autocomplete='email' required
                            class='appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm'
                            placeholder='Email address'>
                    </div>
                    <div>
                        <label for='password' class='sr-only'>Password</label>
                        <input id='password' name='password' type='password' autocomplete='current-password' required
                            class='appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm'
                            placeholder='Password'>
                    </div>
                </div>

                <div class='flex items-center justify-between'>
                    <div class='flex items-center'>
                        <input id='remember_me' name='remember_me' type='checkbox'
                            class='h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-gray-300 rounded'>
                        <label for='remember_me' class='ml-2 block text-sm text-gray-900'>
                            Remember me
                        </label>
                    </div>

                    <div class='text-sm'>
                        <a href='#' class='font-medium text-indigo-600 hover:text-indigo-500'>
                            Forgot your password?
                        </a>
                    </div>
                </div>

                <div>
                    <button type='submit'
                        class='group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500'>
                        <span class='absolute left-0 inset-y-0 flex items-center pl-3'>
                            <!-- Heroicon name: lock-closed -->
                            <svg class='h-5 w-5 text-indigo-500 group-hover:text-indigo-400'
                                xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20' fill='currentColor'
                                aria-hidden='true'>
                                <path fill-rule='evenodd'
                                    d='M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z'
                                    clip-rule='evenodd' />
                            </svg>
                        </span>
                        Sign in
                    </button>
                </div>
            </form>
        </div>
    </div>";



?>