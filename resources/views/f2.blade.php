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
        <h2>VPS<img src="{{asset ('assets/arrow.svg')}}">Formulir Permohonan Akses Fisik Data Center
    </div>

    <div class="container shadow p-3 bg-body-tertiary rounded">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
            <div class="row">
                <div class="card bg-body-tertiary">
                    <div class="card-body px-4 py-5 px-md-5">


                        <form>
                            <h5 class="text-center text-decoration-underline">Formulir Permohonan Akses Fisik Data Center</h5><br>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Tanggal :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Jam :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <h6>Daftar Pengunjung</h6>
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                    <div class="form-outline">
                                        <label class="form-label" for="">Dari :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                    <div class="form-outline">
                                        <label class="form-label" for="">Telp/Hp :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <h6>Keperluan Pengunjung</h6>
                                    <input type="checkbox" name="keperluan[]" value="Server Hardware Maintenance"> Server Hardware Maintenance<br>
                                    <input type="checkbox" name="keperluan[]" value="Server Software Maintenance"> Server Software Maintenance<br>
                                    <input type="checkbox" name="keperluan[]" value="Hanya Berkunjung"> Hanya Berkunjung<br>
                                    <input type="checkbox" name="keperluan[]" value="Server IP"> Server IP<br>
                                    <input type="checkbox" name="keperluan[]" value="Server Hostname"> Server Hostname<br>
                                    <input type="checkbox" name="keperluan[]" value="Server Penyelesaian Malasalah"> Server Penyelesaian Masalah<br>
                                </div>
                            </div>

                            <label class="form-label fs-7" for="">Tambah Data</label>
                            <a class="mx-2" href=""><img src="{{asset ('assets/button plus.svg')}}"></a>
                            <a class="" href=""><img src="{{asset ('assets/button min.svg')}}"></a>
                            <div class="col-12 py-4">
                                <h6>Daftar Hardware</h6>
                                <div class="row">
                                    <div class="col-md-4 mb-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Deskripsi :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Nomor Serial :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Masuk :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Keluar :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="col-md-6 mb-2">
                                        <h6>Menyetujui</h6>
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
                                    <div class="col-md-6 mb-2">
                                        <h6>Penanggung Jawab Data Center</h6>

                                        <div class="form-outline">
                                            <label class="form-label" for="">Nama :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>

                                        <div class="form-outline">
                                            <label class="form-label" for="">NIP :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>

                                    </div>
                                    <div class="form-outline mb-2">
                                        <label class="form-label" for="">Catatan :</label>
                                        <input type="text" id="" class="form-control" />
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