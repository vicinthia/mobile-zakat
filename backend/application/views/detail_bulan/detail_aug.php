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
        <h1 class="page-header">Rekapitulasi Agustus</h1>
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
                                    <th style="text-align: center;">Tiket terjual</th>
                                    <th style="text-align: center;">PENDAPATAN</th>
                                    <th style="text-align: center;">Aksi</th>
                                </tr>

                                <tr>
                                    <td>1</td>
                                    <td>Senin, 01-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Selasa, 02-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Rabu, 03-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Kamis, 04-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Jumat, 05-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Sabtu, 06-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Minggu, 07-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Senin, 08-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Selasa, 09-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Rabu, 10-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Kamis, 11-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Jumat, 12-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Sabtu, 13-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Minggu, 14-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Senin, 15-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Selasa, 16-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Rabu, 17-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Kamis, 18-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Jumat, 19-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Sabtu, 20-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Minggu, 21-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Senin, 22-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Selasa, 23-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Rabu, 24-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Kamis, 25-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Jumat, 26-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Sabtu, 27-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Minggu, 28-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Senin, 29-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Selasa, 30-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Rabu, 31-08-2022</td>
                                    <td><?php echo number_format($sum_mejaTAug31->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalAug31->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianAug31') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>


                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaAug->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllAug->total) ?></td>
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