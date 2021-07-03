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
                                    <h4 class="page-title">Ubah Barang Masuk</h4>
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
                            <form novalidate="" action="<?= base_url('inventory/barang-masuk/BarangMasuk/ubah') ?>" method="post" class="av-valid">
                                <div class="row">
                                    <div class="col-lg-3">
                                        <input type="hidden" name="id" name="id" value="<?= $barangmasuk['id']; ?>">
                                        <div class="form-group">
                                            <label class="">Tanggal Masuk</label><i class="uil-question-circle ml-1"></i>
                                            <div class="form-group">
                                                <input class="form-control" type="datetime-local" value="<?= $barangmasuk['tanggal_masuk'] ?>" id="tanggal_masuk_edit" name="tanggal_masuk_edit" data-date-format="YYYY-MM-DD">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3">
                                        <div class="form-group"><label class="">Nomor Barang Masuk</label><i class="uil-question-circle ml-1"></i>
                                            <div class="form-group">
                                                <input name="nomor_barang_edit" maxlength="50" readonly="readonly" autocomplete="off" id="nomor_barang_edit" type="text" class="is-untouched is-pristine av-valid form-control" value="<?= $barangmasuk['nomor_masuk'] ?>">
                                            </div>
                                        </div>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-lg-3">
                                        <div class="form-group">
                                            <div class="form-group"><label>Nama Penerima</label> <br>
                                                <input type="text" class="form-control" placeholder="Nama Penerima" id="nama_penerima_edit" name="nama_penerima_edit" value="<?= $barangmasuk['penerima'] ?>">
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
                                                            <select class="form-control" id="id_barang_edit" name="id_barang_edit" required>
                                                                <option>None</option>
                                                                <?php foreach ($stok as $stk) : ?>
                                                                    <option value="<?= $stk['id_barang']; ?>" <?= $stk['id_barang'] == $barangmasuk['id_barang'] ? "selected" : null; ?>><?= $stk['nama']; ?></option>
                                                                <?php endforeach; ?>
                                                            </select>
                                                        </td>
                                                        <td class="align-middle"><span id="valcreate1edit" name="valcreate1edit"></span></td>
                                                        <td class="align-middle"><input name="stok_sekarang_edit" id="stok_sekarang_edit" type="number" class="form-control-md form-control" value="<?= $barangmasuk['stok_masuk'] ?>"></td>
                                                        <td class="align-middle"><span id="valcreate2edit" name="valcreate2edit"></span></td>
                                                        <td class="align-middle"><input name="harga_satuan_edit" id="harga_satuan_edit" readonly type="text" class="form-control-md form-control hargaSatuan" value=""></td>
                                                        <!-- <td class="align-middle"><input name="harga" maxlength="50" readonly="readonly" autocomplete="off" id="harga" type="text" class="is-untouched is-pristine av-valid form-control harga" value=""></td> -->
                                                    </div>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group"><label for="notes" class="">Keterangan</label><textarea name="keterangan_edit" id="keterangan_edit" rows="3" maxlength="150" class="form-control"><?= $barangmasuk['keterangan'] ?></textarea></div>
                                    </div>
                                    <div class="col-lg-8">

                                        <h3 class="float-right mb-3 total" id="total_edit" name="total_edit">Total : <?= $barangmasuk['total_harga'] ?></h3>
                                        <input name="harga_edit" maxlength="50" readonly="readonly" autocomplete="off" hidden id="harga_edit" type="text" class="is-untouched is-pristine av-valid form-control harga" value="<?= $barangmasuk['total_harga'] ?>">
                                    </div>
                                </div><br><br>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="float-left"></div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="float-right"><a class="mr-1" href="<?= base_url(); ?>inventory/barang-masuk/BarangMasuk"><button type="button" class="btn btn-light">Cancel</button></a>
                                            <button type="submit" name="ubah" class="btn btn-primary">Submit</button></div>
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