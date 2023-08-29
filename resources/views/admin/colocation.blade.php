@extends('layouts.dashboard')

@section('sidebar')
    <div class="bg-white w-[1584px] mx-[1rem] px-9">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full text-center text-sm font-light">
                            <thead class="border-b font-medium dark:border-neutral-500">
                                <tr>
                                    <th scope="col" class="px-6 py-2">#</th>
                                    <th scope="col" class="px-6 py-2">First</th>
                                    <th scope="col" class="px-6 py-2">Last</th>
                                    <th scope="col" class="px-6 py-2">Handle</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">1</td>
                                    <td class="whitespace-nowrap px-6 py-2">Mark</td>
                                    <td class="whitespace-nowrap px-6 py-2">Otto</td>
                                    <td class="whitespace-nowrap px-6 py-2">@mdo</td>
                                </tr>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">2</td>
                                    <td class="whitespace-nowrap px-6 py-2 ">Jacob</td>
                                    <td class="whitespace-nowrap px-6 py-2">Thornton</td>
                                    <td class="whitespace-nowrap px-6 py-2">@fat</td>
                                </tr>
                                <tr class="border-b dark:border-neutral-500">
                                    <td class="whitespace-nowrap px-6 py-2 font-medium">3</td>
                                    <td colspan="2" class="whitespace-nowrap px-6 py-2">
                                        Larry the Bird
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-2">@twitter</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
