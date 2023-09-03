<?php 
$title = 'Historiques de Réparations';
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
                                        </div>                              
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                <div class="nk-block"> 
                                        
                            <form action="<?=WEBROOT?>rapports" class="form-inline pull-right" method="post">
                                        <button type="submit" class="btn btn-link" name="tous">Afficher tous</button>
                                 </form>
                                <form role="form" method="post" class="form-inline" action="<?=WEBROOT?>rapports">
                                    <div class="form-group">
                                        <label>Du</label>
                                        <input class="form-control" type="date" id="fromdate" name="fromdate" required="true">
                                    </div>
                                    <div class="form-group">
                                        <label>Au</label>
                                        <input class="form-control" type="date" id="todate" name="todate" required="true">
                                    </div>
                                    
                                      <div class="form-group">
                                        <b><label>Réparateur</label> <span class="text-danger"></span></b>			
                                        <select name="rep" id="rep" class='form-control js-select2'>
                                          <option selected disabled>Choisir un Réparateur</option>
                                            <option value='all'>Tous</option>	
                                          <?php foreach ($getTechnicians as $f) {?>
                                            <option value='<?=$f->tech_id?>'><?=$f->names?></option>				
                                          <?php } ?>
                                        </select>
                                      </div>

                                    <div class="form-group has-success">
                                        <button type="submit" class="btn btn-primary" name="submit">Rechercher</button>
                                    </div>
                                    </form>
                                    </div>
                                    
                            <?php if (isset($_POST['submit'])) : ?>
                                <div class="col-lg-12" style="padding-top:10px;">
                                    <?php
                                    $fdate = $_POST['fromdate'];
                                    $tdate = $_POST['todate'];
                                    $rep = $_POST['rep'];
                                    ?>                                    

                                    <div class="panel panel-default">
                                        <div class="panel-heading" align="center" style="color:blue">Rapport de Réparations du <?php echo $fdate ?> Au <?php echo $tdate ?>
                                    </div>
                                    
                                        <div class="panel-body">

                                            <div class="col-md-12">

                                                <hr>
                                <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                    <table class="datatable-init-export nowrap table" data-export-title="Export" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                             <th>#</th>
                                                              <th>Clients</th>
                                                              <th>Total</th>
                                                              <th>Motif de Reparation</th> 
                                                              <th>Réparateur</th>
                                                              <th>Statut</th>
                                                              <th>Date Entree</th>
                                                              <th>Crée par</th>
                                                            </tr>
                                                        </thead>
                                                        <?php
                                                        
                                                        $db = getConnection();
                                                        if($rep=='all'){
                                                          $ret = $db->query("SELECT * FROM tbl_users as u, tbl_repair_orders as o,tbl_defect as d,tbl_status as s,tbl_tech as t, tbl_brands as b,tbl_device as dv
                                                          WHERE o.tech_id = t.tech_id and o.repair_status_id = s.status_id and o.defect_id = d.defect_id and d.device_id = dv.device_id 
                                                          and dv.brand_id = b.brand_id and u.user_id=o.user_id and (o.date BETWEEN '$fdate' and '$tdate')");
                                                  }else{
                                                        $ret = $db->query("SELECT * FROM tbl_users as u, tbl_repair_orders as o,tbl_defect as d,tbl_status as s,tbl_tech as t, tbl_brands as b,tbl_device as dv
                                                        WHERE o.tech_id = t.tech_id and o.repair_status_id = s.status_id and o.defect_id = d.defect_id and d.device_id = dv.device_id 
                                                        and dv.brand_id = b.brand_id and u.user_id=o.user_id and (o.date BETWEEN '$fdate' and '$tdate') and t.tech_id='$rep'");
                                                        }
                                                        $cnt = 1;
                                                        $orders = $ret->fetchAll(PDO::FETCH_OBJ);
                                                        foreach ($orders as $order) {
                                                        ?>

                                                            <tr class="odd gradeX">
                                                              <td align="center"><?= $order->order_id ?></td>
                                                              <td><b><?= $order->customer_name ?></b></td>
                                                              <td><?=number_format($order->montant ,0,',', ' ') ?> Fbu</td>
                                                              <td><?= $order->diagnostic ?></td>
                                                              <td><?= $order->names ?></td>
                                                              <td>
                                                                
                                                              <?php
                                                                            if($order->body=='Open'){
                                                                                echo '<span class="text text-danger fw-bold">Open</span>';
                                                                            }
                                                                            else if($order->body=='Pending'){
                                                                                echo '<span class="text text-warning fw-bold">Pending</span>';
                                                                            }else if($order->body=='Resolved'){                                                                            
                                                                                echo '<span class="text text-primary fw-bold">Resolved</span>';
                                                                            }else{
                                                                                echo '<span class="text text-dark fw-bold">Closed</span>';
                                                                            }
                                                                                
                                                                    ?>
                                                              </td>
                                                              <td><?= $order->date ?></td>
                                                              <td><?= $order->username ?></td>  
                                                            </tr>
                                                        <?php
                                                        } ?>
                                                        
                                                      <?php
                                                        //Yearly Expense
                                                        
                                                        if($rep=='all'){
                                                            $query ="SELECT sum(montant) as montant FROM tbl_users as u, tbl_repair_orders as o,tbl_defect as d,tbl_status as s,tbl_tech as t, tbl_brands as b,tbl_device as dv
                                                            WHERE o.tech_id = t.tech_id and o.repair_status_id = s.status_id and o.defect_id = d.defect_id and d.device_id = dv.device_id 
                                                            and dv.brand_id = b.brand_id and u.user_id=o.user_id and (o.date BETWEEN '$fdate' and '$tdate') order by o.order_id desc";                                                         
                                                                $req=$db->query($query);
                                                                $req->execute();
                                                                $g=$req->fetch(PDO::FETCH_OBJ);
                                                                $sum_total=$g->montant;
                                                                if($sum_total) echo "<h3>Total: <span style='color:blue'>".number_format($sum_total,0,',', ' ')." fbu</span></h3>";
                                                                else echo"Aucune valeur touvée pour ces dates";
                                                                }else{                                                          
                                                                $query="SELECT sum(montant) as montant,t.names as names FROM tbl_users as u, tbl_repair_orders as o,tbl_defect as d,tbl_status as s,tbl_tech as t, tbl_brands as b,tbl_device as dv
                                                                WHERE o.tech_id = t.tech_id and o.repair_status_id = s.status_id and o.defect_id = d.defect_id and d.device_id = dv.device_id 
                                                                and dv.brand_id = b.brand_id and u.user_id=o.user_id and (o.date BETWEEN '$fdate' and '$tdate') and t.tech_id='$rep' ";
                                                                
                                                                $req=$db->query($query);
                                                                $req->execute();
                                                                $g=$req->fetch(PDO::FETCH_OBJ);
                                                                $sum_total=$g->montant;
                                                                if($sum_total) echo "<h3>Total Pour ".$g->names.": <span style='color:blue'>".number_format($sum_total,0,',', ' ')." fbu</span></h3>";
                                                                else echo"Aucune valeur touvée pour ces dates";
                                                            }
                                                          ?>
                                                         
                                                    </table>
                                                </div>
                                                        </div></div>




                                            </div>
                                        </div>
                                    </div><!-- /.panel-->
                                </div>

                            <?php endif ?>
                            
                       

                            <?php if (isset($_POST['tous'])) : ?>
                                <div class="col-lg-12" style="padding-top:10px;">

                                    <div class="panel panel-default">
                                        <div class="panel-body">

                                            <div class="col-md-12">

                                                <hr />
                                <div class="nk-block nk-block-lg">
                                        <div class="card card-bordered card-preview">
                                            <div class="card-inner">
                                                    <table id="dataTables-example" class="datatable-init-export nowrap table" data-export-title="Export" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                                        <thead>
                                                            <tr>
                                                            <tr>
                                                                <th>#</th>
                                                              <th>Clients</th>
                                                              <th>Total</th>
                                                              <th>Motif de Reparation</th>
                                                              <th>Réparateur</th>
                                                              <th>Statut</th>
                                                              <th>Date</th>
                                                                <th>Crée par</th>
                                                            </tr>
                                                            </tr>
                                                        </thead>
                                                        <?php

                                                        $db = getConnection();
                                                        $ret = $db->query("SELECT * FROM tbl_users as u, tbl_repair_orders as o,tbl_defect as d,tbl_status as s,tbl_tech as t, tbl_brands as b,tbl_device as dv
                                                        WHERE o.tech_id = t.tech_id and o.repair_status_id = s.status_id and o.defect_id = d.defect_id and d.device_id = dv.device_id 
                                                        and dv.brand_id = b.brand_id and u.user_id=o.user_id  order by o.order_id desc");

                                                        $cnt = 1;
                                                        $orders = $ret->fetchAll(PDO::FETCH_OBJ);
                                                        foreach ($orders as $order) {
                                                        ?>

                                                            <tr class="odd gradeX">
                                                              <td align="center"><b><?= $order->uuid ?></b></td>
                                                              <td><b><?= $order->customer_name ?></b></td>
                                                              <?php if($order->montant==''){
                                                            echo  '<td> 0 fbu</td>';
                                                            }
                                                            else{
                                                                echo "<td>".number_format($order->montant ,0,',', ' ')." fbu</td>";
                                                            }?>
                                                              <td><?= $order->diagnostic ?></td>
                                                              <td><?= $order->names ?></td>
                                                              <td>
                                                                
                                                                <?php
                                                                              if($order->body=='Open'){
                                                                                  echo '<span class="text text-danger fw-bold">Open</span>';
                                                                              }
                                                                              else if($order->body=='Pending'){
                                                                                  echo '<span class="text text-warning fw-bold">Pending</span>';
                                                                              }else if($order->body=='Resolved'){                                                                            
                                                                                  echo '<span class="text text-primary fw-bold">Resolved</span>';
                                                                              }else{
                                                                                  echo '<span class="text text-dark fw-bold">Closed</span>';
                                                                              }
                                                                                  
                                                                      ?>
                                                              </td>
                                                              <td><?= $order->date ?></td>
                                                              <td><?= $order->username ?></td>                                                                
                                                            </tr>
                                                        <?php
                                                            $cnt = $cnt + 1;
                                                        } ?>

                                                    </table>
                                                    </div>
                                                    </div>
                                                </div>




                                            </div>
                                        </div>
                                    </div><!-- /.panel-->
                                </div>

                            <?php endif ?>
<!-- .row -->
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