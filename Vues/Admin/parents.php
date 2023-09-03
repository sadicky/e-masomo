<?php 

$title = 'Parents';
include('Public/includes/header.php');
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
                        <a href="<?=WEBROOT?>Dashboard" class="logo-link nk-sidebar-logo">
                            <img width="200px" src="assets/public/images/logo-dark-text.png" srcset="assets/public/images/logo-dark-text.png 5x" alt="logo">
                        </a>
                    </div>
                </div><!-- .nk-sidebar-element -->

                <?php include('Public/includes/menu.php'); ?>

            </div>
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                <?php include('Public/includes/toph.php'); ?>
               
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                <div class="nk-block-head nk-block-head-sm">
                                    <div class="nk-block-between">  
                                        <div class="nk-block-head-content">
                                            <h3 class="nk-block-title page-title"><?=$title?></h3>
                                            <div class="nk-block-des text-soft">
                                                <p>Gestion de la page <?=$title?>.</p>
                                            </div>
                                        </div>                                                          
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
                                                            <th>Matricule</th>
                                                            <th>Noms</th>
                                                            <th>Departement</th>
                                                            <th>Classe</th>
                                                            <th>Promotion</th>
                                                            <th>Registered</th>
                                                            <th>Statut</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                                        
                                                        <?php $cnt = 1;
                                                        foreach ($getParents as $user) : ?> 
                                                            <tr>
                                                                <td><?= $cnt ?></td>
									                            <td><u><a href='index.php?p=etuddet&id=<?=$user->mat?>' > <?=$user->mat?></u></a></td>
                                                                <td><a href="index.php?p=viewetud&id=<?=$user->mat?>"><?=$user->nom?> <?=$user->prenom?></a></td>
                                                                <td><?=$user->dep?></td>
                                                                <td><?=$user->classe?></td>
                                                                <td><?=$user->promo?></td>
                                                                <td><?php 
                                                                if($user->verified_at=='') echo "Pas encore";
                                                                else echo "Verifié";
                                                                ?></td>
                                                                    <?php 
                                                                    if ($user->access == 0) {
                                                                        echo "<td> <span class='text-danger'> Desactiver</span></td>";
                                                                    } else {
                                                                        echo "<td> <span class='text-success'> Activer</span></td>";
                                                                    }?>
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
// include('Public/modals/addetudia.php');
// include 'Public/modals/addprofcours.php';
// include 'Public/modals/editprof.php';
include('Public/includes/footer.php');
?>

<!-- <script type="text/javascript" src="Public/ajax/profs.js"></script> -->