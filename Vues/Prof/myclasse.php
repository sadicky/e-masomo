<?php
$title = 'Mes Etudiants | E-Learning';
include('Public/includes/header.php');
$active1 = true;
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
                                                <li class="breadcrumb-item active"><a href="#">Mes Etudiants</a></li>
                                            </ul>
                                        </nav>
                                        <hr>
                                        <div class="row">
                                            <?php include 'Public/includes/liste.php';?>
                                            <div class="col-md-9">
                                                <div class="card p-2">
                                                    <div class="container-fluid">
                                                        <div class="row">
                                                            <?php foreach ($getEtudiantClasse as $getEC) : ?>
                                                                <div class="col-sm-6 col-lg-4 col-xxl-3">
                                                                    <div class="card">
                                                                        <div class="card-inner">
                                                                            <div class="team">
                                                                                <div class="team-options">
                                                                                    <div class="drodown">
                                                                                        <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                                            <ul class="link-list-opt no-bdr">
                                                                                                <li><a href="#" id="<?= $getEC->etudiant_id ?>"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                                                <li><a href="#" id="<?= $getEC->etudiant_id ?>"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="user-card user-card-s2">
                                                                                    <div class="user-avatar md bg-primary">
                                                                                        <img class="img-thumbnail" src="<?= $getEC->photo ?>" alt="photo etudiant">
                                                                                        <div class="status dot dot-lg dot-success"></div>
                                                                                    </div>
                                                                                    <div class="user-info">
                                                                                        <h6><?= $getEC->prenom ?> <?= $getEC->nom ?></h6>
                                                                                        <span class="sub-text"><?= $getEC->email ?></span>
                                                                                    </div>
                                                                                </div>
                                                                            </div><!-- .team -->
                                                                        </div><!-- .card-inner -->
                                                                    </div><!-- .card -->
                                                                </div><!-- .col -->
                                                            <?php endforeach ?>
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