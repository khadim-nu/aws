<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Poker-With-Friends</title>

        <link href="<?= base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
        <link href="<?= base_url(); ?>assets/css/all.css" rel="stylesheet">

        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/bootstrap.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/parsley.min.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/all.js"></script>
        <script type="text/javascript" src="<?= base_url(); ?>assets/js/jquery-ui.min.js"></script>

        <script type="text/javascript">var switchTo5x = true;</script>
        <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
        <script type="text/javascript">stLight.options({publisher: "64b58c40-8aa9-4f39-86fc-f44f5fed0280", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    </head>
    <body>
        <div id="fb-root"></div>
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=907747149242350";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <div class="wrapper">
            <div class="header">
                <h1 class="title">Poker-With-Friends™</h1>
                <h4 class="title">Easy to Play – Hard to Master</h4>
            </div>
            <div class="container ">
                <div class="row" align-center>
                    <div class="left-block col-md-6">
                        <img id="logo" class="img-responsive" src="<?= base_url(); ?>assets/images/small_board_final.jpg" alt="Logo" />
                    </div>
                    <div class="right-block col-md-6">
                        <li><stong class="heading">Poker-With-Friends™ </stong></li>
                        <li>Free Beta version poker game coming.</li>
                        <li>Play poker with 1, 2, 3, or 4 friends.</li>
                        <li>No ads!  No in-app fees!</li>
                        <li>"One Card Discard" to speed up the game.</li>
                        <li>Play offense and defense.</li>
                        <div class="col-md-3">
                            <img id="logo-2" src="<?= base_url(); ?>assets/images/poker-img.jpg" alt="Logo" />
                        </div>

                    </div>
                </div>

                <div class="row">
                    <p>We are developing a new version of five-card poker, played by placing cards on a board layout.  It is a combination of poker and a popular word game.
                    Please let us know if you think you would like to play this game.  Nothing will download as we are simply asking for your opinion. Thank you!</p>
                </div>
                <div class="col-md-8">
                    <form id="servey" data-parsley-validate  class="form-horizontal" action="<?= base_url(); ?>index.php/welcome/submit_servey" method="post">
                        <div class="row">
                            <div class="col-md-7 text-right">
                            Would you like to play this game?
                            </div>
                            <div class="col-md-5">
                                <label class="opinion">
                                    Yes <input type="radio"  id="q128" class="radio-btn" name="opinion" value="1" data-parsley-trigger="change" required="required" />
                                </label> 
                                <label class="opinion" >
                                    No <input type="radio" id="q128" class="radio-btn" name="opinion" value="2" data-parsley-trigger="change" required="required" />
                                </label> 
                                <label class="opinion" >
                                    Maybe <input type="radio" id="q128" class="radio-btn" name="opinion" value="3" data-parsley-trigger="change" required="required" /> 
                                </label> 
                                                    <!--<input class="form-control custom" type="email" name="email" data-parsley-trigger="change" required="required" data-parsley-type="email" />-->

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7">
                            </div>
                            <div class="col-md-5 ">
                                <p class="text-info"><?= (!empty($this->session->flashdata('message')) ? $this->session->flashdata('message') : "") ?></p> 
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-7">
                                <span class='st_facebook_large pull-right' displayText='Facebook'></span>
                            </div>
                            <div class="col-md-5 ">
                                <div class="align-center">
                                    <input class=" btn btn-info custom-btn" type="submit" value="Submit"/>
                                </div>
                            </div>
<!--                            <div class="col-md-2 fb-like-btn">
                                <span class='st_facebook_large' displayText='Facebook'></span>
                                <span class='st_twitter_large' displayText='Tweet'></span>
                                <span class='st_email_large' displayText='Email'></span>
                            </div>-->

                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                    <stong class="heading">For More Information </stong>
                    <div>
                    Please contact us at
                    </div>
                    <div>
                        <strong id="email"><a href="mailto:rmadzel@hotmail.com?Subject=Poker-with-friends™" target="_top">rmadzel@hotmail.com</a></strong>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="col-md-4">
                    <h4 class="footer-title">Poker-With-Friends™</h4>
                </div>
                <div class="col-md-5 sub-title">
                    <h5>Easy to Play – Hard to Master</h5>
                </div>
                <div class="col-md-2 pull-right counter">
                    <span class="counts" id="site-counts">  <strong><?= $yes_count ?></strong></span>
                    &nbsp;&nbsp;
                    <span class="counts" id="site-counts">  <strong><?= $no_count ?></strong></span>
                    &nbsp;&nbsp;
                    <span class="counts" id="site-counts">  <strong><?= $maybe_count ?></strong></span>
                    &nbsp;&nbsp;
                    <span class="counts" id="site-counts">  <strong><?= $visits_count ?></strong></span>
                </div>
            </div>
        </div>

    </body>
</html>