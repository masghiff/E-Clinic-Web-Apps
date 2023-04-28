
<?php $__env->startSection('title', 'Satuan Produk'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Laporan Uang</h3>
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
                    <div class="row">
                        <div class="col-9">
                            <label class="form-label" for="months">Tahun</label>
                            <select class="form-select digits" id="tahun">
                                <option value="2022">2022</option>
                                <option selected value="2023">2023</option>
                            </select>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-lg btn-primary w-100 mt-4" id='btn-cari' onClick="cari()">Cari Data</button>
                        </div>
                    </div>

                </div>
                <div class="card-body">
                    Menampilkan Data Untuk Tahun <?php echo e($currentYear); ?>

                    <div class="table-responsive">
                        <table class="display" id="basic-100">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>Jumlah Pasien</th>
                                    <th>Total Pendapatan</th>
                                    <th>Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Januari</td>
                                    <td><?php echo e($januari); ?> Pasien</td>
                                    <td>Rp. 23.000.000</td>
                                    <td>
                                        <a href="<?php echo e(route('laporan.index',['tahun' => $currentYear, 'bulan' => 1])); ?>" class="btn btn-primary">Detail</a>
                                    </td>
                                </tr>

























































































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
        $("#basic-100").dataTable({
            "paging": false
        });
    });
    function cari() {
        location.href = "<?php echo e(route('laporan.index')); ?>/" + $("#tahun").val();
    }
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/laporan/index.blade.php ENDPATH**/ ?>