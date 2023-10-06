<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:opsz,wght@9..40,200;9..40,300;9..40,400;9..40,500;9..40,600&family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans bg-admin h-screen flex w-full">
    <div class="sidebar h-screen bg-white w-1/6">
        <div class="py-11">
            <h1 class="text-[48px] font-bold text-center text-highlight">
                ADMIN
            </h1>
        </div>

        <div class="pl-[25px] flex flex-col gap-y-5 py-7">
            
            <!-- Dashboard -->
            <div class="flex items-center gap-x-[13.2px]">
                <img src="{{ asset('assets/dashboard.svg') }}" alt="">
                <a href="" class="text-text">Dashboard</a>
            </div>

            <!-- Server -->
            <div>
                <div class="flex items-center gap-x-[13.2px]">
                    <img src="{{ asset('assets/server.svg') }}" alt="">
                    <a class="text-text" href="">Server</a>
                </div>

                <div class="pl-[37px] py-2 w-full">
                    <ul class="flex flex-col gap-y-2">
                        <li><a class="text-text" href="{{url ('/admin/colocation-server')}}">Colocation Server</a></li>
                        <li><a class="text-text" href="{{url ('/admin/pengajuan-server')}}">Pengajuan Server</a></li>
                        <li><a class="text-text" href="{{url ('/admin/akses-fisik')}}">Akses Fisik Data Center</a></li>
                    </ul>
                </div>
            </div>

            <!-- Sertifikat Elektronik -->
            <div>
                <div class="flex items-center gap-x-[13.2px]">
                    <img src="{{ asset('assets/user.svg') }}" alt="">
                    <a class="text-text" href="">Sertifikat Elektronik</a>
                </div>

                <div class="pl-[37px] py-2 w-full">
                    <ul class="flex flex-col gap-y-2">
                        <li><a class="text-text" href="{{url ('/admin/single-user')}}">Single User</a></li>
                        <li><a class="text-text" href="{{url ('/admin/multi-user')}}">Multi User</a></li>
                    </ul>
                </div>
            </div>

            <!-- VPS -->
            <div>
                <div class="flex items-center gap-x-[13.2px]">
                    <img src="{{ asset('assets/vps.svg') }}" alt="">
                    <a class="text-text" href="">VPS</a>
                </div>

                <div class="pl-[37px] py-2 w-full">
                    <ul class="flex flex-col gap-y-2">
                        <li><a class="text-text" href="{{url ('/admin/permohonan-vps')}}">Permohonan VPS Baru</a></li>
                        <li><a class="text-text" href="{{url ('/admin/perubahan-vps')}}">Permohonan Perubahan VPS</a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <script>
        function Open(){
            document.querySelector('.sidebar').classList.toggle('')
            console.log('Open')
        }
    </script>


    <main>
        @yield('sidebar')
    </main>

</body>

</html>