@extends('landing.components.layout')


@section('title', 'Beranda')

@section('hero')
    <div id="home" class="header_hero d-lg-flex align-items-center">
        <img class="shape shape-1" src="{{ asset('images/shape-1.svg') }}" alt="shape">
        <img class="shape shape-2" src="{{ asset('images/shape-2.svg') }}" alt="shape">
        <img class="shape shape-3" src="{{ asset('images/shape-3.svg') }}" alt="shape">

        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="header_hero_content">
                        <h2 class="header_title wow fadeInLeftBig" data-wow-duration="1.3s" data-wow-delay="0.2s">Desa Cakrawala [Smart Village]</h2>
                        <p>Desa Cakrawala adalah inisiatif Yayasan Seribu Senyum untuk menciptakan desa masa depan melalui pemberdayaan berbasis teknologi, peningkatan kapasitas masyarakat, ekonomi kreatif, kesehatan, dan lingkungan. Program ini dibangun agar menjadi prototype desa modern yang dapat direplikasi di seluruh Indonesia.</p>
                        <ul>
                            <li><a class="main-btn wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s" href="#">Jadwalkan Kunjungan <i class="lni lni-whatsapp"></i></a></li>
                            <li><a class="main-btn main-btn-2 wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1.4s" href="#">Pelajari Program</a></li>
                        </ul>
                    </div> <!-- header hero content -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
        <div class="header_image d-flex align-items-center">
            <div class="image wow fadeInRightBig" data-wow-duration="1.3s" data-wow-delay="1.8s">
                <img src="{{ asset('images/img-7.jpeg') }}" class="rounded-circle" height="500" alt="header App">
                {{-- <img src="{{ asset('images/img-5.jpeg') }}" class="rounded-circle" height="600" alt="header App"> --}}
                {{-- <img src="{{ asset('images/img-4.jpeg') }}" class="rounded-circle" height="600" alt="header App"> --}}
                <img src="{{ asset('images/dots.svg') }}" alt="dots" class="dots">
            </div> <!-- image -->
        </div> <!-- header image -->
    </div>
@endsection

