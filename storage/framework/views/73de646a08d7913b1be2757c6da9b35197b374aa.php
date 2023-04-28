
<?php $__env->startSection('title', 'Pendaftaran Pasien'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Pendaftaran Pasien</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">
    Pelayanan
</li>
<li class="breadcrumb-item active">Pendaftaran Pasien</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="info-home-tab" data-bs-toggle="tab" href="#info-home" role="tab" aria-controls="info-home" aria-selected="true" data-bs-original-title="" title=""><i class="icofont icofont-search"></i>Cari Pasien</a></li>
                        <li class="nav-item">
                            <a class="nav-link" id="profile-info-tab" data-bs-toggle="tab" href="#info-profile" role="tab" aria-controls="info-profile" aria-selected="false" data-bs-original-title="" title=""><i class="icofont icofont-users"></i>Pendaftaran Pasien Baru
                            </a>
                        </li>
                        <li class="nav-item">
                                </ul> <div class="tab-content" id="info-tabContent">
                                <div class="tab-pane fade active show" id="info-home" role="tabpanel" aria-labelledby="info-home-tab">
                                    <div class="row">
                                        <div class="table-responsive">
                                            <table class="display" id="basic-1">
                                                <thead>
                                                    <tr>
                                                        <th>No.</th>
                                                        <th class="text-center">Nama Pasien</th>
                                                        <th class="text-center">Usia</th>
                                                        <th class="text-center">Jenis Kelamin</th>
                                                        <th>Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $i = 1;
                                                    ?>
                                                    <?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($i++); ?></td>
                                                        <td class="text-center"><?php echo e($data_pasien->nama_lengkap); ?></td>
                                                        <!-- <td class="text-center">
                                                            <?php echo e(\Carbon\Carbon::parse($data_pasien->tanggal_lahir)->age); ?> Tahun
                                                        </td> -->
                                                        <td>
                                                            <?php echo e(\Carbon\Carbon::parse($data_pasien->tanggal_lahir)->diff(\Carbon\Carbon::now())->format('%y Tahun, %m Bulan and %d Hari')); ?>

                                                        </td>
                                                        <td class="text-center"><span class="badge badge-<?php echo e($data_pasien->jenis_kelamin == 'Laki-laki' ? 'primary' : 'secondary'); ?>"><?php echo e($data_pasien->jenis_kelamin); ?></span></td>
                                                        <td>
                                                            <button class="btn btn-primary" type="button" onclick="" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal-<?php echo e($data_pasien->idpasien); ?>" data-bs-original-title="" title="">Daftar
                                                            </button>
                                                            <!-- // Tertuju kehalaman Pemeriksaan Pasien
                                                        // Tampilkan Notifikasi Pasin berhasil terdaftar pada antrian -->
                                                        </td>
                                                    </tr>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="info-profile" role="tabpanel" aria-labelledby="profile-info-tab">
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    
                                    <form method="post" action="<?php echo e(route('pendaftaran-pasien-baru')); ?>" class="form theme-form">
                                        <?php echo csrf_field(); ?>
                                        <div class="row gy-4">
                                            <div class="col-6">
                                                <label class="form-label" for="exampleFormControlInput1">Nama
                                                    Pasien</label>
                                                <input class="form-control form-control-lg" name="nama_lengkap" id="exampleFormControlInput1" type="text" placeholder="Masukan nama pasien">
                                            </div>
                                            <div class="col-6">
                                                <div class=" m-checkbox-inline custom-radio-ml">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <div class="card mb-0 p-4">
                                                                <div class="form-check form-check-inline radio radio-primary">
                                                                    <input class="form-check-input" id="radioinline1" type="radio" name="jenis_kelamin" value="Laki-laki">
                                                                    <label class="form-check-label mb-0 f-14" for="radioinline1">Laki-laki</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-6">
                                                            <div class="card mb-0 p-4">
                                                                <div class="form-check form-check-inline radio radio-primary">
                                                                    <input class="form-check-input" id="radioinline2" type="radio" name="jenis_kelamin" value="Perempuan">
                                                                    <label class="form-check-label mb-0" for="radioinline2">Perempuan</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="exampleFormControlInput1">Tanggal Lahir</label>
                                                <input class="form-control form-control-lg" name="tanggal_lahir" id="exampleFormControlInput1" type="date" placeholder="Masukan nama pasien">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="exampleFormControlInput1">Nomor Telefon</label>
                                                <input class="form-control form-control-lg" name="no_telp" id="exampleFormControlInput1" type="text" placeholder="Masukan nomor telefon">
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label" for="exampleFormControlSelect9">Poliklinik</label>
                                                <select class="form-select form-control-lg digits" name="poliklinik" id="poliklinik">
                                                    <option value="">Pilih Poliklinik</option>
                                                    <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <option value="<?php echo e($value->idpoli); ?>"><?php echo e($value->nama_lengkap); ?></option>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </select>
                                            </div>
                                            <div class="col-6">
                                                <label class="form-label">Dokter</label>
                                                <select class="form-select form-control-lg" name="dokter" id="dokter" required>
                                                    <option value="">Pilih Dokter</option>

                                                </select>
                                            </div>
                                            <div class="col-12">
                                                <div>
                                                    <label class="form-label">Keluhan / Diagnosa Awal</label>
                                                    <textarea class="form-control" rows="3" name="diagnosa_awal" required></textarea>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="card-footer text-end">
                                            <button class="btn btn-primary" type="submit" data-bs-original-title="" title="">Submit
                                            </button>
                                            <input class="btn btn-light" type="reset" value="Cancel" data-bs-original-title="" title="">
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="info-contact" role="tabpanel" aria-labelledby="contact-info-tab">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                        It has survived not only five centuries, but also the leap into electronic
                                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with
                                        the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem
                                        Ipsum</p>
                                </div>
                </div>
            </div>
            <div class="card-footer">

            </div>
        </div>
    </div>
</div>
</div>
<?php $__currentLoopData = $pasien; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data_pasien): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="exampleModal-<?php echo e($data_pasien->idpasien); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Pendaftaran Pasien</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title="">
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="<?php echo e(route('pendaftaran.store')); ?>" class="form theme-form">
                    <?php echo csrf_field(); ?>
                    <div class="row gy-3">
                        <div class="col-6">
                            <label class="form-label" for="Pasien">Nama Pasien</label>
                            <input class="form-control form-control-lg" disabled id="Pasien" type="email" placeholder="name@example.com" value="<?php echo e($data_pasien->nama_lengkap); ?>">
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="exampleFormControlInput1">Jenis Kelamin</label>
                            <input class="form-control form-control-lg" disabled id="exampleFormControlInput1" type="email" placeholder="name@example.com" value="<?php echo e($data_pasien->jenis_kelamin); ?>">
                        </div>
                        <div class="col-12">
                            <label class="form-label">Pilih Poliklinik</label>
                            <select class="form-select digits" name="poli" id="poli" required data-id="<?php echo e($data_pasien->idpasien); ?>">
                                <option selected>Pilih</option>
                                <?php $__currentLoopData = $poli; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($item->idpoli); ?>"><?php echo e($item->nama_lengkap); ?>

                                </option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Pilih Dokter</label>
                            <select class="form-select digits" name="dokter" id="dokter" required data-id="<?php echo e($data_pasien->idpasien); ?>">
                                <option>Pilih</option>
                                <!-- <?php $__currentLoopData = $dokter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($value->iddokter); ?>"><?php echo e($value->nama_lengkap); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> -->
                            </select>
                        </div>
                        <input type="hidden" name="pasien" value="<?php echo e($data_pasien->idpasien); ?>">
                        <div class="col-12">
                            <label class="form-label">Keluhan / Diagnosa Awal</label>
                            <textarea class="form-control" rows="3" name="diagnosa_awal" required></textarea>
                        </div>
                        <div class="col-12">

                            <button class="btn btn-primary w-50 me-4" type="submit" data-bs-original-title="" title="">
                                Daftar
                            </button>
                            <button class="btn btn-light w-25 " type="button" data-bs-dismiss="modal" data-bs-original-title="" title="">Close
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>

