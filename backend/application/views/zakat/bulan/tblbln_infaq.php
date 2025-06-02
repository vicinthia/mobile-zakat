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
        <h1 class="page-header">Rekapitulasi Pembayaran Shadaqah / Infaq</h1>
    </div>


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="dataTable_wrapper">
                        <div class="container">
                            <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                                <br>
                                <br>

                                <tr>
                                    <td>BULAN</td>
                                    <td>PENDAPATAN</td>
                                    <td>AKSI</td>
                                </tr>
                                <!-- <tr>
                                    <td>Januari'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllJan->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <tr>
                                    <td>Februari'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllFeb->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <tr>
                                    <td>Maret'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllMar->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr> -->
                                <tr>
                                    <td>April'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllApr->infaq) ?></td>
                                    <td><a href="<?= base_url('print_infaq/apr_infaq') ?>" target="_blank"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <!-- <tr>
                                    <td>Mei'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllMei->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <tr>
                                    <td>Juni'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllJun->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <tr>
                                    <td>Juli'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllJul->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>

                                <tr>
                                    <td>Agustus'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllAug->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <tr>
                                    <td>September'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllSept->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <tr>
                                    <td>Oktober'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllOct->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <tr>
                                    <td>November'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllNov->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr>
                                <tr>
                                    <td>Desember'2023</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllDes->infaq) ?></td>
                                    <td><a href="<?= base_url() ?>"><button class="btn btn-success">Print</button></a></td>
                                </tr> -->
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