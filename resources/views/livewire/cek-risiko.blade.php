@push('css')
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endpush
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
        <form class="w-full lg:w-2/5 space-y-4 lg:space-x-8">
            @csrf

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
            <div class="flex flex-row justify-between space-x-6 lg:space-x-20">
                <div class="flex flex-col space-y-2">
                    <label for="selectedProvinsi" class="text-lg font-semibold">Asal Provinsi</label>
                    <select class="select select-bordered w-full max-w-xl" id="selectedProvinsi">
                        <option disabled selected>== Pilih ==</option>
                        @foreach ($provinsi as $prov)
                            <option value="{{ $prov['id'] }}">{{ $prov['name'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="selectedKabupaten" class="text-lg font-semibold">Asal Kabupaten</label>
                    <select class="select select-bordered w-full max-w-xl" id="selectedKabupaten">
                        <option disabled selected>== Pilih ==</option>
                        @foreach ($kabupaten as $kab)
                            <option value="{{ $kab['id'] }}">{{ $kab['name'] }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <a href="{{ Route('form-pengisian') }}" class="btn btn-primary mt-4 float-right">Submit</a>
        </form>
    </div>
</div>

@push('js')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#selectedProvinsi').on('change', function() {
                var provinsiId = $(this).val();
                var kabupatenSelect = $('#selectedKabupaten');

                if (provinsiId) {
                    kabupatenSelect.removeAttr('disabled').html('<option value="">Memuat...</option>');

                    $.ajax({
                        url: '/get-kabupaten/' + provinsiId,
                        type: 'GET',
                        success: function(data) {
                            if (data.length > 0) {
                                kabupatenSelect.html(
                                    '<option value="">Pilih Kabupaten/Kota</option>');
                                $.each(data, function(index, kab) {
                                    kabupatenSelect.append('<option value="' + kab.id +
                                        '">' + kab.name + '</option>');
                                });
                            } else {
                                kabupatenSelect.html(
                                    '<option value="">Tidak ada data kabupaten</option>');
                            }
                        },
                        error: function() {
                            kabupatenSelect.html('<option value="">Gagal memuat data</option>');
                        }
                    });
                } else {
                    kabupatenSelect.html('<option disabled selected>== Pilih ==</option>');
                }
            });
        });
    </script>
@endpush
