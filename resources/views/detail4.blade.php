@extends('detail')
@section('detail-artikel')

<div class="container breadcrumbs my-0 pl-3 pr-3 pt-4 pb-4">
    <p id="breadcrumbs"><span><span><a href="/">Home</a></span> » <span
                class="breadcrumb_last" aria-current="page">Konsumsi Lauk Berprotein Tinggi</span></span></p>
</div>
    <!-- Main content -->
    <div class="card card-post">
        <div class="card-body">
            <div class="container-xxl pt-1 pb-1 ">
                <div class="container">
                    <div class="row g-5">
                        <div class="col wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="display-5 mb-4 text-center">Konsumsi Lauk Berprotein Tinggi</h1>
                            {{-- <img class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""> --}}
                            <p style="text-align: justify"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Secara umum protein dibagi
                                menjadi dua, yaitu protein hewani dan protein nabati. Hendaknya dalam mengkonsumsi makanan
                                dibarengi dengan lauk yang berprotein tinggi. Lauk yang mengandung protein tidak harus
                                bernilai jual tinggi. Lauk berprotein tinggi dapat dijumpai dengan harga yang terjangkau
                                contohnya adalah olahan kedelai berupa tahu, atau sayuran brokoli. Protein hewani yang mudah
                                dijumpai diantaranya adalah telur dan daging. Fungsi protein bagi tubuh adalah berperan
                                sebagai penyusun sel tubuh. Kebutuhan pangan hewani 2-4 porsi (setara dengan 70-140 gr/2-4
                                potong daging sapi ukuran sedang atau 80-160 gr/2-4 potong daging ayam ukuran sedang atau
                                80-160 gr/2-4 potong ikan ukuran sedang) 15 sehari dan pangan protein nabati 2-4 porsi
                                sehari ( setara dengan 100-1 00 gr/ 4-8 potong tempe ukuran sedang atau 200-400 gr/ 4-8
                                potong tahu ukuran sedang) tergantung kelompok umur dan kondisi fisiologis (hamil, menyusui,
                                lansia, anak, remaja, dewasa). </p>

                            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                                style="max-width: 600px;">
                                <h4 class="section-title">Contoh</h4>

                            </div>
                            <div class="row g-0 team-items">
                                <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-delay="0.1s">
                                    <div class="team-item position-relative">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('assets/img/tempe.png') }}" alt="">

                                        </div>
                                        <div class="text-center p-1 " style="background-color: #CDE990; color:black">
                                            <h3 class="mt-1 ">Tempe</h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-delay="0.3s">
                                    <div class="team-item position-relative">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('assets/img/tahu.png') }}" alt="">

                                        </div>
                                        <div class="text-center p-1 " style="background-color: #CDE990; color:black">
                                            <h3 class="mt-1 ">Tahu</h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="team-item position-relative">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('assets/img/sapi.png') }}" alt="">

                                        </div>
                                        <div class="text-center p-1 " style="background-color: #CDE990; color:black">
                                            <h3 class="mt-1 ">Sapi</h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item position-relative">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('assets/img/ikan.png') }}" alt="">

                                        </div>
                                        <div class="text-center p-1 " style="background-color: #CDE990; color:black">
                                            <h3 class="mt-1 ">Ikan</h3>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-5 wow fadeInUp" data-wow-delay="0.7s">
                                    <div class="team-item position-relative">
                                        <div class="position-relative">
                                            <img class="img-fluid" src="{{ asset('assets/img/ayam.png') }}" alt="">

                                        </div>
                                        <div class="text-center p-1 " style="background-color: #CDE990; color:black">
                                            <h3 class="mt-1 ">Ayam</h3>

                                        </div>
                                    </div>
                                </div>
                            </div>                           
                            <!-- Team End -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post -->
        </div>
    </div>
@endsection
