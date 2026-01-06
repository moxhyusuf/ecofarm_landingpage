@extends('landing.components.layout')


@section('title', 'Program')

@section('content')
    <!-- HERO KECIL -->
    <section class="program-hero" style="margin-top: 150px;">
        <div class="container">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent px-0">
                    <li class="breadcrumb-item"><a href="/">Beranda</a></li>
                    <li class="breadcrumb-item active">Program Desa Cakrawala</li>
                </ol>
            </nav>

            <h2 class="font-weight-bold">Program Desa Cakrawala</h2>
            <p class="text-muted mb-0">Rangkaian program pengembangan desa berbasis Smart Eco Farm, teknologi, pendidikan, UMKM, dan kesehatan masyarakat.</p>
        </div>
    </section>


    <!-- PROGRAM GRID -->
    <section class="py-5">
        <div class="container">
            <div class="row">

                <!-- KARTU PROGRAM (PATTERN/REUSABLE) -->
                <!-- Smart Eco Farm -->
                <div class="col-lg-6 mb-4">
                    <div class="card program-card shadow-sm border-0">
                        <img src="{{ asset('images/program1.jpg') }}" class="card-img-top" alt="Smart Eco Farm">

                        <div class="card-body">
                            <h5 class="card-title mb-1">Smart Eco Farm</h5>

                            <span class="badge badge-success">Active</span>

                            <p class="text-muted small mt-2">
                                Pengembangan pertanian cerdas berbasis teknologi IoT untuk meningkatkan hasil panen berkelanjutan.
                            </p>

                            <div class="mt-3">
                                <a href="{{ route('landing.program-detail', 'smart-eco-farm') }}" class="btn btn-sm btn-outline-info">Pelajari</a>
                                {{-- <button class="btn btn-sm btn-outline-primary" data-toggle="modal" data-target="#modalEcoFarm">Pelajari</button> --}}
                                <a href="/program/smart-eco-farm" class="btn btn-sm btn-outline-info">Proposal</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Dukung</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- UMKM Academy -->
                <div class="col-lg-6 mb-4">
                    <div class="card program-card shadow-sm border-0">
                        <img src="{{ asset('images/program2.jpg') }}" class="card-img-top" alt="UMKM Academy">

                        <div class="card-body">
                            <h5 class="card-title mb-1">UMKM Academy</h5>

                            <span class="badge badge-warning">Planning</span>

                            <p class="text-muted small mt-2">
                                Program pelatihan dan inkubasi untuk UMKM kreatif dalam pemasaran digital dan bisnis berkelanjutan.
                            </p>

                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary">Pelajari</button>
                                <a href="/program/umkm-academy" class="btn btn-sm btn-outline-info">Proposal</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Dukung</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Desa Melek Teknologi -->
                <div class="col-lg-6 mb-4">
                    <div class="card program-card shadow-sm border-0">
                        <img src="{{ asset('images/program3.jpg') }}" class="card-img-top" alt="Desa Melek Teknologi">

                        <div class="card-body">
                            <h5 class="card-title mb-1">Desa Melek Teknologi</h5>

                            <span class="badge badge-success">Active</span>

                            <p class="text-muted small mt-2">
                                Peningkatan literasi digital bagi masyarakat untuk percepatan transformasi desa cerdas.
                            </p>

                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary">Pelajari</button>
                                <a href="/program/desa-melek-teknologi" class="btn btn-sm btn-outline-info">Proposal</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Dukung</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Rumah Kreatif Pemuda -->
                <div class="col-lg-6 mb-4">
                    <div class="card program-card shadow-sm border-0">
                        <img src="{{ asset('images/program4.jpg') }}" class="card-img-top" alt="Rumah Kreatif Pemuda">

                        <div class="card-body">
                            <h5 class="card-title mb-1">Rumah Kreatif Pemuda</h5>

                            <span class="badge badge-warning">Planning</span>

                            <p class="text-muted small mt-2">
                                Fasilitas pengembangan kreativitas dan skill pemuda di bidang seni, teknologi, dan kewirausahaan.
                            </p>

                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary">Pelajari</button>
                                <a href="/program/rumah-kreatif-pemuda" class="btn btn-sm btn-outline-info">Proposal</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Dukung</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Gerakan Desa Sehat -->
                <div class="col-lg-6 mb-4">
                    <div class="card program-card shadow-sm border-0">
                        <img src="{{ asset('images/program5.jpg') }}" class="card-img-top" alt="Gerakan Desa Sehat">

                        <div class="card-body">
                            <h5 class="card-title mb-1">Gerakan Desa Sehat</h5>

                            <span class="badge badge-success">Active</span>

                            <p class="text-muted small mt-2">
                                Program kesehatan masyarakat melalui edukasi, pemeriksaan rutin, dan pola hidup sehat desa.
                            </p>

                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary">Pelajari</button>
                                <a href="/program/gerakan-desa-sehat" class="btn btn-sm btn-outline-info">Proposal</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Dukung</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Eco Living -->
                <div class="col-lg-6 mb-4">
                    <div class="card program-card shadow-sm border-0">
                        <img src="{{ asset('images/program1.jpg') }}" class="card-img-top" alt="Eco Living">

                        <div class="card-body">
                            <h5 class="card-title mb-1">Eco Living</h5>

                            <span class="badge badge-warning">Planning</span>

                            <p class="text-muted small mt-2">
                                Penerapan gaya hidup berkelanjutan seperti pengelolaan sampah, penghijauan, dan energi terbarukan.
                            </p>

                            <div class="mt-3">
                                <button class="btn btn-sm btn-outline-primary">Pelajari</button>
                                <a href="/program/eco-living" class="btn btn-sm btn-outline-info">Proposal</a>
                                <a href="#" class="btn btn-sm btn-outline-success">Dukung</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div> <!-- row -->
        </div>
    </section>
    <div class="modal fade" id="modalEcoFarm">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">

                <div class="modal-header">
                    <h5 class="modal-title">Smart Eco Farm</h5>
                    <button class="close" data-dismiss="modal">&times;</button>
                </div>

                <div class="modal-body">
                    <h6 class="font-weight-bold">Ringkasan Program</h6>
                    <p>Program pengembangan pertanian cerdas berbasis teknologi IoT dan sistem pertanian organik terpadu.</p>

                    <ul class="nav nav-tabs mt-4" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-kegiatan" role="tab">Kegiatan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-timeline" role="tab">Timeline</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-kebutuhan" role="tab">Kebutuhan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-donasi" role="tab">Donasi/CSR</a>
                        </li>
                    </ul>

                    <div class="tab-content pt-3">
                        <div class="tab-pane fade show active" id="tab-kegiatan">...</div>
                        <div class="tab-pane fade" id="tab-timeline">...</div>
                        <div class="tab-pane fade" id="tab-kebutuhan">...</div>
                        <div class="tab-pane fade" id="tab-donasi">...</div>
                    </div>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Daftar</a>
                    <a href="#" class="btn btn-success">Sponsor</a>
                    <a href="#" class="btn btn-info">Selengkapnya</a>
                </div>

            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .program-card img {
                object-fit: cover;
                height: 260px;
            }

            .program-card .badge {
                font-size: 12px;
                padding: 5px 10px;
            }

            .program-card .btn-sm {
                margin-right: 4px;
            }
        </style>
    @endpush
@endsection
