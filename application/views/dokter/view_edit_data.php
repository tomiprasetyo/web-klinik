<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header" style="background-color: #F6EAB7; border-radius:10px;">
                <?= $title; ?>

                <a href="<?= base_url("dokter"); ?>" class="btn btn-warning btn-sm float-right" style="border-radius:10px;">Kembali</a>
            </div>
            <div class="card-body animate__animated animate__fadeInDown">
                <form method="POST" action="<?= base_url("dokter/update"); ?>">
                    <input type="hidden" name="id" value="<?= $dokter["id_dokter"]; ?>">
                    <div class="form-group">
                        <label for="">Nama Dokter</label>
                        <input type="text" name="nama_dokter" value="<?= $dokter["nama_dokter"]; ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success" style="border-radius: 10px;">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>