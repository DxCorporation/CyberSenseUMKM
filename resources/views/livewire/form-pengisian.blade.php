<div class="min-h-[100vh] lg:px-20 overflow-hidden pb-40 pt-10">
    <div class="relative bg-base-100 font-sans leading-normal tracking-normal w-full">
        <div class="max-w-full">
            <ul class="steps">
                <li class="step step-info"></li>
                <li class="step @if ($infrastruktur == true OR $jenisData == true or $keamanan == true or $kebijakan == true or $riwayat == true or $sumberDaya == true) step-info @endif"></li>
                <li
                    class="step
                @if ($jenisData == true or $keamanan == true or $kebijakan == true or $riwayat == true or $sumberDaya == true) step-info @endif
                ">
                </li>
                <li
                    class="step
                @if ($keamanan == true or $kebijakan == true or $riwayat == true or $sumberDaya == true) step-info @endif
                ">
                </li>
                <li
                    class="step
                @if ($kebijakan == true or $riwayat == true or $sumberDaya == true) step-info @endif
                ">
                </li>
                <li
                    class="step
                @if ($riwayat == true or $sumberDaya == true) step-info @endif
                ">
                </li>
                <li
                    class="step
                @if ($sumberDaya == true) step-info @endif
                ">
                </li>
            </ul>
        </div>
        <div class="flex justify-center items-center h-full w-full">
            <form class="w-full p-4 lg:p-8">
                @if ($profile == true)
                    <h1 class="text-center text-2xl font-bold mb-10">Profil UMKM</h1>
                    <div class="space-y-6">
                        <!-- Question 1 -->
                        <h1 class="text-2 font-bold mb-4">Silahkan jawab semua pertanyaan sesuai dengan kondisi Anda.
                        </h1>
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Jumlah Karyawan ≥ 20
                            </div>
                            <div class="w-1/3 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q1" value="ya" class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q1" value="tidak" class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 2 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Karyawan yang Menggunakan Teknologi ≥ 50%
                            </div>
                            <div class="w-1/3 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q2" value="ya" class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q2" value="tidak" class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 3 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Skala Bisnis
                            </div>
                            <div class="lg:w-1/3 flex justify-between ml-4">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q3" value="ya" class="radio radio-primary" />
                                    <span>Mikro</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q3" value="tidak" class="radio radio-primary" />
                                    <span>Kecil</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q3" value="tidak" class="radio radio-primary" />
                                    <span>Menengah</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 4 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Jenis Industri
                            </div>

                            <div class="lg:w-1/3 flex justify-between ml-4">
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q4" value="ya" class="radio radio-primary" />
                                    <span>Manufaktur</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q4" value="tidak" class="radio radio-primary" />
                                    <span>Jasa</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q4" value="tidak" class="radio radio-primary" />
                                    <span>Perdagangan</span>
                                </label>
                            </div>
                        </div>
                    </div>
                @endif
                @if ($infrastruktur == true)
                    <h1 class="text-center text-2xl font-bold mb-10">Infrastruktur Teknologi</h1>
                    <div class="space-y-6">
                        <!-- Question 5 -->
                        <h1 class="text-2 font-bold mb-4">Silahkan jawab semua pertanyaan sesuai dengan kondisi Anda.
                        </h1>
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Sistem Operasi Windows tidak diperbarui dalam 6 bulan terakhir
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q5" value="ya" class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q5" value="tidak" class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 6 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Menggunakan aplikasi berbasis web tanpa SSL
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q6" value="ya" class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q6" value="tidak" class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 7 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Penggunaan cloud tanpa enkripsi data
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q7" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q7" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($jenisData == true)
                    <h1 class="text-center text-2xl font-bold mb-10">Jenis dan Sensitivitas Data</h1>
                    <div class="space-y-6">
                        <!-- Question 8 -->
                        <h1 class="text-2 font-bold mb-4">Silahkan jawab semua pertanyaan sesuai dengan kondisi Anda.
                        </h1>
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Menyimpan data pelanggan seperti email atau nomor telepon
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q8" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q8" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 9 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Menyimpan data keuangan seperti kartu kredit atau rekening bank
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q9" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q9" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 10 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Menyimpan data sensitif (misalnya, nomor identitas)
                            </div>

                            </span>
                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q10" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q10" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 11 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Lokasi penyimpanan data hanya di server lokal tanpa backup
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q11" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q11" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($keamanan == true)
                    <h1 class="text-center text-2xl font-bold mb-10">Protokol Keamanan yang Ada</h1>
                    <div class="space-y-6">
                        <!-- Question 12 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Menggunakan Firewall
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q12" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q12" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 13 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Menggunakan Two Factor Authentication (2FA) pada sistem login
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q13" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q13" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($kebijakan == true)
                    <h1 class="text-center text-2xl font-bold mb-10">Kebijakan Keamanan dan Pelatihan Karyawan
                    </h1>
                    <div class="space-y-6">
                        <!-- Question 14 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Ada pelatihan keamanan siber
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q14" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q14" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 15 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Ada kebijakan kompleksitas password
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q15" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q15" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>
                        <!-- Question 16 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Backup data dilakukan secara berkala
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q16" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q16" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($riwayat == true)
                    <h1 class="text-center text-2xl font-bold mb-10">Riwayat Insiden Keamanan
                    </h1>
                    <div class="space-y-6">
                        <!-- Question 17 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Pernah mengalami serangan phishing
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q17" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q17" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 18 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Pernah mengalami pencurian/kebocoran data
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q18" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q18" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>
                        <!-- Question 19 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Pernah mengalami insiden keamanan lain
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q19" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q19" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>
                    </div>
                @endif

                @if ($sumberDaya == true)
                    <h1 class="text-center text-2xl font-bold mb-10">Sumber Daya Keamanan yang Tersedia
                    </h1>
                    <div class="space-y-6">
                        <!-- Question 20 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Tidak ada budget untuk keamanan siber
                            </div>

                            <div class="w-1/5 flex justify-start ml-4">
                                <label class="flex items-center space-x-2 mr-6">
                                    <input type="radio" name="q20" value="ya"
                                        class="radio radio-primary" />
                                    <span>Ya</span>
                                </label>
                                <label class="flex items-center space-x-2">
                                    <input type="radio" name="q20" value="tidak"
                                        class="radio radio-primary" />
                                    <span>Tidak</span>
                                </label>
                            </div>
                        </div>

                        <!-- Question 21 -->
                        <div
                            class="lg:flex lg:justify-between items-center w-full border-b border-gray-300 pb-4 lg:border-none lg:pb-0">
                            <div class="lg:w-3/4 w-full lg:border-b lg:border-gray-300 p-2">
                                Jumlah personel IT < 1 </div>

                                    <div class="w-1/5 flex justify-start ml-4">
                                        <label class="flex items-center space-x-2 mr-6">
                                            <input type="radio" name="q21" value="ya"
                                                class="radio radio-primary" />
                                            <span>Ya</span>
                                        </label>
                                        <label class="flex items-center space-x-2">
                                            <input type="radio" name="q21" value="tidak"
                                                class="radio radio-primary" />
                                            <span>Tidak</span>
                                        </label>
                                    </div>
                            </div>
                        </div>
                @endif

                @if ($profile == false)
                    <div class="flex justify-between w-full mt-6">
                        <button class="btn btn-secondary" wire:click="back" wire:navigate>
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
                            </svg>Back
                        </button>

                        <button class="btn btn-primary" wire:click="next" wire:navigate>
                            Next
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                            </svg>
                        </button>
                    </div>
                @endif

                @if ($profile == true)
                    <button class="btn btn-primary float-end mt-6" wire:click="next" wire:navigate>
                        Next
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3" />
                        </svg>
                    </button>
                @endif

            </form>
        </div>

        @if ($profile == true)
            <div class="timeline-start timeline-box border border-warning">
                <h3 class="text-center mb-4">
                    <span
                        class="text-[clamp(1.5rem,8vw,1rem)] bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 via-green-400 to-cyan-500">Skala
                        Bisnis</span>
                </h3>
                <ul>
                    <li class="mb-4">
                        <h1 class="text-center"><strong>Usaha Mikro</strong></h1>
                        Aset: Maksimal Rp 50 juta (tidak termasuk tanah dan bangunan tempat usaha).<br>
                        Omzet tahunan: Maksimal Rp 300 juta.
                    </li>
                    <li class="mb-4">
                        <h1 class="text-center"><strong>Usaha Kecil</strong></h1>
                        Aset: Rp 50 juta hingga Rp 500 juta (tidak termasuk tanah dan bangunan tempat usaha).<br>
                        Omzet tahunan: Rp 300 juta hingga Rp 2,5 miliar.
                    </li>
                    <li class="mb-4">
                        <h1 class="text-center"><strong>Usaha Menengah</strong></h1>
                        Aset: Rp 500 juta hingga Rp 10 miliar (tidak termasuk tanah dan bangunan tempat usaha).<br>
                        Omzet tahunan: Rp 2,5 miliar hingga Rp 50 miliar.
                    </li>
                </ul>
            </div>
        @endif
    </div>
</div>
