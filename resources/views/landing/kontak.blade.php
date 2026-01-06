@extends('landing.components.layout')

@section('title', 'Kontak & Jadwalkan Kunjungan - Desa Cakrawala')

@push('styles')
    <style>
        /* HANYA STYLE UNTUK HALAMAN INI - KONTAK & JADWALKAN KUNJUNGAN */
        .contact-visit-page {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8fafc;
        }

        /* Hero Section */
        .contact-hero {
            padding: 120px 0 80px;
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .contact-hero::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .contact-hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .contact-hero .lead {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 10px;
            max-width: 800px;
            line-height: 1.6;
        }

        /* Kontak Resmi Section */
        .kontak-section {
            padding: 80px 0;
            background: white;
        }

        .kontak-section .section-title {
            margin-bottom: 40px;
            padding-bottom: 20px;
            border-bottom: 2px solid #e2e8f0;
        }

        .kontak-section .section-title h2 {
            color: #0f766e;
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .kontak-section .section-title h2 i {
            color: #14b8a6;
        }

        .kontak-section .contact-card {
            background: #f8fafc;
            border-radius: 16px;
            padding: 40px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
        }

        .kontak-section .org-name {
            color: #0f766e;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .kontak-section .org-desc {
            color: #64748b;
            font-size: 1rem;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 1px solid #e2e8f0;
        }

        .kontak-section .contact-list {
            list-style: none;
            padding-left: 0;
            margin-bottom: 30px;
        }

        .kontak-section .contact-list li {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }

        .kontak-section .contact-list li i {
            width: 40px;
            height: 40px;
            background: #14b8a6;
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
            font-size: 1.1rem;
        }

        .kontak-section .contact-list li .contact-label {
            color: #475569;
            font-size: 0.9rem;
            font-weight: 500;
            margin-bottom: 5px;
            display: block;
        }

        .kontak-section .contact-list li .contact-value {
            color: #1e293b;
            font-size: 1.05rem;
            font-weight: 600;
            word-break: break-word;
        }

        .kontak-section .operational-hours {
            background: #f0fdfa;
            border-radius: 12px;
            padding: 25px;
            border-left: 4px solid #14b8a6;
            margin-top: 30px;
        }

        .kontak-section .operational-hours h4 {
            color: #0f766e;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .kontak-section .operational-hours p {
            color: #475569;
            margin-bottom: 10px;
            line-height: 1.6;
        }

        /* Form Section */
        .form-section {
            padding: 80px 0;
            background: #f1f5f9;
        }

        .form-section .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .form-section .section-title h2 {
            color: #0f766e;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .form-section .section-title p {
            color: #64748b;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto;
        }

        .form-section .booking-form {
            background: white;
            border-radius: 16px;
            padding: 40px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
            border: 1px solid #e2e8f0;
        }

        .form-section .form-group {
            margin-bottom: 25px;
        }

        .form-section .form-label {
            color: #334155;
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }

        .form-section .form-label .required {
            color: #ef4444;
            margin-left: 4px;
        }

        .form-section .form-control,
        .form-section .form-select {
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 12px 15px;
            font-size: 1rem;
            transition: all 0.3s ease;
            width: 100%;
        }

        .form-section .form-control:focus,
        .form-section .form-select:focus {
            border-color: #14b8a6;
            box-shadow: 0 0 0 3px rgba(20, 184, 166, 0.15);
            outline: none;
        }

        .form-section .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.75rem center;
            background-size: 16px 12px;
        }

        .form-section .form-subtitle {
            color: #0f766e;
            font-weight: 700;
            font-size: 1.3rem;
            margin: 40px 0 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #e2e8f0;
        }

        .form-section .checkbox-group {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
            gap: 10px;
        }

        .form-section .checkbox-group input[type="checkbox"] {
            width: 20px;
            height: 20px;
            margin-top: 3px;
            accent-color: #14b8a6;
        }

        .form-section .checkbox-group label {
            color: #475569;
            line-height: 1.5;
            flex: 1;
        }

        .form-section .checkbox-group label a {
            color: #0f766e;
            text-decoration: underline;
        }

        .form-section .btn-submit {
            background: linear-gradient(135deg, #14b8a6, #0d9488);
            color: white;
            padding: 18px 45px;
            border-radius: 10px;
            font-weight: 700;
            font-size: 1.2rem;
            border: none;
            transition: all 0.3s ease;
            width: 100%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            margin-top: 30px;
        }

        .form-section .btn-submit:hover {
            background: linear-gradient(135deg, #0d9488, #0f766e);
            transform: translateY(-5px);
            box-shadow: 0 15px 35px rgba(20, 184, 166, 0.3);
        }

        /* Konfirmasi Section */
        .konfirmasi-section {
            padding: 80px 0;
            background: white;
        }

        .konfirmasi-section .section-title {
            margin-bottom: 40px;
        }

        .konfirmasi-section .section-title h2 {
            color: #0f766e;
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .konfirmasi-section .timeline {
            max-width: 800px;
            margin: 0 auto;
        }

        .konfirmasi-section .step {
            display: flex;
            margin-bottom: 30px;
            position: relative;
        }

        .konfirmasi-section .step:not(:last-child)::after {
            content: '';
            position: absolute;
            left: 25px;
            top: 50px;
            width: 2px;
            height: calc(100% + 10px);
            background: #e2e8f0;
        }

        .konfirmasi-section .step-number {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #14b8a6, #0d9488);
            border-radius: 50%;
            color: white;
            font-weight: 700;
            font-size: 1.3rem;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 20px;
            flex-shrink: 0;
            z-index: 1;
        }

        .konfirmasi-section .step-content {
            flex: 1;
            padding-top: 8px;
        }

        .konfirmasi-section .step-content h4 {
            color: #1e293b;
            font-weight: 700;
            font-size: 1.3rem;
            margin-bottom: 10px;
        }

        .konfirmasi-section .step-content p {
            color: #475569;
            line-height: 1.6;
            margin-bottom: 15px;
        }

        .konfirmasi-section .checklist {
            list-style: none;
            padding-left: 0;
        }

        .konfirmasi-section .checklist li {
            margin-bottom: 10px;
            padding-left: 25px;
            position: relative;
            color: #475569;
        }

        .konfirmasi-section .checklist li::before {
            content: '✓';
            position: absolute;
            left: 0;
            color: #14b8a6;
            font-weight: bold;
            font-size: 1.1rem;
        }

        /* Info Tambahan Section */
        .info-section {
            padding: 80px 0;
            background: #f1f5f9;
        }

        .info-section .section-title {
            margin-bottom: 40px;
        }

        .info-section .section-title h2 {
            color: #0f766e;
            font-weight: 700;
            font-size: 2.2rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .info-section .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
        }

        .info-section .info-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            border: 1px solid #e2e8f0;
            transition: all 0.3s ease;
        }

        .info-section .info-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: #14b8a6;
        }

        .info-section .info-card h4 {
            color: #1e293b;
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .info-section .info-card h4 i {
            color: #14b8a6;
        }

        .info-section .info-card p {
            color: #475569;
            line-height: 1.6;
            margin-bottom: 0;
        }

        /* CTA Section */
        .cta-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%);
            color: white;
            text-align: center;
        }

        .cta-section h2 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 40px;
        }

        .cta-section .cta-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 50px;
        }

        .cta-section .cta-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border-radius: 12px;
            padding: 30px 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
        }

        .cta-section .cta-card:hover {
            background: rgba(255, 255, 255, 0.15);
            transform: translateY(-10px);
            border-color: rgba(255, 255, 255, 0.3);
        }

        .cta-section .cta-card i {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: white;
        }

        .cta-section .cta-card h4 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .cta-section .cta-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: white;
            color: #0f766e;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .cta-section .cta-btn:hover {
            background: #f8fafc;
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            color: #0f766e;
        }

        /* Microcopy Section */
        .microcopy-section {
            padding: 80px 0;
            background: white;
            text-align: center;
        }

        .microcopy-section .quote {
            max-width: 800px;
            margin: 0 auto;
            font-size: 1.3rem;
            line-height: 1.8;
            color: #475569;
            font-style: italic;
            position: relative;
            padding: 0 40px;
        }

        .microcopy-section .quote::before,
        .microcopy-section .quote::after {
            content: '"';
            font-size: 4rem;
            color: #14b8a6;
            position: absolute;
            opacity: 0.3;
            font-family: serif;
        }

        .microcopy-section .quote::before {
            top: -20px;
            left: 0;
        }

        .microcopy-section .quote::after {
            bottom: -40px;
            right: 0;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .contact-hero h1 {
                font-size: 2.5rem;
            }

            .kontak-section .contact-card {
                padding: 30px;
            }

            .form-section .booking-form {
                padding: 30px;
            }
        }

        @media (max-width: 768px) {
            .contact-hero {
                padding: 100px 0 60px;
            }

            .contact-hero h1 {
                font-size: 2.2rem;
            }

            .contact-hero .lead {
                font-size: 1.1rem;
            }

            .kontak-section,
            .form-section,
            .konfirmasi-section,
            .info-section,
            .cta-section,
            .microcopy-section {
                padding: 60px 0;
            }

            .section-title h2 {
                font-size: 1.8rem;
            }

            .form-section .section-title h2 {
                font-size: 2rem;
            }

            .info-section .info-grid {
                grid-template-columns: 1fr;
            }

            .cta-section h2 {
                font-size: 2rem;
            }

            .cta-section .cta-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .contact-hero h1 {
                font-size: 1.8rem;
            }

            .kontak-section .contact-card {
                padding: 25px 20px;
            }

            .form-section .booking-form {
                padding: 25px 20px;
            }

            .microcopy-section .quote {
                font-size: 1.1rem;
                padding: 0 20px;
            }

            .konfirmasi-section .step {
                flex-direction: column;
            }

            .konfirmasi-section .step-number {
                margin-bottom: 15px;
            }

            .konfirmasi-section .step:not(:last-child)::after {
                left: 25px;
                top: 65px;
                height: calc(100% + 5px);
            }
        }
    </style>
