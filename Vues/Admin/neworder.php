<?php 
$title = 'New Order';
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
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                
                                
                                <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered">
                                            <div class="card-inner">
                                                <form class="mt-2" id="formulaire">
                                                    <div class="nk-wizard-content">
                                                        <div class="row g-gs">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Customer Name</label>
                                                                    <input type="text" data-msg="Customer name required" class="form-control required" required name="names"  id="names" placeholder="Customer Name">
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Customer Number</label>
                                                                    <input type="text" class="form-control" name="phone"  id="phone" placeholder="Customer Phone Number">
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Diagnostic</label>
                                                                    <textarea name="diag" id="diag" class="summernote-minimal required"></textarea>
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Serial Number</label>
                                                                    <input type="text" class="form-control" required name="serial"  id="serial" placeholder="Serial Number">
                                                                </div>
                                                            </div>
                                                            <!--col-->
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="war">Warranty</label>
                                                                    <select class="form-control" name="warranty" id="warranty">
                                                                        <option value="0">No</option>
                                                                        <option value="1">Yes</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Brand</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" id="brand" name="brand" >
                                                                            <option value="" disable>Select Brand</option>
                                                                            <?php foreach ($getBrands as $brand) {?>
                                                                                <option value='<?=$brand->brand_id?>'><?=$brand->name_brand?></option>				
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Device</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" id="device" name="device" >
                                                                            <option value="" disable>Select Device</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Issue</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select"  id="defect" name="defect" >
                                                                            <option value="" disable>Select Issues</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label">Technician</label>
                                                                    <div class="form-control-wrap">
                                                                        <select class="form-select" id="tech" name="tech" >
                                                                            <option value="" disable>Select Technician</option>
                                                                            <?php foreach ($getTechnicians as $tech) {?>
                                                                                <option value='<?=$tech->tech_id?>'><?=$tech->names?></option>				
                                                                            <?php } ?>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="form-label" for="room-no-add">Amount Total</label>
                                                                    <input type="number" class="form-control" name="total"  id="total">
                                                                </div>
                                                            </div>                                                           
                                                            <!--col-->
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <button class="btn btn-primary btn-block" type="submit" data-bs-dismiss="modal">Add New Repair Order</button>
                                                                </div>
                                                            </div>
                                                        </div><!-- .row -->
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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

<script type="text/javascript" src="Public/ajax/order.js"></script>
<script type="text/javascript" src="Public/ajax/join.js"></script>