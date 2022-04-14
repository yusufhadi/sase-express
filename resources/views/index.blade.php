<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/styles/main.css') }}" type="text/css">
    <link href='https://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css' rel='stylesheet'
        type='text/css' />


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <title>SASE Express</title>



</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="{{ url('/images/sas.png') }}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#visi">Visi dan Misi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pelayanan">Pelayanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="banner">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-11 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 copywriting">
                            <h1 class="header">
                                <span class="text-orange">SASE Express</span>
                            </h1>
                            <p class="support">
                                PT. Sarana Anugerah Semesta (sase) express adalah sebuah perushaan yang bergerak di
                                bidang jasa pengiriman Barang, Kurir dan Kargo. Berdiri dan berdomisili di Kota
                                Makassar.
                                Motto "Memberikan Pelayanan Terbaik Kepada Pelanggan Dengan Pelayanan Satu Hari Sampai".
                            </p>
                            <p class="cta">
                                <a href="#" class="btn btn-master btn-primary">
                                    Kirim
                                </a>
                            </p>
                        </div>
                        <div class="col-lg-6 col-12 ">
                            <a href="#">
                                <img src="{{ url('/images/cargooo.png') }}" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </section>

    <section class="testimonials" id="visi">
        <div class="container">
            <div class="row text-center pb-3">
                <div class="col-lg-12 col-12 header-wrap">
                    <h2 class="primary-header text-orange">
                        Visi dan Misi
                    </h2>
                    <p class="">
                        <b>PT. SASE Express</b>
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-10 col-12">
                    <div class="row">
                        <div class="col-lg-6 col-12 pb-4">
                            <div class="item-review">
                                <h3 class="title text-center">
                                    Visi
                                </h3>
                                <p class="message">
                                    Menjadi Perusahaan trasnportasi dan expedisi terintegrasi yang dapat
                                    memberikan nilai tambah kepada setiap pelanggan kami dengan memberikan distribusi
                                    yang handal dan efisien serta pelayanan yang Prima, Tepat Waktu dan Terpercaya.
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12">
                            <div class="item-review">
                                <h3 class="title text-center">
                                    Misi
                                </h3>
                                <p class="message">
                                    Membuat sistem terintegrasi antar wilayah melalui darat, laut dan udara.
                                    <br>
                                    <br>
                                    Memenuhi harapan setiap customer dalam pengiriman yang cepat, tepat, aman terpercaya
                                    dan Amanah.
                                    <br>
                                    <br>
                                    Memenuhi harapan setiap customer dalam pengiriman yang cepat, tepat, aman terpercaya
                                    dan Amanah.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pricing" id="pelayanan">
        <div class="container">
            <h3 class="primary-header text-center text-white pb-5">
                Pelayanan SASE EXPRESS
            </h3>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <h4 class="text-white">
                        Kirim Barang
                    </h4>
                    <div class="row">
                        <div class="col-lg-4 col-12">
                            <label for="exampleInputEmail1" class="form-label">Kota Asal</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" readonly placeholder="Makassar">
                        </div>
                        <div class="col-lg-4 col-12 pb-3">
                            <label for="form_name" class="form-label">Kota Tujuan</label>
                            <select class="bootstrap-select form-select">
                                <option value="1" selected="selected">Silahkan Pilih Kota</option>
                                <option value="2">Jakarta</option>
                                <option value="3">Jogjakarta</option>
                                <option value="4">Surabaya</option>
                                <option value="5">Manokwari</option>
                            </select>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div>
                                <textarea readonly id="2">Rp.55.000/Kg  MINIMUM 10 KG </textarea>
                            </div>
                            <div>
                                <textarea readonly id="3">Rp.65.000/Kg  MINIMUM 10 KG </textarea>
                            </div>
                            <div>
                                <textarea readonly id="4">Rp.35.000/Kg  MINIMUM 10 KG </textarea>
                            </div>
                            <div>
                                <textarea readonly id="5">Rp.150.000/Kg  MINIMUM 10 KG </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pb-70">
                <div class="col-lg-5 col-12 header-wrap copywriting">
                    <h4 class=" text-white">
                        Lacak Kiriman Anda
                    </h4>
                    <div class="row">
                        <div class="col-lg-6 col-12">
                            <label for="exampleInputEmail1" class="form-label">Nomor Resi</label>
                            <input type="text" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp">
                        </div>
                        <div class="col-lg-6 col-12">
                            <p>
                                <a href="{{ route('cari') }}" class="btn btn-master btn-secondary w-70 ">
                                    Cari
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="steps" id="tentang">
        <div class="container">
            <h2 class="primary-header text-orange text-center pb-3">
                Kenapa Memilih SASE Express?
            </h2>
            <h3 class="titlee pb-5 text-center">
                <span class="text-orange"> PT. SASE Express </span>berkomitmen bahwa “Peningkatan mutu dan kualitas
                pelayanan dengan menjaga dan bertanggung jawab atas kondisi distribusi muatan pelanggan” dengan sistem
                manajemen yang professional dalam melakukan beberapa langkah atau strategi antara lain sebagai berikut:
            </h3>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ url('/images/1.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <br>
                    <h2 class="primary-header">
                        Pelatihan Karyawan
                    </h2>
                    <p class="support">
                        Program pelatihan karyawan secara berkesinambungan untuk semua level jabatan.
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting">
                    <br>
                    <h2 class="primary-header">
                        Customer Service
                    </h2>
                    <p class="support">
                        Kami menerapkan sistem layanan 24 jam agar pelanggan dapat menikmati kemudahan pelayanan
                        terutama dalam peristiwa yang penting dan mendesak
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center pb-5">
                    <img src="{{ url('/images/4.png') }}" class="cover" alt="">
                </div>
            </div>
            <div class="row item-step">
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ url('/images/2.png') }}" class="cover" alt="">
                </div>
                <div class="col-lg-6 col-12 text-left copywriting">
                    <br>
                    <h2 class="primary-header">
                        Pengiriman
                    </h2>
                    <p class="support">
                        Pengiriman barang tepat waktu sampai tujuan adalah keyakinan kami untuk mewujudkan suatu
                        pelayanan transportasi yang professional. Ini semua dilakukan demi memenuhi kami untuk memenuhi
                        prinsip kepuasan pelanggan adalah keberhasilan kami.
                    </p>
                </div>
            </div>
            <div class="row item-step pb-70">
                <div class="col-lg-6 col-12 text-left copywriting">
                    <br>
                    <h2 class="primary-header">
                        Kontroling
                    </h2>
                    <p class="support">
                        Peningkatan control keamanan perjalanan kendaraan ke tempat tujuan.
                    </p>
                </div>
                <div class="col-lg-6 col-12 text-center">
                    <img src="{{ url('/images/5.png') }}" class="cover" alt="">
                </div>
            </div>
        </div>
    </section>


    <footer class="footer-area footer-area-two bg--section2" id="kontak">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 mt-4">
                        <div class="single-footer single-footer-two">
                            <div class="footer-logo">
                                <a href="/">
                                </a>
                            </div>
                            <img src="{{ url('/images/sas.png') }}" width="300" alt="logo">
                            <div class="footer-contents">
                                <p class="common-para"> PT. Sarana Anugerah Semesta (sase) express adalah sebuah
                                    perushaan yang bergerak di bidang jasa pengiriman Barang, Kurir, Kargo. Berdiri dan
                                    berdomisili di Kota Makassar.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6 mt-4 mt-sm-4">
                        <div class="single-footer single-footer-two">
                            <h4 class="footer-title"> Contact </h4>
                            <div class="footer-contents">
                                <ul class="footer-links">
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        sasemakassar@gmail.com
                                    </li>
                                    <li>
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                        0411-439203, 450683
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        JL.A.P.Pettarani VII NO. 64 Makassar 90222
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="copyright-area">
            <span class="copyright-text">Copyright SASE EXPRESS © 2022. All rights reserved</span>
        </div>
    </footer>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script>
        $('textarea').hide();
        $('#1').show();
        $('select').change(function() {
            $('textarea').hide();
            var a = $(this).val();
            $("#" + a).show();
        })
    </script>
    @include('sweetalert::alert')

</body>

</html>
