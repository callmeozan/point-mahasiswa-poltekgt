<?= $this->extend('auth/template'); ?>
<?= $this->section('konten'); ?>
<div class="row justify-content-center">
    <div class="col-md-6 col-lg-5">
        <div class="login-wrap p-4 p-md-5">
            <div class="icon d-flex align-items-center justify-content-center" style="background-color: #4553e8;">
                <span class="fa fa-user-o"></span>
            </div>
            <?= view('Myth\Auth\Views\_message_block') ?>
            <form action="<?= url_to('login') ?>" method="post">
                <?= csrf_field() ?>
                <h3 class="text-center mb-4" style="color: #0d286c;">SILAHKAN MASUK</h3>
                <!-- INPUT EMAIL ATAU USERNAME -->
                <?php if ($config->validFields === ['email']) : ?>
                    <div class="form-group">
                        <label for="inputEmail"></label>
                        <input type="text" class="form-control rounded-left <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Username">
                        <?= session('errors.login') ?>
                    </div>
        <!--</div>-->
    <?php else : ?>
        <div class="form-group">
            <label for="inputEmail"></label>
            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="Username">
            <div class="invalid-feedback">
                <?= session('errors.login') ?>
            </div>
            
    <?php endif; ?>
    <div class="form-group">
        <label for="password"></label>
        <input type="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="Password">
        <div class="invalid-feedback">
            <?= session('errors.login') ?>
        </div>
    </div>
    </div>

    <div class="">
        <a href="<?= base_url('/'); ?>" style="color: #0d286c;">&larr; Kembali ke Homepage</a><br>
        <?php if ($config->allowRegistration) : ?>
            <a href="<?= url_to('register') ?>" style="color: #0d286c;">Butuh akun baru ?</a>
        <?php endif; ?>

        <div class="form-group">
            <button type="submit" class="btn submit p-3 px-3" style="background-color: #4553e8; color: white;">Masuk</button>
        </div>
    </div>
    </form>
    </div>
</div>
<?= $this->endSection(); ?>