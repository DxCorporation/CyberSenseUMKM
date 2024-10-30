<div class="min-h-[100vh] overflow-hidden pb-40 pt-10">
    <div class="relative bg-gray-100 font-sans leading-normal tracking-normal w-full">
        <div class="flex justify-center items-center h-full w-full">
            <form class="w-full p-8">
                <h1 class="text-center text-2xl font-bold mb-10">Silahkan jawab semua pertanyaan sesuai dengan
                    kondisi
                    Anda.</h1>
                <div class="space-y-6">
                    <!-- Question 1 -->
                    <h1 class="text-2 font-bold mb-4">Profil UMKM</h1>
                    <div class="flex justify-between items-center w-full">
                        <textarea class="w-3/4 border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2" rows="1" disabled>Jumlah Karyawan ≥ 20	</textarea>
                        <select
                            class="w-1/5 border border-gray-300 rounded p-2 focus:outline-none focus:border-blue-500 ml-4">
                            <option value="">Pilihan</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>

                    <!-- Question 2 -->
                    <div class="flex justify-between items-center w-full">
                        <textarea class="w-3/4 border-b border-gray-300 focus:outline-none focus:border-blue-500 p-2" rows="1" disabled>Karyawan yang Menggunakan Teknologi ≥ 50%	</textarea>
                        <select
                            class="w-1/5 border border-gray-300 rounded p-2 focus:outline-none focus:border-blue-500 ml-4">
                            <option value="">Pilihan</option>
                            <option value="ya">Ya</option>
                            <option value="tidak">Tidak</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mt-4 float-right"><a
                            href="{{ Route('form-pengisian') }}">Submit</a></button>
            </form>
        </div>
    </div>
</div>
