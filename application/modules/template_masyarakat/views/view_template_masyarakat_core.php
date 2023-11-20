<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WebPam</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url(); ?>assets/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

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
        <!-- <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container position-relative p-0" id="home">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">WebPam</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">

                        <?php if ($this->uri->segment('1') == 'ma_pengaduan') { ?>
                            <a href="<?php echo base_url('ma_pengaduan'); ?>" class="nav-item nav-link active">Beranda</a>
                        <?php } else { ?>
                            <a href="<?php echo base_url('ma_pengaduan'); ?>" class="nav-item nav-link">Beranda</a>
                        <?php } ?>

                        <?php if ($this->uri->segment('1') == 'ma_riwayat') { ?>
                            <a href="<?php echo base_url('ma_riwayat'); ?>" class="nav-item nav-link active">Riwayat</a>
                        <?php } else { ?>
                            <a href="<?php echo base_url('ma_riwayat'); ?>" class="nav-item nav-link">Riwayat</a>
                        <?php } ?>
                        <?php if ($this->uri->segment('1') == 'ma_profile') { ?>
                            <a href="<?php echo base_url('ma_profile'); ?>" class="nav-item nav-link active">Profile</a>
                        <?php } else { ?>
                            <a href="<?php echo base_url('ma_profile'); ?>" class="nav-item nav-link">Profile</a>
                        <?php } ?>



                    </div>
                    <a href="<?php echo base_url('login/logoutApp'); ?>" class="btn btn-primary-gradient fw-medium py-2 px-4">
                        Logout</a>
                </div>
            </nav>

            <div class="container  hero-header">
                <div class="container ">
                    <div class="row g-5">
                        <div class="col-lg-14 text-center  text-lg-center">
                            <h1 class="text-white pb-1 animated slideInDown fw-semibold">Hallo!! <br> Selamat Datang <br class="fw-reguler ">"<?php echo $nama->username; ?>"</h1>
                            </h1>
                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!-- Navbar & Hero End -->


        <!-- Features Start -->
        <div class="container" id="feature">
            <div class="container">
                <?php
                $this->load->view($namamodule . '/' . $namafileview);
                ?>
            </div>
        </div>
        <!-- Features End -->






        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5 d-flex justify-content-center">
                <div class="row g-5">
                    <div class="col-md-12 col-lg-12">
                        <h4 class="text-white mb-4">niamxiomi86@gmail.com</h4>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Gang Sagi, Ds.Sobontoro Dsn.jamong</p>
                        <p><i class="fa fa-phone-alt me-3"></i>0895363452020</p>
                    
                      
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

            <!-- Bootstrap core JavaScript-->

            <script src="<?php echo base_url(); ?>assets/js/demo/chart-area-demo.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/demo/chart-pie-demo.js"></script>
            <script src="<?php echo base_url(); ?>assets/js/demo/datatables-demo.js"></script>
            <script src="<?php echo base_url(); ?>assets_admin/vendor/jquery/jquery.min.js"></script>
            <script src="<?php echo base_url(); ?>assets_admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="<?php echo base_url(); ?>assets_admin/vendor/jquery-easing/jquery.easing.min.js"></script>

            <!-- Custom scripts for all pages-->
            <script src="<?php echo base_url(); ?>assets_admin/js/sb-admin-2.min.js"></script>

            <!-- Page level plugins -->
            <script src="<?php echo base_url(); ?>assets_admin/vendor/chart.js/Chart.min.js"></script>
            <script src="<?php echo base_url(); ?>assets_admin/vendor/datatables/jquery.dataTables.min.js"></script>
            <script src="<?php echo base_url(); ?>assets_admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

            <!-- Page level custom scripts -->
            <script src="<?php echo base_url(); ?>assets_admin/js/demo/chart-area-demo.js"></script>
            <script src="<?php echo base_url(); ?>assets_admin/js/demo/chart-pie-demo.js"></script>
            <script src="<?php echo base_url(); ?>assets_admin/js/demo/datatables-demo.js"></script>



</body>

</html>