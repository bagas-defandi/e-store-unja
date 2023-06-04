<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-white py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <img src="./img/logo.png" alt="">
                <h1 class="heading-login text-2xl sm:text-3xl font-bold ml-3 uppercase">E-Store Unja</h1>
            </div>
        </div>
    </header>
    <main>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:grid grid-cols-2 gap-32">
            <div class="grid py-10 lg:mt-8">
                <img class="justify-self-center" src="./img/ilustrasi-login.png" alt="">
                <h2 class="heading-tagline-login justify-self-center max-w-3xl my-5 text-3xl font-black italic">
                    e-Store Kampus Unja:
                    Tempat Terbaik untuk Belanja Online Mahasiswa Unja!
                </h2>
                <p class="max-w-prose justify-self-center">
                    Dengan e-Store Unja, mahasiswa dan dosen dapat menikmati pengalaman belanja online yang
                    menyenangkan,
                    cepat, dan aman. Ribuan produk berkualitas yang ditawarkan oleh baik mahasiswa maupun dosen dari
                    berbagai kategori di e-Store Unja, lengkap dengan deskripsi, foto, dan ulasan dari pengguna lainnya.
                    Kemudahan akses dan navigasi yang intuitif membuat e-Store Unja menjadi pilihan utama untuk memenuhi
                    kebutuhan belanja online seluruh warga kampus.
                </p>
            </div>
            <div class="grid justify-items-center lg:mt-40">
                <div class="grid justify-items-center bg-white w-full max-w-xl pt-14 px-9 pb-24 mb-6 rounded-xl">
                    <img src="./img/icon-profile-login.png" alt="">
                    <form class="w-full text-center" action="{{ url('/home') }}" method="POST">
                        @csrf
                        <input class="nim-input placeholder-black w-full my-8 block p-3 rounded-sm" type="text"
                            id="nim" name="nim" placeholder="NIM/NIP">
                        <input class="pass-input placeholder-black w-full my-8 block p-3 rounded-sm" type="password"
                            name="password" id="password" placeholder="**************">
                        <input class="btn-submit-login w-52 py-3 rounded-3xl" type="submit" value="Login">
                    </form>
                </div>
                <a href="{{ url('/penjual/login') }}"
                    class="text-white font-bold my-4 hover:cursor-pointer hover:underline hover:underline-offset-8">Login
                    sebagai
                    penjual
                    <svg class="inline -m-2" width="42" height="42" viewBox="0 0 42 42" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M10.9375 21C10.9375 20.2751 11.5251 19.6875 12.25 19.6875H28.875C29.5999 19.6875 30.1875 20.2751 30.1875 21C30.1875 21.7249 29.5999 22.3125 28.875 22.3125H12.25C11.5251 22.3125 10.9375 21.7249 10.9375 21Z"
                            fill="white" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M22.6969 13.9469C23.2095 13.4344 24.0405 13.4344 24.5531 13.9469L30.6781 20.0719C31.1906 20.5845 31.1906 21.4155 30.6781 21.9281L24.5531 28.0531C24.0405 28.5656 23.2095 28.5656 22.6969 28.0531C22.1844 27.5405 22.1844 26.7095 22.6969 26.1969L27.8938 21L22.6969 15.8031C22.1844 15.2905 22.1844 14.4595 22.6969 13.9469Z"
                            fill="white" />
                    </svg>
                </a>
            </div>
        </div>
    </main>
</body>

</html>
