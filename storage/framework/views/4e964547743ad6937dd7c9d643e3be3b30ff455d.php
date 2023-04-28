

<?php $__env->startSection('title', 'Dashboard'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('style'); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Dashboard</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">Home</li>
<li class="breadcrumb-item active">Dashboard</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4">Jumlah Kunjungan Pasien Hari Ini</h6>
                    <h3 class="mb-4"><?php echo e($total_pasien_hari_ini); ?> Orang</h3>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4">Jumlah Kunjungan Pasien Bulanan</h6>
                    <h3 class="mb-4"><?php echo e($total_pasien_1_bulan); ?> Orang</h3>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4">Total Pendapatan Harian</h6>
                    <?php if($total_pemasukan != null): ?>
                    <h3 class="mb-4">Rp. <?php echo e(number_format($total_pemasukan->pemasukan)); ?></h3>
                    <?php else: ?>
                    <h3 class="mb-4">Rp. 0</h3>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4">Jumlah Obat Di Miliki</h6>
                    <h3 class="mb-4"><?php echo e($obat); ?></h3>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h5>Daftar Kunjungan Pasien Hari Ini</h5>
                    <div>
                        <?php
                        setlocale(LC_TIME, 'id_ID');
                        \Carbon\Carbon::setLocale('id');
                        ?>
                        <h5><?php echo e(\Carbon\Carbon::now()->formatLocalized("%A, %d %B %Y")); ?> <span id="jam-terkini"></span></h5>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th class="text-center">No.Antrian</th>
                                    <th class="text-center">Hari Jam</th>
                                    <th class="text-center">Nama Pasien</th>
                                    <th class="text-center">Total Biaya</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $kunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center">Antrian - <?php echo e($key); ?></td>
                                    <td class="text-center"><?php echo e($value->created_at); ?></td>
                                    <td class="text-center"><?php echo e($value->pasien->nama_lengkap); ?></td>
                                    <td class="text-center">
                                        Rp.<?php echo e(number_format($value->tarif_obat + $value->tarif_periksa)); ?>

                                    </td>
                                    <?php if($value->status == "Menunggu Pemeriksaan"): ?>
                                    <td class="text-center">
                                        <span class="badge badge-warning text-dark">
                                        Menunggu Pemeriksaan</span>
                                        
                                    </td>
                                    <?php else: ?>
                                    <td class="text-center">
                                        <span class="badge badge-success">Selesai di tangani</span>
                                    </td>
                                    <?php endif; ?>

                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- <?php for($i = 1; $i <100; $i++): ?>
                                    <tr>
                                        <td class="text-center">Antrian - <?php echo e($i); ?></td>
                                        <td class="text-center">10:00</td>
                                        <td class="text-center">Pasien <?php echo e($i); ?></td>
                                        <td class="text-center">
                                            Rp.<?php echo e(number_format(random_int(50000,75000),0,',','.')); ?></td>
                                        <td class="text-center"><span
                                                class="badge badge-warning text-dark">Menunggu Pemeriksaan</span>
                                            <span class="badge badge-success">Selesai di tangani</span>
                                        </td>
                                    </tr>
                                <?php endfor; ?> -->
                            </tbody>
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
<script>
    let myVar = setInterval(myTimer, 1000);

    function myTimer() {
        const d = new Date();
        document.getElementById("jam-terkini").innerHTML = d.toLocaleTimeString();
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/dashboard/index.blade.php ENDPATH**/ ?>