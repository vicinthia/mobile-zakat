<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?= $judul ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon
    ============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(''); ?>/assets/img/baz.png">
	<!-- Google Fonts
    ============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
	<!-- Bootstrap CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/bootstrap.min.css">
	<!-- Bootstrap CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/font-awesome.min.css">
	<!-- adminpro icon CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/adminpro-custon-icon.css">
	<!-- meanmenu icon CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/meanmenu.min.css">
	<!-- mCustomScrollbar CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/jquery.mCustomScrollbar.min.css">
	<!-- animate CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/animate.css">
	<!-- normalize CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/data-table/bootstrap-table.css">
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/data-table/bootstrap-editable.css">
	<!-- normalize CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/normalize.css">
	<!-- charts CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/c3.min.css">
	<!-- style CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/style.css">
	<!-- responsive CSS
    ============================================ -->
	<link rel="stylesheet" href="<?= base_url(''); ?>/assets/css/responsive.css">


	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"> -->
	<!-- modernizr JS
    ============================================ -->
	<script src="<?= base_url(''); ?>/assets/js/vendor/modernizr-2.8.3.min.js"></script>

	<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script> -->



</head>

<body class="materialdesign">
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<!-- Header top area start-->
	<div class="wrapper-pro">
		<div class="left-sidebar-pro">
			<nav id="sidebar">
				<div class="sidebar-header">
					<a href="#"><img src="<?= base_url(''); ?>/assets/lgmasjidrs.png" width="400">
					</a>
					<h3>Admin</h3>
					<p>Takmir</p>
				</div>
				<div class="left-custom-menu-adp-wrap">
					<ul class="nav navbar-nav left-sidebar-menu-pro">
						<li class="nav-item">
							<a href="<?= base_url(''); ?>home_index"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"></span></a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url(''); ?>pembayaran"><i class="fa big-icon fa-print"></i> <span class="mini-dn">Pembayaran Zakat</span> <span class="indicator-right-menu mini-dn"></span></a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url(''); ?>rekapitulasi"><i class="fa big-icon fa-clipboard"></i> <span class="mini-dn">Rekapitulasi</span> <span class="indicator-right-menu mini-dn"></span></a>
						</li>

						<li class="nav-item">
							<a href="<?= base_url(''); ?>logout"><button class="btn btn-danger"></button><span class="mini-dn"> Logout</span> <span class="indicator-right-menu mini-dn"></span></a>
						</li>

						<!-- <li class="nav-item">
							<a href="<?= base_url(''); ?>zakat"><i class="fa big-icon fa-clipboard"></i> <span
									class="mini-dn">Zakat</span> <span class="indicator-right-menu mini-dn"></span></a>
						</li> -->

					</ul>
				</div>
			</nav>
		</div>
		<!-- Header top area start-->
		<div class="content-inner-all">
			<div class="header-top-area">
				<div class="fixed-header-top">
					<div class="container-fluid">
						<div class="row">
							<div class="col-lg-1 col-md-6 col-sm-6 col-xs-12">
								<button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
									<i class="fa fa-bars"></i>
								</button>
								<div class="admin-logo logo-wrap-pro">
									<a href="#"><img src="<?= base_url(); ?>/assets/" alt="" />
									</a>
								</div>
							</div>
							<div class="col-lg-6 col-md-1 col-sm-1 col-xs-12">
								<div class="header-top-menu tabl-d-n">
								</div>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-6 col-xs-12">
								<div class="header-right-info">
									<ul class="nav navbar-nav mai-top-nav header-right-menu">

										<!-- <li class="nav-item">
											<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
												<span class="adminpro-icon adminpro-user-rounded header-riht-inf"></span>
												<span class="admin-name">&nbsp;&nbsp;&nbsp;Admin&nbsp;&nbsp;&nbsp;</span>
												<span class="author-project-icon adminpro-icon adminpro-down-arrow"></span>
											</a>
											<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated flipInX">
												<li><a href="#"><span class="adminpro-icon adminpro-settings author-log-ic"></span>Settings</a>
												</li>
												<li><a href="<?= base_url(''); ?>/logout"><span class="adminpro-icon adminpro-locked author-log-ic"></span>Log
														Out</a>
												</li>
											</ul>
										</li> -->

									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<!--Mobile Menu start-->
			<div class="mobile-menu-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul class="mobile-menu-nav">
										<br>
										<li class="nav-item">
											<a href="<?= base_url(''); ?>home_index"><i class="fa big-icon fa-home"></i> <span class="mini-dn">Home</span> <span class="indicator-right-menu mini-dn"></span></a>
										</li>
										<li>
											<a href="<?= base_url(''); ?>pembayaran"><i class="fa big-icon fa-print"></i> <span class="mini-dn">Pembayaran Zakat</span> <span class="indicator-right-menu mini-dn"></span></a>
										</li>
										<li>
											<a href="<?= base_url(''); ?>rekapitulasi"><i class="fa big-icon fa-clipboard"></i> <span class="mini-dn">Rekapitulasi</span> <span class="indicator-right-menu mini-dn"></span></a>
										</li>
									</ul>
									<br>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile Menu end