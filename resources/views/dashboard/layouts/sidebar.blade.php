<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px; ">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
      <img src="logo/logo_sejalin.png" width="30" alt="">
      <span class="fs-4 ps-2 text-danger">Dashboard</span>
    </a>
    
    <hr class="text-light">
    <form class="d-flex mb-3">
      @csrf
      <div class="input-group ">
        <input type="text" class="form-control" placeholder="Perbaikan" disabled >
        <button class="btn btn-danger" type="button" id="button-addon2" disabled><i class="fas fa-search"></i></button>
      </div>
    </form>
    <style>
      .nav-pills .nav-link.active {
        color: white;
        background-color: #DC3545;
      }
    </style>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="/dashboard" class="nav-link active" aria-current="page">
            <i class="fas fa-home pe-2 " ></i> Home
          
        </a>
      </li>
      <li>
        <a href="/dashboard/product" class="nav-link link-light">
          <i class="fas fa-box-open pe-2"></i>
             Produk
        </a>
      </li>
      <li>
        <a href="/dashboard/statistic" class="nav-link link-light">
            <i class="fas fa-chart-line pe-2 "></i> Statistik Pengunjung
        </a>
      </li>
      <li>
        <a href="/dashboard/view" class="nav-link link-light">
            <i class="fas fa-eye pe-2 "></i> Tampilan
        </a>
      </li>
      
    </ul>
    <hr class="text-light">
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-light text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fas fa-user pe-2 "></i>  
        <strong>{{ auth()->user()->username }}</strong>
      </a>
      <ul class="dropdown-menu border-0 shadow-lg" style="border-radius: 10px" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#"><i class="fas fa-gear pe-2"></i>Pengaturan Pengguna</a></li>
        <li><hr class="dropdown-divider "></li>
        <li>
            <form action="/logout" method="POST"> 
                @csrf
                <button type="submit" class="dropdown-item text-danger" href="#"><i class="fas fa-sign-out-alt"></i> Log Out
            
                </button>
            </form>
        </li>
    </ul>
    </div>
  </div>
  <div class="b-example-divider " style="background-color: rgba(0, 0, 0, 0);box-shadow:none;"></div>