@extends('layouts.main')

@section('section')
<div class="container" style="margin-bottom:10rem; margin-top:5.3rem; ">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="text-center ">
                    <form action="/register" method="POST">
                        @csrf
                        <img class="mb-4" src="logo/SEJALIN_Logo_merah.png" alt="" width="100" >
                        <h1 class="h3 mb-3 fw-normal">Please Register</h1>
                    
                        <div class="form-floating ">
                            <input type="text" class="form-control rounded-0 rounded-top @error('name') is-invalid @enderror" id="name" name="name" placeholder="your name">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }} 
                                </div>
                            @enderror
                            <label for="floatingInput">Nama</label>
                        </div>
                        <div class="form-floating ">
                            <input type="text" class="form-control rounded-0 @error('username') is-invalid @enderror" id="username" name="username"  placeholder="username">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }} 
                                </div>
                            @enderror
                            <label for="username">Username</label>
                        </div>
                        <div class="form-floating ">
                            <input type="email" class="form-control rounded-0 @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }} 
                                </div>
                            @enderror
                            <label for="email">Alamat Email</label>
                        </div>
                        <div class="form-floating mb-1">
                            <input type="password" class="form-control rounded-0 rounded-bottom  @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }} 
                                </div>
                            @enderror
                            <label for="password">Kata Sandi</label>
                        </div>
                        <div class="form-check text-start mb-3">
                            <input class="form-check-input @error('admin') is-invalid @enderror" type="checkbox" value="true" name="admin" id="admin">
                            <label class="form-check-label" for="admin">
                                Is Admin
                            </label>
                            @error('admin')
                            <div class="invalid-feedback">
                                {{ $message }} 
                            </div>
                        @enderror
                        </div>
                          
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                        <p class="mt-5 mb-3 text-muted">&copy; @php echo date("Y"); @endphp - Sejalin Creative</p>
                    </form>
                </main>
        </div>
    </div>
</div>  

@endsection