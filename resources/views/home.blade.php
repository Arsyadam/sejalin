@extends('layouts.main')

@section('section')
    <section >
        @include('partials.caraousel')

    </section>
      
      <section id="produk-home">
        <div class="bg-danger mb-5">
          <div class="container py-5 ">
            <h1 class="text-light mb-5">Produk</h1>
            <div class="row ">
              <div class="col-4">
                <div class="card" style="width: 25rem;">
                  <img src="img/background.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <div class="col-4 ">
                <div class="card shadow" style="width: 25rem;">
                  <img src="img/background.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

              <div class="col-4 mb-3 ">
                <div class="card" style="width: 25rem;">
                  <img src="img/background.png" class="card-img-top" alt="...">
                  <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <section id="about-home">
        <div class="container">

          <div class="row g-0">
            <div class="col-md-6">
              <div class="card-body">
                <h1 class="card-title">Tentang Kami</h1>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
              </div>
            </div>
            <div class="col-md-6">
              <img src="img/orang_1.png"  class=" img-fluid rounded-start" alt="...">
            </div>
          </div>   

        </div>
        
      </section>
      <section id="reseller-home" class="mb-5">
        <div class="bg-danger">
          <div class="container ">
              <h1 class="text-center text-light">Pesan </h1>
              <div class="row">
                <div class="col-6 text-center mb-3">
                  <img src="logo/tokopedia_logo.png" width="300rem" alt="">
                </div>
              </div>
          </div>
        </div>
       
      </section>
@endsection
{{-- <div class="row">
              
  <div class="col-md-6">
    <div class="card mb-3 border-0 shadow p-4" style="max-width: 540px; border-radius:20px;">
      <div class="row">
        <div class="col-md-4">
          <img src="img/kapal.png" height="200px" class="img-fluid rounded-start " alt="...">
        </div>
        <div class="col-md-8">
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to .</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  

</div> --}}