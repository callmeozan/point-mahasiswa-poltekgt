<?= $this->extend('mahasiswa/default'); ?>
<?= $this->section('konten'); ?>
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Profil Ku</h1>
        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    </div>

    <div class="row">
        <div class="col-md-7 col-sm-12">
            <div class="card shadow mb-4" style="background-color: var(--bs-tertiary-bg);">
                <div class="card-header py-4 border-bottom" style="background-color: var(--bs-body-bg);">
                    <h6 class="m-0 font-weight-bold"><?= $username ?></h6>
                </div>
                <div class="row no-gutters align-items-center">
                    <div class="col-md-4 p-2">
                        <img src="https://sisfo.poltek-gt.ac.id/img/default.svg" alt="foto profil" class="card-img">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <!-- <h5 class="card-title"></h5> -->
                            <p class="card-text">2 TEKNIK ELEKTRONIKA B</p>
                            <!-- <p class="card-text text-danger">Teknik Elektronika</p> -->
                            <p class="card-text">Tanggal Lahir - </p>
                            <p class="card-text text-muted">Tahun masuk - </p>
                            <p class="card-text text-muted">PA - </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>