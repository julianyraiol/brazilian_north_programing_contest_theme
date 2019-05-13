<!doctype html>
<html>
<head>
    <?php $home = get_template_directory_uri(); ?>
        <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>III Maratona de Programação</title>

    <!-- Bootstrap core CSS -->

    <link rel="icon" href="img/logo.ico">
    <link href="<?= $home ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i|Share+Tech" rel="stylesheet">

    <link href="<?= $home ?>/assets/css/style.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="<?= $home ?>/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template -->
    <link href="<?= $home ?>/assets/css/grayscale.css" rel="stylesheet">


    <?php   wp_head(); ?>
</head>
<body id="page-top">

<?php

            wp_nav_menu( array( 
                // 'menu_class' => 'navbar navbar-expand-lg navbar-light fixed-top', 
                'menu_class' => 'navbar-nav ml-auto',

                'theme_location' => 'header-menu', 
                'container_class' => 'navbar navbar-expand-lg navbar-light fixed-top' ,
                'container_id' => 'mainNav'
        ));

          
            // wp_nav_menu( $args ); 
        ?>

