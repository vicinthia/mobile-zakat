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
        <h1 class="page-header">Rekapitulasi September</h1>
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
                                    <td>Kamis, 01-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jumat, 02-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sabtu, 03-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Minggu, 04-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Senin, 05-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Selasa, 06-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Rabu, 07-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Kamis, 08-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Jumat, 09-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Sabtu, 10-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Minggu, 11-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Senin, 12-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Selasa, 13-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Rabu, 14-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Kamis, 15-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Jumat, 16-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Sabtu, 17-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Minggu, 18-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Senin, 19-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Selasa, 20-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Rabu, 21-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept21') ?>"><button class="btn btn-warning">Detail</button></a></td>

                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Kamis, 22-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Jumat, 23-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Sabtu, 24-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Minggu, 25-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Senin, 26-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Selasa, 27-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Rabu, 28-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Rabu, 29-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Jumat, 30-09-2022</td>
                                    <td><?php echo number_format($sum_mejaTSept30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalSept30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianSept30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaSept->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllSept->total) ?></td>
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