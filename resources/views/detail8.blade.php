@extends('detail')
@section('detail-artikel')
    <div class="container breadcrumbs my-0 pl-3 pr-3 pt-4 pb-4">
        <p id="breadcrumbs"><span><span><a href="/">Home</a></span> » <span class="breadcrumb_last"
                    aria-current="page">Makan Buah Dan Sayur</span></span></p>
    </div>

    <!-- Main content -->
    <div class="card card-post">
        <div class="card-body">
            <div class="container-xxl pt-1 pb-2">
                <div class="container">
                    <div class="row g-5">
                        <div class="col wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="display-5 mb-4 text-center">Makan Buah Dan Sayur</h1>
                            {{-- <img class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""> --}}
                            <p style="text-align: justify"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sayur dan buah banyak mengandung
                                vitamin dan mineral yang dibutuhkan oleh tubuh. Sangat baik jika kita rutin memberi asupan
                                tubuh berupa sayur dan buah setiap harinya. Berbagai kajian menunjukkan bahwa konsumsi
                                sayuran dan buahbuahan yang cukup turut berperan dalam menjaga kenormalan tekanan darah,
                                kadar gula dan kolesterol darah. Hal ini menunjukkan bahwa konsumsi sayuran dan buah-buahan
                                yang cukup turut berperan dalam pencegahan penyakit tidak menular kronik. Bagi orang
                                Indonesia dianjurkan konsumsi sayuran dan buah-buahan 300-400 g perorang perhari bagi anak
                                balita dan anak usia sekolah, dan 400-600 g perorang perhari bagi remaja dan orang dewasa.
                                Sekitar dua-pertiga dari jumlah anjuran konsumsi sayuran dan buah-buahan tersebut adalah
                                porsi sayur. Konsumsi sayuran dan buah-buahan yang cukup merupakan salah satu indikator
                                sederhana gizi seimbang.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Post -->
        </div>
    </div>
@endsection
