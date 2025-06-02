<!doctype html>
<html lang="en">

<head>
    <style>
        td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            text-align: center;
            vertical-align: middle;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <title>eZakat</title>
</head>

<body>
    <div class="col-lg-12">
        <h1 class="page-header">Rekapitulasi Data Zakat</h1>
        <h3>Telah Tervalidasi</h3>
    </div>



    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="dataTable_wrapper">
                        <div class="container">
                            <table class="table table-bordered table-striped table-hover">
                                <br>
                                <br>
                                <!-- <a href="<?= base_url('home/masukAdmin') ?>"><button class="btn btn-primary">HOME</button> -->
                                </a>
                                <tr>
                                    <td>ZAKAT</td>
                                    <td>BESAR PENERIMAAN</td>
                                    <td>AKSI</td>
                                    <td>CETAK REKAPITULASI</td>
                                </tr>
                                <tr>
                                    <td>Zakat Fitrah : Uang</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllAprMei->uang) ?></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/detailuang"><button class="btn btn-warning">Lihat</button></a></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/bulanuang"><button class="btn btn-primary">Cetak</button></a></td>
                                </tr>
                                <tr>
                                    <td>Zakat Fitrah : Beras</td>
                                    <td><?= ($sum_totalAllAprMeiBeras->beras) ?> Kg</td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/detailberas"><button class="btn btn-warning">Lihat</button></a></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/bulanberas"><button class="btn btn-primary">Cetak</button></a></td>
                                </tr>

                                <tr>
                                    <td>Zakat Mal</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllAprMeiMal->mal) ?></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/maldetail"><button class="btn btn-warning">Lihat</button></a></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/bulanmal"><button class="btn btn-primary">Cetak</button></a></td>
                                </tr>
                                <tr>
                                    <td>Fidyah</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllAprMeiFidyah->fidyah) ?></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/fidyahdetail"><button class="btn btn-warning">Lihat</button></a></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/bulanfidyah"><button class="btn btn-primary">Cetak</button></a></td>
                                </tr>
                                <tr>
                                    <td>Shadaqah/Infaq</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllAprMeiInfaq->infaq) ?></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/infaqdetail"><button class="btn btn-warning">Lihat</button></a></td>
                                    <td><a href="<?= base_url(); ?>rekapitulasi/bulaninfaq"><button class="btn btn-primary">Cetak</button></a></td>
                                </tr>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>