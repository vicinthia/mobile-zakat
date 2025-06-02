<!doctype html>
<html lang="en">

<head>
    <style>
        td {
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
        <h1 class="page-header">Rekapitulasi Juli</h1>
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
                                    <td>Jumat, 01-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul1->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul1->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul1') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Sabtu, 02-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul2->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul2->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul2') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Minggu, 03-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul3->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul3->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul3') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Senin, 04-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul4->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul4->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul4') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Selasa, 05-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul5->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul5->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul5') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Rabu, 06-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul6->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul6->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul6') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Kamis, 07-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul7->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul7->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul7') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Jumat, 08-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul8->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul8->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul8') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Sabtu, 09-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul9->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul9->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul9') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Minggu, 10-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul10->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul10->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul10') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Senin, 11-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul11->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul11->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul11') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Selasa, 12-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul12->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul12->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul12') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Rabu, 13-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul13->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul13->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul13') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Kamis, 14-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul14->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul14->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul14') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Jumat, 15-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul15->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul15->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul15') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Sabtu, 16-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul16->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul16->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul16') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Minggu, 17-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul17->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul17->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul17') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Senin, 18-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul18->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul18->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul18') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Selasa, 19-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul19->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul19->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul19') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Rabu, 20-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul20->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul20->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul20') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Kamis, 21-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul21->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul21->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul21') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Jumat, 22-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul22->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul22->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul22') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Sabtu, 23-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul23->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul23->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul23') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Minggu, 24-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul24->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul24->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul24') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Senin, 25-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul25->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul25->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul25') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Selasa, 26-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul26->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul26->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul26') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Rabu, 27-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul27->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul27->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul27') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Kamis, 28-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul28->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul28->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul28') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Jumat, 29-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul29->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul29->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul29') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Sabtu, 30-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul30->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul30->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul30') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Minggu, 31-07-2022</td>
                                    <td><?php echo number_format($sum_mejaTJul31->meja) ?></td>
                                    <td>Rp.<?php echo number_format($sum_totalJul31->total) ?></td>
                                    <td><a href="<?= base_url('rekapharian/rekapHarianJul31') ?>"><button class="btn btn-warning">Detail</button></a></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan=" 2">Jumlah Total :</td>
                                    <td><?php echo number_format($sum_totalAllMejaJul->meja) ?> Tiket</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllJul->total) ?></td>
                                </tr>
                                <!-- <tr style="font-weight: bold;">
                                    <td colspan="3">Total Pajak 20% :</td>
                                    <td>Rp.<?php echo number_format($sum_totalAllJul->total * 20 / 100) ?></td>
                                </tr> -->

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