        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!--APP-SIDEBAR-->
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <aside class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.html">
                            <img src="<?= base_url() ?>assets_admin/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="<?= base_url() ?>assets_admin/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
                            <img src="<?= base_url() ?>assets_admin/images/brand/logo-2.png" class="header-brand-img light-logo" alt="logo">
                            <img src="<?= base_url() ?>assets_admin/images/brand/logo-3.png" class="header-brand-img light-logo1" alt="logo" id="change-image">
                        </a><!-- LOGO -->
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle ms-auto" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                    </div>
                    <div class="app-sidebar__user">
                        <div class="dropdown user-pro-body text-center">
                            <div class="user-pic">
                                <img src="<?= base_url() ?>assets_admin/images/users/10.jpg" alt="user-img" class="avatar-xl rounded-circle">
                            </div>
                            <div class="user-info">
                                <h6 class=" mb-0 text-dark">Nafia Ruwaida Chosyyatillah</h6>
                                <span class="text-muted app-sidebar__user-name text-sm">Administrator</span>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-navs">
                        <ul class="nav  nav-pills-circle">
                            <li class="nav-item" data-bs-toggle="tooltip" data-bs-placement="top" title="Logout">
                                <a href="login.html" class="nav-link text-center m-2">
                                    <i class="fe fe-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <ul class="side-menu">
                        <li>
                            <h3>Main</h3>
                        </li>
                        <li class="slide">
                            <a class="side-menu__item" data-bs-toggle="slide" href="<?= base_url('admin') ?>"><i class="side-menu__icon ti-home"></i><span class="side-menu__label">Dashboard</span><i class="angle fa fa-angle-right"></i></a>
                            <a class="side-menu__item" data-bs-toggle="slide" href="<?= base_url('admin/history') ?>"><i class="side-menu__icon ti-clipboard"></i><span class="side-menu__label">History</span><i class="angle fa fa-angle-right"></i></a>
                            <a class="side-menu__item" data-bs-toggle="slide" href="<?= base_url('admin/guest') ?>"><i class="side-menu__icon ti-clipboard"></i><span class="side-menu__label">Guset Book</span><i class="angle fa fa-angle-right"></i></a>
                        </li>
                    </ul>
                </aside>
                <!--/APP-SIDEBAR-->
                <!-- Mobile Header -->
                <div class="mobile-header">
                    <div class="container-fluid">
                        <div class="d-flex">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="#"></a><!-- sidebar-toggle-->
                            <a class="header-brand" href="index.html">
                                <img src="assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                                <img src="assets/images/brand/logo-3.png" class="header-brand-img desktop-logo mobile-light" alt="logo">
                            </a>
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <button class="navbar-toggler navresponsive-toggler d-md-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                                </button>
                                <div class="dropdown profile-1">
                                    <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
                                        <span>
                                            <img src="assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                                        </span>
                                    </a>
                                </div>
                                <div class="dropdown d-md-flex header-settings">
                                    <a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
                                        <i class="fe fe-align-right"></i>
                                    </a>
                                </div><!-- SIDE-MENU -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-md-none bg-white">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                        <div class="d-flex order-lg-2 ms-auto">
                            <div class="dropdown d-sm-flex">
                                <a href="#" class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-search"></i>
                                </a>
                                <div class="dropdown-menu header-search dropdown-menu-start">
                                    <div class="input-group w-100 p-2">
                                        <input type="text" class="form-control " placeholder="Search....">
                                        <div class=" ">
                                            <button type="button" class="btn btn-primary ">
                                                <i class="fa fa-search" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- SEARCH -->
                            <div class="dropdown d-md-flex">
                                <a class="nav-link icon full-screen-link nav-link-bg">
                                    <i class="fe fe-maximize fullscreen-button"></i>
                                </a>
                            </div><!-- FULL-SCREEN -->
                            <div class="dropdown d-md-flex notifications">
                                <a class="nav-link icon" data-bs-toggle="dropdown">
                                    <i class="fe fe-bell"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                    <div class="notifications-menu">
                                        <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-success me-3">
                                                <i class="fa fa-thumbs-o-up"></i>
                                            </div>
                                            <div class="">
                                                <strong>Someone likes our posts.</strong>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-primary me-3">
                                                <i class="fa fa-commenting-o"></i>
                                            </div>
                                            <div class="">
                                                <strong>3 New Comments.</strong>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-danger me-3">
                                                <i class="fa fa-cogs"></i>
                                            </div>
                                            <div class="">
                                                <strong>Server Rebooted</strong>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-info me-3">
                                                <i class="fe fe-upload"></i>
                                            </div>
                                            <div class="">
                                                <strong>New file has been Uploaded</strong>
                                            </div>
                                        </a>
                                        <a class="dropdown-item d-flex pb-3" href="#">
                                            <div class="fs-16 text-pink me-3">
                                                <i class="fe fe-user"></i>
                                            </div>
                                            <div class="">
                                                <strong>New User Registered</strong>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <a href="notify.html" class="dropdown-item text-center">View all Notification</a>
                                </div>
                            </div><!-- NOTIFICATIONS -->
                        </div>
                    </div>
                </div>
                <!-- /Mobile Header -->