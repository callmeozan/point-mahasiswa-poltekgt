<?= $this->extend('mahasiswa/default') ?>
<?= $this->section('konten') ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box" style="background-color: var(--bs-tertiary-bg); color: var(--bs-light-text-emphasis);">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-plus"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">PLUS POINT</span>
            <h1 class="h5 mb-0 mr-3 font-weight-bold" style="color: var(--bg-light);"><?= $plus; ?></h1>
          </div>
        </div>
      </div>
      <!-- /.col -->

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3" style="background-color: var(--bs-tertiary-bg); color: var(--bs-light-text-emphasis);">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-minus"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">MINUS POINT</span>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $minus; ?></div>
          </div>
        </div>
      </div>
      <!-- /.col -->

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3" style="background-color: var(--bs-tertiary-bg); color: var(--bs-light-text-emphasis);">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-database"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">TOTAL</span>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $totalPoin; ?></div>
          </div>
        </div>
      </div>
      <!-- /.col -->

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3" style="background-color: var(--bs-tertiary-bg); color: var(--bs-light-text-emphasis);">
          <span class="info-box-icon bg-info elevation-1"><i class="fas fa-<?= ($plus < $minus) ? 'bookmark' : 'thumbs-up'  ?> fa-1x text-dark-300"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">KETERANGAN</span>
            <span class="info-box-number">
              <?php if ($plus < $minus) : ?> <p class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Harus Diperbaiki !!!</p>
              <?php else : ?>
                <div>Bagus, tingkatkan terus</div>
                <!-- <div class="progress progress-sm mr-2">
                  <div class="progress-bar bg-primary" role="progressbar" style="width: calc(10% + <?= $plus + $minus; ?>%) " aria-valuenow="<?= $plus + $minus; ?>" aria-valuemin="0" aria-valuemax="90"></div>
                </div> -->
              <?php endif ?>
            </span>
          </div>
        </div>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-default-success" role="alert"><?= session()->getFlashdata('pesan'); ?></div>
    <?php endif ?>

    <div class="row">
      <div class="col-md-12">
        <div class="card" style="background-color: var(--bs-tertiary-bg);">
          <div class="card-header">
            <h5 class="card-title">Monthly Recap Report</h5>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <!-- <div class="btn-group">
                <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                  <i class="fas fa-wrench"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-right" role="menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <a href="#" class="dropdown-item">Something else here</a>
                  <a class="dropdown-divider"></a>
                  <a href="#" class="dropdown-item">Separated link</a>
                </div>
              </div> -->
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->

          <div class="card-body">
            <div class="row">
              <div class="col-md-8">
                <p class="text-center">
                  <strong><?= $dateString; ?></strong>
                </p>

                <div class="chart">
                  <!-- Sales Chart Canvas -->
                  <canvas id="salesChart" height="180" style="width: calc(10% + <?= $plus + $minus; ?>%)" aria-valuenow="<?= $plus + $minus; ?>" aria-valuemin="0" aria-valuemax="90"></canvas>
                </div>
                <!-- /.chart-responsive -->
              </div>
              <!-- /.col -->
              <div class="col-md-4">
                <p class="text-center">
                  <strong>Akumulasi Point</strong>
                </p>

                <div class="progress-group">
                  Plus Point
                  <span class="float-right"><b><?= $plus; ?></b>/<?= $plus; ?></span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-total" style="width: calc(10% + <?= $plus + $minus; ?>%)" aria-valuenow="<?= $plus + $minus; ?>" aria-valuemin="0" aria-valuemax="90"></div>
                  </div>
                </div>
                <!-- /.progress-group -->

                <div class="progress-group">
                  Minus Point
                  <span class="float-right"><b><?= $minus; ?></b>/80</span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-danger" style="width: calc(10% + <?= $plus + $minus; ?>%)" aria-valuenow="<?= $plus + $minus; ?>" aria-valuemin="0" aria-valuemax="90"></div>
                  </div>
                </div>

                <!-- /.progress-group -->
                <div class="progress-group">
                  <span class="progress-text">Total</span>
                  <span class="float-right"><b><?= $totalPoin; ?></b>/<?= $totalPoin; ?></span>
                  <div class="progress progress-sm">
                    <div class="progress-bar bg-warning" style="width: calc(<?= $plus + $minus; ?>%)" aria-valuenow="<?= $plus + $minus; ?>" aria-valuemin="0" aria-valuemax="90"></div>
                  </div>
                </div>
                <!-- /.progress-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
        </div>
      </div>
    </div>

    <div class="card">
      <div class="card-header" style="background-color: var(--bs-tertiary-bg);">
        <h1 class="h3 mb-0">Catatan Poin Kondite Kamu</h1>
        <!-- /.card-header -->
        <div class="card-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>NO</th>
                <th>Jenis</th>
                <th>Point</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php $i = 1; ?>
              <?php foreach ($tambahData as $data) : ?>
                <tr>
                  <td><?= $i++ ?></td>
                  <td><?= $data['jenis'] ?></td>
                  <td><?= $data['point'] ?></td>
                  <td><?= $data['keterangan'] ?></td>
                  <td><?= $data['tanggal'] ?></td>

                  <!-- Status Konfirmasi -->
                  <?php if ($data['konfirmasi'] == 'Menunggu Konfirmasi') : ?>
                    <td>
                      <p class="badge badge-warning" style="font-size: 13px;"><?= $data['konfirmasi']; ?></p>
                    </td>

                  <?php elseif ($data['konfirmasi'] == 'Disetujui') : ?>
                    <td>
                      <p class="badge badge-success" style="font-size: 13px;"><?= $data['konfirmasi']; ?></p>
                    </td>

                  <?php elseif ($data['konfirmasi'] == 'Ditolak') : ?>
                    <td>
                      <p class="badge badge-danger" style="font-size: 13px;"><?= $data['konfirmasi']; ?></p>
                    </td>

                  <?php endif ?>

                  <!-- Button Edit dan Delete-->
                  <?php if ($data['konfirmasi'] == 'Menunggu Konfirmasi') : ?>
                    <td>
                      <a role="button" href="<?= base_url('/data/edit/') . $data['id']; ?> " class="btn btn-outline-success btn-sm" data-toggle="modal" data-target="#modal-edit" data-id="<?= $data['id'] ?>" data-jenis="<?= $data['jenis'] ?>" data-point="<?= $data['point'] ?>" data-keterangan="<?= $data['keterangan'] ?>">
                        <i class="fas fa-edit" aria-hidden="true"></i> EDIT</a>
                      <a role="button" href="<?= base_url('/data/delete/') . $data['id']; ?>" class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#konfirmasi-hapus" data-id="<?= $data['id'] ?>"><i class="fas fa-trash" aria-hidden="true">
                        </i> DELETE</a>
                    </td>
                  <?php else : ?>
                    <?php if ($data['konfirmasi'] == 'Disetujui') : ?>
                      <td>
                        <div class="alert" role="alert" style="background-color: var(--bs-success);">
                          Pengajuan Disetujui!
                        </div>
                      </td>
                    <?php endif ?>
                    <?php if ($data['konfirmasi'] == 'Ditolak') : ?>
                      <td>
                        <div class="alert" role="alert" style="background-color: var(--bs-danger);">
                          Pengajuan Ditolak!
                        </div>
                      </td>
                    <?php endif ?>
                  <?php endif ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
            <tfoot>
              <tr>
                <th>NO</th>
                <th>Jenis</th>
                <th>Point</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!--/. container-fluid -->
</section>

<!-- MODAL KONFIRMASI HAPUS-->
<div class="modal fade" id="konfirmasi-hapus" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: var(--bs-tertiary-bg);">
      <div class="modal-header">
        <h5 id="exampleModalLabel">KONFIRMASI HAPUS</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Anda yakin Ingin menghapus Data?</h3>
        <small>Data yang sudah dihapus tidak bisa dikembalikan</small>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
        <a id="btn-hapus" type="button" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>

<!-- MODAL EDIT DATA-->
<div class="modal fade" id="modal-edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form id="form-edit" action="<?= base_url('data/update'); ?>" method="post" style="background-color: var(--bs-tertiary-bg);">
        <div class="modal-header">
          <h5 class="" id="exampleModalLabel">EDIT DATA</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <input type="hidden" id="id" name="id">
          <div class="form-group">

            <label for="recipient-name" class="col-form-label">Jenis:</label>
            <input type="text" class="form-control" id="jenis" name="jenis">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Point:</label>
            <input type="text" class="form-control" id="point" name="point">
          </div>

          <div class=" form-group">
            <label for="recipient-name" class="col-form-label">Keterangan:</label>
            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
          <button id="btn-edit" type="submit" class="btn btn-primary">Edit Data</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- /.content -->
<?= $this->endSection(); ?>