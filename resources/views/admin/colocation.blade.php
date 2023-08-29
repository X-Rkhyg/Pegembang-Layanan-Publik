@extends('layouts.dashboard')

@section('sidebar')
<div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-center text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-2">NO</th>
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
                                <td class="whitespace-nowrap px-6 py-2">PT SEJAHTERA</td>
                                <td class="whitespace-nowrap px-6 py-2">John Doe</td>
                                <td class="whitespace-nowrap px-6 py-2">190293847192083417</td>
                                <td class="whitespace-nowrap px-6 py-2">Belum Disetujui</td>
                                <td class="whitespace-nowrap px-6 py-2">
                                    <div class="flex justify-center">
                                        <button class="btn"><img src="{{ asset(assets/detail-icon.svg} }" alt=""></button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection