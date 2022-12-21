<?php
session_start();
include "connect.php";
if(!isset($_SESSION['username'])){
    header ("location:login.php");
}
if(isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BikiniBottom</title>
    <link rel="icon" href="./assets/images/bb.jpg">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="./assets/css/style2.css">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar">

    <!--Navbar-->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">BIKINIBOTTOM</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#facility">Facility</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="list.php#siswa">Students List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
            </div>
        </div>
    </nav>

    <!--Home-->
    <section id="home" class="min-vh-100 d-flex align-items-center text-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-1">A quality school generation of knowledge</h1>
                    <h5 class="text-white mt-3 mb-4" data-aos="fade-right">Duit Adalah Segalanya</h5>
                    <div data-aos="fade-up" data-aos-delay="50">
                        <a href="#about" class="btn btn-brand me-2">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--About-->
    <section id="about" class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">About us</h1>
                        <div class="line"></div>
                        <p>The school is a pillar of the country.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6" data-aos="fade-down" data-aos-delay="50">
                    <img src="./assets/images/high.jpg" alt="">
                </div>
                <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5">
                    <h1>Why Us?</h1>
                    <div class="d-flex pt-4 mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-user-star-fill"></i>
                        </div>
                        <div>
                            <h5>Akreditasi Unggul</h5>
                            <p>Terakreditasi dalam kelayakan sistem pengajaran</p>
                        </div>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="iconbox me-4">
                            <i class="ri-shield-check-fill"></i>
                        </div>
                        <div>
                            <h5>Terjamin</h5>
                            <p>Menciptakan lulusan terjamin untuk perguruan tinggi.</p>
                        </div>
                    </div>
                    <div class="d-flex">
                        <div class="iconbox me-4">
                            <i class="ri-thumb-up-fill"></i>
                        </div>
                        <div>
                            <h5>Fasilitas yang Memadai</h5>
                            <p>Kami memiliki fasilitas yang mengembangkan diri para siswa</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Services-->
    <section id="facility" class="section-padding border-top">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                    <div class="section-title">
                        <h1 class="display-4 fw-semibold">Our Facility</h1>
                        <div class="line"></div>
                        <p>Fasilitas unggulan kami</p>
                    </div>
                </div>
            </div>
            <div class="row g-4 text-center">
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-windy-line"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Kolam Renang</h5>
                        <p>Melatih siswa untuk mengetahui teknik dalam berenang.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-basketball-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Lapangan Basket</h5>
                        <p>Lapangan yang ideal untuk olahraga dalam bidang basket.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-wifi-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Wifi</h5>
                        <p>Koneksi yang cepat untuk mendukung pengaksesan kebutuhan siswa.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-book-read-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Perpustakaan</h5>
                        <p>Variasi buku untuk meningkatkan kualitas belajar.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="550">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-medicine-bottle-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Unit Kesehatan Sekolah</h5>
                        <p>Pelayanan kesehatan, Pembinaan Kesehatan, Pendidikan Kesehatan.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6" data-aos="fade-down" data-aos-delay="650">
                    <div class="service theme-shadow p-lg-5 p-4">
                        <div class="iconbox">
                            <i class="ri-computer-fill"></i>
                        </div>
                        <h5 class="mt-4 mb-3">Ruang Komputer</h5>
                        <p>Tersedia perangkat hardware yang memadai untuk kebutuhan praktek siswa.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer>
        <div class="footer-bottom">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <p class="mb-0">bikinibottom @ 2022 All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!--Footer-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="./assets/js/main.js"></script>
</body>

</html>