
<?php $__env->startSection('title', 'Satuan Produk'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Stok Obat Keluar</h3>
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
                        <div>
                            <h3>Data Stok Keluar<h3>
                        </div>
                        <!--
                        <div>
                            <label>Tanggal Awal</label>
                            <input class="form-control" type="date" name="awal" required>
                        </div>
                        <div>
                            <label>Tanggal Akhir</label>
                            <input class="form-control" type="date" name="akhir" required>
                        </div>
                        <div>
                            <a class="btn btn-primary m-1" href="<?php echo e(route('obat.tambahstok')); ?>">Cari</a>
                        </div> -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <!-- <th>No</th>
                                    <th>ID Kunjungan</th>
                                    <th>Tanggal</th>
                                    <th>Nama</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Jumlah</th> -->
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
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($value->created_at); ?></td>
                                    <td><?php echo e($obat->nama); ?></td>
                                    <td><?php echo e($obat->kategori); ?></td>
                                    <td><?php echo e($value->pasien->nama_lengkap); ?></td>
                                    <td><?php echo e($obat->pivot->jumlah); ?></td>
                                    <td>Rp. <?php echo e(number_format($obat->pivot->harga)); ?></td>
                                    <td>Rp. <?php echo e(number_format($obat->pivot->harga * $obat->pivot->jumlah)); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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

<script type="text/javascript">
    $(document).ready(function() {

    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/stok/stokkeluar.blade.php ENDPATH**/ ?>