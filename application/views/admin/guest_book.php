<div class="app-content">
    <div class="side-app">
        <div class="page-header">
            <div>
                <h1 class="page-title">Data Table</h1>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Tables</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Data Table</li>
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
                <div class="dropdown profile-1">
                    <a href="#" data-bs-toggle="dropdown" class="nav-link pe-2 leading-none d-flex">
                        <span>
                            <img src="<?= base_url() ?>assets_admin/images/users/10.jpg" alt="profile-user" class="avatar  profile-user brround cover-image">
                        </span>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Input Data Table</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap5">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="guest" class="table table-striped table-bordered" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Name: activate to sort column descending" style="width: 92.25px;">Name</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Age: activate to sort column ascending" style="width: 64.8281px;">Phone Number</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Position: activate to sort column ascending" style="width: 93.4219px;">Email</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 89.5px;">Table</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 59.5px;">Person</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 89.5px;">QR Code</th>
                                                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Office: activate to sort column ascending" style="width: 89.5px;">Absen</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($undangan as $u) : ?>
                                                    <tr class="odd">
                                                        <td class="sorting_1"><?= $u->nama ?></td>
                                                        <td class="sorting_1"><?= $u->no_hp ?></td>
                                                        <td class="sorting_1"><?= $u->email ?></td>
                                                        <td class="sorting_1"><?= $u->no_meja ?></td>
                                                        <td class="sorting_1"><?= $u->jumlah ?></td>
                                                        <td><a target="_blank" href="<?= base_url('assets/QRCODE/' . $u->qr_code) ?>" class="btn btn-outline-info btn-sm">
                                                                <i class="fa fa-eye fa" aria-hidden="true"></i> Lihat
                                                            </a></td>
                                                        <td>
                                                            <?php if ($u->status == 'hadir') { ?>
                                                                <a class="btn btn-outline-info btn-danger" href="#"><i class="fa fa-times-circle" aria-hidden="true" disabled></i></a>
                                                            <?php } else { ?>
                                                                <a class="btn btn-outline-info btn-sm" href="<?= base_url('admin/UpHadir/' . $u->id_tamu) ?>"><i class="fa fa-check-circle" aria-hidden="true"></i></a>
                                                            <?php } ?>
                                                            <a class="btn btn-outline-info btn-sm" href="<?= base_url('tamu/print/' . $u->id_tamu) ?>"><i class="fa fa-print" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                <?php $i++;
                                                endforeach ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>