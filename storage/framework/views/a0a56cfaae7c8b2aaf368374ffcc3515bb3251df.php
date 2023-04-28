    <div class="col-4 border-end-1">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Tanggal:</label>
                    <input class="form-control" type="date" value="<?php echo e($kunjungan->tanggal); ?>" readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Pasien:</label>
                    <input class="form-control" type="text" value="<?php echo e($kunjungan->pasien->nama_lengkap); ?>" readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Poli:</label>
                    <input class="form-control" type="text" value="<?php echo e($kunjungan->poli->nama_lengkap); ?>" readonly>
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Dokter:</label>
                    <input class="form-control" type="text" value="<?php echo e($kunjungan->dokter->nama_lengkap); ?>" readonly>
                </div>
            </div>
            <div class="col-12">
                <div>
                    <label class="form-label">Keluhan / Diagnosa Awal</label>
                    <textarea class="form-control" rows="3" readonly><?php echo e($kunjungan->diagnosa_awal); ?></textarea>
                </div>
            </div>
            <div class="col-12">
                <div>
                    <label class="form-label">Diagnosa Dokter</label>
                    <textarea id="hasil_diagnosa" class="form-control" rows="3" placeholder="isi diagnosa disini" readonly><?php echo e($kunjungan->hasil_diagnosa); ?></textarea>
                </div>
            </div>
        </div>
    </div>
    <div class="col-8 bg-light">
        <div class="card my-4">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="data-obat">
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
                        <tfooter>
                            <tr>
                                <td colspan="5" class="fw-bold bg-light">Total Biaya Obat</td>
                                <td class="fw-bold bg-success"> Rp. <?php echo e(number_format($kunjungan->tarif_obat)); ?></td>
                            </tr>
                        </tfooter>
                    </table>
                </div>
                <form method="post" action="<?php echo e(route('pemeriksaan.bayarput', $kunjungan->idkunjungan)); ?>" >
                    <div class="row gy-4">
                        <div class="col-sm-12">
                            Metode Pembayaran
                        </div>
                        <?php echo method_field('put'); ?>
                        <?php echo csrf_field(); ?>
                        <div class="col-12">
                            <h6 class="text-dark">Pilih Metode Pembayaran</h6>
                            <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                <div class="m-t-15 m-checkbox-inline custom-radio-ml">
                                    <div class="form-check form-check-inline radio radio-primary">
                                        <input class="form-check-input" id="radioinline1" type="radio" name="metode_pembayaran" value="Cash"
                                            <?php echo e($kunjungan->metode_pembayaran == "Cash" ? 'checked' : ''); ?>>
                                        <label class="form-check-label text-dark mb-0"  for="radioinline1">Cash</label>
                                    </div>
                                    <div class="form-check form-check-inline radio radio-primary">
                                        <input class="form-check-input" id="radioinline2" type="radio" <?php echo e($kunjungan->metode_pembayaran == "Kredit" ? 'checked' : ''); ?> name="metode_pembayaran" value="Kredit">
                                        <label class="form-check-label text-dark mb-0" for="radioinline2">Kredit</label>
                                    </div>
                                    <div class="form-check form-check-inline radio radio-primary">
                                        <input class="form-check-input" id="radioinline3" type="radio" <?php echo e($kunjungan->metode_pembayaran == "Gratis" ? 'checked' : ''); ?> name="metode_pembayaran" value="Gratis">
                                        <label class="form-check-label text-dark mb-0" for="radioinline3">Gratis</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <label class="form-label text-dark">Tarif Pemeriksaan</label>
                            <div class="input-group"><span class="input-group-text">Rp.</span>
                                <input class="form-control text-right" style="text-align: right" value="<?php echo e($kunjungan->tarif_periksa); ?>" type="number" placeholder="Masukan Nominal Pembayaran" required name="nominal_pembayaran">
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success w-100 btn-lg">Bayar</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>

    </div>



























































































































































































































<?php /**PATH C:\Users\alexe\Documents\GitHub\SI-Klinik-KP\resources\views/pages/pemeriksaan/bayar.blade.php ENDPATH**/ ?>