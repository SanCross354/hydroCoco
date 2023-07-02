@extends('layouts.main')

@section('container')
@include('partials.sidebar')
<div class="items-start col-span-9 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-zinc-600 to-zinc-800 h-screen">
    @include('partials.header')
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg p-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">    
            <tr>
                <th scope="col" class="px-6 py-3">
                    No
                </th>
                <th scope="col" class="px-6 py-3">
                    lokasi
                </th>
                <th scope="col" class="px-6 py-3">
                    Operator
                </th>
                <th scope="col" class="px-6 py-3">
                    Controller
                </th>
            </tr>
        </thead>
        <tbody>
        @foreach($valves as $valve)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$valve->id}}
                </th>
                <td class="px-6 py-4">
                    {{$valve->lokasi}}
                </td>
                <td class="px-6 py-4">
                    {{$valve->user->name}}
                </td>
                <td class="px-6 py-4">
                    <label class="relative inline-flex items-center mr-5 cursor-pointer">
                        <input type="checkbox" value="" class="sr-only peer" checked>
                        <div class="w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:ring-4 peer-focus:ring-orange-300 dark:peer-focus:ring-orange-800 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-orange-500"></div>
                    </label>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
</div>

@endsection