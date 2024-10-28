<div class="text-base-content">
    <div
        class="navbar bg-base-100 sticky top-0 z-30 flex h-16 w-full justify-center bg-opacity-80 backdrop-blur transition-shadow duration-100 [transform:translate3d(0,0,0)]">
        <div class="navbar-start">
            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h8m-8 6h16" />
                    </svg>
                </div>
                <ul tabindex="0"
                    class="menu menu-sm dropdown-content bg-base-100 rounded-box z-[1] mt-3 w-52 p-2 shadow">
                    <li><a>Item 1</a></li>
                    <li><a>Petunjuk</a></li>
                    <li><a>Pengembang</a></li>
                </ul>
            </div>
            <a data-sveltekit-preload-data href="/" aria-current="page" aria-label="daisyUI"
                class="flex-0 btn btn-ghost gap-1 px-2 md:gap-2"><svg class="h-6 w-6 md:h-8 md:w-8" width="32"
                    height="32" viewBox="0 0 415 415" xmlns="http://www.w3.org/2000/svg">
                    <rect x="82.5" y="290" width="250" height="125" rx="62.5" fill="#1AD1A5">
                    </rect>
                    <circle cx="207.5" cy="135" r="130" fill="black" fill-opacity=".3">
                    </circle>
                    <circle cx="207.5" cy="135" r="125" fill="white"></circle>
                    <circle cx="207.5" cy="135" r="56" fill="#FF9903"></circle>
                </svg> <span class="font-title text-base-content text-lg md:text-2xl">CyberSense UMKM</span>
            </a>
        </div>
        <div class="navbar-center hidden lg:flex">
            <ul class="menu menu-horizontal px-1 text-lg">
                <li><a href="{{ url('home') }}">Home</a></li>
                <li><a>Petunjuk</a></li>
                <li><a>Pengembang</a></li>
                <li><a>Gejala & Solusi</a></li>
            </ul>
        </div>
        <div class="navbar-end lg:me-5">
            <label class="grid cursor-pointer place-items-center lg:me-5 me-2">
                <input type="checkbox" value="synthwave"
                    class="toggle theme-controller bg-base-content col-span-2 col-start-1 row-start-1" />
                <svg class="stroke-base-100 fill-base-100 col-start-1 row-start-1" xmlns="http://www.w3.org/2000/svg"
                    width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <circle cx="12" cy="12" r="5" />
                    <path
                        d="M12 1v2M12 21v2M4.2 4.2l1.4 1.4M18.4 18.4l1.4 1.4M1 12h2M21 12h2M4.2 19.8l1.4-1.4M18.4 5.6l1.4-1.4" />
                </svg>
                <svg class="stroke-base-100 fill-base-100 col-start-2 row-start-1" xmlns="http://www.w3.org/2000/svg"
                    width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"></path>
                </svg>
            </label>
            <a href="{{ url('login') }}" class="btn btn-primary btn-sm">Login</a>
        </div>
    </div>
    {{-- End Navbar --}}

    <div class="min-h-[100vh] overflow-hidden pb-40 pt-32">
        <div class="relative">
            <div
                class="relative flex flex-col items-center justify-center gap-10 px-4 md:px-10 xl:flex-row-reverse xl:gap-0">
                <div>
                    <div
                        class="bg-primary pointer-events-none absolute start-20 aspect-square w-96 rounded-full opacity-20 blur-3xl [transform:translate3d(0,0,0)]">
                    </div>
                    <div
                        class="bg-success pointer-events-none absolute aspect-square w-full rounded-full opacity-10 blur-3xl [transform:translate3d(0,0,0)]">
                    </div>
                    <h2
                        class="font-title text-center text-[clamp(2rem,8vw,3rem)] font-black leading-none xl:text-start">
                        <span class="motion-reduce:!opacity-100" style="opacity:1">Selamat Datang di</span>
                        <br>
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 via-green-400 to-cyan-500">CyberSense UMKM</span>
                    </h2>
                    <div class="h-10"></div>
                    <p class="text-base-content/70 font-title text-center font-light md:text-2xl xl:text-start">Jaga keamanan bisnis Anda bersama kami, karena keamanan adalah investasi terbaik</p>
                    <div class="h-10"></div>
                    <div class="flex w-full justify-center xl:justify-start">
                        <a data-sveltekit-preload-data href="{{ url('/register') }}" wire:navigate
                            class="btn btn-md btn-primary btn-wide group">Get started <svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="hidden h-6 w-6 transition-transform duration-300 group-hover:translate-x-1 rtl:rotate-180 rtl:group-hover:-translate-x-1 md:inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg></a>
                    </div>
                </div>
                <div class="grid shrink-0 gap-0 xl:grid-cols-5">
                    <div class="card border-base-content/10 col-span-4 col-start-1 row-start-1 flex flex-col  will-change-auto motion-reduce:!transform-none"
                        style="transform:translateX(0%)">
                        <div class="card-body">
                            <img src="{{ asset('cyber sense 2.png') }}" alt="" width="450px">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{-- End Hero --}}

    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row-reverse lg:gap-20">
            <img src="{{ asset('cyber sense.png') }}"
                class="max-w-md" width="400px" />
            <div>
                <h1 class="text-5xl font-bold">Kenapa CyberSense UMKM?</h1>
                <p class="py-6">
                    <span class="text-[clamp(2rem,8vw,2rem)] bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 via-green-400 to-cyan-500">CyberSense UMKM</span> adalah solusi cerdas untuk membantu usaha kecil dan menengah menilai, memahami, dan meningkatkan keamanan siber UMKM. Di era digital yang penuh dengan ancaman, kami hadir untuk mendukung UMKM agar tetap aman dari serangan siber dan menjaga data berharga pelanggan dengan langkah-langkah yang mudah diterapkan.
                </p>
                <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    <div class="hero bg-base-200 min-h-screen">
        <div class="hero-content flex-col lg:flex-row lg:gap-20">
            <img src="{{ asset('cyber sense.png') }}"
                class="max-w-md" width="400px" />
            <div>
                <h1 class="text-5xl font-bold mb-4">Fitur Utama CyberSense UMKM</h1>
                <ul class="timeline timeline-vertical">
                    <li>
                      <div class="timeline-middle">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                          class="h-5 w-5">
                          <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                        </svg>
                      </div>
                      <div class="timeline-start timeline-box">
                        <span class="text-[clamp(1.3rem,8vw,1rem)] bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 via-green-400 to-cyan-500">Penilaian Risiko Keamanan</span> <br>
                        Dapatkan gambaran lengkap tentang tingkat risiko keamanan bisnis Anda dalam beberapa langkah mudah.
                    </div>
                      <hr />
                    </li>
                    <li>
                      <hr />
                      <div class="timeline-middle">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                          class="h-5 w-5">
                          <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                        </svg>
                      </div>
                      <div class="timeline-end timeline-box">
                        <span class="text-[clamp(1.3rem,8vw,1rem)] bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 via-green-400 to-cyan-500">Rekomendasi Keamanan</span> <br>
                        Berdasarkan hasil penilaian, kami menyediakan rekomendasi praktis yang sesuai dengan skala bisnis dan anggaran Anda.
                    </div>
                      <hr />
                    </li>
                    <li>
                      <hr />
                      <div class="timeline-middle">
                        <svg
                          xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 20 20"
                          fill="currentColor"
                          class="h-5 w-5">
                          <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"
                            clip-rule="evenodd" />
                        </svg>
                      </div>
                      <div class="timeline-start timeline-box">
                        <span class="text-[clamp(1.3rem,8vw,1rem)] bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 via-green-400 to-cyan-500">Panduan Pelatihan Keamanan untuk Karyawan</span> <br>
                        Tingkatkan kesadaran dan keterampilan keamanan siber bagi karyawan Anda melalui panduan dan pelatihan yang mudah diakses.
                    </div>
                      <hr />
                    </li>
                  </ul>
            </div>
        </div>
    </div>

    <div class="min-h-[100vh] overflow-hidden pb-40 pt-32">
        <div class="relative">
            <div
                class="relative flex flex-col items-center justify-center gap-10 px-4 md:px-10 xl:flex-row-reverse xl:gap-0">
                <div>
                    <div
                        class="bg-primary pointer-events-none absolute start-20 aspect-square w-96 rounded-full opacity-20 blur-3xl [transform:translate3d(0,0,0)]">
                    </div>
                    <div
                        class="bg-success pointer-events-none absolute aspect-square w-full rounded-full opacity-10 blur-3xl [transform:translate3d(0,0,0)]">
                    </div>
                    <h2
                        class="font-title text-center text-[clamp(2rem,8vw,3rem)] font-black leading-none xl:text-center">
                        <span
                            class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 via-green-400 to-cyan-500">CyberSense UMKM</span> <br>
                        <span class="motion-reduce:!opacity-100" style="opacity:1">Perlindungan Mudah dan Terjangkau <br> untuk Bisnis Anda</span>
                        <br>
                    </h2>
                    <div class="h-10"></div>
                    <p class="text-base-content/70 font-title text-center font-light md:text-2xl xl:text-center">
                        Tidak perlu menjadi ahli siber untuk melindungi bisnis Anda. Dengan CyberSense UMKM, Anda bisa langsung memahami potensi risiko dan mengambil tindakan preventif yang akan menjaga bisnis Anda tetap aman dari ancaman digital.
                    </p>
                    <div class="h-10"></div>
                    <div class="flex w-full justify-center xl:justify-center">
                        <a data-sveltekit-preload-data href="{{ url('/register') }}" wire:navigate
                            class="btn btn-md btn-primary btn-wide group">Get started <svg
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor"
                                class="hidden h-6 w-6 transition-transform duration-300 group-hover:translate-x-1 rtl:rotate-180 rtl:group-hover:-translate-x-1 md:inline-block">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3"></path>
                            </svg></a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
