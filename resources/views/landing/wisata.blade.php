@extends('landing.components.layout')

@section('title', 'Paket Wisata Edukasi - Desa Cakrawala')

@push('styles')
<style>
    /* HANYA STYLE UNTUK HALAMAN INI - PAKET WISATA */
    .wisata-page {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: #f8fafc;
    }

    /* Hero Section */
    .wisata-hero {
        padding: 120px 0 80px;
        background: linear-gradient(135deg, #0f766e 0%, #14b8a6 100%);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .wisata-hero::before {
        content: '';
        position: absolute;
        top: -100px;
        right: -100px;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
    }

    .wisata-hero h1 {
        font-size: 3rem;
        font-weight: 800;
        margin-bottom: 20px;
    }

    .wisata-hero .lead {
        font-size: 1.3rem;
        color: rgba(255, 255, 255, 0.9);
        margin-bottom: 30px;
        max-width: 800px;
        line-height: 1.6;
    }

    .wisata-hero .badge {
        background: rgba(255, 255, 255, 0.2);
        color: white;
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 0.9rem;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.1);
    }

    /* Quick Stats */
    .wisata-stats {
        padding: 40px 0;
        background: white;
        position: relative;
        z-index: 1;
        margin-top: -40px;
        border-radius: 20px 20px 0 0;
        box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.05);
    }

    .wisata-stats .stats-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .wisata-stats .stat-card {
        text-align: center;
        padding: 20px;
    }

    .wisata-stats .stat-number {
        font-size: 2.5rem;
        font-weight: 800;
        color: #0f766e;
        margin-bottom: 10px;
        line-height: 1;
    }

    .wisata-stats .stat-label {
        color: #64748b;
        font-size: 1rem;
        font-weight: 500;
    }

    /* Paket Section */
    .paket-section {
        padding: 80px 0;
        background: #f8fafc;
    }

    .paket-section .section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .paket-section .section-title h2 {
        color: #0f766e;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 15px;
        position: relative;
        display: inline-block;
    }

    .paket-section .section-title h2::after {
        content: '';
        position: absolute;
        left: 50%;
        bottom: -10px;
        transform: translateX(-50%);
        width: 100px;
        height: 4px;
        background: linear-gradient(90deg, #0f766e, #14b8a6);
        border-radius: 2px;
    }

    .paket-section .paket-tabs {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
        gap: 10px;
        margin-bottom: 50px;
    }

    .paket-section .tab-btn {
        padding: 12px 25px;
        background: white;
        border: 2px solid #e2e8f0;
        border-radius: 50px;
        font-weight: 600;
        color: #475569;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .paket-section .tab-btn:hover {
        border-color: #14b8a6;
        color: #0f766e;
        transform: translateY(-3px);
    }

    .paket-section .tab-btn.active {
        background: #0f766e;
        border-color: #0f766e;
        color: white;
    }

    .paket-section .tab-btn i {
        font-size: 1.1rem;
    }

    .paket-section .paket-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
        gap: 30px;
    }

    .paket-section .paket-card {
        background: white;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        border: 1px solid #e2e8f0;
    }

    .paket-section .paket-card:hover {
        transform: translateY(-15px);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.12);
        border-color: #14b8a6;
    }

    .paket-section .paket-header {
        padding: 30px 30px 20px;
        position: relative;
    }

    .paket-section .paket-number {
        position: absolute;
        top: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #14b8a6, #0f766e);
        border-radius: 50%;
        color: white;
        font-weight: 700;
        font-size: 1.3rem;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 5px 15px rgba(20, 184, 166, 0.3);
    }

    .paket-section .paket-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #14b8a6, #0f766e);
        border-radius: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 20px;
        color: white;
        font-size: 1.8rem;
    }

    .paket-section .paket-title {
        color: #0f766e;
        font-weight: 700;
        font-size: 1.4rem;
        margin-bottom: 15px;
        line-height: 1.4;
    }

    .paket-section .paket-price {
        display: inline-block;
        background: #f0fdfa;
        color: #0f766e;
        padding: 8px 20px;
        border-radius: 20px;
        font-weight: 700;
        font-size: 1.2rem;
        margin-top: 10px;
    }

    .paket-section .paket-body {
        padding: 0 30px 30px;
    }

    .paket-section .paket-features {
        list-style: none;
        padding-left: 0;
        margin-bottom: 25px;
    }

    .paket-section .paket-features li {
        margin-bottom: 12px;
        padding-left: 25px;
        position: relative;
        color: #475569;
        line-height: 1.5;
    }

    .paket-section .paket-features li::before {
        content: '✓';
        position: absolute;
        left: 0;
        color: #14b8a6;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .paket-section .paket-info {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 25px;
        padding-top: 20px;
        border-top: 1px solid #e2e8f0;
    }

    .paket-section .paket-duration {
        color: #64748b;
        font-size: 0.9rem;
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .paket-section .btn-detail {
        background: linear-gradient(135deg, #14b8a6, #0f766e);
        color: white;
        padding: 10px 25px;
        border-radius: 8px;
        font-weight: 600;
        text-decoration: none;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
    }

    .paket-section .btn-detail:hover {
        background: linear-gradient(135deg, #0f766e, #14b8a6);
        transform: translateY(-3px);
        box-shadow: 0 10px 20px rgba(20, 184, 166, 0.3);
        color: white;
    }

    /* Additional Services */
    .services-section {
        padding: 80px 0;
        background: white;
    }

    .services-section .section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .services-section .section-title h2 {
        color: #0f766e;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .services-section .services-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
        gap: 30px;
    }

    .services-section .service-card {
        background: #f8fafc;
        border-radius: 16px;
        padding: 35px 30px;
        transition: all 0.3s ease;
        border: 1px solid #e2e8f0;
        height: 100%;
    }

    .services-section .service-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        border-color: #14b8a6;
    }

    .services-section .service-icon {
        width: 70px;
        height: 70px;
        background: linear-gradient(135deg, #14b8a6, #0f766e);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 25px;
        color: white;
        font-size: 1.8rem;
    }

    .services-section .service-card h3 {
        color: #0f766e;
        font-weight: 700;
        font-size: 1.4rem;
        margin-bottom: 20px;
    }

    .services-section .service-features {
        list-style: none;
        padding-left: 0;
    }

    .services-section .service-features li {
        margin-bottom: 10px;
        padding-left: 25px;
        position: relative;
        color: #475569;
    }

    .services-section .service-features li::before {
        content: '•';
        position: absolute;
        left: 0;
        color: #14b8a6;
        font-size: 1.5rem;
        line-height: 1;
    }

    /* CTA Section */
    .cta-wisata {
        padding: 100px 0;
        background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
        color: white;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .cta-wisata::before {
        content: '';
        position: absolute;
        top: -100px;
        right: -100px;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.05);
        border-radius: 50%;
    }

    .cta-wisata h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 20px;
        color: white;
    }

    .cta-wisata p {
        font-size: 1.2rem;
        color: #cbd5e1;
        max-width: 700px;
        margin: 0 auto 40px;
        line-height: 1.6;
    }

    .cta-wisata .cta-buttons {
        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
    }

    .cta-wisata .btn-cta {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        padding: 16px 35px;
        border-radius: 50px;
        font-weight: 700;
        font-size: 1.1rem;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .cta-wisata .btn-primary {
        background: linear-gradient(135deg, #14b8a6, #0f766e);
        color: white;
        box-shadow: 0 10px 25px rgba(20, 184, 166, 0.3);
    }

    .cta-wisata .btn-secondary {
        background: rgba(255, 255, 255, 0.1);
        color: white;
        border: 2px solid rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
    }

    .cta-wisata .btn-cta:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(20, 184, 166, 0.4);
    }

    .cta-wisata .btn-secondary:hover {
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
    }

    /* FAQ Section */
    .faq-section {
        padding: 80px 0;
        background: #f8fafc;
    }

    .faq-section .section-title {
        text-align: center;
        margin-bottom: 60px;
    }

    .faq-section .section-title h2 {
        color: #0f766e;
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 15px;
    }

    .faq-section .accordion {
        max-width: 800px;
        margin: 0 auto;
    }

    .faq-section .accordion-item {
        background: white;
        border-radius: 12px;
        margin-bottom: 15px;
        border: 1px solid #e2e8f0;
        overflow: hidden;
    }

    .faq-section .accordion-header {
        padding: 20px 25px;
        cursor: pointer;
        display: flex;
        justify-content: space-between;
        align-items: center;
        transition: all 0.3s ease;
    }

    .faq-section .accordion-header:hover {
        background: #f8fafc;
    }

    .faq-section .accordion-header h3 {
        color: #0f766e;
        font-weight: 600;
        font-size: 1.1rem;
        margin: 0;
        flex: 1;
    }

    .faq-section .accordion-icon {
        width: 30px;
        height: 30px;
        background: #f0fdfa;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #0f766e;
        font-size: 1rem;
        transition: all 0.3s ease;
    }

    .faq-section .accordion-item.active .accordion-icon {
        transform: rotate(45deg);
        background: #0f766e;
        color: white;
    }

    .faq-section .accordion-content {
        padding: 0 25px;
        max-height: 0;
        overflow: hidden;
        transition: all 0.3s ease;
    }

    .faq-section .accordion-item.active .accordion-content {
        padding: 0 25px 25px;
        max-height: 500px;
    }

    .faq-section .accordion-content p {
        color: #475569;
        line-height: 1.6;
        margin-bottom: 0;
    }

    /* Responsive */
    @media (max-width: 992px) {
        .wisata-hero h1 {
            font-size: 2.5rem;
        }

        .paket-section .paket-grid {
            grid-template-columns: repeat(auto-fill, minmax(320px, 1fr));
        }

        .services-section .services-grid {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .wisata-hero {
            padding: 100px 0 60px;
        }

        .wisata-hero h1 {
            font-size: 2.2rem;
        }

        .wisata-hero .lead {
            font-size: 1.1rem;
        }

        .paket-section,
        .services-section,
        .cta-wisata,
        .faq-section {
            padding: 60px 0;
        }

        .paket-section .paket-grid {
            grid-template-columns: 1fr;
        }

        .wisata-stats .stats-grid {
            grid-template-columns: repeat(2, 1fr);
        }

        .paket-section .paket-tabs {
            flex-direction: column;
            align-items: stretch;
        }

        .paket-section .tab-btn {
            justify-content: center;
        }

        .cta-wisata .cta-buttons {
            flex-direction: column;
            align-items: center;
        }

        .cta-wisata .btn-cta {
            width: 100%;
            max-width: 300px;
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .wisata-hero h1 {
            font-size: 1.8rem;
        }

        .wisata-stats .stats-grid {
            grid-template-columns: 1fr;
        }

        .paket-section .paket-card {
            margin-bottom: 30px;
        }

        .services-section .services-grid {
            grid-template-columns: 1fr;
        }

        .cta-wisata h2 {
            font-size: 2rem;
        }

        .faq-section .section-title h2 {
            font-size: 2rem;
        }
    }
</style>
@endpush

@push('js')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Tab Navigation
        const tabBtns = document.querySelectorAll('.tab-btn');
        const paketCards = document.querySelectorAll('.paket-card');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                tabBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');

                const category = this.getAttribute('data-category');

                // Show/hide cards based on category
                paketCards.forEach(card => {
                    if (category === 'all' || card.getAttribute('data-category') === category) {
                        card.style.display = 'block';
                        setTimeout(() => {
                            card.style.opacity = '1';
                            card.style.transform = 'translateY(0)';
                        }, 10);
                    } else {
                        card.style.opacity = '0';
                        card.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            card.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });

        // Accordion FAQ
        const accordionItems = document.querySelectorAll('.accordion-item');

        accordionItems.forEach(item => {
            const header = item.querySelector('.accordion-header');

            header.addEventListener('click', function() {
                // Close all other items
                accordionItems.forEach(otherItem => {
                    if (otherItem !== item && otherItem.classList.contains('active')) {
                        otherItem.classList.remove('active');
                    }
                });

                // Toggle current item
                item.classList.toggle('active');
            });
        });

        // Booking Button Click
        const bookingBtns = document.querySelectorAll('.btn-detail');

        bookingBtns.forEach(btn => {
            btn.addEventListener('click', function(e) {
                const paketName = this.closest('.paket-card').querySelector('.paket-title').textContent;

                // Store package info in localStorage for booking form
                localStorage.setItem('selectedPaket', paketName);

                // Redirect to booking page
                window.location.href = '/jadwalkan';
            });
        });

        // Quick Booking Form
        const quickBookingForm = document.getElementById('quickBookingForm');

        if (quickBookingForm) {
            quickBookingForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const name = this.querySelector('input[name="nama"]').value;
                const email = this.querySelector('input[name="email"]').value;
                const paket = this.querySelector('select[name="paket"]').value;

                if (!name || !email || !paket) {
                    alert('Silakan lengkapi semua field yang wajib diisi.');
                    return;
                }

                // Show loading state
                const submitBtn = this.querySelector('.btn-submit');
                const originalText = submitBtn.innerHTML;
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Mengirim...';
                submitBtn.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    alert(`Terima kasih ${name}! Permintaan booking untuk ${paket} telah dikirim. Tim kami akan menghubungi Anda via email dalam 1x24 jam.`);

                    // Reset form
                    this.reset();

                    // Reset button
                    submitBtn.innerHTML = originalText;
                    submitBtn.disabled = false;
                }, 1500);
            });
        }
    });
