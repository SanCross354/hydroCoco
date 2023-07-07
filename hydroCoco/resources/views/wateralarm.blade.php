@extends('layouts.main')

@section('container')
@include('partials.sidebar')
<div
    class="items-start col-span-9 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-zinc-600 to-zinc-800 h-screen">
    @include('partials.header')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-6">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Lokasi
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Waktu
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Problem
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Detail
                    </th>
                </tr>
            </thead>
            <tbody>

                @php
                $count = 1; // Initialize the value of $key
                @endphp

                @foreach($collection as $item)

                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $count }} <!-- Incremental number starting from 1 -->
                        </th>
                        <td class="px-6 py-4">
                            {{ $item['lokasi'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['waktu'] }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $item['result'] }}
                        </td>
                        <td class="px-6 py-4">
                            <!-- Display specific problem based on the result -->
                            @if($item['result'] === 'pH dan Tekanan')
                            Masalah yang ditemui yaitu pH dengan nilai {{ $item['pH'] }} dan Tekanan sebesar
                            {{ $item['tekanan'] }} psi
                            @elseif($item['result'] === 'pH')
                            Masalah yang ditemui yaitu pH dengan nilai {{ $item['pH'] }}
                            @elseif($item['result'] === 'tekanan')
                            Masalah yang ditemui yaitu Tekanan sebesar {{ $item['tekanan'] }} psi
                            @else
                            {{-- No problem --}}
                            @endif
                        </td>
                    </tr>
                    @php
                    $count++; // Increment the value of $key
                    @endphp
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
