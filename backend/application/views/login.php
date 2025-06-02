<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard Zakat - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?php base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?php base_url(); ?>assets/https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php base_url(); ?>assets/css/sb-admin-2.css" rel="stylesheet">

    <style>
		.totalU {
			font-weight: bold;
            font-size: 25px;
            color: white;
		}
	</style>

</head>

<body class="bg-gradient-primary">
         

    <div class="container">
            <br>
            <br>
            <p align= "center" class="totalU">
                ( Last Update, <?php $date = new DateTime("now", new DateTimeZone('Asia/Jakarta') );
                echo $date->format('Y-m-d H:i:s');?> )
            </p>
            <p align= "center" class="totalU">
				Total Penerimaan Uang Zakat : Rp.<?php echo number_format($sum_totalAllAprMei->uang) ?>
			</p>
            <p align= "center" class="totalU">
				Total Penerimaan Beras Zakat : <?= ($sum_totalAllAprMeiBeras->beras) ?> Kg
			</p>
			<p align= "center" class="totalU">
				Total Penerimaan Zakat Mal : Rp.<?php echo number_format($sum_totalAllAprMeiMal->mal) ?>
			</p>
			<p align= "center" class="totalU">
				Total Penerimaan Fidyah : Rp.<?php echo number_format($sum_totalAllAprMeiFidyah->fidyah) ?>
			</p>
			<p align= "center" class="totalU">
				Total Penerimaan Shadaqah/Infaq : Rp.<?php echo number_format($sum_totalAllAprMeiInfaq->infaq) ?>
			</p>
            

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
                                        <h1 style="font-weight: bold;" class="h4 text-gray-900 mb-4">Login Sistem Zakat</h1>
                                        <h1 style="font-weight: bold;" class="h4 text-gray-900 mb-4">Masjid Al-Ikhlas Makarya Binangun</h1>
                                    </div>
                                    <?= $this->session->flashdata('message'); ?>
                                    <form method="post" action="<?php base_url(); ?>Loginweb" class="user">
                                        <div class="form-group">
                                            <input type="text" id="username" name="username" class="form-control form-control-user" placeholder="Masukkan username..." value="<?= set_value('username'); ?>">
                                            <?= form_error('username', '<snall class="text-danger pl-3">', '</small>'); ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                            <?= form_error('password', '<snall class="text-danger pl-3">', '</small>'); ?>
                                        </div>

                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <br>
                                        <div class="text-center">
                                            <a class="small" href="<?= base_url("registration"); ?>">Buat Akun!</a>
                                        </div>
                                    </form>
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