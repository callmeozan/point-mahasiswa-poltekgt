<?= $this->extend('admin/default-admin') ?>
<?= $this->section('konten-admin') ?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">List Kategori Pelanggaran</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>NO</th>
                    <th>Jenis</th>
                    <th>Point</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($dataKategori as $data) : ?>
                    <tr>
                        <td><?= $i++ ?></td>
                        <td><?= $data['jenis'] ?></td>
                        <td><?= $data['point'] ?></td>
                        <td><?= $data['keterangan'] ?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<?= $this->endSection() ?>
<!-- /.card -->