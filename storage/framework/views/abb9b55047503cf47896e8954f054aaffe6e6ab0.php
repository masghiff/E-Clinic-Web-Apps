
<?php $__env->startSection('title', 'Periksa Pasien'); ?>

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
<li class="breadcrumb-item">Pemeriksaan Pasien</li>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">

                <div class="card-body">
                    <div class="row">
                        <div class="col-3">
                            <form method="post" action="<?php echo e(route('pendaftaran.store')); ?>" class="form theme-form">
                                <?php echo csrf_field(); ?>
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
                                            <input class="form-control" type="text" value="<?php echo e($kunjungan->pasien); ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Poli:</label>
                                            <input class="form-control" type="text" value="<?php echo e($kunjungan->poli); ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="mb-3">
                                            <label class="form-label">Dokter:</label>
                                            <input class="form-control" type="text" value="<?php echo e($kunjungan->dokter); ?>" readonly>
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
                                            <textarea id="hasil_diagnosa" class="form-control" rows="3" placeholder="isi diagnosa disini"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col">
                                        <a href="<?php echo e(route('pasien.show',$kunjungan->pasien_idpasien)); ?>" class="btn btn-primary">Lihat Riwayat Berobat</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col">
                            Daftar Obat:
                            <br>
                            <br>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="p-1">
                                            <label>Pilih Obat</label>
                                            <select class="form-select digits" id="select-obat">
                                                <?php $__currentLoopData = $obat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($value->idobat); ?>"><?php echo e($value->nama); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                        </div>
                                        <div class="p-1">
                                            <label>Pilih Dosis</label>
                                            <!-- <input class="form-control" type="text" name="inputPassword" placeholder="" data-bs-original-title="" title=""> -->
                                            <select class="form-select digits" id="select-dosis">
                                                <option value="1x1">1x1</option>
                                                <option value="2x1">2x1</option>
                                                <option value="3x1">3x1</option>
                                            </select>
                                        </div>
                                        <div class="p-1">
                                            <label>Pilih Jumlah</label>
                                            <input class="form-control" id="jumlah" type="number" value="1" placeholder="" data-bs-original-title="" title="">
                                        </div>
                                        <div class="p-1">
                                            <label>Tulis Harga</label>
                                            <input class="form-control" id="harga" type="number" value="0" placeholder="" data-bs-original-title="" title="">
                                        </div>
                                        <div class="p-1">
                                            <label>Tambah</label>
                                            <button type="button" class="form-control btn btn-primary" onClick="tambahProduk()">+</button>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="table-responsive">
                                        <table class="display" id="data-obat">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Obat</th>
                                                    <!-- <th>Satuan</th> -->
                                                    <th>Dosis</th>
                                                    <th>Jumlah</th>
                                                    <th>Harga</th>
                                                    <th>Total</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody id="isi-data-obat">

                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            Biaya Obat
                                        </div>
                                        <div id="biaya-obat">
                                            Rp. <?php echo e(number_format(0)); ?>

                                        </div>
                                    </div>
                                    <?php echo method_field('put'); ?>
                                    <?php echo csrf_field(); ?>
                                    <div class="row mt-4 gy-2">
                                        <div class="col-12">
                                            <h6 class="text-dark">Pilih Metode Pembayaran</h6>
                                            <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                                <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                                    <div class="form-check form-check-inline radio radio-primary">
                                                        <input class="form-check-input" id="radioinline1" type="radio" name="metode_pembayaran" value="Cash" checked>
                                                        <label class="form-check-label text-dark mb-0" for="radioinline1">Cash</label>
                                                    </div>
                                                    <div class="form-check form-check-inline radio radio-primary">
                                                        <input class="form-check-input" id="radioinline2" type="radio" name="metode_pembayaran" value="Kredit">
                                                        <label class="form-check-label text-dark mb-0" for="radioinline2">Kredit</label>
                                                    </div>
                                                    <div class="form-check form-check-inline radio radio-primary">
                                                        <input class="form-check-input" id="radioinline3" type="radio" name="metode_pembayaran" value="Gratis">
                                                        <label class="form-check-label text-dark mb-0" for="radioinline3">Gratis</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label class="form-label text-dark">Tarif Pemeriksaan</label>
                                            <div class="input-group"><span class="input-group-text">Rp.</span>
                                                <input class="form-control text-right" id="pemeriksaan" style="text-align: right" value="0" type="number" placeholder="Masukan Nominal Pembayaran" required name="nominal_pembayaran">
                                            </div>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="d-flex justify-content-end">
                                        <div>
                                            <button class="btn btn-success w-100" type="button" onClick="simpanData()">Simpan & Lanjut Ke Pembayaran</button>
                                        </div>
                                    </div>
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
        $.ajax({
            type: 'GET',
            url: "<?php echo e(route('obat.ajaxget')); ?>",
            data: {
                'aaa': 'aa'
            },
            success: function(data) {
                console.log(data);
            },
            error: function(data) {
                console.log(data);
            }
        });
        // display();
    });
    var daftar_produk = [];
    var counter = 0;
    var biaya_obat = 0;

    function tambahProduk() {
        console.log(daftar_produk.length);
        if (daftar_produk.length == 0) {
            daftar_produk[counter] = {};
            daftar_produk[counter].nama = $("#select-obat option:selected").text();
            daftar_produk[counter].obat_idobat = $("#select-obat option:selected").val();
            daftar_produk[counter].dosis = $("#select-dosis option:selected").text();
            daftar_produk[counter].jumlah = $("#jumlah").val();
            daftar_produk[counter].harga = $("#harga").val();
            daftar_produk[counter].keterangan = 0;
            counter++;
            display();
        } else {
            $.each(daftar_produk, function(i, k) {
                if (k.obat_idobat == $("#select-obat option:selected").val()) {
                    alert('obat sudah ada didalam daftar.');
                } else {
                    daftar_produk[counter] = {};
                    daftar_produk[counter].nama = $("#select-obat option:selected").text();
                    daftar_produk[counter].obat_idobat = $("#select-obat option:selected").val();
                    daftar_produk[counter].dosis = $("#select-dosis option:selected").text();
                    daftar_produk[counter].jumlah = $("#jumlah").val();
                    daftar_produk[counter].harga = $("#harga").val();
                    daftar_produk[counter].keterangan = 0;
                    counter++;
                    display();
                }
            });
        }
    }

    function display() {
        biaya_obat = 0;
        daftar_produk = daftar_produk.filter(Boolean);
        $("#isi-data-obat").empty();
        $.each(daftar_produk, function(i, k) {
            biaya_obat = biaya_obat + (k.jumlah * k.harga);
            $("#isi-data-obat").append(
                '<tr>' +
                '<td>' + (i + 1) + '</td>' +
                '<td>' + k.nama + '</td>' +
                // '<td>' + 'NN' + '</td>' +
                '<td>' + k.dosis + '</td>' +
                '<td>' + k.jumlah + '</td>' +
                '<td>Rp. ' + k.harga + '</td>' +
                '<td>Rp. ' + (k.jumlah * k.harga) + '</td>' +
                '<td>' + '<button type="button" class="btn btn-primary" onClick="hapus(' + k.obat_idobat + ')">Hapus</button>' + '</td>' +
                '</tr>'
            );
        });
        $("#jumlah").val(0);
        $("#harga").val(0);
        $("#biaya-obat").html('Rp. ' + biaya_obat);
    }

    function hapus(id) {
        // daftar_produk = daftar_produk.filter(Boolean);
        // console.log(daftar_produk);
        $.each(daftar_produk, function(i, k) {
            console.log(k.obat_idobat);
            if (id == k.obat_idobat) {
                daftar_produk.splice(i, 1);
            }
        });
        display();
    }

    function simpanData() {
        if (daftar_produk.length == 0 || $("#hasil_diagnosa").val() == "") {
            alert('obat dan hasil diagnosa tidak boleh kosong');
        } else {
            var pemeriksaan = $('#pemeriksaan').val();
            var option = $('input[type="radio"]:checked').val();
            $.ajax({
                type: 'POST',
                url: "<?php echo e(route('pemeriksaan.storedokter')); ?>",
                data: {
                    '_token': "<?php echo e(csrf_token()); ?>",
                    'daftar_produk': daftar_produk,
                    'id': "<?php echo e($id); ?>",
                    'biaya-obat': biaya_obat,
                    'hasil_diagnosa': $("#hasil_diagnosa").val(),
                    'nominal_pembayaran': pemeriksaan,
                    'metode_pembayaran': option
                },
                success: function(data) {
                    console.log(data);
                    if (data == "berhasil") {
                        alert(data);
                        location.href = "<?php echo e(url('pemeriksaan/index')); ?>";
                    }
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }

    }
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.simple.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/pemeriksaan/edit.blade.php ENDPATH**/ ?>