
<?php $__env->startSection('title', 'Daftar Pasien'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Master Data Pasien</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">
    Pelayanan
</li>
<li class="breadcrumb-item active">Daftar Pasien</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> <?php echo e($message); ?>

                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header p-4">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h5>Daftar Pasien<h5>
                        </div>
                        <div class="">
                            <!-- <a class="btn btn-primary" href="<?php echo e(route('pasien.create')); ?>">Tambah Data Pasien</a> -->
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Umur</th>
                                    <th>Jenis Kelamin</th>
                                    <!-- <th>Alamat</th> -->
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($value->nama_lengkap); ?></td>
                                    <td>
                                        <?php echo e(\Carbon\Carbon::parse($value->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%y Tahun, %m Bulan and %d Hari')); ?>

                                    </td>
                                    <td><span class="badge badge-<?php echo e($value->jenis_kelamin == "Laki-laki" ? 'primary' : 'secondary'); ?>"><?php echo e($value->jenis_kelamin); ?></span></td>
                                    <!-- <td><?php echo e($value->alamat); ?></td> -->
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('pasien.delete', $value->idpasien)); ?>" method="POST">
                                            <a class="btn btn-primary btn-sm me-2" href="<?php echo e(route('pasien.show',$value->idpasien)); ?>">
                                                Detail
                                            </a>
                                            <a class="btn btn-warning btn-sm text-dark me-2" href="<?php echo e(route('pasien.edit',$value->idpasien)); ?>">
                                                Edit
                                            </a>
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-danger btn-xs" type="submit">
                                                Delete
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/pasien/index.blade.php ENDPATH**/ ?>