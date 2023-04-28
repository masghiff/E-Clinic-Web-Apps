
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
                    <div class="d-flex">
                        <div class="mr-auto p-2">
                            <h3>Laporan</h3>
                        </div>
                        <!-- <div class="p-2">
                            <select class="form-select digits" id="tahun">
                                <option selected value="2022">2022</option>
                                <option value="2021">2021</option>
                                <option value="2020">2020</option>

                            </select>
                        </div>
                        <div class="p-2">
                            <select class="form-select digits" id="bulan">
                                <option selected value="01">Januari</option>
                                <option value="02">Februari</option>
                                <option value="03">Maret</option>
                                <option value="04">April</option>
                                <option value="05">Mei</option>
                                <option value="06">Juli</option>
                                <option value="07">Juni</option>
                                <option value="08">Agustus</option>
                                <option value="09">September</option>
                                <option value="10">Oktober</option>
                                <option value="11">November</option>
                                <option value="12">Desember</option>
                            </select>
                        </div>
                        <div class="p-2">
                            <button type="button" class="btn btn-primary" onClick="cari()">Cari Data</button>
                        </div>
                         -->
                    </div>
                    <div class="text-center">
                        Total Pendapatan: Rp. <?php echo e(number_format($total)); ?>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Kunjungan</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Poliklinik</th>
                                    <th>Tipe Pembayaran</th>
                                    <th>Tarif Obat</th>
                                    <th>Tarif Periksa</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $kunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $kunjungan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($kunjungan->idkunjungan); ?></td>
                                    <td><?php echo e($kunjungan->tanggal); ?></td>
                                    <td><?php echo e($kunjungan->poli->nama_lengkap); ?></td>
                                    <td><?php echo e($kunjungan->metode_pembayaran); ?></td>
                                    <td>Rp. <?php echo e(number_format($kunjungan->tarif_obat)); ?></td>
                                    <td>Rp. <?php echo e(number_format($kunjungan->tarif_periksa)); ?></td>
                                    <td>Rp. <?php echo e(number_format($kunjungan->tarif_obat + $kunjungan->tarif_periksa)); ?></td>
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

<script type="text/javascript">
    function cari() {
        location.href = "<?php echo e(route('laporan.index')); ?>/" + $("#tahun").val() + "/" + $("#bulan").val();
    }
</script>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/laporan/detail.blade.php ENDPATH**/ ?>