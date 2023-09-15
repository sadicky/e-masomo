<?php
$title = 'Matiere';
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
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"><?= $title ?></h3>
                                        </div>

                                        <div class="nk-block-head-content">
                                            <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#add-matiere"><em class="icon ni ni-plus"></em><span>Nouvelle Matiere</span></a>
                                        </div><!-- .nk-block-head-content -->
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->


                                <div class='col-sm-12' id="message"></div>
                                <div class='col-sm-12' id="messages"></div>


                                <div class="nk-block nk-block-lg">
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                            <table class="datatable-init-export nowrap table" data-export-title="Export">
                                                <thead>
                                                    <tr class="tb-tnx-head">
                                                        <th>#</th>
                                                        <th>Matière</th>
                                                        <th>Cours</th>
                                                        <th>Classe</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $cnt = 1;
                                                    foreach ($getClasses as $device) : ?>
                                                        <tr>
                                                            <td><?= $cnt ?></td>
                                                            <td><b><?= $device->classe ?></b></td>
                                                            <td><b><?= $device->classe ?></b></td>
                                                            <td><?= $device->dep ?></td>
                                                            <td>
                                                                <a href="#" id="<?= $device->classe_id ?>" class="view_data btn btn-primary btn-xs"><em class="icon ni ni-edit"></em><span>Edit</span></a>
                                                                <a href="#" class="delete  btn btn-danger btn-xs" id="<?= $device->classe_id ?>"><em class="icon ni ni-trash"></em><span>Delete</span></a>
                                                            </td>
                                                        </tr>
                                                    <?php $cnt++;
                                                    endforeach ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div> <!-- nk-block -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- app-root @e -->
                <!-- JavaScript -->
                <?php
                include('Public/modals/addmatiere.php');
                include 'Public/modals/editclasse.php';
                include('Public/includes/footer.php');
                
                include('Public/includes/footer.php');
                ?>

                <script type="text/javascript" src="Public/ajax/matiere.js"></script>