
<?php $__env->startSection('title', 'Satuan Produk'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Pemeriksaan Pasien</h3>
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

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">

                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Tanggal:</label>
                                        <input class="form-control" type="date" value="<?php echo e($kunjungan->tanggal); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Pasien:</label>
                                        <input class="form-control" type="text" value="<?php echo e($kunjungan->pasien->nama_lengkap); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Poli:</label>
                                        <input class="form-control" type="text" value="<?php echo e($kunjungan->poli->nama_lengkap); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="mb-3">
                                        <label class="form-label">Dokter:</label>
                                        <input class="form-control" type="text" value="<?php echo e($kunjungan->dokter->nama_lengkap); ?>" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label">Keluhan / Diagnosa Awal</label>
                                        <textarea class="form-control" rows="3" readonly><?php echo e($kunjungan->diagnosa_awal); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <div>
                                        <label class="form-label">Diagnosa Dokter</label>
                                        <textarea id="hasil_diagnosa" class="form-control" rows="3" placeholder="isi diagnosa disini" readonly><?php echo e($kunjungan->hasil_diagnosa); ?></textarea>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col">
                                    <!-- <button type="submit" class="btn btn-success">Simpan</button> -->
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            Daftar Obat:
                            <br>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display" id="data-obat">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Obat</th>
                                                    <th>Satuan</th>
                                                    <th>Dosis</th>
                                                    <th>Jumlah</th>
                                                    <th>Total Harga</th>
                                                </tr>
                                            </thead>
                                            <tbody id="isi-data-obat">
                                                <?php $__currentLoopData = $kunjungan->obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($key+1); ?></td>
                                                    <td><?php echo e($value->nama); ?></td>
                                                    <td><?php echo e($value->satuan); ?></td>
                                                    <td><?php echo e($value->pivot->keterangan); ?></td>
                                                    <td><?php echo e($value->pivot->jumlah); ?></td>
                                                    <td>Rp. <?php echo e(number_format($value->pivot->harga * $value->pivot->jumlah)); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Biaya Obat
                                        </div>
                                        <div id="biaya-obat">
                                            Rp. <?php echo e(number_format($kunjungan->tarif_obat)); ?>

                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Biaya Pemeriksaan
                                        </div>
                                        <div id="biaya-obat">
                                            Rp. <?php echo e(number_format($kunjungan->tarif_periksa)); ?>

                                        </div>
                                    </div>
                                    <br>
                                    <form method="post" action="<?php echo e(route('piutang.update', $kunjungan->idkunjungan)); ?>" class="form theme-form">
                                        <div class="row">
                                            <div class="col">
                                                Metode Pembayaran:
                                            </div>
                                            <?php echo method_field('put'); ?>
                                            <?php echo csrf_field(); ?>
                                            <div class="col">
                                                <b><?php echo e($kunjungan->metode_pembayaran); ?></b>
                                            </div>

                                        </div>
                                        <br>
                                        <div class="row">
                                            <div class="col">
                                                <button type="submit" class="btn btn-success">Sudah Lunas</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
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
        $("#data-obat").DataTable({
            paging: false,
            searching: false
        });
    });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/piutang/detail.blade.php ENDPATH**/ ?>