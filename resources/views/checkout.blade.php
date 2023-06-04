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
        <div class="max-w-7xl mx-auto ff-raleway px-4 mb-5 grid gap-10 md:grid-cols-5 md:gap-3 lg:gap-10">
            <section class="md:col-span-3">
                <h1 class="font-bold text-2xl my-7">Checkout</h1>

                <h2 class="font-semibold">Pilih Metode Pembayaran</h2>
                <div class="grid gap-6">
                    <div class="bg-white p-3 rounded">
                        <div class="flex items-center mb-4">
                            <input checked id="e-wallet" type="radio" value="" name="metode-pembayaran"
                                class="w-7 h-7 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">

                            <label for="e-wallet"
                                class="ml-3 font-semibold text-gray-900 dark:text-gray-300 flex items-center gap-2">
                                <svg width="23" height="19" viewBox="0 0 27 23" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M15.7556 9.52087C15.5298 9.52087 15.3467 9.70018 15.3467 9.92136V12.9132C15.3467 13.1344 15.5298 13.3137 15.7556 13.3137H24.7511C24.9769 13.3137 25.16 13.1344 25.16 12.9132V9.92136C25.16 9.70018 24.9769 9.52087 24.7511 9.52087H15.7556ZM21.2707 0.00106318C22.5153 0.0603343 23.411 0.307032 23.9769 0.829059C24.5374 1.34605 24.8256 2.0948 24.882 3.08475V5.92153C24.882 6.41919 24.4701 6.82262 23.962 6.82262C23.4539 6.82262 23.042 6.41919 23.042 5.92153L23.0435 3.13627C23.0134 2.62074 22.891 2.30302 22.7154 2.141C22.5452 1.98401 22.0275 1.84142 21.226 1.80219L3.57381 1.80151C2.84788 1.82909 2.37718 1.96682 2.14879 2.1628C1.97315 2.31352 1.84148 2.7277 1.84 3.44329L1.8359 19.367C1.90318 20.0632 2.05659 20.5265 2.25204 20.7584C2.40026 20.9343 2.86092 21.1109 3.53815 21.196L21.2449 21.1961C22.0737 21.2128 22.5628 21.0885 22.7269 20.9217C22.9089 20.7367 23.042 20.2497 23.042 19.4519V16.6863C23.042 16.1887 23.4539 15.7852 23.962 15.7852C24.4701 15.7852 24.882 16.1887 24.882 16.6863V19.4519C24.882 20.6715 24.6333 21.5812 24.0518 22.1723C23.4523 22.7816 22.4991 23.0239 21.226 22.9981L3.42967 22.9919C2.21848 22.851 1.34873 22.5176 0.833029 21.9056C0.364566 21.3498 0.102945 20.5597 0 19.4519V3.44146C0.00246199 2.25675 0.285818 1.36542 0.93628 0.807256C1.53399 0.294357 2.39371 0.0427973 3.53815 0L21.2707 0.00106318ZM24.7511 7.71868C25.9931 7.71868 27 8.70486 27 9.92136V12.9132C27 14.1297 25.9931 15.1159 24.7511 15.1159H15.7556C14.5136 15.1159 13.5067 14.1297 13.5067 12.9132V9.92136C13.5067 8.70486 14.5136 7.71868 15.7556 7.71868H24.7511ZM18.0045 10.3425C17.3835 10.3425 16.88 10.8291 16.88 11.4295C16.88 12.0298 17.3835 12.5165 18.0045 12.5165C18.6255 12.5165 19.1289 12.0298 19.1289 11.4295C19.1289 10.8291 18.6255 10.3425 18.0045 10.3425Z"
                                        fill="#1E1E1E" />
                                </svg>
                                E-wallet
                            </label>
                        </div>
                        <ul
                            class="flex flex-col items-center gap-3 md:items-start md:flex-row md:ml-7 md:pb-10 md:mt-16">
                            <li class="flex items-center">
                                <input id="gopay" type="radio" value="" name="e-wallet"
                                    class="w-4 h-4 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="gopay"
                                    class="bg-amber-400 rounded-sm pt-3 pb-2 px-2 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <img src="./img/gopay.png" alt="">
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="dana" type="radio" value="" name="e-wallet"
                                    class="w-4 h-4 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="dana"
                                    class="bg-amber-400 rounded-sm py-3 px-2 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <img src="./img/dana.png" alt="">
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="ovo" type="radio" value="" name="e-wallet"
                                    class="w-4 h-4 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="ovo"
                                    class="bg-amber-400 rounded-sm py-3 px-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <img src="./img/ovo.png" alt="">
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="spay" type="radio" value="" name="e-wallet"
                                    class="w-4 h-4 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="spay"
                                    class="bg-amber-400 rounded-sm py-2 px-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <img src="./img/spay.png" alt="">
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white p-3 rounded">
                        <div class="flex items-center mb-4">
                            <input checked id="bank-transfer" type="radio" value="" name="metode-pembayaran"
                                class="w-7 h-7 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-500 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <svg class="ml-4" width="28" height="28" viewBox="0 0 33 33" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_83_2189)">
                                    <path
                                        d="M5.5 13.75V23.375H9.625V13.75H5.5ZM13.75 13.75V23.375H17.875V13.75H13.75ZM2.75 30.25H28.875V26.125H2.75V30.25ZM22 13.75V23.375H26.125V13.75H22ZM15.8125 1.375L2.75 8.25V11H28.875V8.25L15.8125 1.375Z"
                                        fill="#6A6A6A" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_83_2189">
                                        <rect width="33" height="33" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>

                            <label for="bank-transfer"
                                class="ml-2 text-sm font-semibold text-gray-900 dark:text-gray-300">Bank
                                Transfer</label>
                        </div>
                        <ul
                            class="flex flex-col items-center gap-3 md:items-start md:flex-row md:ml-7 md:pb-10 md:mt-16">
                            <li class="flex items-center">
                                <input id="bni" type="radio" value="" name="bank"
                                    class="w-4 h-4 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="bni"
                                    class="bg-amber-400 rounded-sm py-3 px-2 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <img src="./img/bni.png" alt="">
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="bri" type="radio" value="" name="bank"
                                    class="w-4 h-4 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="bri"
                                    class="bg-amber-400 rounded-sm py-3 px-2 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <img src="./img/bri.png" alt="">
                                </label>
                            </li>
                            <li class="flex items-center">
                                <input id="bca" type="radio" value="" name="bank"
                                    class="w-4 h-4 text-amber-400 bg-gray-100 border-gray-300 focus:ring-amber-500 dark:focus:ring-amber-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500">
                                <label for="bca"
                                    class="bg-amber-400 rounded-sm py-3 px-4 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    <img src="./img/bca.png" alt="">
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>

                <h2 class="font-semibold mt-8 mb-1">Tentukan Titik Antar</h2>
                <div class="bg-white p-8 rounded">
                    <label for="fakultas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Pilih Fakultas
                    </label>
                    <select id="fakultas"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected value="FST">Fakultas Sains & Teknologi</option>
                        <option value="hukum">Fakultas Hukum</option>
                        <option value="kedokteran">Fakultas Kedokteran Dan Ilmu Kesehatan</option>
                        <option value="feb">Fakultas Ekonomi & Bisnis</option>
                        <option value="peternakan">Fakultas Peternakan</option>
                        <option value="pertanian">Fakultas Pertanian</option>
                        <option value="kehutanan">Fakultas Kehutanan</option>
                        <option value="fkip">Fakultas Keguruan Dan Ilmu Pendidikan</option>
                    </select>
                </div>
            </section>

            <section class="md:col-span-2 md:mt-32">
                <div class="bg-white p-5 grid rounded-md">
                    <h2 class="font-bold text-xl mb-5">Ringkasan Belanja</h2>
                    <div class="flex gap-2 py-6 border-t-2">
                        <img class="product-checkout rounded-lg" src="./img/product-1.jpg" alt="">
                        <div class="flex flex-col h-3/5 grow">
                            <p for="product-1-toko-1" class="text-sm font-medium text-black self-start lg:text-base">
                                Indomie Goreng 85gr</p>
                            <p class="font-medium text-xs lg:text-sm">Rasa Original</p>
                            <p class="text-sm font-bold self-end mt-auto lg:text-base">Rp3000</p>
                        </div>
                    </div>
                    <div class="flex gap-2 py-6 border-t-2">
                        <img class="product-checkout rounded-lg" src="./img/product-2.jpg" alt="">
                        <div class="flex flex-col h-3/5 grow">
                            <p for="product-1-toko-1" class="text-sm font-medium text-black self-start lg:text-base">
                                Teh Celup Sosro isi 15pcs</p>
                            <p class="text-sm font-bold self-end mt-auto lg:text-base">Rp5000</p>
                        </div>
                    </div>

                    <div class="py-5 border-t-2">
                        <div class="flex justify-between">
                            <p>Harga Belanjaan</p>
                            <p class="">Rp.8000</p>
                        </div>
                        <div class="flex justify-between">
                            <p>Jumlah Barang</p>
                            <p class="">2</p>
                        </div>
                    </div>

                    <div class="flex justify-between pt-5 border-t-2">
                        <p>Total Pesanan (2 Produk)</p>
                        <p class="font-bold">Rp.8000</p>
                    </div>
                    <a
                        href="#"class="inline-block bg-amber-400 justify-self-center font-bold text-black text-xl rounded-lg py-3 px-14 mt-20 mb-6 hover:bg-amber-500">
                        Buat Pesanan
                    </a>
                </div>
            </section>
        </div>
    </main>
</body>

</html>
