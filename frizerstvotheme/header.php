<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Frizerstvo Tema</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>

    <!-- <p><h1>THE LAST TRUE RESPRT FPR MEN,<br>WHO SEEK TIMELESS STYLE</h1></p>
    <p><h2> time away from time. Get your hair and<br> beard done ath the same time</p>
    <p><button>I NEED THIS IN MY LIFE</button></p> -->

    <?php 
        $frizerstvo_classes = (is_front_page()) ? array( 'frizerstvo-class', 'my-class' ) : array( 'no-frizerstvo-class' );
    ?>

    <body <?php body_class( $frizerstvo_classes ); ?>>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12">
                    <div class="header-container text-center" style="background-image: url(<?php header_image(); ?>)">

                        <div class="header-content">

                        </div><!-- .header-content -->

                        <div class="nav-container">

                        </div><!-- .nav-container -->

                    </div><!-- .header-container -->
                </div><!-- .col-xs-12 -->
            </div><!-- .row -->
        </div><!-- .container-fluid -->

        <?php wp_nav_menu(array('theme_location'=>'primary')); ?>