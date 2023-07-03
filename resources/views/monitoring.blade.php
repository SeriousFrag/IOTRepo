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


        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script>
        $(document).ready( function(){
            $.ajax({
                url: "{{ url('/pasien/cobagrafik') }}",
                success: function(data) {
                    $("#grafik2").html(data);
                }
            });
           setInterval( function(){
            $.ajax({
                url: "{{ url('/pasien/tampilsuhu') }}",
                success: function(data) {
                    $("#suhu").html(data);
                }
            }); 
            $.ajax({
                url: "{{ url('/pasien/tampilkelembaban') }}",
                success: function(data) {
                    $("#kelembaban").html(data);
                }
            });
            $.ajax({
                url: "{{ url('/pasien/tampilangin') }}",
                success: function(data) {
                    $("#angin").html(data);
                }
            });
            $.ajax({
                url: "{{ url('/status') }}",
                success: function(data) {
                    $("#status").html(data);
                }
            });
            
        //    $("#status").load("{{ url('/pasien/tampilstatus') }}");
        //    $("#grafik").load("{{ url('/pasien/tampilgrafik') }}");
            
           }, 1500);
           setInterval( function(){
            $.ajax({
                url: "{{ url('/pasien/cobagrafik') }}",
                success: function(data) {
                    $("#grafik2").html(data);
                }
            });

        }, 6000);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.4.0.js" integrity="sha256-DYZMCC8HTC+QDr5QNaIcfR7VSPtcISykd+6eSmBW5qo=" crossorigin="anonymous"></script>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.1/mdb.min.js"></script>
    <script type="text/javascript" src="grafik/jquery-latest.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <link rel="stylesheet" href="/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
        
    </head>

    <body>

        <!-- tampilan website header! -->
        <div class="contrainer" style="text-align: center; margin-top: 75px;">
            <img src="{{ 'images/Untirta-Logo-Transparan.webp' }}" style="width: 60px ">
            <h2>Dashboard</h2>
        </div>
        <div class="container" style="text-align: center; margin-top:12px">
            <div style="text-align: center;">
                <div id="status"  class="card-body" style="text-align:center">
                    <h2>status</h2>
                </div>
            </div>
        </div>

        <!-- tampulan nilai ukuran kecepatan -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">

                    <div class="card">
                        <div class="card-header" style="text-align: center; background-color: yellow; color: black;">
                            <h4>Kecepatan Angin</h4>
                        </div>
                        <div class="card-body">
                            <div id="angin" style="text-align: center; font-size: 70px; font-weight: bold;">
                                <span>0</span> <span style="font-size: 24px; vertical-align: top; ">m/s</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" style="text-align: center; background-color: yellow; color: black;">
                            <h4>Suhu <br> </h4>
                        </div>
                        <div class="card-body">
                            <div id="suhu" style="text-align: center; font-size: 70px; font-weight: bold;">
                                <span>0</span> <span style="font-size: 24px; vertical-align: top; ">°C</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header" style="text-align: center; background-color: yellow; color: black;">
                            <h4>Kelembapan</h4>
                        </div>
                        <div class="card-body">
                            <div id="kelembaban"style="text-align: center; font-size: 70px; font-weight: bold;">
                                <span>0</span> <span style="font-size: 24px; vertical-align: top; ">%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="container" id="grafik2" style="width:70%; text-align:center">
                    </div>
                </div>
            </div>
        </div>
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