@section('content')
    <section id="features" class="features_area pt-35 pb-80">
        <div class="container">
            <div class="row justify-content-center">

                <!-- Fitur 1 - Pertanian Cerdas -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_1 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.2s">
                        <div class="features_icon">
                            <i class="lni lni-leaf"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title">Pertanian Cerdas</h4>
                            <p>Penerapan teknologi digital dan sensor untuk meningkatkan efisiensi budidaya pertanian yang ramah lingkungan.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 2 - Edukasi & Pelatihan -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_2 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.5s">
                        <div class="features_icon">
                            <i class="lni lni-graduation"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title">Edukasi & Pelatihan</h4>
                            <p>Menyediakan program pelatihan pertanian organik, energi terbarukan, dan pengelolaan limbah berkelanjutan untuk semua kalangan.</p>
                        </div>
                    </div>
                </div>

                <!-- Fitur 3 - Wisata Ekologi -->
                <div class="col-lg-4 col-md-7 col-sm-8">
                    <div class="single_features mt-30 features_3 text-center wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.9s">
                        <div class="features_icon">
                            <i class="lni lni-map"></i>
                        </div>
                        <div class="features_content">
                            <h4 class="features_title">Wisata Ekologi</h4>
                            <p>Pengalaman wisata edukatif untuk menjelajahi pertanian hijau, kebun organik, dan inovasi desa berbasis eco farm.</p>
                        </div>
                    </div>
                </div>

            </div> <!-- row -->
        </div> <!-- container -->
    </section>


    <!--====== FEATURES PART ENDS ======-->

    <!--====== ABOUT PART START ======-->

    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .about_area */
            .about_area {
                padding: 80px 0;
                background: linear-gradient(135deg, #f5f7fa 0%, #e4edf5 100%);
                position: relative;
                overflow: hidden;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                line-height: 1.6;
                color: #333;
            }

            .about_area::before {
                content: '';
                position: absolute;
                width: 300px;
                height: 300px;
                border-radius: 50%;
                background: rgba(42, 157, 143, 0.08);
                top: -150px;
                right: -150px;
            }

            .about_area::after {
                content: '';
                position: absolute;
                width: 200px;
                height: 200px;
                border-radius: 50%;
                background: rgba(233, 196, 106, 0.08);
                bottom: -100px;
                left: -100px;
            }

            .about_area .about_image {
                position: relative;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                transform: perspective(1000px) rotateY(-5deg);
            }

            .about_area .about_image:hover {
                transform: perspective(1000px) rotateY(0deg);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            }

            .about_area .about_image img {
                width: 100%;
                height: auto;
                transition: all 0.3s ease;
            }

            .about_area .about_image:hover img {
                transform: scale(1.03);
            }

            .about_area .about_image::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(to bottom, rgba(42, 157, 143, 0.2), rgba(38, 70, 83, 0.3));
                z-index: 1;
                opacity: 0;
                transition: all 0.3s ease;
            }

            .about_area .about_image:hover::before {
                opacity: 1;
            }

            .about_area .section_title h4 {
                color: #264653;
                font-weight: 700;
                font-size: 2.2rem;
                margin-bottom: 20px;
                position: relative;
                padding-bottom: 15px;
            }

            .about_area .section_title h4::after {
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                width: 80px;
                height: 4px;
                background: #e9c46a;
                border-radius: 2px;
            }

            .about_area .section_title p {
                color: #555;
                margin-bottom: 25px;
                font-size: 1.05rem;
            }

            .about_area .feature-list {
                list-style: none;
                padding-left: 0;
                margin-bottom: 30px;
            }

            .about_area .feature-list li {
                margin-bottom: 15px;
                padding: 12px 15px;
                background-color: white;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                display: flex;
                align-items: center;
                transition: all 0.3s ease;
                border-left: 4px solid transparent;
            }

            .about_area .feature-list li:hover {
                transform: translateX(10px);
                border-left-color: #2a9d8f;
                box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            }

            .about_area .feature-list li i {
                width: 40px;
                height: 40px;
                background-color: rgba(42, 157, 143, 0.1);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;
                color: #2a9d8f;
                font-size: 1.2rem;
                transition: all 0.3s ease;
            }

            .about_area .feature-list li:hover i {
                background-color: #2a9d8f;
                color: white;
                transform: scale(1.1);
            }

            .about_area .highlight-text {
                background-color: rgba(233, 196, 106, 0.2);
                padding: 20px;
                border-radius: 10px;
                border-left: 5px solid #e9c46a;
                margin: 25px 0;
                font-size: 1.1rem;
                color: #264653;
                font-weight: 600;
            }

            .about_area .main-btn {
                display: inline-block;
                background: linear-gradient(135deg, #2a9d8f, #21867a);
                color: white;
                padding: 14px 32px;
                border-radius: 50px;
                font-weight: 600;
                text-decoration: none;
                transition: all 0.3s ease;
                box-shadow: 0 10px 20px rgba(42, 157, 143, 0.2);
                border: none;
                position: relative;
                overflow: hidden;
                z-index: 1;
            }

            .about_area .main-btn:hover {
                color: white;
                transform: translateY(-5px);
                box-shadow: 0 15px 25px rgba(42, 157, 143, 0.3);
            }

            .about_area .main-btn::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #21867a, #2a9d8f);
                z-index: -1;
                opacity: 0;
                transition: all 0.3s ease;
            }

            .about_area .main-btn:hover::before {
                opacity: 1;
            }

            .about_area .main-btn i {
                margin-left: 8px;
                transition: all 0.3s ease;
            }

            .about_area .main-btn:hover i {
                transform: translateX(5px);
            }

            /* Responsive adjustments hanya untuk .about_area */
            @media (max-width: 992px) {
                .about_area .about_image {
                    transform: none;
                    margin-bottom: 40px;
                }

                .about_area .about_image:hover {
                    transform: none;
                }

                .about_area .feature-list li:hover {
                    transform: translateX(5px);
                }
            }

            @media (max-width: 768px) {
                .about_area {
                    padding: 60px 0;
                }

                .about_area .section_title h4 {
                    font-size: 1.8rem;
                }
            }

            /* Animation for list items hanya di .about_area */
            @keyframes aboutFadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .about_area .animate-item {
                animation: aboutFadeInUp 0.5s ease forwards;
                opacity: 0;
            }

            .about_area .animate-item:nth-child(1) {
                animation-delay: 0.1s;
            }

            .about_area .animate-item:nth-child(2) {
                animation-delay: 0.2s;
            }

            .about_area .animate-item:nth-child(3) {
                animation-delay: 0.3s;
            }

            .about_area .animate-item:nth-child(4) {
                animation-delay: 0.4s;
            }

            .about_area .animate-item:nth-child(5) {
                animation-delay: 0.5s;
            }

            .about_area .animate-item:nth-child(6) {
                animation-delay: 0.6s;
            }
        </style>
    @endpush
    <section id="about" class="about_area pt-5 pb-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 order-lg-1 order-2">
                    <div class="about_content mt-4 mt-lg-0 animate__animated animate__fadeInLeft">
                        <div class="section_title">
                            <h4 class="title">Tentang Desa Cakrawala</h4>
                            <p>Desa Cakrawala merupakan program pembangunan desa terpadu yang memanfaatkan teknologi, pelatihan, dan kolaborasi untuk meningkatkan kualitas hidup masyarakat. Program saat ini menggabungkan:</p>

                            <ul class="feature-list">
                                <li class="animate-item"><i class="fas fa-microchip"></i> Teknologi IoT</li>
                                <li class="animate-item"><i class="fas fa-laptop-code"></i> Edukasi Digital</li>
                                <li class="animate-item"><i class="fas fa-store"></i> UMKM Kreatif</li>
                                <li class="animate-item"><i class="fas fa-heartbeat"></i> Kesehatan Masyarakat</li>
                                <li class="animate-item"><i class="fas fa-graduation-cap"></i> Pelatihan Anak Muda</li>
                                <li class="animate-item"><i class="fas fa-leaf"></i> Eco-Living</li>
                            </ul>

                            <div class="highlight-text">
                                Tujuan utama kami adalah membangun desa yang mandiri, produktif, sehat, dan berkelanjutan.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 order-lg-2 order-1">
                    <div class="about_image mt-4 mt-lg-0 animate__animated animate__fadeInRight">
                        <img class="image img-fluid" src="https://images.unsplash.com/photo-1542601906990-b4d3fb778b09?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1000&q=80" alt="Desa Cakrawala">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Program Berjalan --}}
    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .program-section */
            .program-section {
                padding: 80px 0;
                background: linear-gradient(135deg, #f0f7ff 0%, #e6f2ff 100%);
                position: relative;
                overflow: hidden;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .program-section::before {
                content: '';
                position: absolute;
                width: 400px;
                height: 400px;
                border-radius: 50%;
                background: rgba(52, 152, 219, 0.05);
                top: -200px;
                right: -150px;
            }

            .program-section::after {
                content: '';
                position: absolute;
                width: 300px;
                height: 300px;
                border-radius: 50%;
                background: rgba(46, 204, 113, 0.05);
                bottom: -150px;
                left: -100px;
            }

            .program-section .section-header h2 {
                color: #2c3e50;
                font-weight: 800;
                font-size: 2.5rem;
                margin-bottom: 10px;
                text-align: center;
                position: relative;
                display: inline-block;
            }

            .program-section .section-header h2::after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: -10px;
                transform: translateX(-50%);
                width: 120px;
                height: 4px;
                background: linear-gradient(90deg, #3498db, #2ecc71);
                border-radius: 2px;
            }

            .program-section .section-header h3 {
                color: #3498db;
                font-weight: 700;
                font-size: 1.8rem;
                margin-bottom: 20px;
                position: relative;
                padding-left: 20px;
            }

            .program-section .section-header h3::before {
                content: '';
                position: absolute;
                left: 0;
                top: 50%;
                transform: translateY(-50%);
                width: 8px;
                height: 80%;
                background: #2ecc71;
                border-radius: 4px;
            }

            .program-section .program-status {
                display: inline-block;
                background: #2ecc71;
                color: white;
                padding: 6px 20px;
                border-radius: 20px;
                font-size: 0.9rem;
                font-weight: 600;
                margin-bottom: 15px;
                box-shadow: 0 4px 10px rgba(46, 204, 113, 0.3);
            }

            .program-section .program-description {
                color: #34495e;
                font-size: 1.1rem;
                line-height: 1.7;
                margin-bottom: 30px;
                padding: 20px;
                background: white;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            }

            .program-section .sub-section-title {
                color: #2c3e50;
                font-weight: 700;
                font-size: 1.4rem;
                margin: 30px 0 15px 0;
                padding-bottom: 10px;
                border-bottom: 2px dashed #3498db;
            }

            .program-section .features-list {
                list-style: none;
                padding-left: 0;
                margin-bottom: 30px;
            }

            .program-section .features-list li {
                margin-bottom: 15px;
                padding: 15px 20px;
                background: white;
                border-radius: 10px;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
                display: flex;
                align-items: center;
                transition: all 0.3s ease;
                border-left: 4px solid transparent;
            }

            .program-section .features-list li:hover {
                transform: translateY(-5px);
                border-left-color: #3498db;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            }

            .program-section .features-list li i {
                width: 40px;
                height: 40px;
                background: linear-gradient(135deg, #3498db, #2980b9);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;
                color: white;
                font-size: 1.2rem;
                transition: all 0.3s ease;
            }

            .program-section .features-list li:hover i {
                transform: rotate(10deg) scale(1.1);
                background: linear-gradient(135deg, #2ecc71, #27ae60);
            }

            .program-section .impact-box {
                background: linear-gradient(135deg, #3498db, #2ecc71);
                color: white;
                padding: 30px;
                border-radius: 15px;
                margin-top: 30px;
                position: relative;
                overflow: hidden;
                box-shadow: 0 15px 30px rgba(52, 152, 219, 0.2);
            }

            .program-section .impact-box::before {
                content: '';
                position: absolute;
                width: 200px;
                height: 200px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                top: -100px;
                right: -100px;
            }

            .program-section .impact-title {
                font-size: 1.5rem;
                font-weight: 700;
                margin-bottom: 20px;
                position: relative;
                z-index: 1;
            }

            .program-section .impact-title i {
                margin-right: 10px;
            }

            .program-section .impact-list {
                list-style: none;
                padding-left: 0;
                position: relative;
                z-index: 1;
            }

            .program-section .impact-list li {
                margin-bottom: 15px;
                padding-left: 30px;
                position: relative;
                font-size: 1.05rem;
            }

            .program-section .impact-list li::before {
                content: '✓';
                position: absolute;
                left: 0;
                top: 0;
                width: 24px;
                height: 24px;
                background: white;
                color: #2ecc71;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                font-size: 0.9rem;
            }

            .program-section .program-card {
                background: white;
                border-radius: 15px;
                overflow: hidden;
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
                transition: all 0.3s ease;
                height: 100%;
            }

            .program-section .program-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 25px 40px rgba(0, 0, 0, 0.15);
            }

            .program-section .card-header {
                background: linear-gradient(135deg, #3498db, #2980b9);
                color: white;
                padding: 20px;
                text-align: center;
            }

            .program-section .card-header h4 {
                margin: 0;
                font-weight: 700;
                font-size: 1.3rem;
            }

            .program-section .card-body {
                padding: 25px;
            }

            .program-section .card-icon {
                font-size: 2.5rem;
                color: #3498db;
                margin-bottom: 15px;
                text-align: center;
            }

            .program-section .card-icon i {
                background: linear-gradient(135deg, #3498db, #2ecc71);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
            }

            /* Responsive adjustments hanya untuk .program-section */
            @media (max-width: 992px) {
                .program-section {
                    padding: 60px 0;
                }

                .program-section .section-header h2 {
                    font-size: 2rem;
                }

                .program-section .features-list li:hover {
                    transform: translateY(-3px);
                }

                .program-section .program-card:hover {
                    transform: translateY(-5px);
                }
            }

            @media (max-width: 768px) {
                .program-section {
                    padding: 40px 0;
                }

                .program-section .section-header h2 {
                    font-size: 1.8rem;
                }

                .program-section .section-header h3 {
                    font-size: 1.5rem;
                }

                .program-section .program-description {
                    padding: 15px;
                }
            }

            /* Animation untuk elemen dalam .program-section */
            @keyframes programFadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .program-section .animate-program {
                animation: programFadeInUp 0.6s ease forwards;
                opacity: 0;
            }

            .program-section .animate-program:nth-child(1) {
                animation-delay: 0.1s;
            }

            .program-section .animate-program:nth-child(2) {
                animation-delay: 0.2s;
            }

            .program-section .animate-program:nth-child(3) {
                animation-delay: 0.3s;
            }

            .program-section .animate-program:nth-child(4) {
                animation-delay: 0.4s;
            }
        </style>
    @endpush
    <section class="program-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center mb-5">
                        <h2 class="animate-program">Program yang Sudah Berjalan</h2>
                    </div>
                </div>
            </div>

            <div class="row mb-5">
                <div class="col-lg-8 mx-auto">
                    <div class="program-card animate-program">
                        <div class="card-header">
                            <h4>Smart Eco Farm</h4>
                            <span class="program-status">Program Aktif</span>
                        </div>
                        <div class="card-body">
                            <div class="card-icon">
                                <i class="fas fa-seedling"></i>
                            </div>
                            <p class="program-description">
                                Smart Eco Farm adalah pusat inovasi pertanian desa dengan teknologi IoT.
                            </p>

                            <h5 class="sub-section-title">Sudah Berjalan:</h5>
                            <ul class="features-list">
                                <li class="animate-program">
                                    <i class="fas fa-water"></i>
                                    <span>Kolam lele berbasis IoT: pantau suhu, kualitas air, kekeruhan</span>
                                </li>
                                <li class="animate-program">
                                    <i class="fas fa-recycle"></i>
                                    <span>Sistem aquaponik</span>
                                </li>
                                <li class="animate-program">
                                    <i class="fas fa-graduation-cap"></i>
                                    <span>Edukasi pertanian modern bagi warga & sekolah</span>
                                </li>
                                <li class="animate-program">
                                    <i class="fas fa-eye"></i>
                                    <span>Area showcase untuk kunjungan CSR dan edukasi</span>
                                </li>
                            </ul>

                            <div class="impact-box">
                                <h5 class="impact-title">
                                    <i class="fas fa-chart-line"></i> Dampak Awal:
                                </h5>
                                <ul class="impact-list">
                                    <li>Peningkatan hasil budidaya</li>
                                    <li>Edukasi pertanian modern untuk warga</li>
                                    <li>Menjadi daya tarik kunjungan & titik showcase program</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .features_area */
            .features_area {
                padding: 80px 0;
                background: linear-gradient(135deg, #f8f9ff 0%, #f0f2ff 100%);
                position: relative;
                overflow: hidden;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .features_area::before {
                content: '';
                position: absolute;
                width: 400px;
                height: 400px;
                border-radius: 50%;
                background: rgba(108, 92, 231, 0.05);
                top: -200px;
                left: -200px;
            }

            .features_area::after {
                content: '';
                position: absolute;
                width: 300px;
                height: 300px;
                border-radius: 50%;
                background: rgba(76, 201, 240, 0.05);
                bottom: -150px;
                right: -150px;
            }

            .features_area .section_title {
                position: relative;
                z-index: 1;
                margin-bottom: 50px;
            }

            .features_area .section_title h2.title {
                color: #2d3748;
                font-weight: 800;
                font-size: 2.8rem;
                margin-bottom: 15px;
                position: relative;
                display: inline-block;
            }

            .features_area .section_title h2.title::after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: -10px;
                transform: translateX(-50%);
                width: 100px;
                height: 5px;
                background: linear-gradient(90deg, #6c5ce7, #0984e3);
                border-radius: 3px;
            }

            .features_area .section_title p {
                color: #4a5568;
                font-size: 1.1rem;
                max-width: 700px;
                margin: 0 auto;
                line-height: 1.7;
            }

            .features_area .single_features {
                background: white;
                border-radius: 20px;
                padding: 35px 30px;
                height: 100%;
                transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                position: relative;
                overflow: hidden;
                box-shadow: 0 10px 30px rgba(108, 92, 231, 0.08);
                margin-bottom: 30px;
                border: 1px solid rgba(108, 92, 231, 0.1);
            }

            .features_area .single_features::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 5px;
                background: linear-gradient(90deg, #6c5ce7, #0984e3);
                opacity: 0;
                transition: all 0.3s ease;
            }

            .features_area .single_features:hover {
                transform: translateY(-15px);
                box-shadow: 0 25px 50px rgba(108, 92, 231, 0.15);
            }

            .features_area .single_features:hover::before {
                opacity: 1;
            }

            .features_area .features_icon {
                width: 80px;
                height: 80px;
                border-radius: 20px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 25px;
                font-size: 2.2rem;
                transition: all 0.3s ease;
                position: relative;
            }

            .features_area .features_1 .features_icon {
                background: linear-gradient(135deg, rgba(108, 92, 231, 0.1), rgba(108, 92, 231, 0.2));
                color: #6c5ce7;
            }

            .features_area .features_2 .features_icon {
                background: linear-gradient(135deg, rgba(76, 201, 240, 0.1), rgba(76, 201, 240, 0.2));
                color: #0984e3;
            }

            .features_area .features_3 .features_icon {
                background: linear-gradient(135deg, rgba(85, 239, 196, 0.1), rgba(85, 239, 196, 0.2));
                color: #00b894;
            }

            .features_area .single_features:hover .features_icon {
                transform: scale(1.1) rotate(5deg);
            }

            .features_area .features_content h3.features_title {
                color: #2d3748;
                font-weight: 700;
                font-size: 1.6rem;
                margin-bottom: 15px;
                line-height: 1.4;
            }

            .features_area .features_content>p:first-of-type {
                color: #4a5568;
                font-size: 1rem;
                margin-bottom: 15px;
                line-height: 1.6;
            }

            .features_area .mini-list {
                list-style: none;
                padding-left: 0;
                margin: 20px 0;
            }

            .features_area .mini-list li {
                margin-bottom: 12px;
                padding-left: 30px;
                position: relative;
                color: #4a5568;
                font-size: 0.95rem;
                line-height: 1.5;
            }

            .features_area .mini-list li::before {
                content: '✓';
                position: absolute;
                left: 0;
                top: -1px;
                width: 22px;
                height: 22px;
                background: #6c5ce7;
                color: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-weight: bold;
                font-size: 0.8rem;
            }

            .features_area .features_2 .mini-list li::before {
                background: #0984e3;
            }

            .features_area .features_3 .mini-list li::before {
                background: #00b894;
            }

            .features_area .needs {
                background: rgba(108, 92, 231, 0.07);
                padding: 15px;
                border-radius: 10px;
                border-left: 4px solid #6c5ce7;
                margin-top: 20px;
                font-size: 0.95rem;
                color: #4a5568;
            }

            .features_area .features_2 .needs {
                background: rgba(9, 132, 227, 0.07);
                border-left-color: #0984e3;
            }

            .features_area .features_3 .needs {
                background: rgba(0, 184, 148, 0.07);
                border-left-color: #00b894;
            }

            .features_area .needs strong {
                color: #2d3748;
                font-weight: 700;
            }

            /* Responsive adjustments hanya untuk .features_area */
            @media (max-width: 992px) {
                .features_area {
                    padding: 60px 0;
                }

                .features_area .section_title h2.title {
                    font-size: 2.2rem;
                }

                .features_area .single_features {
                    padding: 30px 25px;
                }

                .features_area .single_features:hover {
                    transform: translateY(-10px);
                }
            }

            @media (max-width: 768px) {
                .features_area {
                    padding: 40px 0;
                }

                .features_area .section_title h2.title {
                    font-size: 2rem;
                }

                .features_area .section_title p {
                    font-size: 1rem;
                }

                .features_area .features_content h3.features_title {
                    font-size: 1.4rem;
                }
            }

            /* Animation untuk elemen dalam .features_area */
            @keyframes featuresFadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(40px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .features_area .animate-feature {
                animation: featuresFadeInUp 0.7s ease forwards;
                opacity: 0;
            }

            .features_area .animate-feature:nth-child(1) {
                animation-delay: 0.1s;
            }

            .features_area .animate-feature:nth-child(2) {
                animation-delay: 0.2s;
            }

            .features_area .animate-feature:nth-child(3) {
                animation-delay: 0.3s;
            }

            .features_area .animate-feature:nth-child(4) {
                animation-delay: 0.4s;
            }

            .features_area .animate-feature:nth-child(5) {
                animation-delay: 0.5s;
            }

            .features_area .animate-feature:nth-child(6) {
                animation-delay: 0.6s;
            }

            /* Tag status untuk program pengembangan */
            .features_area .dev-status {
                display: inline-block;
                background: linear-gradient(135deg, #ff9f43, #ffaf60);
                color: white;
                padding: 5px 15px;
                border-radius: 20px;
                font-size: 0.8rem;
                font-weight: 600;
                margin-bottom: 15px;
                box-shadow: 0 4px 10px rgba(255, 159, 67, 0.25);
            }
        </style>
    @endpush
    <section class="features_area section_padding" id="pengembangan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <h2 class="title">Program Pengembangan</h2>
                        <p>Program-program berikut sedang disiapkan dan membutuhkan dukungan</p>
                    </div>
                </div>
            </div>

            <div class="row mt-50 justify-content-center">
                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="single_features features_1 animate-feature">
                        <span class="dev-status">Sedang Disiapkan</span>
                        <div class="features_icon">
                            <i class="fas fa-business-time"></i>
                        </div>
                        <div class="features_content">
                            <h3 class="features_title">Cakrawala UMKM Academy</h3>
                            <p>Program inkubasi UMKM desa dengan fokus:</p>
                            <ul class="mini-list">
                                <li>Branding & packaging</li>
                                <li>Studio konten mini</li>
                                <li>Digital marketing</li>
                                <li>Manajemen keuangan</li>
                            </ul>
                            <p class="needs"><strong>Kebutuhan:</strong> peralatan studio, mentor, modul pelatihan.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="single_features features_2 animate-feature">
                        <span class="dev-status">Sedang Disiapkan</span>
                        <div class="features_icon">
                            <i class="fas fa-laptop"></i>
                        </div>
                        <div class="features_content">
                            <h3 class="features_title">Desa Melek Teknologi</h3>
                            <p>Digitalisasi desa melalui:</p>
                            <ul class="mini-list">
                                <li>Literasi digital</li>
                                <li>Smart Village (SID)</li>
                                <li>WiFi publik & ruang belajar digital</li>
                            </ul>
                            <p class="needs"><strong>Kebutuhan:</strong> laptop, komputer, wifi, trainer IT.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="single_features features_3 animate-feature">
                        <span class="dev-status">Sedang Disiapkan</span>
                        <div class="features_icon">
                            <i class="fas fa-paint-brush"></i>
                        </div>
                        <div class="features_content">
                            <h3 class="features_title">Rumah Kreatif Pemuda</h3>
                            <p>Ruang kreativitas untuk remaja desa:</p>
                            <ul class="mini-list">
                                <li>Kelas seni</li>
                                <li>Pembuatan konten digital</li>
                                <li>Kewirausahaan pemuda</li>
                            </ul>
                            <p class="needs"><strong>Kebutuhan:</strong> alat seni, kamera, ruang kreatif.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="single_features features_1 animate-feature">
                        <span class="dev-status" style="background: linear-gradient(135deg, #6c5ce7, #5a4bd1);">Dalam Perencanaan</span>
                        <div class="features_icon">
                            <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="features_content">
                            <h3 class="features_title">Gerakan Desa Sehat</h3>
                            <p>Program kesehatan keluarga & anak:</p>
                            <ul class="mini-list">
                                <li>Edukasi gizi & MPASI</li>
                                <li>Pencegahan stunting</li>
                                <li>Pelatihan kader kesehatan</li>
                                <li>Edukasi sanitasi & PHBS</li>
                            </ul>
                            <p class="needs"><strong>Kebutuhan:</strong> alat ukur tumbuh kembang, tenaga kesehatan, bahan demo gizi.</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-3">
                    <div class="single_features features_2 animate-feature">
                        <span class="dev-status" style="background: linear-gradient(135deg, #6c5ce7, #5a4bd1);">Dalam Perencanaan</span>
                        <div class="features_icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <div class="features_content">
                            <h3 class="features_title">Eco-Living Desa</h3>
                            <p>Program keberlanjutan lingkungan:</p>
                            <ul class="mini-list">
                                <li>Bank sampah</li>
                                <li>Pertanian organik</li>
                                <li>Demo panel surya</li>
                                <li>Edukasi lingkungan</li>
                            </ul>
                            <p class="needs"><strong>Kebutuhan:</strong> alat kompos, panel surya, infrastruktur eco-living.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .partner-section */
            .partner-section {
                padding: 100px 0;
                background: linear-gradient(135deg, #0c2461 0%, #1e3799 100%);
                position: relative;
                overflow: hidden;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
            }

            .partner-section::before {
                content: '';
                position: absolute;
                width: 500px;
                height: 500px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.03);
                top: -250px;
                left: -250px;
            }

            .partner-section::after {
                content: '';
                position: absolute;
                width: 400px;
                height: 400px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.02);
                bottom: -200px;
                right: -200px;
            }

            .partner-section .section-header {
                position: relative;
                z-index: 1;
                margin-bottom: 50px;
                text-align: center;
            }

            .partner-section .section-header .partner-badge {
                display: inline-block;
                background: linear-gradient(135deg, #ff9f43, #ffaf60);
                color: white;
                padding: 8px 25px;
                border-radius: 30px;
                font-weight: 600;
                font-size: 0.9rem;
                margin-bottom: 20px;
                box-shadow: 0 5px 15px rgba(255, 159, 67, 0.3);
                letter-spacing: 1px;
            }

            .partner-section .section-header h2 {
                font-weight: 800;
                font-size: 3rem;
                margin-bottom: 20px;
                position: relative;
                display: inline-block;
            }

            .partner-section .section-header h2::after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: -15px;
                transform: translateX(-50%);
                width: 150px;
                height: 4px;
                background: linear-gradient(90deg, #ff9f43, #ffd32a);
                border-radius: 2px;
            }

            .partner-section .section-header p {
                font-size: 1.2rem;
                line-height: 1.8;
                max-width: 800px;
                margin: 40px auto 0;
                opacity: 0.9;
            }

            .partner-section .section-header .highlight {
                color: #ffd32a;
                font-weight: 700;
            }

            .partner-section .partner-logo {
                width: 180px;
                height: 180px;
                background: white;
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 40px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.2);
                position: relative;
                overflow: hidden;
                transition: all 0.4s ease;
            }

            .partner-section .partner-logo:hover {
                transform: scale(1.05);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.3);
            }

            .partner-section .partner-logo::before {
                content: '';
                position: absolute;
                width: 100%;
                height: 100%;
                background: conic-gradient(from 0deg, #ff9f43, #ffd32a, #ff9f43);
                animation: rotate 10s linear infinite;
            }

            .partner-section .partner-logo::after {
                content: '';
                position: absolute;
                width: 170px;
                height: 170px;
                background: white;
                border-radius: 50%;
            }

            .partner-section .logo-text {
                position: relative;
                z-index: 1;
                font-size: 2.5rem;
                font-weight: 800;
                background: linear-gradient(135deg, #0c2461, #1e3799);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .partner-section .roles-section {
                background: rgba(255, 255, 255, 0.1);
                backdrop-filter: blur(10px);
                border-radius: 20px;
                padding: 40px;
                margin: 50px 0;
                border: 1px solid rgba(255, 255, 255, 0.15);
                position: relative;
                z-index: 1;
            }

            .partner-section .roles-title {
                font-size: 1.8rem;
                font-weight: 700;
                margin-bottom: 30px;
                text-align: center;
                color: #ffd32a;
            }

            .partner-section .roles-list {
                list-style: none;
                padding-left: 0;
                margin-bottom: 0;
            }

            .partner-section .roles-list li {
                margin-bottom: 20px;
                padding: 20px;
                background: rgba(255, 255, 255, 0.08);
                border-radius: 15px;
                display: flex;
                align-items: center;
                transition: all 0.3s ease;
                border-left: 4px solid transparent;
            }

            .partner-section .roles-list li:hover {
                background: rgba(255, 255, 255, 0.15);
                border-left-color: #ff9f43;
                transform: translateX(10px);
            }

            .partner-section .roles-list li i {
                width: 50px;
                height: 50px;
                background: linear-gradient(135deg, #ff9f43, #ffd32a);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 20px;
                font-size: 1.3rem;
                flex-shrink: 0;
            }

            .partner-section .roles-list li span {
                font-size: 1.1rem;
                line-height: 1.6;
            }

            .partner-section .cta-section {
                text-align: center;
                margin-top: 60px;
                position: relative;
                z-index: 1;
            }

            .partner-section .cta-title {
                font-size: 1.5rem;
                font-weight: 600;
                margin-bottom: 30px;
                color: #ffd32a;
            }

            .partner-section .cta-buttons {
                display: flex;
                justify-content: center;
                gap: 20px;
                flex-wrap: wrap;
            }

            .partner-section .cta-btn {
                display: inline-flex;
                align-items: center;
                background: linear-gradient(135deg, #ff9f43, #e67e22);
                color: white;
                padding: 18px 35px;
                border-radius: 50px;
                font-weight: 700;
                text-decoration: none;
                transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                box-shadow: 0 10px 25px rgba(255, 159, 67, 0.3);
                border: none;
                position: relative;
                overflow: hidden;
                z-index: 1;
                font-size: 1.1rem;
            }

            .partner-section .cta-btn.secondary {
                background: linear-gradient(135deg, #3498db, #2980b9);
                box-shadow: 0 10px 25px rgba(52, 152, 219, 0.3);
            }

            .partner-section .cta-btn:hover {
                color: white;
                transform: translateY(-8px);
                box-shadow: 0 15px 30px rgba(255, 159, 67, 0.4);
            }

            .partner-section .cta-btn.secondary:hover {
                box-shadow: 0 15px 30px rgba(52, 152, 219, 0.4);
            }

            .partner-section .cta-btn i {
                margin-right: 10px;
                font-size: 1.2rem;
                transition: all 0.3s ease;
            }

            .partner-section .cta-btn:hover i {
                transform: translateX(5px);
            }

            .partner-section .cta-btn::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #e67e22, #ff9f43);
                z-index: -1;
                opacity: 0;
                transition: all 0.3s ease;
            }

            .partner-section .cta-btn:hover::before {
                opacity: 1;
            }

            .partner-section .cta-btn.secondary::before {
                background: linear-gradient(135deg, #2980b9, #3498db);
            }

            /* Animations */
            @keyframes rotate {
                from {
                    transform: rotate(0deg);
                }

                to {
                    transform: rotate(360deg);
                }
            }

            @keyframes partnerFadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .partner-section .animate-partner {
                animation: partnerFadeInUp 0.7s ease forwards;
                opacity: 0;
            }

            .partner-section .animate-partner:nth-child(1) {
                animation-delay: 0.1s;
            }

            .partner-section .animate-partner:nth-child(2) {
                animation-delay: 0.2s;
            }

            .partner-section .animate-partner:nth-child(3) {
                animation-delay: 0.3s;
            }

            .partner-section .animate-partner:nth-child(4) {
                animation-delay: 0.4s;
            }

            .partner-section .animate-partner:nth-child(5) {
                animation-delay: 0.5s;
            }

            /* Responsive adjustments hanya untuk .partner-section */
            @media (max-width: 992px) {
                .partner-section {
                    padding: 80px 0;
                }

                .partner-section .section-header h2 {
                    font-size: 2.5rem;
                }

                .partner-section .roles-section {
                    padding: 30px;
                }

                .partner-section .roles-list li:hover {
                    transform: translateX(5px);
                }
            }

            @media (max-width: 768px) {
                .partner-section {
                    padding: 60px 0;
                }

                .partner-section .section-header h2 {
                    font-size: 2rem;
                }

                .partner-section .section-header p {
                    font-size: 1.1rem;
                }

                .partner-section .partner-logo {
                    width: 150px;
                    height: 150px;
                }

                .partner-section .logo-text {
                    font-size: 2rem;
                }

                .partner-section .roles-section {
                    padding: 20px;
                }

                .partner-section .roles-list li {
                    padding: 15px;
                }

                .partner-section .roles-list li i {
                    width: 40px;
                    height: 40px;
                    font-size: 1.1rem;
                    margin-right: 15px;
                }

                .partner-section .cta-buttons {
                    flex-direction: column;
                    align-items: center;
                }

                .partner-section .cta-btn {
                    width: 100%;
                    max-width: 300px;
                    justify-content: center;
                }
            }

            @media (max-width: 576px) {
                .partner-section .section-header h2 {
                    font-size: 1.8rem;
                }

                .partner-section .partner-logo {
                    width: 120px;
                    height: 120px;
                }

                .partner-section .logo-text {
                    font-size: 1.5rem;
                }
            }
        </style>
    @endpush
    <section class="partner-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header animate-partner">
                        <span class="partner-badge">Event Partner Resmi</span>
                        <br>
                        <h2 style="color: whitesmoke">Lingkar Desa</h2>
                        <p style="color: whitesmoke" class="text-white">
                            Desa Cakrawala bermitra dengan <span class="highlight">Lingkar Desa</span> sebagai Event Organizer resmi yang mendukung seluruh kegiatan publik dan edukasi.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <div class="roles-section animate-partner">
                        <h3 class="roles-title">Peran Lingkar Desa</h3>
                        <ul class="roles-list">
                            <li class="animate-partner">
                                <i class="fas fa-users"></i>
                                <span>Mengelola kunjungan edukasi (CSR, sekolah, kampus)</span>
                            </li>
                            <li class="animate-partner">
                                <i class="fas fa-chalkboard-teacher"></i>
                                <span>Menyelenggarakan workshop & pelatihan</span>
                            </li>
                            <li class="animate-partner">
                                <i class="fas fa-map-marked-alt"></i>
                                <span>Menyediakan paket wisata edukasi desa</span>
                            </li>
                            <li class="animate-partner">
                                <i class="fas fa-camera"></i>
                                <span>Dokumentasi & publikasi kegiatan</span>
                            </li>
                            <li class="animate-partner">
                                <i class="fas fa-handshake"></i>
                                <span>Kolaborasi event desa</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="cta-section animate-partner">
                        <h4 class="cta-title">Mulai Kolaborasi Bersama Kami</h4>
                        <div class="cta-buttons">
                            <a href="#buat-event" class="cta-btn">
                                <i class="fas fa-calendar-plus"></i> Buat Event Bersama Lingkar Desa
                            </a>
                            <a href="#paket" class="cta-btn secondary">
                                <i class="fas fa-eye"></i> Lihat Paket Kunjungan
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .collab-section */
            .collab-section {
                padding: 80px 0;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                position: relative;
                overflow: hidden;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                text-align: center;
            }

            .collab-section::before {
                content: '';
                position: absolute;
                width: 300px;
                height: 300px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.1);
                top: -150px;
                right: -150px;
            }

            .collab-section::after {
                content: '';
                position: absolute;
                width: 200px;
                height: 200px;
                border-radius: 50%;
                background: rgba(255, 255, 255, 0.1);
                bottom: -100px;
                left: -100px;
            }

            .collab-section .container {
                position: relative;
                z-index: 1;
            }

            .collab-section .invite-icon {
                font-size: 4rem;
                color: white;
                margin-bottom: 30px;
                display: inline-block;
                background: rgba(255, 255, 255, 0.15);
                width: 100px;
                height: 100px;
                line-height: 100px;
                border-radius: 50%;
                transition: all 0.3s ease;
            }

            .collab-section .invite-icon:hover {
                background: rgba(255, 255, 255, 0.25);
                transform: scale(1.1) rotate(10deg);
            }

            .collab-section h2 {
                font-size: 2.5rem;
                font-weight: 700;
                margin-bottom: 20px;
                line-height: 1.3;
            }

            .collab-section .subtitle {
                font-size: 1.1rem;
                opacity: 0.9;
                max-width: 700px;
                margin: 0 auto 30px;
                line-height: 1.6;
            }

            .collab-section .highlight-text {
                background: rgba(255, 255, 255, 0.15);
                padding: 25px;
                border-radius: 15px;
                max-width: 800px;
                margin: 40px auto;
                font-size: 1.2rem;
                line-height: 1.8;
                border-left: 5px solid #ffd32a;
            }

            .collab-section .partners-list {
                display: flex;
                justify-content: center;
                flex-wrap: wrap;
                gap: 15px;
                margin: 40px 0;
            }

            .collab-section .partner-tag {
                background: rgba(255, 255, 255, 0.2);
                padding: 10px 20px;
                border-radius: 50px;
                font-size: 1rem;
                font-weight: 500;
                display: inline-flex;
                align-items: center;
                transition: all 0.3s ease;
                border: 2px solid transparent;
            }

            .collab-section .partner-tag:hover {
                background: rgba(255, 255, 255, 0.3);
                border-color: white;
                transform: translateY(-5px);
            }

            .collab-section .partner-tag i {
                margin-right: 8px;
                font-size: 1.1rem;
            }

            .collab-section .cta-button {
                display: inline-block;
                background: white;
                color: #667eea;
                padding: 16px 40px;
                border-radius: 50px;
                font-weight: 700;
                text-decoration: none;
                font-size: 1.1rem;
                margin-top: 30px;
                transition: all 0.3s ease;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
                border: 2px solid white;
            }

            .collab-section .cta-button:hover {
                background: transparent;
                color: white;
                transform: translateY(-5px);
                box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            }

            .collab-section .cta-button i {
                margin-left: 10px;
                transition: all 0.3s ease;
            }

            .collab-section .cta-button:hover i {
                transform: translateX(5px);
            }

            /* Responsive adjustments hanya untuk .collab-section */
            @media (max-width: 768px) {
                .collab-section {
                    padding: 60px 0;
                }

                .collab-section h2 {
                    font-size: 2rem;
                }

                .collab-section .invite-icon {
                    font-size: 3rem;
                    width: 80px;
                    height: 80px;
                    line-height: 80px;
                }

                .collab-section .highlight-text {
                    padding: 20px;
                    font-size: 1.1rem;
                }

                .collab-section .partners-list {
                    gap: 10px;
                }

                .collab-section .partner-tag {
                    padding: 8px 16px;
                    font-size: 0.95rem;
                }
            }

            @media (max-width: 576px) {
                .collab-section h2 {
                    font-size: 1.8rem;
                }

                .collab-section .cta-button {
                    padding: 14px 30px;
                    font-size: 1rem;
                }

                .collab-section .partner-tag {
                    font-size: 0.9rem;
                    padding: 6px 12px;
                }
            }
        </style>
    @endpush
    <section class="collab-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="invite-icon">
                        <i class="fas fa-handshake"></i>
                    </div>

                    <h2 style="color: whitesmoke">Ajakan Kolaborasi & Dukungan</h2>

                    <p class="subtitle" style="color: whitesmoke">
                        Bersama membangun desa yang mandiri, produktif, dan berkelanjutan untuk masa depan yang lebih baik.
                    </p>

                    <div class="highlight-text">
                        Kami mengundang perusahaan, lembaga pendidikan, NGO, komunitas, dan perorangan
                        untuk menjadi bagian dari pembangunan Desa Cakrawala.
                    </div>

                    <div class="partners-list">
                        <span class="partner-tag">
                            <i class="fas fa-building"></i> Perusahaan
                        </span>
                        <span class="partner-tag">
                            <i class="fas fa-university"></i> Lembaga Pendidikan
                        </span>
                        <span class="partner-tag">
                            <i class="fas fa-hands-helping"></i> NGO
                        </span>
                        <span class="partner-tag">
                            <i class="fas fa-users"></i> Komunitas
                        </span>
                        <span class="partner-tag">
                            <i class="fas fa-user"></i> Perorangan
                        </span>
                    </div>

                    <a href="#kontak" class="cta-button">
                        Bergabung Sekarang <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .arah-section */
            .arah-section {
                padding: 80px 0;
                background: linear-gradient(135deg, #f8fff8 0%, #e8f5e8 100%);
                position: relative;
                overflow: hidden;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .arah-section::before {
                content: '';
                position: absolute;
                width: 400px;
                height: 400px;
                border-radius: 50%;
                background: rgba(39, 174, 96, 0.05);
                top: -200px;
                right: -150px;
            }

            .arah-section::after {
                content: '';
                position: absolute;
                width: 300px;
                height: 300px;
                border-radius: 50%;
                background: rgba(52, 152, 219, 0.05);
                bottom: -150px;
                left: -100px;
            }

            .arah-section .container {
                position: relative;
                z-index: 1;
            }

            .arah-section .section-header {
                text-align: center;
                margin-bottom: 60px;
            }

            .arah-section .section-header h2 {
                font-weight: 800;
                font-size: 2.8rem;
                margin-bottom: 15px;
                position: relative;
                display: inline-block;
            }

            .arah-section .section-header h2::after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: -10px;
                transform: translateX(-50%);
                width: 120px;
                height: 4px;
                background: linear-gradient(90deg, #27ae60, #2ecc71);
                border-radius: 2px;
            }

            .arah-section .section-header p {
                color: #555;
                font-size: 1.2rem;
                max-width: 800px;
                margin: 20px auto 0;
                line-height: 1.6;
            }

            .arah-section .direction-card {
                background: white;
                border-radius: 20px;
                padding: 35px 30px;
                height: 100%;
                transition: all 0.4s ease;
                position: relative;
                overflow: hidden;
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
                margin-bottom: 30px;
                border-top: 6px solid transparent;
                border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            }

            .arah-section .direction-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 25px 40px rgba(0, 0, 0, 0.12);
            }

            .arah-section .direction-card-1 {
                border-top-color: #27ae60;
            }

            .arah-section .direction-card-2 {
                border-top-color: #3498db;
            }

            .arah-section .direction-card-3 {
                border-top-color: #9b59b6;
            }

            .arah-section .card-number {
                position: absolute;
                top: 20px;
                right: 20px;
                width: 50px;
                height: 50px;
                background: linear-gradient(135deg, #27ae60, #2ecc71);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-weight: 800;
                font-size: 1.5rem;
                box-shadow: 0 5px 15px rgba(39, 174, 96, 0.3);
            }

            .arah-section .direction-card-2 .card-number {
                background: linear-gradient(135deg, #3498db, #2980b9);
                box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
            }

            .arah-section .direction-card-3 .card-number {
                background: linear-gradient(135deg, #9b59b6, #8e44ad);
                box-shadow: 0 5px 15px rgba(155, 89, 182, 0.3);
            }

            .arah-section .card-title {
                color: #2c3e50;
                font-weight: 700;
                font-size: 1.6rem;
                margin-bottom: 20px;
                padding-right: 60px;
                line-height: 1.4;
            }

            .arah-section .card-subtitle {
                color: #27ae60;
                font-weight: 600;
                font-size: 1.1rem;
                margin-bottom: 20px;
                display: flex;
                align-items: center;
            }

            .arah-section .direction-card-2 .card-subtitle {
                color: #3498db;
            }

            .arah-section .direction-card-3 .card-subtitle {
                color: #9b59b6;
            }

            .arah-section .card-subtitle i {
                margin-right: 10px;
                font-size: 1.2rem;
            }

            .arah-section .initiatives-list {
                list-style: none;
                padding-left: 0;
                margin-bottom: 0;
            }

            .arah-section .initiatives-list li {
                margin-bottom: 15px;
                padding: 12px 15px;
                background: #f8f9fa;
                border-radius: 10px;
                border-left: 4px solid #27ae60;
                transition: all 0.3s ease;
            }

            .arah-section .direction-card-2 .initiatives-list li {
                border-left-color: #3498db;
            }

            .arah-section .direction-card-3 .initiatives-list li {
                border-left-color: #9b59b6;
            }

            .arah-section .initiatives-list li:hover {
                background: #f1f8ff;
                transform: translateX(5px);
            }

            .arah-section .initiatives-list li i {
                color: #27ae60;
                margin-right: 10px;
                width: 20px;
                text-align: center;
            }

            .arah-section .direction-card-2 .initiatives-list li i {
                color: #3498db;
            }

            .arah-section .direction-card-3 .initiatives-list li i {
                color: #9b59b6;
            }

            .arah-section .illustration-container {
                text-align: center;
                margin-top: 50px;
            }

            .arah-section .illustration-img {
                max-width: 100%;
                height: auto;
                border-radius: 20px;
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                transition: all 0.4s ease;
            }

            .arah-section .illustration-img:hover {
                transform: scale(1.02);
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.15);
            }

            .arah-section .illustration-caption {
                color: #555;
                font-style: italic;
                margin-top: 15px;
                font-size: 0.95rem;
            }

            .arah-section .cta-box {
                background: linear-gradient(135deg, #27ae60, #2ecc71);
                color: white;
                padding: 40px;
                border-radius: 20px;
                margin-top: 50px;
                text-align: center;
                position: relative;
                overflow: hidden;
                box-shadow: 0 20px 40px rgba(39, 174, 96, 0.2);
            }

            .arah-section .cta-box::before {
                content: '';
                position: absolute;
                width: 200px;
                height: 200px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                top: -100px;
                right: -100px;
            }

            .arah-section .cta-box h4 {
                font-size: 1.8rem;
                font-weight: 700;
                margin-bottom: 20px;
                position: relative;
                z-index: 1;
            }

            .arah-section .cta-box p {
                font-size: 1.1rem;
                margin-bottom: 30px;
                position: relative;
                z-index: 1;
                opacity: 0.9;
            }

            .arah-section .cta-button {
                display: inline-block;
                background: white;
                color: #27ae60;
                padding: 14px 35px;
                border-radius: 50px;
                font-weight: 700;
                text-decoration: none;
                font-size: 1.1rem;
                transition: all 0.3s ease;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
                position: relative;
                z-index: 1;
                border: 2px solid white;
            }

            .arah-section .cta-button:hover {
                background: transparent;
                color: white;
                transform: translateY(-5px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            }

            .arah-section .cta-button i {
                margin-left: 10px;
                transition: all 0.3s ease;
            }

            .arah-section .cta-button:hover i {
                transform: translateX(5px);
            }

            /* Responsive adjustments hanya untuk .arah-section */
            @media (max-width: 992px) {
                .arah-section {
                    padding: 60px 0;
                }

                .arah-section .section-header h2 {
                    font-size: 2.2rem;
                }

                .arah-section .direction-card {
                    padding: 30px 25px;
                }

                .arah-section .direction-card:hover {
                    transform: translateY(-5px);
                }
            }

            @media (max-width: 768px) {
                .arah-section {
                    padding: 50px 0;
                }

                .arah-section .section-header h2 {
                    font-size: 2rem;
                }

                .arah-section .card-title {
                    font-size: 1.4rem;
                }

                .arah-section .cta-box {
                    padding: 30px 20px;
                }
            }

            /* Animation untuk elemen dalam .arah-section */
            @keyframes arahFadeInUp {
                from {
                    opacity: 0;
                    transform: translateY(30px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }

            .arah-section .animate-arah {
                animation: arahFadeInUp 0.7s ease forwards;
                opacity: 0;
            }

            .arah-section .animate-arah:nth-child(1) {
                animation-delay: 0.1s;
            }

            .arah-section .animate-arah:nth-child(2) {
                animation-delay: 0.2s;
            }

            .arah-section .animate-arah:nth-child(3) {
                animation-delay: 0.3s;
            }

            .arah-section .animate-arah:nth-child(4) {
                animation-delay: 0.4s;
            }
        </style>
    @endpush
    <section class="arah-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header animate-arah">
                        <h2>Arah Dukungan</h2>
                        <p>Rencana strategis untuk pengembangan Desa Cakrawala yang berkelanjutan</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="direction-card direction-card-1 animate-arah">
                        <h3 class="card-title">Memperkuat Smart Eco Farm</h3>
                        <ul class="initiatives-list">
                            <li><i class="fas fa-microchip"></i> Pengembangan IoT lanjutan</li>
                            <li><i class="fas fa-expand-arrows-alt"></i> Perluasan kolam</li>
                            <li><i class="fas fa-graduation-cap"></i> Pusat edukasi pertanian</li>
                            <li><i class="fas fa-camera"></i> Dokumentasi showcase</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="direction-card direction-card-2 animate-arah">
                        <h3 class="card-title">Mewujudkan Pilar Menjadi Program Nyata</h3>
                        <ul class="initiatives-list">
                            <li><i class="fas fa-store"></i> UMKM Academy</li>
                            <li><i class="fas fa-laptop-code"></i> Desa Melek Teknologi</li>
                            <li><i class="fas fa-paint-brush"></i> Rumah Kreatif Pemuda</li>
                            <li><i class="fas fa-heartbeat"></i> Gerakan Desa Sehat</li>
                            <li><i class="fas fa-leaf"></i> Eco-Living Desa</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="direction-card direction-card-3 animate-arah">
                        <h3 class="card-title">Membangun Model Desa Berkelanjutan</h3>
                        <ul class="initiatives-list">
                            <li><i class="fas fa-brain"></i> Smart Village (SID)</li>
                            <li><i class="fas fa-map-marked-alt"></i> Ekowisata edukatif</li>
                            <li><i class="fas fa-user-md"></i> Program kesehatan desa</li>
                            <li><i class="fas fa-sun"></i> Energi terbarukan</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .support-section */
            .support-section {
                padding: 80px 0;
                background: #ffffff;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .support-section .container {
                max-width: 1200px;
            }

            .support-section .section-header {
                text-align: center;
                margin-bottom: 60px;
            }

            .support-section .section-header h2 {
                color: #2c3e50;
                font-weight: 700;
                font-size: 2.5rem;
                margin-bottom: 15px;
                position: relative;
                display: inline-block;
            }

            .support-section .section-header h2::after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: -10px;
                transform: translateX(-50%);
                width: 80px;
                height: 3px;
                background: #3498db;
                border-radius: 2px;
            }

            .support-section .section-header p {
                color: #555;
                font-size: 1.1rem;
                max-width: 800px;
                margin: 20px auto 0;
                line-height: 1.6;
            }

            .support-section .support-grid {
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
                gap: 25px;
                margin-bottom: 50px;
            }

            .support-section .support-card {
                background: #f8f9fa;
                border-radius: 12px;
                padding: 30px;
                transition: all 0.3s ease;
                border: 1px solid #e9ecef;
                height: 100%;
            }

            .support-section .support-card:hover {
                background: #f1f8ff;
                transform: translateY(-5px);
                border-color: #3498db;
                box-shadow: 0 10px 25px rgba(52, 152, 219, 0.1);
            }

            .support-section .support-icon {
                width: 60px;
                height: 60px;
                background: #e3f2fd;
                border-radius: 12px;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-bottom: 20px;
                color: #3498db;
                font-size: 1.5rem;
                transition: all 0.3s ease;
            }

            .support-section .support-card:hover .support-icon {
                background: #3498db;
                color: white;
            }

            .support-section .support-title {
                color: #2c3e50;
                font-weight: 600;
                font-size: 1.3rem;
                margin-bottom: 15px;
                line-height: 1.4;
            }

            .support-section .support-list {
                list-style: none;
                padding-left: 0;
                margin-bottom: 0;
            }

            .support-section .support-list li {
                margin-bottom: 12px;
                padding-left: 25px;
                position: relative;
                color: #555;
                line-height: 1.5;
            }

            .support-section .support-list li:last-child {
                margin-bottom: 0;
            }

            .support-section .support-list li::before {
                content: '•';
                position: absolute;
                left: 0;
                color: #3498db;
                font-size: 1.5rem;
                line-height: 1;
            }

            .support-section .info-box {
                background: #f8f9fa;
                border-radius: 12px;
                padding: 25px;
                border-left: 4px solid #3498db;
                margin-top: 30px;
            }

            .support-section .info-box p {
                color: #555;
                margin-bottom: 0;
                line-height: 1.6;
            }

            .support-section .info-box strong {
                color: #2c3e50;
            }

            /* Responsive adjustments hanya untuk .support-section */
            @media (max-width: 992px) {
                .support-section {
                    padding: 60px 0;
                }

                .support-section .section-header h2 {
                    font-size: 2.2rem;
                }

                .support-section .support-grid {
                    grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
                    gap: 20px;
                }
            }

            @media (max-width: 768px) {
                .support-section {
                    padding: 50px 0;
                }

                .support-section .section-header h2 {
                    font-size: 2rem;
                }

                .support-section .support-grid {
                    grid-template-columns: 1fr;
                    gap: 15px;
                }

                .support-section .support-card {
                    padding: 25px;
                }
            }

            @media (max-width: 576px) {
                .support-section .section-header h2 {
                    font-size: 1.8rem;
                }

                .support-section .support-card {
                    padding: 20px;
                }

                .support-section .support-title {
                    font-size: 1.2rem;
                }
            }
        </style>
    @endpush
    <section class="support-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h2>Bentuk Dukungan yang Bisa Diberikan</h2>
                        <p>Bergabunglah dalam pembangunan Desa Cakrawala melalui berbagai bentuk kontribusi yang dapat disesuaikan dengan kemampuan Anda</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="support-grid">
                        <!-- Kartu 1 -->
                        <div class="support-card">
                            <div class="support-icon">
                                <i class="fas fa-hand-holding-usd"></i>
                            </div>
                            <h3 class="support-title">Dukungan Finansial & Material</h3>
                            <ul class="support-list">
                                <li>Sponsor / pendanaan program</li>
                                <li>Penyediaan peralatan (IT, studio konten)</li>
                                <li>Panel surya dan alat energi terbarukan</li>
                                <li>Donasi alat kesehatan dan tumbuh kembang</li>
                            </ul>
                        </div>

                        <!-- Kartu 2 -->
                        <div class="support-card">
                            <div class="support-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h3 class="support-title">Keahlian & Sumber Daya Manusia</h3>
                            <ul class="support-list">
                                <li>Tenaga ahli / mentor (kesehatan, UMKM)</li>
                                <li>Pakar teknologi dan kreatif</li>
                                <li>Volunteer & program magang universitas</li>
                                <li>Pelatih dan fasilitator program</li>
                            </ul>
                        </div>

                        <!-- Kartu 3 -->
                        <div class="support-card">
                            <div class="support-icon">
                                <i class="fas fa-book-open"></i>
                            </div>
                            <h3 class="support-title">Pengembangan Pengetahuan</h3>
                            <ul class="support-list">
                                <li>Riset & pengembangan kurikulum pelatihan</li>
                                <li>Konsultasi dan evaluasi program</li>
                                <li>Dokumentasi dan publikasi best practices</li>
                                <li>Pengembangan modul pendidikan masyarakat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="info-box">
                        <p>
                            <strong>Fleksibilitas Kolaborasi:</strong>
                            Kami terbuka untuk berbagai bentuk kerjasama yang dapat disesuaikan dengan tujuan dan kapasitas mitra.
                            Setiap kontribusi, besar maupun kecil, memberikan dampak signifikan bagi perkembangan Desa Cakrawala.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .sponsor-section */
            .sponsor-section {
                padding: 80px 0;
                background: #f5f7fa;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .sponsor-section .section-header {
                text-align: center;
                margin-bottom: 60px;
            }

            .sponsor-section .section-header h2 {
                color: #2c3e50;
                font-weight: 700;
                font-size: 2.5rem;
                margin-bottom: 10px;
            }

            .sponsor-section .section-header .subtitle {
                color: #7f8c8d;
                font-size: 1.1rem;
                font-style: italic;
                max-width: 800px;
                margin: 0 auto;
            }

            .sponsor-section .sponsor-package {
                background: white;
                border-radius: 12px;
                padding: 30px;
                margin-bottom: 30px;
                border: 1px solid #e9ecef;
                transition: all 0.3s ease;
                height: 100%;
            }

            .sponsor-section .sponsor-package:hover {
                border-color: #3498db;
                box-shadow: 0 5px 20px rgba(52, 152, 219, 0.1);
            }

            .sponsor-section .package-header {
                display: flex;
                align-items: center;
                margin-bottom: 20px;
                padding-bottom: 15px;
                border-bottom: 1px solid #f1f1f1;
            }

            .sponsor-section .package-number {
                width: 40px;
                height: 40px;
                background: #3498db;
                border-radius: 50%;
                color: white;
                font-weight: 700;
                font-size: 1.2rem;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 15px;
                flex-shrink: 0;
            }

            .sponsor-section .package-title {
                color: #2c3e50;
                font-weight: 600;
                font-size: 1.3rem;
                margin: 0;
            }

            .sponsor-section .package-content {
                padding-left: 55px;
            }

            .sponsor-section .package-features {
                list-style: none;
                padding-left: 0;
                margin-bottom: 0;
            }

            .sponsor-section .package-features li {
                margin-bottom: 12px;
                padding-left: 25px;
                position: relative;
                color: #555;
                line-height: 1.5;
            }

            .sponsor-section .package-features li:last-child {
                margin-bottom: 0;
            }

            .sponsor-section .package-features li::before {
                content: '✓';
                position: absolute;
                left: 0;
                color: #27ae60;
                font-weight: bold;
                font-size: 1rem;
            }

            /* Warna khusus untuk setiap paket */
            .sponsor-section .package-1 .package-number {
                background: #3498db;
            }

            .sponsor-section .package-2 .package-number {
                background: #9b59b6;
            }

            .sponsor-section .package-3 .package-number {
                background: #e74c3c;
            }

            .sponsor-section .package-4 .package-number {
                background: #2ecc71;
            }

            .sponsor-section .package-5 .package-number {
                background: #f39c12;
            }

            .sponsor-section .info-box {
                background: white;
                border-radius: 12px;
                padding: 25px;
                margin-top: 40px;
                border: 1px solid #e9ecef;
                text-align: center;
            }

            .sponsor-section .info-box p {
                color: #555;
                margin-bottom: 0;
                line-height: 1.6;
                font-size: 1rem;
            }

            /* Responsive adjustments hanya untuk .sponsor-section */
            @media (max-width: 992px) {
                .sponsor-section {
                    padding: 60px 0;
                }

                .sponsor-section .section-header h2 {
                    font-size: 2.2rem;
                }
            }

            @media (max-width: 768px) {
                .sponsor-section {
                    padding: 50px 0;
                }

                .sponsor-section .section-header h2 {
                    font-size: 2rem;
                }

                .sponsor-section .sponsor-package {
                    padding: 25px;
                }

                .sponsor-section .package-content {
                    padding-left: 0;
                }

                .sponsor-section .package-header {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .sponsor-section .package-number {
                    margin-bottom: 10px;
                }
            }

            @media (max-width: 576px) {
                .sponsor-section .section-header h2 {
                    font-size: 1.8rem;
                }

                .sponsor-section .sponsor-package {
                    padding: 20px;
                }

                .sponsor-section .package-title {
                    font-size: 1.2rem;
                }
            }
        </style>
    @endpush
    <section class="sponsor-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h2>Paket Sponsor</h2>
                        <p class="subtitle">Siap Ditawarkan untuk Kerjasama Strategis</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Paket 1 -->
                <div class="col-lg-6 mb-4">
                    <div class="sponsor-package package-1">
                        <div class="package-header">
                            <div class="package-number">1</div>
                            <h3 class="package-title">Paket Smart Eco Farm Sponsor</h3>
                        </div>
                        <div class="package-content">
                            <ul class="package-features">
                                <li>Branding kolam IoT</li>
                                <li>Co-branded workshop</li>
                                <li>Laporan dampak</li>
                                <li>Publikasi bersama</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Paket 2 -->
                <div class="col-lg-6 mb-4">
                    <div class="sponsor-package package-2">
                        <div class="package-header">
                            <div class="package-number">2</div>
                            <h3 class="package-title">Paket UMKM Empowerment Sponsor</h3>
                        </div>
                        <div class="package-content">
                            <ul class="package-features">
                                <li>Sponsorship kelas UMKM</li>
                                <li>Studio konten UMKM</li>
                                <li>Micro-grant untuk 5 UMKM lokal</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Paket 3 -->
                <div class="col-lg-6 mb-4">
                    <div class="sponsor-package package-3">
                        <div class="package-header">
                            <div class="package-number">3</div>
                            <h3 class="package-title">Paket Digital Village Sponsor</h3>
                        </div>
                        <div class="package-content">
                            <ul class="package-features">
                                <li>Sponsorship WiFi publik</li>
                                <li>Fasilitas ruang belajar digital</li>
                                <li>Pelatihan literasi digital</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Paket 4 -->
                <div class="col-lg-6 mb-4">
                    <div class="sponsor-package package-4">
                        <div class="package-header">
                            <div class="package-number">4</div>
                            <h3 class="package-title">Paket Gerakan Desa Sehat Sponsor</h3>
                        </div>
                        <div class="package-content">
                            <ul class="package-features">
                                <li>Sponsoring alat tumbuh kembang</li>
                                <li>Pelatihan kader kesehatan</li>
                                <li>Edukasi gizi keluarga & stunting</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Paket 5 di baris terpisah agar sejajar -->
            <div class="row">
                <div class="col-lg-6 offset-lg-3 mb-4">
                    <div class="sponsor-package package-5">
                        <div class="package-header">
                            <div class="package-number">5</div>
                            <h3 class="package-title">Paket Eco-Living Sponsor</h3>
                        </div>
                        <div class="package-content">
                            <ul class="package-features">
                                <li>Bank sampah desa</li>
                                <li>Demo panel surya</li>
                                <li>Kampanye lingkungan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <div class="info-box">
                        <p>
                            Setiap paket sponsor dapat disesuaikan dengan kebutuhan dan tujuan kemitraan.
                            Hubungi kami untuk informasi lebih detail tentang setiap paket.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .roadmap-section */
            .roadmap-section {
                padding: 100px 0;
                background: linear-gradient(135deg, #0f172a 0%, #1e293b 100%);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                position: relative;
                overflow: hidden;
            }

            .roadmap-section::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background:
                    radial-gradient(circle at 20% 30%, rgba(99, 102, 241, 0.1) 0%, transparent 50%),
                    radial-gradient(circle at 80% 70%, rgba(14, 165, 233, 0.1) 0%, transparent 50%);
                z-index: 0;
            }

            .roadmap-section .container {
                position: relative;
                z-index: 1;
            }

            .roadmap-section .section-header {
                text-align: center;
                margin-bottom: 80px;
            }

            .roadmap-section .section-header h2 {
                font-weight: 800;
                font-size: 3rem;
                margin-bottom: 15px;
                background: linear-gradient(90deg, #6366f1, #14b8a6);
                -webkit-background-clip: text;
                -webkit-text-fill-color: transparent;
                background-clip: text;
            }

            .roadmap-section .section-header .subtitle {
                color: #cbd5e1;
                font-size: 1.2rem;
                max-width: 800px;
                margin: 0 auto;
                line-height: 1.6;
            }

            .roadmap-section .timeline {
                position: relative;
                max-width: 1200px;
                margin: 0 auto;
            }

            .roadmap-section .timeline::after {
                content: '';
                position: absolute;
                width: 6px;
                background: linear-gradient(to bottom, #6366f1, #14b8a6);
                top: 0;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 3px;
            }

            .roadmap-section .timeline-item {
                padding: 10px 40px;
                position: relative;
                width: 50%;
                box-sizing: border-box;
                margin-bottom: 60px;
            }

            .roadmap-section .timeline-item:nth-child(odd) {
                left: 0;
            }

            .roadmap-section .timeline-item:nth-child(even) {
                left: 50%;
            }

            .roadmap-section .timeline-content {
                padding: 30px;
                background: rgba(255, 255, 255, 0.05);
                backdrop-filter: blur(10px);
                border-radius: 16px;
                border: 1px solid rgba(255, 255, 255, 0.1);
                position: relative;
                transition: all 0.4s ease;
            }

            .roadmap-section .timeline-content:hover {
                background: rgba(255, 255, 255, 0.08);
                border-color: rgba(99, 102, 241, 0.5);
                transform: translateY(-5px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.3);
            }

            .roadmap-section .timeline-item:nth-child(odd) .timeline-content::after {
                content: '';
                position: absolute;
                width: 20px;
                height: 20px;
                right: -10px;
                top: 50%;
                transform: translateY(-50%) rotate(45deg);
                background: rgba(255, 255, 255, 0.05);
                border-right: 1px solid rgba(255, 255, 255, 0.1);
                border-top: 1px solid rgba(255, 255, 255, 0.1);
            }

            .roadmap-section .timeline-item:nth-child(even) .timeline-content::after {
                content: '';
                position: absolute;
                width: 20px;
                height: 20px;
                left: -10px;
                top: 50%;
                transform: translateY(-50%) rotate(45deg);
                background: rgba(255, 255, 255, 0.05);
                border-left: 1px solid rgba(255, 255, 255, 0.1);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            .roadmap-section .timeline-date {
                position: absolute;
                width: 180px;
                padding: 8px 15px;
                background: linear-gradient(90deg, #6366f1, #14b8a6);
                color: white;
                border-radius: 30px;
                font-weight: 600;
                text-align: center;
                top: -15px;
                z-index: 2;
            }

            .roadmap-section .timeline-item:nth-child(odd) .timeline-date {
                right: -90px;
            }

            .roadmap-section .timeline-item:nth-child(even) .timeline-date {
                left: -90px;
            }

            .roadmap-section .timeline-content h3 {
                font-size: 1.5rem;
                font-weight: 700;
                margin-bottom: 15px;
                color: #f8fafc;
            }

            .roadmap-section .timeline-content p {
                color: #cbd5e1;
                line-height: 1.7;
                margin-bottom: 0;
                font-size: 1.05rem;
            }

            .roadmap-section .timeline-marker {
                position: absolute;
                width: 30px;
                height: 30px;
                background: linear-gradient(135deg, #6366f1, #14b8a6);
                border-radius: 50%;
                top: 50%;
                transform: translateY(-50%);
                z-index: 1;
                border: 4px solid #0f172a;
                box-shadow: 0 0 0 4px rgba(99, 102, 241, 0.3);
            }

            .roadmap-section .timeline-item:nth-child(odd) .timeline-marker {
                right: -15px;
            }

            .roadmap-section .timeline-item:nth-child(even) .timeline-marker {
                left: -15px;
            }

            .roadmap-section .target-box {
                background: linear-gradient(135deg, #14b8a6, #0d9488);
                padding: 40px;
                border-radius: 20px;
                margin-top: 60px;
                text-align: center;
                border: 1px solid rgba(255, 255, 255, 0.1);
                position: relative;
                overflow: hidden;
            }

            .roadmap-section .target-box::before {
                content: '';
                position: absolute;
                width: 200px;
                height: 200px;
                background: rgba(255, 255, 255, 0.1);
                border-radius: 50%;
                top: -100px;
                right: -100px;
            }

            .roadmap-section .target-icon {
                font-size: 3rem;
                margin-bottom: 20px;
                color: white;
                opacity: 0.9;
            }

            .roadmap-section .target-box h3 {
                font-size: 1.8rem;
                font-weight: 700;
                margin-bottom: 15px;
                color: white;
            }

            .roadmap-section .target-box p {
                font-size: 1.1rem;
                color: rgba(255, 255, 255, 0.9);
                line-height: 1.7;
                max-width: 800px;
                margin: 0 auto;
            }

            /* Responsive adjustments hanya untuk .roadmap-section */
            @media (max-width: 992px) {
                .roadmap-section {
                    padding: 80px 0;
                }

                .roadmap-section .section-header h2 {
                    font-size: 2.5rem;
                }

                .roadmap-section .timeline::after {
                    left: 31px;
                }

                .roadmap-section .timeline-item {
                    width: 100%;
                    padding-left: 70px;
                    padding-right: 25px;
                    left: 0 !important;
                }

                .roadmap-section .timeline-item:nth-child(odd) .timeline-date,
                .roadmap-section .timeline-item:nth-child(even) .timeline-date {
                    left: 70px;
                    right: auto;
                    width: auto;
                    min-width: 180px;
                }

                .roadmap-section .timeline-item:nth-child(odd) .timeline-marker,
                .roadmap-section .timeline-item:nth-child(even) .timeline-marker {
                    left: 21px;
                    right: auto;
                }

                .roadmap-section .timeline-item:nth-child(odd) .timeline-content::after,
                .roadmap-section .timeline-item:nth-child(even) .timeline-content::after {
                    left: -10px;
                    right: auto;
                    border-left: 1px solid rgba(255, 255, 255, 0.1);
                    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
                    border-right: none;
                    border-top: none;
                }
            }

            @media (max-width: 768px) {
                .roadmap-section {
                    padding: 60px 0;
                }

                .roadmap-section .section-header h2 {
                    font-size: 2.2rem;
                }

                .roadmap-section .target-box {
                    padding: 30px 20px;
                }

                .roadmap-section .timeline-content {
                    padding: 25px;
                }
            }

            @media (max-width: 576px) {
                .roadmap-section .section-header h2 {
                    font-size: 2rem;
                }

                .roadmap-section .timeline-item {
                    padding-left: 60px;
                }

                .roadmap-section .timeline-item:nth-child(odd) .timeline-date,
                .roadmap-section .timeline-item:nth-child(even) .timeline-date {
                    left: 60px;
                    font-size: 0.9rem;
                }
            }
        </style>
    @endpush
    <section class="roadmap-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header" data-aos="fade-up" data-aos-duration="800">
                        <h2>Roadmap Desa Cakrawala</h2>
                        <p class="subtitle">Jalan Menuju Desa Modern yang Berkelanjutan dan Dapat Direplikasi</p>
                    </div>
                </div>
            </div>

            <div class="timeline">
                <!-- Tahun 2025 -->
                <div class="timeline-item" data-aos="fade-right" data-aos-duration="800" data-aos-delay="100">
                    <div class="timeline-marker"></div>
                    <div class="timeline-date">2025 (Sekarang)</div>
                    <div class="timeline-content">
                        <h3>Fase Peluncuran & Showcase</h3>
                        <p>Smart Eco Farm berjalan aktif dengan pembukaan kunjungan edukasi dan showcase teknologi pertanian modern. Program ini menjadi fondasi awal dan titik masuk utama untuk kemitraan dan dukungan.</p>
                    </div>
                </div>

                <!-- 6 Bulan ke Depan -->
                <div class="timeline-item" data-aos="fade-left" data-aos-duration="800" data-aos-delay="200">
                    <div class="timeline-marker"></div>
                    <div class="timeline-date">6 Bulan ke Depan</div>
                    <div class="timeline-content">
                        <h3>Ekspansi Program Inti</h3>
                        <p>Peluncuran UMKM Academy dan Desa Melek Teknologi dengan batch pelatihan pertama. Fokus pada pemberdayaan ekonomi dan literasi digital masyarakat desa sebagai langkah strategis pengembangan.</p>
                    </div>
                </div>

                <!-- 1-2 Tahun -->
                <div class="timeline-item" data-aos="fade-right" data-aos-duration="800" data-aos-delay="300">
                    <div class="timeline-marker"></div>
                    <div class="timeline-date">1–2 Tahun</div>
                    <div class="timeline-content">
                        <h3>Konsolidasi & Penguatan</h3>
                        <p>Pengembangan Rumah Kreatif Pemuda, implementasi program Kesehatan Desa, dan peluncuran Eco-Living Desa. Fase ini menciptakan ekosistem desa yang holistik dan saling mendukung.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="target-box" data-aos="zoom-in" data-aos-duration="800" data-aos-delay="400">
                        <div class="target-icon">
                            <i class="fas fa-bullseye"></i>
                        </div>
                        <h3>Target Akhir</h3>
                        <p>Desa Cakrawala menjadi model desa modern yang mandiri, produktif, dan berkelanjutan, dengan sistem dan metodologi yang dapat direplikasi secara nasional untuk mendorong transformasi desa-desa lain di Indonesia.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @push('styles')
        <style>
            /* HANYA STYLE UNTUK ELEMEN DI DALAM .visit-section */
            .visit-section {
                padding: 80px 0;
                background: linear-gradient(135deg, #f0f9ff 0%, #e0f2fe 100%);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                position: relative;
                overflow: hidden;
            }

            .visit-section::before {
                content: '';
                position: absolute;
                top: -100px;
                right: -100px;
                width: 300px;
                height: 300px;
                background: rgba(14, 165, 233, 0.1);
                border-radius: 50%;
            }

            .visit-section::after {
                content: '';
                position: absolute;
                bottom: -100px;
                left: -100px;
                width: 250px;
                height: 250px;
                background: rgba(34, 197, 94, 0.1);
                border-radius: 50%;
            }

            .visit-section .container {
                position: relative;
                z-index: 1;
            }

            .visit-section .section-header {
                text-align: center;
                margin-bottom: 60px;
            }

            .visit-section .section-header h2 {
                color: #0c4a6e;
                font-weight: 700;
                font-size: 2.8rem;
                margin-bottom: 15px;
                position: relative;
                display: inline-block;
            }

            .visit-section .section-header h2::after {
                content: '';
                position: absolute;
                left: 50%;
                bottom: -10px;
                transform: translateX(-50%);
                width: 100px;
                height: 4px;
                background: linear-gradient(90deg, #0ea5e9, #22c55e);
                border-radius: 2px;
            }

            .visit-section .section-header p {
                color: #475569;
                font-size: 1.2rem;
                max-width: 800px;
                margin: 25px auto 0;
                line-height: 1.6;
            }

            .visit-section .content-wrapper {
                display: flex;
                align-items: center;
                margin-bottom: 50px;
            }

            .visit-section .illustration-container {
                flex: 1;
                padding-right: 50px;
                text-align: center;
            }

            .visit-section .illustration {
                max-width: 100%;
                height: auto;
                filter: drop-shadow(0 10px 20px rgba(0, 0, 0, 0.1));
                transition: all 0.5s ease;
            }

            .visit-section .illustration:hover {
                transform: translateY(-10px) scale(1.05);
                filter: drop-shadow(0 15px 30px rgba(0, 0, 0, 0.15));
            }

            .visit-section .info-container {
                flex: 1;
                padding-left: 50px;
            }

            .visit-section .info-box {
                background: white;
                border-radius: 20px;
                padding: 40px;
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.08);
                border: 1px solid #e2e8f0;
            }

            .visit-section .info-title {
                color: #0c4a6e;
                font-weight: 600;
                font-size: 1.4rem;
                margin-bottom: 25px;
                display: flex;
                align-items: center;
            }

            .visit-section .info-title i {
                margin-right: 12px;
                color: #0ea5e9;
                font-size: 1.6rem;
            }

            .visit-section .visitor-list {
                list-style: none;
                padding-left: 0;
                margin-bottom: 35px;
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .visit-section .visitor-list li {
                background: #f8fafc;
                padding: 15px 20px;
                border-radius: 12px;
                display: flex;
                align-items: center;
                transition: all 0.3s ease;
                border: 1px solid #e2e8f0;
            }

            .visit-section .visitor-list li:hover {
                background: #f0f9ff;
                transform: translateY(-3px);
                border-color: #0ea5e9;
                box-shadow: 0 5px 15px rgba(14, 165, 233, 0.1);
            }

            .visit-section .visitor-list li i {
                width: 36px;
                height: 36px;
                background: #0ea5e9;
                border-radius: 50%;
                color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                margin-right: 12px;
                flex-shrink: 0;
                font-size: 1rem;
            }

            .visit-section .visitor-list li span {
                color: #334155;
                font-weight: 500;
                font-size: 1.05rem;
            }

            .visit-section .cta-container {
                text-align: center;
                margin-top: 50px;
            }

            .visit-section .cta-button {
                display: inline-flex;
                align-items: center;
                background: linear-gradient(135deg, #0ea5e9, #0891b2);
                color: white;
                padding: 18px 40px;
                border-radius: 50px;
                font-weight: 700;
                text-decoration: none;
                font-size: 1.2rem;
                transition: all 0.3s cubic-bezier(0.175, 0.885, 0.32, 1.275);
                box-shadow: 0 10px 25px rgba(14, 165, 233, 0.25);
                border: none;
                position: relative;
                overflow: hidden;
                z-index: 1;
            }

            .visit-section .cta-button:hover {
                color: white;
                transform: translateY(-5px);
                box-shadow: 0 15px 35px rgba(14, 165, 233, 0.35);
            }

            .visit-section .cta-button::before {
                content: '';
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background: linear-gradient(135deg, #0891b2, #0ea5e9);
                z-index: -1;
                opacity: 0;
                transition: all 0.3s ease;
            }

            .visit-section .cta-button:hover::before {
                opacity: 1;
            }

            .visit-section .cta-button i {
                margin-left: 12px;
                font-size: 1.3rem;
                transition: all 0.3s ease;
            }

            .visit-section .cta-button:hover i {
                transform: translateX(5px);
            }

            .visit-section .benefits-grid {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 25px;
                margin-top: 60px;
            }

            .visit-section .benefit-card {
                background: white;
                border-radius: 16px;
                padding: 30px;
                text-align: center;
                transition: all 0.3s ease;
                border: 1px solid #e2e8f0;
            }

            .visit-section .benefit-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
                border-color: #22c55e;
            }

            .visit-section .benefit-icon {
                width: 70px;
                height: 70px;
                background: linear-gradient(135deg, #22c55e, #16a34a);
                border-radius: 50%;
                display: flex;
                align-items: center;
                justify-content: center;
                margin: 0 auto 20px;
                color: white;
                font-size: 1.8rem;
                transition: all 0.3s ease;
            }

            .visit-section .benefit-card:hover .benefit-icon {
                transform: scale(1.1) rotate(10deg);
            }

            .visit-section .benefit-card h4 {
                color: #0c4a6e;
                font-weight: 600;
                font-size: 1.2rem;
                margin-bottom: 10px;
            }

            .visit-section .benefit-card p {
                color: #64748b;
                font-size: 0.95rem;
                line-height: 1.5;
                margin-bottom: 0;
            }

            /* Responsive adjustments hanya untuk .visit-section */
            @media (max-width: 992px) {
                .visit-section .content-wrapper {
                    flex-direction: column;
                }

                .visit-section .illustration-container {
                    padding-right: 0;
                    margin-bottom: 40px;
                }

                .visit-section .info-container {
                    padding-left: 0;
                }

                .visit-section .visitor-list {
                    grid-template-columns: repeat(2, 1fr);
                }

                .visit-section .benefits-grid {
                    grid-template-columns: repeat(2, 1fr);
                }
            }

            @media (max-width: 768px) {
                .visit-section {
                    padding: 60px 0;
                }

                .visit-section .section-header h2 {
                    font-size: 2.2rem;
                }

                .visit-section .info-box {
                    padding: 30px 25px;
                }

                .visit-section .visitor-list {
                    grid-template-columns: 1fr;
                }

                .visit-section .benefits-grid {
                    grid-template-columns: 1fr;
                    gap: 20px;
                }

                .visit-section .cta-button {
                    padding: 16px 35px;
                    font-size: 1.1rem;
                }
            }

            @media (max-width: 576px) {
                .visit-section .section-header h2 {
                    font-size: 2rem;
                }

                .visit-section .section-header p {
                    font-size: 1.1rem;
                }

                .visit-section .visitor-list li {
                    padding: 12px 15px;
                }
            }
        </style>
    @endpush
    <section class="visit-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header">
                        <h2>Kunjungan Smart Eco Farm</h2>
                        <p>Eksplorasi teknologi pertanian modern dan belajar tentang keberlanjutan di pusat inovasi desa</p>
                    </div>
                </div>
            </div>

            <div class="content-wrapper">
                <div class="illustration-container">
                    <!-- SVG Illustration -->
                    <svg class="illustration" width="400" height="400" viewBox="0 0 400 400" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect width="400" height="400" rx="20" fill="#E0F2FE" />
                        <path d="M100 250C100 200 150 180 200 150C250 120 300 100 300 150C300 200 250 220 200 250C150 280 100 300 100 250Z" fill="#0EA5E9" />
                        <circle cx="150" cy="180" r="15" fill="#22C55E" />
                        <circle cx="250" cy="170" r="15" fill="#22C55E" />
                        <path d="M180 120L220 80L260 120" stroke="#0EA5E9" stroke-width="10" stroke-linecap="round" />
                        <rect x="120" y="220" width="160" height="40" rx="8" fill="#F8FAFC" />
                        <path d="M140 260H260" stroke="#22C55E" stroke-width="4" stroke-dasharray="8 8" />
                        <circle cx="160" cy="310" r="8" fill="#0EA5E9" />
                        <circle cx="190" cy="310" r="8" fill="#0EA5E9" />
                        <circle cx="220" cy="310" r="8" fill="#0EA5E9" />
                        <circle cx="250" cy="310" r="8" fill="#0EA5E9" />
                        <path d="M100 250C100 200 150 180 200 150C250 120 300 100 300 150C300 200 250 220 200 250C150 280 100 300 100 250Z" stroke="#0C4A6E" stroke-width="2" />
                        <path d="M80 150L120 120" stroke="#22C55E" stroke-width="4" stroke-linecap="round" />
                        <path d="M80 200L120 180" stroke="#22C55E" stroke-width="4" stroke-linecap="round" />
                        <path d="M320 200L280 180" stroke="#22C55E" stroke-width="4" stroke-linecap="round" />
                        <path d="M320 150L280 120" stroke="#22C55E" stroke-width="4" stroke-linecap="round" />
                    </svg>
                </div>

                <div class="info-container">
                    <div class="info-box">
                        <h3 class="info-title">
                            <i class="fas fa-door-open"></i> Kunjungan Edukasi Terbuka Untuk:
                        </h3>
                        <ul class="visitor-list">
                            <li>
                                <i class="fas fa-building"></i>
                                <span>CSR</span>
                            </li>
                            <li>
                                <i class="fas fa-school"></i>
                                <span>Sekolah</span>
                            </li>
                            <li>
                                <i class="fas fa-university"></i>
                                <span>Kampus</span>
                            </li>
                            <li>
                                <i class="fas fa-users"></i>
                                <span>Komunitas</span>
                            </li>
                            <li>
                                <i class="fas fa-newspaper"></i>
                                <span>Media</span>
                            </li>
                            <li>
                                <i class="fas fa-user-friends"></i>
                                <span>Umum</span>
                            </li>
                        </ul>

                        <div class="cta-container">
                            <a href="#jadwalkan" class="cta-button">
                                Jadwalkan Kunjungan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
