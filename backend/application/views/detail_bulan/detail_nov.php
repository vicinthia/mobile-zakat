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
        <h1 class="page-header">Rekapitulasi November</h1>
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
                                    <td>Selasa, 01-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Rabu, 02-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Kamis, 03-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Jumat, 04-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Sabtu, 05-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Minggu, 06-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Senin, 07-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Selasa, 08-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Rabu, 09-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Kamis, 10-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Jumat, 11-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Sabtu, 12-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Minggu, 13-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Senin, 14-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Selasa, 15-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Rabu, 16-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Kamis, 17-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Jumat, 18-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Sabtu, 19-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Minggu, 20-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Senin, 21-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Selasa, 22-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Rabu, 23-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Kamis, 24-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Jumat, 25-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Sabtu, 26-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Minggu, 27-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Senin, 28-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Selasa, 29-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Rabu, 30-11-2022</td>
                                    <td><?php echo number_format($sum_mejaTNov30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalNov30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianNov30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaNov->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllNov->total) ?></td>
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