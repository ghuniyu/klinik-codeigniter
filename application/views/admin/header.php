
<header class="header-top navbar fixed-top">
            <div class="top-bar">   <!-- START: Responsive Search -->
                <div class="container">
                    <div class="main-search">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.html"><i class="sli-magnifier"></i></a>
                        </div>
                        <span class="close-search search-toggle"><i class="ti-close"></i></span>
                    </div>
                </div>
            </div>  <!-- END: Responsive Search -->

            <div class="navbar-header">
                <button type="button" class="navbar-toggle side-nav-toggle">
                    <i class="ti-align-left"></i>
                </button>

                <a class="navbar-brand" href="index.html">
                    <img src="<?php echo base_url(); ?>assets/images/logo-w.svg">
                    <span>Big Ben</span>
                </a>

                <ul class="nav navbar-nav-xs">  <!-- START: Responsive Top Right tool bar -->
                    <li>
                        <a href="javascript:;" class="collapse" data-toggle="collapse" data-target="#headerNavbarCollapse">
                            <i class="sli-user"></i>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" class="search-toggle">
                            <i class="sli-magnifier"></i>
                        </a>
                    </li>
                    
                </ul>   <!-- END: Responsive Top Right tool bar -->
                
            </div>
            
            <div class="collapse navbar-collapse" id="headerNavbarCollapse">
                
                <ul class="nav navbar-nav">
                    
                    <li class="hidden-xs">
                        <a href="javascript:;" class="sidenav-size-toggle">
                            <i class="ti-align-left"></i>
                        </a>
                    </li>
					<!--
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="sli-bell"></i>
                            <div class="new-alert active"></div>
                        </a>
                        <ul class="dropdown-menu dropdown-lg list-group-dropdown">
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic profile-icon"><i class="ti-file"></i></div>
                                        <div class="detail">
                                            <span class="text-normal">Ricky Palmer</span>
                                            <p class="font-11 no-m-b text-overflow">Absent</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </li>
                    
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="sli-envelope"></i>
                            <span class="badge bg-danger">4</span>
                        </a>
                        <ul class="dropdown-menu dropdown-lg list-group-dropdown">
                            
                            <li class="no-link font-12">You have 4 new notifications</li>
                            
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic"><img src="demo/users/img-user-02.jpg" alt=""></div>
                                        <div class="detail">
                                            <span class="text-normal">Cynthianawen</span>
                                            <span class="time">2 mins ago</span>
                                            <p class="font-11 no-m-b text-overflow">Start following you</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic"><img src="demo/users/img-user-03.jpg" alt=""></div>
                                        <div class="detail">
                                            <span class="text-normal">Megan Stamper</span>
                                            <span class="time">1 hr ago</span>
                                            <p class="font-11 no-m-b text-overflow">Accepted your friend request</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic"><img src="demo/users/img-user-04.jpg" alt=""></div>
                                        <div class="detail">
                                            <span class="text-normal">Alex Pushkin</span>
                                            <span class="time">yesterday</span>
                                            <p class="font-11 no-m-b text-overflow">Sent you a friend request</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li>
                                <a href="#">
                                    <div class="user-list-wrap">
                                        <div class="profile-pic"><img src="demo/users/img-user-05.jpg" alt=""></div>
                                        <div class="detail">
                                            <span class="text-normal">Bjarne Flur Kvistad</span>
                                            <span class="time">2 days ago</span>
                                            <p class="font-11 no-m-b text-overflow">Start following you</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            
                            <li><a href="#" class="text-center">See all</a></li>
                        </ul>
                    </li>
					-->
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    
                    <li class="main-search hidden-xs">
                        <div class="input-wrap">
                            <input class="form-control" type="text" placeholder="Search Here...">
                            <a href="page-search.html"><i class="sli-magnifier"></i></a>
                        </div>
                    </li>
                    
                    <li class="user-profile dropdown">
                        <a href="javascript:;" class="clearfix dropdown-toggle" data-toggle="dropdown">
                            <img src="<?php echo base_url(); ?>assets/images/user_profile/<?php echo $this->session->userdata('photo'); ?>" alt="" class="hidden-sm">
                            <div class="user-name"><?php echo $this->session->userdata('name'); ?> <small class="fa fa-angle-down"></small></div>
                        </a>
                        <ul class="dropdown-menu dropdown-animated pop-effect" role="menu">
                            <li><a href="<?php echo base_url(); ?>index.php/dashboard/update_profile"><i class="sli-user"></i> My Profile</a></li>
                            <li><a href="<?php echo base_url(); ?>index.php/dashboard/logout"><i class="sli-logout"></i> Logout</a></li>
                        </ul>
                    </li>
                    
                </ul>
                
            </div><!-- END: Navbar-collapse -->
            
        </header>   <!-- END: Header -->