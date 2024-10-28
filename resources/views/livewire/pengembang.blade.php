<div class="min-h-[100vh] overflow-hidden pb-40 pt-10 px-8">
    <h1 class="text-5xl font-bold text-center">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500">
            Pengembang
        </span>
    </h1>
    <p class="text-center mt-8">
        Website ini dibuat sebagai Projek Akhir Mata Kuliah Sistem Pakar Fakultas Informatika Universitas Janabadra 2024
    </p>

    <!-- Card Dosen -->
    <div class="flex justify-center mb-12 mt-10">
        <div class="card w-96 bg-white shadow-lg rounded-lg p-6 hover:shadow-xl transition-shadow duration-300">
            <figure class="flex justify-center mb-6">
                <img src="{{ asset('bu marlin.jpeg') }}" alt="Foto Dosen"
                    class="rounded-full w-32 h-32 border-4 border-indigo-500">
            </figure>
            <div class="card-body text-center">
                <h2 class="text-xl font-semibold text-gray-800">Yumarlin MZ, S.Kom., M.Pd., M.Kom.</h2>
            </div>
        </div>
    </div>

    <!-- Kartu Mahasiswa -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 px-4">
        <!-- Mahasiswa 1 -->
        <div
            class="card w-full bg-white shadow-md rounded-lg p-6 mx-auto hover:shadow-lg transition-shadow duration-300">
            <figure class="flex justify-center mb-6">
                <img src="https://via.placeholder.com/150" alt="Foto Mahasiswa"
                    class="rounded-full w-32 h-32 border-4 border-blue-400">
            </figure>
            <div class="card-body text-center">
                <h2 class="text-lg font-semibold text-gray-800">Nama Mahasiswa 1</h2>
                <p class="text-gray-500">NIM: 21001234</p>
            </div>
        </div>

        <!-- Mahasiswa 2 -->
        <div
            class="card w-full bg-white shadow-md rounded-lg p-6 mx-auto hover:shadow-lg transition-shadow duration-300">
            <figure class="flex justify-center mb-6">
                <img src="https://via.placeholder.com/150" alt="Foto Mahasiswa"
                    class="rounded-full w-32 h-32 border-4 border-green-400">
            </figure>
            <div class="card-body text-center">
                <h2 class="text-lg font-semibold text-gray-800">Nama Mahasiswa 2</h2>
                <p class="text-gray-500">NIM: 21005678</p>
            </div>
        </div>

        <!-- Mahasiswa 3 -->
        <div
            class="card w-full bg-white shadow-md rounded-lg p-6 mx-auto hover:shadow-lg transition-shadow duration-300">
            <figure class="flex justify-center mb-6">
                <img src="{{ asset('foto reihan.jpg') }}" alt="Foto Mahasiswa"
                    class="rounded-full w-32 h-32 border-4 border-red-400">
            </figure>
            <div class="card-body text-center">
                <h2 class="text-lg font-semibold text-gray-800">Reihan Nanda Muliawan</h2>
                <p class="text-gray-500">NIM: 20330014</p>
            </div>
        </div>

        <!-- Mahasiswa 4 -->
        <div
            class="card w-full bg-white shadow-md rounded-lg p-6 mx-auto hover:shadow-lg transition-shadow duration-300">
            <figure class="flex justify-center mb-6">
                <img src="https://via.placeholder.com/150" alt="Foto Mahasiswa"
                    class="rounded-full w-32 h-32 border-4 border-yellow-400">
            </figure>
            <div class="card-body text-center">
                <h2 class="text-lg font-semibold text-gray-800">Nama Mahasiswa 4</h2>
                <p class="text-gray-500">NIM: 21006543</p>
            </div>
        </div>
    </div>
</div>
