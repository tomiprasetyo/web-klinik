<section class="content mt-2">
    <div class="container-fluid">
        <div class="card border-0">
            <div class="card-header text-white" style="background-color: #87AAAA; border-radius:10px;">
                <?= $title; ?>

                <a href="<?= base_url("obat/tambah"); ?>" class="btn btn-success btn-sm float-right" style="border-radius: 10px;">Tambah Data</a>
            </div>
            <div class="card-body animate__animated animate__fadeInDown">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Obat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $no = 1;
                            foreach ($obat as $u) { ?>

                                <tr>
                                    <td class="text-center"><?= $no; ?></td>
                                    <td><?= $u["nama_obat"]; ?></td>
                                    <td>
                                        <a href="<?= base_url() . "obat/edit/" . $u["id_obat"]; ?>" class="btn btn-warning btn-sm" style="border-radius: 10px;">Edit</a>
                                        <a href="<?= base_url() . "obat/hapus/" . $u["id_obat"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')" style="border-radius: 10px;">Hapus</a>
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