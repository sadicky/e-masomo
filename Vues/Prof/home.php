<?php
$title = 'My Dashboard | E-Learning';
include('Public/includes/header.php');
// var_dump($getP);die();
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
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title">Tableau de Bord</h3>
                                        </div>
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->

                                <div class="nk-block">
                                    <div class="container">
                                        <div class="row">                                            
                                        <div class="col-sm-3 col-lg-3 col-xxl-3">
                                            <?php foreach($getPc as $pc) :?>
                                            <div class="gallery card">
                                                <a  href="<?=WEBROOT?>MyClassProf">
                                                    <img class="w-100 rounded-top" src="assets/images/thumbnails.jpg" alt="">
                                                </a>
                                                <div class="gallery-body card-inner align-center justify-between flex-wrap g-2">
                                                    <div class="user-card">
                                                        <div class="user-info">
                                                            <h5><?=$pc->classe?></h5>
                                                            <span class="sub-text"><?=$pc->dep?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach?>
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