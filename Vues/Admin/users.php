<?php 
$title = 'Users Information';
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
                                                <p>Welcome to our <?=$title?> page.</p>
                                            </div>
                                        </div>                                           
                                        
                                        <div class="nk-block-head-content">
                                                        <a href="#" class="btn btn-primary"  data-bs-toggle="modal" data-bs-target="#add-user"><em class="icon ni ni-plus"></em><span>New User</span></a>
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
                                                            <th>username</th>
                                                            <th>email</th>
                                                            <th>Number</th>
                                                            <th>Statut</th>
                                                            <th>Act/Des</th>
                                                            <th></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                                        
                                                        <?php $cnt = 1;
                                                        foreach ($getUsers as $user) : ?> 
                                                            <tr>
                                                                <td><?= $cnt ?></td>
                                                                <td><?=$user->username?></td>
                                                                <td><?=$user->email?></td>
                                                                <td><?=$user->phone?></td>
                                                        <?php 
                                                        if ($user->statut == 0) {
                                                            echo "<td> <span class='text-danger'> Desactiver</span></td>";
                                                        } else {
                                                            echo "<td> <span class='text-success'> Activer</span></td>";
                                                        }
                                                        if($user->statut == 0){
                                                        echo "<td><button type='button'  id='".$user->user_id."' name='activer' class='btn btn-xs btn-round btn-dark activers'><span class='glyphicon glyphicon-ok' ></span> Activer?</button></td>";
                                                        } else {
                                                            echo "<td>	<button type='button'  id='".$user->user_id."' name='desactiver' class='btn btn-round btn-xs btn-danger desactivers'><span class='glyphicon glyphicon-remove' ></span> Desactiver?</button>
                                                            </td>";}?>
                                                                <td>
                                                                    
                                                            <ul class="nk-tb-actions gx-1">
                                                                <li>
                                                                    <div class="drodown">
                                                                        <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-end">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="#" id="<?= $user->user_id ?>"><em class="icon ni ni-eye"></em><span>View </span></a></li>
                                                                                <li><a href="#"  id="<?= $user->user_id ?>" class="view_data"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                                                <li><a href="#" class="delete"  id="<?= $user->user_id ?>" ><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
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
                </div>
                <!-- content @e -->
    <!-- app-root @e -->
    <!-- JavaScript -->
   
    <?php 
include('Public/modals/adduser.php');
include 'Public/modals/edituser.php';
include('Public/includes/footer.php');
?>

<script type="text/javascript" src="Public/ajax/user.js"></script>