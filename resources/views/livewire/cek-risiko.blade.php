<div class="min-h-[100vh] overflow-hidden pb-40 pt-10 px-8">
    <div class="flex justify-center items-center h-full">
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
                        @foreach ($provinces as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col space-y-2">
                    <label for="kabupaten" class="text-lg font-semibold">Asal Kabupaten</label>
                    <select class="select select-bordered w-full max-w-xl">
                        <option disabled selected>==Pilih Salah Satu==</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-4 float-right">Submit</button>
        </form>
    </div>
    <script>
        function onChangeSelect(url, id, name) {
            // send ajax request to get the cities of the selected province and append to the select tag
            $.ajax({
                url: url,
                type: 'GET',
                data: {
                    id: id
                },
                success: function(data) {
                    $('#' + name).empty();
                    $('#' + name).append('<option>==Pilih Salah Satu==</option>');

                    $.each(data, function(key, value) {
                        $('#' + name).append('<option value="' + key + '">' + value + '</option>');
                    });
                }
            });
        }
        $(function() {
            $('#provinsi').on('change', function() {
                onChangeSelect('{{ route('cities') }}', $(this).val(), 'kota');
            });
            $('#kota').on('change', function() {
                onChangeSelect('{{ route('districts') }}', $(this).val(), 'kecamatan');
            })
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
</div>
