<section class="content mt-2">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="card border-primary">
                    <div class="card-header bg-primary text-white">
                        Biodata Pasien
                    </div>
                    <div class="card-body">
                        <table class="table table-sm">
                            <tr>
                                <th>Nama Pasien</th>
                                <td>:</td>
                                <td><?= $d['nama_pasien'];?></td>
                            </tr>
                            <tr>
                                <th>jenis Kelamin</th>
                                <td>:</td>
                                <td><?= $d['jenis_kelamin'];?></td>
                            </tr>
                            <tr>
                                <th>Umur</th>
                                <td>:</td>
                                <td><?= $d['umur'];?></td>
                            </tr>
                            
                        </table>
                    </div>
                </div>

                <div class="card border-info mt-4">
                    <div class="card-header bg-info text-white">
                        Riwayat Berobat
                    </div>
                    <div class="card-body">
                        <table class="table table-sm table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Tgl Berobat</th>
                                    <th>Keluhan</th>
                                    <th>Diagnosa</th>
                                    <th>Penatalaksanaan</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="card border-danger">
                    <div class="card-header bg-danger text-white">
                        Catatan ( Rekam Medis )
                    </div>
                    <div class="card-body">
                        table/data rekam medis
                    </div>
                </div>

                <div class="card border-success mt-4">
                    <div class="card-header bg-success text-white">
                        Resep Obat
                    </div>
                    <div class="card-body">
                        table/data resep obat
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>