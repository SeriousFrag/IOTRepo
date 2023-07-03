@extends('template')
@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
            integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <title>Heroic Features - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    
    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        
    


    </head>

    <body>
    <!-- Responsive navbar-->
        {{-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-lg-5">
                <a class="navbar-brand" href="#!"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> --}}
        <!-- Header-->
        <header class="py-5">
            <div class="container px-lg-5">
                <div class="p-4 p-lg-5 bg-light rounded-3 text-center">
                    <div class="m-4 m-lg-5">
                        <h1 class="display-5 fw-bold">Tim Anemo</h1>
                        <p class="fs-4">Tim Project Anemo TE20</p>
                    </div>
                </div>
            </div>
        </header>
        <!-- Page Content-->
        <section class="pt-4">
            <div class="container px-lg-5">
                <!-- Page Features-->
                <div class="row justify-content-center gx-lg-5">
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-kanban-fill"></i></div>
                                <h2 class="fs-4 fw-bold">Zahra Fauziyah Ekaputri</h2>
                                <p class="mb-0">3332200029<br><b>Project Manager</b></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-lg-5">
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-building"></i></div>
                                <h2 class="fs-4 fw-bold">Shafa Divanka A</h2>
                                <p class="mb-0">3332200058<br><b>Tim Hardware</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-building"></i></div>
                                <h2 class="fs-4 fw-bold">Wijdaan Fajri Ramadhan</h2>
                                <p class="mb-0">3332200046<br><b>Tim Hardware</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-building"></i></div>
                                <h2 class="fs-4 fw-bold">Yusuf Christian</h2>
                                <p class="mb-0">3332200036<br><b>Tim Hardware</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-building"></i></div>
                                <h2 class="fs-4 fw-bold">Fajar Dwi Fitran</h2>
                                <p class="mb-0">3332200015<br><b>Tim Hardware</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Gilang Bayu Saputra</h2>
                                <p class="mb-0">3332200014<br><b>Tim Website</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">M Ilham Ramadhan S</h2>
                                <p class="mb-0">3332200062<br><b>Tim Website</b></p>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="row justify-content-center gx-lg-5">
                <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Yohanes Alfredo</h2>
                                <p class="mb-0">3332200045<br><b>Tim Website</b></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-4 mb-5">
                        <div class="card bg-light border-0 h-100">
                            <div class="card-body text-center p-4 p-lg-5 pt-0 pt-lg-0">
                                <div class="feature bg-warning bg-gradient text-white rounded-3 mb-4 mt-n4"><i class="bi bi-code"></i></div>
                                <h2 class="fs-4 fw-bold">Muhammad Sofyan Abiyyu</h2>
                                <p class="mb-0">3332200060<br><b>Tim Website</b></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        



        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
        </script>
    </body>

    </html>
@endsection
