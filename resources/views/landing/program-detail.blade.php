@extends('landing.components.layout')


@section('title', 'Program')

@section('content')

    <!-- HERO HEADER -->
    <section class="" style="margin-top: 150px;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent p-0 mb-2">
                    <li class="breadcrumb-item"><a href="{{ route('landing.beranda') }}">Beranda</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('landing.program') }}">Program</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ 'smart eco farm' }}</li>
                </ol>
            </nav>

            <h1 class="display-4 font-weight-bold">{{ 'smart eco farm' }}</h1>
            <p class="lead text-secondary">Program pengembangan kapasitas bagi pelaku UMKM di Desa Cakrawala.</p>

            <div class="d-flex flex-wrap align-items-center mt-3">
                <span class="badge badge-success py-2 px-3 mr-3">Aktif</span>

                <a href="{{ route('landing.proposal') }}" class="btn btn-outline-primary btn-sm mr-2">
                    <i class="lni lni-file"></i> Pelajari Proposal
                </a>

                {{-- <a href="#" class="btn btn-primary btn-sm">
                    Gabung Inkubasi
                </a> --}}
            </div>
        </div>
    </section>

    <!-- RINGKASAN -->
    <section class="py-5">
        <div class="container">
            <div class="row">

                <!-- LEFT -->
                <div class="col-md-7 mb-4 mb-md-0">
                    <h4 class="font-weight-bold mb-3">Ringkasan Program</h4>
                    <p>
                        Program UMKM Academy bertujuan meningkatkan kapasitas pelaku usaha melalui pelatihan,
                        pendampingan, dan digitalisasi bisnis.
                    </p>

                    <div class="embed-responsive embed-responsive-16by9 mt-4 rounded shadow-sm">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/dQw4w9WgXcQ"></iframe>
                    </div>
                </div>

                <!-- RIGHT -->
                <div class="col-md-5">
                    <div class="p-4 border rounded shadow-sm bg-white">
                        <h5 class="font-weight-bold mb-3">Informasi Singkat</h5>

                        <ul class="list-unstyled mb-0">
                            <li class="mb-3">
                                <strong>Durasi:</strong> 3 bulan
                            </li>
                            <li class="mb-3">
                                <strong>Target Peserta:</strong> 30 UMKM
                            </li>
                            <li class="mb-3">
                                <strong>Lokasi:</strong> Balai Desa Cakrawala
                            </li>
                            <li class="mb-1">
                                <strong>PIC:</strong> Tim Ekonomi Kreatif Desa
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TUJUAN -->
    <section class="py-5 bg-light">
        <div class="container">
            <h4 class="font-weight-bold mb-4">Tujuan Program</h4>

            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex align-items-start mb-4">
                        <i class="lni lni-grow mr-3 h3 text-primary"></i>
                        <p>Peningkatan kapasitas manajemen bisnis peserta.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start mb-4">
                        <i class="lni lni-layout mr-3 h3 text-primary"></i>
                        <p>Pemanfaatan teknologi digital untuk pemasaran dan penjualan.</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="d-flex align-items-start mb-4">
                        <i class="lni lni-users mr-3 h3 text-primary"></i>
                        <p>Pembentukan komunitas pelaku UMKM berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEGIATAN DETAIL (TIMELINE) -->
    <section class="py-5">
        <div class="container">
            <h4 class="font-weight-bold mb-4">Kegiatan Program</h4>

            <div class="timeline">
                <div class="timeline-item mb-5">
                    <div class="timeline-icon bg-primary text-white">
                        <i class="lni lni-graduation"></i>
                    </div>
                    <div class="timeline-content">
                        <h5 class="font-weight-bold">Fase 1: Pelatihan Dasar</h5>
                        <small class="text-muted">Durasi: 3 Minggu</small>
                        <ul class="mt-2">
                            <li>Pengenalan manajemen UMKM modern</li>
                            <li>Branding dan packaging</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item mb-5">
                    <div class="timeline-icon bg-success text-white">
                        <i class="lni lni-bulb"></i>
                    </div>
                    <div class="timeline-content">
                        <h5 class="font-weight-bold">Fase 2: Digitalisasi</h5>
                        <small class="text-muted">Durasi: 4 Minggu</small>
                        <ul class="mt-2">
                            <li>Pembuatan katalog online</li>
                            <li>Optimalisasi marketplace</li>
                        </ul>
                    </div>
                </div>

                <div class="timeline-item">
                    <div class="timeline-icon bg-warning text-white">
                        <i class="lni lni-handshake"></i>
                    </div>
                    <div class="timeline-content">
                        <h5 class="font-weight-bold">Fase 3: Inkubasi Bisnis</h5>
                        <small class="text-muted">Durasi: 5 Minggu</small>
                        <ul class="mt-2">
                            <li>Pendampingan usaha</li>
                            <li>Pemantauan KPI mingguan</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- OUTPUT & KPI -->
    <section class="py-5 bg-light">
        <div class="container">
            <h4 class="font-weight-bold mb-4">Output & KPI</h4>

            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h3 class="font-weight-bold">30</h3>
                        <p>UMKM naik kelas</p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h3 class="font-weight-bold">85%</h3>
                        <p>Digital onboarding</p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h3 class="font-weight-bold">15+</h3>
                        <p>Produk tersertifikasi</p>
                    </div>
                </div>

                <div class="col-md-3 mb-4">
                    <div class="p-4 bg-white shadow-sm rounded">
                        <h3 class="font-weight-bold">10</h3>
                        <p>Mitra kolaborasi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- KEBUTUHAN & KERJASAMA -->
    <section class="py-5">
        <div class="container">
            <h4 class="font-weight-bold mb-4">Kebutuhan & Peluang Kerjasama</h4>

            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="border p-4 rounded shadow-sm h-100">
                        <h5 class="font-weight-bold mb-3">Kebutuhan Teknis</h5>
                        <ul>
                            <li>Trainer UMKM</li>
                            <li>Peralatan produksi</li>
                            <li>Modal inkubasi</li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-6 mb-4">
                    <div class="border p-4 rounded shadow-sm h-100">
                        <h5 class="font-weight-bold mb-3">Bentuk Kerjasama</h5>
                        <ul>
                            <li>CSR perusahaan</li>
                            <li>Inisiasi pelatihan</li>
                            <li>Kemitraan pemasaran</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- GALERI -->
    <section class="py-5 bg-light">
        <div class="container">
            <h4 class="font-weight-bold mb-4">Galeri Kegiatan</h4>

            <div class="row">
                @for ($i = 1; $i <= 5; $i++)
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('images/program' . $i . '.jpg') }}" class="img-fluid rounded shadow-sm" style="height: 200px">
                    </div>
                @endfor
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-5">
        <div class="container">
            <h4 class="font-weight-bold mb-4">Pertanyaan Umum</h4>

            <div id="faqAccordion">
                <div class="card mb-3">
                    <div class="card-header" data-toggle="collapse" data-target="#faq1">
                        Apa persyaratan mengikuti UMKM Academy?
                    </div>
                    <div id="faq1" class="collapse show" data-parent="#faqAccordion">
                        <div class="card-body">
                            UMKM aktif dan berdomisili di Desa Cakrawala.
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header" data-toggle="collapse" data-target="#faq2">
                        Apakah program ini berbayar?
                    </div>
                    <div id="faq2" class="collapse" data-parent="#faqAccordion">
                        <div class="card-body">
                            Program gratis, didukung dana desa dan mitra CSR.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA STICKY MOBILE -->
    <div class="d-md-none fixed-bottom bg-white border-top shadow-sm p-3 text-center">
        <a href="#" class="btn btn-primary btn-block mb-2">Daftar Sekarang</a>
        <a href="#" class="btn btn-success btn-block">Sponsori Program</a>
    </div>

@endsection
