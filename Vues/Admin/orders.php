<?php 
$title = 'Repair Order Information';
include('Public/includes/header.php');
?>

<style>
p.inline {display: inline-block;}
span { font-size: 13px;}
</style>
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
                        <a href="html/index.html" class="logo-link nk-sidebar-logo">
                            <img class="logo-light logo-img" src="assets/images/logo.png" srcset="assets/images/logo2x.png 2x" alt="logo">
                            <img class="logo-dark logo-img" src="assets/images/logo-dark.png" srcset="assets/images/logo-dark2x.png 2x" alt="logo-dark">
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
                                                        <a href="<?=WEBROOT?>neworder" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Create Repair Order</span></a>
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
                                                            <th>BarCode</th>
                                                            <th>Device</th>
                                                            <th>Info</th>
                                                            <th>Tech</th>
                                                            <th>Status</th>
                                                            <th>Payment</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>                                                        
                                                        <?php 
                                                        foreach ($getOrders as $order) : ?> 
                                                            <tr>
                                                                <td><?= $generator->getBarcode($order->uuid, $generator::TYPE_CODE_128);?></td>
                                                                <td><a href="index.php?p=order&id=<?= $order->uuid ?>" class="btn-link">
                                                                    <span class="badge rounded-pill bg-primary"><?= $order->name_brand ?></span>
                                                                     <i> <?= $order->name ?> <?= $order->model ?></i>
                                                                     </a>
                                                                </td>
                                                                <td>Order: <?= $order->order_id ?> | <b><a href="<?=WEBROOT?>order" class="btn-link">#<?=$order->uuid?></a></b> | Serial Number: <i><?=$order->serial_number?></i><br>
                                                                <span class="text text-primary"><?= $order->customer_name ?>(<?= $order->customer_tel ?>)</span><span class="text text-danger fw-bold" > - Total:<?= $order->price ?> Fbu</span>
                                                                </td>
                                                                <td>
                                                                    <b><?= $order->names ?></b>
                                                                </td>
                                                                <td>
                                                                    <?php
                                                                            if($order->body=='Open'){
                                                                                echo '<span class="text text-primary fw-bold">Open</span>';
                                                                            }
                                                                            else if($order->body=='Pending'){
                                                                                echo '<span class="text text-warning fw-bold">Pending</span>';
                                                                            }else if($order->body=='Resolved'){                                                                            
                                                                                echo '<span class="text text-success fw-bold">Resolved</span>';
                                                                            }else{
                                                                                echo '<span class="text text-danger fw-bold">Closed</span>';
                                                                            }
                                                                                
                                                                    ?>
                                                                </td>
                                                                <?php  
                                                                        if($order->payment_status == 1){
                                                                            echo '<td><span class="badge rounded-pill bg-success">Paid</span></td>';
                                                                        }else{
                                                                            echo '<td><span class="badge rounded-pill bg-danger">Unpaid</span></td>';
                                                                        }
                                                                   
                                                                ?>
                                                            </tr>                                                        
                                                        <?php endforeach ?>
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
include('Public/includes/footer.php');
?>
