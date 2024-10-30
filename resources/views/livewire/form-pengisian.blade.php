<div class="min-h-[100vh] lg:px-20 overflow-hidden pb-40 pt-10">
    <div class="relative bg-base-100 font-sans leading-normal tracking-normal w-full">
        <div class="flex justify-center items-center h-full w-full">
            <form class="w-full p-8">
                @if ($profile == true)
                    <h1 class="text-center text-2xl font-bold mb-10">Profil UMKM</h1>
                    <div class="space-y-6">
                        <!-- Question 1 -->
                        <h1 class="text-2 font-bold mb-4">Silahkan jawab semua pertanyaan sesuai dengan kondisi Anda.
                        </h1>
                        <div class="flex justify-between items-center w-full">
                            <span class="w-3/4 border-b border-gray-300 p-2">Jumlah Karyawan ≥ 20</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-3/4 border-b border-gray-300 p-2">Karyawan yang Menggunakan Teknologi ≥
                                50%</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-3/4 border-b border-gray-300 p-2">Skala Bisnis</span>
                            <div class="w-1/3 flex justify-between ml-4">
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-3/4 border-b border-gray-300 p-2">Jenis Industri</span>
                            <div class="w-1/3 flex justify-between ml-4">
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Sistem Operasi Windows tidak diperbarui
                                dalam 6 bulan terakhir</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Menggunakan aplikasi berbasis web tanpa
                                SSL</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Penggunaan cloud tanpa enkripsi data
                            </span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Menyimpan data pelanggan seperti email
                                atau nomor telepon</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Menyimpan data keuangan seperti kartu
                                kredit atau rekening bank</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Menyimpan data sensitif (misalnya, nomor
                                identitas)
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Lokasi penyimpanan data hanya di server
                                lokal tanpa backup
                            </span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Menggunakan firewall</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Menggunakan Two Factor Authentication
                                (2FA) pada sistem login</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Ada pelatihan keamanan siber </span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Ada kebijakan kompleksitas password</span>
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
                        <div class="flex justify-between items-center w-full">
                            <span class="w-4/5 border-b border-gray-300 p-2">Backup data dilakukan secara berkala
                            </span>
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
                    <div class="flex justify-between items-center w-full">
                        <span class="w-4/5 border-b border-gray-300 p-2">Pernah mengalami serangan phishing </span>
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
                    <div class="flex justify-between items-center w-full">
                        <span class="w-4/5 border-b border-gray-300 p-2">Pernah mengalami pencurian/kebocoran data</span>
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
                    <div class="flex justify-between items-center w-full">
                        <span class="w-4/5 border-b border-gray-300 p-2">Pernah mengalami insiden keamanan lain
                        </span>
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
                    <div class="flex justify-between items-center w-full">
                        <span class="w-4/5 border-b border-gray-300 p-2">Tidak ada budget untuk keamanan siber</span>
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
                    <div class="flex justify-between items-center w-full">
                        <span class="w-4/5 border-b border-gray-300 p-2">Jumlah personel IT < 1	</span>
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

                        <ul class="steps">
                            <li class="step step-info"></li>
                            <li class="step step-info"></li>
                            <li class="step
                            @if ($jenisData == true OR $keamanan == true OR $kebijakan == true OR $riwayat == true OR $sumberDaya == true) step-info @endif
                            "></li>
                            <li class="step
                            @if ($keamanan == true OR $kebijakan == true OR $riwayat == true OR $sumberDaya == true) step-info @endif
                            "></li>
                            <li class="step
                            @if ($kebijakan == true OR $riwayat == true OR $sumberDaya == true) step-info @endif
                            "></li>
                            <li class="step
                            @if ($riwayat == true OR $sumberDaya == true) step-info @endif
                            "></li>
                            <li class="step
                            @if ($sumberDaya == true) step-info @endif
                            "></li>
                          </ul>

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
    </div>
</div>
