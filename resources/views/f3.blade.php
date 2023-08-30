<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Styles -->
    <style>
    </style>
</head>

<body>
    <nav class="shadow rounded">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none fs-3">
                        <b>FORMULIR</b>
                    </a>
                </div>

                <ul class="nav fs-5">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Server
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Colocation Server</a></li>
                            <li><a class="dropdown-item nav-link link-secondary" href="#">Pengajuan Server</a></li>
                            <li><a class="dropdown-item nav-link link-secondary" href="#">Akses Fisik Data Center</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sertifikat Elektronik
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-link link-secondary" href="#">Single User</a></li>
                            <li><a class="dropdown-item nav-link link-secondary" href="#">Multi User</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-secondary" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            VPS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item nav-link link-secondary" href="#">Permohonan VPS Baru</a></li>
                            <li><a class="dropdown-item nav-link link-secondary" href="#">Permohonan Perubahan VPS</a></li>
                            <li><a class="dropdown-item nav-link link-secondary" href="#">Surat Pengantar Pengajuan Server</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-primary btn-lg">LOGIN</button>
                </div>
            </header>
        </div>
    </nav>

    <div class="container mt-5">
        <h2>VPS<img src="{{asset ('assets/arrow.svg')}}">Formulir Permohonan Perubahan VPS
    </div>

    <div class="container shadow p-3 bg-body-tertiary rounded">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
            <div class="row">
                <div class="card bg-body-tertiary">
                    <div class="card-body px-4 py-5 px-md-5">


                        <form>
                            <h5 class="text-center text-decoration-underline">Formulir Permohonan Perubahan VPS</h5>
                            <h6>Data Pemohon</h6>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Pemohon :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Instansi :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">NIP :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Tujuan Pembuatan VPS :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <h6>Spesifikasi VPS yang diinginkan</h6>
                                <div class="col-md-8 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Prosesor :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                    <div class="form-outline">
                                        <label class="form-label" for="">IP Address :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                    <div class="form-outline">
                                        <label class="form-label" for="">Sistem Operasi :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-4 mb-2">

                                    <h6>Hardisk</h6>
                                    <input type="checkbox" name="hardisk[]" value="20 GB"> 20 GB<br>
                                    <input type="checkbox" name="hardisk[]" value="40 GB"> 40 GB<br>

                                    <h6>RAM</h6>
                                    <input type="checkbox" name="RAM[]" value="1 GB"> 1 GB<br>
                                    <input type="checkbox" name="RAM[]" value="2 GB"> 2 GB<br>

                                    <h6>Akun Akses Non Fisik</h6>
                                    <input type="checkbox" name="Akun Akses Non Fisik[]" value="SSH"> SSH<br>
                                    <input type="checkbox" name="Akun Akses Non Fisik[]" value="Remote Dekstop"> Remote Dekstop<br>
                                </div>
                            </div>

                            <h7>Dengan ini saya menyatakan bahwa data di atas adalah benar, dan akan mematuhi peraturan atau tata tertib data center yang berlaku.</h7>

                            <div class="row">
                                <h6>Menyetujui</h6>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                    <div class="form-outline">
                                        <label class="form-label" for="">NIP :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                    <div class="form-outline">
                                        <label class="form-label" for="">Jabatan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                    <div class="col-md-6 mb-2">
                                        <h6>Pemohon</h6>
                                        <div class="form-outline">
                                            <label class="form-label" for="">Nama :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                        <div class="form-outline">
                                            <label class="form-label" for="">NIP :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                        <div class="form-outline">
                                            <label class="form-label" for="">Jabatan :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-10 mb-2">
                    <div class="form-outline">
                        <button type="button" class="btn btn-primary btn-lg">Kirim</button>
                        <button type="button" class="btn btn-primary btn-lg">Print</button>
                    </div>
                </div>
            </div>

            <!-- button -->
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</body>

</html>