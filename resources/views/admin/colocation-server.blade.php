@extends('layouts.dashboard')

@section('sidebar')



<div class="px-[1rem] py-11">

    <div>
        <div class="flex items-center md:px-1 gap-x-[12.8px]">
            <h1 class="font-medium md:text-3xl text-[32px] text-[#A3AED0]">Server</h1>
            <img class="" src="{{asset ('assets/arrow.svg')}}" alt="">
            <h1 class="font-medium md:text-3xl text-[32px] text-highlight">Colocation Server</h1>
        </div>
    </div>

    <div class="bg-white rounded-md h-fit md:w-[500px] w-[1584px] my-11 py-9 px-9">


        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">

                        <!-- Filter -->
                        <div class="flex pb-7">
                            <h1 class="font-medium md:text-3xl text-[32px] text-highlight">Filter</h1>
                        </div>
                        <div class="flex pb-14 gap-x-[70px] items-center">
                            <h1 class="font-medium md:text-base text-[20px] text-[#A3AED0]">Status</h1>
                            <select class="md:w-40" name="" id="">
                                <option value="">Disetujui</option>
                                <option value="">Belum Disetujui</option>
                                <option value="">Semua</option>
                            </select>
                        </div>
                        <!-- Filter -->

                        <!-- Tambah Modal -->
                        <div class="flex justify-between pb-14">
                            <button type="submit" class="flex items-center w-[116px] md:w-28 lg:w-32 h-10 justify-center bg-btn gap-x-2 rounded text-[#FFFFFF]"><img src="{{asset ('assets/search.svg')}}" alt="">Cari</button>
                            <button class="flex items-center w-[116px] h-10 justify-center bg-btn gap-x-2 rounded text-[#FFFFFF]" onclick="my_modal_4.showModal()"><img src="{{asset ('assets/tambah-icon.svg')}}" alt="">Tambah</button>
                            <dialog id="my_modal_4" class="modal">
                                <form method="dialog" class="modal-box w-11/12 px-8 py-12 max-w-5xl">
                                    <h1 class="font-bold text-3xl text-highlight">Tambah Data</h1>
                                    <div class="modal-action">
                                        <!-- if there is a button, it will close the modal -->
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                    </div>
                                    <div class="">
                                        <form class="text-text" action="">
                                            <label for="">INSTANSI :</label><br>
                                            <input type="text"><br>
                                            <label for="">PENANGGUNG JAWAB :</label><br>
                                            <input type="text"><br>
                                            <label for="">NIP :</label><br>
                                            <input type="text"><br><br>
                                            <input class="bg-btn px-4 rounded text-white py-2" type="submit">
                                        </form>
                                    </div>
                                </form>
                            </dialog>
                        </div>
                        <!-- End Tambah Modal -->

                        <!-- Tabel -->
                        <table class="min-w-full text-center text-sm font-light md:overflow-x-auto">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr class="text-text">
                                    <th scope="col" class="px-6 py-2">NO</th>
                                    <th scope="col" class="px-6 py-2">NO. TIKET</th>
                                    <th scope="col" class="px-6 py-2">INSTANSI</th>
                                    <th scope="col" class="px-6 py-2">PENANGGUNG JAWAB</th>
                                    <th scope="col" class="px-6 py-2">NIP</th>
                                    <th scope="col" class="px-6 py-2">STATUS</th>
                                    <th scope="col" class="px-6 py-2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">112312</td>
                                    <td class="whitespace-nowrap px-6 py-2">PT. SEJAHTERA</td>
                                    <td class="whitespace-nowrap px-6 py-2">John Doe</td>
                                    <td class="whitespace-nowrap px-6 py-2">192839201829327183</td>
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
                                                        <p class="text-text">NOMOR FORMULIR :</p>
                                                        <p class="text-purple">ASDF345</p> <!-- data -->
                                                        <p class="text-text">INSTANSI :</p>
                                                        <p class="text-purple">PT. SEJAHTERA</p> <!-- data -->
                                                        <p class="text-text">PENANGGUNG JAWAB :</p>
                                                        <p class="text-purple">JOHN DOE</p> <!-- data -->
                                                        <p class="text-text">NIP :</p>
                                                        <p class="text-purple">192839201829327183</p> <!-- data -->
                                                        <p class="text-text">KONTAK PERSONAL :</p>
                                                        <p class="text-purple">081212312335546</p> <!-- data -->
                                                        <p class="text-text">JENIS SERVER :</p>
                                                        <p class="text-purple">VPS</p> <!-- data -->
                                                        <p class="text-text">TANGGAL MASUK :</p>
                                                        <p class="text-purple">08/09/2023</p> <!-- data -->
                                                        <h1 class="text-highlight text-xl">Formulir Perangkat Colocation</h1>
                                                        <div class="grid gap-[3rem] grid-cols-3">
                                                            <div class="flex flex-col text-start font-medium gap-y-2.5">
                                                                <p class="text-text">NO :</p>
                                                                <p class="text-purple">1</p> <!-- data -->
                                                                <p class="text-text">KETERANGAN :</p>
                                                                <p class="text-purple">LOREM IPSUM</p> <!-- data -->
                                                                <p class="text-text">NAMA PERANGKAT :</p>
                                                                <p class="text-purple">SERVER</p> <!-- data -->
                                                                <p class="text-text">NOMOR SERI :</p>
                                                                <p class="text-purple">23453245</p> <!-- data -->
                                                                <p class="text-text">MERK PERANGKAT :</p>
                                                                <p class="text-purple">ASUS</p><!-- data -->
                                                            </div>
                                                            <div class="flex flex-col text-start font-medium gap-y-2.5">
                                                                <p class="text-text">NO :</p>
                                                                <p class="text-purple">2</p> <!-- data -->
                                                                <p class="text-text">KETERANGAN :</p>
                                                                <p class="text-purple">LOREM IPSUM</p> <!-- data -->
                                                                <p class="text-text">NAMA PERANGKAT :</p>
                                                                <p class="text-purple">SERVER</p> <!-- data -->
                                                                <p class="text-text">NOMOR SERI :</p>
                                                                <p class="text-purple">23453245</p> <!-- data -->
                                                                <p class="text-text">MERK PERANGKAT :</p>
                                                                <p class="text-purple">ASUS</p> <!-- data -->
                                                            </div>
                                                            <div class="flex flex-col text-start font-medium gap-y-2.5">
                                                                <p class="text-text">NO :</p>
                                                                <p class="text-purple">3</p> <!-- data -->
                                                                <p class="text-text">KETERANGAN :</p>
                                                                <p class="text-purple">LOREM IPSUM</p> <!-- data -->
                                                                <p class="text-text">NAMA PERANGKAT :</p>
                                                                <p class="text-purple">SERVER</p> <!-- data -->
                                                                <p class="text-text">NOMOR SERI :</p>
                                                                <p class="text-purple">23453245</p> <!-- data -->
                                                                <p class="text-text">MERK PERANGKAT :</p>
                                                                <p class="text-purple">ASUS</p> <!-- data -->
                                                            </div>
                                                        </div>
                                                        <h1 class="text-highlight text-xl">Formulir Hak Akses Server</h1>
                                                        <p class="text-text">NO :</p>
                                                        <p class="text-purple">2</p> <!-- data -->
                                                        <p class="text-text">NAMA PERSONIL YANG MEMILIKI HAK AKSES SERVER :</p>
                                                        <p class="text-purple">JOHN DOE</p> <!-- data -->
                                                        <p class="text-text">NOMOR HANDPHONE :</p>
                                                        <p class="text-purple">0812763512313</p> <!-- data -->
                                                        <p class="text-text">ALAMAT IP :</p>
                                                        <p class="text-purple">192.168.0.1</p> <!-- data -->
                                                        <p class="text-text">POSISI SERVER :</p>
                                                        <p class="text-purple">ASIA</p> <!-- data -->
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
                                                    <div class="flex-col text-start font-medium">
                                                        <form class="text-text" action="">
                                                            <label for="">NOMOR FORMULIR :</label><br>
                                                            <input placeholder="ASDF345" type="text"><br>
                                                            <label for="">INSTANSI :</label><br>
                                                            <input placeholder="PT. SEJAHTERA" type="text"><br>
                                                            <label for="">PENANGGUNG JAWAB :</label><br>
                                                            <input placeholder="JOHN DOE" type="text"><br>
                                                            <label for="">NIP :</label><br>
                                                            <input placeholder="192839201829327183" type="text"><br>
                                                            <label for="">KONTAK PERSONAL:</label><br>
                                                            <input placeholder="081212312335546" type="text"><br>
                                                            <label for="">JENIS SERVER :</label><br>
                                                            <input placeholder="VPS" type="text"><br>
                                                            <label for="">TANGGAL MASUK :</label><br>
                                                            <input placeholder="30/9/2023" type="text"><br>
                                                            <label for="">NOMOR TELEPON :</label><br>
                                                            <input placeholder="088899444" type="text"><br>
                                                            <label for="">KEPERLUAN :</label><br>
                                                            <input placeholder="Kunjungan Bisnis" type="text">
                                                            <h1 class="text-highlight text-xl">Formulir Perangkat Colocation</h1><br>
                                                            <label for="">NO :</label><br>
                                                            <input placeholder="1" type="text"><br>
                                                            <label for="">KETERANGAN :</label><br>
                                                            <input placeholder="LOREM IPSUM" type="text"><br>
                                                            <label for="">NAMA PERANGKAT :</label><br>
                                                            <input placeholder="SERVER" type="text"><br>
                                                            <label for="">NOMOR SERI :</label><br>
                                                            <input placeholder="23453245" type="text"><br>
                                                            <label for="">MERK PERANGKAT :</label><br>
                                                            <input placeholder="ASUS" type="text"><br>
                                                            <h1 class="text-highlight text-xl">Formulir Hak Akses Server</h1><br>
                                                            <label for="">NO :</label><br>
                                                            <input placeholder="1" type="text"><br>
                                                            <label for="">KETERANGAN :</label><br>
                                                            <input placeholder="LOREM IPSUM" type="text"><br>
                                                            <label for="">NAMA PERANGKAT :</label><br>
                                                            <input placeholder="SERVER" type="text"><br>
                                                            <label for="">NOMOR SERI :</label><br>
                                                            <input placeholder="23453245" type="text"><br>
                                                            <label for="">MERK PERANGKAT :</label><br>
                                                            <input placeholder="ASUS" type="text"><br>
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