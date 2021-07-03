<div class="content-wrapper">
    <div class="container">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>"></div>
        <?php if ($this->session->flashdata('flash')) : ?>

        <?php endif; ?>


        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Stok Barang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Stok Barang</li>

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
                                <div><button type="button" class="mb-2 btn btn-primary" id="btn-tambah" data-kode="<?= $kode ?>" data-toggle="modal" data-target="#tambah-stok-barang-modal" data-backdrop="static" data-keyboard="false">+ Tambah Stok</button> </div>
                            </div>


                            <!-- Modal Tambah Stok Barang-->
                            <div class="modal fade" id="tambah-stok-barang-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Tambah Stok Barang</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form novalidate="" id="formTambah" action="<?php echo base_url() . 'inventory/stok-barang/StokBarang/tambah' ?>" method="post" class="av-invalid">

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label for="startingInventory" class="">Kode Barang*<i id="startingInventoryHintIcon" class="uil-question-circle ml-1"></i></label>
                                                            <input name="kode" id="kode" type="text" readonly="readonly" class="form-control" value="">

                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="productCost" class="">Nama Barang*<i id="productCostHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <input name="nama" maxlength="50" autocomplete="off" required="" id="nama" type="text" class="is-untouched is-pristine av-invalid form-control" value="">
                                                                <div id="msgNama"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <!-- select Kategori-->
                                                                <div class="form-group">
                                                                    <label>Kategori*</label>
                                                                    <select class="form-control" id="id_kategori" name="id_kategori">
                                                                        <option>-- Pilih Kategori --</option>
                                                                        <?php foreach ($kategori as $kg) : ?>
                                                                            <option value="<?= $kg['id_kategori']; ?>"><?= $kg['kategori']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                    <div id="msgKategori"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="productDescription" class="">Deskripsi</label>
                                                                <textarea name="deskripsi" id="deskripsi" rows="3" maxlength="2000" class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>Satuan*</label>
                                                                <select class="form-control" id="id_satuan" name="id_satuan">
                                                                    <option>-- Pilih Satuan --</option>
                                                                    <?php foreach ($satuan as $st) : ?>
                                                                        <option value="<?= $st['id_satuan']; ?>"><?= $st['satuan']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                                <div id="msgSatuan"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4"><label for="startingInventory" class="">Stok Awal*<i id="startingInventoryHintIcon" class="uil-question-circle ml-1"></i></label>
                                                            <input name="stok" id="stok" type="number" class="form-control" value="">
                                                            <div id="msgStok"></div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group"><label for="productCost" class="">Harga Beli*<i id="productCostHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                                    <input name="harga" autocomplete="off" max="1000000000000000" min="[object Object]" step="0.01" id="harga" type="text" class="is-untouched is-pristine av-valid form-control" value="">
                                                                    <div class="valid-feedback">Invalid input</div>
                                                                    <div id="msgHarga"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group"><label for="productCost" class="">Modal Pembelian*<i id="productModalCostHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span> </div>
                                                                    <input name="modal" autocomplete="off" max="1000000000000000" min="[object Object]" step="0.01" id="modal" type="text" class="is-untouched is-pristine av-valid form-control" value="">
                                                                    <div class="valid-feedback">Invalid input</div>
                                                                    <div id="msgModal"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div></div>
                                                <div class="float-right">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <button type="submit" class="btn btn-primary">Submit</button></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--Modal Edit Stok Barang-->
                            <div class="modal fade" id="edit-stok-barang-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Ubah Stok Barang</h5>
                                        </div>
                                        <div class="modal-body">
                                            <form novalidate="" action="<?= base_url('inventory/stok-barang/StokBarang/ubah') ?>" method="post" class="av-invalid">
                                                <input type="hidden" name="id_barang_edit" id="id_barang_edit">
                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4">
                                                            <label for="startingInventory" class="">Kode Barang*<i id="startingInventoryHintIcon" class="uil-question-circle ml-1"></i></label>
                                                            <input name="kode_edit" id="kode_edit" type="text" readonly="readonly" class="form-control" value="">
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label for="productCost" class="">Nama Barang*<i id="productCostHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <input name="nama_edit" maxlength="50" autocomplete="off" required="" id="nama_edit" type="text" class="is-untouched is-pristine av-invalid form-control" value="">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <!-- select Kategori-->
                                                                <div class="form-group">
                                                                    <label>Kategori*</label>
                                                                    <select class="form-control" id="id_kategori_edit" name="id_kategori_edit">
                                                                        <option>-- Pilih Kategori --</option>
                                                                        <?php foreach ($kategori as $kg) : ?>
                                                                            <option value="<?= $kg['id_kategori']; ?>"><?= $kg['kategori']; ?></option>
                                                                        <?php endforeach; ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-8">
                                                            <div class="form-group">
                                                                <label for="productDescription" class="">Deskripsi</label>
                                                                <textarea name="deskripsi_edit" id="deskripsi_edit" rows="3" maxlength="2000" class="form-control"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group">
                                                                <label>Satuan*</label>
                                                                <select class="form-control" id="id_satuan_edit" name="id_satuan_edit">
                                                                    <option>-- Pilih Satuan --</option>
                                                                    <?php foreach ($satuan as $st) : ?>
                                                                        <option value="<?= $st['id_satuan']; ?>"><?= $st['satuan']; ?></option>
                                                                    <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="row">
                                                        <div class="col-lg-4"><label for="startingInventory" class="">Stok Awal*<i id="startingInventoryHintIcon" class="uil-question-circle ml-1"></i></label>
                                                            <input name="stok_edit" id="stok_edit" type="number" class="form-control" value="">
                                                        </div>

                                                        <div class="col-lg-4">
                                                            <div class="form-group"><label for="productCost" class="">Harga Beli*<i id="productCostHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                                                                    <input name="harga_edit" autocomplete="off" max="1000000000000000" min="[object Object]" step="0.01" id="harga_edit" type="text" class="is-untouched is-pristine av-valid form-control" value="">
                                                                    <div class="valid-feedback">Invalid input</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-4">
                                                            <div class="form-group"><label for="productCost" class="">Modal Pembelian*<i id="productModalCostHintIcon" class="uil-question-circle ml-1"></i></label>
                                                                <div class="input-group">
                                                                    <div class="input-group-prepend"><span class="input-group-text">Rp</span> </div>
                                                                    <input name="modal_edit" autocomplete="off" max="1000000000000000" min="[object Object]" step="0.01" id="modal_edit" type="text" class="is-untouched is-pristine av-valid form-control" value="">
                                                                    <div class="valid-feedback">Invalid input</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div></div>
                                                <div class="float-right">
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                                                    <button type="submit" name="ubah" class="btn btn-primary">Ubah</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!--Table -->
                            <div class="col-md-3"></div>
                            <div class="col-md-2"></div>
                            <div class="text-sm-right mt-2 mt-sm-0 col-md-4">
                                <div style="display: flex;">
                                    <input placeholder="Search..." type="text" id="mySearchText" class="mb-2 mr-1 form-control">
                                    <button type="button" class="mb-2 mr-1 btn btn-primary" id="cari-stok">Search</button></div>
                            </div>
                        </div>

                        <div class="react-bootstrap-table table-responsive col-md-12">
                            <?php if (empty($stokbarang)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    data stok barang tidak ditemukan.
                                </div>
                            <?php endif; ?>
                            <table id="stokbarang" class="table table-striped" style="text-align: center;">
                                <thead>
                                    <tr>
                                        <th tabindex="0" aria-label="Nomor Produk sortable" class="sortable">Nomor<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Nomor Produk sortable" class="sortable">Kode Barang<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Nama Produk sortable" class="sortable">Nama Barang<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Kategori sortable" class="sortable">Kategori<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0">Stok</th>
                                        <th tabindex="0" aria-label="Satuan sortable" class="sortable">Satuan<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Harga Beli sortable" class="sortable">Harga Beli<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;

                                    if (!empty($stokbarang)) {
                                        # code...                          
                                        foreach ($stokbarang as $stk) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $stk['kode']; ?></td>
                                                <td style="text-align: start;"><a class="text-body" href="/products/read/2198">
                                                        <p class="m-0 d-inline-block align-middle font-16 text-primary"><?= $stk['nama']; ?></p>
                                                    </a></td>
                                                <td><?= $stk['kategori']; ?></td>
                                                <td>
                                                    <?php
                                                    if ($stk['stok'] >= 10) { ?>
                                                        <span class="m-0 d-inline-block align-middle font-weight-bold text-success"><?= $stk['stok']; ?>

                                                        <?php } elseif ($stk['stok'] > 5 && $stk['stok'] < 10) { ?>
                                                            <span class="m-0 d-inline-block align-middle font-weight-bold text-warning"><?= $stk['stok']; ?>
                                                            <?php } else {
                                                            ?>
                                                                <span class="m-0 d-inline-block align-middle font-weight-bold text-danger"><?= $stk['stok']; ?>

                                                                <?php
                                                            } ?>

                                                                </span></td>
                                                <td><?= $stk['satuan']; ?></td>
                                                <td>Rp&nbsp;<?= $stk['harga']; ?></td>
                                                <td class="table-action">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-sm-3"><a id="btneditbarang" data-id_barang_edit="<?= $stk['id_barang']; ?>" data-deskripsi_edit="<?= $stk['deskripsi']; ?>" data-nama_edit="<?= $stk['nama']; ?>" data-id_kategori_edit="<?= $stk['id_kategori']; ?>" data-stok_edit="<?= $stk['stok']; ?>" data-id_satuan_edit="<?= $stk['id_satuan']; ?>" data-harga_edit="<?= $stk['harga']; ?>" data-modal_edit="<?= $stk['modal']; ?>" data-kode_edit="<?= $stk['kode']; ?>" class="action-icon btn-edit" data-toggle="modal" data-target="#edit-stok-barang-modal" data-backdrop="static" data-keyboard="false" href="#" ?><i class="fal fa-edit"></i></a></div>
                                                        <div class="col-sm-3"><a class="hapus" href="<?= base_url(); ?>inventory/stok-barang/StokBarang/hapus/<?= $stk['id_barang']; ?>"><i class="fal fa-trash-alt"></i></a></div>
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