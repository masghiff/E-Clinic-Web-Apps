
<?php $__env->startSection('title', 'Stok Barang'); ?>

<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/vendors/datatables.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-title'); ?>
<h3>Stok Barang</h3>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('breadcrumb-items'); ?>
<li class="breadcrumb-item">
    Penyimpanan
</li>
<li class="breadcrumb-item active">Stok Barang</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row">
        <!-- Zero Configuration  Starts-->
        <div class="col-sm-12">
            <div class="card">
























                <div class="card-body">
                    <div class="table-responsive">
                        <table class="display" id="basic-1">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Produk</th>
                                    <th>Harga</th>
                                    <th>Stok Keluar</th>
                                    <th>Stok Masuk</th>
                                    <th>Total Persediaan</th>
                                    <th>Asset</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php if(isset($obat)): ?>
                                <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($key+1); ?></td>
                                    <td class="text-center"><?php echo e($value->nama); ?></td>
                                    <td class="text-center">Rp.<?php echo e($value->harga); ?></td>
                                    <td class="text-center"><span class="badge badge-danger"><?php echo e($value->stokkeluar()); ?></span></td>
                                    <td class="text-center"><span class="badge badge-primary"><?php echo e($value->stokmasuk()); ?></span></td>
                                    <td class="text-center"><span class="badge badge-success"><?php echo e($value->stokmasuk() - $value->stokkeluar()); ?></span></td>
                                    <td class="text-center fw-bold">Rp.<?php echo e(($value->stokmasuk() - $value->stokkeluar()) * $value->harga); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>

                                <?php if(isset($a)): ?>
                                <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td class="text-center"><?php echo e($key+1); ?></td>
                                    <td class="text-center"><?php echo e($value->nama); ?></td>
                                    <td class="text-center">Rp.<?php echo e($value->harga); ?></td>
                                    <td class="text-center"><span class="badge badge-danger"><?php echo e($value->rso_jumlah); ?></span></td>
                                    <td class="text-center"><span class="badge badge-primary"><?php echo e($value->ohs_jumlah); ?></span></td>
                                    <td class="text-center"><span class="badge badge-success"><?php echo e(($value->ohs_jumlah) - ($value->rso_jumlah)); ?></span></td>
                                    <td class="text-center fw-bold">Rp. <?php echo e((($value->ohs_jumlah) - ($value->rso_jumlah)) * $value->harga); ?></td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                                <!-- <?php
                                $i = 1;
                                ?>
                                <?php for($i =0; $i <100;$i++): ?>
                                    <tr>
                                        <td class="text-center"><?php echo e($i); ?></td>
                                        <td class="text-center">Produk <?php echo e($i); ?></td>
                                        <td class="text-center">Rp.<?php echo e(number_format(random_int(50000,75000),0,',','.')); ?></td>
                                        <td class="text-center"><span class="badge badge-danger"><?php echo e(rand(10,100)); ?></span></td>
                                        <td class="text-center"><span class="badge badge-primary"><?php echo e(rand(10,100)); ?></span></td>
                                        <td class="text-center"><span class="badge badge-success"><?php echo e(rand(50,100)); ?></span></td>
                                        <td class="text-center fw-bold">Rp.<?php echo e(number_format(random_int(50000,75000),0,',','.')); ?></td>
                                    </tr>
                                <?php endfor; ?>
                                 -->
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                                
                        </table>
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
<?php $component->withAttributes(['title' => 'Detail Barang']); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b)): ?>
<?php $component = $__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b; ?>
<?php unset($__componentOriginalec675b1ebed4e9d382ccaf9448ef4269d66bdf5b); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/datatable/datatables/datatable.custom.js')); ?>"></script>
<script type="text/javascript">
    var d = new Date(),
        n = d.getMonth(),
        y = d.getFullYear();
    console.log(n)
   
    $('#months option:eq(' + n + ')').prop('selected', true);
    $('#years option[value="' + y + '"]').prop('selected', true);

    $(document).ready(function() {
        $("#btn-cari").on('click', function() {
            location.href = "<?php echo e(url('farmasi/stok-barang')); ?>/" + $("#months").val();
        });
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/farmasi/stok-barang.blade.php ENDPATH**/ ?>