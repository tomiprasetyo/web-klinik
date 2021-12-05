<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header" style="background-color: #C8E3D4; border-radius:10px;">
                <?= $title; ?>

                <a href="<?= base_url("pasien/tambah"); ?>" class="btn btn-success btn-sm float-right" style="border-radius:10px;">Tambah Data</a>
            </div>
            <div class="card-body animate__animated animate__fadeInDown">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Pasien</th>
                                <th>L/P</th>
                                <th>Umur</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            foreach ($pasien as $u) { ?>

                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $u["nama_pasien"]; ?></td>
                                    <td><?= $u["jenis_kelamin"]; ?></td>
                                    <td><?= $u["umur"]; ?></td>
                                    <td>
                                        <a href="<?= base_url() . "pasien/edit/" . $u["id_pasien"]; ?>" class="btn btn-warning btn-sm" style="border-radius:10px;">Edit</a>
                                        <a href="<?= base_url() . "pasien/hapus/" . $u["id_pasien"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')" style="border-radius:10px;">Hapus</a>
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