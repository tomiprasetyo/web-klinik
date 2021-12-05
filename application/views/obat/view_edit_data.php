<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header text-white" style="background-color: #87AAAA; border-radius:10px;">
                <?= $title; ?>

                <a href="<?= base_url("obat"); ?>" class="btn btn-warning btn-sm float-right" style="border-radius:10px;">Kembali</a>
            </div>
            <div class="card-body animate__animated animate__fadeInDown">
                <form method="POST" action="<?= base_url("obat/update"); ?>">
                    <input type="hidden" name="id" value="<?= $obat["id_obat"]; ?>">
                    <div class="form-group">
                        <label for="">Nama Obat</label>
                        <input type="text" name="nama_obat" value="<?= $obat["nama_obat"]; ?>" class="form-control" required border-radius:10px;>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-sm btn-success" style="border-radius: 10px;">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>