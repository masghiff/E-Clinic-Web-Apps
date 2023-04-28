
<?php $__env->startSection('title', 'Kategori Produk'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/select2.css')); ?>">

<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Daftar Kategori Produk</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">
    Konfigurasi
</li>
<li class="breadcrumb-item">Produk</li>
<li class="breadcrumb-item active">Daftar Kategori Produk</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card p-4">
                <div class="row">
                    <div class="col">
                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg">Create
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success dark alert-dismissible fade show" role="alert">
            <strong>Berhasil</strong> <?php echo e($message); ?>

            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php endif; ?>
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Ditambahkan</th>
                                    <th>Tanggal Diubah Terakhir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 0;
                                ?>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($i += 1); ?></td>
                                    <td><?php echo e($category->name); ?></td>
                                    <td><?php echo e($category->created_at); ?></td>
                                    <td><?php echo e($category->updated_at); ?></td>
                                    <td>
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="<?php echo e(route('kategori.destroy', $category->id)); ?>" method="POST">
                                            <!-- <a href="<?php echo e(route('kategori.edit', $category->id)); ?>"
                                                   class="btn btn-warning btn-xl me-2">Edit</a> -->
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button class="btn btn-danger btn-xs" type="submit">
                                                Delete
                                            </button>
                                        </form>
                                        <button class="btn btn-primary" type="button" onclick="" data-bs-toggle="modal" data-original-title="test" data-bs-target="#exampleModal-<?php echo e($category->id); ?>" data-bs-original-title="" title="">Edit
                                        </button>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </tfoot>
                        </table>
                    </div>
                </div>
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
<?php $component->withAttributes(['title' => 'Kategori Produk']); ?>
    <form method="POST" action="<?php echo e(route('kategori.store')); ?>">
        <?php echo csrf_field(); ?>
        <div class="modal-body">
            <div class="row gy-4">
                <div class="col-xl-12">
                    <label class="form-label" for="Kategori">Nama Kategori</label>
                    <input class="form-control form-control-lg" id="Kategori" placeholder="Masukan Kategori Produk" name="name">
                </div>
                <div class="col-12">
                    <label class="form-label" for="deskripsi">Deskripsi</label>
                    <textarea class="form-control form-control-lg" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukan deskripsi produk"></textarea>
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

<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<div class="modal fade" id="exampleModal-<?php echo e($value->id); ?>" tabindex="-1" aria-labelledby="exampleModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Edit Kategori</h5>
                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close" data-bs-original-title="" title="">
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="<?php echo e(route('kategori.update', $value->id)); ?>">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('put'); ?>
                    <div class="modal-body">
                        <div class="row gy-4">
                            <div class="col-xl-12">
                                <label class="form-label" for="Kategori">Nama Kategori</label>
                                <input class="form-control form-control-lg" value="<?php echo e($value->name); ?>"id="Kategori" placeholder="Masukan Kategori Produk" name="name">
                            </div>
                            <div class="col-12">
                                <label class="form-label" for="deskripsi">Deskripsi</label>
                                <textarea class="form-control form-control-lg" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukan deskripsi produk"><?php echo e($value->deskripsi); ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                        <button class="btn btn-primary" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/kategori/index.blade.php ENDPATH**/ ?>