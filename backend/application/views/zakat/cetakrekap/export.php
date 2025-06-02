<?php
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Data Pegawai.xls");
?>


<!DOCTYPE html>
<html>
<head>
	<title>Export Data Zakat Ke Excel</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;
 
	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>
 
	<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data Zakat 2023.xls");
	?>
 
	<center>
		<h1>Data Penerimaan Zakat Masjid Al-Ikhlas Tahun 2023</h1>
	</center>
 
	<table border="1">
        <thead>
			<tr>
			<th>No </th>
			<th>Tanggal </br> Penyerahan</th>
			<th>Nama <br>Keluarga</th>
			<th>Nama Pembayar</th>
			<th>No. Telp</th>
			<th>Alamat</th>
			<th>Jenis Zakat </th>
			<th>Pembayaran </br> Beras</th>
			<th>Pembayaran </br> Uang</th>
			<th>Pembayaran </br> Mal</th>
			<th>Pembayaran </br> Fidyah</th>
			<th>Shadaqah/<br>Infaq</th>
			<th>Jumlah <br>Jiwa</th>
			<th>Panitia <br>Zakat</th>
			</tr>
		</thead>

        <tbody>

<?php $i = 1; ?>
<?php foreach ($getzakat as $gz) : ?>
    <tr>
        <td> <?= $i; ?></td>
        <td align="center"><?= $gz['tgl'] ?></td>
        <td align="center"><?= $gz['nama'] ?></td>
        <td><?php echo nl2br("1).{$gz['pembayar1']} \n 2).{$gz['pembayar2']} \n 3).{$gz['pembayar3']} \n 4).{$gz['pembayar4']} \n 5).{$gz['pembayar5']} \n 6).{$gz['pembayar6']} \n 7).{$gz['pembayar7']}") ?></td>


        <td align="center" ><?= $gz['no_hp'] ?></td>
        <td align="center"><?= $gz['alamat'] ?></td>
        <td align="center"><?= $gz['jenis_zakat'] ?></td>
        <td align="center"><?= $gz['beras'] . " Kg" ?></td>
        <td align="center">Rp. <?php echo number_format($gz['uang']) ?></td>
        <td align="center">Rp. <?php echo number_format($gz['mal']) ?></td>
        <td align="center">Rp. <?php echo number_format($gz['fidyah']) ?></td>
        <td align="center">Rp. <?php echo number_format($gz['infaq']) ?></td>
        <td align="center"><?= $gz['jumlah_jiwa'] ?></td>
        <td align="center"><?= $gz['penerima'] ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>
<tr style="font-weight: bold;">
    <td colspan="7">Total Penerimaan Beras Zakat :</td>
    <td align="center"><?= ($sum_totalAllAprMeiBeras->beras) ?> Kg</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr style="font-weight: bold;">
    <td colspan="8">Total Penerimaan Uang Zakat :</td>
    <td align="center">Rp.<?php echo number_format($sum_totalAllAprMei->uang) ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr style="font-weight: bold;">
    <td colspan="9">Total Penerimaan Zakat Mal :</td>
    <td  align="center">Rp.<?php echo number_format($sum_totalAllAprMeiMal->mal) ?></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr style="font-weight: bold;">
    <td colspan="10">Total Penerimaan Fidyah :</td>
    <td  align="center">Rp.<?php echo number_format($sum_totalAllAprMeiFidyah->fidyah) ?></td>
    <td></td>
    <td></td>
    <td></td>
</tr>
<tr style="font-weight: bold;">
    <td colspan="11">Total Penerimaan Shadaqah/Infaq :</td>
    <td  align="center">Rp.<?php echo number_format($sum_totalAllAprMeiInfaq->infaq) ?></td>
    <td></td>
    <td></td>
</tr>
</tbody>
	</table>
</body>
</html>