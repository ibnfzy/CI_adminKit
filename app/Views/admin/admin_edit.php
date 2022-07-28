<?= $this->extend('admin/base'); ?>

<?= $this->section('content'); ?>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <h5 class="card-title mb-0 col-10">Form</h5>
                    <button onclick="history.back()" style="float: right;" class="btn btn-info col-2"><i
                            class="align-middle me-2" data-feather="arrow-left-circle"></i>Kembali</button>
                </div>
            </div>
            <div class="card-body">
                <?= form_open('U/Admin'); ?>
                <div class="mb-3">
                    <label class="form-label">Fullname</label>
                    <?= form_input('fullname', $admin['fullname'], [
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan nama lengkap'
                    ]); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Username</label>
                    <?= form_input('username', $admin['username'], [
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Username'
                    ]); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Password</label>
                    <?= form_input('password', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Masukkan Password'
                    ], 'password'); ?>
                </div>
                <div class="mb-3">
                    <label class="form-label">Konfirmasi Password</label>
                    <?= form_input('konfirmasiPassword', '', [
                        'class' => 'form-control',
                        'placeholder' => 'Konfirmasi Password'
                    ], 'password'); ?>
                </div>
                <button class="btn btn-info" type="submit">
                    <i class="align-middle me-2" data-feather="check-square"></i> Save
                </button>

            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>