<div class="nk-header nk-header-fixed is-light">
                    <div class="container-fluid">
                        <div class="nk-header-wrap">
                            <div class="nk-menu-trigger d-xl-none ms-n1">
                                <a href="#" class="nk-nav-toggle nk-quick-nav-icon" data-target="sidebarMenu"><em class="icon ni ni-menu"></em></a>
                            </div>
                            <div class="nk-header-brand d-xl-none">
                                <a href="<?=WEBROOT?>Dashboard" class="logo-link">
                                <img width="200px" src="assets/public/images/logo-dark-text.png" srcset="assets/public/images/logo-dark-text.png 5x" alt="logo">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-search ms-3 ms-xl-0 form-control-wrap">
                            <div class="col-md-4">
                                    <select class="form-select js-select2"  id="aa" name="aa" >
                                        <option value="">Promotions</option>
                                            <?php foreach ($getPromos as $dep) {?>
                                                <option value='<?=$dep->promo_id?>'><?=$dep->promo?></option>				
                                            <?php } ?>
                                    </select> 
                                </div>
                             </div><!-- .nk-header-news -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-bs-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-info d-none d-md-block">
                                                    <div class="user-status"><?php 
                                                        if($_SESSION['role']==1) echo "Administrator";
                                                        else echo "user";
                                                        ?></div>
                                                    <div class="user-name dropdown-indicator"><?=$_SESSION['username']?></div>
                                                </div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-end dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>TU</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text"><?=$_SESSION['username']?></span>
                                                        <span class="sub-text"><?=$_SESSION['email']?></span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?=WEBROOT?>profile"><em class="icon ni ni-user-alt"></em><span>Profile</span></a></li>
                                                    <li><a class="dark-switch" href="#"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a></li>
                                                </ul>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="<?=WEBROOT?>logout"><em class="icon ni ni-signout"></em><span>Sign out</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>