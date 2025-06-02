<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>Document</title>
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->


	<link rel="stylesheet" href="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.css"> 
	<!-- <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">  -->

	<!-- <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script> -->
	
	


	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>


	
	<script>
		$(document).ready(function () {
    	$('table.display').DataTable();
		});
	</script>

	<style>
		.totalU {
			font-weight: bold;
            font-size: 20px;
		}
	</style>


	<!-- <script>
		function f1(objButton) {
			alert(objButton.value);
		}
	</script>
	<script type="text/javascript">
		function myFunction() {
			document.getElementById("demo").innerHTML = "Hello World";
		}
	</script>
	
	<script>
    var i = 0;
    function buttonClick() {
        document.getElementById('inc').value = ++i;
    }
	</script> -->


</head>

<body>
	<!-- Breadcome start-->
	<div class="breadcome-area mg-b-30 small-dn">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="breadcome-list shadow-reset">
						<div class="row">
							<div class="col-lg-6">
								<div class="breadcome-heading">
									&nbsp;
								</div>
							</div>
							<div class="col-lg-6">
								<ul class="breadcome-menu">
									<li><a href="<?= base_url(''); ?>/home_index">Home</a> <span class="bread-slash">/</span>
									</li>
									<li><span class="bread-blod">Rekapitulasi Zakat Uang</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcome End-->

	<!-- Breadcome start-->
	<div class="breadcome-area mg-b-30 des-none">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="breadcome-list map-mg-t-40-gl shadow-reset">
						<div class="row">
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<div class="breadcome-heading">
									&nbsp;
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
								<ul class="breadcome-menu">
									<li><a href="<?= base_url(''); ?>/home_index">Home</a> <span class="bread-slash">/</span>
									</li>
									<li><span class="bread-blod">Pembayaran Zakat</span>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Breadcome End-->

	<!-- Static Table Start -->
	<div class="data-table-area mg-b-15">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="sparkline13-list shadow-reset">
						<div class="sparkline13-hd">
							<div class="main-sparkline13-hd">
								<h1>Detail Penerimaan Mal Zakat</h1>
							</div>
						</div>

						<div class="sparkline13-graph">
						
									
								<table id="myTable" class="display" data-toggle="table" data-pagination="true">
									<thead>
										<tr>
                                        <th>No.</th>
                                        <th>Tanggal Penerimaan</th>
                                        <th>Keluarga Pembayar</th>
                                        <th>Nama Pembayar</th>
                                        <th>Besar Zakat Mal</th>
                                        <th>Jumlah Jiwa</th>
										</tr>
									</thead>
									<tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($getzakat as $gz) : ?>
                                        <tr>
                                            <td> <?= $i; ?></td>
                                            <td><?= $gz['tgl'] ?></td>
                                            <td><?= $gz['nama'] ?></td>
                                            <td class="namapembayar"><?php echo nl2br("1).{$gz['pembayar1']} \n 2).{$gz['pembayar2']} \n 3).{$gz['pembayar3']} \n 4).{$gz['pembayar4']} \n 5).{$gz['pembayar5']} \n 6).{$gz['pembayar6']} \n 7).{$gz['pembayar7']}") ?></td>
                                            <td>Rp. <?php echo number_format($gz['mal']) ?></td>
                                            <td><?= $gz['jumlah_jiwa'] ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                    		<!-- <tr style="font-weight: bold;">
                                        		<td colspan="4">Jumlah Total :</td>
                                        		<td>Rp.<?php echo number_format($sum_totalAllAprMei->uang) ?></td>
                                    		</tr> -->
									</tbody>
								</table> 
								<p align= "left" class="totalU">
									Jumlah Total : Rp.<?php echo number_format($sum_totalAllAprMeiMal->mal) ?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p>

	</p>
	<!-- Static Table End -->
	</div>
	</div>
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script> -->


	<!-- <script src="<?= base_url() ?>assets/vendor/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/vendor/datatables/dataTables.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>assets/js/demo/datatables-demo.js"></script> -->



</body>

</html>



