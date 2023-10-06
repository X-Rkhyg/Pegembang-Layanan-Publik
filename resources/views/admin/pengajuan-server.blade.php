@extends('layouts.dashboard')

@section('sidebar')



<div class="px-[1rem] py-11">

    <div>
        <div class="flex gap-x-[12.8px]">
            <h1 class="font-medium text-[32px] text-[#A3AED0]">Server</h1>
            <img src="{{asset ('assets/arrow.svg')}}" alt="">
            <h1 class="font-medium text-[32px] text-highlight">Pengajuan Server</h1>
        </div>
    </div>

    <div class="bg-white rounded-md h-fit w-[1584px] my-11 py-9 px-9 md:">



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
                                            <label for="">NOMOR :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">SIFAT :</label><br>
                                            <input placeholder="" type="text"><br>
                                            <label for="">LAMPIRAN :</label><br>
                                            <input placeholder="" type="text"><br><br>
                                            <label for="">PERIHAL :</label><br>
                                            <input placeholder="" type="text"><br><br>
                                            <label for="">NAMA INSTANSI :</label><br>
                                            <input placeholder="" type="text"><br><br>
                                            <label for="">TUJUAN :</label><br>
                                            <input placeholder="" type="text"><br><br>
                                            <label for="">NAMA :</label><br>
                                            <input placeholder="" type="text"><br><br>
                                            <label for="">NOMOR TELEPON :</label><br>
                                            <input placeholder="" type="text"><br><br>
                                            <label for="">KEPERLUAN :</label><br>
                                            <input placeholder="" type="text"><br><br>

                                            <label for="">STATUS :</label><br>
                                            <select name="" id="">
                                                <option value="">Disetujui</option>
                                                <option value="">Belum Disetujui</option>
                                            </select>

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
                                    <th scope="col" class="px-6 py-2">INSTANSI</th>
                                    <th scope="col" class="px-6 py-2">KEPERLUAN</th>
                                    <th scope="col" class="px-6 py-2">TUJUAN</th>
                                    <th scope="col" class="px-6 py-2">STATUS</th>
                                    <th scope="col" class="px-6 py-2">AKSI</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-2">1</td>
                                    <td class="whitespace-nowrap px-6 py-2">13444</td>
                                    <td class="whitespace-nowrap px-6 py-2">FIF GROUP</td>
                                    <td class="whitespace-nowrap px-6 py-2">Kunjungan Bisnis</td>
                                    <td class="whitespace-nowrap px-6 py-2">Silaturahmi</td>
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
                                                        <p class="text-text">NOMOR :</p>
                                                        <p class="text-purple">12333</p> <!-- data -->
                                                        <p class="text-text">SIFAT :</p>
                                                        <p class="text-purple">STATIC</p> <!-- data -->
                                                        <p class="text-text">LAMPIRAN :</p>
                                                        <p class="text-purple">3</p> <!-- data -->
                                                        <p class="text-text">PERIHAL :</p>
                                                        <p class="text-purple">Pengembangan Server</p> <!-- data -->
                                                        <p class="text-text">NAMA INSTANSI :</p>
                                                        <p class="text-purple">FIF GROUP</p> <!-- data -->
                                                        <p class="text-text">TUJUAN :</p>
                                                        <p class="text-purple">Silaturahmi</p> <!-- data -->
                                                        <p class="text-text">NAMA :</p>
                                                        <p class="text-purple">John DOe</p> <!-- data -->
                                                        <p class="text-text">NOMOR TELEPON :</p>
                                                        <p class="text-purple">08899223344</p> <!-- data -->
                                                        <p class="text-text">KEPERLUAN :</p>
                                                        <p class="text-purple">Kunjungan Bisnis</p>

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
                                                            <label for="">NOMOR :</label><br>
                                                            <input placeholder="ASDF345" type="text"><br>
                                                            <label for="">SIFAT :</label><br>
                                                            <input placeholder="STATIC" type="text"><br>
                                                            <label for="">LAMPIRAN :</label><br>
                                                            <input placeholder="3" type="text"><br>
                                                            <label for="">PERIHAL :</label><br>
                                                            <input placeholder="Pengembangan Server" type="text"><br>
                                                            <label for="">NAMA INSTANSI :</label><br>
                                                            <input placeholder="FIF GROUP" type="text"><br>
                                                            <label for="">TUJUAN :</label><br>
                                                            <input placeholder="Silaturahmi" type="text"><br>
                                                            <label for="">NAMA :</label><br>
                                                            <input placeholder="JOHN DOE" type="text"><br>
                                                            <label for="">NOMOR TELEPON :</label><br>
                                                            <input placeholder="0888994412344" type="text"><br>
                                                            <label for="">KEPERLUAN :</label><br>
                                                            <select class="detail" name="" id="">
                                                                <option value="">Disetujui</option>
                                                                <option selected value="">Belum Disetujui</option>
                                                            </select><br>
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