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
        <h1 class="page-header">Rekapitulasi Maret</h1>
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
                                    <td>Rabu, 01-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kamis, 02-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jumat, 03-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sabtu, 04-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Minggu, 05-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Senin, 06-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Selasa, 07-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Rabu, 08-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Kamis, 09-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Jumat, 10-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Sabtu, 11-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Minggu, 12-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Senin, 13-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Selasa, 14-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Rabu, 15-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Kamis, 16-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Jumat, 17-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Sabtu, 18-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Minggu, 19-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Senin, 20-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Selasa, 21-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Rabu, 22-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Kamis, 23-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Jumat, 24-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Sabtu, 25-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Minggu, 26-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Senin, 27-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Selasa, 28-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Rabu, 29-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Kamis, 30-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Jumat, 31-03-2023</td>
                                    <td><?php echo number_format($sum_mejaTMar31->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalMar31->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianMar31') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaMar->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllMar->total) ?></td>
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