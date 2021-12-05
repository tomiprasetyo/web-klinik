<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-primary border-0">
            <div class="card-header" style="background-color: #F6D7A7; border-radius: 10px;">
                <?= $title; ?>

                <a href="<?= base_url("users/tambah"); ?>" class="btn btn-success btn-sm float-right" style="border-radius: 10px;">Tambah Data</a>
            </div>
            <div class="card-body animate__animated animate__fadeInDown">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover"">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Username</th>
                                <th>Nama Lengkap</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            foreach ($users as $u) { ?>

                                <tr>
                                    <td class=" text-center"><?= $no; ?></td>
                        <td><?= $u["username"]; ?></td>
                        <td><?= $u["nama_lengkap"]; ?></td>
                        <td>
                            <a href="<?= base_url() . "users/edit/" . $u["id"]; ?>" class="btn btn-warning btn-sm" style="border-radius: 10px;">Edit</a>
                            <a href="<?= base_url() . "users/hapus/" . $u["id"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')" style="border-radius: 10px;">Hapus</a>
                        </td>
                        </tr>
                    <?php $no++;
                            } ?>
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>