@extends('layouts.main')

@section('section')





    <section >
        @include('partials.caraousel')

    </section>
    <div id="home" data-bs-spy="scroll" data-bs-target="#list-example" data-bs-offset="0" class="scrollspy-example" tabindex="0">  
      <section  id="about-home">
        <div class=" bg-dark" style="background-image: url('logo/SEJALIN_Logo_Merah.png'); padding-top:7rem ; padding-bottom:5rem ;">
            <div class="h-100 p-5 text-white  rounded-3 ">
              <div class="container">
              <h2>Tentang Kami</h2>
              <p class="col-lg-6">Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then, mix and match with additional component themes and more.</p>
              <button class="btn btn-outline-light" type="button">Example button</button>
            </div>
          </div>
      </div> 
    </section>
      <section id="produk-home">
        <div class="  py-5" >
          <div class="container marketing px-5" >

            <!-- Three columns of text below the carousel -->
            <div class="row text-center">
              <h1 class="mb-5 text-dark">Produk</h1>
              <div class="col-lg-4 mb-3">
                <a class="text-decoration-none text-dark" href="">
                  <div class="card mb-3 shadow p-3" style="max-width: 510px; border-radius: 15px">
                    <img src="img/rempah.png" class="img-fluid rounded-start " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </a>
              </div><!-- /.col-lg-4 -->
               
              <div class="col-lg-4 mb-3">
                <a class="text-decoration-none text-dark" href="">
                  <div class="card mb-3 shadow p-3" style="max-width: 510px; border-radius: 15px">
                    <img src="img/rempah.png" class="img-fluid rounded-start " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </a>
              </div><!-- /.col-lg-4 -->
              
              <div class="col-lg-4 mb-3">
                <a class="text-decoration-none text-dark" href="">
                  <div class="card mb-3 shadow p-3" style="max-width: 510px; border-radius: 15px">
                    <img src="img/rempah.png" class="img-fluid rounded-start " alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                  </div>
                </a>
              </div><!-- /.col-lg-4 -->
            
            
        </div>
        <div class="text-center d-grid gap-2 col-md-5 mx-auto">

          <a href="/produk " class="btn btn-outline-dark btn-lg  px-5" style=" border-radius: 10px; ">Tampilkan Lebih Banyak</a>
        </div>

      
        
      </section>
      <section id="pemesanan-home" >
        <div style="background-color:#FF0000; padding-bottom:5em; padding-bottom:5em;">
          <div class="container ">
              <h1 class="text-center text-light py-5">Pesan </h1>
              <div class="row mx-5 px-5 text-center" style="padding-right:10rem">
                <div class="col-md-6  mb-5 text-light  " >
                  <img src="logo/shopee_black.png" width="90px" alt="">
                  <h1  class="d-inline align-bottom">Shopee</h1>
                </div>
                <div class="col-md-6  mb-5 text-light ">
                  <img src="logo/tokopedia_black.png" width="90px" alt="">
                  <h1  class="d-inline align-bottom">Tokopedia</h1>
                </div>
                </div>
              </div>
          </div>
        </div>
       
      </section>
      <section id="events-home">
        <div class="container my-5 ">

          <div class="row g-0">
            <div class="col-md-6 ">
              <img src="img/orang_1.png"  class=" img-fluid rounded-start" alt="...">

            </div>
            <div class="col-md-6">
              <div class="card-body " style="padding-top: 8rem">
                <h1 class="card-title ">Events <i class="fas fa-calendar-week ps-3" ></i></h1>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                <a href="#" class="btn btn-outline-dark btn-lg ">Hubungi Kami</a>
              </div>
            </div>
          </div>   

        </div>
        
      </section>
    </div>

@endsection
