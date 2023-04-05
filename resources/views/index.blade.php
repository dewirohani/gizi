@extends('layouts.app')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 pb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative" data-dot="<img src='{{ asset('assets/img/carousel-1.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousel-1.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Gizipedia</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Gizi Seimbang, Senyum Berkembang</p>
                                {{-- <a href="" class="btn btn-light py-3 px-5 animated slideInLeft">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/img/carousel-2.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousel-2.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Gizipedia</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Gizi Seimbang, Senyum Berkembang</p>
                                {{-- <a href="" class="btn btn-light py-3 px-5 animated slideInLeft">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative"
                data-dot="<img src='{{ asset('assets/img/carousel-3.jpg') }}'>">
                <img class="img-fluid" src="{{ asset('assets/img/carousel-3.jpg') }}" alt="">
                <div class="owl-carousel-inner">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-1 text-white animated slideInDown">Gizipedia</h1>
                                <p class="fs-5 fw-medium text-white mb-4 pb-3">Gizi Seimbang, Senyum Berkembang</p>
                                {{-- <a href="" class="btn btn-light py-3 px-5 animated slideInLeft">Read More</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Start -->
    <div class="container-xxl pt-1 pb-2">
        <div class="container">
            <div class="row g-5">
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4 text-center">Gizi Seimbang, Senyum Berkembang</h1>
                    <p style="text-align: justify"> &nbsp;&nbsp;&nbsp; Tubuh manusia terdiri dari banyak organ yang
                        membentuk keseimbangan tubuh, organ organ tubuh membutuhkan asupan gizi supaya tetap terjaga dan
                        dapat berfungsi dengan baik. Gizi yang baik adalah gizi yang seimbang yaitu suatu susunan asupan
                        yang harus didapat oleh seseorang dalam setiap harinya, kadar gizi yang dibutuhkan disesuaikan
                        dengan kebutuhan tubuh. Kadar kuantitas dan kualitas sebuah asupan sangat penting dalam menjaga
                        kesehatan tubuh serta tumbuh kembang yang sempurna. Manusia yang tidak menjaga asupan gizinya akan
                        merugi dikemudian hari, hal ini dikarenakan terdapat dampak jangka panjang maupun pendek yang
                        diakibatkan oleh lalainya menjaga asupan gizi dalam tubuh.</p>
                    <p class="mb-4" style="text-align: justify"> &nbsp;&nbsp;&nbsp; Fungsi gizi yang seimbang adalah
                        membuat badan tetap terjaga kesehatannya, tubuh tidak mudah terinfeksi suatu penyakit sehingga
                        produktifitas pekerjaan yang dilakukan meningkat serta badan terlindung dari penyakit penyakit
                        kronis. Urgensi tentang gizi yang seimbang menyebabkan Kementrian Kesehatan Republik Indonesia
                        mengeluarkan pedoman yang berkaitan dengan cara mewujudkan gizi yang seimbang.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Service Start -->
    <div class="container-xxl pb-5">
        <div class="container">
            <div class="row g-2">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-1.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Mengkonsumsi aneka makanan pokok</h3>
                            <p class="mb-4">Makanan pokok merupakan makanan yang mengandung prosentase karbohidrat yang
                                tinggi. Selain mengandung karbo.....</p>
                            <a class="btn" href="detail1"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-2.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Membatasi Diri Untuk Konsumsi Makanan Manis, Asin Dan Berlemak</h3>
                            <p class="mb-4">Cita rasa suatu masakan dipengaruhi oleh beberapa hal, diantaranya adalah
                                bumbu yang terkandung dalam masakan. Cita rasa...</p>
                            <a class="btn" href="detail2"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-3.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Pertahankan Berat Badan Ideal (BBI) Dengan Beraktifitas Fisik</h3>
                            <p class="mb-4">Berat badan yang ideal merupakan aspek penting dalam menjaga kesehatan.
                                Diantara manfaat berat badan ideal adalah badan menjadi bugar dan aktif serta tidak mudah
                                terserang penyakit.....</p>
                            <a class="btn" href="detail3"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-4.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Konsumsi Lauk Berprotein Tinggi</h3>
                            <p class="mb-4">Secara umum protein dibagi menjadi dua, yaitu protein hewani dan protein
                                nabati. Hendaknya dalam mengkonsumsi makanan dibarengi dengan lauk yang berprotein tinggi.
                                Lauk yang mengandung protein tidak.....</p>
                            <a class="btn" href="detail4"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-5.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Cuci Tangan Pakai Sabun</h3>
                            <p class="mb-4">Sebagai orang yang bergerak aktif, kita seringkali bersentuhan dengan benda
                                benda yang terkontaminasi dengan bakteri maupun penyakit. Hendaknya kita sering untuk
                                mencuci tangan dengan sabun sebagai antiseptik.....</p>
                            <a class="btn" href="detail5"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-6.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Bersyukur Atas Keanekaragaman Makanan</h3>
                            <p class="mb-4">Aneka ragam makanan yang tersedia hendaknya dinikmati dalam porsi yang cukup,
                                jika tubuh diberi asupan yang beragam maka semakin beragam nutrisi yang masuk kedalam tubuh
                                sehingga asupan tubuh.....</p>
                            <a class="btn" href="detail6"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-1.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Senantiasa Membaca Label Dalam Kemasan Makanan</h3>
                            <p class="mb-4">Saat ini banyak makanan siap saji yang dijual diberbagai toko, baik toko
                                dalam skala kecil maupun besar. Setiap makanan siap saji yang terkemas mengandung nilai
                                nutrisi yang terkandung didalamnya.....</p>
                            <a class="btn" href="detail7"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-2.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Makan Buah Dan Sayur</h3>
                            <p class="mb-4">Sayur dan buah banyak mengandung vitamin dan mineral yang dibutuhkan oleh
                                tubuh. Sangat baik jika kita rutin memberi asupan tubuh berupa sayur dan buah setiap
                                harinya. Berbagai kajian menunjukkan bahwa.....</p>
                            <a class="btn" href="detail8"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-3.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Minum Air Putih Secara Cukup</h3>
                            <p class="mb-4">Air putih adalah cairan yang sanagt dibutuhkan oleh tubuh. Air putih membantu
                                memberikan energi untuk otot dan menjaga sendi tetap lentur. Air putih juga memiliki fungsi
                                dalam sistem pencernaan dan penyerapan makanan serta.....</p>
                            <a class="btn" href="detail9"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item d-flex position-relative text-center h-100" style="background-color:#AACB73">
                        <img class="bg-img" src="{{ asset('assets/img/service-1.jpg') }}" alt="">
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{ asset('assets/img/icons/icon.jpeg') }}" alt="Icon">
                            <h3 class="mb-3">Selalu Sarapan Pagi</h3>
                            <p class="mb-4">Sarapan pagi merupakan aktifitas yang sangat bermanfaat bagi tubuh. Sarapan
                                adalah kegiatan makan dan minum yang dilakukan antara bangun pagi sampai jam 9 untuk
                                memenuhi sebagian kebutuhan gizi harian.....</p>
                            <a class="btn" href="detail10"><i class="fa fa-plus text-dark me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container-xxl pt-1 pb-2">
        <div class="container">
            <div class="row g-5">
                <div class="col wow fadeInUp" data-wow-delay="0.5s">
                    <p style="text-align: justify"> &nbsp;&nbsp;&nbsp; Sepuluh pedoman gizi seimbang diatas apabila
                        dijalankan maka hal tersebut adalah sebagai bentuk usaha untuk menjaga kesehatan tubuh. Jika tubuh
                        dalam keadaan sehat maka aktifitas sehari hari aka dijalankan dengan penuh kemudahan. Marilah
                        bersama sama untuk menjaga asupan gizi kita dan keluarga secara seimbang agar senyum tetap
                        berkembang kini dan nanti. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
        <a href="https://wa.me/6281235096654?text=Hy%20saya%20ingin%20konsultasi%20tentang%20......."
            class="tombol_contact_us"><img src="assets/img/icon_wa.png" alt="whatsapp"></a>
    </div>

    <!-- Service End -->
@endsection


{{-- 
    <!-- Facts Start -->
    <div class="container-xxl py-5">
        <div class="container pt-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-2.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Design Approach</h3>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-3.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Innovative Solutions</h3>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="fact-item text-center bg-light h-100 p-5 pt-0">
                        <div class="fact-icon">
                            <img src="img/icons/icon-4.png" alt="Icon">
                        </div>
                        <h3 class="mb-3">Project Management</h3>
                        <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Facts End -->
    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="img/about-1.jpg" alt="">
                        <img class="img-fluid" src="img/about-2.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4">A Creative Architecture Agency For Your Dream Home</h1>
                    <p>Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <p class="mb-4">Stet no et lorem dolor et diam, amet duo ut dolore vero eos. No stet est diam rebum amet diam ipsum. Clita clita labore, dolor duo nonumy clita sit at, sed sit sanctus dolor eos.</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">25</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Why Choose Us!</h4>
                    <h1 class="display-5 mb-4">Why You Should Trust Us? Learn More About Us!</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-2.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Design Approach</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-3.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Innovative Solutions</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-start">
                                <img class="flex-shrink-0" src="img/icons/icon-4.png" alt="Icon">
                                <div class="ms-4">
                                    <h3>Project Management</h3>
                                    <p class="mb-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="img/about-2.jpg" alt="">
                        <img class="img-fluid" src="img/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    <!-- Project Start -->
    <div class="container-xxl project py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Projects</h4>
                <h1 class="display-5 mb-4">Visit Our Latest Projects And Our Innovative Works</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav nav-pills d-flex justify-content-between w-100 h-100 me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active" data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <h3 class="m-0">01. Modern Complex</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <h3 class="m-0">02. Royal Hotel</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4" data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <h3 class="m-0">03. Mexwel Buiding</h3>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0" data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <h3 class="m-0">04. Shopping Complex</h3>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-1.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-2.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-3.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px;">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/project-4.jpg"
                                            style="object-fit: cover;" alt="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h1 class="mb-3">25 Years Of Experience In Architecture Industry</h1>
                                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Design Approach</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Innovative Solutions</p>
                                    <p><i class="fa fa-check text-primary me-3"></i>Project Management</p>
                                    <a href="" class="btn btn-primary py-3 px-5 mt-3">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Project End -->
    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Team Members</h4>
                <h1 class="display-5 mb-4">We Are Creative Architecture Team For Your Dream Home</h1>
            </div>
            <div class="row g-0 team-items">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-1.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-2.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-3.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative">
                        <div class="position-relative">
                            <img class="img-fluid" src="img/team-4.jpg" alt="">
                            <div class="team-social text-center">
                                <a class="btn btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h3 class="mt-2">Architect Name</h3>
                            <span class="text-primary">Designation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Team End -->
    <!-- Appointment Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Appointment</h4>
                    <h1 class="display-5 mb-4">Make An Appointment To Start Your Dream Project</h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row g-4">
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-phone-alt text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Call Us Now</p>
                                    <h3 class="mb-0">+012 345 6789</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex">
                                <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-light" style="width: 65px; height: 65px;">
                                    <i class="fa fa-2x fa-envelope-open text-primary"></i>
                                </div>
                                <div class="ms-4">
                                    <p class="mb-2">Mail Us Now</p>
                                    <h3 class="mb-0">info@example.com</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Name" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="email" class="form-control" placeholder="Your Email" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <input type="text" class="form-control" placeholder="Your Mobile" style="height: 55px;">
                        </div>
                        <div class="col-12 col-sm-6">
                            <select class="form-select" style="height: 55px;">
                                <option selected>Choose Service</option>
                                <option value="1">Service 1</option>
                                <option value="2">Service 2</option>
                                <option value="3">Service 3</option>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="date" id="date" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#date" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="time" id="time" data-target-input="nearest">
                                <input type="text"
                                    class="form-control datetimepicker-input"
                                    placeholder="Choose Date" data-target="#time" data-toggle="datetimepicker" style="height: 55px;">
                            </div>
                        </div>
                        <div class="col-12">
                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Book Appointment</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Appointment End -->
    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Testimonial</h4>
                <h1 class="display-5 mb-4">Thousands Of Customers Who Trust Us And Our Services</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-1.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-2.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
                <div class="testimonial-item text-center" data-dot="<img class='img-fluid' src='img/testimonial-3.jpg' alt=''>">
                    <p class="fs-5">Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                    <h3>Client Name</h3>
                    <span class="text-primary">Profession</span>
                </div>
            </div>      
        </div>
    </div>
    <!-- Testimonial End -->
 --}}
