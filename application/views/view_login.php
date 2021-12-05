<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Klinik Sehat Sejahtera">
    <meta name="generator" content="Kelompok 1">
    <title>Login Klinik Sehat Sejahtera</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">

    <!-- aos link -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Favicons -->
    <link rel="icon" href="<?= base_url(); ?>assets/clinic-icon.png">

    <style>
        input:focus {
            outline: none;
        }

        .navbar {
            margin-left: 190px;
            margin-right: 100px;
        }

        .ini_judul {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .ini_login {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .ini_tentang {
            padding-top: 100px;
            padding-bottom: 100px;
        }

        .ini_kontak {
            padding-top: 100px;
            padding-bottom: 100px;
        }
    </style>
    <!-- Custom styles for this template -->
    <!-- <link href="<?= base_url(); ?>assets/custom/login.css" rel="stylesheet"> -->
</head>

<body>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#007BFF" fill-opacity="1" d="M0,224L80,229.3C160,235,320,245,480,213.3C640,181,800,107,960,90.7C1120,75,1280,117,1360,138.7L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>
    <div class="container">
        <!-- start navbar -->
        <div class="ini_navbar row">
            <div class="col-2"></div>
            <div class="col-8">
                <nav id="navbar-judule" class="navbar navbar-light ">
                    <ul class="nav nav-pills">
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#home"><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                                </svg> Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#tentang"><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" class="bi bi-app-indicator" viewBox="0 0 16 16">
                                    <path d="M5.5 2A3.5 3.5 0 0 0 2 5.5v5A3.5 3.5 0 0 0 5.5 14h5a3.5 3.5 0 0 0 3.5-3.5V8a.5.5 0 0 1 1 0v2.5a4.5 4.5 0 0 1-4.5 4.5h-5A4.5 4.5 0 0 1 1 10.5v-5A4.5 4.5 0 0 1 5.5 1H8a.5.5 0 0 1 0 1H5.5z" />
                                    <path d="M16 3a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                                </svg> Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-muted" href="#kontak">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z" />
                                </svg> Kontak</a>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="col-2"></div>
        </div>
        <!-- start navbar -->
        <div data-bs-spy="scroll" data-bs-target="#navbar-judule" data-bs-offset="0" class="scrollspy-example" tabindex="0">
            <div class="ini_judul text-center pt-4">
                <div data-aos="fade-down">
                    <h1 class="font-weight-bold display-3">Clinic.web</h1>
                </div>

                <div data-aos="fade-up">
                    <p>Aplkasi untuk kita semua</p>
                </div>
            </div>
            <div class="ini_login row pt-4" id="home">
                <div class="col py-4">
                    <div data-aos="fade-up-right" class="img">
                        <img src="<?= base_url(); ?>assets/undraw_doctors_hwty.svg" alt="" width="400px">
                    </div>
                </div>
                <div class="col py-4 mx-auto">
                    <form method="POST" action="<?= base_url("auth/login_aksi"); ?>">
                        <div class="alert-danger">
                            <?= validation_errors(); ?>
                        </div>
                        <div data-aos="fade-up-left" class="input-group shadow p-3 mb-5" style="width:400px; border-radius: 15px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-0 bg-transparent pr-4" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    </svg>
                                </span>
                            </div>
                            <input type="text" id="username" name="username" style="border: none;" class="border-0" placeholder="username" autofocus>
                        </div>
                        <!-- inputpass -->
                        <div data-aos="fade-up-left" class="input-group py-3 shadow p-3 mb-5" style="width:400px; border-radius: 15px;">
                            <div class="input-group-prepend">
                                <span class="input-group-text border-0 bg-transparent pr-4" id="basic-addon1">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                </span>
                            </div>
                            <input type="password" id="password" name="password" style="border: none;" class="border-0" placeholder="password">
                        </div>
                        <!-- inputpass -->
                        <div data-aos="fade-up">
                            <button class="btn btn-lg border-success text-success shadow " style="border-radius: 10px;" type="submit">Login!</button>
                        </div>
                    </form>
                </div>
            </div>
            <div data-aos="flip-up" class="ini_tentang tentang pt-5" id="tentang">
                <div class="card text-center shadow ">
                    <div class="card-header">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-lightbulb" viewBox="0 0 16 16">
                            <path d="M2 6a6 6 0 1 1 10.174 4.31c-.203.196-.359.4-.453.619l-.762 1.769A.5.5 0 0 1 10.5 13a.5.5 0 0 1 0 1 .5.5 0 0 1 0 1l-.224.447a1 1 0 0 1-.894.553H6.618a1 1 0 0 1-.894-.553L5.5 15a.5.5 0 0 1 0-1 .5.5 0 0 1 0-1 .5.5 0 0 1-.46-.302l-.761-1.77a1.964 1.964 0 0 0-.453-.618A5.984 5.984 0 0 1 2 6zm6-5a5 5 0 0 0-3.479 8.592c.263.254.514.564.676.941L5.83 12h4.342l.632-1.467c.162-.377.413-.687.676-.941A5 5 0 0 0 8 1z" />
                        </svg>
                        <h5 class="display-4">Tentang</h5>
                    </div>
                    <div class="card-body">
                        <h2 class="card-title">Terbentuknya Clinic.Web</h5>
                            <p class="card-text py-4">Awal bermulanya terbentuknya clinic dari awal salah satu teman
                                kita yang berkerja di rumah sakit dan mempunyai ide membuat aplikasi web tentang rumah
                                sakit</p>

                            <h2 class="card-title">Penentuan Ide</h5>
                                <p class="card-text py-4">dari beberapa ide kita coba dimulai dari penjadwalan pasien
                                    yang kita rangkum dari awal dan kita tanya seperti apa system penjadwalan , tetapi
                                    stuck saat pembuatannya karna agak terlalu sulit penerapannya</p>

                                <h2 class="card-title">Gotcha!</h5>
                                    <p class="card-text py-4">dari penjadwalan kita menemukan ide yang lebih tepat ,
                                        bagaimana kita berperan sebagai admin klinik yang tidak terlalu rumit , dan yang
                                        kita buat juga tidak terlalu sulit , tetapi penerapannya sangat efisien</p>

                    </div>
                </div>
            </div>

            <div class="ini_kontak kontak pt-5" id="kontak">
                <div class="container px-auto">

                    <div data-aos="zoom-in-up" class="judule text-center pt-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="50" fill="currentColor" class="bi bi-person-badge" viewBox="0 0 16 16">
                            <path d="M6.5 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1h-3zM11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                            <path d="M4.5 0A2.5 2.5 0 0 0 2 2.5V14a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2.5A2.5 2.5 0 0 0 11.5 0h-7zM3 2.5A1.5 1.5 0 0 1 4.5 1h7A1.5 1.5 0 0 1 13 2.5v10.795a4.2 4.2 0 0 0-.776-.492C11.392 12.387 10.063 12 8 12s-3.392.387-4.224.803a4.2 4.2 0 0 0-.776.492V2.5z" />
                        </svg>
                        <h3 class="display-4">Kontak Kami</h3>
                        <p>inilah para pembuat clinic web!</p>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div data-aos="fade-down" class="card text-center border-info" style="border-radius: 40px;">
                                <div class="azis text-center">
                                    <img src="<?= base_url(); ?>assets/img/azis.png" alt="" width="200px">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Abdul Azis</h5>
                                    <p>10200012</p>
                                    <p class="lead"><em>Back-End Developer</em></p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div data-aos="fade-down" class="card text-center border-danger" style="border-radius: 40px;">
                                <div class="azis text-center">
                                    <img src="<?= base_url(); ?>assets/img/tomi.png" alt="" width="200px">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Tomi Prasetyo</h5>
                                    <p>10200005</p>
                                    <p class="lead"><em>Back-End Developer</em></p>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div data-aos="fade-down" class="card text-center border-success" style="border-radius: 40px;">
                                <div class="azis text-center">
                                    <img src="<?= base_url(); ?>assets/img/qibar.png" alt="" width="200px">
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">M Rizqi Akbar Rabbani</h5>
                                    <p>10200067</p>
                                    <p class="lead"><em>Front-End Developer</em></p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- akhir container -->
    <div class="footer text-center">
        <p class="mt-5 mb-3 text-muted">&copy; 2021 - <a class="text-muted" href="https://github.com/tomiprasetyo/web-klinik">Kelompok 1</a></p>
    </div>

    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#007BFF" fill-opacity="1" d="M0,160L34.3,144C68.6,128,137,96,206,74.7C274.3,53,343,43,411,80C480,117,549,203,617,240C685.7,277,754,267,823,234.7C891.4,203,960,149,1029,149.3C1097.1,149,1166,203,1234,218.7C1302.9,235,1371,213,1406,202.7L1440,192L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z">
        </path>
    </svg>
    <!-- aos link -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>