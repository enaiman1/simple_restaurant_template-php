<?php
$companyName = "Franklins Fine Dining";
include('./assets/includes/arrays.php');

?>

<html> 
    <head>
        <title><?php echo TITLE; ?></title>
        <link href="/assets/styles.css" rel="stylesheet">
    </head>

    <body id="final-example">
        <div class="wrapper">

            <div id="banner">
                <a href="/" title="Return to Home">
                    <img src="./assets/img/banner.png" alt="Franklins Fine Dinning logo">
                </a>
            </div> <!--end banner -->

            <div id="nav">
                    <?php include('./assets/includes/nav.php'); ?>
            </div> <!--end nav -->

            <div class="content">