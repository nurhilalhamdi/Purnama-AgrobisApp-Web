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
                        <h1>Daftar Kandang</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Daftar Kandang</li>

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


                            <!--Table -->
                            <div class="col-md-3"></div>
                            <div class="col-md-2"></div>
                            <div class="text-sm-right mt-2 mt-sm-0 col-md-7">
                                <div style="display: flex;">
                                    <input placeholder="Search..." type="text" id="mySearchText" class="mb-2 mr-1 form-control">
                                    <button type="button" class="mb-2 mr-1 btn btn-primary" id="mySearchButton">Search</button>
                                </div>
                            </div>
                        </div>

                        <div class="react-bootstrap-table table-responsive col-md-12">
                            <?php if (empty($kandangmodel)) : ?>
                                <div class="alert alert-danger" role="alert">
                                    data kandang tidak ditemukan.
                                </div>
                            <?php endif; ?>
                            <table id="barangmasuk" class="table table-striped" style="text-align: center;">
                                <thead>
                                    <tr>

                                        <th tabindex="0" aria-label="Nomor Produk sortable" class="sortable">No<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Nomor Produk sortable" class="sortable">Id Kandang<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Nomor Produk sortable" class="sortable">Kode Kandang<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Nama Produk sortable" class="sortable">Kode Blok<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>
                                        <th tabindex="0" aria-label="Kategori sortable" class="sortable">Jenis Kandang<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>

                                        <th tabindex="0" aria-label="Nomor Produk sortable" class="sortable">Alamat Kandang<span class="order"><span class="dropdown"><span class="caret"></span></span><span class="dropup"><span class="caret"></span></span></span></th>

                                        <th tabindex="0">Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody id="my-table">
                                    <?php
                                    $no = 1;

                                    if (!empty($kandangmodel)) {
                                        # code...                          
                                        foreach ($kandangmodel as $kdg) : ?>
                                            <tr>

                                                <td><?= $no++; ?></td>
                                                <td style="text-align: start;"><a class="text-body nama" href="/products/read/2198">
                                                        <p class="m-0 d-inline-block align-middle font-16 text -6"><?= $kdg['id_kandang']; ?></p>
                                                    </a></td>

                                                <td><?= $kdg['kode_Kandang']; ?></td>
                                                <td><?= $kdg['kode_blok']; ?></td>
                                                <td><span class="m-0 d-inline-block align-middle font-weight-bold text-success"><?= $kdg['jenis_kandang']; ?></span></td>
                                                <td style="text-align: start;"><a class="text-body nama" href="/products/read/2198">
                                                        <p class="m-0 d-inline-block align-middle font-16 text -6"><?= $kdg['alamat_kandang']; ?></p>
                                                    </a></td>
                                                <td class="table-action">
                                                    <div class="row d-flex justify-content-center">
                                                        <div class="col-sm-3">

                                                            <a href="<?= base_url(); ?>kandang/detil/<?= $kdg['id_kandang']; ?>">
                                                                <i class="fal fa-edit"></i>
                                                            </a>
                                                            <!-- <a href="<?= base_url(); ?>inventory/barang-masuk/BarangMasuk/edit/<?= $bm['id']; ?>"><i class="fal fa-edit"></i></a> -->
                                                        </div>
                                                        <div class="col-sm-3">
                                                            <a href="<?= base_url(); ?>petugas/ubah/<?= $kdg['id_kandang']; ?>">
                                                                <i class="fal fa-trash-alt"></i>

                                                            </a>
                                                        </div>
                                                        <!-- <div class="col-sm-3"><a class="hapus-masuk" data-id="<?= $bm['id']; ?>" data-idbarangmasuk="<?= $bm['id_barang']; ?>" data-toggle="modal" data-target="#modal-default" href="#"><i class="fal fa-trash-alt"></i></a></div> -->

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