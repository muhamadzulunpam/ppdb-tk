<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>QuickPustaka</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
 
    <!-- Favicons -->
    <link href="{{ asset('assets/img/logoTk.png') }}" rel="icon">
    <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <style>
      /* Ensure the login container covers the full viewport */
      .login {
        background-image: url({{ asset('assets/img/pendaftaran.jpg') }});
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        height: 100vh; /* Full viewport height */
        display: flex;
        align-items: center; /* Center content vertically */
        justify-content: center; /* Center content horizontally */
      }
      .card {
        background-color: rgba(255, 255, 255, 0.8); /* White background with 80% opacity */
        border: none; /* Remove border for cleaner look */
      }
      .iconHeader a:hover {
          color: red !important;
      }

    </style>
  </head>
  <body>
    <div class="login">
      <!-- Add any content you want centered here -->
      <div class="container">
        <div class="row justify-content-center">
 
           {{-- berhasil --}}
          @if(session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        {{-- berhasil --}}


        {{-- salaahhhh --}}
        @if(session('loginError'))
            <div class="alert alert-danger">
                {{ session('loginError') }}
            </div>
        @endif
        {{-- salaaaahhhh --}}
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="header logo d-flex align-items-center justify-content-between">
                        <div class="gambar d-flex">
                            <div class="go mt-4 ms-3">
                                <img src="{{ asset('assets/img/logoTk.png') }}" width="35%">
                            </div>
                            {{-- <h1 class="sitenamem mt-4 ms-2 fs-5 fw-bold">QuickPustaka</h1> --}}
                        </div> 
                        <div class="iconHeader me-3">
                            <a href="/" class="text-primary text-decoration-none" style="transition: color 0.2s;" onmouseover="this.style.color='red'" onmouseout="this.style.color=''" >
                                <i class="bi bi-x-lg fs-4" style="cursor: pointer;"></i>
                            </a>
                        </div>

                     
                    </div>
                    <div class="card-body">
                      <h3 class="card-title text-center mb-5 mt-3">Form Login</h3>
                      <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="username" class="form-label">Username :</label>
                          <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password :</label>
                          <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn w-100" style="background-color:rgb(162, 184, 194);">Login</button>
                        <p class="text-center mt-3">Don't have an account? <a href="https://wa.me/6281234567890" target="_blank" class="text-blue-600 hover:underline">
                            Chat Admin Now
                        </a></p>   
                      </form>
                    </div>
                  </div>
            </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
