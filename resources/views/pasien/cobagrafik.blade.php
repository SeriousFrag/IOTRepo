{{-- <script type="text/javascript" src="/grafik/assets/js/jquery-3.4.0.min.js"></script>
<script type="text/javascript" src="/grafik/assets/js/mdb.min.js"></script>
<script type="text/javascript" src="/grafik/jquery-latest.js"></script> --}}

<div class="panel panel-success">
        <div class="panel-heading">
            Grafik Suhu Kelembaban dan windspeed
        </div>

        <div class="panel-body">
            <canvas id="myChart"></canvas>
            <script type="text/javascript">
                var canvas = document.getElementById('myChart');
                var data = {
                    labels : [
                        @foreach($datasuhu as $dt)
                        '{{ $dt->created_at }}',
                        @endforeach
                    ],
                    datasets : [
                        {
                        label : "Suhu",
                        // backgroundColor: 'rgba(0,0,0,0)',
                        backgroundColor: 'rgba(0, 144, 215, 0.45)',
                        borderColor: 'rgba(0, 154, 215, 1)',
                        data : [
                        @foreach($datasuhu as $dt)
                        {{ $dt->suhu }},
                        @endforeach
                        ]
                    },

                    {
                        label : "Kelembaban",
                        // backgroundColor: 'rgba(0,0,0,0)',
                        backgroundColor: 'rgba(0, 223, 7, 0.4)',
                        borderColor: 'rgba(0, 223, 7, 1)',
                        data : [
                        @foreach($datasuhu as $dt)
                        {{ $dt->kelembaban }},
                        @endforeach
                        ]
                    },

                    {
                        label : "Kecepatan Angin",
                        // backgroundColor: 'rgba(0,0,0,0)',
                        backgroundColor: 'rgba(243, 78, 37, 0.4)',
                        borderColor: 'rgba(243, 78, 37, 1)',
                        data : [
                        @foreach($datasuhu as $dt)
                        {{ $dt->kecepatan_angin }},
                        @endforeach
                        ]
                    }
                ]} ;
                var option = {
                    showLines : true,
                    animation : {duration : 0}
                };

                var myLineChart = Chart.Line(canvas, {
                    data : data,
                    options : option
                });



            </script>
        </div>
    </div>

