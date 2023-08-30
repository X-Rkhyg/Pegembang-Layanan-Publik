@extends('layouts.navform')
@section('content')

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
    </div>
</div>

@endsection