<div class="min-h-[100vh] lg:px-20 overflow-hidden pb-40 pt-10">
    <div class="relative bg-base-100 font-sans leading-normal tracking-normal w-full">
        <div class="flex justify-center items-center h-full w-full">
            <form class="w-full p-8">
                <h1 class="text-center text-2xl font-bold mb-10">Profil UMKM</h1>
                <div class="space-y-6">
                    <!-- Question 1 -->
                    <h1 class="text-2 font-bold mb-4">Silahkan jawab semua pertanyaan sesuai dengan kondisi Anda.</h1>
                    <div class="flex justify-between items-center w-full">
                        <span class="w-3/4 border-b border-gray-300 p-2">Jumlah Karyawan ≥ 20</span>
                        <div class="w-1/5 flex justify-between ml-4">
                            <label class="flex items-center space-x-2">
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
                        <span class="w-3/4 border-b border-gray-300 p-2">Karyawan yang Menggunakan Teknologi ≥ 50%</span>
                        <div class="w-1/5 flex justify-between ml-4">
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="q2" value="ya" class="radio radio-primary" />
                                <span>Ya</span>
                            </label>
                            <label class="flex items-center space-x-2">
                                <input type="radio" name="q2" value="tidak" class="radio radio-primary" />
                                <span>Tidak</span>
                            </label>
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 float-right">
                        <a href="{{ Route('form-pengisian') }}">Submit</a>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
