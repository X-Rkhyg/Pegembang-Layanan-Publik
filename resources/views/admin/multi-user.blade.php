@extends('layouts.dashboard')

@section('sidebar')



<div class="px-[1rem] py-11">

    <div>
        <div class="flex gap-x-[12.8px]">
            <h1 class="font-medium text-[32px] text-[#A3AED0]">Sertifikat Elektronik</h1>
            <img src="{{asset ('assets/arrow.svg')}}" alt="">
            <h1 class="font-medium text-[32px] text-highlight">Multi User</h1>
        </div>
    </div>

    <div class="bg-white rounded-md h-fit w-[1584px] my-11 py-9 px-9">



        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">

                        <!-- Filter -->
                        <div class="flex pb-7">
                            <h1 class="font-medium text-[32px] text-highlight">Filter</h1>
                        </div>
                        <div class="flex pb-14 gap-x-[70px] items-center">
                            <h1 class="font-medium text-[20px] text-[#A3AED0]">Status</h1>
                            <select name="" id="">
                                <option value="">Disetujui</option>
                                <option value="">Belum Disetujui</option>
                                <option value="">Semua</option>
                            </select>
                        </div>
                        <!-- End Filter -->

                        <!-- Tambah Modal -->
                        <div class="flex justify-between pb-14">
                            <button type="submit" class="flex items-center w-[116px] h-10 justify-center bg-btn gap-x-2 rounded text-[#FFFFFF]"><img src="{{asset ('assets/search.svg')}}" alt="">Cari</button>
                            <button class="flex items-center w-[116px] h-10 justify-center bg-btn gap-x-2 rounded text-[#FFFFFF]" onclick="my_modal_4.showModal()"><img src="{{asset ('assets/tambah-icon.svg')}}" alt="">Tambah</button>
                            <dialog id="my_modal_4" class="modal">
                                <form method="dialog" class="modal-box w-11/12 px-8 py-12 max-w-5xl">
                                    <h1 class="font-bold text-3xl text-highlight">Tambah Data</h1>
                                    <div class="modal-action">
                                        <!-- if there is a button, it will close the modal -->
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    </div>
                                    <div class="">
                                        <form action="">
                                            <label for="">TANGGAL :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">JAM :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">KEPERLUAN :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">PENANGGUNG JAWAB :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">NIP PENANGGUNG JAWAB :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">DAFTAR PENGUNJUNG :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">DESKRIPSI :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">NOMOR SERIAL :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">MASUK :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">KELUAR :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">STATUS :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">NAMA PENYETUJU :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">NIP PENYETUJU :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">JABATAN PENYETUJU :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">Catatan :</label><br>
                                            <input placeholder="" type="text"><br><br>

                                            <input class="bg-btn px-4 rounded text-white py-2" type="submit">
                                        </form>
                                    </div>
                                </form>
                            </dialog>
                        </div>
                        <!-- End Tambah Modal -->


                        <!-- Tabel -->
                        <table class="min-w-full text-center text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr class="text-text">
                                    <th scope="col" class="px-6 py-2">NO</th>
                                    <th scope="col" class="px-6 py-2">NO. TIKET</th>
                                    <th scope="col" class="px-6 py-2">NAMA LENGKAP</th>
                                    <th scope="col" class="px-6 py-2">NIP</th>
                                    <th scope="col" class="px-6 py-2">PANGKAT</th>
                                    <th scope="col" class="px-6 py-2">JABATAN</th>
                                    <th scope="col" class="px-6 py-2">INSTANSI</th>
                                    <th scope="col" class="px-6 py-2">UNIT KERJA</th>
                                    <th scope="col" class="px-6 py-2">ALAMAT EMAIL</th>
                                    <th scope="col" class="px-6 py-2">STATUS</th>
                                    <th scope="col" class="px-6 py-2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">12333</td>
                                    <td class="whitespace-nowrap px-6 py-2">John Doe</td>
                                    <td class="whitespace-nowrap px-6 py-2">123456789</td>
                                    <td class="whitespace-nowrap px-6 py-2">Pegawai Swasta</td>
                                    <td class="whitespace-nowrap px-6 py-2">Direktur</td>
                                    <td class="whitespace-nowrap px-6 py-2">PT SEJAHTERA</td>
                                    <td class="whitespace-nowrap px-6 py-2">Swasta</td>
                                    <td class="whitespace-nowrap px-6 py-2">johndoe@gmail.com</td>
                                    <td class="whitespace-nowrap px-6 py-2">Disetujui</td>
                                    <td class="whitespace-nowrap px-6 py-2">
                                        <div class="flex justify-center items-center gap-x-3">

                                            <label for="modal-1" class="w-8 h-8 border-2 rounded flex items-center justify-center cursor-pointer hover:bg-"><img src="{{asset ('assets/detail-icon.svg')}}" alt=""></label>
                                            <label for="modal-2" class="w-8 h-8 rounded bg-[#4318FF] flex items-center justify-center cursor-pointer hover:bg-[#3A16D9]"><img src="{{asset ('assets/edit-icon.svg')}}" alt=""></label>
                                            <label for="modal-3" class="w-8 h-8 rounded bg-[#D2000D] flex items-center justify-center cursor-pointer hover:bg-[#B5000B]"><img src="{{asset ('assets/delete-icon.svg')}}" alt=""></label>

                                            <!-- DetaiL Modal -->
                                            <input type="checkbox" id="modal-1" class="modal-toggle" />
                                            <div class="modal">
                                                <div class="modal-box px-8 py-12 w-11/12 max-w-5xl">
                                                    <h1 class="font-bold text-start text-highlight text-3xl">Detail Data</h1>
                                                    <div class="modal-action">
                                                        <label for="modal-1" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                                                    </div>
                                                    <div class="flex flex-col text-start font-medium gap-y-2.5">
                                                        <div class="flex justify-center">
                                                            <p class="text-text">REKOMENDASI NOMOR</p>
                                                        </div>
                                                        <div class="flex justify-center">
                                                            <p class="text-purple">12345</p> <!-- data -->
                                                        </div>
                                                        <p class="text-text">NAMA LENGKAP :</p>
                                                        <p class="text-purple">Jane Doe</p> <!-- data -->
                                                        <p class="text-text">NIP :</p>
                                                        <p class="text-purple">12333</p> <!-- data -->
                                                        <p class="text-text">NIK :</p>
                                                        <p class="text-purple">012392</p> <!-- data -->
                                                        <p class="text-text">PANGKAT/GOLONGAN :</p>
                                                        <p class="text-purple">Pegawai Swasta</p> <!-- data -->
                                                        <p class="text-text">JABATAN :</p>
                                                        <p class="text-purple">Direktur</p> <!-- data -->
                                                        <p class="text-text">INSTANSI :</p>
                                                        <p class="text-purple">Partai Tersero</p> <!-- data -->
                                                        <p class="text-text">UNIT KERJA :</p>
                                                        <p class="text-purple">Swasta</p> <!-- data -->
                                                        <p class="text-text">ALAMAT EMAIL :</p>
                                                        <p class="text-purple">janedoe70@gmail.com</p> <!-- data -->
                                                        <p class="text-text">TEMPAT TINGGAL :</p>
                                                        <p class="text-purple">Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta</p><br> <!-- data -->

                                                        <p class="text-black">UNTUK MELAKUKAN PENDAFTARAN SERTIFIKAT ELEKTRONIK SEKALIGUS</p>
                                                        <p class="text-text">A. SISTEM :</p>
                                                        <p class="text-purple">Persuratan</p> <!-- data -->
                                                        <p class="text-text">B. KEGUNAAN :</p>
                                                        <p class="text-purple">Tanda Tangan Elektronik</p><br> <!-- data -->

                                                        <p class="text-black">DEMIKIAN SURAT REKOMENDASI INI SAYA BUAT, AGAR DIGUNAKAN SEBAGAIMANA MESTINYA</p>
                                                        <p class="text-text">TEMPAT :</p>
                                                        <p class="text-purple">PT. FIF GROUP</p> <!-- data -->
                                                        <p class="text-text">TANGGAL :</p>
                                                        <p class="text-purple">30/08/2023</p> <!-- data -->
                                                        <p class="text-text">KEPALA DINAS :</p>
                                                        <p class="text-purple">Aldi</p> <!-- data -->
                                                        <p class="text-text">PROVINSI :</p>
                                                        <p class="text-purple">YOGYAKARTA</p><br><!-- data -->
                                                        
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Modal -->
                                            <input type="checkbox" id="modal-2" class="modal-toggle" />
                                            <div class="modal">
                                                <div class="modal-box px-8 py-12 w-11/12 max-w-5xl">
                                                    <h1 class="font-bold text-start text-highlight text-3xl">Edit Data</h1>
                                                    <div class="modal-action">
                                                        <label for="modal-2" class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</label>
                                                    </div>
                                                    <div class="flex flex-col text-start font-medium">
                                                        <form class="text-text" action="">

                                                            <div class="flex justify-center">
                                                                <p class="text-text">REKOMENDASI NOMOR</p>

                                                            </div>
                                                            <div class="flex justify-center">
                                                                <input class="w-48" placeholder="12345" type="text">
                                                            </div>
                                                            <br>

                                                            <label for="">NAMA LENGKAP :</label><br>
                                                            <input placeholder="John Doe" type="text"><br>
                                                            <label for="">NIP :</label><br>
                                                            <input placeholder="123456789" type="text"><br>
                                                            <label for="">PANGKAT/GOLONGAN :</label><br>
                                                            <input placeholder="Pegawai Swasta" type="text"><br>
                                                            <label for="">JABATAN :</label><br>
                                                            <input placeholder="Direktur" type="text"><br>
                                                            <label for="">INSTANSI :</label><br>
                                                            <input placeholder="Partai Tersero" type="text"><br>
                                                            <label for="">UNIT KERJA :</label><br>
                                                            <input placeholder="Swasta" type="text"><br>
                                                            <label for="">ALAMAT EMAIL :</label><br>
                                                            <input placeholder="janedoe70@gmail.com" type="text"><br>
                                                            <label for="">TEMPAT TINGGAL :</label><br>
                                                            <input placeholder="Kotagede, Kota Yogyakarta, Daerah Istimewa Yogyakarta" type="text"><br>
                                                            <br>
                                                            <p class="text-black">UNTUK MELAKUKAN PENDAFTARAN SERTIFIKAT ELEKTRONIK SEKALIGUS</p>
                                                            <br>
                                                            <label for="">A. SISTEM :</label><br>
                                                            <input placeholder="Persuratan" type="text"><br>
                                                            <label for="">B. KEGUNAAN :</label><br>
                                                            <input placeholder="Tanda Tangan Elektronik" type="text"><br>

                                                            <br>
                                                            <p class="text-black">DEMIKIAN SURAT REKOMENDASI INI SAYA BUAT, AGAR DIGUNAKAN SEBAGAIMANA MESTINYA</p>
                                                            <br>
                                                            <label for="">TEMPAT :</label><br>
                                                            <input placeholder="PT. FIF GROUP" type="text"><br>
                                                            <label for="">TANGGAL :</label><br>
                                                            <input placeholder="" type="date"><br>
                                                            <label for="">KEPALA DINAS/BADAN/BIRO :</label><br>
                                                            <input placeholder="Aldi" type="text"><br>
                                                            <label for="">PROVINSI :</label><br>
                                                            <input placeholder="Daerah Istimewa Yogyakarta" type="text"><br>

                                                            <label for="">STATUS :</label><br>
                                                            <select name="" id="">
                                                                <option value="">Disetujui</option>
                                                                <option value="">Belum Disetujui</option>
                                                            </select>


                                                            <input class="bg-btn px-4 rounded text-white py-2" type="submit">
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Delete Modal -->
                                            <input type="checkbox" id="modal-3" class="modal-toggle" />
                                            <div class="modal">
                                                <div class="modal-box py-3">
                                                    <h3 class="text-[#000000] fs-5">Apakah Anda yakin untuk menghapus data ?</h3>
                                                    <div class="modal-action flex justify-center">
                                                        <label for="modal-3" class="btn btn-md btn-outline btn-error text-[#FFFFFF]">YES</label>
                                                        <label for="modal-3" class="btn btn-md btn-outline btn-primary text-[#FFFFFF]">NO</label>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <!-- End Tabel -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

</script>
@endsection