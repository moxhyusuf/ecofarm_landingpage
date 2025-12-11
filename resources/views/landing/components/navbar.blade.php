<style>
    .navbar-nav .dropdown-menu {
        background-color: #fff;
        border-radius: 4px;
        padding: 10px 0;
        border: none;
        min-width: 180px;
    }

    .navbar-nav .dropdown-menu .dropdown-item {
        color: #333;
        padding: 8px 20px;
        font-size: 15px;
    }

    .navbar-nav .dropdown-menu .dropdown-item:hover {
        background-color: #f5f5f5;
        color: #000;
    }


    * {
        /* border: black 1px solid; */
    }
</style>

<div class="header_navbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav class="navbar navbar-expand-lg m-0 p-0">
                    <a class="navbar-brand" href="index.html">
                        <img src="{{ asset('images/logo_desa_cakrawala.png') }}" height="110" alt="Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                        <span class="toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                        <ul id="nav" class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="page-scroll" href="{{ route('beranda') }}">Beranda</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class=" dropdown-toggle" href="#" id="navbarDropdownProgram" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Program
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdownProgram">
                                    <li><a class="dropdown-item page-scroll" href="#team">Smart Eco Farm</a></li>
                                    <li><a class="dropdown-item page-scroll" href="#faq">UMKM Academy</a></li>
                                    <li><a class="dropdown-item page-scroll" href="#contact">Desa Melek Teknologi</a></li>
                                    <li><a class="dropdown-item page-scroll" href="#contact">Rumah Kreatif Pemuda</a></li>
                                    <li><a class="dropdown-item page-scroll" href="#contact">Gerakan Desa Sehat</a></li>
                                    <li><a class="dropdown-item page-scroll" href="#contact">Eco Living</a></li>
                                </ul>
                            </li>

                            <li class="nav-item dropdown">
                                <a class=" dropdown-toggle" href="#" id="navbarInfo" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Informasi
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarInfo">
                                    <li><a class="dropdown-item page-scroll" href="#team">Paket Wisata</a></li>
                                    <li><a class="dropdown-item page-scroll" href="#team">Dukungan & Kerjasama</a></li>
                                    <li><a class="dropdown-item page-scroll" href="#team">Dashboard IoT</a></li>
                                    <li><a class="dropdown-item page-scroll" href="#team">Proposal</a></li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#about">Dukungan & Kerjasama</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#about">Kontak</a>
                            </li>
                            <li class="nav-item">
                                <a class="page-scroll" href="#about">Login</a>
                            </li>
                        </ul>
                    </div> <!-- navbar collapse -->
                </nav> <!-- navbar -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</div> <!-- header navbar -->
