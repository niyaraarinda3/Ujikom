<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('home.hotel') }}">HOME</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('daftar.hotel') }}">Tipe Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('harga.hotel') }}">Daftar Harga</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tentang.hotel') }}">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('pemesanan.hotel') }}">Pemesanan Kamar</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

