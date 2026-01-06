@extends('landing.components.layout')

@section('title', 'Proposal & Dokumen - Desa Cakrawala')

@push('styles')
    <style>
        /* HANYA STYLE UNTUK HALAMAN INI - PROPOSAL DOWNLOAD */
        .proposal-page {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f8fafc;
        }

        /* Hero Section */
        .proposal-hero {
            padding: 120px 0 80px;
            background: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }

        .proposal-hero::before {
            content: '';
            position: absolute;
            top: -100px;
            right: -100px;
            width: 300px;
            height: 300px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
        }

        .proposal-hero h1 {
            font-size: 3rem;
            font-weight: 800;
            margin-bottom: 20px;
        }

        .proposal-hero .lead {
            font-size: 1.3rem;
            color: rgba(255, 255, 255, 0.9);
            margin-bottom: 30px;
            max-width: 700px;
            line-height: 1.6;
        }

        .proposal-hero .badge {
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

        /* Quick Access Section */
        .quick-access {
            padding: 60px 0 40px;
            background: white;
            position: relative;
            z-index: 1;
            margin-top: -40px;
            border-radius: 20px 20px 0 0;
        }

        .quick-access .access-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .quick-access .access-card {
            background: #f8fafc;
            border-radius: 12px;
            padding: 25px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
        }

        .quick-access .access-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            border-color: #3b82f6;
        }

        .quick-access .access-icon {
            width: 60px;
            height: 60px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            color: white;
            font-size: 1.5rem;
        }

        .quick-access .access-card h3 {
            color: #1e293b;
            font-weight: 600;
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .quick-access .access-card p {
            color: #64748b;
            font-size: 0.9rem;
            margin-bottom: 15px;
        }

        .quick-access .btn-download-sm {
            background: #3b82f6;
            color: white;
            padding: 8px 20px;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .quick-access .btn-download-sm:hover {
            background: #2563eb;
            transform: translateY(-2px);
            color: white;
        }

        /* Main Documents Section */
        .documents-section {
            padding: 80px 0;
            background: #f8fafc;
        }

        .documents-section .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .documents-section .section-title h2 {
            color: #1e293b;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .documents-section .section-title h2::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: -10px;
            transform: translateX(-50%);
            width: 100px;
            height: 4px;
            background: linear-gradient(90deg, #3b82f6, #10b981);
            border-radius: 2px;
        }

        .documents-section .category-title {
            color: #334155;
            font-weight: 700;
            font-size: 1.5rem;
            margin-bottom: 30px;
            padding-bottom: 15px;
            border-bottom: 2px solid #e2e8f0;
        }

        .documents-section .doc-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
            margin-bottom: 60px;
        }

        .documents-section .doc-card {
            background: white;
            border-radius: 16px;
            padding: 30px;
            transition: all 0.3s ease;
            border: 1px solid #e2e8f0;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .documents-section .doc-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            border-color: #3b82f6;
        }

        .documents-section .doc-header {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .documents-section .doc-icon {
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            color: white;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .documents-section .doc-info h3 {
            color: #1e293b;
            font-weight: 600;
            font-size: 1.3rem;
            margin-bottom: 5px;
            line-height: 1.4;
        }

        .documents-section .doc-meta {
            color: #64748b;
            font-size: 0.85rem;
            display: flex;
            gap: 15px;
            align-items: center;
        }

        .documents-section .doc-meta span {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .documents-section .doc-meta i {
            font-size: 0.8rem;
        }

        .documents-section .doc-description {
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 25px;
        }

        .documents-section .doc-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 20px;
        }

        .documents-section .doc-tag {
            background: #f1f5f9;
            color: #475569;
            padding: 4px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .documents-section .doc-tag.csr {
            background: #dbeafe;
            color: #1d4ed8;
        }

        .documents-section .doc-tag.sponsor {
            background: #f0f9ff;
            color: #0369a1;
        }

        .documents-section .doc-tag.report {
            background: #f0fdf4;
            color: #166534;
        }

        .documents-section .doc-tag.presentation {
            background: #fef3c7;
            color: #92400e;
        }

        .documents-section .btn-download {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: linear-gradient(135deg, #10b981, #059669);
            color: white;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            width: 100%;
            border: none;
        }

        .documents-section .btn-download:hover {
            background: linear-gradient(135deg, #059669, #047857);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(16, 185, 129, 0.3);
            color: white;
        }

        .documents-section .btn-preview {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: #f1f5f9;
            color: #475569;
            padding: 12px 25px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
            width: 100%;
            border: 1px solid #e2e8f0;
            margin-top: 10px;
        }

        .documents-section .btn-preview:hover {
            background: #e2e8f0;
            color: #1e293b;
            transform: translateY(-3px);
        }

        /* Stats Section */
        .stats-section {
            padding: 80px 0;
            background: linear-gradient(135deg, #1e293b 0%, #334155 100%);
            color: white;
        }

        .stats-section .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .stats-section .stat-card {
            padding: 30px 20px;
            background: rgba(255, 255, 255, 0.05);
            border-radius: 16px;
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .stats-section .stat-card:hover {
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-5px);
        }

        .stats-section .stat-number {
            font-size: 3rem;
            font-weight: 800;
            color: #60a5fa;
            margin-bottom: 10px;
            line-height: 1;
        }

        .stats-section .stat-label {
            color: #cbd5e1;
            font-size: 1.1rem;
            font-weight: 500;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background: white;
            text-align: center;
        }

        .cta-section h2 {
            color: #1e293b;
            font-weight: 700;
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .cta-section p {
            color: #64748b;
            font-size: 1.1rem;
            max-width: 700px;
            margin: 0 auto 40px;
            line-height: 1.6;
        }

        .cta-section .btn-cta {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
            padding: 18px 40px;
            border-radius: 50px;
            font-weight: 700;
            font-size: 1.2rem;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 15px 35px rgba(59, 130, 246, 0.3);
        }

        .cta-section .btn-cta:hover {
            transform: translateY(-5px) scale(1.05);
            box-shadow: 0 20px 45px rgba(59, 130, 246, 0.4);
            color: white;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .proposal-hero h1 {
                font-size: 2.5rem;
            }

            .documents-section .doc-grid {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }

            .stats-section .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 768px) {
            .proposal-hero {
                padding: 100px 0 60px;
            }

            .proposal-hero h1 {
                font-size: 2.2rem;
            }

            .proposal-hero .lead {
                font-size: 1.1rem;
            }

            .quick-access {
                padding: 40px 0 30px;
            }

            .documents-section,
            .stats-section,
            .cta-section {
                padding: 60px 0;
            }

            .documents-section .section-title h2,
            .cta-section h2 {
                font-size: 2rem;
            }

            .stats-section .stats-grid {
                grid-template-columns: 1fr;
            }

            .quick-access .access-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 576px) {
            .proposal-hero h1 {
                font-size: 1.8rem;
            }

            .documents-section .doc-grid {
                grid-template-columns: 1fr;
            }

            .documents-section .section-title h2,
            .cta-section h2 {
                font-size: 1.8rem;
            }

            .documents-section .doc-card {
                padding: 25px 20px;
            }
        }
    </style>
@endpush

@push('scripts')
    <!-- AOS Library -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize AOS
            AOS.init({
                duration: 800,
                once: true,
                offset: 100
            });

            // Download tracking
            document.querySelectorAll('.btn-download, .btn-download-sm').forEach(button => {
                button.addEventListener('click', function(e) {
                    const docName = this.getAttribute('data-doc') ||
                        this.closest('.doc-card, .access-card').querySelector('h3').textContent;

                    console.log(`Download triggered: ${docName}`);
                    // You can add analytics tracking here
                    // Example: trackDownload(docName);
                });
            });

            // Preview modal (simplified)
            document.querySelectorAll('.btn-preview').forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();
                    const docName = this.closest('.doc-card').querySelector('h3').textContent;
                    alert(`Preview untuk "${docName}" akan ditampilkan di jendela baru. Fitur preview lengkap membutuhkan implementasi PDF viewer.`);
                });
            });
        });
    </script>
@endpush

@section('content')
    <div class="proposal-page">
        <!-- Hero Section -->
        <section class="proposal-hero" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <div class="badge" data-aos="fade-up" data-aos-delay="100">Download Hub</div>
                        <h1 data-aos="fade-up" data-aos-delay="200" style="color: whitesmoke">Proposal & Dokumen Desa Cakrawala</h1>
                        <p class="lead" data-aos="fade-up" data-aos-delay="300">
                            Akses semua dokumen resmi, proposal kerjasama, laporan, dan materi presentasi Desa Cakrawala.
                            Siap untuk diunduh dan digunakan dalam diskusi kemitraan Anda.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Quick Access Section -->
        <section class="quick-access" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center mb-4">
                        <h2 class="h3" data-aos="fade-up">Akses Cepat</h2>
                        <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Dokumen yang paling sering diunduh</p>
                    </div>
                </div>

                <div class="access-grid">
                    <div class="access-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="access-icon">
                            <i class="fas fa-file-contract"></i>
                        </div>
                        <h3>Proposal CSR Lengkap</h3>
                        <p>Dokumen utama untuk kerjasama CSR dan sponsor</p>
                        <a href="{{ asset('documents/proposal-csr-lengkap.pdf') }}" class="btn-download-sm" download data-doc="Proposal CSR Lengkap">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>

                    <div class="access-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="access-icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                        <h3>Laporan Dampak 2024</h3>
                        <p>Hasil dan pencapaian program terkini</p>
                        <a href="{{ asset('documents/laporan-dampak-2024.pdf') }}" class="btn-download-sm" download data-doc="Laporan Dampak 2024">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>

                    <div class="access-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="access-icon">
                            <i class="fas fa-briefcase"></i>
                        </div>
                        <h3>Company Profile</h3>
                        <p>Profil lengkap Desa Cakrawala dan program</p>
                        <a href="{{ asset('documents/company-profile.pdf') }}" class="btn-download-sm" download data-doc="Company Profile">
                            <i class="fas fa-download"></i> Download PDF
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Documents Section -->
        <section class="documents-section">
            <div class="container">
                <div class="section-title" data-aos="fade-up">
                    <h2>Koleksi Dokumen Lengkap</h2>
                    <p class="text-muted">Pilih kategori dokumen yang Anda butuhkan</p>
                </div>

                <!-- Category: Proposal Kerjasama -->
                <div data-aos="fade-up">
                    <h3 class="category-title">Proposal Kerjasama</h3>
                    <div class="doc-grid">
                        <!-- Doc 1 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-handshake"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Proposal Kerjasama CSR</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-pdf"></i> PDF, 2.5 MB</span>
                                        <span><i class="far fa-clock"></i> Updated: Jan 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Proposal komprehensif untuk program Corporate Social Responsibility dengan berbagai pilihan paket dan skema kerjasama.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag csr">CSR</span>
                                <span class="doc-tag sponsor">Sponsorship</span>
                                <span class="doc-tag">Partnership</span>
                            </div>
                            <a href="{{ asset('documents/proposal-csr.pdf') }}" class="btn-download" download data-doc="Proposal Kerjasama CSR">
                                <i class="fas fa-download"></i> Download Proposal
                            </a>
                            <a href="#" class="btn-preview">
                                <i class="far fa-eye"></i> Preview Dokumen
                            </a>
                        </div>

                        <!-- Doc 2 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-building"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Proposal Kemitraan Perusahaan</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-pdf"></i> PDF, 3.1 MB</span>
                                        <span><i class="far fa-clock"></i> Updated: Feb 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Skema kerjasama strategis untuk perusahaan yang ingin terlibat dalam program jangka panjang dengan manfaat branding dan impact measurement.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag csr">CSR</span>
                                <span class="doc-tag sponsor">Strategic</span>
                                <span class="doc-tag">Long-term</span>
                            </div>
                            <a href="{{ asset('documents/proposal-kemitraan.pdf') }}" class="btn-download" download data-doc="Proposal Kemitraan Perusahaan">
                                <i class="fas fa-download"></i> Download Proposal
                            </a>
                            <a href="#" class="btn-preview">
                                <i class="far fa-eye"></i> Preview Dokumen
                            </a>
                        </div>

                        <!-- Doc 3 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-university"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Proposal Kerjasama Pendidikan</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-pdf"></i> PDF, 2.2 MB</span>
                                        <span><i class="far fa-clock"></i> Updated: Dec 2023</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Program kerjasama dengan institusi pendidikan untuk kunjungan studi, magang, riset, dan pengembangan kurikulum.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag csr">Education</span>
                                <span class="doc-tag">Research</span>
                                <span class="doc-tag">Internship</span>
                            </div>
                            <a href="{{ asset('documents/proposal-pendidikan.pdf') }}" class="btn-download" download data-doc="Proposal Kerjasama Pendidikan">
                                <i class="fas fa-download"></i> Download Proposal
                            </a>
                            <a href="#" class="btn-preview">
                                <i class="far fa-eye"></i> Preview Dokumen
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category: Laporan & Dokumentasi -->
                <div data-aos="fade-up">
                    <h3 class="category-title">Laporan & Dokumentasi</h3>
                    <div class="doc-grid">
                        <!-- Doc 4 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Laporan Tahunan 2023</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-pdf"></i> PDF, 4.2 MB</span>
                                        <span><i class="far fa-clock"></i> Published: Mar 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Laporan kinerja komprehensif tahun 2023 mencakup pencapaian program, analisis dampak, dan rencana pengembangan ke depan.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag report">Annual Report</span>
                                <span class="doc-tag">Performance</span>
                                <span class="doc-tag">Impact</span>
                            </div>
                            <a href="{{ asset('documents/laporan-tahunan-2023.pdf') }}" class="btn-download" download data-doc="Laporan Tahunan 2023">
                                <i class="fas fa-download"></i> Download Laporan
                            </a>
                            <a href="#" class="btn-preview">
                                <i class="far fa-eye"></i> Preview Dokumen
                            </a>
                        </div>

                        <!-- Doc 5 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-camera"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Dokumentasi Visual Program</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-zip"></i> ZIP, 28 MB</span>
                                        <span><i class="far fa-clock"></i> Updated: Jan 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Kumpulan foto dan video high-quality dari berbagai program dan kegiatan Desa Cakrawala untuk keperluan presentasi dan publikasi.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag">Photos</span>
                                <span class="doc-tag">Videos</span>
                                <span class="doc-tag">Media Kit</span>
                            </div>
                            <a href="{{ asset('documents/dokumentasi-visual.zip') }}" class="btn-download" download data-doc="Dokumentasi Visual Program">
                                <i class="fas fa-download"></i> Download Media Kit
                            </a>
                        </div>

                        <!-- Doc 6 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-book-open"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Case Studies & Success Stories</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-pdf"></i> PDF, 1.8 MB</span>
                                        <span><i class="far fa-clock"></i> Updated: Feb 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Kumpulan studi kasus dan kisah sukses dari berbagai program yang telah dilaksanakan, termasuk testimoni mitra dan penerima manfaat.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag report">Case Study</span>
                                <span class="doc-tag">Testimonials</span>
                                <span class="doc-tag">Success Stories</span>
                            </div>
                            <a href="{{ asset('documents/case-studies.pdf') }}" class="btn-download" download data-doc="Case Studies & Success Stories">
                                <i class="fas fa-download"></i> Download Case Studies
                            </a>
                            <a href="#" class="btn-preview">
                                <i class="far fa-eye"></i> Preview Dokumen
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Category: Presentasi & Media -->
                <div data-aos="fade-up">
                    <h3 class="category-title">Presentasi & Media</h3>
                    <div class="doc-grid">
                        <!-- Doc 7 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="100">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-desktop"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Slide Deck Presentasi</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-powerpoint"></i> PPTX, 15 MB</span>
                                        <span><i class="far fa-clock"></i> Updated: Mar 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Template presentasi lengkap yang dapat disesuaikan untuk meeting, pitching, atau presentasi kepada calon mitra dan stakeholder.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag presentation">PowerPoint</span>
                                <span class="doc-tag">Template</span>
                                <span class="doc-tag">Editable</span>
                            </div>
                            <a href="{{ asset('documents/slide-presentasi.pptx') }}" class="btn-download" download data-doc="Slide Deck Presentasi">
                                <i class="fas fa-download"></i> Download PPT
                            </a>
                        </div>

                        <!-- Doc 8 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="200">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-newspaper"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Press Kit & Media Release</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-word"></i> DOCX, 5.2 MB</span>
                                        <span><i class="far fa-clock"></i> Updated: Jan 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Kumpulan template press release, media kit, dan materi publikasi siap pakai untuk keperluan komunikasi dan publikasi.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag">Media</span>
                                <span class="doc-tag">Press Release</span>
                                <span class="doc-tag">Communication</span>
                            </div>
                            <a href="{{ asset('documents/press-kit.zip') }}" class="btn-download" download data-doc="Press Kit & Media Release">
                                <i class="fas fa-download"></i> Download Media Kit
                            </a>
                        </div>

                        <!-- Doc 9 -->
                        <div class="doc-card" data-aos="fade-up" data-aos-delay="300">
                            <div class="doc-header">
                                <div class="doc-icon">
                                    <i class="fas fa-infinity"></i>
                                </div>
                                <div class="doc-info">
                                    <h3>Infografis & Visual Data</h3>
                                    <div class="doc-meta">
                                        <span><i class="far fa-file-image"></i> ZIP, 22 MB</span>
                                        <span><i class="far fa-clock"></i> Updated: Feb 2024</span>
                                    </div>
                                </div>
                            </div>
                            <div class="doc-description">
                                Koleksi infografis, chart, dan visual data yang siap digunakan untuk presentasi, laporan, dan materi promosi.
                            </div>
                            <div class="doc-tags">
                                <span class="doc-tag presentation">Infographic</span>
                                <span class="doc-tag">Data Visualization</span>
                                <span class="doc-tag">Charts</span>
                            </div>
                            <a href="{{ asset('documents/infografis.zip') }}" class="btn-download" download data-doc="Infografis & Visual Data">
                                <i class="fas fa-download"></i> Download Assets
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Stats Section -->
        <section class="stats-section" data-aos="fade-up">
            <div class="container">
                <div class="stats-grid">
                    <div class="stat-card" data-aos="fade-up" data-aos-delay="100">
                        <div class="stat-number">2,500+</div>
                        <div class="stat-label">Total Downloads</div>
                    </div>

                    <div class="stat-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="stat-number">45+</div>
                        <div class="stat-label">Mitra Kerjasama</div>
                    </div>

                    <div class="stat-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="stat-number">98%</div>
                        <div class="stat-label">Kepuasan Mitra</div>
                    </div>

                    <div class="stat-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Jenis Dokumen</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA Section -->
        <section class="cta-section" data-aos="fade-up">
            <div class="container">
                <h2 data-aos="fade-up">Butuh Dokumen Khusus?</h2>
                <p data-aos="fade-up" data-aos-delay="100">
                    Jika Anda membutuhkan dokumen khusus, versi yang dapat disesuaikan, atau ingin mendiskusikan kerjasama lebih lanjut,
                    tim kami siap membantu Anda.
                </p>
                <a href="/dukungan#form" class="btn-cta" data-aos="fade-up" data-aos-delay="200">
                    <i class="fas fa-comments"></i> Hubungi Tim Kemitraan
                </a>
            </div>
        </section>
    </div>
@endsection
