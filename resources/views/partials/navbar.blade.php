<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="/"><img src="logo/SEJALIN_logo_Merah.png" width="100px" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "home") ? 'active ' : '' }}" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "tentang-kami") ? 'active ' : '' }}" href="/tentang-kami">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "produk") ? 'active ' : '' }}" href="/#produk-home">Produk</a>
                </li>
               
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "Team") ? 'active ' : '' }}" href="/order">Pemesanan</a>
                </li>
                <li class="nav-item pt-2">
                    <a href="https://www.instagram.com/sejalincreative/" class=" px-2 text-dark"><i class="fab fa-instagram"></i></a>
                    <a href="https://facebook.com" class=" text-dark px-2"><i class="fab fa-facebook"></i></a>
                    <a href="https://tiktok.com" class=" text-dark px-2"><i class="fab fa-tiktok"></i></a>
                    <a href="https://api.whatsapp.com/send/?phone=6285234114332&text&app_absent=0" class=" px-2 text-dark"><i class="fab fa-whatsapp"></i></a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
