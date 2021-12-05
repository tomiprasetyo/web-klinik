<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header" style="background-color: #C8E3D4; border-radius:10px;">
                <?= $title; ?>

                <a href="<?= base_url("pasien"); ?>" class="btn btn-warning btn-sm float-right" style="border-radius:10px;">Kembali</a>
            </div>
            <div class="card-body animate__animated animate__fadeInDown">
                <form method="POST" action="<?= base_url("pasien/insert"); ?>">
                    <div class="form-group">
                        <label for="">Nama Pasien</label>
                        <input type="text" name="nama_pasien" class="form-control" required style="border-radius: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <select name="jenis_kelamin" id="" class="form-control" required style="border-radius: 10px;">
                            <option value="L">L</option>
                            <option value="P">P</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Umur</label>
                        <input type="number" name="umur" class="form-control" required style="border-radius: 10px;">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success" style="border-radius: 10px;">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>