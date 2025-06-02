<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .button {
            background-color: #4CAF50;
            /* Hijau */
            border: none;
            color: green;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 4px 2px;
            cursor: pointer;
        }

        .button1 {
            background-color: green;
            color: white;
            border: 2px solid #e7e7e7;
        }

        td {
            text-align: center;
            vertical-align: middle;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Home</title>
</head>

<body>

    <!-- <form method="get" action="">
        <label>PILIH TANGGAL</label>
        <input type="date" name="tgl_awal">
        <!-- <label>sd</label> -->
<!-- <input type="date" name="tgl_akhir"> -->
<!-- <input type="submit" value="FILTER">
    </form> -->

<!-- <h1>Data Daftar Transaksi</h1>
<table border="1" cellpadding="3" cellspacing="0">
    <tr>
        <td>No</td>
        <td>ID Transaksi</td>
        <td>Meja</td>
        <td>Total</td>
        <td>Tanggal</td>
        <td>Status</td>
    </tr>
    <?php
    $count = 0;


    foreach ($queryAllDts as $row) {
        $count = $count + 1;
        // while ($data = mysqli_fetch_array($sql))
    ?>
        <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $row->id_transaksi ?></td>
            <td><?php echo $row->meja ?></td>
            <td>Rp. <?php echo number_format($row->total) ?></td>
            <td><?php echo date("d/F/y", strtotime($row->tgl)) ?></td>
            <td><?php if ($row->status == 1) {
                    echo ""; ?>
                    <button class="button button1">Lunas</button>
                <?php } ?>
            </td>
        </tr>
    <?php } ?>
    <!-- <tr style="font-weight: bold;">
            <td colspan="2">Jumlah :</td>
            <td></td>
            <td>Rp.<?php echo $sum_total->total ?></td>
        </tr> -->
<!-- </table>
</body>

</html> -->

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>eParkir</title>
</head>

<body>
    <div class="col-lg-12">
        <h1 class="page-header">Daftar Transaksi</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="dataTable_wrapper">
                        <div class="container">
                            <table class="table table-bordered table-striped table-hover" id="dataTables-example">

                                <form action="<?php echo base_url('home/hasil') ?>" action="GET">
                                    <div class="form-group">
                                        <label for="cari">data yang dicari</label>
                                        <input type="text" class="form-control" id="cari" name="cari" placeholder="cari">
                                    </div>
                                    <input class="btn btn-primary" type="submit" value="Cari">
                                </form>
                                <br>
                                <br>
                                <a href="<?= base_url('home/masukAdmin') ?>"><button class="btn btn-primary">HOME</button>
                                </a>

                                <tr>
                                    <td>No</td>
                                    <td>ID Transaksi</td>
                                    <td>Tanggal</td>
                                    <td>Total</td>
                                    <td>Status</td>
                                </tr>

                                <?php $no = 1;
                                foreach ($data as $row) {

                                ?>
                                    <td><?php echo $no ?></td>
                                    <td><?php echo $row->id_transaksi ?></td>
                                    <td><?php echo date("d/F/y", strtotime($row->tgl)) ?></td>
                                    <td>Rp. <?php echo number_format($row->total) ?></td>
                                    <td>
                                        <?php if ($row->status == "1") {
                                            echo ""; ?>
                                            <button class="btn btn-success">Lunas</button>
                                        <?php } else {
                                        ?>
                                            <button class="btn btn-danger">Belum Lunas</button>
                                        <?php } ?>
                                    </td>
                                    </tr>

                                <?php
                                    $no++;
                                }
                                ?>

                            </table>

                            <div class="row">
                                <div class="col">
                                    <?php echo $pagination; ?>
                                </div>
                            </div>
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