<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Produk</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <nav class="bg-white border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between md:justify-normal mx-auto p-4">
            <a href="#" class="flex items-center">
                <img src="../img/logo.png" class="h-8 mr-3" alt="Flowbite Logo" />
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
                    <img class="w-8 h-8 rounded-full" src="../img/profile.png" alt="user photo">
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

            </div>
        </div>
    </nav>

    <main>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <section class="bg-white text-black px-5 py-6 rounded-lg mt-6 mb-4 md:mt-9">
                <h2 class="text-xl font-bold pb-1 mb-4 lg:mb-10">SiniMakan : Aldi Sukma Putra</h2>
                <div class="grid justify-items-center gap-4 sm:grid-cols-2 md:grid-cols-3">
                    <div class="dashboard-menu">
                        <a href="#"
                            class="rounded-3xl bg-amber-400 p-6 grid justify-items-center hover:bg-amber-500">
                            <img src="../img/icon-pembelian.png" alt="">
                        </a>
                        <h3 class="ff-raleway font-bold text-lg lg:text-xl lg:mt-2">Data Pembelian</h3>
                    </div>
                    <div class="dashboard-menu pb-2 border-b-2 border-black">
                        <a href="#"
                            class="rounded-3xl bg-amber-400 p-6 grid justify-items-center hover:bg-amber-500">
                            <img src="../img/icon-produk.png" alt="">
                        </a>
                        <h3 class="ff-raleway font-bold text-lg lg:text-xl lg:mt-2">Kelola Produk</h3>
                    </div>
                    <div class="dashboard-menu">
                        <a href="#"
                            class="rounded-3xl bg-amber-400 p-6 grid justify-items-center hover:bg-amber-500">
                            <img src="../img/icon-pesanan.png" alt="">
                        </a>
                        <h3 class="ff-raleway font-bold text-lg lg:text-xl lg:mt-2">Proses Pesanan</h3>
                    </div>
                </div>
                <div class="mt-14 bg-gray-300 ff-raleway py-6 px-4 grid">
                    <div class="flex items-center ml-auto">
                        <a class="font-bold text-xl mr-2 hover:underline hover:underline-offset-8"
                            href="#">Tambah Produk
                        </a>
                        <img style="height: 24px" src="../img/add-black.png" alt="">
                    </div>
                    <div class="mt-4 flex flex-col gap-4 items-center md:flex-row md:gap-8">
                        <div class="w-fit">
                            <img class="product-manage rounded-lg" src="../img/product-1.jpg" alt="">
                            <div class="flex justify-between mt-1 font-semibold">
                                <a class="text-lime-500 hover:underline hover:underline-offset-4"
                                    href="#">Edit</a>
                                <a class="text-red-600 hover:underline hover:underline-offset-4"
                                    href="#">Hapus</a>
                            </div>
                        </div>
                        <div class="w-fit">
                            <img class="product-manage rounded-lg" src="../img/product-2.jpg" alt="">
                            <div class="flex justify-between mt-1 font-semibold">
                                <a class="text-lime-500 hover:underline hover:underline-offset-4"
                                    href="#">Edit</a>
                                <a class="text-red-600 hover:underline hover:underline-offset-4"
                                    href="#">Hapus</a>
                            </div>
                        </div>
                        <div class="w-fit">
                            <img class="product-manage rounded-lg" src="../img/product-4.png" alt="">
                            <div class="flex justify-between mt-1 font-semibold">
                                <a class="text-lime-500 hover:underline hover:underline-offset-4"
                                    href="#">Edit</a>
                                <a class="text-red-600 hover:underline hover:underline-offset-4"
                                    href="#">Hapus</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

</body>

</html>
