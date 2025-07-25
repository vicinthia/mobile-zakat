<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Zakat - Registrasi</title>

    <!-- Custom fonts for this template-->
    <link href="<?php base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-7">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
                            <div class="col-lg">
                                <div class="p-5">

                                    <div class="text-center">
                                        <h1 style="font-weight: bold;" class="h4 text-gray-900 mb-4">Buat Akun Sistem Zakat</h1>
                                        <h1 style="font-weight: bold;" class="h4 text-gray-900 mb-4">Masjid Al-Ikhlas Makarya Binangun</h1>
                                    </div>
                                    <!-- <?= $this->session->flashdata('info'); ?> -->
                                    <form class="user" method="post" action="<?= base_url('registration/daftarakun'); ?>">
                            <div class="form-group">
                                <input type="text" class="form-control form-control-user" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
                                <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <!-- <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password">
                                    <?= form_error('password1', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ketik Ulang Password">
                                </div>
                            </div> -->
                            <button type="submit" class="btn btn-primary btn-user btn-block">
                                Register Akun 
                            </button>
                        </form>
                        <hr>
                        <div class="text-center">
                            <a class="small" href="<?= base_url("panel"); ?>">Sudah punya akun? Login!</a>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php base_url(); ?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>