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
        <h2>Server<img src="{{asset ('assets/arrow.svg')}}">Colocation Server
    </div>

    <div class="container shadow p-3 bg-body-tertiary rounded">
        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
            <div class="row">
                <div class="card bg-body-tertiary">
                    <div class="card-body px-4 py-5 px-md-5">


                        <form>
                            <h5 class="text-center text-decoration-underline mb-5">Colocation Server</h5>
                            <div class="row">
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nomor Formulir :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Kontak Personal (No HP) :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Instansi / Perusahaan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Jenis Server (Aplikasi)  :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Penanggung Jawab (PNS) :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Tanggal Masuk   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline">
                                        <label class="form-label" for="">NIP   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            <h6>Formulir Perangkat Colocation </h6>
                            <div class="row border rounded mb-3" >
                                <div class="col-2 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">No   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-10 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Keterangan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Perangkat :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nomor Seri  :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Merk Perangkat   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row border rounded mb-4" >
                                <div class="col-2 mb-2 ">
                                    <div class="form-outline">
                                        <label class="form-label" for="">No   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-10 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Keterangan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Perangkat :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nomor Seri  :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Merk Perangkat   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>

                            
                            <h6>Formulir Hak Akses Server</h6>
                            <div class="row border rounded mb-3" >
                                <div class="col-2 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">No   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-7 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Personil yang Memiliki Hak Akses Server :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-3 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">No. Hp   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Alamat IP   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Posisi Server  :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>
                            <div class="row border rounded mb-4" >
                                <div class="col-2 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">No   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-7 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nama Personil yang Memiliki Hak Akses Server :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-3 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">No. Hp   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Alamat IP   :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                                <div class="col-6 mb-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Posisi Server  :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>



                            <h7>Dengan ini saya menyatakan bahwa data di atas adalah benar, dan akan mematuhi peraturan atau tata tertib data center yang berlaku.</h7>

                            <div class="row ">
                                <div class="col-md-6 mt-3">
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
                                <div class="col-md-6 mt-3">
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