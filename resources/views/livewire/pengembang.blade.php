<div class="min-h-[100vh] overflow-hidden pb-40 pt-10 px-8">
    <h1 class="text-5xl font-bold text-center">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500">
            Pengembang
        </span>
    </h1>
    <p class="text-center mt-8">
        Website ini dibuat sebagai Projek Akhir Mata Kuliah Sistem Pakar Fakultas Informatika Universitas Janabadra 2024
    </p>

    <!-- Container Utama -->
    <div class="container mx-auto px-4 py-8">

        <!-- Card Dosen -->
        <div class="flex justify-center mb-8">
            <div class="card w-96 bg-base-100 shadow-xl">
                <figure><img src="{{ asset('bu marlin.jpeg') }}" alt="Foto Dosen" class="rounded-full w-32 h-32 mt-4">
                </figure>
                <div class="card-body text-center">
                    <h2 class="card-title">Yumarlin MZ, S. KOM., M.Pd., M.KOM. </h2>
                    {{-- <p>NIP: 123456789</p> --}}
                </div>
            </div>
        </div>

        <!-- Kartu Mahasiswa -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Mahasiswa 1 -->
            <div class="card w-80 bg-base-100 shadow-xl mx-auto">
                <figure><img src="https://via.placeholder.com/150" alt="Foto Mahasiswa"
                        class="rounded-full w-24 h-24 mt-4"></figure>
                <div class="card-body text-center">
                    <h2 class="card-title">Nama Mahasiswa 1</h2>
                    <p>NIM: 21001234</p>
                </div>
            </div>

            <!-- Mahasiswa 2 -->
            <div class="card w-80 bg-base-100 shadow-xl mx-auto">
                <figure><img src="https://via.placeholder.com/150" alt="Foto Mahasiswa"
                        class="rounded-full w-24 h-24 mt-4"></figure>
                <div class="card-body text-center">
                    <h2 class="card-title">Nama Mahasiswa 2</h2>
                    <p>NIM: 21005678</p>
                </div>
            </div>

            <!-- Mahasiswa 3 -->
            <div class="card w-80 bg-base-100 shadow-xl mx-auto">
                <figure><img src="https://via.placeholder.com/150" alt="Foto Mahasiswa"
                        class="rounded-full w-24 h-24 mt-4"></figure>
                <div class="card-body text-center">
                    <h2 class="card-title">Nama Mahasiswa 3</h2>
                    <p>NIM: 21009876</p>
                </div>
            </div>

            <!-- Mahasiswa 4 -->
            <div class="card w-80 bg-base-100 shadow-xl mx-auto">
                <figure><img src="https://via.placeholder.com/150" alt="Foto Mahasiswa"
                        class="rounded-full w-24 h-24 mt-4"></figure>
                <div class="card-body text-center">
                    <h2 class="card-title">Nama Mahasiswa 4</h2>
                    <p>NIM: 21006543</p>
                </div>
            </div>
        </div>
    </div>
</div>
