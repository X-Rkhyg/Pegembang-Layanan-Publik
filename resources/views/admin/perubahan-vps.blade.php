@extends('layouts.dashboard')

@section('sidebar')



<div class="px-[1rem] py-11">

    <div>
        <div class="flex gap-x-[12.8px]">
            <h1 class="font-medium text-[32px] text-[#A3AED0]">VPS</h1>
            <img src="{{asset ('assets/arrow.svg')}}" alt="">
            <h1 class="font-medium text-[32px] text-highlight">Permohonan Perubahan VPS</h1>
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
                                    <th scope="col" class="px-6 py-2">PEMOHON</th>
                                    <th scope="col" class="px-6 py-2">NIP</th>
                                    <th scope="col" class="px-6 py-2">INSTANSI</th>
                                    <th scope="col" class="px-6 py-2">TUJUAN</th>
                                    <th scope="col" class="px-6 py-2">STATUS</th>
                                    <th scope="col" class="px-6 py-2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">12333</td>
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">George Griffith</td>
                                    <td class="whitespace-nowrap px-6 py-2">129382938127382192</td>
                                    <td class="whitespace-nowrap px-6 py-2">FIF GROUP</td>
                                    <td class="whitespace-nowrap px-6 py-2">Memperbesar Server</td>
                                    <td class="whitespace-nowrap px-6 py-2">Belum Disetujui</td>
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
                                                        <p class="text-text">NAMA :</p>
                                                        <p class="text-purple">George Griffith</p> <!-- data -->
                                                        <p class="text-text">NIP :</p>
                                                        <p class="text-purple">129382938127382192</p> <!-- data -->
                                                        <p class="text-text">INSTANSI :</p>
                                                        <p class="text-purple">FIF GROUP</p> <!-- data -->
                                                        <p class="text-text">TUJUAN :</p>
                                                        <p class="text-purple">Memperbesar Server</p> <!-- data -->
                                                        <br>
                                                        <p class="text-black">SPESIFIKASI VPS YANG DIINGINKAN</p>

                                                        <p class="text-text">PROSESOR :</p>
                                                        <p class="text-purple">Quad Core</p> <!-- data -->
                                                        <p class="text-text">SISTEM OPERASI :</p>
                                                        <p class="text-purple">Linux</p> <!-- data -->
                                                        <p class="text-text">HARDISK :</p>
                                                        <p class="text-purple">40 GB</p> <!-- data -->
                                                        <p class="text-text">RAM :</p>
                                                        <p class="text-purple">2 GB</p> <!-- data -->
                                                        <p class="text-text">IP ADDRESS :</p>
                                                        <p class="text-purple">198.165.0.1</p> <!-- data -->
                                                        <p class="text-text">AKSES NON FISIK :</p>
                                                        <p class="text-purple">SSH</p> <!-- data -->
                                                        <p class="text-text">STATUS :</p>
                                                        <p class="text-purple">Disetujui</p><br> <!-- data -->

                                                        <p class="text-black">PENYETUJU</p>
                                                        <p class="text-text">NAMA LENGKAP :</p>
                                                        <p class="text-purple">PT. FIF GROUP</p> <!-- data -->
                                                        <p class="text-text">NIP :</p>
                                                        <p class="text-purple">019290101</p> <!-- data -->
                                                        <p class="text-text">JABATAN :</p>
                                                        <p class="text-purple">CEO</p><br> <!-- data -->

                                                        <p class="text-black">PEMOHON</p>
                                                        <p class="text-text">NAMA LENGKAP :</p>
                                                        <p class="text-purple">John Doe</p> <!-- data -->
                                                        <p class="text-text">NIP :</p>
                                                        <p class="text-purple">019290101</p> <!-- data -->
                                                        <p class="text-text">JABATAN :</p>
                                                        <p class="text-purple">CEO</p> <!-- data -->
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

                                                            <label for="">NAMA PEMOHON :</label><br>
                                                            <input placeholder="George Griffith" type="text"><br>
                                                            <label for="">NIP :</label><br>
                                                            <input placeholder="129382938127382192" type="text"><br>
                                                            <label for="">INSTANSI :</label><br>
                                                            <input placeholder="FIF GROUP" type="text"><br>
                                                            <label for="">TUJUAN :</label><br>
                                                            <input placeholder="Memperbesar Server" type="text"><br>
                                                            <br>

                                                            <p class="text-black">SPESIFIKASI VPS YANG DIINGINKAN</p>
                                                            <label for="">PROSESOR :</label><br>
                                                            <input placeholder="Dual Core" type="text"><br>
                                                            <label for="">SISTEM OPERASI :</label><br>
                                                            <input placeholder="Linux" type="text"><br>
                                                            <br>
                                                            <label for="">HARDISK :</label><br>
                                                            <div class="flex gap-x-6">
                                                                <input type="checkbox" class="checkbox" />
                                                                <label>20 GB</label><br>
                                                                <input type="checkbox" checked="checked" class="checkbox" />
                                                                <label>40 GB</label>
                                                            </div>
                                                            <br>
                                                            <label for="">RAM :</label><br>
                                                            <div class="flex gap-x-6">
                                                                <input type="checkbox" class="checkbox" />
                                                                <label>1 GB</label><br>
                                                                <input type="checkbox" checked="checked" class="checkbox" />
                                                                <label>2 GB</label>
                                                            </div>
                                                            <br>
                                                            <label for="">IP ADDRESS :</label><br>
                                                            <input placeholder="198.165.0.1" type="text"><br>

                                                            <label for="">AKUN AKSES NON FISIK</label><br>
                                                            <div class="gap-y-6">
                                                                <input type="checkbox" checked="checked" class="checkbox" />
                                                                <label>SSH</label><br><br>
                                                                <input type="checkbox" class="checkbox" />
                                                                <label>REMOTE DESKTOP</label>
                                                            </div>
                                                            <br>
                                                            <label for="">STATUS :</label><br>
                                                            <select name="" id="">
                                                                <option selected value="">Disetujui</option>
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