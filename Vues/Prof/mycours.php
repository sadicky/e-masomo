<?php
$title = 'Mes Cours | E-Learning';
include('Public/includes/header.php');
$active2 = true;
// print_r($getPEC);die();
?>

<body class="nk-body bg-lighter npc-general has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            <div class="nk-sidebar nk-sidebar-fixed is-dark " data-content="sidebarMenu">
                <div class="nk-sidebar-element nk-sidebar-head">
                    <div class="nk-menu-trigger">
                        <a href="#" class="nk-nav-toggle nk-quick-nav-icon d-xl-none" data-target="sidebarMenu"><em class="icon ni ni-arrow-left"></em></a>
                        <a href="#" class="nk-nav-compact nk-quick-nav-icon d-none d-xl-inline-flex" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                    </div>
                    <div class="nk-sidebar-brand">
                        <a href="<?= WEBROOT ?>Dashboard" class="logo-link nk-sidebar-logo">
                            <img width="200px" src="assets/public/images/logo-dark-text.png" srcset="assets/public/images/logo-dark-text.png 5x" alt="logo">
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->

                <?php include('Public/includes/menuprof.php'); ?>

            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->

                <?php include('Public/includes/tophprof.php'); ?>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block">
                                    <div class="container">
                                        <nav>
                                            <ul class="breadcrumb breadcrumb-arrow">
                                                <li class="breadcrumb-item"><a href="<?= WEBROOT ?>DashboardProf">Dashboard</a></li>
                                                <li class="breadcrumb-item active"><a href="#"><?= $getP->dep ?></a></li>
                                                <li class="breadcrumb-item active"><a href="#"><?= $getP->classe ?></a></li>
                                                <li class="breadcrumb-item active"><a href="#"><?= $getP->promo ?></a></li>
                                                <li class="breadcrumb-item active"><a href="#"><?=$title?></a></li>
                                            </ul>
                                        </nav>
                                        <hr>
                                        <div class="row">
                                            <?php include 'Public/includes/liste.php';?>
                                            <div class="col-md-9">
                                                <div class="card p-2">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <?php foreach($getPEC as $data):?>
                                                                <ul class="link-list-opt">
                                                                     <li><a href="#"><em class="icon ni ni-check-circle-cut"></em><span><?=$data->cours?></span></a></li>
                                                                </ul>
                                                            <?php endforeach?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- app-root @e -->
                <!-- JavaScript -->
                <?php
                include('Public/includes/footer.php');
                ?>