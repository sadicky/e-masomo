<?php 
$title = 'Dashboard | E-Learning';
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
                                            <h3 class="nk-block-title page-title">Tableau de Bord</h3>
                                         </div>                              
                                    </div><!-- .nk-block-between -->
                                </div><!-- .nk-block-head -->
                                
                                <div class="nk-block">
                                    <div class="row g-gs">
                                        <div class="col-xxl-6">
                                            <div class="row g-gs">
                                                <div class="col-md-12">
                                                    <div class="card">
                                                        <div class="card-inner">
                                                            <div class="card-title-group align-start mb-2">
                                                                <div class="card-title">
                                                                    <h6 class="title">Students Enrolement</h6>
                                                                    <p>In last 30 days enrolement of students</p>
                                                                </div>
                                                                <div class="card-tools">
                                                                    <em class="card-hint icon ni ni-help-fill" data-bs-toggle="tooltip" data-bs-placement="left" title="Students Enrolement"></em>
                                                                </div>
                                                            </div>
                                                            <div class="align-end gy-3 gx-5 flex-wrap flex-md-nowrap flex-lg-wrap flex-xxl-nowrap">
                                                                <div class="nk-sale-data-group flex-md-nowrap g-4">
                                                                    <div class="nk-sale-data">
                                                                        <span class="amount">5490 <span class="change down text-danger"><em class="icon ni ni-arrow-long-down"></em>16.93%</span></span>
                                                                        <span class="sub-title">This Month</span>
                                                                    </div>
                                                                    <div class="nk-sale-data">
                                                                        <span class="amount">1480<span class="change up text-success"><em class="icon ni ni-arrow-long-up"></em>4.26%</span></span>
                                                                        <span class="sub-title">This Week</span>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-sales-ck sales-revenue">
                                                                    <canvas class="student-enrole" id="enrolement"></canvas>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div><!-- .col -->
                                            </div><!-- .row -->
                                        </div><!-- .col -->
                                        <div class="col-md-6 col-xxl-8">
                                            <div class="card h-100">
                                                <div class="card-inner">
                                                    <div class="card-title-group align-start pb-3 g-2">
                                                        <div class="card-title card-title-sm">
                                                            <h6 class="title">Active Students</h6>
                                                            <p>How do your students visited in the time.</p>
                                                        </div>
                                                        <div class="card-tools">
                                                            <em class="card-hint icon ni ni-help" data-bs-toggle="tooltip" data-bs-placement="left" title="Users of this month"></em>
                                                        </div>
                                                    </div>
                                                    <div class="analytic-au">
                                                        <div class="analytic-data-group analytic-au-group g-3">
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Monthly</div>
                                                                <div class="amount">9.28K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>4.63%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Weekly</div>
                                                                <div class="amount">2.69K</div>
                                                                <div class="change down"><em class="icon ni ni-arrow-long-down"></em>1.92%</div>
                                                            </div>
                                                            <div class="analytic-data analytic-au-data">
                                                                <div class="title">Daily (Avg)</div>
                                                                <div class="amount">0.94K</div>
                                                                <div class="change up"><em class="icon ni ni-arrow-long-up"></em>3.45%</div>
                                                            </div>
                                                        </div>
                                                        <div class="analytic-au-ck">
                                                            <canvas class="analytics-au-chart" id="analyticAuData"></canvas>
                                                        </div>
                                                        <div class="chart-label-group">
                                                            <div class="chart-label">01 Jan, 2020</div>
                                                            <div class="chart-label">30 Jan, 2020</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div>
                                        <div class="col-xxl-4 col-md-6">
                                            <div class="card card-full overflow-hidden">
                                                <div class="nk-ecwg nk-ecwg4 h-100">
                                                    <div class="card-inner flex-grow-1">
                                                        <div class="card-title-group mb-4">
                                                            <div class="card-title">
                                                                <h6 class="title">Traffic Sources</h6>
                                                            </div>
                                                            <div class="card-tools">
                                                                <div class="dropdown">
                                                                    <a href="#" class="dropdown-toggle link link-light link-sm dropdown-indicator" data-bs-toggle="dropdown">30 Days</a>
                                                                    <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a href="#"><span>15 Days</span></a></li>
                                                                            <li><a href="#" class="active"><span>30 Days</span></a></li>
                                                                            <li><a href="#"><span>3 Months</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="data-group">
                                                            <div class="nk-ecwg4-ck">
                                                                <canvas class="lms-doughnut-s1" id="trafficSources"></canvas>
                                                            </div>
                                                            <ul class="nk-ecwg4-legends">
                                                                <li>
                                                                    <div class="title">
                                                                        <span class="dot dot-lg sq" data-bg="#9cabff"></span>
                                                                        <span>Organic Search</span>
                                                                    </div>
                                                                    <div class="amount amount-xs">4,305</div>
                                                                </li>
                                                                <li>
                                                                    <div class="title">
                                                                        <span class="dot dot-lg sq" data-bg="#ffa9ce"></span>
                                                                        <span>Referrals</span>
                                                                    </div>
                                                                    <div class="amount amount-xs">482</div>
                                                                </li>
                                                                <li>
                                                                    <div class="title">
                                                                        <span class="dot dot-lg sq" data-bg="#b8acff"></span>
                                                                        <span>Social Media</span>
                                                                    </div>
                                                                    <div class="amount amount-xs">859</div>
                                                                </li>
                                                                <li>
                                                                    <div class="title">
                                                                        <span class="dot dot-lg sq" data-bg="#f9db7b"></span>
                                                                        <span>Others</span>
                                                                    </div>
                                                                    <div class="amount amount-xs">138</div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div><!-- .card-inner -->
                                                    <div class="card-inner card-inner-md bg-light">
                                                        <div class="card-note">
                                                            <em class="icon ni ni-info-fill"></em>
                                                            <span>Traffic channels have beed generating the most traffics over past days.</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- .card -->
                                        </div><!-- .col -->
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