<aside
  :class="sidebarToggle ? 'translate-x-0' : '-translate-x-full'"
  class="absolute left-0 top-0 z-9999 flex h-screen w-72.5 flex-col overflow-y-hidden bg-secondary duration-300 ease-linear dark:bg-boxdark lg:static lg:translate-x-0"
  @click.outside="sidebarToggle = false"
>
  <!-- SIDEBAR HEADER -->
  <div class="flex flex-col first-letter:items-center items-center space-y-2 px-6 py-3 ">
    <img
      class="w-20 h-20 rounded-full dark:opacity-70"
      src="https://tecdn.b-cdn.net/img/new/avatars/5.webp"
      alt="Logo"
    />
    <a href="index.html" class="pb-5 text-2xl font-bold text-white dark:text-light">HydroCoco</a>
    <a href="index.html" class="text-xl font-bold text-black-400 dark:text-light">Dashboard</a>
</div>
<!-- SIDEBAR HEADER -->

  <div
    class="no-scrollbar flex flex-col overflow-y-auto duration-300 ease-linear"
  >
    <!-- Sidebar Menu -->
    <nav
      class="mt-5 py-4 px-4 lg:mt-9 lg:px-6"
      x-data="{selected: $persist('Dashboard')}"
    >
      <!-- Menu Group -->
      <div>
        <h3 class="mb-4 ml-4 text-sm font-medium text-bodydark2">MENU</h3>

        <ul class="mb-6 flex flex-col gap-1.5">
          <!-- Menu Item -->
          <li>
            <a
            class="group font-semibold hover:text-white relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-black duration-300  hover:bg-graydark dark:hover:bg-meta-4"
            href="index.html"
              @click.prevent="selected = (selected === 'Water' ? '':'Water')"
              :class="{ 'bg-graydark dark:bg-meta-4 !text-white': (selected === 'Water') || (page === 'ph_air' || page === 'debit_air' || page === 'temperatur') }"
            >
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"> <path d="M18.75 12.75h1.5a.75.75 0 000-1.5h-1.5a.75.75 0 000 1.5zM12 6a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 0112 6zM12 18a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 0112 18zM3.75 6.75h1.5a.75.75 0 100-1.5h-1.5a.75.75 0 000 1.5zM5.25 18.75h-1.5a.75.75 0 010-1.5h1.5a.75.75 0 010 1.5zM3 12a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 013 12zM9 3.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5zM12.75 12a2.25 2.25 0 114.5 0 2.25 2.25 0 01-4.5 0zM9 15.75a2.25 2.25 0 100 4.5 2.25 2.25 0 000-4.5z" /></svg>
              Water Meters

              <svg
                class="absolute right-4 top-1/2 -translate-y-1/2 fill-current"
                :class="{ 'rotate-180': (selected === 'Water') }"
                width="20"
                height="20"
                viewBox="0 0 20 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.41107 6.9107C4.73651 6.58527 5.26414 6.58527 5.58958 6.9107L10.0003 11.3214L14.4111 6.91071C14.7365 6.58527 15.2641 6.58527 15.5896 6.91071C15.915 7.23614 15.915 7.76378 15.5896 8.08922L10.5896 13.0892C10.2641 13.4147 9.73651 13.4147 9.41107 13.0892L4.41107 8.08922C4.08563 7.76378 4.08563 7.23614 4.41107 6.9107Z"
                  fill=""
                />
              </svg>
            </a>

            <!-- Dropdown Menu Start -->
            <div
              class="overflow-hidden"
              :class="(selected === 'Water') ? 'block' :'hidden'"
            >
              <ul class="mt-4 mb-5.5 flex flex-col gap-2.5 pl-6">
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark duration-300 ease-in-out hover:text-white"
                    href="index.html"
                    :class="page === 'ph_air' && '!text-white'"
                    >pH Air</a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark duration-300 ease-in-out hover:text-white"
                    href="debit_air.html"
                    :class="page === 'debit_air' && '!text-white'"
                    >Debit Air</a
                  >
                </li>
                <li>
                  <a
                    class="group relative flex items-center gap-2.5 rounded-md px-4 font-medium text-graydark duration-300 ease-in-out hover:text-white"
                    href="temperatur.html"
                    :class="page === 'temperatur' && '!text-white'"
                    >Temperatur</a
                  >
                </li>
              </ul>
            </div>
            <!-- Dropdown Menu End -->
          </li>
          <!-- Menu Item -->
          <!-- Menu Item Calendar -->
              <li>
                <a
                class="group font-semibold hover:text-white relative flex items-center gap-2.5 rounded-sm py-2 px-4 font-medium text-black duration-300  hover:bg-graydark dark:hover:bg-meta-4"
                href="valve.html"
                  @click="selected = (selected === 'Valve' ? '':'Valve')"
                  :class="{ 'bg-graydark dark:bg-meta-4 !text-white': (selected === 'Valve') && (page === 'valve_control') }"
                >
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                  Valve controller
                </a>
              </li>
        <!-- Menu Item -->
        </ul>
      </div>
    </nav>
    <!-- Sidebar Menu -->
  </div>
</aside>