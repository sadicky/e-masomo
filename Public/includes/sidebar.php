
            <!--Start sidebar Wrapper-->
            <div class="col-lg-3 col-md-4 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <form class="search-form" action="#">
							<input placeholder="Search..." type="text">
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
						</form>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <h1>Categories</h1>
                        </div>
                        <ul class="categories clearfix">
                        <?php foreach($tag as $t):?>
                            <li>
                                <a href="<?=WEBROOT?>category?TagID=<?=$t->Tag_ID?>">
                                    <?=$t->Tag?>
                                    <span class="pull-right"><i class="fa fa-angle-right" aria-hidden="true"></i> </span>
                                </a>
                            </li>
                        <?php endforeach?>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                    <div class="single-sidebar">
                        <div class="sidebar-title">
                            <h1>Recent Post</h1>
                        </div>
                        <ul class="recent-post">
                        <?php $Post->PopularPosts(); ?>
                        </ul>
                    </div>
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->
                    <div class="single-sidebar facebook">
                        <div class="sidebar-title">
                            <h1>Facebook</h1>  
                        </div>
                        <div class="follow-us-content">
                            <img src="images/sidebar/fb-follow-us.jpg" alt="Awesome Follow Us Image">    
                        </div>        
                    </div> 
                    <!--End single-sidebar-->
                </div>    
            </div>
            <!--End Sidebar Wrapper-->  