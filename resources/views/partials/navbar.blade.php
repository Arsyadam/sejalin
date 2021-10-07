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

                @auth
                <div class="dropdown pt-2 ps-2 ">
                    <a class=" dropdown-toggle text-decoration-none text-danger fw-bold" href="#"  id="dropdownMenuLink" data-bs-toggle="dropdown" >
                        {{user()->username }}
                    </a>
                  
                    <ul class="dropdown-menu border-0 shadow-lg" style="border-radius: 10px" aria-labelledby="dropdownMenuLink">
                        <li><a class="dropdown-item" href="/dashboard"><i class="fas fa-columns pe-2"></i>Dashboard</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-eye pe-2"></i>Ganti Tampilan</a></li>
                        <li><a class="dropdown-item" href="#"><i class="fas fa-chart-line pe-2"></i>Total Pengunjung</a></li>
                        <li><hr class="dropdown-divider "></li>
                        <li>
                            <form action="/logout" method="POST"> 
                                @csrf
                                <button type="" class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt"></i> Log Out
                            
                                </button>
                            </form>
                        </li>
                    </ul>
                  </div>
                @endauth
            </ul>
            
        </div>
    </div>
</nav>
