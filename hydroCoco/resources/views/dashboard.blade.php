@extends('layouts.main')

@section('container')
@include('partials.sidebar')
<div class="items-start col-span-9 bg-[radial-gradient(ellipse_at_top,_var(--tw-gradient-stops))] from-zinc-600 to-zinc-800 h-screen">
    @include('partials.header')

    {{-- Chatbox 1 --}}
    <div class="float-left pt-5 pl-5">
        <div class="group relative mx-auto w-60 overflow-hidden rounded-[16px] bg-gray-300 p-[1px]">
          <div class="relative rounded-[15px] bg-white p-6">
            <div class="space-y-4">
              <img src="img/men1.jpg" alt="" class="w-16 rounded-full" />
              <p class="text-lg font-bold text-slate-800">Agus Susanto</p>
              <p class="font-md text-slate-500">Halo pak! Saya baru saja menutup katup pipa untuk lokasi Yogyakarta</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Chatbox 2 --}}
      <div class="float-left pt-5 pl-8">
        <div class="group relative mx-auto w-60 overflow-hidden rounded-[16px] bg-gray-300 p-[1px]">
          <div class="relative rounded-[15px] bg-white p-6">
            <div class="space-y-4">
              <img src="img/men2.jpg" alt="" class="w-16 rounded-full" />
              <p class="text-lg font-bold text-slate-800">Budi Santoso</p>
              <p class="font-md text-slate-500">Lapor pak! Ada kebocoran pipa di daerah Condong Catur. Apakah saya harus menutup katup pipanya?</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Chatbox 3 --}}
      <div class="float-left pt-5 pl-8">
        <div class="group relative mx-auto w-60 overflow-hidden rounded-[16px] bg-gray-300 p-[1px]">
          <div class="relative rounded-[15px] bg-white p-6">
            <div class="space-y-4">
              <img src="img/men3.jpg" alt="" class="w-16 rounded-full" />
              <p class="text-lg font-bold text-slate-800">Muhammad Ivan</p>
              <p class="font-md text-slate-500">Assalamu'alaikum Pak, saya baru saja selesai menginput kandungan air pipa wilayah kaliurang :D</p>
            </div>
          </div>
        </div>
      </div>
      {{-- Chatbox 4 --}}
      <div class="float-left pt-5 pl-8">
        <div class="group relative mx-auto w-60 overflow-hidden rounded-[16px] bg-gray-300 p-[1px]">
          <div class="relative rounded-[15px] bg-white p-6">
            <div class="space-y-4">
              <img src="img/men5.png" alt="" class="w-16 rounded-full" />
              <p class="text-lg font-bold text-slate-800">Bayu Doremi</p>
              <p class="font-md text-slate-500">Pak saya hari ini minta izin ndak masuk nggih, istri saya baru saja melahirkan🙏</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Chatbox 5 --}}
      <div class="float-left pt-8 pl-5">
        <div class="group relative mx-auto w-60 overflow-hidden rounded-[16px] bg-gray-300 p-[1px]">
          <div class="relative rounded-[15px] bg-white p-6">
            <div class="space-y-4">
              <img src="img/men4.jpg" alt="" class="w-16 rounded-full" />
              <p class="text-lg font-bold text-slate-800">Raka Gemblung</p>
              <p class="font-md text-slate-500">Assalamu'alaikum Pak, ini saya mau otw ngecek pipa daerah Bantul >_<</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Chatbox 6 --}}
      <div class="float-left pt-8 pl-5">
        <div class="group relative mx-auto w-60 overflow-hidden rounded-[16px] bg-gray-300 p-[1px]">
          <div class="relative rounded-[15px] bg-white p-6">
            <div class="space-y-4">
              <img src="img/men6.jpg" alt="" class="w-16 rounded-full" />
              <p class="text-lg font-bold text-slate-800">David Coleman</p>
              <p class="font-md text-slate-500">Hi Sir! I just arrived in Yogyakarta today, maybe tomorrow I will start work as usual.</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Chatbox 7 --}}
      <div class="float-left pt-8 pl-5">
        <div class="group relative mx-auto w-60 overflow-hidden rounded-[16px] bg-gray-300 p-[1px]">
          <div class="relative rounded-[15px] bg-white p-6">
            <div class="space-y-4">
              <img src="img/men7.jpg" alt="" class="w-16 rounded-full" />
              <p class="text-lg font-bold text-slate-800">Agus Tamimi</p>
              <p class="font-md text-slate-500">Pak izin istirahat nggih, laper aowkwkw</p>
            </div>
          </div>
        </div>
      </div>

      {{-- Chatbox 8 --}}
      <div class="float-left pt-8 pl-5">
        <div class="group relative mx-auto w-60 overflow-hidden rounded-[16px] bg-gray-300 p-[1px]">
          <div class="relative rounded-[15px] bg-white p-6">
            <div class="space-y-4">
              <img src="img/men8.jpg" alt="" class="w-16 rounded-full" />
              <p class="text-lg font-bold text-slate-800">Reinhart Sumini</p>
              <p class="font-md text-slate-500">Lapor bos! Kandungan air wilayah Godean aman terkendali! pH, debit, tekanan semua bagus seperti yang diharapkan!</p>
            </div>
          </div>
        </div>
      </div>
</div>

@endsection