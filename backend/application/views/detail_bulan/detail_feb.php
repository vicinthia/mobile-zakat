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
        <h1 class="page-header">Rekapitulasi Februari</h1>
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
                                    <td>Rabu, 01-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kamis, 02-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jumat, 03-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sabtu, 04-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Minggu, 05-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb5') ?>"><button class="btn btn-warning">Detail</button></a></td>

                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Senin, 06-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Selasa, 07-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Rabu, 08-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Kamis, 09-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Jumat, 10-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Sabtu, 11-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Minggu, 12-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Senin, 13-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Selasa, 14-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Rabu, 15-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Kamis, 16-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Jumat, 17-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Sabtu, 18-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Minggu, 19-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Senin, 20-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Selasa, 21-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Rabu, 22-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Kamis, 23-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Jumat, 24-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Sabtu, 25-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Minggu, 26-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Senin, 27-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Selasa, 28-02-2023</td>
                                    <td><?php echo number_format($sum_mejaTFeb28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalFeb28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianFeb28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaFeb->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllFeb->total) ?></td>
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