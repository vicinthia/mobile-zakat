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
        <h1 class="page-header">Rekapitulasi Oktober</h1>
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
                                    <td>Sabtu, 01-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minggu, 02-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Senin, 03-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Selasa, 04-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Rabu, 05-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kamis, 06-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Jumat, 07-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Sabtu, 08-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Minggu, 09-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Senin, 10-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Selasa, 11-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Rabu, 12-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Kamis, 13-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Jumat, 14-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Sabtu, 15-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Minggu, 16-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Senin, 17-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Selasa, 18-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Rabu, 19-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Kamis, 20-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Jumat, 21-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Sabtu, 22-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Minggu, 23-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Senin, 24-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Selasa, 25-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Rabu, 26-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Kamis, 27-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Jumat, 28-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Sabtu, 29-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Minggu, 30-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Senin, 31-10-2022</td>
                                    <td><?php echo number_format($sum_mejaTOct31->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalOct31->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianOct31') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaOct->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllOct->total) ?></td>
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