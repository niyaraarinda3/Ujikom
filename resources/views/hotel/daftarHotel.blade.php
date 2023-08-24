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

    <div class="container mt-4">
        <div class="row">
            @foreach($daftarHotel as $hotel)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ $hotel->gambar }}" class="card-img-top" alt="{{ $hotel->jenis_kamar }}" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotel->jenis_kamar }}</h5>
                        <div class="embed-responsive embed-responsive-16by9" style="height: 200px;">
                            <div class="d-flex justify-content-center align-items-center"> <!-- Center content vertically and horizontally -->
                                <iframe class="embed-responsive-item" src="{{ $hotel->vidio }}" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
