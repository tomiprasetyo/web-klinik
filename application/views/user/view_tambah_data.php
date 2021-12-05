<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header" style="border-radius: 10px; background-color: #F6D7A7;">
                <?= $title; ?>

                <a href="<?= base_url("users"); ?>" class="btn btn-warning btn-sm float-right" style="border-radius: 10px;">Kembali</a>
            </div>
            <div class="card-body animate__animated animate__fadeInDown">
                <form method="POST" action="<?= base_url("users/insert"); ?>">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" required style="border-radius: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" name="nama_lengkap" class="form-control" required style="border-radius: 10px;">
                    </div>
                    <div class="form-group">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" required style="border-radius: 10px;">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-success btn-sm" style="border-radius: 10px;">Simpan Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>