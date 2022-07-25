<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log in</title>
    <link rel="shortcut icon" type="<?= base_url(); ?>assets/user/image/x-icon" href="<?= base_url(); ?>assets/user/images/logo-white.png" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
</head>

<body class="hold-transition login-page ">
    <div class="">
        <img src="<?= base_url(); ?>assets/img/13.png" alt="">
    </div>
    <div class="login-box ">


        <!-- /.login-logo -->
        <div class="card d-flex d-inline">
            <div class="card-body login-card-body">
                <h3 class="text-center my-3"><b>LOGIN</b></h3>

                <?= $this->session->flashdata('message'); ?>


                <form action="<?php echo base_url(); ?>auth/" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Masukan Email" name="email" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Masukan Password" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row ">

                        <!-- /.col -->
                        <div class="col">
                            <button type="submit" class="btn btn-outline-info btn-sm plus float-right"><i class="fas fa-sign-in-alt mr-1"></i> Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>



            </div>
            <!-- /.login-card-body -->
        </div>

    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/dist/js/adminlte.min.js"></script>


</body>

</html>