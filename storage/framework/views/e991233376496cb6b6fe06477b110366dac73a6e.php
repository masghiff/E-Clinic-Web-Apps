
<?php $__env->startSection('title', 'Laporan Pasien Harian'); ?>

<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
    <h3>Laporan Pasien Harian</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
    <li class="breadcrumb-item">Laporan</li>
    <li class="breadcrumb-item active">Laporan Pasien Harian</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card p-4">
                    <form action="<?php echo e(route('pendapatan-harian')); ?>">
                        <div class="row">
                            <div class="col-6">
                                <label class="form-label" for="months">Tahun</label>
                                <select class="form-select digits" id="tahun" name="tahun">
                                    <?php for($i = 2020; $i < 2025; $i++): ?>
                                        <option <?php echo e($i == $year ? 'selected' : ''); ?> value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                                    <?php endfor; ?>
                                </select>
                            </div>
                            <div class="col-3">
                                <label class="form-label" for="months">Bulan</label>
                                <select class="form-select digits" id="tahun" name="bulan">
                                    <?php $__currentLoopData = $dataBulan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option <?php echo e($item->id == $month ? 'selected' : ''); ?> value="<?php echo e($item->id); ?>"><?php echo e($item->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="col-3">
                                <button class="btn btn-lg btn-primary w-100 mt-4" id='btn-cari' onClick="cari()">Cari
                                    Data
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <?php
            $i = 1;
        ?>
        <div class="row">
            <div class="col-12">
                <div class="card p-4 bg-info">
                    <div class="row">
                        <div class="col-12 ">
                            Menampilkan Data Keuangan Tahun & Bulan : <span class="fw-bold f-16"><?php echo e($year); ?> & Bulan <?php echo e($month); ?></span>
                            <span class="float-end fw-bold f-16"><?php echo e(number_format($totalPasien,0,',','.')); ?> Orang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="display" id="basic-100">
                                <thead>
                                <tr>
                                    <th class="text-center">Tanggal</th>
                                    <th class="text-center">Total Pasien</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php $__currentLoopData = $TotalPasienHarian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($item->tanggal); ?></td>
                                        <td class="text-center"><?php echo e(number_format($item->totalPasien,0,',','.')); ?> Orang</td>
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

    <script type="text/javascript">
        $(document).ready(function () {
            $("#basic-100").dataTable({
                "paging": false
            });
        });

        function cari() {
            location.href = "<?php echo e(route('laporan.index')); ?>/" + $("#tahun").val();
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/laporan/Pasien/harian.blade.php ENDPATH**/ ?>