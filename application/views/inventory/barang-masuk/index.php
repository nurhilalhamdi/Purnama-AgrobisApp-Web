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
                        <h1>Barang Masuk</h1>
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

            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-md-3">
                                <div>
                                    <!-- <button type="button" class="mb-2 btn btn-primary" data-toggle="modal" data-target="#tambahmodal" data-backdrop="static" data-keyboard="false">+ Tambah Barang Masuk</button> -->
                                    <a class="btn btn-primary" href="<?= base_url(); ?>inventory/barang-masuk/BarangMasuk/create" role="button">+ Tambah Barang Masuk</a>
                                </div>
                            </div>


                            <!-- Modal Tambah Produk Masuk-->
                            <div class="modal fade bd-example-modal-produk-masuk-tambah-lg" id="tambahmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Barang Masuk</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form novalidate="" id="formTambah" action="<?php echo base_url() . 'inventory/barang-masuk/BarangMasuk/tambah' ?>" method="post" class="av-invalid">
                                                <div class="form-group">
                                                    <div class="row">

                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Pilih Produk*</label>
                                                                <select class="form-control" id="id_barang" name="id_barang" required>
                                                                    <option>-- Pilih Produk --</option>
                                                                    <?php foreach ($stok as $stk) : ?>
                                                                        <option value="<?= $stk['id_barang']; ?>"><?= $stk['nama']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="startingInventory" class="">Stok Masuk*<i id="startingInventoryHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <input name="stok" id="stok" type="number" class="form-control" value="" required>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="productDescription" class="">Keterangan</label>
                                                            <textarea name="keterangan" id="keterangan" rows="3" maxlength="2000" class="form-control"></textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="productCost" class="">Penerima*<i id="productCostHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <input name="penerima" maxlength="50" autocomplete="off" required="" id="penerima" type="text" class="is-untouched is-pristine av-invalid form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <table class="mb-0 table table-sm table-bordered">
                                                            <thead>
                                                                <tr>
                                                                    <th style="width: 35%;">Nama Produk</th>
                                                                    <th style="width: 5%;">Stok</th>
                                                                    <th style="width: 10%;">Kuantitas</th>
                                                                    <th style="width: 7.5%;">Satuan</th>
                                                                    <th style="width: 15%;">Harga Satuan (Rp)</th>
                                                                    <th style="width: 12.5%;">Jumlah</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr index="0">
                                                                    <td>
                                                                        <select class="form-control" id="id_barang" name="id_barang" required>
                                                                            <option>None</option>
                                                                            <?php foreach ($stok as $stk) : ?>
                                                                                <option value="<?= $stk['id_barang']; ?>"><?= $stk['nama']; ?></option>
                                                                            <?php endforeach; ?>
                                                                        </select>
                                                                    </td>
                                                                    <td class="align-middle"><span></span></td>
                                                                    <td class="align-middle"><input name="quantity" id="quantity-0" type="number" class="form-control-md form-control" value=""></td>
                                                                    <td class="align-middle"><span id="satuanss" name="satuanss"></span></td>
                                                                    <td class="align-middle"><input name="unitPrice" id="unitPrice-0" type="number" class="form-control-md form-control" value=""></td>
                                                                    <td class="align-middle"><span>Rp&nbsp;0</span></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div><br>
                                                <div></div>
                                                <div class="float-right">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Modal Edit Product-->

                            <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Ubah Barang Masuk</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form novalidate="" action="<?= base_url('inventory/barang-masuk/BarangMasuk/ubah') ?>" method="post" class="av-invalid">
                                                <div class="form-group">
                                                    <input type="hidden" name="id" id="id">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label>Pilih Produk*</label>
                                                                <select class="form-control" id="id_barang_edit" name="id_barang_edit">
                                                                    <option>-- Pilih Produk --</option>
                                                                    <?php foreach ($stok as $stk) : ?>
                                                                        <option value="<?= $stk['id_barang']; ?>"><?= $stk['nama']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="startingInventory" class="">Stok Masuk*<i id="startingInventoryHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <input name="stok_edit" id="stok_edit" type="number" class="form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <label for="productDescription" class="">Keterangan</label>
                                                            <textarea name="keterangan_edit" id="keterangan_edit" rows="3" maxlength="2000" class="form-control"></textarea>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label for="productCost" class="">Penerima*<i id="productCostHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <input name="penerima_edit" maxlength="50" autocomplete="off" required="" id="penerima_edit" type="text" class="is-untouched is-pristine av-invalid form-control" value="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                                <div class="float-right">
                                                    <!-- <a href="<?= base_url(); ?>inventory/barang-masuk/BarangMasuk" class="mr-1 btn btn-light">Cancel
                                                    </a> -->
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <button type="submit" name="ubah" class="btn btn-primary">Ubah</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Modal Hapus-->
                            <div class="modal fade" id="modal-default" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">


                                        <div class="modal-body">
                                            <button type="button" class="close float-right" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>



                                            <i class="fal fa-exclamation-triangle fa-7x center"></i>
                                            <br><br>
                                            <h4 class="modal-title text-center" id="exampleModalLabel" style="font-weight: 600;">Apakah anda yakin ?</h4>
                                            <br>
                                            <h5 class="text-center">Data barang akan dihapus</h5>
                                            <br>
                                            <form novalidate="" action="<?= base_url('inventory/barang-masuk/BarangMasuk/hapus') ?>" method="post" class="av-invalid">
                                                <input type="" name="id" id="id" value="" hidden>
                                                <input type="" name="idx" id="idx" value="" hidden>
                                                <div class="center">
                                                    <button type="submit" name="hapus" class="btn btn-primary">Ya, Hapus</button>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                </div>

                                            </form>
                                            <style>
                                                .center {
                                                    text-align: center;
                                                    width: 100%;
                                                }

                                                .fa-exclamation-triangle {
                                                    color: #f8bb86;
                                                }
                                            </style>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <!-- /.modal -->


                            <!--Table -->
                            <div class="col-md-3"></div>
                            <div class="col-md-2"></div>
                            <div class="text-sm-right mt-2 mt-sm-0 col-md-4">
                                <div style="display: flex;">
                                    <input placeholder="Search..." type="text" id="mySearchText" class="mb-2 mr-1 form-control">
                                    <button type="button" class="mb-2 mr-1 btn btn-primary" id="mySearchButton">Search</button></div>
                            </div>
                        </div>

                        <div class="react-bootstrap-table table-responsive col-md-12">
                            <?php if (empty($barangmasuk)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    data barang masuk tidak ditemukan.
                                </div>
                            <?php endif; ?>
                            <table id="barangmasuk" class="table table-striped" style="text-align: center;">
                                <thead>
                                    <tr>

                                        <th tabindex="0" aria-label="Nomor Produk sortable" class="sortable">Kode Masuk<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Nama Produk sortable" class="sortable">Nama Barang<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Kategori sortable" class="sortable">Tanggal Masuk<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Kategori sortable" class="sortable">Kategori<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0">Stok Masuk</th>
                                        <th tabindex="0" aria-label="Satuan sortable" class="sortable">Satuan<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Harga Beli sortable" class="sortable">Penerima<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody id="my-table">
                                    <?php
                                    $no = 1;

                                    if (!empty($barangmasuk)) {
                                        # code...                          
                                        foreach ($barangmasuk as $bm) : ?>
                                            <tr>

                                                <td><?= $bm['nomor_masuk']; ?></td>
                                                <td style="text-align: start;"><a class="text-body nama" href="/products/read/2198">
                                                        <p class="m-0 d-inline-block align-middle font-16 text-primary"><?= $bm['nama']; ?></p>
                                                    </a></td>
                                                <td><?= $bm['tanggal_masuk']; ?></td>
                                                <td><?= $bm['kategori']; ?></td>
                                                <td><span class="m-0 d-inline-block align-middle font-weight-bold text-success"><?= $bm['stok_masuk']; ?></span></td>
                                                <td><?= $bm['satuan']; ?></td>
                                                <td><?= $bm['penerima']; ?></td>
                                                <td class="table-action">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-sm-3">
                                                            <!-- <a id="btnedit" class="action-icon btn-edit" data-id="<?= $bm['id']; ?>" data-idbarangmasuk="<?= $bm['id_barang']; ?>" data-stokmasuk="<?= $bm['stok_masuk']; ?>" data-keterangan="<?= $bm['keterangan']; ?>" data-penerima="<?= $bm['penerima']; ?>" data-toggle="modal" data-target="#editmodal" data-backdrop="static" data-keyboard="false" href="#" ?><i class="fal fa-edit"></i></a> -->

                                                            <a href="<?= base_url(); ?>inventory/barang-masuk/BarangMasuk/edit/<?= $bm['id']; ?>"><i class="fal fa-edit"></i></a>
                                                        </div>
                                                        <div class="col-sm-3"><a class="hapus-masuk" data-id="<?= $bm['id']; ?>" data-idbarangmasuk="<?= $bm['id_barang']; ?>" data-toggle="modal" data-target="#modal-default" href="#"><i class="fal fa-trash-alt"></i></a></div>
                                                        <!-- href="<?= base_url(); ?>inventory/barang-masuk/BarangMasuk/hapus/<?= $bm['id']; ?>" -->
                                                    </div>


                                                </td>
                                            </tr>
                                    <?php endforeach;
                                    } ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- <div class="row">
                            <div class="col"><label class="react-bootstrap-table-pagination-total ml-2">Menampilkan 1 - 1 dari 1</label></div>
                            <div class="react-bootstrap-table-pagination-list col">
                                <ul class="pagination react-bootstrap-table-page-btns-ul">
                                    <li class="active page-item" title="1"><a href="#" class="page-link">1</a></li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- /.card -->
        </section>
        <!-- /.content -->
    </div>
</div>