<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>

<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $("body").on("change", "#poli", function(e) {
            var id2 = $(this).attr('data-id');
            var id = $(this).val();
            $.ajax({
                type: 'GET',
                url: '<?php echo e(url("poli/showDokter")); ?>/' + id,
                success: function(v) {
                    console.log(v);
                    $('#dokter[data-id="' + id2 + '"]').empty();
                    $.each(v, function(i, v) {
                        $('#dokter[data-id="' + id2 + '"]').append('<option value="' + v.iddokter + '"> ' + v.nama_lengkap + ' </option>');
                    });
                }
            });
        });
        $("#poliklinik").change(function() {
            var id = $(this).val();
            $('#dokter').empty();
            $.ajax({
                type: 'GET',
                url: '<?php echo e(url("poli/showDokter")); ?>/' + id,
                success: function(v) {
                    $.each(v, function(i, v) {
                        $('#dokter').append('<option value="' + v.iddokter + '"> ' + v.nama_lengkap + ' </option>');
                    });
                }
            });
        });
    });

    function metod(id) {
        $.ajax({
            type: 'GET',
            url: '<?php echo e(route("pemeriksaan.bayar")); ?>',
            success: function(v) {
                console.log(v);
            }
        });
    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/pendaftaran/index.blade.php ENDPATH**/ ?>