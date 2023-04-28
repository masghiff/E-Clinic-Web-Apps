
<?php $__env->startSection('title', 'Edit Dokter'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Edit Data Dokter - <?php echo e($dokter->nama_lengkap); ?></h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Manajemen User</li>
<li class="breadcrumb-item"><a href="<?php echo e(route('daftar-dokter.index')); ?>">Daftar Dokter</a></li>
<li class="breadcrumb-item active">Edit Dokter</li>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h5>Form Ubah Data Dokter</h5>
                        </div>
                    </div>
                </div>
                <form method="post" action="<?php echo e(route('dokter.update',$dokter->iddokter)); ?>" class="form theme-form">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Nama Lengkap</label>
                                    <input value="<?php echo e($dokter->nama_lengkap); ?>" class="form-control" type="text" placeholder="Masukan Nama Lengkap" data-bs-original-title="" title="" name="nama_lengkap" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Tempat Lahir</label>
                                    <input value="<?php echo e($dokter->tempat_lahir); ?>" class="form-control" type="text" placeholder="Masukan Tempat Lahir" data-bs-original-title="" title="" name="tempat_lahir" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="mb-3">
                                    <label class="form-label">Tanggal Lahir</label>
                                    <input value="<?php echo e($dokter->tanggal_lahir); ?>" class="form-control" type="date" placeholder="Masukan Tempat Lahir" data-bs-original-title="" title="" name="tanggal_lahir" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div>
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" rows="3" name="alamat"><?php echo e($dokter->alamat); ?></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <label class="form-label">Jenis Kelamin</label>
                                <?php if($dokter->jenis_kelamin == "Perempuan"): ?>
                                <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                    <div class="form-check form-check-inline radio radio-primary">
                                        <input class="form-check-input" id="radioinline1" type="radio" name="jenis_kelamin" value="Laki-laki">
                                        <label class="form-check-label mb-0" for="radioinline1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline radio radio-primary">
                                        <input class="form-check-input" id="radioinline2" type="radio" name="jenis_kelamin" value="Perempuan" checked>
                                        <label class="form-check-label mb-0" for="radioinline2">Perempuan</label>
                                    </div>
                                </div>
                                <?php else: ?>
                                <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                    <div class="form-check form-check-inline radio radio-primary">
                                        <input class="form-check-input" id="radioinline1" type="radio" name="jenis_kelamin" value="Laki-laki" checked>
                                        <label class="form-check-label mb-0" for="radioinline1">Laki-laki</label>
                                    </div>
                                    <div class="form-check form-check-inline radio radio-primary">
                                        <input class="form-check-input" id="radioinline2" type="radio" name="jenis_kelamin" value="Perempuan">
                                        <label class="form-check-label mb-0" for="radioinline2">Perempuan</label>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <label class="form-label">Poli</label>
                                <div class="mb-3">
                                    <select class="form-select digits" name="poli">
                                        <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($value->idpoli); ?>" <?php echo e(($value->idpoli == $dokter->poli_idpoli) ? 'selected' : ''); ?>><?php echo e($value->nama_lengkap); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit</button>
                        <input class="btn btn-light" type="reset" value="Cancel" data-bs-original-title="" title="">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<?php echo app('Illuminate\Foundation\Vite')('resources/js/app-vue.js'); ?>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/dokter/edit.blade.php ENDPATH**/ ?>