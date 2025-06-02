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

    <title>Login Akses IKC</title>
</head>

<body>
    <div class="row" style="margin-top: 40px;">
        <div class="col-md-4 offset-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h4>Login (Khusus perbaikan aplikasi)</h4>
                    <br>
                    <h5><i>hanya akses untuk programmer</i></h5>

                </div>
                <div class="card-body">
                    <form method="post" action="<?php echo base_url('login2/myLogin') ?>">
                        <div class="form_group">
                            <label>Username</label>
                            <input type="text" name="username" id="" class="form-control" autocomplete="off">
                            <small><span class="text-danger"><?php echo form_error('username') ?></span></small>
                        </div>
                        <div class="form_group">
                            <label>Password</label>
                            <input type="password" name="password" id="" class="form-control" autocomplete="off">
                            <small><span class="text-danger"><?php echo form_error('password') ?></span></small>
                        </div>
                        <br>
                        <button class="btn btn-primary btn-block" type="submit">Login</button>
                    </form>
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