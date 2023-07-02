@extends('layouts.main')

@section('container')
x-data="{ page: 'debit_air', 'loaded': true, 'darkMode': true, 'stickyMenu': false, 'sidebarToggle': false, 'scrollTop': false }"
  x-init="
          darkMode = JSON.parse(localStorage.getItem('darkMode'));
          $watch('darkMode', value => localStorage.setItem('darkMode', JSON.stringify(value)))"
  :class="{'dark text-bodydark bg-boxdark-2': darkMode === true}">
  
  <div class="flex h-screen overflow-hidden">
  @include('partials.sidebar')
    <div class="relative flex flex-1 flex-col overflow-y-auto overflow-x-hidden">
    @include('partials.header')


      <!-- ===== Main Content Start ===== -->
      <main>
        
        <div class="mx-auto max-w-screen-2xl p-4 md:p-8 2xl:p-10">

          <div class="pb-6">
              <div
                class="rounded-sm border border-stroke bg-secondary py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
                <div class="mt-4 flex items-end justify-between">
                  <span class="flex items-center gap-5 text-sm font-bold text-meta-3">
                    <div class="flex h-20 w-20 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                      <svg class="w-40 h-40" fill="white" xmlns="http://www.w3.org/2000/svg" id="water-drop" x="0" y="0" version="1.1" viewBox="0 0 52 52" xml:space="preserve"><path d="M36.048 45.57A21.763 21.763 0 0 1 26 48c-7.864 0-15.183-4.249-19.099-11.087a1 1 0 0 0-1.736.994C9.437 45.367 17.42 50 26 50a23.73 23.73 0 0 0 10.962-2.652 1 1 0 0 0-.914-1.778zM26 4c.13 0 .26.004.39.009l.209.006a.986.986 0 0 0 1.025-.973 1 1 0 0 0-.975-1.026l-.193-.006C26.305 2.005 26.152 2 26 2 12.767 2 2 12.766 2 26c0 .858.05 1.744.146 2.63a1 1 0 0 0 1.989-.217A22.129 22.129 0 0 1 4 26C4 13.87 13.87 4 26 4zM35.834 4.108a1 1 0 1 0-.82 1.824C42.902 9.483 48 17.36 48 26a22.002 22.002 0 0 1-5.247 14.251 1.001 1.001 0 0 0 1.523 1.297A24.01 24.01 0 0 0 50 26c0-9.427-5.56-18.02-14.166-21.892z"></path><path fill="#3c93c9" d="M26.768 10.844c-.38-.45-1.15-.45-1.53 0-.41.48-9.95 11.86-9.95 17.84 0 6.23 4.81 11.29 10.71 11.29 5.91 0 10.72-5.06 10.72-11.29 0-5.98-9.55-17.36-9.95-17.84zm-.65 24.03c-.15.4-.53.66-.94.66a.83.83 0 0 1-.34-.07c-4.47-1.63-5.4-5.31-5.26-7.02a.997.997 0 1 1 1.99.15c-.01.16-.16 3.49 3.96 5 .52.19.78.76.59 1.28z"></path>                  </svg>
                    </div>
                    <div>
                      <h4 class="text-title-md text-3xl font-bold text-black dark:text-white">
                        Data Debit Air di Kota Yogyakarta
                      </h4>
                      <span class="text-md font-semibold text-graydark">Keterangan</span>
                      <ul class="ml-5 text-gray-700 font-medium list-disc text-graydark">
                        <li>Data berikut menunjukkan banyak pH di berbagai daerah di Kota Yogyakarta</li>
                      </ul>
                    </div>
          
                  </span>
                </div>
              </div>
          </div>

          <div class="mb-6 flex flex-col gap-3 sm:flex-row sm:items-center sm:justify-between">

            <nav>
              <ol class="flex items-center gap-2">
                <li><a class="font-medium" href="index.html">Water Meters /</a></li>
                <li class="text-primary">Debit Air</li>
              </ol>
            </nav>
          </div>
          
          <div class="grid grid-cols-1 gap-3 md:grid-cols-2 md:gap-6 xl:grid-cols-3 2xl:gap-7.5">
            <!-- Card Item Start -->
            <a href="index.html">
            <div
            class="rounded-sm border hover:bg-secondary border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
        
              <div class="mt-4 flex items-end justify-between">
                <div>
                  <span class="text-sm font-medium">Water Meters</span>
                  <h4 class="text-title-md font-bold text-black dark:text-white">
                    pH Air
                  </h4>
                </div>
        
                <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                  <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                    <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.5 3.75a6 6 0 00-5.98 6.496A5.25 5.25 0 006.75 20.25H18a4.5 4.5 0 002.206-8.423 3.75 3.75 0 00-4.133-4.303A6.001 6.001 0 0010.5 3.75zm2.03 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v4.94a.75.75 0 001.5 0v-4.94l1.72 1.72a.75.75 0 101.06-1.06l-3-3z" clip-rule="evenodd" /></svg>
                  </div>
                </span>
              </div>
            </div>
          </a>
            <!-- Card Item End -->
        
            <!-- Card Item Start -->
            <a href="debit_air.html">
              <div
              class="rounded-sm border hover:bg-secondary border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
          
                <div class="mt-4 flex items-end justify-between">
                  <div>
                    <span class="text-sm font-medium">Water Meters</span>
                    <h4 class="text-title-md font-bold text-black dark:text-white">
                      Debit Air
                    </h4>
                  </div>
          
                  <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                    <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                      <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"></svg>                    
                    </div>
                  </span>
                </div>
              </div>
            </a>
            <!-- Card Item End -->
        
            <!-- Card Item Start -->
            <a href="temperatur.html">
              <div
                class="rounded-sm border hover:bg-secondary border-stroke bg-white py-6 px-7.5 shadow-default dark:border-strokedark dark:bg-boxdark">
          
                <div class="mt-4 flex items-end justify-between">
                  <div>
                    <span class="text-sm font-medium">Water Meters</span>
                    <h4 class="text-title-md font-bold text-black dark:text-white">
                      Temperatur
                    </h4>
                  </div>
          
                  <span class="flex items-center gap-1 text-sm font-medium text-meta-3">
                    <div class="flex h-11.5 w-11.5 items-center justify-center rounded-full bg-meta-2 dark:bg-meta-4">
                      <svg class="w-12 h-12 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 2.25a.75.75 0 01.75.75v2.25a.75.75 0 01-1.5 0V3a.75.75 0 01.75-.75zM7.5 12a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM18.894 6.166a.75.75 0 00-1.06-1.06l-1.591 1.59a.75.75 0 101.06 1.061l1.591-1.59zM21.75 12a.75.75 0 01-.75.75h-2.25a.75.75 0 010-1.5H21a.75.75 0 01.75.75zM17.834 18.894a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 10-1.061 1.06l1.59 1.591zM12 18a.75.75 0 01.75.75V21a.75.75 0 01-1.5 0v-2.25A.75.75 0 0112 18zM7.758 17.303a.75.75 0 00-1.061-1.06l-1.591 1.59a.75.75 0 001.06 1.061l1.591-1.59zM6 12a.75.75 0 01-.75.75H3a.75.75 0 010-1.5h2.25A.75.75 0 016 12zM6.697 7.757a.75.75 0 001.06-1.06l-1.59-1.591a.75.75 0 00-1.061 1.06l1.59 1.591z" /></svg>
                    </div>
                  </span>
                </div>
              </div>
            </a>
            <!-- Card Item End -->
        
          </div>
        
          <div class="mt-4 md:mt-6 md:gap-6 2xl:mt-7.5 2xl:gap-7.5">
        
            <!-- ====== Chart Card Start -->
            <div
              class="col-span-12 h-screen rounded-sm border border-stroke bg-gray py-6 shadow-default dark:border-strokedark dark:bg-boxdark xl:col-span-4">
              <h4 class="mb-6 px-7.5 text-xl font-bold text-black dark:text-white">
                Charts
              </h4>
        
            </div>
            <!-- ====== Chat Card End -->
          </div>
        </div>
      </main>
      <!-- ===== Main Content End ===== -->
    </div>
  </div>
</div>    
@endsection