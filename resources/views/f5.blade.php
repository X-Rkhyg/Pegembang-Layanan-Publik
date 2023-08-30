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
                            <li><a class="dropdown-item nav-link link-secondary" href="#">Sertifikat Elektronik Multi User</a></li>
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
        <h2>VPS<img src="{{asset ('assets/arrow.svg')}}">Sertifikat Elektronik Multi User
    </div>

    <body style="background-image: url(assets/img/hero-bg.png)">
    <!-- ======= Header ======= -->
    <header>
        <nav>
          <i class="mobile-nav-toggle"></i>
        </nav>
    </header>
    <!-- End Header -->

    <div class="container-fluid" data-aos="fade-up">
      <img src="assets/img/kop.jpg" class="img-fluid" alt="" />
    </div>

      <div
        class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3"
        data-aos="fade-up"
      >
        <div class="row align-items-center mb-5">
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <h1 class="display-7 teks-color text-center judul-header text-decoration-underline">
                REKOMENDASI
              </h1>
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->

                <div class="form-outline mb-2 mt-5">
                  <label class="form-label" for="form3Example3"
                    >Nomor :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <h1 class="fs-5 mb-2 mt-5">
                  Saya yang bertanda tangan di bawah ini :
                </h1>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Nama Lengkap :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >NIP :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Pangkat/Golongan :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Jabatan :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <h1 class="fs-5 mb-2 mt-5">
                  Dengan ini memberikan rekomendasi kepada :
                </h1>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Nama Lengkap :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >NIP :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >NIK :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Pangkat/Golongan :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Jabatan :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Instansi :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Unit Kerja :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Alamat Email :</label
                  >
                  <input type="email" id="" class="form-control" placeholder="………………@kalteng.go.id"/>
                </div>

                <h1 class="fs-5 mb-2 mt-2">
                  Untuk melakukan pendaftaran sertifikat elektronik sekaligus menjadi pemegang sertifikat elektronik yang digunakan pada :
                </h1>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Sistem :</label
                  >
                  <input type="email" id="" class="form-control" placeholder="Persuratan"/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Kegunaan :</label
                  >
                  <input type="email" id="" class="form-control" placeholder="Tanda Tangan Elektronik"/>
                </div>

                <h1 class="fs-5 mb-2 mt-5">
                  Demikian surat rekomendasi ini saya buat, agar dapat digunakan sebagaimana mestinya.
                </h1>

                <div class="row">
                  <div class="col-md-8 mb-2">
                    <div class="form-outline">
                      <label class="form-label" for="form3Example1"
                        >Upload Files Tanda Tangan</label
                      >
                      <button
                        type="submit"
                        class="btn btn-primary btn-block btn-sm ms-2"
                      >
                        Upload Here
                      </button>
                    </div>
                  </div>
                </div>

                <!-- Submit button -->
                <button
                  type="submit"
                  class="btn btn-primary btn-block btn-lg mb-0 mt-2"
                >
                  <a href="" class="text-white">Input</a>
                </button>

                <!-- Register buttons -->
              </form>
            </div>
          </div>
        </div>
      </div>

      <div
        class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3"
        data-aos="fade-up"
      >
        <div class="row align-items-center mb-5">
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <h1 class="display-7 teks-color text-center judul-header text-decoration-underline">
                DAFTAR REKOMENDASI PENERIMA SERTIFIKAT ELEKTRONIK
              </h1>
              <form>
                <!-- 2 column grid layout with text inputs for the first and last names -->

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Nama Lengkap :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >NIP :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >NIK :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Pangkat/Golongan :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Jabatan :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Unit Kerja :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Instansi :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Kota :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Provinsi :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >Alamat Email :</label
                  >
                  <input type="email" id="" class="form-control" placeholder="………………@kalteng.go.id"/>
                </div>

                <div class="form-outline mb-2">
                  <label class="form-label" for="form3Example3"
                    >No Telepon :</label
                  >
                  <input type="email" id="" class="form-control" placeholder=""/>
                </div>

                <!-- Submit button -->
                <button
                  type="submit"
                  class="btn btn-primary btn-block btn-lg mb-0 mt-2"
                >
                  <a href="" class="text-white">Input</a>
                </button>

                <!-- Register buttons -->
              </form>
            </div>
          </div>
        </div>
      </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
