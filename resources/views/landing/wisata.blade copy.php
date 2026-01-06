@extends('landing.components.layout')


@section('title', 'Program')

@section('content')

    <!-- HERO -->
    <section class="" style="margin-top: 150px;">
        <div class="container text-center">
            <h1 class="display-4 font-weight-bold">Paket Wisata Edukasi — Lingkar Desa</h1>
            <p class="lead text-secondary">
                Kunjungan edukatif untuk sekolah, universitas, dan program CSR perusahaan.
            </p>

            <div class="mt-4">
                <a href="#paket" class="btn btn-primary btn-lg mr-2">Lihat Paket</a>
                <a href="#booking" class="btn btn-outline-primary btn-lg">Buat Event Khusus</a>
            </div>
        </div>
    </section>

    <!-- LIST PAKET WISATA -->
    <section id="paket" class="py-5">
        <div class="container">
            <h3 class="font-weight-bold mb-4 text-center">Paket Wisata Lingkar Desa</h3>

            <div class="row">

                <!-- Paket 1 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/program2.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h4 class="font-weight-bold">Smart Eco Farm</h4>
                            <p class="text-muted">Durasi 90 menit</p>

                            <ul class="small pl-3 mb-3">
                                <li>Tour kebun organik</li>
                                <li>Demo IoT pertanian</li>
                                <li>Workshop tanam</li>
                            </ul>

                            <p class="font-weight-bold">Harga: — (placeholder)</p>
                            <p class="small text-muted mb-3">Min. peserta: 20 orang</p>

                            <a href="#booking" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>

                <!-- Paket 2 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/program2.jpg') }}" class="card-img-top">
                        <div class="card-body">
                            <h4 class="font-weight-bold">Half Day Experience</h4>
                            <p class="text-muted">Durasi ± 4 Jam</p>

                            <ul class="small pl-3 mb-3">
                                <li>Eco Farm Tour</li>
                                <li>Kunjungan UMKM</li>
                                <li>Workshop pilihan</li>
                            </ul>

                            <p class="font-weight-bold">Harga: — (placeholder)</p>
                            <p class="small text-muted mb-3">Min. peserta: 25 orang</p>

                            <a href="#booking" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>

                <!-- Paket 3 -->
                <div class="col-md-4 mb-4">
                    <div class="card h-100 shadow-sm">
                        <img src="{{ asset('images/program2.jpg') }}" class="card-img-top">

                        <div class="card-body">
                            <h4 class="font-weight-bold">Full Day Village Tour</h4>
                            <p class="text-muted">Durasi ± 7 Jam</p>

                            <ul class="small pl-3 mb-3">
                                <li>Paket Half Day lengkap</li>
                                <li>Live cooking / cultural activity</li>
                                <li>Makan siang lokal</li>
                            </ul>

                            <p class="font-weight-bold">Harga: — (placeholder)</p>
                            <p class="small text-muted mb-3">Min. peserta: 25 orang</p>

                            <a href="#booking" class="btn btn-primary btn-block">Pesan</a>
                        </div>
                    </div>
                </div>

                <!-- Kustom Event -->
                <div class="col-md-12 mt-4">
                    <div class="card shadow-sm border-primary">
                        <div class="card-body text-center py-4">
                            <h4 class="font-weight-bold mb-2">Butuh Event Khusus?</h4>
                            <p class="text-muted mb-3">Buat paket kegiatan sesuai kebutuhan sekolah, instansi, atau perusahaan.</p>
                            <a href="#booking" class="btn btn-outline-primary btn-lg">
                                Request Proposal Event
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ITINERARY SAMPLE -->
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="font-weight-bold mb-4 text-center">Contoh Itinerary</h3>

            <ul class="nav nav-tabs justify-content-center mb-4" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#eco">Smart Eco Farm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#half">Half Day</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#full">Full Day</a>
                </li>
            </ul>

            <div class="tab-content">

                <!-- Eco Farm -->
                <div class="tab-pane fade show active" id="eco">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <ul class="timeline-list">
                                <li><strong>00:00 – 00:15</strong> Penyambutan & briefing</li>
                                <li><strong>00:15 – 00:45</strong> Tour kebun organik</li>
                                <li><strong>00:45 – 01:10</strong> Demo IoT</li>
                                <li><strong>01:10 – 01:30</strong> Workshop tanam</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Half Day -->
                <div class="tab-pane fade" id="half">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <ul class="timeline-list">
                                <li>Eco Farm Tour</li>
                                <li>UMKM Village Tour</li>
                                <li>Workshop pilihan</li>
                                <li>Coffee break</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Full Day -->
                <div class="tab-pane fade" id="full">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <ul class="timeline-list">
                                <li>Itinerary Half Day</li>
                                <li>Makan siang</li>
                                <li>Seni budaya dan live cooking</li>
                                <li>Penutupan</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- KEBIJAKAN -->
    <section class="py-5">
        <div class="container">
            <h3 class="font-weight-bold mb-4 text-center">Kebijakan & Persyaratan</h3>

            <div class="row">
                <div class="col-md-4 mb-4">
                    <h5 class="font-weight-bold">Pembatalan</h5>
                    <ul>
                        <li>Gratis sebelum H-7</li>
                        <li>50% biaya H-3 sampai H-1</li>
                        <li>Non-refundable pada hari H</li>
                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="font-weight-bold">Transportasi</h5>
                    <ul>
                        <li>Transportasi disediakan mandiri</li>
                        <li>Parkir bus tersedia</li>
                    </ul>
                </div>

                <div class="col-md-4 mb-4">
                    <h5 class="font-weight-bold">Keamanan</h5>
                    <ul>
                        <li>Area aman & dipandu fasilitator</li>
                        <li>Pertolongan pertama tersedia</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- BOOKING FORM -->
    <section id="booking" class="py-5 bg-light">
        <div class="container">
            <h3 class="font-weight-bold mb-4 text-center">Form Booking</h3>

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form>

                        <div class="form-group">
                            <label>Nama Organisasi</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Nama PIC</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Email PIC</label>
                            <input type="email" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>WhatsApp PIC</label>
                            <input type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Paket Dipilih</label>
                            <select class="form-control">
                                <option>Smart Eco Farm</option>
                                <option>Half Day</option>
                                <option>Full Day</option>
                                <option>Custom Event</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Tanggal Kunjungan</label>
                            <input type="date" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Jumlah Peserta</label>
                            <input type="number" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Catatan Tambahan</label>
                            <textarea class="form-control" rows="3"></textarea>
                        </div>

                        <button class="btn btn-primary btn-block">Kirim Booking</button>

                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- TESTIMONI -->
    <section class="py-5">
        <div class="container">
            <h3 class="font-weight-bold mb-4 text-center">Testimoni</h3>

            <div class="row">

                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <p>"Siswa kami sangat antusias, kegiatan edukatif dan menyenangkan!"</p>
                        <strong>— SMP Harapan</strong>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <p>"Cocok untuk program CSR perusahaan kami."</p>
                        <strong>— PT Sejahtera</strong>
                    </div>
                </div>

                <div class="col-md-4 mb-4">
                    <div class="p-4 border rounded shadow-sm h-100">
                        <p>"Informasi IoT-nya sangat membantu mahasiswa."</p>
                        <strong>— Universitas Cakrawala</strong>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- PHOTO REEL -->
    <section class="py-5 bg-light">
        <div class="container">
            <h3 class="font-weight-bold mb-4 text-center">Galeri Kegiatan</h3>

            <div class="row">
                @for ($i = 1; $i <= 6; $i++)
                    <div class="col-md-4 mb-4">
                        <img src="{{ asset('images/program' . $i . '.jpg') }}" class="img-fluid rounded shadow-sm">
                    </div>
                @endfor
            </div>
        </div>
    </section>
@endsection
