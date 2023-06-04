<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang</title>
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
                            class="block py-2 pl-3 pr-4 text-white bg-amber-400 rounded md:bg-transparent md:text-amber-400 md:p-0 md:dark:text-amber-300"
                            aria-current="page">Keranjang</a>
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
        <div class="max-w-7xl mx-auto ff-raleway px-4 mb-5 grid gap-10 md:grid-cols-5 md:gap-5 lg:gap-10">
            <section class="md:col-span-3">
                <h1 class="font-bold text-2xl mt-5 mb-2">Keranjang</h1>
                <div class="bg-white p-3 rounded">
                    <div class="flex items-center">
                        <input checked id="pilih-semua" type="checkbox" value=""
                            class="w-5 h-5 text-amber-400 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                        <label for="pilih-semua"
                            class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Pilih
                            Semua</label>
                        <a class="ml-auto text-amber-400 font-bold" href="">Hapus</a>
                    </div>
                </div>

                <div class="mt-6 grid gap-6">
                    <div class="bg-white p-3 rounded">
                        <div>
                            <input checked id="toko-1" type="checkbox" value=""
                                class="w-5 h-5 text-amber-400 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="toko-1" class="ml-2 text-sm font-bold text-black">Warung
                                Mak Ijah</label>
                        </div>
                        <div class="flex items-center gap-2 py-6">
                            <input checked id="product-1-toko-1" type="checkbox" value=""
                                class="w-5 h-5 text-amber-400 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <img class="product rounded-lg" src="./img/product-1.jpg" alt="">
                            <div style="height: 77px" class="flex flex-col justify-center">
                                <label for="product-1-toko-1" class="text-sm font-medium text-black self-start">
                                    Indomie Goreng 85gr</label>
                                <p class="font-medium text-xs">Rasa Original</p>
                                <p class="text-sm font-bold mt-auto">Rp3000</p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <a class="" href="#">
                                <img src="./img/delete.png" alt="">
                            </a>
                            <div class="flex gap-2 ml-5">
                                <a href="#">
                                    <img src="./img/remove.png" alt="">
                                </a>
                                <p>1</p>
                                <a href="#">
                                    <img src="./img/add.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-3 rounded">
                        <div>
                            <input checked id="toko-2" type="checkbox" value=""
                                class="w-5 h-5 text-amber-400 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="toko-2" class="ml-2 text-sm font-bold text-black">R4 Store</label>
                        </div>
                        <div class="flex items-center gap-2 py-6">
                            <input checked id="product-1-toko-2" type="checkbox" value=""
                                class="w-5 h-5 text-amber-400 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <img class="product rounded-lg" src="./img/product-2.jpg" alt="">
                            <div style="height: 77px" class="flex flex-col justify-center">
                                <label for="product-1-toko-2" class="text-sm font-medium text-black self-start">
                                    Teh Celup Sosro isi 15pcs</label>
                                <p class="text-sm font-bold mt-auto">Rp5000</p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <a class="" href="#">
                                <img src="./img/delete.png" alt="">
                            </a>
                            <div class="flex gap-2 ml-5">
                                <a href="#">
                                    <img src="./img/remove.png" alt="">
                                </a>
                                <p>1</p>
                                <a href="#">
                                    <img src="./img/add.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white p-3 rounded">
                        <div>
                            <input checked id="toko-3" type="checkbox" value=""
                                class="w-5 h-5 text-amber-400 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="toko-3" class="ml-2 text-sm font-bold text-black">Warung Indomaret</label>
                        </div>
                        <div class="flex items-center gap-2 py-6">
                            <input checked id="product-1-toko-3" type="checkbox" value=""
                                class="w-5 h-5 text-amber-400 bg-gray-100 border-gray-300 rounded focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <img class="product rounded-lg" src="./img/product-3.jpg" alt="">
                            <div style="height: 77px" class="flex flex-col justify-center">
                                <label for="product-1-toko-3" class="text-sm font-medium text-black self-start">
                                    Luwak White Coffee 10 pcs</label>
                                <p class="text-sm font-bold mt-auto">Rp12000</p>
                            </div>
                        </div>
                        <div class="flex justify-end">
                            <a class="" href="#">
                                <img src="./img/delete.png" alt="">
                            </a>
                            <div class="flex gap-2 ml-5">
                                <a href="#">
                                    <img src="./img/remove.png" alt="">
                                </a>
                                <p>1</p>
                                <a href="#">
                                    <img src="./img/add.png" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="md:col-span-2 md:mt-32">
                <div class="bg-white p-5 grid rounded-md">
                    <h2 class="font-bold text-xl mb-5">Total Belanjaan</h2>
                    <div class="flex justify-between">
                        <p>Indomie Goreng</p>
                        <div class="flex gap-2">
                            <p>2</p>
                            <p>Rp.3000</p>
                            <p class="font-bold">Rp.6000</p>
                        </div>
                    </div>
                    <div class="flex justify-between">
                        <p>Teh Celup Sosro</p>
                        <div class="flex gap-2 mb-5">
                            <p>1</p>
                            <p>Rp.5000</p>
                            <p class="font-bold">Rp.5000</p>
                        </div>
                    </div>
                    <div class="flex justify-between pt-5 border-t-2 border-top">
                        <p>Total Harga</p>
                        <p class="font-bold">Rp.11000</p>
                    </div>
                    <a href="#"
                        class="inline-block bg-amber-400 w-min justify-self-center font-bold text-white py-3 px-24 mt-20 mb-6 hover:bg-amber-500">Beli</a>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
