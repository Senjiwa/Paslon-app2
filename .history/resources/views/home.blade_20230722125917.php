@extends('layouts.navbar')

@section('content1')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-9">

            <div class="swiper mySwiper mb-4">
                <div class="swiper-wrapper">
                    @if(count($jumbo) > 0)
                        @foreach($jumbo as $row)
                            <div class="swiper-slide">
                                <div class="hot-news">
                                    <img src="{{asset('upload/berita/').'/'.$row->gambar}}" alt="Card image cap">
                                    <div class="content">
                                        <h5>{{$row->judul}}</h5>
                                        <div class="card-text">{!! $row->isi_berita !!}</div>
                                        <a href="{{ route('berita-detail', $row->id) }}">Read More...</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
            
            <div class="col-md-12">
                <h4 class="title-news">List News</h4>
                <hr class="row-title" />
            </div>
            
            <div class="row">
            @foreach($berita as $row)
            <div class="col-md-4 mb-4">
                <div class="card berita">
                    <img class="card-img-top" src="{{asset('upload/berita/').'/'.$row->gambar}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-overflow-clamp">
                            <a class="link-title" href="{{ route('berita-detail', $row->id) }}">{{ $row->judul }}</a>
                            <div class="date-news">
                                <span class="fas fa-calendar-alt"></span>
                                <label>{{ date('F d, Y', strtotime($row->created_at)) }}</label>
                            </div>
                        </h5>
                        <div class="card-text">{!! $row->isi_berita !!}</div>
                    </div>
                </div>
            </div>
            @endforeach
            </div>
            
        </div>
        
    </div>
    <div class="container col-md-3 ">
            <div class="sticky-top">
                <h4 class="title-news text-center">Vote Tertinggi</h4>
                <canvas id="myChart" class="" width="10" height="6"></canvas>
            </div>
            
        </div>
</div>

<script type="text/javascript">
    $(document).ready(function(){
        var jumlahCoblos = @json($jumlah_coblos);
        
        new Chart(document.getElementById('myChart'), {
            type: 'bar',
            data: {
                labels: @json($nama_paslon),
                datasets: [{
                    label: 'Jumlah Coblos',
                    data: jumlahCoblos,
                    fill: false,
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(255, 159, 64, 0.2)', 'rgba(75, 192, 192, 0.2)'],
                    borderColor: ['rgb(255, 99, 132)', 'rgb(255, 159, 64)', 'rgb(75, 192, 192)'],
                    borderWidth: 1
                }]
            },
            options: {
                plugins: {
                    labels: {
                        render: 'image',
                        textMargin: 10,
                        images: @json($gambar_paslon)
                    }
                },
                layout: {
                    padding: {
                        top: 30
                    }
                },
                legend: {
                    display: false
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true,
                            steps: 10,
                            stepValue: 5,
                            max: (jumlahCoblos[0] + jumlahCoblos[0]) + 10
                        }
                    }]
                }
            }
        });
    })
</script>
@endsection