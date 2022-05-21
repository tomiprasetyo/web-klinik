<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">

    <style>
    .table-bordered th,
    .table-bordered thead th,
    .table-bordered td {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <div class="container">
        <h3 class="mb-0">Klinik Sehat Sejahtera</h3>
        <small>Jl Mardani Raya gang S no 17 RW 14 RT 05</small>
        <hr>
        <h4 class="text-center">LAPORAN DATA PASIEN</h4>
        <table class="table table-bordered ">
            <tr>
                <th width="80px" height="">No.</th>
                <th>Nama Pasien</th>
                <th>L/P</th>
                <th>Umur</th>
            </tr>
            <?php $no = 1;
            foreach ($pasien as $r) { ?>
            <tr>
                <td><?= $no; ?></td>
                <td><?= $r['nama_pasien']; ?></td>
                <td><?= $r['jenis_kelamin']; ?></td>
                <td><?= $r['umur']; ?></td>
            </tr>
            <?php $no++;
            } ?>
        </table>
        <br>
        <table width="100%">
            <tr>
                <td></td>
                <td width="300px">
                    <p>Jakarta Pusat <?= date('d-m-Y'); ?>
                        <br>
                        Administrator,
                        <br><br><br><br>
                        <b>______________________________</b>
                    </p>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>