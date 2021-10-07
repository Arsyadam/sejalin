@extends('layouts.main')

@section('section')
<div class="container" style="margin-bottom:10rem; margin-top:5.3rem; ">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="text-center ">
                    <form action="/login" method="POST">
                        @csrf
                        <img class="mb-4" src="logo/SEJALIN_Logo_merah.png" alt="" width="100" >
                        <h1 class="h3 mb-3 fw-normal">Silahkan sign in</h1>
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        @if (session()->has('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                       
                        <div class="form-floating ">
                            <input type="text" name="username" id="username" class="form-control rounded-0 rounded-top @error('username') is-invalid @enderror"  placeholder="username" value="{{ old('username') }}" autofocus required>
                            <label for="username">Username</label>
                        </div>
                        @error('username') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <div class="form-floating mb-3">
                            <input id="password" name="password" type="password" class="form-control rounded-0 rounded-bottom @error('password') is-invalid @enderror"  placeholder="kata sandi" required>
                            <label for="password">Kata Sandi</label>
                        </div>
                        @error('password') 
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; @php echo date("Y"); @endphp - Sejalin Creative</p>
                    </form>
                </main>
        </div>
    </div>
</div>  

@endsection