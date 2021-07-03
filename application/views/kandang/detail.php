<div class="content-wrapper">
    <div class="container">
        <!-- <?php if (validation_errors()) : ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?> -->
        <?php if (validation_errors()) : ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>
            <!-- <div class="row mt-3">
        <div class="col-md-6">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                Data mahasiswa <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div> -->
        <?php endif; ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <div class="row">
                            <div class="col">
                                <div class="page-title-box">
                                    <h4 class="page-title">Detail Kandang</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Detail Kandang</li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">




            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <hr>
                            <div class="container bootstrap snippet">
                                <!-- <div class="row">
                                    <div class="col-sm-10">
                                        <h1>User name</h1>
                                    </div>
                                    <div class="col-sm-2"><a href="/users" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="http://www.gravatar.com/avatar/28fd20ccec6865e2d5f0e1f4446eb7bf?s=100"></a></div>
                                </div> -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <!--left col-->
                                        <div class="bd-example">
                                            <ul class="list-group">
                                                <li class="list-group-item active">Profile Kandang</li>
                                                <li class="list-group-item">
                                                    <dt>Kode Kandang</dt>
                                                    <dd><?= $kandangdetil['kode_Kandang'] ?></dd>
                                                </li>
                                                <li class="list-group-item">
                                                    <dt>Kode Blok</dt>
                                                    <dd><?= $kandangdetil['kode_blok'] ?></dd>
                                                </li>
                                                <li class="list-group-item">
                                                    <dt>Jenis Kandang</dt>
                                                    <dd><?= $kandangdetil['jenis_kandang'] ?></dd>
                                                </li>
                                                <li class="list-group-item">
                                                    <dt>Alamat</dt>
                                                    <dd><?= $kandangdetil['alamat_kandang'] ?></dd>
                                                </li>
                                            </ul>
                                        </div>

                                        <br>

                                        <ul class="list-group">
                                            <li class="list-group-item active">Ringkasan Populasi Kandang <i class="fa fa-dashboard fa-1x"></i></li>
                                            <li class="list-group-item text-left"><span class="pull-left"><strong>Ayam Mati :</strong></span> <?= $matisakit['ayam_mati'] ?> Ekor</li>
                                            <li class="list-group-item text-left"><span class="pull-left"><strong>Ayam Sakit :</strong></span> <?= $matisakit['ayam_sakit'] ?> Ekor</li>
                                            <li class="list-group-item text-left"><span class="pull-left"><strong>Ayam Panen :</strong></span> <?= $panengagal['jumlah_panen'] ?> Ekor</li>
                                            <li class="list-group-item text-left"><span class="pull-left"><strong>Ayam Gagal Panen :</strong></span> <?= $panengagal['gagal_panen'] ?> Ekor</li>
                                        </ul>



                                    </div>
                                    <!--/col-3-->
                                    <div class="col-sm-9">

                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-header p-2">
                                                    <ul class="nav nav-pills">
                                                        <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Inventory Kandang</a></li>
                                                        <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Data Panen</a></li>
                                                        <!-- <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Ubah Data</a></li> -->
                                                    </ul>
                                                </div><!-- /.card-header -->
                                                <div class="card-body">


                                                    <style>
                                                        .user-view-table td:first-child {
                                                            width: 9rem;
                                                        }

                                                        .user-view-table td {
                                                            padding-right: 0;
                                                            padding-left: 0;
                                                            border: 0;
                                                            ruby-align: left;

                                                        }

                                                        .user-view-table td.info {
                                                            text-align: left;

                                                        }

                                                        .card {
                                                            background-clip: padding-box;
                                                            box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
                                                        }
                                                    </style>


                                                    <!-- Tab Konten Ringkasan Kandang-->
                                                    <div class="tab-content">
                                                        <div class="active tab-pane" id="activity">
                                                            <div class="table-responsive">


                                                                <div class="col-sm-10">
                                                                    <h4>Data Stok Pakan</h4>
                                                                </div>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <?php if (empty($stokpakan)) : ?>
                                                                            <div class="alert alert-danger" role="alert">
                                                                                Kandang Ini Belum Mengisi Stok Pakan
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama Barang</th>
                                                                            <th>Satuan</th>
                                                                            <th>Jumlah Pakan</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="items">

                                                                        <?php
                                                                        $no = 1;
                                                                        if (!empty($stokpakan)) {
                                                                            # code...                          
                                                                            foreach ($stokpakan as $pakan) : ?>
                                                                                <tr>
                                                                                    <td><?= $no++; ?></td>
                                                                                    <td><?= $pakan['nama']; ?></td>
                                                                                    <td><?= $pakan['satuan']; ?></td>
                                                                                    <td><?= $pakan['jumlah_pakan']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                        } ?>

                                                                        <!-- <?php
                                                                                $total = 0;
                                                                                if (!empty($stokpakan)) {
                                                                                    # code...                          
                                                                                    foreach ($stokpakan as $pakan) : ?>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td style="font-weight: bold;">Total : <?= $total +=  $pakan['jumlah_pakan']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                                } ?> -->

                                                                    </tbody>
                                                                </table>
                                                                <hr>

                                                                <div class="col-sm-10">
                                                                    <h4>Data Stok Obat</h4>
                                                                </div>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <?php if (empty($stokobat)) : ?>
                                                                            <div class="alert alert-danger" role="alert">
                                                                                Kandang Ini Belum Mengisi Stok Obat
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama Barang</th>
                                                                            <th>Satuan</th>
                                                                            <th>Jumlah Pakan</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="items">

                                                                        <?php
                                                                        $no = 1;
                                                                        if (!empty($stokobat)) {
                                                                            # code...                          
                                                                            foreach ($stokobat as $obat) : ?>
                                                                                <tr>
                                                                                    <td><?= $no++; ?></td>
                                                                                    <td><?= $obat['nama']; ?></td>
                                                                                    <td><?= $obat['satuan']; ?></td>
                                                                                    <td><?= $obat['jumlah_obat']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                        } ?>
                                                                        <!-- 
                                                                        <?php
                                                                        $total = 0;
                                                                        if (!empty($stokobat)) {
                                                                            # code...                          
                                                                            foreach ($stokobat as $obat) : ?>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td style="font-weight: bold;">Total : <?= $total +=  $obat['jumlah_obat']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                        } ?> -->

                                                                    </tbody>
                                                                </table>



                                                                <div class="col-sm-10">
                                                                    <h4>Data Stok Vitamin</h4>
                                                                </div>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <?php if (empty($stokvitamin)) : ?>
                                                                            <div class="alert alert-danger" role="alert">
                                                                                Kandang Ini Belum Mengisi Stok Vitamin
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama Barang</th>
                                                                            <th>Satuan</th>
                                                                            <th>Jumlah Pakan</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="items">

                                                                        <?php
                                                                        $no = 1;
                                                                        if (!empty($stokvitamin)) {
                                                                            # code...                          
                                                                            foreach ($stokvitamin as $vitamin) : ?>
                                                                                <tr>
                                                                                    <td><?= $no++; ?></td>
                                                                                    <td><?= $vitamin['nama']; ?></td>
                                                                                    <td><?= $vitamin['satuan']; ?></td>
                                                                                    <td><?= $vitamin['jumlah_vitamin']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                        } ?>


                                                                        <!-- <?php
                                                                                $total = 0;
                                                                                if (!empty($stokvitamin)) {
                                                                                    # code...                          
                                                                                    foreach ($stokvitamin as $vitamin) : ?>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td style="font-weight: bold;">Total : <?= $total +=  $vitamin['jumlah_vitamin']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                                } ?> -->



                                                                    </tbody>
                                                                </table>


                                                                <div class="col-sm-10">
                                                                    <h4>Data Stok Vaksin</h4>
                                                                </div>
                                                                <table class="table table-hover">
                                                                    <thead>
                                                                        <?php if (empty($stokvaksin)) : ?>
                                                                            <div class="alert alert-danger" role="alert">
                                                                                Kandang Ini Belum Mengisi Stok Vaksin
                                                                            </div>
                                                                        <?php endif; ?>
                                                                        <tr>
                                                                            <th>No</th>
                                                                            <th>Nama Barang</th>
                                                                            <th>Satuan</th>
                                                                            <th>Jumlah Pakan</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody id="items">

                                                                        <?php
                                                                        $no = 1;
                                                                        if (!empty($stokvaksin)) {
                                                                            # code...                          
                                                                            foreach ($stokvaksin as $vaksin) : ?>
                                                                                <tr>
                                                                                    <td><?= $no++; ?></td>
                                                                                    <td><?= $vaksin['nama']; ?></td>
                                                                                    <td><?= $vaksin['satuan']; ?></td>
                                                                                    <td><?= $vaksin['jumlah_vaksin']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                        } ?>


                                                                        <!-- <?php
                                                                                $total = 0;
                                                                                if (!empty($stokvaksin)) {
                                                                                    # code...                          
                                                                                    foreach ($stokvaksin as $vaksin) : ?>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td style="font-weight: bold;">Total : <?= $total +=  $vaksin['jumlah_vaksin']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                                } ?> -->

                                                                    </tbody>
                                                                </table>




                                                                <div class="row">
                                                                    <div class="col-md-4 col-md-offset-4 text-center">
                                                                        <ul class="pagination" id="myPager"></ul>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                        <!-- /.tab-pane -->
                                                        <div class="tab-pane" id="timeline">
                                                            <div class="row">
                                                                <div class="col-lg-12">

                                                                    <div class="card mb-4">
                                                                        <div class="card-body">
                                                                            <div class="col-sm-10">
                                                                                <h4>Data Panen</h4>
                                                                            </div>
                                                                            <table class="table table-hover">
                                                                                <thead>
                                                                                    <?php if (empty($panen)) : ?>
                                                                                        <div class="alert alert-danger" role="alert">
                                                                                            Kandang Ini Belum Melakukan Panen
                                                                                        </div>
                                                                                    <?php endif; ?>
                                                                                    <tr>
                                                                                        <th>No</th>
                                                                                        <th>Umur Panen</th>
                                                                                        <th>Periode</th>
                                                                                        <th>Tanggal Panen</th>
                                                                                        <th>Berat Panen</th>
                                                                                        <th>Jumlah Panen</th>
                                                                                        <th>Gagal Panen</th>
                                                                                        <th>Total Berat</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody id="items">

                                                                                    <?php
                                                                                    $no = 1;
                                                                                    if (!empty($panen)) {
                                                                                        # code...                          
                                                                                        foreach ($panen as $pan) : ?>
                                                                                            <tr>
                                                                                                <td><?= $no++; ?></td>
                                                                                                <td><?= $pan['umur_panen']; ?> Hari</td>
                                                                                                <td>Periode <?= $pan['periode']; ?></td>
                                                                                                <td><?= $pan['tanggal_panen']; ?></td>
                                                                                                <td><?= $pan['berat_panen_ekor']; ?> gram/ekor</td>
                                                                                                <td><?= $pan['jumlah_panen']; ?> Ekor</td>
                                                                                                <td><?= $pan['gagal_panen']; ?> Ekor</td>
                                                                                                <td><?= $pan['total_berat_keseluruhan']; ?> Kilogram</td>

                                                                                            </tr>
                                                                                    <?php endforeach;
                                                                                    } ?>


                                                                                    <!-- <?php
                                                                                            $total = 0;
                                                                                            if (!empty($stokvitamin)) {
                                                                                                # code...                          
                                                                                                foreach ($stokvitamin as $vitamin) : ?>

                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td style="font-weight: bold;">Total : <?= $total +=  $vitamin['jumlah_vitamin']; ?></td>
                                                                                </tr>
                                                                        <?php endforeach;
                                                                                            } ?> -->



                                                                                </tbody>
                                                                            </table>
                                                                        </div>
                                                                        <hr class="border-light m-0">

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- /.tab-pane -->
                                                    </div>
                                                    <!-- /.tab-content -->
                                                </div><!-- /.card-body -->
                                            </div>
                                            <!-- /.card -->
                                        </div>

                                        <!--/tab-pane-->
                                    </div>
                                    <!--/tab-content-->

                                </div>
                                <!--/col-9-->
                            </div>
                            <!--/row-->
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
</div>