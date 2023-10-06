@extends('layouts.navform')
@section('content')

<div class="container mt-5">
    <h2>VPS<img src="{{asset ('assets/arrow.svg')}}">Formulir Permohonan VPS Baru
</div>

<div class="container shadow p-3 bg-body-tertiary rounded">
    <div class="container px-4 py-5 px-md-5 text-left text-lg-start my-3 w-80 p-3">
        <div class="row">
            <div class="card bg-body-tertiary">
                <div class="card-body px-4 py-5 px-md-5">


                    <form action='{{url('permohonan-VPS')}}' method="post">
                        @csrf
                        <h5 class="text-center text-decoration-underline mb-5">Formulir Permohonan VPS Baru</h5>
                        <h6>Data Pemohon</h6>
                        <div class="row">
                            <div class="col-md-6 mb-2 text-left">
                                <div class="form-outline">
                                    <label class="form-label" for="">Nama Pemohon :</label>
                                    <input type="text" id="nama_pemohon" name="nama_pemohon" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2 text-left">
                                <div class="form-outline">
                                    <label class="form-label" for="">Instansi :</label>
                                    <input type="text" id="instansi" name="instansi" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2 text-left">
                                <div class="form-outline">
                                    <label class="form-label" for="">NIP :</label>
                                    <input type="text" id="nip" name="nip" class="form-control" />
                                </div>
                            </div>
                            <div class="col-md-6 mb-2 text-left">
                                <div class="form-outline">
                                    <label class="form-label" for="">Tujuan Pembuatan VPS :</label>
                                    <input type="text" id="tujuan_pembuatan_vps" name="tujuan_pembuatan_vps" class="form-control" />
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                        <div class="col-md-8 mt-3 text-left">
                            <h6>Spesifikasi VPS yang diinginkan</h6>
                                <div class="form-outline">
                                    <label class="form-label" for="">Prosesor :</label>
                                    <input type="text" id="prosesor" name="prosesor" class="form-control" />
                                </div>
                                <div class="form-outline">
                                    <label class="form-label" for="">IP Address :</label>
                                    <input type="text" id="ip_address" name="ip_address" class="form-control" />
                                </div>
                                <div class="form-outline">
                                    <label class="form-label" for="">Sistem Operasi :</label>
                                    <input type="text" id="sistem_operasi" name="sistem_operasi" class="form-control" />
                                </div>
                            </div>
                           

                            <div class="col-md-4 mt-3 text-left">

                                <h6>Hardisk</h6>
                                <input type="checkbox" name="hardisk" value="20gb"> 20 GB<br>
                                <input type="checkbox" name="hardisk" value="40gb"> 40 GB
            
                                <h6>RAM</h6>
                                <input type="checkbox" name="ram" value="1gb"> 1 GB<br>
                                <input type="checkbox" name="ram" value="2gb"> 2 GB<br>
                                
                                <h6>Akun Akses Non Fisik</h6>
                                <input type="checkbox" name="akun_akses_non_fisik" value="ssh"> SSH<br>
                                <input type="checkbox" name="akun_akses_non_fisik" value="remotedesktop"> Remote Dekstop<br>
                            </div>   
                            {{-- <button type="submit" class="btn btn-primary" name="submit">Submit</button> --}}
                        <h7>Dengan ini saya menyatakan bahwa data di atas adalah benar, dan akan mematuhi peraturan atau tata tertib data center yang berlaku.</h7>,<br>
                        </form>
                        <div class="row">
                            <div class="col-md-6 mt-3 text-left">
                                <h6>Mengetahui</h6>
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
                            <div class="col-md-6 mt-3 text-left">
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
            <div class="row mt-3 mb-4  ">
                            <div class="col-auto mr-auto  ">
                                <div class="form-outline">
                                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                                </div>
                            </div>
                            <div class="col-auto ">
                                <div class="form-outline">
                                    <button type="button" class="btn btn-primary btn-lg">Print</button>
                                </div>
                            </div>
                        </div>

            @endsection