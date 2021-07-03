<div class="content-wrapper">
    <!-- Main content -->
    <div class="container">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detil Recording</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>pengecekan/ceksampel/CekSampel">Data Recording Sampel</a></li>
                            <li class="breadcrumb-item active">Detil Recording</li>

                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="col-md-12">
                    <div class="row">

                        <div class="col-lg-9">
                            <div class="form-group">

                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Lokasi Kandang Recording</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="post">
                                            <div id="mapid" style="height: 300px;">
                                            </div>

                                            <script>
                                                var map = L.map('mapid').setView([<?= $ceksampel['latitude'] ?>, <?= $ceksampel['longitude'] ?>], 13);

                                                L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                                                    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
                                                }).addTo(map);

                                                L.marker([<?= $ceksampel['latitude'] ?>, <?= $ceksampel['longitude'] ?>]).addTo(map)
                                                    .bindPopup('Latitude :' + '<?= $ceksampel['latitude'] ?>' + '<br>Longitude :' + '<?= $ceksampel['latitude'] ?>')
                                                    .openPopup();
                                            </script>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Bukti Recording</h3>
                                </div>
                                <!-- /.card-header -->
                                <style>
                                    .img {
                                        width: 100%;
                                        height: 300px;
                                        object-fit: fill;
                                    }
                                </style>
                                <div class="card-body">
                                    <img class="img" src="<?= $ceksampel['file'] ?>" alt="">
                                </div>
                                <!-- /.card-body -->
                            </div>
                        </div>
                    </div>
                </div>

                <!-- /.col -->
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header p-2">
                            <ul class="nav nav-pills">
                                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Informasi Kandang</a></li>
                                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Detil Recording Sampel</a></li>
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
                                    <!-- Post -->
                                    <div class="post">
                                        <strong>Kode Kandang</strong>
                                        <p class="text-muted">
                                            <?= $ceksampel['kode_Kandang'] ?>
                                        </p>
                                        <hr>

                                        <strong>Kode Blok</strong>
                                        <p class="text-muted"><?= $ceksampel['kode_blok'] ?></p>
                                        <hr>

                                        <strong></i>PPL Kandang</strong>
                                        <p class="text-muted"><?= $ceksampel['nama'] ?></p>
                                        <hr>

                                        <strong></i>Tanggal Chickin</strong>
                                        <p class="text-muted"><?= $ceksampel['tanggal_chickin'] ?></p>
                                        <hr>

                                        <strong></i>Periode</strong>
                                        <p class="text-muted"><?= $ceksampel['periode'] ?></p>
                                        <hr>

                                        <strong></i>Jumlah DOC</strong>
                                        <p class="text-muted"><?= $ceksampel['populasi_masuk'] ?></p>
                                        <hr>

                                        <strong></i>Jenis DOC</strong>
                                        <p class="text-muted"><?= $ceksampel['type_produk'] ?></p>
                                        <hr>

                                        <strong></i>Kondisi Awal Diterima</strong>
                                        <p class="text-muted"><?= $ceksampel['kondisi_chick_in'] ?></p>
                                        <hr>

                                    </div>
                                    <!-- /.post -->

                                </div>
                                <!-- /.tab-pane -->
                                <div class="tab-pane" id="timeline">
                                    <div class="row">
                                        <div class="col-lg-12">

                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <table class="table user-view-table m-0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="info">Tanggal Recording</td>
                                                                <td class="info">: <?= $ceksampel['tanggal_waktu_sampel'] ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info">Alamat:</td>
                                                                <td class="info"><span id="alamat" name="alamat">: <?= $ceksampel['alamat_kandang'] ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info">Jenis Kandang:</td>
                                                                <td class="info"><span id="jeniskandang" name="jeniskandang">: <?= $ceksampel['jenis_kandang'] ?></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="info">Status:</td>
                                                                <td class="info"><span id="statuskandang">: <?= $ceksampel['status_kandang'] ?></span></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <hr class="border-light m-0">
                                                <div class="table-responsive">
                                                    <!-- <table class="mb-0 table table-sm table-bordered ">
                                                            <tbody>
                                                                <tr style>
                                                                    <td rowspan="2" style="width: 20%;">Tanggal Recording</td>
                                                                    <td rowspan="2" style="width: 15%;">Usia Ayam</td>
                                                                    <td colspan="2" style="width: 15%;">Populasi Ayam</td>
                                                                    <td colspan="1" style="width: 15%;">Perkembangan Ayam</td>
                                                                    <td colspan="4" style="width: 15%;">Konsumsi Pakan</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Mati</td>
                                                                    <td>Sakit</td>
                                                                    <td>Berat (gr)</td>

                                                                    <td>Mati</td>
                                                                    <td>Sakit</td>
                                                                    <td>Berat (gr)</td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2020-02-02</td>
                                                                    <td>1</td>
                                                                    <td>5</td>
                                                                    <td>3</td>
                                                                    <td>3</td>

                                                                    <td>00</td>
                                                                    <td>123131</td>
                                                                    <td>66666</td>
                                                                </tr>
                                                            </tbody>
                                                        </table> -->

                                                    <style>
                                                        .tables {
                                                            border-spacing: 0;
                                                            border-left: 1px solid #000;
                                                            border-top: 1px solid #000;
                                                        }

                                                        th,
                                                        td {
                                                            border-right: 1px solid #000;
                                                            border-bottom: 1px solid #000;
                                                            padding: 10px 20px;
                                                            text-align: center;
                                                        }
                                                    </style>

                                                    <label class="">Data Ayam Sampel</label><i class="uil-question-circle ml-1"></i>
                                                    <table class="mb-0 tables table-sm table-bordered ">
                                                        <tr style="background-color: cadetblue;">
                                                            <td rowspan="2" style="width: 10%;">
                                                                <font color="#fff" style="font-weight: bold;">Usia Ayam</font>
                                                            </td>
                                                            <td colspan="2" style="width: 15%;">
                                                                <font color="#fff" style="font-weight: bold;">Bobot Sampel</font>
                                                            </td>
                                                            <td rowspan="2" style="width: 10%;">
                                                                <font color="#fff" style="font-weight: bold;">Kondisi Sampel</font>
                                                            </td>

                                                            <td rowspan="2" style="width: 10%;">
                                                                <font color="#fff" style="font-weight: bold;">Jumlah Sampel</font>
                                                            </td>

                                                            <td rowspan="2" style="width: 10%;">
                                                                <font color="#fff" style="font-weight: bold;">Jenis Sampel</font>
                                                            </td>

                                                        </tr>
                                                        <tr style="background-color: cadetblue;">
                                                            <td>
                                                                <font color="#fff" style="font-weight: bold;">Bobot Total (gram)</font>
                                                            </td>
                                                            <td>
                                                                <font color="#fff" style="font-weight: bold;">Bobot Rata Rata (Kg)</font>
                                                            </td>



                                                        </tr>
                                                        <tr>
                                                            <td><?= $ceksampel['umur_ayam'] ?> Hari</td>
                                                            <td><?= $ceksampel['bobot_ayam_sampel'] ?> gram</td>
                                                            <td><?= $ceksampel['bobot_rata_rata'] ?> kilogram</td>
                                                            <td><?= $ceksampel['kondisi_ayam'] ?> Ekor</td>
                                                            <td><?= $ceksampel['jumlah_ayam_sampel'] ?></td>
                                                            <td><?= $ceksampel['jenis_ayam_sampel'] ?></td>
                                                        </tr>

                                                    </table>




                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->

                                <!-- <div class="tab-pane" id="settings">
                                    <form class="form-horizontal">
                                        <div class="form-group row">
                                            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputName2" placeholder="Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="offset-sm-2 col-sm-10">
                                                <button type="submit" class="btn btn-danger">Submit</button>
                                            </div>
                                        </div>
                                    </form>
                                </div> -->
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div><!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.card -->
</div>
</div>



<!-- <div class="content-wrapper">
    <div class="container">
        <section class="content">

            <div class="container-fluid">

                <div class="card">
                    <div class="card-body">
                        <div class="row">

                            <div class="col-lg-3">
                                <div class="form-group"><label class="">Nomor Barang Masuk</label><i class="uil-question-circle ml-1"></i>
                                    <div class="form-group">
                                        <input name="nomor_barang_edit" maxlength="50" readonly="readonly" autocomplete="off" id="nomor_barang_edit" type="text" class="is-untouched is-pristine av-valid form-control" value="<?= $cekharian['gejala_sakit'] ?>">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>
</div> -->