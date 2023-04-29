<!DOCTYPE html>
<html lang="en">
<head>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>UNCP</title>
        <link rel="shortcut icon" href="img/uncok.png" />
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link rel="stylesheet" href="style.css" />
        <link href="https://unpkg.com/intro.js/minified/introjs.min.css" rel="stylesheet">
        <link href="https://unpkg.com/intro.js/themes/introjs-modern.css" rel="stylesheet">
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:wght@600&family=Lato&family=Roboto:ital,wght@0,400;1,500&display=swap"
            rel="stylesheet" />
        <style>
        #loader {
            display: none;
        }
        </style>
        <!--intro JS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/introjs.min.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/5.1.0/intro.min.js"></script>
        <!-- Google reCAPTCHA CDN -->
        <script src="https://www.google.com/recaptcha/api.js" async defer>
        </script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        <script src="https://cdn.tailwindcss.com?plugins=line-clamp"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/iconify/3.1.0/iconify.min.js" integrity="sha512-E5zagJczGRm5vRd4acej4RtUFCBd8JDedgljicTgnZrwLYzu4/GvImQ6VtJfxAtnPluq1b3tPNaz9yNuTKWQzw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
        <!-- <link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.1/dist/flowbite.min.css" /> -->
    {{-- <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        montserrat: ["Montserrat"],
                    },
                    colors: {
                        "dark-green": "#1E3F41",
                        "light-green": "#659093",
                        "cream": "#DDB07F",
                        "cgray": "#F5F5F5",
                    }
                }
            }
        }
    </script> --}}
    </head>
</head>
<body>
    {{-- sidebar --}}
    @include('layout.sidebar')

    <div class="w-auto h-full bg-slate-00 ml-1 mt-0 pt-0 bg-white">
        <div class="bg-[#008041] w-[1090px] h-52 pr-14 pt-7">
            <div class="flex justify-end items-center">
                <div class="text-white text-sm">
                    <div class="pr-6 text-right">
                        <span>Halo, Selamat Datang</span> <br>
                        <span class="font-bold">(Nama Dosen)</span>
                    </div>
                </div>
                    <div>
                        <img class="w-12" src="img/icons/profile.svg" alt="Profile Image">
                    </div>
            </div>
        </div>
        <div class="bg-white w-[1050px] h-full -mt-24 ml-5 mr-5 rounded-lg text-center flex items-center justify-center">
            <div class=" pt-52">
                <div class="flex justify-center">
                    <img class="pb-2 logo-uncp w-20 h-20" src="img/logo.png" alt="Logo Universitas Cokroaminoto Palopo">
                </div>
                <p class="text-lg font-bold text-gray-500 ">Halo, Selamat Datang <span class="text-amber-400">Admin!</span></p>
            </div>
        </div>
    </div>

</body>
</html>
