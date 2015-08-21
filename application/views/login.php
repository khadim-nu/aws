

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>AWS</title>

        <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/all.js"></script>
    </head>
    <body>
        <input type="hidden" name="base_url" id="base_url" value="<?= base_url(); ?>" />
        <div class="wrapper">
            <div class="header">
                <h1 class="title">Amazon Web Services</h1>
                <h4 class="title">Amazon Route 53</h4>
            </div>
            <div class="container ">
                <div class="login-block col-md-10">
                    <form action="<?= base_url(); ?>index.php/welcome/authenticate" method="post">
                    <div class="row">
                        <div class=" col-md-12 form-group">
                            <h3>User Login</h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <input class="form-control" name="username" placeholder="Username"  type="text" required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class=" col-md-8 form-group">
                            <input class="form-control" name="password" placeholder="Password"  type="password" required autofocus />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8 form-group">
                            <input type="submit" class="btn btn-primary pull-right" value="Login" />
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </body>
</html>

