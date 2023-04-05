@extends('detail')
@section('detail-artikel')
    <div class="container breadcrumbs my-0 pl-3 pr-3 pt-4 pb-4">
        <p id="breadcrumbs"><span><span><a href="/">Home</a></span> » <span class="breadcrumb_last"
                    aria-current="page">Selalu Sarapan Pagi</span></span></p>
    </div>

    <!-- Main content -->
    <div class="card card-post">
        <div class="card-body">
            <div class="container-xxl pt-1 pb-2">
                <div class="container">
                    <div class="row g-5">
                        <div class="col wow fadeIn" data-wow-delay="0.5s">
                            <h1 class="display-5 mb-4 text-center">Selalu Sarapan Pagi</h1>
                            {{-- <img class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt=""> --}}
                            <p style="text-align: justify"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sarapan pagi merupakan aktifitas
                                yang sangat bermanfaat bagi tubuh. Sarapan adalah kegiatan makan dan minum yang dilakukan
                                antara bangun pagi sampai jam 9 untuk memenuhi sebagian kebutuhan gizi harian 19 (15-30%
                                kebutuhan gizi) dalam rangka mewujudkan hidup sehat, aktif, dan produktif. Sarapan sehat
                                setiap pagi dapat diwujudkan dengan bangun pagi, mempersiapkan dan mengonsumsi makanan dan
                                minuman pagi sebelum melakukan aktifitas harian. Sarapan yang baik terdiri dari pangan
                                karbohidrat, pangan lauk-pauk, sayuran atau buah-buahan dan minuman. Sarapan pagi juga
                                membantu untuk memenuhi kebutuhan gizi tubuh serta meningkatkan energi positif dan
                                konsentrasi. Seseorang yang sering melewatkan sarapan pagi mempunyuai resiko tekanan darah
                                tinggi dan naiknya kadar kolestrol tubuh.
                            </p>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/TnobzLyBv5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Post -->
        </div>
    </div>
@endsection
