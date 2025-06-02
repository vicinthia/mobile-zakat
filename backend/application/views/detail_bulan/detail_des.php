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
        <h1 class="page-header">Rekapitulasi Desember</h1>
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
                                    <td>Kamis, 01-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jumat, 02-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sabtu, 03-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Minggu, 04-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Senin, 05-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Selasa, 06-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Rabu, 07-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Kamis, 08-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Jumat, 09-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Sabtu, 10-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Minggu, 11-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Senin, 12-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Selasa, 13-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Rabu, 14-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Kamis, 15-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Jumat, 16-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Sabtu, 17-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Minggu, 18-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Senin, 19-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Selasa, 20-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Rabu, 21-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Kamis, 22-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Jumat, 23-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Sabtu, 24-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Minggu, 25-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Senin, 26-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Selasa, 27-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Rabu, 28-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Kamis, 29-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Jumat, 30-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Sabtu, 31-12-2022</td>
                                    <td><?php echo number_format($sum_mejaTDes31->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalDes31->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianDes31') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaDes->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllDes->total) ?></td>
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