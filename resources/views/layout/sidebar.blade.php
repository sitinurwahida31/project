<div class="flex ">
    <!-- Left side (Sidebar) -->
    <div class="bg-white w-[270px] h-full sm:flex flex-col justify-between sidebar in-active hidden shadow-lg drop-shadow-xl">
        <!-- Top nav -->
        <div class="flex flex-col gap-y-6">
            <!-- Header -->
            <div class="grid justify-items-center px-4 py-2">
                <div class="w-[40%] pt-5">
                    <img class=" pb-2 logo-uncp" src="img/logo.png" alt="Logo Universitas Cokroaminoto Palopo">
                </div>
                <span class="font-semibold text-[#008041] text-sm text-center">Program Studi Informatika</span>
                <span class="font-semibold text-[#008041] text-sm text-center">Fakultas Teknik Komputer</span>
                <span class="font-semibold text-[#008041] text-sm text-center">Universitas Cokroaminoto Palopo</span>
            </div>

            <!-- List Menus -->
            <div class="text-center ">
                {{-- data mahasiswa --}}
                <div class="px-8 py-3">
                    <span class="font-medium text-base text-[#008041]">Input Data Mahasiswa</span>
                    <ul class="flex flex-col gap-y-1 px-3 py-3 ">
                        <!-- proposal -->
                        <li>
                            <a href="/dashboard" class="flex items-center gap-x-5 h-[35px] rounded-xl px-4 hover:bg-gray-100 text-gray-500 hover:text-amber-400">
                                {{-- icon iconify --}}
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4Z"/></svg>
                                <p class="font-medium text-sm">Proposal</p>
                            </a>
                        <li>
                        <!-- skripsi -->
                        <li>
                            <a href="/dashboard" class="flex items-center gap-x-5 h-[35px] rounded-xl px-4 hover:bg-gray-100 text-gray-500 hover:text-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                </svg>
                                <p class="font-medium text-sm">Skripsi</p>
                            </a>
                        <li>
                    </ul>
                </div>
                <hr class="border-[1px] border-opacity-50 border-slate-300 w-full">
                {{-- hasil penilaian --}}
                <div class="px-8 py-3 mt-3">
                    <span class="font-medium text-base text-[#008041]">Data Hasil Penilaian</span>
                    <ul class="flex flex-col gap-y-1 px-3 py-3 ">
                        <!-- proposal -->
                        <li>
                            <a href="/dashboard" class="flex items-center gap-x-5 h-[35px] rounded-xl px-4 hover:bg-gray-100 text-gray-500 hover:text-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                                </svg>
                                <p class="font-medium text-sm">Proposal</p>
                            </a>
                        <li>
                        <!-- skripsi -->
                        <li>
                            <a href="/dashboard" class="flex items-center gap-x-5 h-[35px] rounded-xl px-4 hover:bg-gray-100 text-gray-500 hover:text-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                </svg>
                                <p class="font-medium text-sm">Skripsi</p>
                            </a>
                        <li>
                    </ul>
                </div>
                <hr class="border-[1px] border-opacity-50 border-slate-300 w-full">
                {{-- pengaturan --}}
                <div class="px-8 py-3 mt-3">
                    <span class="font-medium text-base text-[#008041]">Pengaturan</span>
                    <ul class="flex flex-col gap-y-1 px-3 py-3 ">
                        <!-- proposal -->
                        <li>
                            <a href="/dashboard" class="flex items-center gap-x-5 h-[35px] rounded-xl px-4 hover:bg-gray-100 text-gray-500 hover:text-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                                </svg>
                                <p class="font-medium text-sm">Kelola Akun</p>
                            </a>
                        <li>
                    </ul>
                </div>
                <hr class="border-[1px] border-opacity-50 border-slate-300 w-full">
                <div class="px-8 py-3 mt-3">
                    <span class="font-medium text-base text-[#008041]">Lainnya</span>
                    <ul class="flex flex-col gap-y-1 px-3 py-3 ">
                        <!-- proposal -->
                        <li>
                            <a href="/dashboard" class="flex items-center gap-x-5 h-[35px] rounded-xl px-4 hover:bg-gray-100 text-gray-500 hover:text-amber-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
                                </svg>
                                <p class="font-medium text-sm">Logout</p>
                            </a>
                        <li>
                    </ul>
                </div>
            </div>
        </div>

    </div>



