<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bukti Pembayaran</title>
    <style>
        td {
            padding-left: 0px;
            font-family: sans-serif;
        }

        /* hr {
            border: 0;
            border-top: 2px solid blue;
        } */

        .kolom {
            padding-left: 150px;
        }

        .beras .fidyah {
            padding-left: 50px;
        }

        .right {
            padding-left: 220px;
        }

        .bld {
            font-weight: bold;
        }

        .judul {
            font-weight: bold;
            font-size:large;
            color: green;
        }

        /* table {
            border-collapse: separate;
            border-spacing: 2px;
        } */
    </style>
</head>

<body>
<?php
function penyebut($nilai) {
    $nilai = abs($nilai);
    $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
    $temp = "";
    if ($nilai < 12) {
        $temp = " ". $huruf[$nilai];
    } else if ($nilai <20) {
        $temp = penyebut($nilai - 10). " Belas";
    } else if ($nilai < 100) {
        $temp = penyebut($nilai/10)." Puluh". penyebut($nilai % 10);
    } else if ($nilai < 200) {
        $temp = " Seratus" . penyebut($nilai - 100);
    } else if ($nilai < 1000) {
        $temp = penyebut($nilai/100) . " Ratus" . penyebut($nilai % 100);
    } else if ($nilai < 2000) {
        $temp = " Seribu" . penyebut($nilai - 1000);
    } else if ($nilai < 1000000) {
        $temp = penyebut($nilai/1000) . " Ribu" . penyebut($nilai % 1000);
    } else if ($nilai < 1000000000) {
        $temp = penyebut($nilai/1000000) . " Juta" . penyebut($nilai % 1000000);
    } else if ($nilai < 1000000000000) {
        $temp = penyebut($nilai/1000000000) . " Milyar" . penyebut(fmod($nilai,1000000000));
    } else if ($nilai < 1000000000000000) {
        $temp = penyebut($nilai/1000000000000) . " Triliun" . penyebut(fmod($nilai,1000000000000));
    }     
    return $temp;
}
 
function terbilang($nilai) {
    if($nilai<0) {
        $hasil = "minus ". trim(penyebut($nilai));
    } else {
        $hasil = trim(penyebut($nilai));
    }     
    return $hasil;
}
?>
    <table align="center">
        <tr>
            <td align="center" class="judul">
                <p>PANITIA PENERIMAAN DAN PENYALURAN ZAKAT</p>
            </td>
        </tr>
        <tr>
            <td align="center">
                <img src="https://pbs.twimg.com/media/Fsx83GyaAAIgA3P?format=jpg&name=medium" alt="masjid" width="600">
            </td>
            <!-- <td align="center" class="kolom">
                <h3>PANITIA ZAKAT TAHUN</h3>
                <h3>2023</h3>
                <h3>Masjid ...</h3>
            </td> -->
        </tr>
    </table>
    <hr style="color:green;">
    <table>
        <tr>
            <td align="right" width="1000  ">
                <p>Nomor : MAI/Zakat/<?= $getdata['id']; ?></p>

            </td>
        </tr>
    </table>
    <table>
        <!-- <tr>
            <td align="right" width="650">
                <p>Nomor : <?= $getdata['id']; ?></p>

            </td>
        </tr> -->
        <tr>
            <td>
                <p>Nama Keluarga : <?= $getdata['nama']; ?></p>
            </td>
        </tr>
        <tr>
            <td width="350">
                <p>Alamat : <?= $getdata['alamat']; ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p class="bld"><u>Untuk Pembayaran</u></p>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <p>Zakat Fitrah : Rp.<?= number_format($getdata['uang']); ?></p>
            </td>
            <!-- <br> -->
            <td class="beras"  width="300">
                <p>Zakat Beras : <?= $getdata['beras']; ?> Kg</p>
            </td>
        </tr>
        <!-- <br> -->
        <tr>
            <td>
                <p>Zakat Mal : Rp.<?= number_format($getdata['mal']); ?></p>
            </td>
            <br>
            <td class="fidyah">
                <p>Zakat Fidyah : Rp.<?= number_format($getdata['fidyah']); ?></p>
            </td>
            <br>
            <td  width="300">
                <p>Shadaqah/Infaq : Rp.<?= number_format($getdata['infaq']); ?></p>
            </td>
        </tr>
        <!-- <br> -->
        <!-- <tr>
            <td>
                <p>Shadaqah/Infaq : Rp.<?= number_format($getdata['infaq']); ?></p>
            </td>
        </tr> -->
        <!-- <tr>
            <td>
                <p>Dari sejumlah <?= $getdata['jumlah_jiwa']; ?> (Jiwa), yaitu :</p>
            </td>
        </tr> -->
        <br>
        <tr>
            <td>
                <p>Dari sejumlah <?= $getdata['jumlah_jiwa']; ?> (Jiwa), yaitu :</p>
            </td>
            <td>
                <p>1. <?= $getdata['pembayar1']; ?></p>
            </td>
            <td class="beras">
                <p>2. <?= $getdata['pembayar2']; ?></p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <p>3. <?= $getdata['pembayar3']; ?></p>
            </td>
            <td class="beras">
                <p>4. <?= $getdata['pembayar4']; ?></p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <p>5. <?= $getdata['pembayar5']; ?></p>
            </td>
            <td class="beras">
                <p>6. <?= $getdata['pembayar6']; ?></p>
            </td>
        </tr>
        <tr>
            <td></td>
            <td>
                <p>7. <?= $getdata['pembayar7']; ?></p>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <p>Total Pembayaran : Rp.<?php echo number_format($gettotal->uang + $gettotal->mal + $gettotal->fidyah + $gettotal->infaq) ?> </p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Terbilang :  <?php echo terbilang($gettotal->uang + $gettotal->mal + $gettotal->fidyah + $gettotal->infaq) ?> </p>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <p>Surabaya, <?= $getdata['tgl']; ?></p>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <p>Panitia Zakat 2023</p>
            </td>
        </tr>
        <tr>
            <td>
                <p>Yang menerima,</p>
            </td>
            <br>
            <br>
            <br>
            <br>
            <td></td>
            <td class="beras">
                <p>Yang menyerahkan,</p>
            </td>
        </tr>
        <br>
        <br>
        <tr>
            <td>
                <p> ( <?= $getdata['penerima']; ?> )</p>
                <!-- <p>(.................................................)</p> -->
            </td>
            <td></td>
            <td class="beras">
                <p>(.................................................)</p>
            </td>
        </tr>

    </table>


</body>

</html>