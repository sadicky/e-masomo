<?php 
$title = 'Repair Order Information';
include('Public/includes/header.php');

// var_dump($getOrder);die();
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
                                
                                <div class="nk-block">
                                    <div class="invoice">
                                        <div class="invoice-action">
                                            <a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" href="html/invoice-print.html" target="_blank"><em class="icon ni ni-printer-fill"></em></a>
                                        </div><!-- .invoice-actions -->
                                        <div class="invoice-wrap">
                                            <div class="invoice-brand text-center">
                                                <img src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="">
                                            </div>
                                            <div class="invoice-head">
                                                <div class="invoice-contact">
                                                    <span class="overline-title">Invoice To</span>
                                                    <div class="invoice-contact-info">
                                                        <h4 class="title"><?=$order->customer_name?></h4>
                                                        <ul class="list-plain">
                                                            <li><em class="icon ni ni-call-fill"></em><span><?=$order->phone?></span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="invoice-desc">
                                                    <h3 class="title"><?= $generator->getBarcode($order->uuid, $generator::TYPE_CODE_128);?></h3>
                                                    <ul class="list-plain">
                                                        <li class="invoice-id"><span>Invoice ID</span>:<span>#<?=$order->uuid?></span></li>
                                                        <li class="invoice-date">
                                                        <?php
                                                        if($order->payment_status == 1){
                                                                            echo "<span>".$order->body." - <span class='badge rounded-pill bg-success' style='color:white'>Paid</span>";
                                                                        }else{
                                                                            echo "<span>".$order->body." - <span class='badge rounded-pill bg-danger' style='color:white'>Unpaid</span>";
                                                                        }
                                                          ?>
                                                    </span></li>
                                                    </ul>
                                                </div>
                                            </div><!-- .invoice-head -->
                                            <div class="invoice-bills">
                                                <div class="row">
                                                    <div class="col-md-6">8</div>
                                                    <div class="col-md-6">
                                                    <p> <h4>Device information</h4>
                                                        <b>Brand :</b> <?=$order->name_brand?><br>
                                                        <b>Name : </b><?=$order->name?><br>
                                                        <b>Model :</b> <?=$order->model?><br>
                                                        <b>Serial number :</b> <?=$order->serial_number?>
                                                     </p>
                                                     <p>
                                                        <h4>Customer information</h4>
                                                        <b>Name : </b><?=$order->customer_name?><br>
                                                        <b>Phone :</b> <?=$order->phone?><br>
                                                    </p>
                                                    <p>
                                                        <h4>Payment information</h4>
                                                        <b>Total : </b><?=$order->price?> fbu<br>
                                                        <b>Prepaid :</b> <?php if($order->montant==''){
                                                            echo '0 fbu';
                                                            }
                                                            else{
                                                                echo $order->montant;
                                                            }?><br>
                                                    </p>
                                                    <p>
                                                    <b>Repaired by :</b> <?=$order->names?><br>
                                                     </p>
                                                    </div>
                                                </div>
                                            </div><!-- .invoice-bills -->
                                        </div><!-- .invoice-wrap -->
                                    </div><!-- .invoice -->
                                </div><!-- .nk-block -->
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
