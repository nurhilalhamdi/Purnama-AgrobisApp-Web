       <!-- Content Wrapper. Contains page content -->
       <div class="content-wrapper">
           <!-- Content Header (Page header) -->
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

           <div class="flash-data-fail" data-flashdatafail="<?= $this->session->flashdata('flashfail'); ?>"></div>
           <?php if ($this->session->flashdata('flashfail')) : ?>
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
           <div class="content-header">
               <div class="container-fluid">
                   <div class="row mb-2">
                       <div class="col-sm-6">
                           <h1 class="m-0">Dashboard</h1>
                       </div><!-- /.col -->
                       <div class="col-sm-6">
                           <ol class="breadcrumb float-sm-right">
                               <li class="breadcrumb-item"><a href="#">Home</a></li>
                               <li class="breadcrumb-item active">Dashboard v1</li>
                           </ol>
                       </div><!-- /.col -->
                   </div><!-- /.row -->
               </div><!-- /.container-fluid -->
           </div>
           <!-- /.content-header -->

           <style>
               .card {
                   background-clip: padding-box;
                   box-shadow: 0 1px 4px rgba(24, 28, 33, 0.012);
               }
           </style>
           <!-- Main content -->
           <section class="content">
               <div class="container-fluid">






                   <!-- 
                       <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-content">
                                   <div class="card-body">
                                       <div class="media d-flex">
                                           <div class="align-self-center">
                                               <i class="icon-pencil primary font-large-2 float-left"></i>
                                           </div>
                                           <div class="media-body text-left">
                                               <h3>278</h3>
                                               <span>Masuk</span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>



                       <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-content">
                                   <div class="card-body">
                                       <div class="media d-flex">
                                           <div class="align-self-center">
                                               <i class="icon-pencil primary font-large-2 float-left"></i>
                                           </div>
                                           <div class="media-body text-left">
                                               <h3>278</h3>
                                               <span>Sakit</span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-content">
                                   <div class="card-body">
                                       <div class="media d-flex">
                                           <div class="align-self-center">
                                               <i class="icon-pencil primary font-large-2 float-left"></i>
                                           </div>
                                           <div class="media-body text-left">
                                               <h3>278</h3>
                                               <span>Mati</span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>

                       <div class="col-xl-3 col-sm-6 col-12">
                           <div class="card">
                               <div class="card-content">
                                   <div class="card-body">
                                       <div class="media d-flex">
                                           <div class="align-self-center">
                                               <i class="icon-pencil primary font-large-2 float-left"></i>
                                           </div>
                                           <div class="media-body text-left">
                                               <h3>278</h3>
                                               <span></span>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div> -->



                   <div class="container-fluid">
                       <div class="row">
                           <div class="col">
                               <div class="card shadow">
                                   <div class="card-content">
                                       <div class="card-body">
                                           <div class="media d-flex">
                                               <div class="align-self-center">
                                                   <i class="icon-pencil primary font-large-2 float-left"></i>
                                               </div>
                                               <div class="media-body text-left">

                                                   <?php foreach ($total_populasi as $tpopulasi) : ?>
                                                       <h3 style="font-weight: bold;">
                                                           <font color="#5666d5"><?= $tpopulasi['total_populasi']; ?><span style="font-size: medium;"> Ekor</span></font>
                                                       </h3>
                                                   <?php endforeach; ?>

                                                   <span class="text-muted">Ayam Masuk</span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col">
                               <div class="card shadow">
                                   <div class="card-content">
                                       <div class="card-body">
                                           <div class="media d-flex">
                                               <div class="align-self-center">
                                                   <i class="icon-pencil primary font-large-2 float-left"></i>
                                               </div>
                                               <div class="media-body text-left">

                                                   <?php foreach ($total_hidup as $thidup) : ?>
                                                       <h3 style="font-weight: bold;">
                                                           <font color="#5666d5"><?= $thidup['total_hidup']; ?><span style="font-size: medium;"> Ekor</span></font>
                                                       </h3>
                                                   <?php endforeach; ?>
                                                   <span class="text-muted">Ayam Hidup</span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col">
                               <div class="card shadow">
                                   <div class="card-content">
                                       <div class="card-body">
                                           <div class="media d-flex">
                                               <div class="align-self-center">
                                                   <i class="icon-pencil primary font-large-2 float-left"></i>
                                               </div>
                                               <div class="media-body text-left">
                                                   <?php foreach ($total_panen as $tpanen) : ?>
                                                       <h3 style="font-weight: bold;">
                                                           <font color="#5666d5"><?= $tpanen['total_panen']; ?><span style="font-size: medium;"> Ekor</span></font>
                                                       </h3>
                                                   <?php endforeach; ?>
                                                   <span class="text-muted">Ayam Panen</span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col">
                               <div class="card shadow">
                                   <div class="card-content">
                                       <div class="card-body">
                                           <div class="media d-flex">
                                               <div class="align-self-center">
                                                   <i class="icon-pencil primary font-large-2 float-left"></i>
                                               </div>
                                               <div class="media-body text-left">
                                                   <?php foreach ($total_mati as $tmati) : ?>
                                                       <h3 style="font-weight: bold;">
                                                           <font color="#5666d5"><?= $tmati['total_mati']; ?><span style="font-size: medium;"> Ekor</span></font>
                                                       </h3>
                                                   <?php endforeach; ?>
                                                   <span class="text-muted">Ayam Mati</span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                           <div class="col">
                               <div class="card shadow">
                                   <div class="card-content">
                                       <div class="card-body">
                                           <div class="media d-flex">
                                               <div class="align-self-center">
                                                   <i class="icon-pencil primary font-large-2 float-left"></i>
                                               </div>
                                               <div class="media-body text-left">
                                                   <?php foreach ($total_sakit as $tsakit) : ?>
                                                       <h3 style="font-weight: bold;">
                                                           <font color="#5666d5"><?= $tsakit['total_sakit']; ?><span style="font-size: medium;"> Ekor</span></font>
                                                       </h3>
                                                   <?php endforeach; ?>
                                                   <span class="text-muted">Ayam Sakit</span>
                                               </div>
                                           </div>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div>
                   </div>

                   <br>
                   <div class="row">

                       <!-- ./col -->
                       <div class="col-lg-6 col-6">
                           <!-- small box -->
                           <div class="small-box bgcard">
                               <div class="inner">
                                   <?php
                                    if (empty($petugas)) { ?>
                                       <h3>
                                           <font color="#fff">0</font>
                                       </h3>

                                   <?php } else {
                                    ?>
                                       <h3>
                                           <font color="#fff"><?php echo count($petugas) ?></font>
                                       </h3>
                                   <?php
                                    } ?>
                                   <p>
                                       <font color="#fff">Jumlah Petugas Saat Ini</font>
                                   </p>
                               </div>
                               <div class="icon">
                                   <i class="fal fa-users blackiconcolor"></i>
                               </div>
                               <a href="<?= base_url() ?>Petugas" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                           </div>
                       </div>
                       <!-- ./col -->
                       <style>
                           .bgcard {
                               background-color: #5666d5 !important;
                           }

                           .blackiconcolor {
                               color: white;

                           }
                       </style>
                       <div class="col-lg-6 col-6">
                           <!-- small box -->
                           <div class="small-box bgcard">
                               <div class="inner">
                                   <?php
                                    if (empty($kandang)) { ?>
                                       <h3>
                                           <font color="#fff">0</font>
                                       </h3>

                                   <?php } else {
                                    ?>
                                       <h3>
                                           <font color="#fff"><?php echo count($kandang) ?></font>
                                       </h3>
                                   <?php
                                    } ?>

                                   <p>
                                       <font color="#fff">Total Kandang Saat Ini</font>
                                   </p>
                               </div>
                               <div class="icon">
                                   <i class="fal fa-farm blackiconcolor"></i>
                               </div>
                               <a href="<?= base_url() ?>Kandang" class="small-box-footer">Selengkapnya <i class="fas fa-arrow-circle-right"></i></a>
                           </div>
                       </div>
                       <!-- ./col -->
                   </div>


                   <!-- /.row -->
                   <div class="row">
                       <!-- Left col -->
                       <section class="col-lg-7">
                           <!-- Custom tabs (Charts with tabs)-->
                           <div class="card">
                               <div class="card-header">
                                   <h3 class="card-title">
                                       <i class="fas fa-chart-pie mr-1"></i>
                                       Grafik
                                   </h3>
                                   <div class="card-tools">
                                       <ul class="nav nav-pills ml-auto">
                                           <li class="nav-item">
                                               <a class="nav-link active" href="#masuk-chart" data-toggle="tab">Masuk</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link" href="#hidup-chart" data-toggle="tab">Hidup</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link" href="#mati-chart" data-toggle="tab">Mati</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link" href="#panen-chart" data-toggle="tab">Panen</a>
                                           </li>
                                           <li class="nav-item">
                                               <a class="nav-link" href="#sakit-chart" data-toggle="tab">Sakit</a>
                                           </li>

                                       </ul>
                                   </div>
                               </div><!-- /.card-header -->
                               <div class="card-body">
                                   <div class="tab-content p-0">
                                       <!-- Morris chart - Sales -->
                                       <div class="chart tab-pane active" id="masuk-chart" style="position: relative; height: 300px;">
                                           <canvas id="myChartMasuk"></canvas>
                                       </div>
                                       <div class="chart tab-pane" id="hidup-chart" style="position: relative; height: 300px;">
                                           <canvas id="myChartHidup"></canvas>
                                       </div>
                                       <div class="chart tab-pane" id="mati-chart" style="position: relative; height: 300px;">
                                           <canvas id="myChartMati"></canvas>
                                       </div>
                                       <div class="chart tab-pane" id="panen-chart" style="position: relative; height: 300px;">
                                           <canvas id="myChartPanen"></canvas>
                                       </div>
                                       <div class="chart tab-pane" id="sakit-chart" style="position: relative; height: 300px;">
                                           <canvas id="myChartSakit"></canvas>
                                       </div>
                                   </div>
                               </div><!-- /.card-body -->
                           </div>
                           <!-- /.card -->




                       </section>
                       <!-- /.Left col -->
                       <!-- right col (We are only adding the ID to make the widgets sortable)-->
                       <section class="col-lg-5">

                           <style>
                               .scroll {
                                   max-height: 300px;
                                   overflow-y: auto;
                               }
                           </style>

                           <!-- Modal -->

                           <!-- Modal -->
                           <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                               <div class="modal-dialog modal-lg" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 class="modal-title font-weight-bold text-primary" id="exampleModalLongTitle">Form Request Masuk</h5>
                                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           <form novalidate="" action="<?= base_url('Admin/insert') ?>" method="post" class="av-invalid">

                                               <div class="form-group">
                                                   <div class="row">
                                                       <input type="text" class="form-control" id="id_request" name="id_request" hidden>
                                                       <input type="text" class="form-control" id="id_barang_request" name="id_barang_request" hidden>

                                                       <div class="col-lg-4">
                                                           <div class="form-group">
                                                               <!-- <label for="recipient-name" class="col-form-label">ID REQUEST:</label> -->
                                                               <label for="recipient-name" class="col-form-label">Tanggal Request:</label>
                                                               <input type="text" class="form-control" id="tanggal_request" name="tanggal_request" readonly>
                                                           </div>

                                                       </div>
                                                       <div class="col-lg-3">
                                                           <div class="form-group">
                                                               <label for="recipient-name" class="col-form-label">Nomor Request:</label>
                                                               <input type="text" class="form-control" id="nomor_request" name="nomor_request" readonly>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-3">
                                                           <div class="form-group">
                                                               <label for="recipient-name" class="col-form-label">ID Kandang:</label>
                                                               <input type="text" class="form-control" id="id_kandang_request" name="id_kandang_request" readonly>
                                                           </div>
                                                       </div>



                                                       <div class="col-lg-6">
                                                           <div class="form-group">
                                                               <label for="message-text" class="col-form-label">Catatan Request:</label>
                                                               <textarea class="form-control" id="catatan_request" name="catatan_request" readonly></textarea>
                                                           </div>
                                                       </div>







                                                       <!-- <div class="form-group">
                                                           <label for="message-text" class="col-form-label">Message:</label>
                                                           <textarea class="form-control" id="message-text"></textarea>
                                                       </div> -->
                                                       <br>


                                                       <div class="col-lg-12">
                                                           <!-- <div class="form-check">
                                                               <input class="form-check-input checkbox_check" type="checkbox" value="" id="checkbox_check" name="checkbox_check">
                                                               <label class="form-check-label" for="flexCheckChecked" style="font-size: 14px;">
                                                                   Centang Untuk Merubah Harga Satuan Jika Mengalami Perubahan Harga <span style="color:#FF0000">*</span>
                                                               </label>
                                                           </div> -->
                                                           <table class="mb-0 table table-sm table-bordered">
                                                               <thead>
                                                                   <tr>
                                                                       <th style="width: 20%;">Nama Produk Request</th>
                                                                       <th style="width: 10%;">Kategori</th>
                                                                       <th style="width: 10%;">Stok Sekarang</th>
                                                                       <th style="width: 10%;">Qty Request</th>
                                                                       <th style="width: 7.5%;">Satuan</th>
                                                                       <!-- <th style="width: 12.5%;">Jumlah</th> -->
                                                                   </tr>
                                                               </thead>
                                                               <tbody>
                                                                   <tr>
                                                                       <div class="form-group">
                                                                           <td>

                                                                               <input type="text" class="form-control" id="nama_barang_request" name="nama_barang_request" readonly>
                                                                           </td>
                                                                           <td class="align-middle"><input type="text" class="form-control" id="kategori_request" name="kategori_request" readonly></td>
                                                                           <td class="align-middle"><span id="stok_sekarang_request" name="stok_sekarang_request"></span></td>
                                                                           <td class="align-middle"><input name="qty_request" id="qty_request" type="number" class="form-control-md form-control" value="" readonly></td>
                                                                           <td class="align-middle"><span id="satuan_request" name="satuan_request"></span></td>
                                                                           <!-- <td class="align-middle"><input name="harga_satuan_edit" id="harga_satuan_edit" readonly type="text" class="form-control-md form-control hargaSatuan" value=""></td> -->
                                                                           <!-- <td class="align-middle"><input name="harga" maxlength="50" readonly="readonly" autocomplete="off" id="harga" type="text" class="is-untouched is-pristine av-valid form-control harga" value=""></td> -->
                                                                       </div>
                                                                   </tr>
                                                               </tbody>
                                                           </table>
                                                       </div>
                                                       <br>

                                                       <!-- <div class="row">
                                                           <div class="col-lg-6">
                                                               <br>
                                                               <div class="form-check form-check-inline">
                                                                   <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                                   <label class="form-check-label" for="inlineRadio1">Setuju</label>
                                                               </div>
                                                               <div class="form-check form-check-inline">
                                                                   <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                                   <label class="form-check-label" for="inlineRadio2">Tidak Setuju</label>
                                                               </div>

                                                           </div>

                                                           <div class="col-lg-4">
                                                               <select class="form-control" id="id_barang_edit" name="id_barang_edit" required>
                                                                   <option>None</option>
                                                                   <?php foreach ($stok as $stk) : ?>
                                                                   <option value="<?= $stk['id_barang']; ?>" <?= $stk['id_barang'] == $barangmasuk['id_barang'] ? "selected" : null; ?>><?= $stk['nama']; ?></option>
                                                               <?php endforeach; ?>
                                                               </select>
                                                           </div>
                                                       </div> -->

                                                       <div class="col-lg-4">
                                                           <div class="form-group">
                                                               <label for="recipient-name" class="col-form-label">Status Request:</label>
                                                               <select class="form-control" id="id_status" name="id_status" required>
                                                                   <option>None</option>
                                                                   <?php foreach ($status as $sts) : ?>
                                                                       <option value="<?= $sts['id_status']; ?>"><?= $sts['status']; ?></option>
                                                                   <?php endforeach; ?>
                                                               </select>
                                                           </div>
                                                       </div>
                                                       <div class="col-lg-6">

                                                           <!-- <div class="form-check form-check-inline">
                                                               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                                                               <label class="form-check-label" for="inlineRadio1">Setuju</label>
                                                           </div>
                                                           <div class="form-check form-check-inline">
                                                               <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                                                               <label class="form-check-label" for="inlineRadio2">Tidak Setuju</label>
                                                           </div> -->
                                                           <div class="form-group">
                                                               <div class="status" hidden>
                                                                   <label for="message-text" id="ket" class="col-form-label">Keterangan Status:</label>
                                                                   <textarea class="form-control" id="keterangan_status" name="keterangan_status"></textarea>
                                                               </div>
                                                           </div>
                                                       </div>




                                                   </div>
                                               </div>


                                               <div class="modal-footer">
                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                   <button type="submit" name="insert" class="btn btn-primary">Save changes</button>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>

                           <!-- PRODUCT LIST -->
                           <div class="card" id="show_data">
                               <div class="card-header">
                                   <h3 class="card-title">Request Masuk</h3>

                                   <div class="card-tools">
                                       <span class="badge badge-danger"><?= sizeof($request) ?> Request Masuk</span>
                                       <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                           <i class="fas fa-minus"></i>
                                       </button>
                                       <button type="button" class="btn btn-tool" data-card-widget="remove">
                                           <i class="fas fa-times"></i>
                                       </button>
                                   </div>
                               </div>
                               <!-- /.card-header -->

                               <div class="card-body p-0 scroll">

                                   <?php
                                    if (sizeof($request) == 0) {
                                    ?>
                                       <a href="#" class="dropdown-item">
                                           <!-- Message Start -->
                                           <div class="media">
                                               <div class="media-body">
                                                   <h3 class="dropdown-item-title">
                                                       Tidak Ada Notifikasi
                                                   </h3>
                                               </div>
                                           </div>
                                           <!-- Message End -->
                                       </a>
                                       <div class="dropdown-divider"></div>
                                   <?php
                                    }
                                    foreach ($request as $ln) : ?>

                                       <!-- <a id="btnedit" class="action-icon btn-edit" data-id="<?= $bm['id']; ?>" data-idbarangmasuk="<?= $bm['id_barang']; ?>" data-stokmasuk="<?= $bm['stok_masuk']; ?>" data-keterangan="<?= $bm['keterangan']; ?>" data-penerima="<?= $bm['penerima']; ?>" data-toggle="modal" data-target="#editmodal" data-backdrop="static" data-keyboard="false" href="#" ?><i class="fal fa-edit"></i></a> -->
                                       <a href="#" class="dropdown-item notifikasi" data-id="<?= $ln['id']; ?>" data-keterangan="<?= $ln['keterangan']; ?>" data-idbarang="<?= $ln['id_barang']; ?>" data-idstatus="<?= $ln['id_status']; ?>" data-tanggalreq="<?= $ln['tanggal_request']; ?>" data-nomorreq="<?= $ln['nomor_request']; ?>" data-idkandang="<?= $ln['id_kandang']; ?>" data-barangreq="<?= $ln['nama']; ?>" data-kategori="<?= $ln['kategori']; ?>" data-satuan="<?= $ln['satuan']; ?>" data-jumlahreq="<?= $ln['jumlah_request']; ?>" data-stok="<?= $ln['stok']; ?>" data-catatan="<?= $ln['catatan']; ?>" data-toggle="modal" data-target="#modal1">
                                           <!-- Message Start -->
                                           <div class="media">
                                               <div class="media-body">
                                                   <h3 class="dropdown-item-title" style="font-weight: bold;">
                                                       <?= $ln['nomor_request']; ?>

                                                       <?php
                                                        if ($ln['status'] == "Request Sedang Diproses") { ?>
                                                           <span class="float-right text-sm text-primary"><?= $ln['status']; ?></span>
                                                       <?php } elseif ($ln['status'] == "Request Ditangguhkan") { ?>
                                                           <span class="float-right text-sm text-warning"><?= $ln['status']; ?></span>
                                                       <?php } elseif ($ln['status'] == "Request Diterima") { ?>
                                                           <span class="float-right text-sm text-success"><?= $ln['status']; ?></span>
                                                       <?php } elseif ($ln['status'] == "Request Ditolak") { ?>
                                                           <span class="float-right text-sm text-danger"><?= $ln['status']; ?></span>
                                                       <?php }

                                                        ?>

                                                   </h3>
                                                   <span class="text-md">ID Kandang
                                                       <?= $ln['id_kandang']; ?>
                                                   </span>

                                                   <p class="text-sm">Pengajuan Barang Berupa <?= $ln['kategori']; ?> Merk <?= $ln['nama']; ?></p>
                                                   <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i><time class="timeago" datetime="<?= $ln['tanggal_request']; ?>"></time></p>
                                               </div>
                                           </div>
                                           <!-- Message End -->
                                       </a>
                                       <div class="dropdown-divider"></div>
                                   <?php endforeach ?>
                               </div>
                               <!-- /.card-body -->
                               <div class="card-footer text-center">
                                   <a href="javascript:void(0)" class="uppercase">Lihat semua notifikasi</a>
                               </div>
                               <!-- /.card-footer -->
                           </div>
                           <!-- /.card -->
                           <!-- /.card -->
                       </section>
                       <!-- right col -->
                   </div>
                   <!-- /.row (main row) -->
               </div><!-- /.container-fluid -->
           </section>
           <!-- /.content -->
       </div>
       <!-- /.content-wrapper -->