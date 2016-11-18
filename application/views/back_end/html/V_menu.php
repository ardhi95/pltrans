<?php $this->load->view('back_end/html/V_first'); ?>
<div id="wrapper">
     <!-- Navigation -->
        <nav class="top1 navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">PL Trans</a>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-nav navbar-right">
                
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle avatar" data-toggle="dropdown"><img src="<?= base_url()?>assets/back_end/images/1.png" alt=""/></a>
                    <ul class="dropdown-menu">
                        <li class="dropdown-menu-header text-center">
                            <strong>Account</strong>
                        </li>
                        <li class="divider"></li>
                        
                        <li class="m_2"><a href="#"><i class="fa fa-lock"></i> Logout</a></li>  
                    </ul>
                </li>
            </ul>
            <!-- Menu -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?= site_url(); ?>/C_admin"><i class="fa fa-home fa-fw nav_icon"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="<?= site_url(); ?>/Info"><i class="fa fa-info-circle fa-fw nav_icon"></i>Info Wisata</a>
                        </li>
                        <li>
                            <a href="<?= site_url(); ?>/PaketWisata"><i class="fa fa-file fa-fw nav_icon"></i>Paket Wisata</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-car fa-fw nav_icon"></i>Armada</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-cog nav_icon"></i>Setting<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="#">
                                        <i class="fa fa-info-circle nav_icon"></i> About PL Trans</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-photo nav_icon"></i> Home Slider</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="fa fa-id-card nav_icon"></i> Contact</span>
                                    </a>
                                </li>
                            </ul>
                            <!-- /.nav-second-level -->
                        </li>
                        
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
        <div class="graphs">
  
     
         