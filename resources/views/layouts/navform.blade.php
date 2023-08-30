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
                            <li><a class="dropdown-item" href="{{url ('Server/Colocation-Server')}}">Colocation Server</a></li>
                            <li><a class="dropdown-item" href="{{url ('Server/Pengajuan-Server')}}">Pengajuan Server</a></li>
                            <li><a class="dropdown-item" href="{{url ('Server/Akses-Fisik')}}">Akses Fisik Data Center</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sertifikat Elektronik
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url ('Sertifikat-Elektronik/Single-User')}}">Single User</a></li>
                            <li><a class="dropdown-item" href="{{url ('Sertifikat-Elektronik/Multi-User')}}">Multi User</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            VPS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url ('VPS/Permohonan-VPS')}}">Permohonan VPS Baru</a></li>
                            <li><a class="dropdown-item" href="{{url ('VPS/Perubahan-VPS')}}">Permohonan Perubahan VPS</a></li>
                            <li><a class="dropdown-item" href="{{url ('VPS/Pengajuan-Server')}}">Surat Pengantar Pengajuan Server</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-primary btn-lg">LOGIN</button>
                </div>
            </header>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>