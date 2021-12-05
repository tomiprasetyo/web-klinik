<section class="content mt-2">
    <div class="container-fluid">
        <div class="container">

            <div class="card border-0 animate__animated animate__bounceInDown">
                <div class="card-header bg-info text-white" style="border-radius:10px;">
                    <?= $title; ?>

                    <a href="<?= base_url("kunjungan/tambah"); ?>" class="btn btn-success btn-sm float-right" style="border-radius:10px;">Kunjungan
                        Baru</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tanggal</th>
                                    <th>Nama Pasien</th>
                                    <th>Umur</th>
                                    <th>Dokter</th>
                                    <th>Rekam Medis</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                $no = 1;
                                foreach ($kunjungan as $u) { ?>

                                    <tr>
                                        <td class="text-center"><?= $no; ?></td>
                                        <td><?= $u["tgl_berobat"]; ?></td>
                                        <td><?= $u["nama_pasien"]; ?></td>
                                        <td><?= $u["umur"]; ?></td>
                                        <td><?= $u["nama_dokter"]; ?></td>
                                        <td>
                                            <a href="<?= base_url(); ?>kunjungan/rekam/<?= $u["id_berobat"]; ?>" class="btn btn-success btn-sm" style="border-radius:10px;">Rekam</a>
                                        </td>
                                        <td>
                                            <a href="<?= base_url() . "kunjungan/edit/" . $u["id_berobat"]; ?>" class="btn btn-warning btn-sm" style="border-radius:10px;">Edit</a>
                                            <a href="<?= base_url() . "kunjungan/hapus/" . $u["id_berobat"]; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin akan menghapus data?')" style="border-radius:10px;">Hapus</a>
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
    </div>
</section>