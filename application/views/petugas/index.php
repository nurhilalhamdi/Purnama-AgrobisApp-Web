  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <div class="container">
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
                          <h1>Daftar Petugas</h1>
                      </div>
                      <div class="col-sm-6">
                          <ol class="breadcrumb float-sm-right">
                              <li class="breadcrumb-item"><a href="#">Home</a></li>
                              <li class="breadcrumb-item active">Daftar Petugas</li>

                          </ol>
                      </div>
                  </div>
              </div><!-- /.container-fluid -->
          </section>

          <!-- Main content -->
          <section class="content">
              <div class="container-fluid">
                  <div class="row">
                      <div class="col-12">
                          <div class="card">

                              <!-- /.card-header -->
                              <div class="card-body">
                                  <?php if (empty($petugas)) : ?>
                                      <div class="alert alert-danger" role="alert">
                                          data petugas tidak ditemukan.
                                      </div>
                                  <?php endif; ?>
                                  <table id="example2" class="table table-bordered table-hover">

                                      <thead style="text-align: center;">
                                          <tr>
                                              <th>No</th>
                                              <th>Nama Petugas</th>
                                              <th>Alamat</th>
                                              <th>Status</th>
                                              <th>#</th>
                                          </tr>
                                      </thead>


                                      <tbody>

                                          <?php
                                            $no = 1;
                                            if (!empty($petugas)) {
                                                # code...                          
                                                foreach ($petugas as $ptgs) : ?>
                                                  <tr>
                                                      <td><?= $no++; ?></td>
                                                      <td><?= $ptgs['nama']; ?>
                                                      </td>
                                                      <td><?= $ptgs['alamat']; ?></td>
                                                      <td><?php
                                                            if ($ptgs['status'] == 'Aktif') { ?>
                                                              <p class="badge badge-success"><?= $ptgs['status']; ?></p>

                                                          <?php } else {
                                                            ?>
                                                              <p class="badge badge-danger"><?= $ptgs['status']; ?></p>

                                                          <?php
                                                            } ?>
                                                      </td>
                                                      <td>

                                                          <a title="Detail" href="<?= base_url(); ?>petugas/ubah/<?= $ptgs['id_user']; ?>" class="btn btn-sm btn-primary">
                                                              <i class="fas fa-edit"></i>
                                                          </a>
                                                          <a title="Hapus" href="<?= base_url(); ?>Petugas/hapus/<?= $ptgs['id_user']; ?>" class="btn btn-sm btn-danger tombol-hapus">
                                                              <i class="fas fa-times"></i>
                                                          </a>


                                                      </td>
                                                  </tr>
                                          <?php endforeach;
                                            } ?>

                                      </tbody>

                                  </table>
                              </div>
                              <!-- /.card-body -->
                          </div>
                      </div>
                  </div>
              </div>
              <!-- /.card -->
          </section>
          <!-- /.content -->
      </div>
  </div>

  <!-- /.content-wrapper -->