</script>
@endpush

@section('content')
<div class="wisata-page">
    <!-- Hero Section -->
    <section class="wisata-hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <div class="badge">Wisata Edukasi Berkelanjutan</div>
                    <h1>Paket Wisata Edukasi Desa Cakrawala</h1>
                    <p class="lead">
                        Nikmati pengalaman belajar langsung di alam sambil mendukung pemberdayaan masyarakat desa.
                        Setiap kunjungan Anda berkontribusi pada keberlanjutan Desa Cakrawala.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quick Stats -->
    <section class="wisata-stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <div class="stat-number">7+</div>
                    <div class="stat-label">Jenis Paket Wisata</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">2,500+</div>
                    <div class="stat-label">Pengunjung Tahunan</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">98%</div>
                    <div class="stat-label">Kepuasan Pengunjung</div>
                </div>
                <div class="stat-card">
                    <div class="stat-number">15+</div>
                    <div class="stat-label">Kegiatan Edukasi</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket Wisata Section -->
    <section class="paket-section">
        <div class="container">
            <div class="section-title">
                <h2>Paket Wisata Edukasi</h2>
                <p class="text-muted">Pilih paket yang sesuai dengan kebutuhan dan minat Anda</p>
            </div>

            <!-- Tab Navigation -->
            <div class="paket-tabs">
                <button class="tab-btn active" data-category="all">
                    <i class="fas fa-globe"></i> Semua Paket
                </button>
                <button class="tab-btn" data-category="halfday">
                    <i class="fas fa-sun"></i> Half Day
                </button>
                <button class="tab-btn" data-category="fullday">
                    <i class="fas fa-calendar-day"></i> Full Day
                </button>
                <button class="tab-btn" data-category="camping">
                    <i class="fas fa-campground"></i> Camping
                </button>
            </div>

            <!-- Paket Grid -->
            <div class="paket-grid">
                <!-- Paket 1 -->
                <div class="paket-card" data-category="halfday">
                    <div class="paket-header">
                        <div class="paket-number">1</div>
                        <div class="paket-icon">
                            <i class="fas fa-seedling"></i>
                        </div>
                        <h3 class="paket-title">Smart Eco Farm Tour</h3>
                        <div class="paket-price">Rp 75.000/orang</div>
                    </div>
                    <div class="paket-body">
                        <ul class="paket-features">
                            <li>Tur lengkap Smart Eco Farm</li>
                            <li>Demo teknologi IoT pertanian</li>
                            <li>Edukasi aquaponik & hidroponik</li>
                            <li>Pengenalan sistem monitoring digital</li>
                            <li>Gratis minuman tradisional</li>
                        </ul>
                        <div class="paket-info">
                            <div class="paket-duration">
                                <i class="far fa-clock"></i> 3-4 Jam
                            </div>
                            <button class="btn-detail">Booking Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Paket 2 -->
                <div class="paket-card" data-category="halfday">
                    <div class="paket-header">
                        <div class="paket-number">2</div>
                        <div class="paket-icon">
                            <i class="fas fa-apple-alt"></i>
                        </div>
                        <h3 class="paket-title">Petik Jeruk Segar</h3>
                        <div class="paket-price">Rp 95.000/orang</div>
                    </div>
                    <div class="paket-body">
                        <ul class="paket-features">
                            <li>Pengalaman petik jeruk langsung</li>
                            <li>Edukasi budidaya jeruk organik</li>
                            <li>Boleh membawa pulang 1kg jeruk</li>
                            <li>Demo pembuatan pupuk organik</li>
                            <li>Snack buah-buahan lokal</li>
                        </ul>
                        <div class="paket-info">
                            <div class="paket-duration">
                                <i class="far fa-clock"></i> 3-4 Jam
                            </div>
                            <button class="btn-detail">Booking Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Paket 3 -->
                <div class="paket-card" data-category="halfday">
                    <div class="paket-header">
                        <div class="paket-number">3</div>
                        <div class="paket-icon">
                            <i class="fas fa-cow"></i>
                        </div>
                        <h3 class="paket-title">Kunjungan Sapi Perah & Wisata Susu</h3>
                        <div class="paket-price">Rp 85.000/orang</div>
                    </div>
                    <div class="paket-body">
                        <ul class="paket-features">
                            <li>Tur kandang sapi perah modern</li>
                            <li>Demo pemerahan susu sapi</li>
                            <li>Proses pengolahan susu segar</li>
                            <li>Degustasi berbagai produk susu</li>
                            <li>Edukasi nutrisi susu murni</li>
                        </ul>
                        <div class="paket-info">
                            <div class="paket-duration">
                                <i class="far fa-clock"></i> 3-4 Jam
                            </div>
                            <button class="btn-detail">Booking Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Paket 4 -->
                <div class="paket-card" data-category="halfday">
                    <div class="paket-header">
                        <div class="paket-number">4</div>
                        <div class="paket-icon">
                            <i class="fas fa-carrot"></i>
                        </div>
                        <h3 class="paket-title">Keliling Kebun Sayur Organik</h3>
                        <div class="paket-price">Rp 65.000/orang</div>
                    </div>
                    <div class="paket-body">
                        <ul class="paket-features">
                            <li>Jelajahi kebun sayur organik</li>
                            <li>Belajar sistem pertanian organik</li>
                            <li>Praktik panen sayur langsung</li>
                            <li>Demo pengendalian hama alami</li>
                            <li>Bawa pulang sayur segar</li>
                        </ul>
                        <div class="paket-info">
                            <div class="paket-duration">
                                <i class="far fa-clock"></i> 3-4 Jam
                            </div>
                            <button class="btn-detail">Booking Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Paket 5 -->
                <div class="paket-card" data-category="halfday">
                    <div class="paket-header">
                        <div class="paket-number">5</div>
                        <div class="paket-icon">
                            <i class="fas fa-leaf"></i>
                        </div>
                        <h3 class="paket-title">Workshop Menanam di Greenhouse</h3>
                        <div class="paket-price">Rp 110.000/orang</div>
                    </div>
                    <div class="paket-body">
                        <ul class="paket-features">
                            <li>Workshop menanam di greenhouse</li>
                            <li>Praktik langsung dengan mentor</li>
                            <li>Materi lengkap tentang greenhouse</li>
                            <li>Tanaman boleh dibawa pulang</li>
                            <li>Sertifikat workshop</li>
                        </ul>
                        <div class="paket-info">
                            <div class="paket-duration">
                                <i class="far fa-clock"></i> 4-5 Jam
                            </div>
                            <button class="btn-detail">Booking Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Paket 6 -->
                <div class="paket-card" data-category="fullday">
                    <div class="paket-header">
                        <div class="paket-number">6</div>
                        <div class="paket-icon">
                            <i class="fas fa-star"></i>
                        </div>
                        <h3 class="paket-title">Full Day – Full Experience</h3>
                        <div class="paket-price">Rp 185.000/orang</div>
                    </div>
                    <div class="paket-body">
                        <ul class="paket-features">
                            <li>Kombinasi 3 paket terbaik</li>
                            <li>Makan siang khas desa</li>
                            <li>Full akses semua fasilitas</li>
                            <li>Pemandu khusus seharian</li>
                            <li>Goodie bag produk lokal</li>
                        </ul>
                        <div class="paket-info">
                            <div class="paket-duration">
                                <i class="far fa-clock"></i> 8-9 Jam
                            </div>
                            <button class="btn-detail">Booking Sekarang</button>
                        </div>
                    </div>
                </div>

                <!-- Paket 7 -->
                <div class="paket-card" data-category="camping">
                    <div class="paket-header">
                        <div class="paket-number">7</div>
                        <div class="paket-icon">
                            <i class="fas fa-tent"></i>
                        </div>
                        <h3 class="paket-title">Paket 2 Hari 1 Malam</h3>
                        <div class="paket-price">Rp 350.000/orang</div>
                    </div>
                    <div class="paket-body">
                        <ul class="paket-features">
                            <li>Camping di alam terbuka</li>
                            <li>Tracking air terjun</li>
                            <li>Sesi outbound & team building</li>
                            <li>Api unggun & BBQ malam</li>
                            <li>Sarapan pagi khas desa</li>
                        </ul>
                        <div class="paket-info">
                            <div class="paket-duration">
                                <i class="far fa-clock"></i> 2 Hari
                            </div>
                            <button class="btn-detail">Booking Sekarang</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Additional Services Section -->
    <section class="services-section">
        <div class="container">
            <div class="section-title">
                <h2>Layanan Tambahan</h2>
                <p class="text-muted">Tambahkan pengalaman lebih dengan layanan eksklusif kami</p>
            </div>

            <div class="services-grid">
                <!-- Service 1: Camping Ground -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-campground"></i>
                    </div>
                    <h3>Camping Ground Management</h3>
                    <ul class="service-features">
                        <li>Penyewaan tenda & perlengkapan camping</li>
                        <li>Pendampingan keamanan lokasi 24 jam</li>
                        <li>Api unggun & BBQ malam dengan bahan lokal</li>
                        <li>Program malam keakraban dengan permainan tradisional</li>
                    </ul>
                </div>

                <!-- Service 2: Tracking Adventure -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hiking"></i>
                    </div>
                    <h3>Tracking Air Terjun & Eco Adventure</h3>
                    <ul class="service-features">
                        <li>Pemandu tracking berpengalaman</li>
                        <li>Jalur aman untuk anak maupun dewasa</li>
                        <li>Edukasi lingkungan sepanjang perjalanan</li>
                        <li>Fasilitas keamanan dan P3K lengkap</li>
                    </ul>
                </div>

                <!-- Service 3: Outbound -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Outbound & Team Building</h3>
                    <ul class="service-features">
                        <li>Games kolaboratif & problem solving</li>
                        <li>Leadership games untuk pengembangan tim</li>
                        <li>Ice breaking & simulasi tim interaktif</li>
                        <li>Cocok untuk sekolah, kampus, atau perusahaan</li>
                    </ul>
                </div>

                <!-- Service 4: CSR & Social -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Event CSR & Program Sosial</h3>
                    <ul class="service-features">
                        <li>Penanaman pohon bersama komunitas</li>
                        <li>Pelatihan UMKM untuk warga lokal</li>
                        <li>Donasi sayur & hasil panen untuk sosial</li>
                        <li>Layanan dokumentasi dan laporan lengkap</li>
                    </ul>
                </div>

                <!-- Service 5: Dokumentasi -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-camera"></i>
                    </div>
                    <h3>Dokumentasi Foto & Video</h3>
                    <ul class="service-features">
                        <li>Foto kegiatan profesional (setiap paket)</li>
                        <li>Video highlight untuk CSR / sekolah</li>
                        <li>Drone footage opsional</li>
                        <li>Digital album & file high-resolution</li>
                    </ul>
                </div>

                <!-- Service 6: Catering & Konsumsi -->
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-utensils"></i>
                    </div>
                    <h3>Catering & Konsumsi Lokal</h3>
                    <ul class="service-features">
                        <li>Makanan khas desa dengan bahan lokal</li>
                        <li>Menu khusus untuk kebutuhan diet</li>
                        <li>Snack & minuman tradisional</li>
                        <li>BBQ malam dengan bahan segar</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
