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
                                    <h4 class="page-title">Data Recording Sampel</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
                            <li class="breadcrumb-item active">Data Recording Sampel</li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">




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




            <div class="row">

                <div class="col-lg-12">

                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="">Pilih Kandang</label><i class="uil-question-circle ml-1"></i>
                                        <div class="form-group">
                                            <select class=" form-control" id="pilih_kandang_sampel" name="pilih_kandang+sampel" required>
                                                <option>Pilih Kandang</option>
                                                <?php foreach ($kandang as $kdg) : ?>
                                                    <option value="<?= $kdg['id_kandang']; ?>"><?= $kdg['kode_Kandang']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label class="">Pilih Periode</label><i class="uil-question-circle ml-1"></i>
                                        <div class="form-group">
                                            <select class=" form-control" id="pilih_periode_sampel" name="pilih_periode_sampel" required>
                                                <option>Pilih Periode</option>
                                                <!-- <?php foreach ($chickin as $chc) : ?>
                                                    <option value="<?= $chc['id_chickin']; ?>"><?= $chc['periode']; ?></option>
                                                <?php endforeach; ?> -->
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="card mb-4">
                                    <div class="card-body">
                                        <table class="table user-view-table m-0">
                                            <tbody>
                                                <tr>
                                                    <td class="info">Kode Kandang:</td>
                                                    <td class="info"><span id="kodekandang" name="kodekandang"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="info">Kode Blok:</td>
                                                    <td class="info"><span id="kodeblok" name="kodeblok"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="info">Alamat:</td>
                                                    <td class="info"><span id="alamat" name="alamat"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="info">Jenis Kandang:</td>
                                                    <td class="info"><span id="jeniskandang" name="jeniskandang"></span></td>
                                                </tr>
                                                <tr>
                                                    <td class="info">Status:</td>
                                                    <td class="info"><span id="statuskandang"></span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label class="">Pilih Kandang</label><i class="uil-question-circle ml-1"></i>
                                        <div class="form-group">
                                            <select class=" form-control" id="pilih_kandang" name="pilih_kandang" required>
                                                <option>Pilih Kandang</option>
                                                <?php foreach ($kandang as $kdg) : ?>
                                                    <option value="<?= $kdg['id_kandang']; ?>"><?= $kdg['kode_Kandang']; ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div><br>                    

                            <div class="row">
                                <div class="col-lg-2">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="text-muted">
                                                <p class="text-sm">Kode Kandang
                                                    <b class="d-block"><span id="kodekandang" name="kodekandang"></span></b>
                                                </p>
                                                <p class="text-sm">Kode Blok
                                                    <b class="d-block"><span id="kodeblok" name="kodeblok"></span></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="text-muted">
                                                <p class="text-sm">Alamat
                                                    <b class="d-block"><span id="alamat" name="alamat"></span></b>
                                                </p>
                                                <p class="text-sm">Jenis Kandang
                                                    <b class="d-block"><span id="jeniskandang" name="jeniskandang"></span></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <div class="form-group">
                                            <div class="text-muted">
                                                <p class="text-sm">Status Kandang
                                                    <b class="d-block"><span id="statuskandang"></span></b>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><br> -->
                        <div class="react-bootstrap-table table-responsive col-md-12">
                            <!-- 
                                <div class="alert alert-danger" role="alert">
                                    data barang keluar tidak ditemukan.
                                </div> -->

                            <table id="tabel_sampel" class="table table-striped" style="text-align: center;">
                                <thead>
                                    <tr>

                                        <th tabindex="0" aria-label="Kategori sortable" class="sortable">No<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Nomor Produk sortable" class="sortable">Tanggal pengecekan<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Nama Produk sortable" class="sortable">Usia Ayam<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Kategori sortable" class="sortable">Periode<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody id="my-table_sampel">


                                    <!-- <tr>


                                                <td class="align-middle"><span id="tabelRowNomor" name="tabelRowNumber"></span></td>
                                                <td class="align-middle"><span id="tabelRowTanggal" name="tabelRowTanggal"></span></td>
                                                <td class="align-middle"><span id="tabelRowUsia" name="tabelRowUsia"></span></td>
                                                <td class="align-middle"><span id="tabelRowAyamMati" name="tabelRowAyamMati"></span></td>
                                                <td class="align-middle"><span id="tabelRowAyamSakit" name="tabelRowAyamSakit"></span></td>
                                                <td class="align-middle"><span id="tabelRowTindakan" name="tabelRowTindakan"></span></td>



                                            </tr> -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- /.card -->
    </section>
    <!-- /.content -->
</div>
</div>