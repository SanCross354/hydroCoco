@extends('layouts.main')

@section('container')
@include('partials.sidebar')
<div class="items-start col-span-9 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-zinc-600 to-zinc-800 h-screen">
    @include('partials.header')

    {{-- Kotak Biru Terang --}}
    <div class="w-11/12 h-40 ml-10 mt-5 pt-5 pl-5 bg-sky-50 rounded-lg flex">

        {{-- Foto --}}
        <div class="space-y-1">
            <img src="img/water2.png" alt="gambar air" class="w-28 rounded-full">
        </div>

        {{-- Keterangan --}}
        <div class="ml-8">
            <h1 class="font-bold text-black">pH Air</h1>
            <p class="font-semibold text-slate-700">Keterangan</p>
            <li class="font-normal">pH > 7 / pH < 7 Tidak sesuai standar.</li>
            <li class="font-normal">pH = 7 Sesuai standar.</li>
        </div>
    </div>

    {{-- Area Tombol Button --}}
    <div class="w-11/12 ml-10 pt-5 flex">

        {{-- Tombol pH Air --}}
        <div class="bg-lime-400 hover:bg-sky-100 w-350 rounded-lg flex h-20 justify-between">
            <button class="px-4 py-2 text-2xl font-bold">pH Air</button>

            {{-- Gambr pH --}}
            <div class=" w-20 flex py-2">
                <img src="img/pH.png" alt="gambar pH">
            </div>
        </div>

        {{-- Tombol Tekanan Air --}}
        <div class="bg-lime-400 hover:bg-sky-100 w-350 rounded-lg flex h-20 justify-between ml-6">
            <button class="px-4 py-2 text-2xl font-bold">Tekanan Air</button>

            {{-- Gambar Tekanan --}}
            <div class=" w-20 flex py-2">
                <img src="img/tekanan.png" alt="gambar tekanan">
            </div>
        </div>

        {{-- Tombol Debit Air --}}
        <div class="bg-lime-400 hover:bg-sky-100 w-350 rounded-lg flex h-20 justify-between ml-6">
            <button class="px-4 py-2 text-2xl font-bold">Debit Air</button>

            {{-- Gambar Debit --}}
            <div class=" w-20 flex py-2">
                <img src="img/keran.png" alt="gambar debit">
            </div>
        </div>
    </div>
    
<div class="relative overflow-x-auto shadow-md sm:rounded-lg p-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">    
            <tr>
                <th scope="col" class="px-6 py-3">
                    id
                </th>
                <th scope="col" class="px-6 py-3">
                    idPipa
                </th>
                <th scope="col" class="px-6 py-3">
                    pH
                </th>
                <th scope="col" class="px-6 py-3">
                    debit
                </th>
                <th scope="col" class="px-6 py-3">
                    tekanan
                </th>
                <th scope="col" class="px-6 py-3">
                    waktu
                </th>
                <th scope="col" class="px-6 py-3">
                    <span class="sr-only">Edit</span>
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($records as $record)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$record->id}}
                </th>
                <td class="px-6 py-4">
                    {{$record->idPipa}}
                </td>
                <td class="px-6 py-4">
                    {{$record->pH}}
                </td>
                <td class="px-6 py-4">
                    {{$record->debit}}
                </td>
                <td class="px-6 py-4">
                    {{$record->tekanan}}
                </td>
                <td class="px-6 py-4">
                    {{$record->waktu}}
                </td>
                <td class="px-6 py-4 text-right">
                    <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection