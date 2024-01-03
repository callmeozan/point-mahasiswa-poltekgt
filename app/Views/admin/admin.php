<?= $this->extend('admin/default-admin') ?>
<?= $this->section('konten-admin') ?>
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Info boxes -->
    <div class="row">
      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box" style="background-color: var(--bs-tertiary-bg); color: var(--bs-light-text-emphasis);">
          <span class="info-box-icon bg-success elevation-1"><i class="fas fa-thumbs-up"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">DISETUJUI</span>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $disetujui; ?></div>
          </div>
        </div>
      </div>
      <!-- /.col -->

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3" style="background-color: var(--bs-tertiary-bg); color: var(--bs-light-text-emphasis);">
          <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-down"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">DITOLAK</span>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $ditolak; ?></div>
          </div>
        </div>
      </div>
      <!-- /.col -->

      <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3" style="background-color: var(--bs-tertiary-bg); color: var(--bs-light-text-emphasis);">
          <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-hourglass-half"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">MENUNGGU KONFIRMASI</span>
            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= $konfirmasi; ?></div>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <?php if (session()->getFlashdata('pesan')) : ?>
      <div class="alert alert-default-success" role="alert"><?= session()->getFlashdata('pesan'); ?></div>
    <?php endif ?>

    <div class="card">
      <div class="card-header" style="background-color: var(--bs-tertiary-bg);">
        <h1 class="h3 mb-0">Data Pelanggaran Mahasiswa</h1>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="table-responsive">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>NO</th>
                  <th>Nama Mahasiswa</th>
                  <th>Jenis</th>
                  <th>Point</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $i = 1; ?>
                <?php foreach ($tambahData as $data) : ?>
                  <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $data['nama']; ?></td>
                    <td><?= $data['jenis']; ?></td>
                    <td><?= $data['point']; ?></td>
                    <td><?= $data['keterangan']; ?></td>
                    <td><?= $data['tanggal']; ?></td>


                    <?php if ($data['konfirmasi'] == 'Menunggu Konfirmasi') : ?>
                      <td>
                        <a role="button" href="<?= base_url('/data/setuju/' . $data['id']); ?>" data-id="<?= $data['id']; ?>" class="btn btn-outline-success btn-sm" style="font-size: 14px;">Setuju</a>
                        <a role="button" href="<?= base_url('/data/tolak/' . $data['id']); ?>" data-id="<?= $data['id']; ?>" class="btn btn-outline-danger btn-sm" style="font-size: 14px;">Tolak</a>
                      </td>

                    <?php else : ?>
                      <?php if ($data['konfirmasi'] == 'Disetujui') : ?>
                        <td>
                          <p class="badge badge-success" style="font-size: 13px;"><?= $data['konfirmasi']; ?></p>
                          <a role="button" href="<?= base_url('/data/konfirmasi/' . $data['id']); ?>" data-id="<?= $data['id']; ?>" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#konfirmasi-batal" style="font-size: 12px;"><i class="fas fa-ban" aria-hidden="true">
                            </i> Batal</a>
                        </td>
                      <?php elseif ($data['konfirmasi'] == 'Ditolak') : ?>
                        <td>
                          <p class="badge badge-danger" style="font-size: 13px;"><?= $data['konfirmasi']; ?></p>
                          <a role="button" href="<?= base_url('/data/konfirmasi/' . $data['id']); ?>" data-id="<?= $data['id']; ?>" class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#konfirmasi-batal" style="font-size: 12px;"><i class="fas fa-ban" aria-hidden="true"></i> Batal</a>
                        </td>

                      <?php endif ?>
                    <?php endif ?>
                  </tr>
                <?php endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>NO</th>
                  <th>Nama Mahasiswa</th>
                  <th>Jenis</th>
                  <th>Point</th>
                  <th>Keterangan</th>
                  <th>Tanggal</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div>
        </div>
      </div>
    </div>
    <!-- /.card -->
  </div>
  <!--/. container-fluid -->
</section>

<!-- Konfirmasi Pembatalan -->
<div class="modal fade" id="konfirmasi-batal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: var(--bs-tertiary-bg);">
      <div class="modal-header">
        <h5 id="exampleModalLabel">KONFIRMASI PEMBATALAN</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3>Anda yakin Ingin Membatalkan?</h3>
        <small>Data yang dibatalkan, akan bisa diubah kembali oleh mahasiswa.</small>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</a>
        <a id="btn-batal" type="button" class="btn btn-danger">Batalkan</a>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection(); ?>