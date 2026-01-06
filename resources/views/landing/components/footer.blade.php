<style>
    /* FOOTER STYLE - DESA CAKRAWALA */
    .footer_area {
        background: linear-gradient(135deg, #1a365d 0%, #2d3748 100%);
        color: #cbd5e0;
        font-size: 15px;
        position: relative;
        overflow: hidden;
    }

    .footer_area::before {
        content: '';
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(255, 255, 255, 0.02);
        border-radius: 50%;
        top: -150px;
        right: -150px;
    }

    .footer_title {
        font-weight: 700;
        margin-bottom: 25px;
        font-size: 18px;
        color: white;
        position: relative;
        padding-bottom: 10px;
    }

    .footer_title::after {
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        width: 40px;
        height: 3px;
        background: linear-gradient(90deg, #3498db, #2ecc71);
        border-radius: 2px;
    }

    .footer_widget p {
        margin-top: 20px;
        margin-bottom: 25px;
        line-height: 1.7;
        color: #a0aec0;
    }

    .footer_logo {
        display: inline-block;
        margin-bottom: 20px;
    }

    .footer_logo img {
        height: 150px;
        width: auto;
        filter: brightness(0) invert(1);
    }

    .footer_link ul {
        list-style: none;
        padding-left: 0;
        margin-bottom: 0;
    }

    .footer_link ul li {
        margin-bottom: 12px;
    }

    .footer_link ul li a {
        display: block;
        color: #cbd5e0;
        padding: 5px 0;
        text-decoration: none;
        transition: all 0.3s ease;
        position: relative;
        padding-left: 15px;
    }

    .footer_link ul li a::before {
        content: '›';
        position: absolute;
        left: 0;
        top: 50%;
        transform: translateY(-50%);
        color: #3498db;
        font-size: 1.2rem;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .footer_link ul li a:hover {
        color: white;
        transform: translateX(10px);
    }

    .footer_link ul li a:hover::before {
        opacity: 1;
        left: 5px;
    }

    .footer_social {
        list-style: none;
        padding-left: 0;
        margin-top: 25px;
    }

    .footer_social li {
        display: inline-block;
        margin-right: 12px;
    }

    .footer_social li:last-child {
        margin-right: 0;
    }

    .footer_social li a {
        width: 42px;
        height: 42px;
        background: rgba(255, 255, 255, 0.08);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 18px;
        color: #cbd5e0;
        transition: all 0.3s ease;
        text-decoration: none;
    }

    .footer_social li a:hover {
        background: #3498db;
        color: white;
        transform: translateY(-5px);
    }

    /* Newsletter */
    .footer_newsletter {
        position: relative;
    }

    .subscribe_form {
        position: relative;
        margin-top: 15px;
    }

    .subscribe_form input {
        width: 100%;
        padding: 14px 60px 14px 20px;
        border-radius: 50px;
        border: 1px solid rgba(255, 255, 255, 0.15);
        background: rgba(255, 255, 255, 0.05);
        color: white;
        font-size: 15px;
        transition: all 0.3s ease;
    }

    .subscribe_form input:focus {
        outline: none;
        border-color: #3498db;
        box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);
        background: rgba(255, 255, 255, 0.08);
    }

    .subscribe_form input::placeholder {
        color: #a0aec0;
    }

    .subscribe_form button {
        border: none;
        background: linear-gradient(135deg, #3498db, #2980b9);
        width: 48px;
        height: 48px;
        border-radius: 50%;
        position: absolute;
        top: 50%;
        right: 5px;
        transform: translateY(-50%);
        color: #fff;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .subscribe_form button:hover {
        background: linear-gradient(135deg, #2980b9, #3498db);
        transform: translateY(-50%) rotate(90deg);
    }

    /* Program Links */
    .program_links {
        margin-top: 30px;
        padding-top: 25px;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .program_links h6 {
        color: white;
        font-weight: 600;
        margin-bottom: 15px;
        font-size: 16px;
    }

    .program_grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 8px;
    }

    .program_grid a {
        color: #a0aec0;
        font-size: 14px;
        text-decoration: none;
        transition: all 0.3s ease;
        padding: 3px 0;
    }

    .program_grid a:hover {
        color: white;
        transform: translateX(5px);
    }

    /* Bottom */
    .footer_copyright {
        background: rgba(0, 0, 0, 0.2);
        padding: 25px 0;
        border-top: 1px solid rgba(255, 255, 255, 0.05);
    }

    .footer_copyright p {
        margin: 0;
        color: #a0aec0;
        font-size: 14px;
        line-height: 1.6;
    }

    .footer_copyright a {
        color: #3498db;
        text-decoration: none;
        transition: all 0.3s ease;
    }

    .footer_copyright a:hover {
        color: #2ecc71;
        text-decoration: underline;
    }

    .copyright_links {
        text-align: right;
    }

    .copyright_links a {
        color: #a0aec0;
        text-decoration: none;
        margin-left: 25px;
        font-size: 14px;
        transition: all 0.3s ease;
    }

    .copyright_links a:hover {
        color: white;
    }

    .copyright_links a:first-child {
        margin-left: 0;
    }

    /* Preloader */
    .preloader {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: #1a365d;
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        transition: opacity 0.5s ease;
    }

    .preloader.hide {
        opacity: 0;
        pointer-events: none;
    }

    .loader {
        width: 80px;
        height: 80px;
    }

    .ytp-spinner {
        width: 100%;
        height: 100%;
        position: relative;
    }

    .ytp-spinner-container {
        width: 100%;
        height: 100%;
        animation: ytp-spinner-linspin 1568.23529647ms linear infinite;
    }

    .ytp-spinner-rotator {
        width: 100%;
        height: 100%;
        position: absolute;
        animation: ytp-spinner-easespin 5332ms cubic-bezier(0.4, 0.0, 0.2, 1) infinite both;
    }

    .ytp-spinner-left,
    .ytp-spinner-right {
        width: 50%;
        height: 100%;
        overflow: hidden;
        position: absolute;
    }

    .ytp-spinner-left {
        left: 0;
    }

    .ytp-spinner-right {
        right: 0;
    }

    .ytp-spinner-circle {
        width: 200%;
        height: 100%;
        border: 4px solid #3498db;
        border-radius: 50%;
        border-bottom-color: transparent;
        border-right-color: transparent;
        position: absolute;
        top: 0;
        left: 0;
        animation: ytp-spinner-left-spin 1333ms cubic-bezier(0.4, 0.0, 0.2, 1) infinite both;
    }

    .ytp-spinner-right .ytp-spinner-circle {
        left: -100%;
        border-left-color: transparent;
        animation: ytp-spinner-right-spin 1333ms cubic-bezier(0.4, 0.0, 0.2, 1) infinite both;
    }

    @keyframes ytp-spinner-linspin {
        to {
            transform: rotate(360deg);
        }
    }

    @keyframes ytp-spinner-easespin {
        12.5% {
            transform: rotate(135deg);
        }

        25% {
            transform: rotate(270deg);
        }

        37.5% {
            transform: rotate(405deg);
        }

        50% {
            transform: rotate(540deg);
        }

        62.5% {
            transform: rotate(675deg);
        }

        75% {
            transform: rotate(810deg);
        }

        87.5% {
            transform: rotate(945deg);
        }

        100% {
            transform: rotate(1080deg);
        }
    }

    @keyframes ytp-spinner-left-spin {

        0%,
        100% {
            transform: rotate(130deg);
        }

        50% {
            transform: rotate(-5deg);
        }
    }

    @keyframes ytp-spinner-right-spin {

        0%,
        100% {
            transform: rotate(-130deg);
        }

        50% {
            transform: rotate(5deg);
        }
    }

    /* Back to Top */
    .back-to-top {
        position: fixed;
        bottom: 30px;
        right: 30px;
        width: 50px;
        height: 50px;
        background: linear-gradient(135deg, #3498db, #2980b9);
        color: white;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-decoration: none;
        font-size: 20px;
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
        z-index: 999;
        box-shadow: 0 5px 20px rgba(52, 152, 219, 0.3);
    }

    .back-to-top.show {
        opacity: 1;
        visibility: visible;
    }

    .back-to-top:hover {
        background: linear-gradient(135deg, #2980b9, #3498db);
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(52, 152, 219, 0.4);
    }

    /* Responsive */
    @media (max-width: 992px) {
        .footer_widget {
            padding: 60px 0 40px;
        }

        .footer_about,
        .footer_link,
        .footer_newsletter {
            margin-top: 40px;
        }

        .footer_about:first-child {
            margin-top: 0;
        }

        .copyright_links {
            text-align: left;
            margin-top: 15px;
        }

        .copyright_links a {
            margin-left: 0;
            margin-right: 25px;
        }
    }

    @media (max-width: 768px) {
        .program_grid {
            grid-template-columns: 1fr;
        }

        .footer_title {
            font-size: 17px;
        }

        .back-to-top {
            bottom: 20px;
            right: 20px;
            width: 45px;
            height: 45px;
        }
    }

    @media (max-width: 576px) {
        .footer_widget {
            padding: 50px 0 30px;
        }

        .footer_logo img {
            height: 40px;
        }

        .footer_social li a {
            width: 38px;
            height: 38px;
            font-size: 16px;
        }
    }
</style>

<footer class="footer_area">
    <div class="footer_widget pt-80 pb-60">
        <div class="container">
            <div class="row">
                <!-- Logo + Deskripsi + Social -->
                <div class="col-lg-4 col-md-6">
                    <div class="footer_about">
                        <a href="/" class="footer_logo">
                            <img src="{{ asset('images/logo_desa_cakrawala.png') }}" alt="Desa Cakrawala">
                        </a>
                        <p>
                            Desa Cakrawala adalah program pembangunan desa terpadu yang memanfaatkan teknologi,
                            pelatihan, dan kolaborasi untuk meningkatkan kualitas hidup masyarakat.
                        </p>

                        <ul class="footer_social">
                            <li>
                                <a href="https://facebook.com/desacakrawala" target="_blank" title="Facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/desacakrawala" target="_blank" title="Instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://youtube.com/@desacakrawala" target="_blank" title="YouTube">
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://linkedin.com/company/desacakrawala" target="_blank" title="LinkedIn">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/6281234567890" target="_blank" title="WhatsApp">
                                    <i class="fab fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="footer_link">
                        <h5 class="footer_title">Menu Utama</h5>
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/#about">Tentang Desa</a></li>
                            <li><a href="/#pengembangan">Pengembangan</a></li>
                            {{-- <li><a href="/#program">Program</a></li> --}}
                            <li><a href="/dukungan">Dukungan & Kerjasama</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Program Links -->
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer_link">
                        <h5 class="footer_title">Program Kami</h5>
                        <div class="program_links">
                            <div class="program_grid">
                                <a href="/program/smart-eco-farm">Smart Eco Farm</a>
                                <a href="/program/umkm-academy">UMKM Academy</a>
                                <a href="/program/desa-melek-teknologi">Desa Melek Teknologi</a>
                                <a href="/program/rumah-kreatif-pemuda">Rumah Kreatif Pemuda</a>
                                <a href="/program/gerakan-desa-sehat">Gerakan Desa Sehat</a>
                                <a href="/program/eco-living">Eco-Living Desa</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Newsletter & Kontak -->
                <div class="col-lg-3 col-md-6">
                    <div class="footer_newsletter">
                        <h5 class="footer_title">Hubungi Kami</h5>
                        <div class="program_grid">
                            <a href="{{ route('landing.kontak') }}">Hubungi Kami</a>
                            <a href="https://wa.me/+6282143316913" target="_blank">Jadwalkan Kunjungan</a>
                            <a href="{{ route('landing.proposal') }}">Download Proposal</a>
                            <a href="{{ route('landing.wisata') }}">Paket Wisata</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bottom Copyright -->
    <div class="footer_copyright">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <p class="text-center">
                        &copy; 2024 <a href="/">Desa Cakrawala</a>.
                        Bagian dari Program <a href="https://seribusenyum.org" target="_blank">Yayasan Seribu Senyum</a>.
                        Semua hak dilindungi.
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="preloader">
    <div class="loader">
        <div class="ytp-spinner">
            <div class="ytp-spinner-container">
                <div class="ytp-spinner-rotator">
                    <div class="ytp-spinner-left">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                    <div class="ytp-spinner-right">
                        <div class="ytp-spinner-circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>

<script>
    // Preloader
    document.addEventListener('DOMContentLoaded', function() {
        // Hide preloader when page is loaded
        window.addEventListener('load', function() {
            const preloader = document.querySelector('.preloader');
            if (preloader) {
                setTimeout(() => {
                    preloader.classList.add('hide');
                }, 500);
            }
        });

        // Back to Top Button
        const backToTopButton = document.querySelector('.back-to-top');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopButton.classList.add('show');
            } else {
                backToTopButton.classList.remove('show');
            }
        });

        backToTopButton.addEventListener('click', function(e) {
            e.preventDefault();
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Newsletter Subscription
        const subscribeBtn = document.getElementById('subscribe-btn');
        const newsletterEmail = document.getElementById('newsletter-email');

        if (subscribeBtn && newsletterEmail) {
            subscribeBtn.addEventListener('click', function() {
                const email = newsletterEmail.value.trim();

                if (!email) {
                    alert('Silakan masukkan email Anda.');
                    newsletterEmail.focus();
                    return;
                }

                if (!validateEmail(email)) {
                    alert('Silakan masukkan alamat email yang valid.');
                    newsletterEmail.focus();
                    return;
                }

                // Show loading state
                const originalHTML = this.innerHTML;
                this.innerHTML = '<i class="fas fa-spinner fa-spin"></i>';
                this.disabled = true;

                // Simulate API call
                setTimeout(() => {
                    alert('Terima kasih! Anda telah berlangganan newsletter Desa Cakrawala.');
                    newsletterEmail.value = '';

                    // Reset button
                    this.innerHTML = originalHTML;
                    this.disabled = false;
                }, 1000);
            });

            // Allow Enter key to submit
            newsletterEmail.addEventListener('keypress', function(e) {
                if (e.key === 'Enter') {
                    subscribeBtn.click();
                }
            });
        }

        // Email validation function
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const href = this.getAttribute('href');

                if (href === '#') {
                    e.preventDefault();
                    return;
                }

                if (href.startsWith('#') && href.length > 1) {
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
    });
</script>
