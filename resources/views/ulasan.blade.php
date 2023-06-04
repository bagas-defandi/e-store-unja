<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ulasan</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between md:justify-normal mx-auto p-4">
            <a href="{{ url('/home') }}" class="flex items-center">
                <img src="./img/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
            </a>
            <div class="relative hidden md:block">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Search icon</span>
                </div>
                <input type="text" id="search-navbar"
                    class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search...">
            </div>
            <div class="flex items-center md:order-2">
                <button type="button"
                    class="flex mr-3 text-sm bg-gray-800 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                    id="user-menu-button" aria-expanded="false" data-dropdown-toggle="user-dropdown"
                    data-dropdown-placement="bottom">
                    <span class="sr-only">Open user menu</span>
                    <img class="w-8 h-8 rounded-full" src="./img/profile.png" alt="user photo">
                </button>
                <!-- Dropdown menu -->
                <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow dark:bg-gray-700 dark:divide-gray-600"
                    id="user-dropdown">
                    <div class="px-4 py-3">
                        <span class="block text-sm text-gray-900 dark:text-white">Bagas Defandi</span>
                        <span
                            class="block text-sm  text-gray-500 truncate dark:text-gray-400">bagasdefandi@estore.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="{{ url('/profile') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Profile</a>
                        </li>
                        <li>
                            <a href="{{ url('/keranjang') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Keranjang</a>
                        </li>
                        <li>
                            <a href="{{ url('/login') }}"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Sign
                                out</a>
                        </li>
                    </ul>
                </div>
                <button data-collapse-toggle="mobile-menu-2" type="button"
                    class="inline-flex items-center p-2 ml-1 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="mobile-menu-2" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:ml-auto md:mr-8 md:w-auto md:order-1"
                id="mobile-menu-2">
                <div class="relative mt-3 md:hidden">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input type="text" id="search-navbar"
                        class="block w-full p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Search...">
                </div>
                <ul
                    class="flex flex-col font-medium p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="{{ url('/home') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-400 md:p-0 dark:text-white md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="{{ url('/keranjang') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-400 md:p-0 dark:text-white md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Keranjang</a>
                    </li>
                    <li>
                        <a href="{{ url('/about') }}"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-400 md:p-0 dark:text-white md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            About Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="max-w-7xl mx-auto px-4 sm:px-6 ff-raleway grid gap-8 md:grid-cols-2">
            <div class="md:mt-28">
                <div class="flex items-center">
                    <svg class="mt-7" width="89" height="89" viewBox="0 0 89 89" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_83_971)">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M50.6718 13.7033C48.7291 7.72441 40.2706 7.72437 38.3279 13.7033L33.529 28.4728C33.4049 28.8548 33.0489 29.1134 32.6473 29.1134H17.1178C10.8312 29.1134 8.21727 37.158 13.3033 40.8531L25.8669 49.9812C26.1919 50.2173 26.3278 50.6357 26.2037 51.0177L21.4048 65.7872C19.4622 71.7661 26.3053 76.7379 31.3913 73.0428L43.9549 63.9147C44.2799 63.6786 44.7199 63.6786 45.0448 63.9147L57.6084 73.0427C62.6944 76.7379 69.5376 71.7661 67.5949 65.7872L62.796 51.0177C62.6719 50.6357 62.8078 50.2173 63.1328 49.9812L75.6964 40.8531C80.7824 37.158 78.1686 29.1134 71.882 29.1134H56.3524C55.9508 29.1134 55.5948 28.8548 55.4707 28.4728L50.6718 13.7033Z"
                                fill="#FAFF00" />
                        </g>
                        <defs>
                            <filter id="filter0_d_83_971" x="10.6157" y="9.21912" width="70.7681"
                                height="66.0924" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix"
                                    values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dx="3" dy="1" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix"
                                    result="effect1_dropShadow_83_971" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_83_971"
                                    result="shape" />
                            </filter>
                        </defs>
                    </svg>
                    <p class="font-bold text-3xl"><span class="text-8xl">4.5</span>/5.0</p>
                </div>
                <div class="flex items-center">
                    <div class="flex gap-1 items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <span class="font-bold text-lg mb-1">5</span>
                    </div>
                    <div class="w-full h-4 ml-2 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="h-4 bg-blue-400 rounded-full dark:bg-blue-300" style="width: 80%"></div>
                    </div>
                </div>
                <div class="flex items-center -mt-1.5">
                    <div class="flex gap-1 items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <span class="font-bold text-lg mb-1">4</span>
                    </div>
                    <div class="w-full h-4 ml-2 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="h-4 bg-blue-400 rounded-full dark:bg-blue-300" style="width: 50%"></div>
                    </div>
                </div>
                <div class="flex items-center -mt-1.5">
                    <div class="flex gap-1 items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <span class="font-bold text-lg mb-1">3</span>
                    </div>
                    <div class="w-full h-4 ml-2 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="h-4 bg-blue-400 rounded-full dark:bg-blue-300" style="width: 10%"></div>
                    </div>
                </div>
                <div class="flex items-center -mt-1.5">
                    <div class="flex gap-1 items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <span class="font-bold text-lg mb-0.5">2</span>
                    </div>
                    <div class="w-full h-4 ml-2 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="h-4 bg-blue-400 rounded-full dark:bg-blue-300" style="width: 15%"></div>
                    </div>
                </div>
                <div class="flex items-center -mt-1.5">
                    <div class="flex gap-1 items-center">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <span class="font-bold text-lg mb-0.5">1</span>
                    </div>
                    <div class="w-full h-4 ml-2 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class="h-4 bg-blue-400 rounded-full dark:bg-blue-300" style="width: 5%"></div>
                    </div>
                </div>
            </div>
            <div class="bg-white py-5 px-6 rounded-xl mb-4 md:mt-10">
                <h1 class="font-bold text-xl">Ulasan Pembeli</h1>
                <div class="mt-7">
                    <div class="flex">
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                    </div>
                    <div class="flex gap-2 mb-4 mt-2">
                        <svg width="85" height="85" viewBox="0 0 85 85" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="42.2132" cy="42.5518" r="42.2132" fill="#307FE2" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M42.2135 13.5303C32.7423 13.5303 25.0644 21.2082 25.0644 30.6794C25.0644 40.1506 32.7423 47.8285 42.2135 47.8285C51.6847 47.8285 59.3626 40.1506 59.3626 30.6794C59.3626 21.2082 51.6847 13.5303 42.2135 13.5303Z"
                                fill="white" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M42.2135 42.5519C28.5773 42.5519 16.8847 51.1552 13.9114 63.0707C12.678 68.0135 16.9725 71.5735 21.1069 71.5735H63.3201C67.4545 71.5735 71.749 68.0135 70.5156 63.0707C67.5423 51.1552 55.8497 42.5519 42.2135 42.5519Z"
                                fill="white" />
                        </svg>
                        <div class="mt-2">
                            <p class="font-bold">An**i Y**o</p>
                            <p class="mt-2">1 hari yang lalu</p>
                        </div>
                    </div>
                    <p>Tehnya enak sekali saya sangat suka</p>
                </div>
                <div class="mt-7">
                    <div class="flex">
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#A1A1A1" />
                        </svg>
                    </div>
                    <div class="flex gap-2 mb-4 mt-2">
                        <svg width="85" height="85" viewBox="0 0 85 85" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="42.2132" cy="42.5518" r="42.2132" fill="#FF6B00" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M42.2135 13.5303C32.7423 13.5303 25.0644 21.2082 25.0644 30.6794C25.0644 40.1506 32.7423 47.8285 42.2135 47.8285C51.6847 47.8285 59.3626 40.1506 59.3626 30.6794C59.3626 21.2082 51.6847 13.5303 42.2135 13.5303Z"
                                fill="#868686" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M42.2135 42.5519C28.5773 42.5519 16.8847 51.1552 13.9114 63.0707C12.678 68.0135 16.9725 71.5735 21.1069 71.5735H63.3201C67.4545 71.5735 71.749 68.0135 70.5156 63.0707C67.5423 51.1552 55.8497 42.5519 42.2135 42.5519Z"
                                fill="#868686" />
                        </svg>
                        <div class="mt-2">
                            <p class="font-bold">Al*f M.An**r T******n</p>
                            <p class="mt-2">2 bulan yang lalu</p>
                        </div>
                    </div>
                    <p>Pengantaran cepat, packing rapih, tehnya juga enak
                        tetapi kurir tidak professional</p>
                </div>
                <div class="mt-7">
                    <div class="flex">
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#FAFF00" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#A1A1A1" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#A1A1A1" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#A1A1A1" />
                        </svg>
                        <svg width="29" height="29" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                fill="#A1A1A1" />
                        </svg>
                    </div>
                    <div class="flex gap-2 mb-4 mt-2">
                        <svg width="85" height="85" viewBox="0 0 85 85" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="42.2132" cy="42.5518" r="42.2132" fill="#FF0000" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M42.2135 13.5303C32.7423 13.5303 25.0644 21.2082 25.0644 30.6794C25.0644 40.1506 32.7423 47.8285 42.2135 47.8285C51.6847 47.8285 59.3626 40.1506 59.3626 30.6794C59.3626 21.2082 51.6847 13.5303 42.2135 13.5303Z"
                                fill="black" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M42.2135 42.5519C28.5773 42.5519 16.8847 51.1552 13.9114 63.0707C12.678 68.0135 16.9725 71.5735 21.1069 71.5735H63.3201C67.4545 71.5735 71.749 68.0135 70.5156 63.0707C67.5423 51.1552 55.8497 42.5519 42.2135 42.5519Z"
                                fill="black" />
                        </svg>
                        <div class="mt-2">
                            <p class="font-bold">Ad** Y******** Riz*****h</p>
                            <p class="mt-2">2 tahun yang lalu</p>
                        </div>
                    </div>
                    <p>Jangan beli disini, barang sudah 2 minggu tidak sampai-sampai
                        tidak direkomendasikan.</p>
                </div>
            </div>
        </section>
    </main>
</body>

</html>
