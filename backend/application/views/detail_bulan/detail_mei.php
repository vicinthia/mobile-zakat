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

    <title>eTicket</title>
</head>

<body>
    <div class="col-lg-12">
        <h1 class="page-header">Rekapitulasi Mei</h1>
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
                                <a href="<?= base_url('home/halaman_rekap') ?>"><button class="btn btn-primary">Kembali</button>
                                </a>


                                <br>
                                <br>
                                <a href="<?= base_url('home/masukAdmin') ?>"><button class="btn btn-primary">HOME</button>
                                </a>

                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Tanggal</th>
                                    <th style="text-align: center;">Tiket Terjual</th>
                                    <th style="text-align: center;">PENDAPATAN</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>


                                <tr>
                                    <td>1</td>
                                    <td>Senin, 01-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Selasa, 02-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rabu, 03-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kamis, 04-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jumat, 05-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Sabtu, 06-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Minggu, 07-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Senin, 08-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Selasa, 09-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Rabu, 10-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Kamis, 11-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Jumat, 12-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Sabtu, 13-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Minggu, 14-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Senin, 15-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Selasa, 16-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Rabu, 17-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Kamis, 18-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Jumat, 19-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Sabtu, 20-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Minggu, 21-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Senin, 22-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Selasa, 23-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei123') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Rabu, 24-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Kamis, 25-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Jumat, 26-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Sabtu, 27-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Minggu, 28-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Senin, 29-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Selasa, 30-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Rabu, 31-05-2023</td>
                                    <td><?php echo number_format($sum_mejaTMei31->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMei31->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMei31') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaMei->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllMei->total) ?></td>
                                </tr>

                            </table>

                            <!-- <div class="row">
                                <div class="col">
                                    <?php echo $pagination; ?>
                                </div>
                            </div> -->
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