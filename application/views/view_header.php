<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- aos link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css" crossorigin="anonymous">
    <title>Klinik Sehat Sejahtera</title>

    <style>
        .footer {
            background-color: #f5f5f5;
        }

        .footer>.container {
            padding-right: 15px;
            padding-left: 15px;
        }
    </style>
</head>

<body>
    <div class="container pt-3">
        <!-- start navbar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-info shadow" data-aos="fade-down" style="border-radius: 15px;">
            <a class="navbar-brand" href="<?= base_url(); ?>">Klinik Sehat Sejahtera</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarMaster" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Master Data
                        </a>
                        <div class="dropdown-menu shadow" aria-labelledby="navbarMaster">
                            <a class="dropdown-item" href="<?= base_url("users") ?>">Data User</a>
                            <a class="dropdown-item" href="<?= base_url("dokter") ?>">Data Dokter</a>
                            <a class="dropdown-item" href="<?= base_url("pasien") ?>">Data Pasien</a>
                            <a class="dropdown-item" href="<?= base_url("obat") ?>">Data Obat</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("kunjungan"); ?>">Kunjungan/Berobat</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarLaporan" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Laporan
                        </a>
                        <div class="dropdown-menu shadow" aria-labelledby="navbarLaporan">
                            <a class="dropdown-item" href="<?= base_url("laporan/data_dokter") ?>">Data Dokter</a>
                            <a class="dropdown-item" href="<?= base_url("laporan/data_pasien") ?>">Data Pasien</a>
                            <a class="dropdown-item" href="<?= base_url("laporan/data_kunjungan") ?>">Data Kunjungan</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url("auth/logout"); ?>">Logout</a>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- start navbar -->