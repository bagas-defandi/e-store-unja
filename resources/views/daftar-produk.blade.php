<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between md:justify-normal mx-auto p-4">
            <a href="#" class="flex items-center">
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
                        <span class="block text-sm text-gray-900 dark:text-white">Bonnie Green</span>
                        <span class="block text-sm  text-gray-500 truncate dark:text-gray-400">name@flowbite.com</span>
                    </div>
                    <ul class="py-2" aria-labelledby="user-menu-button">
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Dashboard</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Settings</a>
                        </li>
                        <li>
                            <a href="#"
                                class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Earnings</a>
                        </li>
                        <li>
                            <a href="#"
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
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-400 md:p-0 dark:text-white md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Home</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-400 md:p-0 dark:text-white md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            Keranjang
                        </a>
                    </li>
                    <li>
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-amber-400 md:p-0 dark:text-white md:dark:hover:text-amber-300 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            About Us
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <section class="max-w-7xl mx-auto ff-raleway px-4 mb-5">
            <div class="ff-raleway text-black bg-white p-4 lg:py-7 lg:px-11 mt-6 rounded-lg">
                <h1 class="text-xl md:text-2xl font-bold mb-4">Makanan & Minuman</h1>
                <div
                    class="grid gap-8 justify-items-center sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5">
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-4.png" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Lemon Tea Rasa Lemon</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp15.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.9</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-5.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Kerupuk Udang 500gr</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp55.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">3.4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-1.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Indomie Goreng 85gr</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp3.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-2.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Teh Celup Sosro isi 15pcs</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp5.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-3.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Luwak White Coffee 10 pcs</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp12.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-4.png" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Lemon Tea Rasa Lemon</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp15.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.9</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-5.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Kerupuk Udang 500gr</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp55.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">3.4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-1.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Indomie Goreng 85gr</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp3.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-2.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Teh Celup Sosro isi 15pcs</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp5.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-3.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Luwak White Coffee 10 pcs</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp12.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-4.png" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Lemon Tea Rasa Lemon</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp15.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.9</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-5.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Kerupuk Udang 500gr</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp55.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">3.4</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-1.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Indomie Goreng 85gr</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp3.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-2.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Teh Celup Sosro isi 15pcs</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp5.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.0</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="max-width-300">
                        <img class="product-list rounded-t" src="./img/product-3.jpg" alt="">
                        <div class="bg-amber-400 p-3 rounded-b">
                            <p class="text-md font-semibold text-sm">Luwak White Coffee 10 pcs</p>
                            <div class="flex justify-between mt-12">
                                <p class="font-bold">Rp12.000</p>
                                <div class="grid justify-items-center">
                                    <svg width="26" height="26" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M13.6643 3.69531C13.1404 2.08302 10.8595 2.08301 10.3356 3.6953L9.04153 7.67808C9.00806 7.78109 8.91208 7.85083 8.80377 7.85083H4.61603C2.92077 7.85083 2.2159 10.0202 3.5874 11.0166L6.97536 13.4781C7.06298 13.5418 7.09964 13.6546 7.06618 13.7576L5.77209 17.7404C5.24823 19.3527 7.09356 20.6934 8.46506 19.697L11.853 17.2355C11.9406 17.1718 12.0593 17.1718 12.1469 17.2355L15.5349 19.6969C16.9064 20.6934 18.7517 19.3527 18.2278 17.7404L16.9338 13.7576C16.9003 13.6546 16.937 13.5418 17.0246 13.4781L20.4125 11.0166C21.784 10.0202 21.0792 7.85083 19.3839 7.85083H15.1962C15.0879 7.85083 14.9919 7.78109 14.9584 7.67808L13.6643 3.69531Z"
                                            fill="#FAFF00" />
                                    </svg>
                                    <p class="font-semibold text-sm">4.7</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </main>
</body>

</html>
