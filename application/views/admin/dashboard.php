<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <div>
                <h1 class="page-title">Dashboard 01</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard 01</li>
                </ol>
            </div>

            <div class="d-flex  ms-auto header-right-icons header-search-icon">
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
                        <span class="nav-unread badge bg-success rounded-pill">2</span>
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
                <div class="dropdown profile-1">
                    <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
                        <span>
                            <img src="assets/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <div class="drop-heading">
                            <div class="text-center">
                                <h5 class="text-dark mb-0">Elizabeth Dyer</h5>
                                <small class="text-muted">Administrator</small>
                            </div>
                        </div>
                        <div class="dropdown-divider m-0"></div>
                        <a class="dropdown-item" href="profile.html">
                            <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                        </a>
                        <a class="dropdown-item" href="editprofile.html">
                            <i class="dropdown-icon  mdi mdi-settings"></i> Settings
                        </a>
                        <a class="dropdown-item" href="email.html">
                            <span class="float-end"></span>
                            <i class="dropdown-icon mdi  mdi-message-outline"></i> Inbox
                        </a>
                        <a class="dropdown-item" href="emailservices.html">
                            <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="faq.html">
                            <i class="dropdown-icon mdi mdi-compass-outline"></i> Need help?
                        </a>
                        <a class="dropdown-item" href="login.html">
                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Sign out
                        </a>
                    </div>
                </div>
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon " data-bs-toggle="sidebar-right" data-bs-target=".sidebar-right">
                        <i class="fe fe-align-right"></i>
                    </a>
                </div><!-- SIDE-MENU -->
            </div>
        </div>


        <!-- ROW-1 -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xl-6">
                <div class="row">
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xl-6">
                        <div class="card">
                            <div class="card-body text-center statistics-info">
                                <div class="counter-icon bg-primary mb-0 box-primary-shadow">
                                    <i class="fe fe-trending-up text-white"></i>
                                </div>
                                <h6 class="mt-4 mb-1">Total Hadir</h6>
                                <h2 class="mb-2 number-font"><?= $jml_hadir ?></h2>
                                <p class="text-muted">Person</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-12 col-sm-12 col-xl-6">
                        <div class="card">
                            <div class="card-body text-center statistics-info">
                                <div class="counter-icon bg-secondary mb-0 box-secondary-shadow">
                                    <i class="fe fe-codepen text-white"></i>
                                </div>
                                <h6 class="mt-4 mb-1">Total yang Akan Hadir</h6>
                                <h2 class="mb-2 number-font"><?= $jml_Akanhadir ?></h2>
                                <p class="text-muted">Person</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ROW-1 END -->
        <?php for ($a = 1; $a <= 40; $a++) { ?>
            <button type="button" class="btn btn-primary mt-1 mb-1 me-3" data-bs-toggle="modal" data-bs-target="#smallModal<?= $a ?>">
                <span>Meja <?= $a ?></span>
            </button>
        <?php } ?>
    </div>
</div>

<?php for ($i = 1; $i <= 40; $i++) { ?>
    <div id="smallModal<?= $i ?>" class="modal fade">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <?php foreach ($tamu as $t) { ?>
                    <?php if ($i == $t->no_meja) { ?>
                        <?php $query = $this->db->query("SELECT count(id_tamu) from tamu where no_meja=$i ")->result();
                        if ($query < 3) { ?>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-danger"><?= $t->nama ?> <?= $t->jumlah ?> Person</li>
                            </ul>
                        <?php } elseif ($query = 3) {  ?>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-warning"><?= $t->nama ?></li>
                            </ul>
                        <?php } elseif ($query > 3) {  ?>
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-success"><?= $t->nama ?></li>
                            </ul>
                        <?php } ?>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>

    </div>
<?php } ?>