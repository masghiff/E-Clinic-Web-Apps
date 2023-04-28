
<?php $__env->startSection('title', 'Satuan Produk'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Data Piutang</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">
        Transaksi
    </li>
    <li class="breadcrumb-item">Pembelian</li>
    <li class="breadcrumb-item active">Buat Transaksi</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <div class="">
                                <h3>Daftar Data Piutang<h3>
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
                                    <th>Poli Tujuan</th>
                                    <th>Dokter Tujuan</th>
                                    <th>Status</th>
                                    <th>Jam Datang</th>
                                    <th>Jam Selesai</th>
                                    <th>Tarif Obat</th>
                                    <th>Tarif Periksa</th>
                                    <th>Aksi</th>
                                </tr>

                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $kunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($key+1); ?></td>
                                        <td><?php echo e($value->pasien->nama_lengkap); ?></td>
                                        <td><?php echo e($value->poli->nama_lengkap); ?></td>
                                        <td><?php echo e($value->dokter->nama_lengkap); ?></td>
                                        <td><?php echo e($value->status); ?></td>
                                        <td><?php echo e($value->jam_datang); ?></td>
                                        <?php if($value->jam_selesai == null): ?>
                                            <td></td>
                                        <?php else: ?>
                                            <td><?php echo e($value->jam_selesai); ?></td>
                                        <?php endif; ?>
                                        <td>Rp. <?php echo e(number_format($value->tarif_obat)); ?></td>
                                        <td>Rp. <?php echo e(number_format($value->tarif_periksa)); ?></td>
                                        <td>
                                            <a href="<?php echo e(route('piutang.edit',$value->idkunjungan)); ?>" class="btn btn-primary">Detail</a>
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
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app-vue.js'); ?>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>

    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/laporan/keuangan.blade.php ENDPATH**/ ?>