@endpush

@section('content')
    <div class="contact-visit-page" style="margin-top: 100px;">
        <!-- Hero Section -->
        <section class="contact-hero">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h1 style="color: whitesmoke;">KONTAK & JADWALKAN KUNJUNGAN</h1>
                        <p class="lead">
                            Hubungi kami untuk pertanyaan, booking paket wisata, kerja sama CSR, atau kunjungan
                            langsung ke Desa Cakrawala.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Kontak Resmi Section -->
        <section class="kontak-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-title">
                            <h2><i class="fas fa-address-book"></i> Kontak Resmi Desa Cakrawala</h2>
                        </div>

                        <div class="contact-card">
                            <div class="org-name">Program Desa Cakrawala — Yayasan Seribu Senyum</div>
                            <p class="org-desc">Halaman kontak resmi untuk segala keperluan kunjungan dan kerjasama</p>

                            <ul class="contact-list">
                                <li>
                                    <i class="fas fa-map-marker-alt"></i>
                                    <div>
                                        <span class="contact-label">Alamat</span>
                                        <span class="contact-value">Desa Cakrawala, Kecamatan Maju, Kabupaten Sejahtera, Jawa Timur</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fas fa-envelope"></i>
                                    <div>
                                        <span class="contact-label">Email resmi</span>
                                        <span class="contact-value">info@seribusenyum.org</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fab fa-whatsapp"></i>
                                    <div>
                                        <span class="contact-label">WhatsApp Admin Program</span>
                                        <span class="contact-value">+62 812 3456 7890</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fas fa-phone"></i>
                                    <div>
                                        <span class="contact-label">Telepon Kantor</span>
                                        <span class="contact-value">(031) 1234 5678</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fab fa-instagram"></i>
                                    <div>
                                        <span class="contact-label">Instagram Yayasan</span>
                                        <span class="contact-value">@yayasan_seribusenyum</span>
                                    </div>
                                </li>

                                <li>
                                    <i class="fab fa-instagram"></i>
                                    <div>
                                        <span class="contact-label">Instagram EO Wisata</span>
                                        <span class="contact-value">@lingkardesa</span>
                                    </div>
                                </li>
                            </ul>

                            <div class="operational-hours">
                                <h4><i class="far fa-clock"></i> Jam Operasional</h4>
                                <p><strong>Senin – Jumat, 09:00 – 17:00 WIB</strong></p>
                                <p>  di luar jam tersebut dapat dijadwalkan melalui booking form di bawah ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Form Section -->
        {{-- <section class="form-section">
            <div class="container">
                <div class="section-title">
                    <h2>Jadwalkan Kunjungan</h2>
                    <p>Isi formulir berikut untuk mengatur kunjungan Smart Eco Farm, paket wisata edukasi, 2D1N, atau survei lokasi untuk CSR.</p>
                </div>

                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <form class="booking-form" id="bookingForm">
                            <h3 class="form-subtitle">Formulir Booking / Kunjungan Lapangan</h3>

                            <h4 class="form-subtitle" style="margin-top: 30px;">Identitas Pemohon</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="nama">Nama Lengkap <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="nama" name="nama" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="organisasi">Nama Sekolah / Organisasi / Perusahaan <span class="required">*</span></label>
                                        <input type="text" class="form-control" id="organisasi" name="organisasi" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="jabatan">Jabatan (opsional)</label>
                                        <input type="text" class="form-control" id="jabatan" name="jabatan">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="email">Email <span class="required">*</span></label>
                                        <input type="email" class="form-control" id="email" name="email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="whatsapp">Nomor WhatsApp Aktif <span class="required">*</span></label>
                                <input type="tel" class="form-control" id="whatsapp" name="whatsapp" required placeholder="Contoh: 081234567890">
                            </div>

                            <h4 class="form-subtitle">Detail Kegiatan</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="jenis_paket">Jenis Paket / Kegiatan <span class="required">*</span></label>
                                        <select class="form-select" id="jenis_paket" name="jenis_paket" required>
                                            <option value="">Pilih Jenis Paket</option>
                                            <option value="smart_eco_farm">Smart Eco Farm Tour</option>
                                            <option value="half_day">Paket Half Day</option>
                                            <option value="full_day">Paket Full Day</option>
                                            <option value="2d1n">Paket 2D1N</option>
                                            <option value="csr">CSR Program</option>
                                            <option value="survey">Survey Lokasi</option>
                                            <option value="media">Kunjungan Media</option>
                                            <option value="lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="jumlah_peserta">Jumlah Peserta <span class="required">*</span></label>
                                        <input type="number" class="form-control" id="jumlah_peserta" name="jumlah_peserta" min="1" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tanggal_kunjungan">Tanggal Kunjungan yang Diinginkan <span class="required">*</span></label>
                                        <input type="date" class="form-control" id="tanggal_kunjungan" name="tanggal_kunjungan" required>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="tanggal_alternatif">Alternatif Tanggal (opsional)</label>
                                        <input type="date" class="form-control" id="tanggal_alternatif" name="tanggal_alternatif">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="jenis_peserta">Jenis Peserta</label>
                                <select class="form-select" id="jenis_peserta" name="jenis_peserta">
                                    <option value="">Pilih Jenis Peserta</option>
                                    <option value="paud">PAUD</option>
                                    <option value="sd">SD</option>
                                    <option value="smp">SMP</option>
                                    <option value="sma">SMA</option>
                                    <option value="mahasiswa">Mahasiswa</option>
                                    <option value="dewasa">Dewasa</option>
                                    <option value="keluarga">Keluarga</option>
                                    <option value="perusahaan">Perusahaan</option>
                                </select>
                            </div>

                            <h4 class="form-subtitle">Fasilitas yang Dibutuhkan</h4>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="transportasi">Transportasi</label>
                                        <select class="form-select" id="transportasi" name="transportasi">
                                            <option value="">Pilih Opsi</option>
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="konsumsi">Konsumsi</label>
                                        <select class="form-select" id="konsumsi" name="konsumsi">
                                            <option value="">Pilih Opsi</option>
                                            <option value="tidak_perlu">Tidak Perlu</option>
                                            <option value="snack">Snack</option>
                                            <option value="makan_siang">Makan Siang</option>
                                            <option value="bbq">BBQ</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="dokumentasi">Dokumentasi Foto/Video</label>
                                        <select class="form-select" id="dokumentasi" name="dokumentasi">
                                            <option value="">Pilih Opsi</option>
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-label" for="asuransi">Asuransi Peserta</label>
                                        <select class="form-select" id="asuransi" name="asuransi">
                                            <option value="">Pilih Opsi</option>
                                            <option value="ya">Ya</option>
                                            <option value="tidak">Tidak</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="kebutuhan_khusus">Kebutuhan Khusus</label>
                                <textarea class="form-control" id="kebutuhan_khusus" name="kebutuhan_khusus" rows="3" placeholder="Contoh: makanan khusus, difabel, keamanan tambahan"></textarea>
                            </div>

                            <h4 class="form-subtitle">Tujuan Kunjungan</h4>
                            <div class="form-group">
                                <select class="form-select" id="tujuan" name="tujuan">
                                    <option value="">Pilih Tujuan Kunjungan</option>
                                    <option value="edukasi">Edukasi</option>
                                    <option value="outing">Outing</option>
                                    <option value="csr">CSR</option>
                                    <option value="camping">Camping</option>
                                    <option value="penelitian">Penelitian</option>
                                    <option value="liputan">Liputan Media</option>
                                    <option value="lainnya">Lainnya</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label class="form-label" for="catatan">Catatan Tambahan</label>
                                <textarea class="form-control" id="catatan" name="catatan" rows="4" placeholder="Tuliskan catatan tambahan atau pertanyaan khusus..."></textarea>
                            </div>

                            <div class="form-group">
                                <div class="checkbox-group">
                                    <input type="checkbox" id="syarat" name="syarat" required>
                                    <label for="syarat">Saya menyetujui syarat dan ketentuan kunjungan Desa Cakrawala. <a href="/syarat-ketentuan" target="_blank">Baca syarat dan ketentuan</a></label>
                                </div>

                                <div class="checkbox-group">
                                    <input type="checkbox" id="whatsapp_approval" name="whatsapp_approval" required>
                                    <label for="whatsapp_approval">Saya bersedia dihubungi melalui WhatsApp oleh admin untuk konfirmasi kunjungan.</label>
                                </div>
                            </div>

                            <button type="submit" class="btn-submit">
                                <i class="fas fa-paper-plane"></i> Kirim Permintaan Kunjungan
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Konfirmasi Section -->
        {{-- <section class="konfirmasi-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="section-title">
                            <h2><i class="fas fa-check-circle"></i> Konfirmasi Kunjungan</h2>
                        </div>

                        <div class="timeline">
                            <div class="step">
                                <div class="step-number">1</div>
                                <div class="step-content">
                                    <h4>Setelah formulir dikirim</h4>
                                    <p>Admin akan menghubungi Anda dalam 1×24 jam kerja melalui WhatsApp atau email yang Anda berikan.</p>
                                </div>
                            </div>

                            <div class="step">
                                <div class="step-number">2</div>
                                <div class="step-content">
                                    <h4>Anda akan menerima</h4>
                                    <ul class="checklist">
                                        <li>Detail rundown awal kegiatan</li>
                                        <li>Estimasi biaya lengkap</li>
                                        <li>Dokumen SOP kunjungan</li>
                                        <li>Invoice DP (jika sudah setuju jadwal)</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="step">
                                <div class="step-number">3</div>
                                <div class="step-content">
                                    <h4>Persiapan Kunjungan</h4>
                                    <p>Tim kami akan mempersiapkan segala kebutuhan kunjungan sesuai dengan paket yang dipilih dan memberikan panduan lengkap untuk persiapan Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}

        <!-- Informasi Tambahan Section -->
        {{-- <section class="info-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <div class="section-title">
                            <h2><i class="fas fa-info-circle"></i> Informasi Tambahan Kunjungan</h2>
                        </div>

                        <div class="info-grid">
                            <div class="info-card">
                                <h4><i class="fas fa-users"></i> Minimum Peserta</h4>
                                <p>Minimal peserta: 10 orang (kecuali survey CSR). Untuk Paket 2D1N: minimal 20 orang.</p>
                            </div>

                            <div class="info-card">
                                <h4><i class="fas fa-clipboard-check"></i> Registrasi Wajib</h4>
                                <p>Kunjungan wajib melakukan registrasi sebelumnya melalui formulir ini atau kontak langsung admin.</p>
                            </div>

                            <div class="info-card">
                                <h4><i class="fas fa-user-shield"></i> Pendampingan Area</h4>
                                <p>Area tertentu (greenhouse, IoT station, kolam ikan) memerlukan pendamping dari tim kami untuk keamanan dan edukasi optimal.</p>
                            </div>

                            <div class="info-card">
                                <h4><i class="fas fa-calendar-times"></i> Kebijakan Pembatalan</h4>
                                <p>Pembatalan harus dilakukan H-7 hari kerja untuk pengembalian penuh. Pembatalan kurang dari 7 hari dikenakan biaya administrasi.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- Microcopy Section -->
        <section class="microcopy-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <p class="quote">
                            Terima kasih telah tertarik mengunjungi Desa Cakrawala. Setiap kedatangan Anda adalah
                            dukungan nyata bagi pemberdayaan masyarakat, peningkatan UMKM, dan
                            keberlangsungan Smart Eco Farm. Sampai jumpa di desa!
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const bookingForm = document.getElementById('bookingForm');

            // Set minimum date to today
            const today = new Date().toISOString().split('T')[0];
            document.getElementById('tanggal_kunjungan').min = today;
            document.getElementById('tanggal_alternatif').min = today;

            if (bookingForm) {
                bookingForm.addEventListener('submit', function(e) {
                    e.preventDefault();

                    // Validate form
                    const jumlahPeserta = parseInt(document.getElementById('jumlah_peserta').value);
                    const jenisPaket = document.getElementById('jenis_paket').value;

                    // Validate minimum participants
                    if (jenisPaket === '2d1n' && jumlahPeserta < 20) {
                        alert('Untuk Paket 2D1N, minimal peserta adalah 20 orang.');
                        return;
                    }

                    if (jenisPaket !== 'csr' && jenisPaket !== 'survey' && jumlahPeserta < 10) {
                        alert('Minimal peserta untuk kunjungan adalah 10 orang (kecuali survey CSR).');
                        return;
                    }

                    // Show loading state
                    const submitBtn = this.querySelector('.btn-submit');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
                    submitBtn.disabled = true;

                    // Simulate form submission
                    setTimeout(() => {
                        // Show success message
                        alert('Terima kasih! Permintaan kunjungan Anda telah dikirim. Admin kami akan menghubungi Anda dalam 1x24 jam kerja melalui WhatsApp.');

                        // Reset form
                        bookingForm.reset();

                        // Reset min dates
                        document.getElementById('tanggal_kunjungan').min = today;
                        document.getElementById('tanggal_alternatif').min = today;

                        // Reset button
                        submitBtn.innerHTML = originalText;
                        submitBtn.disabled = false;

                        // Scroll to confirmation section
                        document.querySelector('.konfirmasi-section').scrollIntoView({
                            behavior: 'smooth',
                            block: 'start'
                        });
                    }, 1500);
                });
            }

            // Auto-format WhatsApp number
            const whatsappInput = document.getElementById('whatsapp');
            if (whatsappInput) {
                whatsappInput.addEventListener('input', function(e) {
                    let value = this.value.replace(/\D/g, '');

                    // Ensure starts with 62 or 0
                    if (value.startsWith('0')) {
                        value = '62' + value.substring(1);
                    } else if (!value.startsWith('62') && value.length > 0) {
                        value = '62' + value;
                    }

                    this.value = value;
                });
            }

            // Dynamic validation based on package type
            const jenisPaketSelect = document.getElementById('jenis_paket');
            const jumlahPesertaInput = document.getElementById('jumlah_peserta');

            if (jenisPaketSelect && jumlahPesertaInput) {
                jenisPaketSelect.addEventListener('change', function() {
                    if (this.value === '2d1n') {
                        jumlahPesertaInput.min = 20;
                        jumlahPesertaInput.placeholder = "Minimal 20 orang";
                    } else if (this.value === 'csr' || this.value === 'survey') {
                        jumlahPesertaInput.min = 1;
                        jumlahPesertaInput.placeholder = "Minimal 1 orang";
                    } else {
                        jumlahPesertaInput.min = 10;
                        jumlahPesertaInput.placeholder = "Minimal 10 orang";
                    }
                });
            }
        });
    </script>
@endpush
