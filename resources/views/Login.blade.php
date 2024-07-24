<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PT JASAMEDIKA TRANSMEDIC</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row">
                            <img src="images/logo.jpg" class="logo">
                        </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                            <img src="images/catering.jpg" class="image">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        @if (session('Berhasil'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('Berhasil') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if (session('loginError'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('loginError') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Masuk Menggunakan </h6>
                            <div class="facebook text-center mr-3"><div class="fa fa-facebook"></div></div>
                            <div class="twitter text-center mr-3"><div class="fa fa-twitter"></div></div>
                            <div class="linkedin text-center mr-3"><div class="fa fa-linkedin"></div></div>
                        </div>
                        <div class="row px-3 mb-4">
                            <div class="line"></div>
                            <small class="or text-center">Atau</small>
                            <div class="line"></div>
                        </div>
                        <form action="/Login" method="POST">
                            @csrf
                            <div class="row px-3">
                                <label class="mb-2"><h6 class="mb-0 text-sm">Alamat Email Anda</h6></label>
                                <input class="mb-2 form-control @error ('email') is-invalid @enderror" type="text" name="email" id="email" placeholder="Masukkan Alamat Email Yang Valid" autofocus required value="{{ old('email') }}">
                                @error('email')
                                <div class="invalid-feedback mb-3">
                                    {{ $message }}
                                </div>
                            @enderror
                            </div>
                            <div class="row px-3">
                                <label class="mb-2"><h6 class="mb-0 text-sm">Password</h6></label>
                                <input class="mb-2 form-control " type="password" name="password" id="password" placeholder="Masukkan Password" required>
                            
                            </div>
                            <br>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-primary text-center">Login</button>
                            </div>
                        </form>
                        <div class="row mb-4 px-3">
                            <small class="font-weight-bold">Belum Mempunyai Akun ? <a href="/Register" class="text-danger ">Daftar Sekarang</a></small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2">Hak Cipta &copy; 2024. PT JASAMEDIKA TRANSMEDIC.</small>
                    <div class="social-contact ml-4 ml-sm-auto">
                        <span class="fa fa-facebook mr-4 text-sm"></span>
                        <span class="fa fa-google-plus mr-4 text-sm"></span>
                        <span class="fa fa-linkedin mr-4 text-sm"></span>
                        <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>
