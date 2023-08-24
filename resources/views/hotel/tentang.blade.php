<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Hotel</title>
    @vite('resources/js/app.js')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
@component('components.navbar')
    @endcomponent

     <!-- Konten Tentang Kami -->
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
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>