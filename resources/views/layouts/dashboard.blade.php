<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,300;9..40,400;9..40,500;9..40,600&family=Lato:wght@300;400;700;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-admin flex w-full">
    <div class="h-screen bg-white w-[15.2%]">
        <div class="py-11">
            <h1 class="text-[48px] font-bold text-center text-highlight">
                ADMIN
            </h1>
        </div>

        <div class="pl-[25px] flex flex-col gap-y-5 py-7">
            <div class="flex items-center gap-x-[13.2px]">
                <img src="{{ asset('assets/dashboard.svg') }}" alt="">
                <a href="" class="text-text">Dashboard</a>
            </div>

            <div>
                <div class="flex items-center gap-x-[13.2px]">
                    <img src="{{ asset('assets/server.svg') }}" alt="">
                    <a class="text-text" href="">Server</a>
                </div>

                <div class="pl-[37px] py-2 w-full">
                    <ul class="flex flex-col gap-y-2">
                        <li><a class="text-text" href="">Colocation Server</a></li>
                        <li><a class="text-text" href="">Pengajuan Server</a></li>
                        <li><a class="text-text" href="">Akses Fisik Data Center</a></li>
                    </ul>
                </div>
            </div>

            <div>
                <div class="flex items-center gap-x-[13.2px]">
                    <img src="{{ asset('assets/user.svg') }}" alt="">
                    <a class="text-text" href="">Sertifikat Elektronik</a>
                </div>

                <div class="pl-[37px] py-2 w-full">
                    <ul class="flex flex-col gap-y-2">
                        <li><a class="text-text" href="">Single User</a></li>
                        <li><a class="text-text" href="">Multi User</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>


    <main>
        @yield('sidebar')
    </main>

</body>

</html>
