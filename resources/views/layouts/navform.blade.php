<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,300;9..40,400;9..40,500;9..40,600&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <!-- Styles -->
    <style>
    </style>
</head>

<body style="font-family: DM sans;">
    <nav class="shadow rounded">
        <div class="container">
            <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4">
                <div class="col-md-3 mb-2 mb-md-0">
                    <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none fs-3">
                        <b style="color: #2B3674">FORMULIR</b>
                    </a>
                </div>

                <ul class="nav fs-5">
                    <li class="nav-item dropdown">
                        <a style="color: #2B3674" class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Server
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url ('server/colocation-server')}}">Colocation Server</a></li>
                            <li><a class="dropdown-item" href="{{url ('server/akses-fisik')}}">Akses Fisik Data Center</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: #2B3674" class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Sertifikat Elektronik
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url ('sertifikat-elektronik/single-user')}}">Single User</a></li>
                            <li><a class="dropdown-item" href="{{url ('sertifikat-elektronik/multi-user')}}">Multi User</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a style="color: #2B3674" class="nav-link dropdown-toggle fw-bold" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            VPS
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{url ('vps/permohonan-vps')}}">Permohonan VPS Baru</a></li>
                            <li><a class="dropdown-item" href="{{url ('vps/perubahan-vps')}}">Permohonan Perubahan VPS</a></li>
                            <li><a class="dropdown-item" href="{{url ('vps/pengajuan-server')}}">Surat Pengantar Pengajuan Server</a></li>
                        </ul>
                    </li>
                </ul>

                <div class="col-md-3 text-end">
                    <button type="button" class="btn btn-lg" style="background-color: #2D40EA; color:#fff" >LOGIN</button>
                </div>
            </header>
        </div>
    </nav>
    @yield('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>