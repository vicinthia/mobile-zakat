<!DOCTYPE html>
<html lang="en">

<head>
    <title>Rekapitulasi Penerimaan Uang</title>
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

        .beras {
            padding-left: 50px;
        }

        .right {
            padding-left: 220px;
        }

        .bld {
            font-weight: bold;
        }

        /* table {
            border-collapse: separate;
            border-spacing: 2px;
        } */
    </style>
</head>

<body>
    <table>
        <tr>
            <td align="left">
                <!-- <img src="data:image/png;base64,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" alt="masjid" width="100" height="100"> -->
                <img src="https://pbs.twimg.com/media/Fsx83GyaAAIgA3P?format=jpg&name=medium" alt="masjid">
            </td>
            <!-- <td align="center" class="kolom">
                <h3>PANITIA ZAKAT TAHUN</h3>
                <h3>2023</h3>
                <h3>Masjid ...</h3>
            </td> -->
        </tr>
    </table>
    <hr style="color:blue;">
    <table>
        <tr>

            <td>Rp.<?php echo number_format($sum_totalApr2->uang) ?></td>

        </tr>
    </table>
    <table>
        <!-- <tr>
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
            <br>
            <td class="beras">
                <p>Zakat Beras : <?= $getdata['beras']; ?> Kg</p>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <p>Zakat Mal : Rp.</p>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <p>Dari sejumlah <?= $getdata['jumlah_jiwa']; ?> (Jiwa), yaitu :</p>
            </td>
        </tr>
        <br>
        <tr>
            <td>
                <p>1. <?= $getdata['pembayar1']; ?></p>
            </td>
            <td class="beras">
                <p>2. <?= $getdata['pembayar2']; ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>3. <?= $getdata['pembayar3']; ?></p>
            </td>
            <td class="beras">
                <p>4. <?= $getdata['pembayar4']; ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>5. <?= $getdata['pembayar5']; ?></p>
            </td>
            <td class="beras">
                <p>6. <?= $getdata['pembayar6']; ?></p>
            </td>
        </tr>
        <tr>
            <td>
                <p>7. <?= $getdata['pembayar7']; ?></p>
            </td>
        </tr>
        <br>
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
            <td class="beras">
                <p>Yang menyerahkan,</p>
            </td>
        </tr>
        <br>
        <br>
        <br>
        <br>
        <tr>
            <td>
                <p> ( <?= $getdata['penerima']; ?> )</p>
              
            </td>
            <td class="beras">
                <p>(.................................................)</p>
            </td>
        </tr> -->

    </table>


</body>

</html>