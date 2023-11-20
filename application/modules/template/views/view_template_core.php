<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WebPam</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>assets/img/lgo.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">
</head>

<body data-bs-spy="scroll" data-bs-target=".navbar" data-bs-offset="20">
    <div class="container">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">

                    <img src="<?php echo base_url(); ?>assets/img/lgo.png" alt="Logo">


                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Beranda</a>
                        <a href="#feature" class="nav-item nav-link">Cara Lapor</a>
                        <a href="#history" class="nav-item nav-link">Berita</a>
                        <a href="#kontak" class="nav-item nav-link">Kontak</a>

                    </div>
                    <a href="<?php echo base_url('login'); ?>" class="btn btn-primary-gradient fw-medium py-2 px-4">
                        Masuk</a>
                </div>
            </nav>

            <div class="container   hero-header" id="home">
                <div class="container ">
                    <div class="row g-5">
                        <div class="col-lg-14 text-center  text-lg-center">
                            <h1 class="text-white pb-1 animated slideInDown fw-semibold">Selamat Datang Di Website<br class="fw-reguler"> Pengaduan Aspirasi Masyarakat <br class="pt-2">Desa Sobontoro</h1>
                          
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- Navbar & Hero End -->


        <!-- Features Start -->
        <div class="container py-5">
            <div id="feature">
                <div class="container py-5 px-lg-5 shadow-lg rounded">
                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                        <h5 class="text-primary-gradient fw-medium">Pengaduan Aspirasi Masyarakat</h5>
                        <h1 class="mb-5">CARA LAPOR</h1>
                    </div>
                    <div class="row g-4">
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-secondary-gradient" role="progressbar" style="width: 16.66%;" aria-valuenow="16.66" aria-valuemin="0" aria-valuemax="100">1</div>
                                </div>
                                <h5 class="mb-3">Langkah 1: Login</h5>
                                <p class="m-0">Untuk mengakses fitur pengaduan, silakan login ke akun Anda sekarang.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-secondary-gradient" role="progressbar" style="width: 33.33%;" aria-valuenow="33.33" aria-valuemin="0" aria-valuemax="100">2</div>
                                </div>
                                <h5 class="mb-3">Langkah 2: Tekan Lapor!</h5>
                                <p class="m-0">Siapkan laporan Anda.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-secondary-gradient" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">3</div>
                                </div>
                                <h5 class="mb-3">Langkah 3: Isi Form</h5>
                                <p class="m-0">Isi formulir pengaduan Anda sesuai dengan yang ingin Anda laporkan.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-secondary-gradient" role="progressbar" style="width: 66.66%;" aria-valuenow="66.66" aria-valuemin="0" aria-valuemax="100">4</div>
                                </div>
                                <h5 class="mb-3">Langkah 4: Tekan Tombol Kirim</h5>
                                <p class="m-0">Kirimkan laporan Anda dengan menekan tombol Kirim.</p>
                            </div>
                        </div>
                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="progress mb-4">
                                    <div class="progress-bar bg-secondary-gradient" role="progressbar" style="width: 83.33%;" aria-valuenow="83.33" aria-valuemin="0" aria-valuemax="100">5</div>
                                </div>
                                <h5 class="mb-3">Langkah 5: Lihat Hasil Laporan/Tanggapan di Riwayat Laporan</h5>
                                <p class="m-0">Klik navigasi bar "Riwayat" untuk melihat riwayat pengaduan Anda.</p>
                            </div>
                        </div>

                        <div class="col-md-4 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="feature-item bg-light rounded p-4">
                                <div class="progress mb-4 ">
                                    <div class="progress-bar bg-secondary-gradient" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">6</div>
                                </div>
                                <h5 class="mb-3">Langkah 6: Jika laporan tak kunjung di tanggapi, hubungi contact person</h5>
                                <p class="m-0">Anda bisa langsung menghubungi kontak di bawah ini.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="hr">
        <!-- Features End -->
        <div class="container py-5 px-lg-5 shadow-lg rounded" id="history">
            <div class="row flex d-flex">
                <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                    <h5 class="text-primary-gradient fw-medium">Berita Terbaru</h5>
                    <h1 class="mb-5">DESA SOBONTORO</h1>
                </div>



                <?php foreach ($riwayat as $res) {
                        ?>
                <div class="col-md-4 mt-3">
                    <div class="card wow fadeInUp bg-light p-3 shadow-sm feature-item " data-wow-delay="0.5s" >
                    
                            <img src="<?php echo base_url() ?>assets/img/<?php echo $res->foto ?>" class="card-img-top" alt="Foto">

                            <div class="card-body">
                                <p class="card-text"><?= $res->isi_laporan; ?></p>
                             
                                <a href="<?php echo base_url('login'); ?>" class="btn bg-secondary-gradient text-light">Laporkan Kejadian</a>
                            </div>
                       
                    </div>
                </div>
                <?php } ?>


            </div>

        </div>









        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn " id="kontak" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5 d-flex justify-content-center">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12">
                        <h4 class="text-white mb-4">DESA SOBONTORO</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Sobontoro Tambakboyo</p>
                        <p><i class="fa fa-phone-alt me-3"></i>e-Mail : sobontoro.tambakboyo@gmail.com</p>


                    </div>

                </div>
            </div>
        </div>



        <!-- Back to Top -->


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/wow/wow.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/easing/easing.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/waypoints/waypoints.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/counterup/counterup.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>