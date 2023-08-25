<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tentang Kami</title>
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    @component('components.navbar')
    @endcomponent
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2 class="text-center mb-4">Tentang Kami</h2>
            <div class="row justify-content-center mt-4">
        <div class="col-md-6 d-flex justify-content-center align-items-center">
            <img src="kawah6.jpg" alt="Tentang Kami" class="img-fluid">
        </div>
            <p class="text-center mt-5">
                Selamat datang di HotelQu! Kami adalah hotel bintang lima yang berlokasi di pusat kota dengan pemandangan yang menakjubkan. Sebagai hotel terbaik, kami berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan kepada para tamu kami.
            </p>
            <p class="text-center">
                Kami adalah hotel bintang lima yang berlokasi di pusat kota dengan pemandangan yang menakjubkan. Sebagai hotel terbaik, kami berkomitmen untuk memberikan pengalaman menginap yang tak terlupakan kepada para tamu kami.
            </p>
        </div>
    </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <footer class="text-center text-lg-start bg-light text-muted">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="d-lg-block">
      <span><strong>Hubungi kami:</strong></span>
    </div>
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 me-auto">
      <p><strong>Alamat:</strong> Jalan Pondok Indah, Kukusan Kelurahan</p>
      <p><strong>No Telepon:</strong> +123 666 8089</p>
      <p><strong>Email:</strong> info@hotelqu.co.id</p>
    </div>
  </section>
</footer>
</body>
</html>