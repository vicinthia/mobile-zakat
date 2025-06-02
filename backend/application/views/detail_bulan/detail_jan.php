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
        <h1 class="page-header">Rekapitulasi Januari</h1>
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
                                    <td>Minggu, 01-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Senin, 02-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Selasa, 03-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rabu, 04-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Kamis, 05-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Jumat, 06-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Sabtu, 07-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Minggu, 08-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Senin, 09-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Selasa, 10-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Rabu, 11-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Kamis, 12-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Jumat, 13-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Sabtu, 14-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Minggu, 15-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Senin, 16-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Selasa, 17-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Rabu, 18-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Kamis, 19-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Jumat, 20-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Sabtu, 21-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Minggu, 22-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Senin, 23-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Selasa, 24-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Rabu, 25-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Kamis, 26-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Jumat, 27-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Sabtu, 28-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Minggu, 29-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Senin, 30-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Selasa, 31-01-2023</td>
                                    <td><?php echo number_format($sum_mejaTJan31->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJan31->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJan31') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaJan->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllJan->total) ?></td>
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