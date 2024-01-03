<?= $this->extend('mahasiswa/default'); ?>
<?= $this->section('konten'); ?>
<section class="content">
    <div class="container-fluid">
        <div class="card card-primary" style="background-color: var(--bs-secondary-bg);">

            <div class="card-header" style="background-color: var(--bs-tertiary-bg); color: var(--bs-dark-text-emphasis);">
                <h3 class="card-title font-weight-bold">Modal Input Data Minus Point</h3>
            </div>
            <!-- /.card-header -->

            <!-- form start -->
            <form method="post" action="/mahasiswa/data-minus">
                <div class="card-body">
                    <div class="form-group">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama">
                    </div>

                    <div class="form-group">
                        <label for="nim">NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM">
                    </div>

                    <div class="form-group">
                        <label for="status">Jenis</label>
                        <select class="form-control" id="jenis" name="jenis">
                            <option value="Minus">Minus Point</option>
                            <option value="Plus">Plus Point</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jumlah">Jumlah Point</label>
                        <input type="number" class="form-control" id="point" name="point" placeholder="Jumlah">
                    </div>

                    <div class="form-group">
                        <label for="keperluan">Keterangan</label>
                        <input type="text" class="form-control" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan">
                    </div>

                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Buat</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?= $this->endsection(); ?>