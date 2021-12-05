<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header" style="background-color: #C8E3D4; border-radius:10px;">
                <?= $title; ?>

                <a href="<?= base_url("pasien"); ?>" class="btn btn-warning btn-sm float-right" style="border-radius:10px;">Kembali</a>
            </div>
            <div class="card-body animate__animated animate__fadeInDown">
                <form method="POST" action="<?= base_url("pasien/update"); ?>">
                    <input type="hidden" name="id" value="<?= $pasien['id_pasien']; ?>">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama_pasien" value="<?= $pasien['nama_pasien']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-control" required>
                            <option value="<?= $pasien['jenis_kelamin']; ?>"><?= $pasien['jenis_kelamin']; ?></option>
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="number" name="umur" value="<?= $pasien['umur']; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success" style="border-radius: 10px;">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>