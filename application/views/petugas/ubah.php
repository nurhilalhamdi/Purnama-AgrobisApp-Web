<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Profile Petugas</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url(); ?>petugas">Daftar Petugas</a></li>
                        <li class="breadcrumb-item active">Profile Petugas</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">

                    <?php
                    function getProfilePicture($name)
                    {
                        # code...
                        $name_slice = explode(' ', $name);
                        $name_slice = array_filter($name_slice);
                        $initials = '';
                        $initials .= (isset($name_slice[0][0])) ? strtoupper($name_slice[0][0]) : '';
                        $initials .= (isset($name_slice[count($name_slice) - 1][0])) ? strtoupper($name_slice[count($name_slice) - 1][0]) : '';
                        return '<div class="avatar">' . $initials . '</div>';
                    }

                    ?>

                    <style>
                        .avatar {
                            width: 100px;
                            height: 100px;
                            display: flex;
                            margin: 10px;
                            align-items: center;
                            justify-content: center;
                            background-color: #ccc;
                            border-radius: 50%;
                            color: #fff;
                            font-weight: bold;
                            font-size: 36px;
                        }
                    </style>
                    <!-- About Me Box -->
                    <div class="card card-primary card-outline">
                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <h3><?php echo getProfilePicture($petugas['nama']) ?></h3>
                            </div>

                            <h3 class="profile-username text-center"><?= $petugas['nama']; ?></h3>

                            <p class="text-muted text-center">@<?= $petugas['username']; ?></p>

                            <strong><i class="fas fa-envelope mr-1"></i> Email</strong>

                            <p class="text-muted">
                                <?= $petugas['email']; ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-map-marker-alt mr-1"></i> Alamat</strong>

                            <p class="text-muted"><?= $petugas['alamat']; ?></p>

                            <hr>

                            <strong><i class="fas fa-phone-alt mr-1"></i> No Telepon</strong>

                            <p class="text-muted">
                                <?= $petugas['no_telephone']; ?>
                            </p>

                            <hr>

                            <strong><i class="fas fa-user-check alt mr-1"></i> Status</strong>
                            <?php
                            if ($petugas['status'] == 'Aktif') { ?>
                                <p class="badge badge-success"><?= $petugas['status']; ?></p>

                            <?php } else {
                            ?>
                                <p class="badge badge-danger"><?= $petugas['status']; ?></p>

                            <?php
                            } ?>

                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-header p-2">
                            <h4>Edit Data Petugas</h4>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <div class="tab-content">
                                <!-- /.tab-pane -->
                                <div>
                                    <form action="" method="post">
                                        <input type="hidden" name="id_user" value="<?= $petugas['id_user']; ?>">
                                        <div class="form-group">
                                            <label for="nama">Nama</label>
                                            <input type="text" name="nama" class="form-control" id="nama" value="<?= $petugas['nama']; ?>">
                                            <small class="form-text text-danger"><?= form_error('nama'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" name="username" class="form-control" id="username" value="<?= $petugas['username']; ?>">
                                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="alamat">Alamat</label>
                                            <input type="text" name="alamat" class="form-control" id="alamat" value="<?= $petugas['alamat']; ?>">
                                            <small class="form-text text-danger"><?= form_error('nrp'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="email">Email</label>
                                            <input type="text" name="email" class="form-control" id="email" value="<?= $petugas['email']; ?>">
                                            <small class="form-text text-danger"><?= form_error('email'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_telephone">Telepon</label>
                                            <input type="no_telephone" name="no_telephone" class="form-control" id="no_telephone" value="<?= $petugas['no_telephone']; ?>">
                                            <small class="form-text text-danger"><?= form_error('no_telephone'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" name="password" class="form-control" id="password" value="<?= $petugas['password']; ?>">
                                            <small class="form-text text-danger"><?= form_error('password'); ?></small>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" id="status" name="status">
                                                <?php foreach ($status as $j) : ?>
                                                    <?php if ($j == $petugas['status']) : ?>
                                                        <option value="<?= $j; ?>" selected><?= $j; ?></option>
                                                    <?php else : ?>
                                                        <option value="<?= $j; ?>"><?= $j; ?></option>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>

                                        <div class="text-right">
                                            <button type="submit" name="ubah" class="btn btn-primary ">Ubah Data</button>

                                            <a href="<?= base_url(); ?>petugas" class="btn btn-md btn-secondary">Cancel
                                            </a>
                                        </div>


                                    </form>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
        </div>
    </div>
    <!-- /.content -->