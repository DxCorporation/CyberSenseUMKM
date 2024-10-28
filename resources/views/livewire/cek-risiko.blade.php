<div class="min-h-[100vh] overflow-hidden pb-40 pt-10 px-8">
    <h1 class="text-5xl font-bold text-center">
        <span class="bg-clip-text text-transparent bg-gradient-to-r from-pink-500 via-purple-500 to-cyan-500">
            CEK RESIKO
        </span>
    </h1>
    <p class="text-center mt-6">
        Silahkan Mengisi Formulis Terlebih Dahulu Dibawah Ini
    </p>
    <div class="flex justify-center items-center h-full mt-8">
        <form class="w-3/5 space-y-4 space-x-8">
            <h2 class="text-2xl font-bold text-center">Formulir UMKM</h2>
            <div class="flex flex-col space-y-2">
                <label for="nama" class="text-lg font-semibold">Nama UMKM</label>
                <input type="text" id="nama" name="nama" class="input input-bordered w-full max-w-xl"
                    placeholder="Masukkan nama UMKM">
            </div>
            <div class="flex flex-col space-y-2">
                <label for="email" class="text-lg font-semibold">Email</label>
                <input type="email" id="email" name="email" class="input input-bordered w-full max-w-xl"
                    placeholder="Masukkan email">
            </div>
            <div class="flex flex-row space-x-20">
                <div class="flex flex-col space-y-2">
                    <label for="provinsi" class="text-lg font-semibold">Asal Provinsi</label>
                    <select class="select select-bordered w-full max-w-xl">
                        <option disabled selected>==Pilih Salah Satu==</option>
                        <option value=""></option>
                    </select>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="kabupaten" class="text-lg font-semibold">Asal Kabupaten</label>
                    <select class="select select-bordered w-full max-w-xl">
                        <option disabled selected>==Pilih Salah Satu==</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4 float-right"><a
                    href="{{ Route('form-pengisian') }}">Submit</a></button>
        </form>
    </div>
</div>
