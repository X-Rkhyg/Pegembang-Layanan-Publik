@extends('layouts.navform')
@section('content')

<div class="container mt-5">
    <h2>VPS<img src="{{asset ('assets/arrow.svg')}}">Surat Pengantar Pengajuan Server
</div>

<div class="container shadow p-3 bg-body-tertiary rounded">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 w-75 p-3">
        <div class="row">
            <div class="card bg-body-tertiary">
                <div class="card-body px-4 py-5 px-md-5">


                    <form>
                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nomor :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Sifat :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Lampiran :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Perihal :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama Instansi :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Tujuan :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2">
                                <div class="form-outline">
                                    <label class="form-label" for="">No Telepon :</label>
                                    <input type="text" id="" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="form-outline mb-2">
                            <label class="form-label" for="">Keperluan :</label>
                            <input type="text" id="" class="form-control" />
                        </div>

                        <div class="row mt-5">
                            <div class="col-md-8">
                                <div class="form-outline">
                                    <label class="form-label fs-5" for="">Tambah Data</label>
                                    <a class="mx-2" href=""><img src="{{asset ('assets/button plus.svg')}}"></a>
                                    <a class="" href=""><img src="{{asset ('assets/button min.svg')}}"></a>
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