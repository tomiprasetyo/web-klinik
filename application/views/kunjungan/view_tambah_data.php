<section class="content mt-2">
    <div class="container">
        <div class="card border-0">
            <div class="card-header bg-info text-white" style="border-radius:10px;">
                <?= $title; ?>

                <a href="<?= base_url("kunjungan"); ?>" class="btn btn-warning btn-sm float-right" style="border-radius:10px;">Kembali</a>
            </div>
            <div class="card-body animate__animated animate__bounceInDown">
                <form method="POST" action="<?= base_url("kunjungan/insert"); ?>">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" id="" class="form-control" required>
                            <option value="">- Pilih Pasien -</option>
                            <?php foreach ($pasien as $u) { ?>
                                <option value="<?= $u["id_pasien"]; ?>"><?= $u["nama_pasien"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Dokter Tujuan</label>
                        <select name="dokter" id="" class="form-control" required>
                            <option value="">- Pilih Dokter -</option>
                            <?php foreach ($dokter as $u) { ?>
                                <option value="<?= $u["id_dokter"]; ?>"><?= $u["nama_dokter"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm" style="border-radius:10px;">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>