
<?php $__env->startSection('title', 'Cashflow'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Cashflow</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">
    Penyimpanan
</li>
<li class="breadcrumb-item active">Cashflow</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    Cashflow Tahun: <?php echo e($currentYear); ?>

                    <br>
                    <br>
                    <div class="table-responsive">

                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No</th>
                                    <th class="text-center">Bulan</th>
                                    <th class="text-center">Pemasukan</th>
                                    <th class="text-center">Piutang</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="text-center">Januari</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($januari_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($januari_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="text-center">Februari</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($februari_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($februari_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">3</td>
                                    <td class="text-center">Maret</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($maret_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($maret_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">4</td>
                                    <td class="text-center">April</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($april_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($april_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">5</td>
                                    <td class="text-center">mei</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($mei_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($mei_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">6</td>
                                    <td class="text-center">juni</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($juni_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($juni_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">7</td>
                                    <td class="text-center">juli</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($juli_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($juli_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">8</td>
                                    <td class="text-center">agustus</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($agustus_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($agustus_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">9</td>
                                    <td class="text-center">september</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($september_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($september_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">10</td>
                                    <td class="text-center">oktober</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($oktober_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($oktober_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">11</td>
                                    <td class="text-center">november</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($november_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($november_piutang)); ?></td>
                                </tr>
                                <tr>
                                    <td class="text-center">12</td>
                                    <td class="text-center">desember</td>
                                    <td class="text-center">Rp. <?php echo e(number_format($desember_pemasukan)); ?></td>
                                    <td class="text-center">Rp. <?php echo e(number_format($desember_piutang)); ?></td>
                                </tr>
                                <!-- <?php
                                    $i = 0;
                                ?>
                                <?php for($i =0; $i <12;$i++): ?>
                                    <tr>
                                        <td class="text-center">Bulan <?php echo e($i); ?> Januari</td>
                                        <td class="text-center"><?php echo e(number_format(random_int(1000000,1500000),0,',','.')); ?></td>
                                        <td class="text-center"><?php echo e(number_format(random_int(1000000,1500000),0,',','.')); ?></td>
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
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/laporan/cashflow.blade.php ENDPATH**/ ?>