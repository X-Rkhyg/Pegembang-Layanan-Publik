@extends('layouts.navform')
@section('content')
<div class="container mt-5">
    <h2>VPS<img src="{{ asset('assets/arrow.svg') }}">Surat Pengantar Pengajuan Server
</div>

<div class="container shadow p-3 bg-body-tertiary rounded">
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5 p-3">
        <div class="row">
            <div class="card bg-body-tertiary border rounded">
                <div class="card-body px-4 py-5 px-md-5">

                    {{-- Mulai formulir --}}
                    <form id="klon">
                        <div class="row">
                            <div class="row">
                                <div class="col-md-6 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Nomor :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

                                <div class="col-md-6 mb-2 mt-2">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Sifat :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>

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

                                <div class="col-md-12 mb-3">
                                    <div class="form-outline">
                                        <label class="form-label" for="">Keperluan :</label>
                                        <input type="text" id="" class="form-control" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- akhir formulir --}}
                </div>
            </div>
        </div>
        <!-- button  kirim dan print -->
        <div class="row mt-3">
            <div class="col-md-12 mb-2 d-flex justify-content-start">
                <div class="form-outline">
                    <button type="button" class="btn btn-primary btn-lg">Kirim</button>
                    <button type="button" class="btn btn-primary btn-lg">Print</button>
                </div>
            </div>
        </div>
        <!-- button  kirim dan print akhir-->
    </div>
</div>
@endsection