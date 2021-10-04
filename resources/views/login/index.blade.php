@extends('layouts.main')

@section('section')
<div class="container" style="margin-bottom:10rem; margin-top:5.3rem; ">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="text-center ">
                    <form>
                        <img class="mb-4" src="logo/SEJALIN_Logo_merah.png" alt="" width="100" >
                        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
                    
                        <div class="form-floating ">
                            <input type="text" class="form-control rounded-0 rounded-top" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Username</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-0 rounded-bottom" id="floatingPassword" placeholder="Password">
                            <label for="floatingPassword">Password</label>
                        </div>
                        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                        <p class="mt-5 mb-3 text-muted">&copy; @php echo date("Y"); @endphp - Sejalin Creative</p>
                    </form>
                </main>
        </div>
    </div>
</div>  

@endsection