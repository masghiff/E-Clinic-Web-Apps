
<?php $__env->startSection('title', 'Stok Keluar'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Stok Keluar</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">
    Penyimpanan
</li>
<li class="breadcrumb-item active">Stok Keluar</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Waktu dan Jam</th>
                                    <th class="text-center">Produk</th>
                                    <th class="text-center">Kategori</th>
                                    <th class="text-center">Pasien</th>
                                    <th class="text-center">Jumlah Stok Dikeluarkan</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Grand Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $kunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php $__currentLoopData = $value->obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $obat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($key+1); ?></td>
                                    <td class="text-center">
                                        <!-- <?php echo e($value->created_at->diffForHumans()); ?> -->
                                        <?php echo e(\Carbon\Carbon::parse($value->created_at)->toDayDateTimeString()); ?>

                                    </td>
                                    <td class="text-center"><?php echo e($obat->nama); ?></td>
                                    <td class="text-center"><span class="badge badge-info"><?php echo e($obat->kategori); ?></span></td>
                                    <td class="text-center"><?php echo e($value->pasien->nama_lengkap); ?></td>
                                    <td class="text-center"><?php echo e($obat->pivot->jumlah); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($obat->pivot->harga)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($obat->pivot->harga * $obat->pivot->jumlah)); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- <?php for($i =1; $i <100; $i++): ?>
                                <tr>
                                    <td><?php echo e($i); ?></td>
                                    <td class="text-center"><?php echo e(\Carbon\Carbon::parse('2019-02-28 22:42:27')->format('d M y h:m')); ?></td>
                                    <td class="text-center">Produk <?php echo e($i); ?></td>
                                    <td class="text-center"><span class="badge badge-info">Obat Batuk</span></td>
                                    <td class="text-center">Pasien A</td>
                                    <td class="text-center">5 Strip</td>
                                    <td class="text-center">Rp.<?php echo e(number_format(random_int(50000,75000),0,',','.')); ?></td>
                                    <td class="text-center">Rp.<?php echo e(number_format(random_int(50000,75000),0,',','.')); ?></td>
                                    </tr>
                                <?php endfor; ?> -->
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/farmasi/stok-keluar.blade.php ENDPATH**/ ?>