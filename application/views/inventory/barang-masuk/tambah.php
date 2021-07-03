<div class="content-wrapper">
    <div class="container">
        <!-- <?php if (validation_errors()) : ?>
            <div class="alert alert-danger">
                <?php echo validation_errors(); ?>
            </div>
        <?php endif; ?> -->
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
                                    <h4 class="page-title">Tambah Barang Masuk</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Barang Masuk</li>

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
                            <form novalidate="" action="<?php echo base_url() . 'inventory/barang-masuk/BarangMasuk/tambah' ?>" method="post" class="av-valid">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <label class="">Tanggal Masuk</label><i class="uil-question-circle ml-1"></i>
                                            <div class="form-group">
                                                <input class="form-control" type="datetime-local" value="" id="tanggal_masuk_create" name="tanggal_masuk_create" data-date-format="YYYY-MM-DD">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group"><label class="">Nomor Barang Masuk</label><i class="uil-question-circle ml-1"></i>
                                            <div class="form-group">
                                                <input name="nomor_barang_create" maxlength="50" readonly="readonly" autocomplete="off" id="nomor_barang_create" type="text" class="is-untouched is-pristine av-valid form-control" value="<?= $kode; ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <div class="form-group"><label>Nama Penerima</label> <br>
                                                <input type="text" class="form-control" placeholder="Nama Penerima" id="nama_penerima_create" name="nama_penerima_create">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-check">
                                            <input class="form-check-input checkbox_check" type="checkbox" value="" id="checkbox_check" name="checkbox_check">
                                            <label class="form-check-label" for="flexCheckChecked" style="font-size: 14px;">
                                                Centang Untuk Merubah Harga Satuan Jika Mengalami Perubahan Harga <span style="color:#FF0000">*</span>
                                            </label>
                                        </div>
                                        <table class="mb-0 table table-sm table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 20%;">Nama Produk</th>
                                                    <th style="width: 10%;">Stok Sekarang</th>
                                                    <th style="width: 10%;">Stok Masuk</th>
                                                    <th style="width: 7.5%;">Satuan</th>
                                                    <th style="width: 15%;">Harga Satuan (Rp)</th>
                                                    <!-- <th style="width: 12.5%;">Jumlah</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <div class="form-group">
                                                        <td>
                                                            <select class="form-control" id="id_barang_create" name="id_barang_create" required>
                                                                <option>None</option>
                                                                <?php foreach ($stok as $stk) : ?>
                                                                    <option value="<?= $stk['id_barang']; ?>"><?= $stk['nama']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td class="align-middle"><span id="valcreate1" name="valcreate1"></span></td>
                                                        <td class="align-middle"><input name="stok_sekarang_create" id="stok_sekarang_create" type="number" class="form-control-md form-control" value=""></td>
                                                        <td class="align-middle"><span id="valcreate2" name="valcreate2"></span></td>
                                                        <td class="align-middle"><input name="harga_satuan_create" id="harga_satuan_create" readonly type="text" class="form-control-md form-control hargaSatuan" value=""></td>
                                                        <!-- <td class="align-middle"><input name="harga" maxlength="50" readonly="readonly" autocomplete="off" id="harga" type="text" class="is-untouched is-pristine av-valid form-control harga" value=""></td> -->
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group"><label for="notes" class="">Keterangan</label><textarea name="keterangan_create" id="keterangan_create" rows="3" maxlength="150" class="form-control"></textarea></div>
                                    </div>
                                    <div class="col-lg-8">

                                        <h3 class="float-right mb-3 total" id="total" name="total">Total : </h3>
                                        <input name="harga_create" maxlength="50" readonly="readonly" autocomplete="off" id="harga_create" type="text" hidden class="is-untouched is-pristine av-valid form-control harga" value="">
                                    </div>
                                </div><br><br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="float-left"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="float-right"><a class="mr-1" href="<?= base_url(); ?>inventory/barang-masuk/BarangMasuk"><button type="button" class="btn btn-light">Cancel</button></a><button type="submit" class="btn btn-primary">Submit</button></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
</div>