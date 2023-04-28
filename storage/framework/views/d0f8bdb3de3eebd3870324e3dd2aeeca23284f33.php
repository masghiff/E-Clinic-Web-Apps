
<?php $__env->startSection('title', 'Detail Dokter'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Detail Dokter</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">
    Pelayanan
</li>
<li class="breadcrumb-item active">Data Dokter</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Data Diri Dokter</h5>
                </div>
                <div class="card-body">

                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Nama Lengkap</label>
                                <input class="form-control" type="text" value="<?php echo e($dokter->nama_lengkap); ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Tempat Lahir</label>
                                <input class="form-control" type="text" value="<?php echo e($dokter->tempat_lahir); ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="mb-3">
                                <label class="form-label">Tanggal Lahir</label>
                                <input class="form-control" type="date" value="<?php echo e($dokter->tanggal_lahir); ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div>
                                <label class="form-label">Alamat</label>
                                <textarea class="form-control" rows="3" readonly><?php echo e($dokter->alamat); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label class="form-label">Jenis Kelamin</label>
                            <?php if($dokter->jenis_kelamin == "Perempuan"): ?>
                            <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                <div class="form-check form-check-inline radio radio-primary">
                                    <input class="form-check-input" id="radioinline1" type="radio" name="jenis_kelamin" value="Laki-laki" disabled>
                                    <label class="form-check-label mb-0" for="radioinline1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline radio radio-primary">
                                    <input class="form-check-input" id="radioinline2" type="radio" name="jenis_kelamin" value="Perempuan" checked disabled>
                                    <label class="form-check-label mb-0" for="radioinline2">Perempuan</label>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                <div class="form-check form-check-inline radio radio-primary">
                                    <input class="form-check-input" id="radioinline1" type="radio" name="jenis_kelamin" value="Laki-laki" checked disabled>
                                    <label class="form-check-label mb-0" for="radioinline1">Laki-laki</label>
                                </div>
                                <div class="form-check form-check-inline radio radio-primary">
                                    <input class="form-check-input" id="radioinline2" type="radio" name="jenis_kelamin" value="Perempuan" disabled>
                                    <label class="form-check-label mb-0" for="radioinline2">Perempuan</label>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <div class="">
                            <h3>Riwayat Penanganan Pasien<h3>
                        </div>
                        <div class="">

                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Tanggal</th>
                                    <th>Jam Datang</th>
                                    <th>Jam Selesai</th>
                                    <th>Pasien</th>
                                    <th>Poli</th>
                                    <th>Hasil Diagnsoa</th>
                                    <th>Tarif Berobat</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $dokter->kunjungan; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($value->tanggal); ?></td>
                                    <td><?php echo e($value->jam_datang); ?></td>
                                    <td><?php echo e($value->jam_selesai); ?></td>
                                    <td><?php echo e($value->pasien->nama_lengkap); ?></td>
                                    <td><?php echo e($value->poli->nama_lengkap); ?></td>
                                    <td><?php echo e($value->hasil_diagnosa); ?></td>
                                    <?php if($value->tarif_obat == null): ?>
                                    <td>Rp. <?php echo e($value->tarif_obat); ?></td>
                                    <?php else: ?>
                                    <td>Belum Ada</td>
                                    <?php endif; ?>

                                    <!-- <td><?php echo e($value->status); ?></td> -->
                                    <td><span class="badge badge-success"><?php echo e($value->status); ?></span></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <!-- <tr>
                                    <td>No</td>
                                    <td>Nama</td>
                                    <td>Poli Tujuan</td>
                                    <td>Jam Datang</td>
                                    <td>Jam Selesai</td>
                                    <td>Tarif Obat</td>
                                    <td>Tarif Periksa</td>
                                    <td><span class="badge badge-success"></span></td>
                                </tr> -->
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
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/dokter/show.blade.php ENDPATH**/ ?>