@extends('layouts.app')
@section('content')
<nav class="wow fadeIn text-center mt-3" data-wow-delay="0.1s" style="background-color: #FFFFE8;">
        <h1 class="text-primary">Gizi Seimbang, Senyum Berkembang</h1>
</nav>
<div class="page-content page-single fadeIn" style="height: auto !important; background-color:#FFFFE8;">
    <section style="height: auto !important; background-color:#FFFFE8;">

    

        <div class="container" style="height: auto !important;">
            <div class="row" style="height: auto !important;">
                <div class="col-lg-9 col-xs-12 col-sm-12">

                    @yield('detail-artikel')
                    {{-- <!-- Main content -->
                    <div class="card card-post">
                        <div class="card-body">
                            
                            <!-- Post -->
                        </div>
                    </div> --}}
                </div>
                <div class="col-lg-3 col-sm-12 col-xs-12"
                    style="height: auto !important; min-height: 0px !important;">
                    <div class="dah-sidebar" style="height: auto !important;">

                        <!-- list tutorial per kategori -->
                        <div class="sidebar-content">
                            <h4 class="my-special-class">Tutorial HTML Dasar</h4>
                            <ul>
                                <li>
                                    <a href="detail1">#1.
                                        Mengkonsumsi Aneka Makanan Pokok</a>
                                </li>
                                <li>
                                    <a href="detail2">#2.
                                        Membatasi Diri Untuk Konsumsi Makanan Manis, Asin dan Berlemak</a>
                                </li>
                                <li>
                                    <a
                                        href="detail3">#3.
                                        Pertahankan Berat Badan Ideal (BBI) dengan Beraktifitas Fisik</a>
                                </li>
                                <li>
                                    <a href="detail4">#4. Mengenal
                                        Konsumsi Lauk Berprotein Tinggi</a>
                                </li>
                                <li>
                                    <a href="detail5">#5.
                                        Cuci Tangan Dengan Sabun</a>
                                </li>
                                <li>
                                    <a href="detail6">#6.
                                        Bersyukur Atas Keanekaragaman Maknanan</a>
                                </li>
                                <li>
                                    <a href="detail7">#7.
                                        Senantiasa Membaca Label dalam Kemasan Makanan</a>
                                </li>
                                <li>
                                    <a href="detail8">#8.
                                        Makan Buah dan Sayur</a>
                                </li>
                                <li>
                                    <a href="detail9">#9.
                                        Minum Air Putih Secara Cukup</a>
                                </li>
                                <li>
                                    <a href="detail10">#10.
                                        Selalu Sarapan Pagi</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
