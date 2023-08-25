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
                    <label for="nama" class="form-label">Jenis Kelamin</label>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_laki" value="Laki-laki" required="">
                        <label class="form-check-label" for="jenis_kelamin">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin_perempuan" value="Perempuan" required="">
                        <label class="form-check-label" for="jenis_kelamin">
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
                                <option value="{{ $val->id }}" harga="{{ $val->harga}}">{{ $val->jenis_kamar}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="harga" class="form-label">Harga</label>
                        <input id="harga" name="harga" type="number" value="" readonly class="rounded border border-gray-300 w-48" required readonly>
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
                        <input id="total_bayar" name="total_bayar" value="" type="number" readonly autofocus title="Total Bayar" placeholder="Total Bayar">
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
       
        $(document).ready(function() {
            $("#nomor_identitas").keyup(function() {
                if ($(this).val().length > 16) {
                    alert("Nomor identitas tidak boleh lebih dari 16 karakter");
                    $(this).val($(this).val().substr(0, 16));
                }
            });
        });
        
        $(document).ready(function() {
            $("#durasi_menginap").keypress(function(event) {
                if (event.which != 8 && isNaN(String.fromCharCode(event.which))) {
                    event.preventDefault();
                    alert("Harus Angka");
                }
            });
        });
 
        $(document).ready(function() {
            $("#jenis_kamar").change(function() {
                var harga = $("#jenis_kamar option:selected").attr("harga");
                $("#harga").val(harga);
            });
        });
      
        function hitungTotal(hotel) {
            var harga = $("#jenis_kamar option:selected").attr("harga");
            var durasiMenginap = $("#durasi_menginap").val();
            var totalBayar = harga * durasiMenginap;
            if (durasiMenginap > 3) {
                diskon = totalBayar * (10/100);
                totalBayar = totalBayar - diskon;
            }
            if ($("#breakfast").is(":checked")) {
                totalBayar += (80000 * durasiMenginap);
            }
            $("#total_bayar").val(totalBayar);
        }
      
        function resetForm() {
            window.location.href = "{{ route('pemesanan.hotel') }}";
        }
       
        $(document).ready(function() {
            if ("{{ session('success') }}") {
                alert("Data berhasil disubmit");
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
