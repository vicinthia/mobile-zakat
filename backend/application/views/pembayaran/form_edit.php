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

		<?php
		if (!empty($this->session->flashdata('info'))) { ?>
			<div class="alert alert-success alert-dismissible fade show" role="alert">
				<strong>Berhasil!</strong> <?= $this->session->flashdata('info') ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
		<?php }
		?>

		<div class="row">
			<div class="col-lg-12">
				<div class="sparkline12-list shadow-reset mg-t-30">
					<div class="sparkline12-hd">
						<div class="main-sparkline12-hd">
							<h1>Form Edit Pembayaran Zakat</h1>
						</div>
					</div>
					<div class="sparkline12-graph">
						<div class="basic-login-form-ad">
							<div class="row">
								<div class="col-lg-12">
									<div class="all-form-element-inner">
										<form method="post" action="<?= base_url(''); ?>Pembayaran/update">
											<h3>
												<center>Data Pembayar</center>
											</h3>

											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">ID Pembayaran</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name='id' value="<?= $editdata['id']; ?>" class="form-control" readonly>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Nama Keluarga
															Pembayar</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name='nama' class="form-control" value="<?= $editdata['nama']; ?>" required="">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">No. HP
															Pembayar</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name='no_hp' class="form-control" value="<?= $editdata['no_hp']; ?>" required="">
														</div>
													</div>
												</div>
											</div>

											<!-- <div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Alamat</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name='alamat_pembayar' class="form-control" required="">
														</div>
													</div>
												</div>
											</div> -->

											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Alamat</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name='alamat' class="form-control" value="<?= $editdata['alamat']; ?>" required="">
														</div>
													</div>
												</div>
											</div>

											<hr>
											<h3>
												<center>Data Zakat</center>
											</h3>

											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Jenis
															Zakat</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<select name='jenis_zakat' class="form-control" class="jenis_zakat" required="">
																<option value="<?= $editdata['jenis_zakat']; ?>"><?= $editdata['jenis_zakat']; ?></option>
																<option value="Zakat Fitrah">Zakat Fitrah </option>
																<option value="Zakat Mal">Zakat Mal </option>
															</select>
														</div>
													</div>
												</div>
											</div>


											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Jumlah
															Tanggungan</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="jumlah_jiwa" class="form-control" placeholder="Jumlah anggota keluarga yang dibayarkan" value="<?= $editdata['jumlah_jiwa']; ?>" required="">
														</div>
													</div>
												</div>
											</div>

											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">1). Pembayar </label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="pembayar1" class="form-control" placeholder="nama pembayar zakat" value="<?= $editdata['pembayar1']; ?>">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">2). Pembayar </label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="pembayar2" class="form-control" placeholder="nama pembayar zakat" value="<?= $editdata['pembayar2']; ?>">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">3). Pembayar </label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="pembayar3" class="form-control" placeholder="nama pembayar zakat" value="<?= $editdata['pembayar3']; ?>">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">4). Pembayar </label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="pembayar4" class="form-control" placeholder="nama pembayar zakat" value="<?= $editdata['pembayar4']; ?>">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">5). Pembayar </label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="pembayar5" class="form-control" placeholder="nama pembayar zakat" value="<?= $editdata['pembayar5']; ?>">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">6). Pembayar </label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="pembayar6" class="form-control" placeholder="nama pembayar zakat" value="<?= $editdata['pembayar6']; ?>">
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">7). Pembayar </label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="pembayar7" class="form-control" placeholder="nama pembayar zakat" value="<?= $editdata['pembayar7']; ?>">
														</div>
													</div>
												</div>
											</div>


											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Pembayaran
															Beras</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<!-- <select name="pembayaran_beras" class="form-control">
																<option value="0">--Pilih Jenis--</option>
																<option value="2.5">2,5 kg</option>
																<option value="2.7">2,7 kg</option>
															</select> -->
															<input type="text" name="beras" class="form-control" placeholder="total besar beras Kg" value="<?= $editdata['beras']; ?>" required>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Pembayaran
															Uang</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="uang" class="form-control" id="txt2" onkeyup="sum();" placeholder="Total yang harus dibayarkan. Contoh: 48000" value="<?= $editdata['uang']; ?>" required>
														</div>
													</div>
												</div>
											</div>

											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Pembayaran
															Harta / Mal</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="mal" class="form-control" id="txt2" onkeyup="sum();" placeholder="Total yang harus dibayarkan. Contoh: 48000" value="<?= $editdata['mal']; ?>" required>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Pembayaran
															Fidyah</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="fidyah" class="form-control" id="txt2" onkeyup="sum();" placeholder="Total yang harus dibayarkan. Contoh: 48000" value="<?= $editdata['fidyah']; ?>" required>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Shadaqah/
															Infaq</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="infaq" class="form-control" id="txt2" onkeyup="sum();" placeholder="Total yang harus dibayarkan. Contoh: 48000" value="<?= $editdata['infaq']; ?>" required>
														</div>
													</div>
												</div>
											</div>

											<hr>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Panitia Zakat</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="penerima" class="form-control" id="txt2" onkeyup="sum();" placeholder="Nama panitia zakat" value="<?= $editdata['penerima']; ?>" required>
														</div>
													</div>
												</div>
											</div>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Tanggal
															Penyerahan</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="date" id="last-name" name="tgl" value="<?= $editdata['tgl']; ?>" required="required" class="form-control" readonly>
														</div>
													</div>
												</div>
											</div>
											<hr>
											<div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Status</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" name="status" class="form-control" id="txt2" onkeyup="sum();" placeholder="Status" value="<?= $editdata['status']; ?>" required readonly>
														</div>
													</div>
												</div>
											</div>

											< <!-- <div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Uang Yang
															Dibayarkan</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="text" class="form-control" id="txt1" onkeyup="sum();" placeholder="Total yang dibayarkan Mustahik. Contoh: 50000">
														</div>
													</div>
												</div>
									</div>

									<div class="form-group-inner">
										<div class="row">
											<div class="col-lg-3">
												<label class="login2 pull-right pull-right-pro">Infak</label>
											</div>
											<div class="col-lg-9">
												<div class="form-select-list">
													<input type="number" name="infak" class="form-control" id="txt3" onkeyup="sum();" placeholder="Sisa pembayaran apabila Mustahik ingin berinfak.">
												</div>
											</div>
										</div>
									</div> -->

									<!-- <div class="form-group-inner">
												<div class="row">
													<div class="col-lg-3">
														<label class="login2 pull-right pull-right-pro">Tanggal
															Penyerahan</label>
													</div>
													<div class="col-lg-9">
														<div class="form-select-list">
															<input type="date" id="last-name" name="tgl" value="<?= $editdata['tgl']; ?>" required="required" class="form-control">
														</div>
													</div>
												</div>
											</div> -->

									<div class="form-group-inner">
										<div class="login-btn-inner">
											<div class="row">
												<div class="col-lg-3"></div>
												<div class="col-lg-9">
													<div class="login-horizental cancel-wp pull-left">
														<button class="btn btn-sm btn-primary login-submit-cs" type="submit">Update</button>
														<a href="<?= base_url(''); ?>/Pembayaran/" button type="button" class="btn btn-primary">Kembali</a>
													</div>
												</div>
											</div>
										</div>
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
</div>
</div>
<!-- Static Table End -->
</div>
</div>