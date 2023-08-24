<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pemesanan Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <!-- Navbar component -->
    @component('components.navbar')
    @endcomponent
    
    <div class="container mt-4 d-flex justify-content-center">
        <div class="card" style="width: 400px;">
            <div class="card-header text-center">
                Form Pemesanan
            </div>
            <div class="card-body">
                <form action="{{ route('create-pemesanan.hotel') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Pemesan</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Laki-laki" required>
                            <label class="form-check-label" for="laki_laki">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Perempuan" required>
                            <label class="form-check-label" for="perempuan">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nomor_identitas" class="form-label">Nomor Identitas</label>
                        <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" required>
                    </div>
                    <div class="mb-3">
                        <label for="jenis_kamar" class="form-label">Tipe Kamar</label>
                        <select class="form-select" id="jenis_kamar" name="jenis_kamar" required>
                            <option value="" disabled selected>Pilih Tipe Kamar</option>
                            @foreach($hotel as $val)
                                <option value="{{ $val->id }}">{{ $val->jenis_kamar}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input id="harga" name="harga" type="number" value="{{$hotel[0]->harga}}" readonly class="rounded border border-gray-300 w-48" required autofocus>
                    </div>
                    <div class="mb-3">
                        <label for="tanggal_menginap" class="form-label">Tanggal Pemesanan</label>
                        <input type="date" class="form-control" id="tanggal_menginap" name="tanggal_menginap" required>
                    </div>
                    <div class="mb-3">
                        <label for="durasi_menginap" class="form-label">Durasi Menginap</label>
                        <div class="input-group">
                            <input type="number" class="form-control" id="durasi_menginap" name="durasi_menginap" required min="1">
                            <span class="input-group-text">hari</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="breakfast" name="breakfast">
                            <label class="form-check-label" for="breakfast">
                                Termasuk Breakfast (tambahan Rp 80.000)
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="total_bayar" class="form-label">Total Bayar</label>
                        <input id="total" name="total" value="{{$hotel[0]->harga}}" type="number" readonly autofocus>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="hitungTotal({{json_encode($hotel)}})">Hitung Total Bayar</button>
                    <button type="submit" class="btn btn-success">Pesan</button>
                    <button type="button" class="btn btn-danger" onclick="resetForm()">Cancel</button>
                </form>
            </div>
        </div>
    </div>

    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.7.0.slim.js" integrity="sha256-7GO+jepT9gJe9LB4XFf8snVOjX3iYNb0FHYr5LI1N5c=" crossorigin="anonymous"></script>
    <script>
        function hitungTotal(dataKamar) {
            durasi = $("#durasi").val()
            breakfast = $("#breakfast").is(":checked")
            hargaKamar = $("#harga").val()

            // harga kamar
            // cek harga kamar
            dataKamar.map((val => {
                if ($("#tipe_kamar").val() == val.id) {
                    hargaKamar = $("#harga").val(val.harga)
                }
            }))

            // total harga
            totalHarga = parseInt(hargaKamar.val())
            console.log(totalHarga)
            totalHarga = totalHarga * durasi
            // jika durasi menginap lebih dari 3 hari
            // kasih diskon 10%
            if (durasi > 3) {
                diskon = totalHarga * (10 / 100)
                totalHarga = totalHarga - diskon
            }

            // jika termasuk breakfast true
            console.log(breakfast)
            if (breakfast) {
                // tambah 80.000
                totalHarga += 80000
            }

            // edit input total harga
            $("#total").val(totalHarga)
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
