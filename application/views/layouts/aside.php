 <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- preloader area end -->
    <!-- page container area start -->
    <div class="page-container">
        <!-- sidebar menu area start -->
        <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
                    <a href="index.html"><h1>CIMAC</h1></a>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-pie-chart"></i><span>Graficas</span></a>
                                <ul class="collapse">
                                    <li><a href="">Por año</a></li>
                                    <li><a href="">Por Estado</a></li>
                                    <li><a href="">Por Sexenio</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="ti-layout-sidebar-left"></i><span>Listas</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo base_url()?>app/periodistas">Periodistas</a></li>
                                    <li><a href="<?php echo base_url()?>app/registros">Registros</a></li>
                                </ul>
                            </li    >
                            <li>
                                <a href="javascript:void(0)" aria-expanded="true"><i class="fa fa-cogs"></i><span>Administracion</span></a>
                                <ul class="collapse">
                                    <li><a href="<?php echo base_url();?>administrador/usuarios">Usuarias</a></li>
                                    <li><a href="<?php echo base_url();?>administrador/configuracion">Comfiguracion</a></li>

                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <!-- sidebar menu area end -->
        <!-- main content area start -->
        <div class="main-content">
            <!-- header area start -->
            <div class="header-area">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-6 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                    </div>
                    <!-- profile info & task notification -->

                </div>
            </div>
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">

                    <div class="col-sm-12 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" src="<?php echo base_url();?>assets/images/author/avatar.png" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown"><?php echo $this->session->userdata("nombre")?> <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Configuracion</a>
                                <a class="dropdown-item" href="<?php echo base_url(); ?>auth/logout">Salir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
