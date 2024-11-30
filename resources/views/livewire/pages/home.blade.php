<div class="h-screen">

    <div class="container mx-auto mt-10">
        <input type="text" id="search" placeholder="Search..." class="input input-bordered mb-4" />
        <table id="default-table" class="table table-zebra text-center w-full">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>KODE</th>
                    <th>KOTEGORI REPRESENTASI</th>
                    <th>KONDISI</th>
                    <th>SKOR KONDISI</th>
                    <th>REKOMENDASI</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($representasis as $index => $representasi)
                    <tr>
                        <td>{{ $index + 1 }}</td> <!-- Menampilkan nomor urut -->
                        <td>{{ $representasi->kode }}</td>
                        <td>{{ $representasi->representasi_category_id }}</td>
                        <td>{{ $representasi->kondisi }}</td>
                        <td>{{ $representasi->skor_resiko }}</td>
                        <td>{{ $representasi->rekomendasi }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@9.0.3"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dataTable = new simpleDatatables.DataTable("#default-table", {
                searchable: true, // Mengaktifkan pencarian
                perPage: 5, // Menentukan jumlah baris per halaman
                perPageSelect: [5, 10, 20], // Pilihan jumlah baris per halaman
                paging: true // Mengaktifkan paginasi
            });

            // Menambahkan event listener untuk input pencarian
            const searchInput = document.getElementById("search");
            searchInput.addEventListener("input", function() {
                dataTable.search(this.value);
            });
        });
    </script>

</div>
