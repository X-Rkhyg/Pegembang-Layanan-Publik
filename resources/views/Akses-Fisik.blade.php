@extends('layouts.navform')
@section('content')
    <div class="container mt-5">
        <h2>VPS<img src="{{ asset('assets/arrow.svg') }}">Formulir Permohonan Akses Fisik Data Center
    </div>

    <div class="container shadow p-3 bg-body-tertiary rounded">
        <div class="container px-4 py-5 px-md-5 text-left text-lg-start my-3 w-80 p-3">
            <div class="row">
                <div class="card bg-body-tertiary">
                    <div class="card-body px-4 py-5 px-md-5">


                        <form>
                            <h5 class="text-center text-decoration-underline">Formulir Permohonan Akses Fisik Data Center
                            </h5><br>
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
                                        <input type="text" id="" class="form-control" /><br>
                                    </div>
                                </div>
                            </div>
                        </form>


                            <form id="klon1">
                                <div class="row border rounded mb-3 mt-2 element1">
                                    <h6>Daftar Pengunjung</h6>
                                    <div class="col-6 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Nama :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Dari :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-6 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Telp/Hp :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="grid gap-1 d-flex">
                                    <label class="p-1 g-col-6">Tambah Data</label>
                                    <a class="p-1 g-col-6 btn-sm" id="duplikatButton1">
                                        <img src="{{ asset('assets/button plus.svg') }}"></a>
                                    <a class="p-1 g-col-6 btn-sm" id="kurangiButton1" style="display: none;">
                                        <img src="{{ asset('assets/button min.svg') }}"></a>
                                </div>
                            </div>




                            <div class="row">
                                <div class="col-md-6 mb-2 mt-2">
                                    <h6>Keperluan Pengunjung</h6>
                                    <input type="checkbox" name="keperluan[]" value="Server Hardware Maintenance"> Server
                                    Hardware Maintenance<br>
                                    <input type="checkbox" name="keperluan[]" value="Server Software Maintenance"> Server
                                    Software Maintenance<br>
                                    <input type="checkbox" name="keperluan[]" value="Hanya Berkunjung"> Hanya Berkunjung<br>
                                    <input type="checkbox" name="keperluan[]" value="Server IP"> Server IP<br>
                                    <input type="checkbox" name="keperluan[]" value="Server Hostname"> Server Hostname<br>
                                    <input type="checkbox" name="keperluan[]" value="Server Penyelesaian Malasalah"> Server
                                    Penyelesaian Masalah<br>
                                </div>
                            </div>




                            <form id="klon2">
                                <div class="row border rounded mb-3 mt-2 element2">
                                    <h6>Daftar Hardware</h6>
                                    <div class="col-md-4 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Deskripsi :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Nomor Serial :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Masuk :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="col-md-2 mb-2 mt-2">
                                        <div class="form-outline">
                                            <label class="form-label" for="">Keluar :</label>
                                            <input type="text" id="" class="form-control" />
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="row">
                                <div class="grid gap-1 d-flex">
                                    <label class="p-1 g-col-6">Tambah Data</label>
                                    <a class="p-1 g-col-6 btn-sm" id="duplikatButton2">
                                        <img src="{{ asset('assets/button plus.svg') }}"></a>
                                    <a class="p-1 g-col-6 btn-sm" id="kurangiButton2" style="display: none;">
                                        <img src="{{ asset('assets/button min.svg') }}"></a>
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

            {{-- Script Button --}}
            {{-- Script Button --}}
            <script>
                document.addEventListener("DOMContentLoaded", function() {
                    
                    const container1 = document.getElementById("klon1");
                    const elemenAsal1 = container1.querySelector(".element1"); // Pilih elemen dalam kontainer

                    const duplikatButton1 = document.getElementById("duplikatButton1");
                    const kurangiButton1 = document.getElementById("kurangiButton1");

                    duplikatButton1.addEventListener("click", function() {
                        const elemenBaru1 = elemenAsal1.cloneNode(true); // true untuk menduplikat elemen dan isinya
                        elemenBaru1.querySelectorAll("input").forEach(function(input) {
                            input.value = ""; // Mengosongkan nilai input
                        });
                        elemenBaru1.classList.add("mt-3");
                        container1.appendChild(elemenBaru1); // Menambahkan elemen baru ke dalam kontainer yang sama
                        kurangiButton1.style.display = "block"; // Tampilkan tombol "Kurangi Elemen"
                        console.log("berhasil duplikat");
                    });

                    kurangiButton1.addEventListener("click", function() {
                        const elemenTerakhir1 = container1.lastChild; // Dapatkan elemen terakhir dalam kontainer
                        if (elemenTerakhir1 && elemenTerakhir1 !== elemenAsal1) {
                            container1.removeChild(elemenTerakhir1); // Hapus elemen terakhir jika bukan elemen asal
                            // Cek jumlah elemen dalam kontainer, jika tidak ada elemen lagi, sembunyikan tombol "Kurangi Elemen"
                            if (container1.children.length === 1) {
                                kurangiButton1.style.display = "none";
                            }
                        }
                        console.log(kurangiButton1);
                    });
                });




                document.addEventListener("DOMContentLoaded", function() {
                    const container2 = document.getElementById("klon2");
                    const elemenAsal2 = container2.querySelector(".element2"); // Pilih elemen dalam kontainer

                    const duplikatButton2 = document.getElementById("duplikatButton2");
                    const kurangiButton2 = document.getElementById("kurangiButton2");

                    duplikatButton2.addEventListener("click", function() {
                        const elemenBaru2 = elemenAsal2.cloneNode(true); // true untuk menduplikat elemen dan isinya
                        elemenBaru2.querySelectorAll("input").forEach(function(input) {
                         input.value = ""; // Mengosongkan nilai input
                        });
                        elemenBaru2.classList.add("mt-3");
                        container2.appendChild(elemenBaru2); // Menambahkan elemen baru ke dalam kontainer yang sama
                        kurangiButton2.style.display = "block"; // Tampilkan tombol "Kurangi Elemen"
                    });

                    kurangiButton2.addEventListener("click", function() {
                        const elemenTerakhir2 = container2.lastChild; // Dapatkan elemen terakhir dalam kontainer
                        if (elemenTerakhir2 && elemenTerakhir2 !== elemenAsal2) {
                            container2.removeChild(elemenTerakhir2); // Hapus elemen terakhir jika bukan elemen asal
                            // Cek jumlah elemen dalam kontainer, jika tidak ada elemen lagi, sembunyikan tombol "Kurangi Elemen"
                            if (container2.children.length === 1) {
                                kurangiButton2.style.display = "none";
                            }
                        }
                        console.log(kurangiButton2);
                    });
                });
            </script>

        </div>
    </div>
@endsection
