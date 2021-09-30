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
                    <a class="nav-link {{ ($active === "about") ? 'active ' : '' }}" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "product") ? 'active ' : '' }}" href="#">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "product") ? 'active ' : '' }}" href="#">reseller</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ ($active === "Team") ? 'active ' : '' }}" href="#">Pemesanan</a>
                </li>
                <li class="nav-item border border-danger border-3 rounded-3">
                    <a class="nav-link " href="#">My account</a>
                </li>
            </ul>
            
        </div>
    </div>
</nav>
