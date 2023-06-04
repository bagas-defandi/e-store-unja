<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat Akun Penjual</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <header class="bg-white py-2">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center">
                <img src="../img/logo.png" alt="">
                <h1 class="heading-login text-2xl sm:text-3xl font-bold ml-3 uppercase">E-Store Unja</h1>
            </div>
        </div>
    </header>

    <main>
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid justify-items-center">
            <div class="w-full bg-white p-5 lg:py-7 lg:px-10 mt-16 rounded-md ff-raleway max-w-3xl lg:max-w-6xl">
                <h1 class="font-bold text-center text-black text-2xl">Create Account Penjual</h1>
                <form action="{{ url('penjual/login') }}" method="POST" class="grid gap-7 mt-11 lg:ml-24">
                    @csrf
                    <div>
                        <p class="font-semibold mb-2"><label for="username">Username</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="username" name="username"
                            type="text">
                    </div>
                    <div class="">
                        <p class="font-semibold mb-2"><label for="nama_lengkap">Nama Lengkap</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="nama_lengkap" name="nama_lengkap"
                            type="text">
                    </div>
                    <div>
                        <p class="font-semibold mb-2 uppercase"><label for="nim">Nim</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="nim" name="nim"
                            type="text">
                    </div>
                    <div>
                        <p class="font-semibold mb-2"><label for="password">Password</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="password" name="password"
                            type="password">
                    </div>
                    <div>
                        <p class="font-semibold mb-2"><label for="nama_toko">Nama Toko</label></p>
                        <input class="w-full lg:w-3/5 border-amber-400 border-2" id="nama_toko" name="nama_toko"
                            type="text">
                    </div>
                    <div class="justify-self-center lg:justify-self-start">
                        <input class="bg-amber-400 text-white py-3 px-20 font-bold rounded-full hover:bg-amber-500"
                            type="submit" value="Sign Up">
                    </div>
                </form>

                <p class="mt-6 font-bold lg:ml-24">Sudah mempunyai akun penjual? Silahkan
                    <a class="hover:underline hover:underline-offset-4" href="{{ url('/penjual/login') }}"
                        style="color: #3A16C9">Login</a>
                </p>
            </div>

            <a href="{{ url('/login') }}"
                class="text-white font-bold my-4 hover:cursor-pointer hover:underline hover:underline-offset-8">Login
                sebagai
                pembeli
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
        </section>
    </main>
</body>

</html>
