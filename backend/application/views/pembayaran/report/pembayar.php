<?php
ob_start();
//Koneksi ke database
?>
<style>
	td {
		padding: 3px 5px 3px 5px;
		border-right: 1px solid #666666;
		border-bottom: 1px solid #666666;
	}

	.head td {
		font-weight: bold;
		font-size: 12px;
		background: #b7f0ff;
	}

	table .main tbody tr td {
		font-size: 12px;
	}

	table,
	table .main {
		width: 100%;
		border-top: 1px solid #666;
		border-left: 1px solid #666;
		border-collapse: collapse;
		background: #fff;
	}

	h1 {
		font-size: 20px;
	}

</style>
</head>

<body>
	<h2 align="center">Laporan Muzakki</h2>
	<br>
	<table border="1">
		<thead>
			<tr>
				<th>No </th>
				<th>Nama Pembayar </th>
				<th>Alamat Pembayar </th>
				<th>No. Handphone </th>
				<th>Nama Mesjid </th>
			</tr>
		</thead>
		<tbody>
			<!-- <?php
                                          $no = 1;
                                          foreach( $data['pnr'] as $pnr) : ?><tr>
				<td><?=$no++ ?>.</td>
				<td><?= $pnr['nama_pembayar'];?></td>
				<td><?= $pnr['alamat_pembayar'];?></td>
				<td><?= $pnr['no_hp_pembayar'];?></td>
				<td><?= $pnr['nama_mesjid'];?></td>
			</tr>
			<?php endforeach; ?> -->



		</tbody>
	</table>
	<br />
	<?php
    date_default_timezone_set('Asia/Jakarta');?>
	<table width="787" cellpadding=0 cellspacing=0 style="border:none;" align="center">
		<tr style="border:none">
			<td width="212" style="border:none">
				<div align="center">&nbsp;</div>
			</td>
			<td width="352" style="border:none">&nbsp;</td>
			<td width="352" style="border:none">&nbsp;</td>
			<td width="209" style="border:none">
				<div align="center"><span class="style1">
						Surabaya, <?php echo date("d M Y");?>
					</span></div>
			</td>
		</tr>
		<tr style="border:none">
			<td width="212" style="border:none">
				<div align="center">&nbsp;</div>
			</td>
			<td width="352" style="border:none">&nbsp;</td>
			<td width="352" style="border:none">&nbsp;</td>
			<td width="209" style="border:none">
				<div align="center">Takmir Masjid</div>
			</td>
		</tr>

		<tr style="border:none">
			<td style="border:none">
				<div align="center"></div>
			</td>
			<td style="border:none">&nbsp;</td>
			<td width="352" style="border:none">&nbsp;</td>
			<td style="border:none">
				<div align="center"></div>
			</td>
		</tr>
		<tr style="border:none">
			<td style="border:none">
				<div align="center"></div>
			</td>
			<td style="border:none">&nbsp;</td>
			<td width="352" style="border:none">&nbsp;</td>
			<td style="border:none">
				<div align="center"></div>
			</td>
		</tr>
		<tr style="border:none">
			<td style="border:none">
				<div align="center"></div>
			</td>
			<td style="border:none">&nbsp;</td>
			<td width="352" style="border:none">&nbsp;</td>
			<td style="border:none">
				<div align="center"></div>
			</td>
		</tr style="border:none">
		<tr style="border:none">
			<td style="border:none">
				<div align="center"><u>&nbsp;</u></div>
			</td>
			<td style="border:none">&nbsp;</td>
			<td width="352" style="border:none">&nbsp;</td>
			<td style="border:none">
				<pre><div align="center"> <u>Hamba Allah</u> </div></pre>
			</td>
		</tr>

	</table>
	<?php
date_default_timezone_set('Asia/Jakarta');
 $header = '<p align="center"><img src="../logo/kop.jpg" width="1000" height="110" /></p>
<hr align="left" width="896" style="height:inherit"  />
';

$footer = '<table cellpadding=0 cellspacing=0 style="border:none;">
           <tr><td style="margin-right:-5px;border:none;" align="left">
           Dicetak: '.date("d-m-Y H:i").'</td>
       <td style="margin-right:-5px;border:none;" align="right">
           Halaman: {PAGENO} / {nb}</td></tr></table>';            
// ?>
</body>

</html>
