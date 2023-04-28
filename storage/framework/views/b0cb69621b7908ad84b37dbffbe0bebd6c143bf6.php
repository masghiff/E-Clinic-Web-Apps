
<?php $__env->startSection('title', 'Satuan Produk'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/date-picker.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Master Data Obat</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <?php if($message = Session::get('success')): ?>
            <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                <strong>Berhasil</strong> <?php echo e($message); ?>

                <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <?php endif; ?>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <!-- <button class="btn btn-primary" type="button" onclick=""
                            data-bs-toggle="modal" data-original-title="test"
                            data-bs-target="#example-modal" data-bs-original-title=""
                            title="">Tambah Data Obat
                    </button> -->
                    <a class="btn btn-secondary m-1" href="<?php echo e(url('obat/index/add')); ?>">Tambah Data Obat</a>
                    <a class="btn btn-secondary m-1" href="<?php echo e(route('obat.tambahstok')); ?>">Tambah Stok Obat</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Kategori</th>
                                    <th>Harga</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($value->nama); ?></td>
                                    <td><?php echo e($value->kategori); ?></td>
                                    <td>Rp. <?php echo e(number_format($value->harga)); ?></td>
                                    <th>
                                        <a class="btn btn-primary" href="<?php echo e(route('obat.edit',$value->idobat)); ?>">Edit</a>
                                    </th>
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
<?php if (isset($component)) { $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b = $component; } ?>
<?php $component = App\View\Components\ModalLarge::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('modal-large'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\ModalLarge::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => 'Obat ']); ?>
    <form method="POST" action="<?php echo e(route('daftar-produk.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="modal-body">
            <div class="row gy-4">
                <div class="col-xl-12">
                    <label class="form-label" for="Kategori">Nama Obat</label>
                    <input class="form-control" id="Kategori" placeholder="Masukan Kategori Produk" name="nama">
                </div>
                <div class="col-12">
                    <label class="form-label">Kategori</label>
                    <select class="form-select digits" name="kategori" id="kategori" required>
                        <!-- <option value="" selected>-- Pilih Dokter --</option> -->
                        <?php $__currentLoopData = $kategori; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($value->name); ?>"><?php echo e($value->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
            <button class="btn btn-primary" type="submit">Simpan</button>
        </div>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b)): ?>
<?php $component = $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b; ?>
<?php unset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b); ?>
<?php endif; ?>
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
<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/obat/index.blade.php ENDPATH**/ ?>