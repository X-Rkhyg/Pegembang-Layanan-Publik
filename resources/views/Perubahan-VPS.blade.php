@extends('layouts.navform')
@section('content')

<div class="container mt-5">
    <h2>VPS<img src="{{asset ('assets/arrow.svg')}}">Formulir Permohonan Perubahan VPS
</div>

<div class="container shadow p-3 bg-body-tertiary rounded">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
        <div class="row">
            <div class="card bg-body-tertiary">
                <div class="card-body px-4 py-5 px-md-5">


                    <form>
                        <h5 class="text-center text-decoration-underline mb-5">Formulir Permohonan Perubahan VPS</h5>
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

                        <div class="row mb-2">
                            <div class="col-md-8 mt-3">
                                <h6>Spesifikasi VPS yang diinginkan</h6>
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

                            <div class="col-md-4 mt-3">

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
</div>

@endsection