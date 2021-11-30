<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-primary">
            <div class="card-header bg-primary text-white">
                <?= $title; ?>

                <a href="<?= base_url("kunjungan"); ?>" class="btn btn-warning btn-sm float-right">Kembali</a>
            </div>
            <div class="card-body">
                <form method="POST" action="<?= base_url("kunjungan/update"); ?>">
                    <input type="hidden" name="id" value="<?= $kunjungan['id_berobat']; ?>">
                    <div class="form-group">
                        <label for="">Tanggal Berobat</label>
                        <input type="date" name="tgl_berobat" value="<?= $kunjungan['tgl_berobat']; ?>"
                            class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Pasien</label>
                        <select name="pasien" id="" class="form-control" required>
                            <?php
                            foreach ($pasien as $u) {

                                if ($u["id_pasien"] == $kunjungan["id_pasien"]) {
                                    $aktif = "selected";
                                } else {
                                    $aktif = "";
                                }

                            ?>
                            <option value="<?= $u["id_pasien"]; ?>" <?= $aktif; ?>><?= $u["nama_pasien"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Dokter Tujuan</label>
                        <select name="dokter" id="" class="form-control" required>
                            <option value="">- Pilih Dokter -</option>
                            <?php
                            foreach ($dokter as $u) {

                                if ($u["id_dokter"] == $kunjungan["id_dokter"]) {
                                    $aktif = "selected";
                                } else {
                                    $aktif = "";
                                }

                            ?>
                            <option value="<?= $u["id_dokter"]; ?>" <?= $aktif; ?>><?= $u["nama_dokter"]; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-sm">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>