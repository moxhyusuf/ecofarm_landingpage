@extends('landing.components.layout')

@section('title', 'Dukungan Kerjasama - Desa Cakrawala')

@push('styles')
    <style>
        /* HANYA STYLE UNTUK HALAMAN INI - DUKUNGAN KERJASAMA */
        .support-page {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 100px;
        }

        /* Hero Section */
        .support-hero {
            padding: 120px 0 80px;
            background: linear-gradient(135deg, #1a365d 0%, #2d3748 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .support-hero::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
        }

        .support-hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
            background: linear-gradient(90deg, #63b3ed, #68d391);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .support-hero .lead {
            font-size: 1.3rem;
            color: #cbd5e0;
            margin-bottom: 40px;
            max-width: 700px;
        }

        .support-hero .btn-proposal {
            display: inline-flex;
            align-items: center;
            background: linear-gradient(135deg, #38a169, #2f855a);
            color: white;
            padding: 16px 35px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.1rem;
            border: none;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 10px 25px rgba(56, 161, 105, 0.3);
        }

        .support-hero .btn-proposal:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(56, 161, 105, 0.4);
            color: white;
        }

        .support-hero .btn-proposal i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        /* Arah Dukungan Section */
        .arah-section {
            padding: 80px 0;
            background: #f7fafc;
        }

        .arah-section .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .arah-section .section-title h2 {
            color: #2d3748;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .arah-section .section-title h2::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #4299e1, #38b2ac);
            border-radius: 2px;
        }

        .arah-section .arah-card {
            background: white;
            border-radius: 16px;
            padding: 35px 30px;
            height: 100%;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .arah-section .arah-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #4299e1;
        }

        .arah-section .arah-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #4299e1, #3182ce);
            border-radius: 50%;
            color: white;
            font-weight: 700;
            font-size: 1.5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
        }

        .arah-section .arah-card:nth-child(2) .arah-number {
            background: linear-gradient(135deg, #38b2ac, #319795);
        }

        .arah-section .arah-card:nth-child(3) .arah-number {
            background: linear-gradient(135deg, #ed8936, #dd6b20);
        }

        .arah-section .arah-card h3 {
            color: #2d3748;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .arah-section .arah-list {
            list-style: none;
            padding-left: 0;
        }

        .arah-section .arah-list li {
            margin-bottom: 12px;
            padding-left: 25px;
            position: relative;
            color: #4a5568;
        }

        .arah-section .arah-list li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #4299e1;
            font-weight: bold;
        }

        .arah-section .arah-card:nth-child(2) .arah-list li::before {
            color: #38b2ac;
        }

        .arah-section .arah-card:nth-child(3) .arah-list li::before {
            color: #ed8936;
        }

        /* Paket Sponsor Section */
        .sponsor-section {
            padding: 80px 0;
            background: white;
        }

        .sponsor-section .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .sponsor-section .section-title h2 {
            color: #2d3748;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .sponsor-section .section-title p {
            color: #718096;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .sponsor-section .sponsor-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            height: 100%;
            transition: all 0.3s ease;
            border: 2px solid #e2e8f0;
            position: relative;
            overflow: hidden;
        }

        .sponsor-section .sponsor-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 5px;
            background: linear-gradient(90deg, #4299e1, #38b2ac);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .sponsor-section .sponsor-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .sponsor-section .sponsor-card:hover::before {
            opacity: 1;
        }

        .sponsor-section .sponsor-card h3 {
            color: #2d3748;
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 20px;
            padding-bottom: 15px;
            border-bottom: 1px solid #e2e8f0;
        }

        .sponsor-section .sponsor-benefits {
            list-style: none;
            padding-left: 0;
            margin-bottom: 25px;
        }

        .sponsor-section .sponsor-benefits li {
            margin-bottom: 12px;
            padding-left: 25px;
            position: relative;
            color: #4a5568;
        }

        .sponsor-section .sponsor-benefits li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #38a169;
            font-weight: bold;
        }

        .sponsor-section .price-tag {
            display: inline-block;
            background: #f7fafc;
            color: #2d3748;
            padding: 8px 20px;
            border-radius: 20px;
            font-weight: 600;
            font-size: 1rem;
            border: 1px solid #e2e8f0;
            margin-top: 10px;
        }

        .sponsor-section .btn-contact {
            display: inline-block;
            background: #4299e1;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            width: 100%;
            text-align: center;
            margin-top: 20px;
        }

        .sponsor-section .btn-contact:hover {
            background: #3182ce;
            transform: translateY(-3px);
            color: white;
            box-shadow: 0 10px 20px rgba(66, 153, 225, 0.2);
        }

        /* Bentuk Dukungan Section */
        .bentuk-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #f7fafc 0%, #edf2f7 100%);
        }

        .bentuk-section .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .bentuk-section .section-title h2 {
            color: #2d3748;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .bentuk-section .bentuk-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-bottom: 50px;
        }

        .bentuk-section .bentuk-item {
            background: white;
            border-radius: 16px;
            padding: 30px 20px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .bentuk-section .bentuk-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #4299e1;
        }

        .bentuk-section .bentuk-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #4299e1, #3182ce);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.8rem;
            transition: all 0.3s ease;
        }

        .bentuk-section .bentuk-item:hover .bentuk-icon {
            transform: scale(1.1) rotate(10deg);
        }

        .bentuk-section .bentuk-item h4 {
            color: #2d3748;
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        /* Form Partnership Section */
        .form-section {
            padding: 80px 0;
            background: white;
        }

        .form-section .form-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .form-section .form-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .form-section .form-title h2 {
            color: #2d3748;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .form-section .form-title p {
            color: #718096;
            font-size: 1.1rem;
        }

        .form-section .support-form {
            background: #f7fafc;
            border-radius: 16px;
            padding: 40px;
            border: 1px solid #e2e8f0;
        }

        .form-section .form-group {
            margin-bottom: 25px;
        }

        .form-section .form-label {
            color: #2d3748;
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }

        .form-section .form-control {
            border: 1px solid #cbd5e0;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form-section .form-control:focus {
            border-color: #4299e1;
            box-shadow: 0 0 0 3px rgba(66, 153, 225, 0.15);
            outline: none;
        }

        .form-section .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .form-section .btn-submit {
            background: linear-gradient(135deg, #38a169, #2f855a);
            color: white;
            padding: 16px 40px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1.1rem;
            border: none;
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
        }

        .form-section .btn-submit:hover {
            background: linear-gradient(135deg, #2f855a, #276749);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(56, 161, 105, 0.3);
        }

        /* Case Studies Section */
        .case-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #1a365d 0%, #2d3748 100%);
            color: white;
        }

        .case-section .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .case-section .section-title h2 {
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
            color: white;
        }

        .case-section .section-title p {
            color: #cbd5e0;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .case-section .case-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(10px);
            border-radius: 16px;
            padding: 35px 30px;
            height: 100%;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.3s ease;
        }

        .case-section .case-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-10px);
            border-color: #4299e1;
        }

        .case-section .case-icon {
            font-size: 2.5rem;
            color: #63b3ed;
            margin-bottom: 20px;
        }

        .case-section .case-card h3 {
            font-weight: 700;
            font-size: 1.4rem;
            margin-bottom: 15px;
            color: white;
        }

        .case-section .case-card p {
            color: #cbd5e0;
            margin-bottom: 25px;
            line-height: 1.6;
        }

        .case-section .btn-download {
            display: inline-flex;
            align-items: center;
            background: #4299e1;
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
        }

        .case-section .btn-download:hover {
            background: #3182ce;
            transform: translateY(-3px);
            color: white;
            box-shadow: 0 10px 20px rgba(66, 153, 225, 0.2);
        }

        .case-section .btn-download i {
            margin-right: 10px;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .support-hero h1 {
                font-size: 2.5rem;
            }

            .arah-section .arah-card,
            .sponsor-section .sponsor-card,
            .case-section .case-card {
                margin-bottom: 30px;
            }

            .bentuk-section .bentuk-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .support-hero {
                padding: 100px 0 60px;
            }

            .support-hero h1 {
                font-size: 2.2rem;
            }

            .support-hero .lead {
                font-size: 1.1rem;
            }

            .arah-section,
            .sponsor-section,
            .bentuk-section,
            .form-section,
            .case-section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 2rem;
            }

            .bentuk-section .bentuk-grid {
                grid-template-columns: 1fr;
            }

            .form-section .support-form {
                padding: 30px 20px;
            }
        }

        @media (max-width: 576px) {
            .support-hero h1 {
                font-size: 1.8rem;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .arah-section .arah-card,
            .sponsor-section .sponsor-card {
                padding: 25px 20px;
            }
        }
    </style>
@endpush

@section('content')
    <div class="support-page">
        <!-- Hero Section -->
        <section class="support-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1>Dukung Pengembangan Desa Cakrawala</h1>
                        <p class="lead">Bergabunglah dalam gerakan membangun desa mandiri yang berkelanjutan. Setiap dukungan Anda membantu mewujudkan desa modern yang dapat direplikasi nasional.</p>
                        <a href="{{ asset('documents/proposal-csr-desa-cakrawala.pdf') }}" class="btn-proposal" download>
                            <i class="fas fa-download"></i> Download Proposal CSR
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Arah Dukungan Section -->
        <section class="arah-section">
            <div class="container">
                <div class="section-title">
                    <h2>Arah Dukungan</h2>
                    <p>Fokus pengembangan strategis untuk transformasi Desa Cakrawala</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="arah-card">
                            <div class="arah-number">1</div>
                            <h3>Memperkuat Smart Eco Farm</h3>
                            <ul class="arah-list">
                                <li>Pengembangan IoT lanjutan</li>
                                <li>Perluasan kolam aquaponik</li>
                                <li>Pusat edukasi pertanian</li>
                                <li>Dokumentasi showcase</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="arah-card">
                            <div class="arah-number">2</div>
                            <h3>Mewujudkan Pilar Draf</h3>
                            <ul class="arah-list">
                                <li>UMKM Academy</li>
                                <li>Desa Melek Teknologi</li>
                                <li>Rumah Kreatif Pemuda</li>
                                <li>Gerakan Desa Sehat</li>
                                <li>Eco-Living Desa</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="arah-card">
                            <div class="arah-number">3</div>
                            <h3>Membangun Model Jangka Panjang</h3>
                            <ul class="arah-list">
                                <li>Smart Village (SID)</li>
                                <li>Ekowisata edukatif</li>
                                <li>Program kesehatan desa</li>
                                <li>Energi terbarukan</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Paket Sponsor Section -->
        <section class="sponsor-section">
            <div class="container">
                <div class="section-title">
                    <h2>Paket Sponsor</h2>
                    <p>Pilih paket kemitraan yang sesuai dengan tujuan dan kapasitas organisasi Anda</p>
                </div>

                <div class="row">
                    <!-- Paket 1 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="sponsor-card">
                            <h3>Smart Eco Farm Sponsor</h3>
                            <ul class="sponsor-benefits">
                                <li>Branding kolam IoT</li>
                                <li>Co-branded workshop</li>
                                <li>Laporan dampak berkala</li>
                                <li>Publikasi bersama</li>
                                <li>Event showcase eksklusif</li>
                            </ul>
                            <div class="price-tag">Contact us for package</div>
                            <a href="#form" class="btn-contact">Diskusikan Paket</a>
                        </div>
                    </div>

                    <!-- Paket 2 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="sponsor-card">
                            <h3>UMKM Empowerment Sponsor</h3>
                            <ul class="sponsor-benefits">
                                <li>Sponsorship kelas UMKM</li>
                                <li>Studio konten UMKM branding</li>
                                <li>Micro-grant untuk 5 UMKM lokal</li>
                                <li>Exposure media partner</li>
                                <li>Graduation ceremony</li>
                            </ul>
                            <div class="price-tag">Contact us for package</div>
                            <a href="#form" class="btn-contact">Diskusikan Paket</a>
                        </div>
                    </div>

                    <!-- Paket 3 -->
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="sponsor-card">
                            <h3>Digital Village Sponsor</h3>
                            <ul class="sponsor-benefits">
                                <li>Sponsorship WiFi publik</li>
                                <li>Fasilitas ruang belajar digital</li>
                                <li>Pelatihan literasi digital</li>
                                <li>Digital signage recognition</li>
                                <li>Media coverage</li>
                            </ul>
                            <div class="price-tag">Contact us for package</div>
                            <a href="#form" class="btn-contact">Diskusikan Paket</a>
                        </div>
                    </div>

                    <!-- Paket 4 -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="sponsor-card">
                            <h3>Desa Sehat Sponsor</h3>
                            <ul class="sponsor-benefits">
                                <li>Sponsoring alat tumbuh kembang</li>
                                <li>Pelatihan kader kesehatan</li>
                                <li>Edukasi gizi keluarga & stunting</li>
                                <li>Posyandu branding</li>
                                <li>Health campaign partnership</li>
                            </ul>
                            <div class="price-tag">Contact us for package</div>
                            <a href="#form" class="btn-contact">Diskusikan Paket</a>
                        </div>
                    </div>

                    <!-- Paket 5 -->
                    <div class="col-lg-6 col-md-6 mb-4">
                        <div class="sponsor-card">
                            <h3>Eco-Living Sponsor</h3>
                            <ul class="sponsor-benefits">
                                <li>Bank sampah desa branding</li>
                                <li>Demo panel surya co-branding</li>
                                <li>Kampanye lingkungan bersama</li>
                                <li>Eco-education program</li>
                                <li>Sustainability report feature</li>
                            </ul>
                            <div class="price-tag">Contact us for package</div>
                            <a href="#form" class="btn-contact">Diskusikan Paket</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Bentuk Dukungan Section -->
        <section class="bentuk-section">
            <div class="container">
                <div class="section-title">
                    <h2>Bentuk Dukungan yang Diterima</h2>
                    <p>Kami terbuka untuk berbagai bentuk kontribusi sesuai dengan kapasitas dan keahlian Anda</p>
                </div>

                <div class="bentuk-grid">
                    <div class="bentuk-item">
                        <div class="bentuk-icon">
                            <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <h4>Dana & Pendanaan</h4>
                        <p>Sponsor program, grant, atau investasi sosial</p>
                    </div>

                    <div class="bentuk-item">
                        <div class="bentuk-icon">
                            <i class="fas fa-tools"></i>
                        </div>
                        <h4>Peralatan</h4>
                        <p>IT, studio konten, alat kesehatan, panel surya</p>
                    </div>

                    <div class="bentuk-item">
                        <div class="bentuk-icon">
                            <i class="fas fa-user-tie"></i>
                        </div>
                        <h4>Tenaga Ahli / Mentor</h4>
                        <p>Kesehatan, UMKM, teknologi, kreatif</p>
                    </div>

                    <div class="bentuk-item">
                        <div class="bentuk-icon">
                            <i class="fas fa-hands-helping"></i>
                        </div>
                        <h4>Volunteer</h4>
                        <p>Program magang universitas, volunteer project-based</p>
                    </div>

                    <div class="bentuk-item">
                        <div class="bentuk-icon">
                            <i class="fas fa-book-open"></i>
                        </div>
                        <h4>Riset & Kurikulum</h4>
                        <p>Pengembangan materi pelatihan, penelitian</p>
                    </div>

                    <div class="bentuk-item">
                        <div class="bentuk-icon">
                            <i class="fas fa-gift"></i>
                        </div>
                        <h4>Donasi Barang</h4>
                        <p>Alat tumbuh kembang, buku, peralatan edukasi</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Partnership Section -->
        <section class="form-section" id="form">
            <div class="container">
                <div class="form-container">
                    <div class="form-title">
                        <h2>Mulai Kerjasama</h2>
                        <p>Isi formulir berikut untuk mendiskusikan kemitraan dengan tim kami</p>
                    </div>

                    <form class="support-form" id="partnershipForm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="company">Nama Perusahaan/Organisasi *</label>
                                    <input type="text" class="form-control" id="company" name="company" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="pic">Nama PIC *</label>
                                    <input type="text" class="form-control" id="pic" name="pic" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label" for="phone">Telepon/WhatsApp *</label>
                                    <input type="tel" class="form-control" id="phone" name="phone" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="support_type">Jenis Dukungan yang Direncanakan *</label>
                            <select class="form-control form-select" id="support_type" name="support_type" required>
                                <option value="">Pilih jenis dukungan</option>
                                <option value="sponsor">Sponsor Program</option>
                                <option value="equipment">Penyediaan Peralatan</option>
                                <option value="expertise">Tenaga Ahli/Mentor</option>
                                <option value="volunteer">Volunteer/Magang</option>
                                <option value="research">Riset & Kurikulum</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="budget">Rencana Budget/Produk yang Disediakan</label>
                            <textarea class="form-control" id="budget" name="budget" rows="3" placeholder="Deskripsikan rencana dukungan budget atau produk yang akan disediakan..."></textarea>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="contact_pref">Preferensi Kontak *</label>
                            <select class="form-control form-select" id="contact_pref" name="contact_pref" required>
                                <option value="">Pilih preferensi kontak</option>
                                <option value="email">Email</option>
                                <option value="whatsapp">WhatsApp</option>
                                <option value="phone">Telepon</option>
                                <option value="meeting">Meeting Online/Offline</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="message">Pesan Tambahan</label>
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Tuliskan pesan atau pertanyaan tambahan..."></textarea>
                        </div>

                        <button type="submit" class="btn-submit">
                            <i class="fas fa-paper-plane"></i> Kirim Proposal Kerjasama
                        </button>
                    </form>
                </div>
            </div>
        </section>

        <!-- Case Studies Section -->
        <section class="case-section">
            <div class="container">
                <div class="section-title">
                    <h2>Studi Kasus & Dampak</h2>
                    <p>Lihat bagaimana dukungan Anda dapat menciptakan perubahan nyata di Desa Cakrawala</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 mb-4">
                        <div class="case-card">
                            <div class="case-icon">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h3>Laporan Dampak 2024</h3>
                            <p>Analisis komprehensif tentang perkembangan Desa Cakrawala sejak program dimulai, termasuk metrik keberhasilan dan pembelajaran.</p>
                            <a href="{{ asset('documents/laporan-dampak-2024.pdf') }}" class="btn-download" download>
                                <i class="fas fa-download"></i> Download Laporan
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="case-card">
                            <div class="case-icon">
                                <i class="fas fa-users"></i>
                            </div>
                            <h3>Success Stories Partner</h3>
                            <p>Kisah sukses perusahaan dan organisasi yang telah bermitra dengan Desa Cakrawala dan dampak yang tercipta.</p>
                            <a href="{{ asset('documents/success-stories-partner.pdf') }}" class="btn-download" download>
                                <i class="fas fa-download"></i> Download Whitepaper
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-4 mb-4">
                        <div class="case-card">
                            <div class="case-icon">
                                <i class="fas fa-road"></i>
                            </div>
                            <h3>Roadmap Replikasi Nasional</h3>
                            <p>Blueprint strategis untuk mereplikasi model Desa Cakrawala di desa-desa lain di Indonesia.</p>
                            <a href="{{ asset('documents/roadmap-replikasi-nasional.pdf') }}" class="btn-download" download>
                                <i class="fas fa-download"></i> Download Roadmap
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        // Form Submission Handler
        document.addEventListener('DOMContentLoaded', function() {
            const partnershipForm = document.getElementById('partnershipForm');

            if (partnershipForm) {
                partnershipForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Show loading state
                    const submitBtn = this.querySelector('.btn-submit');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
                    submitBtn.disabled = true;

                    // Simulate form submission
                    setTimeout(() => {
                        // Show success message
                        alert('Terima kasih! Proposal kerjasama Anda telah dikirim. Tim kami akan menghubungi Anda dalam waktu 1-2 hari kerja.');

                        // Reset form
                        partnershipForm.reset();

                        // Reset button
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;
                    }, 1500);
                });
            }

            // Smooth scroll for anchor links
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    const href = this.getAttribute('href');

                    if (href !== '#' && href.startsWith('#form')) {
                        e.preventDefault();
                        const target = document.querySelector(href);

                        if (target) {
                            window.scrollTo({
                                top: target.offsetTop - 100,
                                behavior: 'smooth'
                            });
                        }
                    }
                });
            });

            // Add hover effects dynamically
            const cards = document.querySelectorAll('.arah-card, .sponsor-card, .bentuk-item, .case-card');

            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.3s ease';
                });
            });
        });
    </script>
@endpush
