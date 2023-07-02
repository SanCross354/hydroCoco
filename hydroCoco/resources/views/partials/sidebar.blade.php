<!-- sidebar -->
<div class="col-span-3">
  <div class="bg-zinc-800 shadow lg:h-screen p-4 gap-y-8">
    <div class="divide-none">
      <!-- logo start  -->
      <div class="space-y-1 divide-none flex p-2 w-60 ml-12">
        <img src="img/logo2.png" alt="" class="w-full items-center" />
      </div>
      <!-- logo end  -->

      <!-- profile start -->
      <div class="space-y-1 divide-none flex p-2 mb-3 mt-2 bg-lime-400 rounded-xl">
        <div class="flex-shrink-0">
          <img src="img/manager.png" class="rounded-full w-14 h-14 p-1 border border-black object-cover" />
        </div>
        <div class="pl-3">
          <p class="text-slate-700">Hello,</p>
          <h4 class="text-black capitalize font-bold">{{ $nama }}</h4>
        </div>
      </div>
      <!-- profile end -->

      {{-- Tombol Dashboard --}}
      <div class="space-y-1 pl-10 py-5 hover:bg-lime-400 rounded-lg text-white hover:text-black font-medium hover:font-extrabold transition block">
        <a href="/dashboard" class="relative medium capitalize pl-3">
          Dashboard
          <span class="absolute -left-8 text-base">
            <img src="img/pesan.png" alt="" class="w-8" />
          </span>
        </a>
      </div>
    </div>

    {{-- Tombol Water Meter --}}
    <div class="space-y-1 pl-10 py-5 hover:bg-lime-400 rounded-lg text-white hover:text-black font-medium hover:font-extrabold transition block">
      <a href="/watermeter" class="relative medium capitalize pl-3">
        Water Meter
        <span class="absolute -left-8  text-base">
          <img src="img/water.png" alt="" class="w-8" />
        </span>
      </a>
    </div>

    {{-- Tombol Valve Control --}}
    <div class="space-y-1 pl-10 py-5 hover:bg-lime-400 rounded-lg text-white hover:text-black font-medium hover:font-extrabold transition block">
      <a href="/valve" class="relative medium capitalize pl-3">
        Valve Control
        <span class="absolute -left-8  text-base">
          <img src="img/valve.png" alt="" class="w-8" />
        </span>
      </a>
    </div>

    <!-- Tombol Logout -->
    <div class="space-y-1 pl-10 py-5 hover:bg-lime-400 rounded-lg text-white hover:text-black font-medium hover:font-extrabold transition block">
      <a href="" class="relative medium capitalize pl-3">
        Logout
        <span class="absolute -left-8 top-0 text-base">
          <img src="img/logout.png" alt="" class="w-8" />
        </span>
      </a>
    </div>

  </div>
</div>