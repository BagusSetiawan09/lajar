<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>LAJAR</title>
</head>
<body class="h-full">

  <div>
    <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
      <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
    </div>
  </div>

    <div class="min-h-full">
        <nav class="" x-data="{ isOpen: false }">
          <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
              <div class="flex items-center">
                <div class="flex-shrink-0">
                  <h2 class="text-gray-50 text-xl font-bold bg-rose-700 rounded-md px-3 py-1">L A J A R</h2>
                </div>
                <div class="hidden md:block">
                  <div class="ml-10 flex items-center space-x-4">
                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                    <a href="/" class="text-rose-700 hover:text-rose-500 rounded-md px-3 py-2 text-md font-medium mt-2" aria-current="page">Home</a>
                    <a href="/about" class="text-rose-700 hover:text-rose-500 rounded-md px-3 py-2 text-md font-medium mt-2" aria-current="page">Tentang Lajar</a>
                    <a href="/contact" class="text-rose-700 hover:text-rose-500 rounded-md px-3 py-2 text-md font-medium mt-2" aria-current="page">Contact</a>
                  </div>
                </div>
              </div>
              <div class="hidden md:block">
                <div class="ml-4 flex items-center md:ml-6">
                  <button type="button" class="relative rounded-full bg-rose-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg class="h-6 w-6 stroke-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                    </svg>
                  </button>

                  <!-- Profile dropdown -->
                  <div class="relative ml-3">
                    <div>
                      <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-rose-00 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-rose-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </button>
                    </div>
                    <div
                    x-show="isOpen"
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                      <!-- Active: "bg-gray-100", Not Active: "" -->
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Settings</a>
                      <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-2">Sign out</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="-mr-2 flex md:hidden">
                <!-- Mobile menu button -->
                <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-rose-800 p-2 text-gray-400 hover:bg-rose-900 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-rose-800" aria-controls="mobile-menu" aria-expanded="false">
                  <span class="absolute -inset-0.5"></span>
                  <span class="sr-only">Open main menu</span>
                  <!-- Menu open: "hidden", Menu closed: "block" -->
                  <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                  <!-- Menu open: "block", Menu closed: "hidden" -->
                  <svg :class="{'block': isOpen, 'hidden': !isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
          </div>

          <!-- Mobile menu, show/hide based on menu state. -->
          <div x-show="isOpen" class="md:hidden" id="mobile-menu">
            <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
              <a href="#" class="bg-rose-900 text-white block rounded-md px-3 py-2 text-base font-medium" aria-current="page">Dashboard</a>
              <a href="#" class="text-gray-300 hover:bg-rose-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Team</a>
              <a href="#" class="text-gray-300 hover:bg-rose-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Projects</a>
              <a href="#" class="text-gray-300 hover:bg-rose-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Calendar</a>
              <a href="#" class="text-gray-300 hover:bg-rose-700 hover:text-white block rounded-md px-3 py-2 text-base font-medium">Reports</a>
            </div>
            <div class="border-t border-gray-700 pb-3 pt-4">
              <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                  <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div class="ml-3">
                  <div class="text-base font-medium leading-none text-white">Bagus Setiawan</div>
                  <div class="text-sm mt-1 font-light leading-none text-gray-50">bagussetiawan@example.com</div>
                </div>
                <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-rose-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-rose-900">
                  <span class="absolute -inset-1.5"></span>
                  <span class="sr-only">View notifications</span>
                  <svg class="h-6 w-6 stroke-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                  </svg>
                </button>
              </div>
              <div class="mt-3 space-y-1 px-2">
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-50 hover:bg-rose-900 hover:text-white">Your Profile</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-50 hover:bg-rose-900 hover:text-white">Settings</a>
                <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-50 hover:bg-rose-900 hover:text-white">Sign out</a>
              </div>
            </div>
          </div>
        </nav>

        <div class="relative isolate px-6 pt-1 lg:px-8">
            {{-- <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
              <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div> --}}
            <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-30">
              <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm leading-6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
                  Ingin tahu tentang lajar lihat tentang kami. <a href="/about" class="font-semibold text-rose-700"><span class="absolute inset-0" aria-hidden="true"></span>Read more <span aria-hidden="true">&rarr;</span></a>
                </div>
              </div>
              <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">Layanan Pengaduan Jalan Rusak</h1>
                <p class="mt-6 mb-6 text-lg leading-8 text-gray-600">Sampaikan laporan Anda langsung kepada instansi pemerintah berwenang dibidang perbaikan infrastruktur umum pada kecamatan Helvetia</p>
              </div>


                {{-- FORM --}}

                <div class="bg-white px-10 pt-2 pb-5 rounded-lg">
                <form>
                    <div class="space-y-12">
                        <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">

                            <div class="col-span-full">
                                <h1 class="bg-rose-700 text-center text-3xl text-white font-bold rounded-md px-3 py-3">Sampaikan Laporan Anda</h1>
                                <div class="text-center mt-5">
                                    <span class="text-rose-500 font-bold">*</span><span class="text-sm leading-6 text-gray-600">Perhatikan Cara Menyampaikan Pengaduan Yang Baik dan Benar</span>
                                </div>


                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first-name" class="block text-sm font-medium leading-6 text-rose-900">First name</label>
                                <div class="mt-2">
                                <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last-name" class="block text-sm font-medium leading-6 text-rose-900">Last name</label>
                                <div class="mt-2">
                                <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-full">
                                <label for="email" class="block text-sm font-medium leading-6 text-rose-900">Email address</label>
                                <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="country" class="block text-sm font-medium leading-6 text-rose-900">Street</label>
                                <div class="mt-2">
                                <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:max-w-xs sm:text-sm sm:leading-6">
                                    <option>Helvetia Pasar 1</option>
                                    <option>Helvetia Pasar 2</option>
                                    <option>Helvetia Pasar 3</option>
                                    <option>Helvetia Pasar 4</option>
                                    <option>Helvetia Pasar 5</option>
                                    <option>Helvetia Pasar 6</option>
                                    <option>Helvetia Pasar 7</option>
                                    <option>Helvetia Pasar 8</option>
                                    <option>Helvetia Pasar 9</option>
                                    <option>Helvetia Pasar 10</option>
                                </select>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="street-address" class="block text-sm font-medium leading-6 text-rose-900">Street address</label>
                                <div class="mt-2">
                                <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2 sm:col-start-1">
                                <label for="city" class="block text-sm font-medium leading-6 text-rose-900">City</label>
                                <div class="mt-2">
                                <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="region" class="block text-sm font-medium leading-6 text-rose-900">State / Province</label>
                                <div class="mt-2">
                                <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-2">
                                <label for="postal-code" class="block text-sm font-medium leading-6 text-rose-900">ZIP / Postal code</label>
                                <div class="mt-2">
                                <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            </div>
                        </div>

                        <div class="sm:col-span-3">
                          <label for="country" class="block text-sm font-medium leading-6 text-rose-900">Fill Report</label>
                          <div class="mt-2">
                          <select id="country" name="country" autocomplete="country-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:max-w-xs sm:text-sm sm:leading-6">
                              <option>Jalan Berlubang</option>
                              <option>Jalan Bergelombang</option>
                              <option>Pembvuatan ZoSS</option>
                          </select>
                          </div>
                      </div>

                        <div class="col-span-full">
                            <label for="about" class="block text-sm font-medium leading-6 text-rose-900">Message</label>
                            <div class="mt-2">
                            <textarea id="about" name="about" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-600 sm:text-sm sm:leading-6"></textarea>
                            </div>
                            <p class="mt-3 text-sm leading-6 text-gray-600">Write your report.</p>
                        </div>


                        <div class="col-span-full">
                            <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Upload Photo</label>
                            <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                            <div class="text-center">
                                <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                                </svg>
                                <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                <label for="file-upload" class="relative cursor-pointer rounded-md bg-white font-semibold text-rose-700 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-rose-500">
                                    <span>Upload a file</span>
                                    <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                </label>
                                <p class="pl-1">or drag and drop</p>
                                </div>
                                <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="mt-6 flex items-center justify-end gap-x-6">
                    <button type="submit" class="rounded-md bg-rose-700 px-8 py-2 text-sm font-semibold text-white shadow-sm hover:bg-rose-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-700">LAPOR</button>
                    </div>
                </form>
                </div>

                {{-- //FORM --}}

              </div>
            </div>
            {{-- <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
              {{-- <div class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
            </div> --}}
          </div>
        </div>

        <div class="pb-40">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <h1 class="text-center mb-20 text-3xl font-bold text-rose-700">INSTANSI TERHUBUNG</h1>
              <dl class="grid grid-cols-1 gap-x-8 gap-y-16 text-center lg:grid-cols-5">
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                  <dt class="text-base leading-7 text-gray-600">Kementrian</dt>
                  <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">34</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                  <dt class="text-base leading-7 text-gray-600">Lembaga</dt>
                  <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">100</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                  <dt class="text-base leading-7 text-gray-600">Pemkab</dt>
                  <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">396</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                  <dt class="text-base leading-7 text-gray-600">Pemkob</dt>
                  <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">96</dd>
                </div>
                <div class="mx-auto flex max-w-xs flex-col gap-y-4">
                  <dt class="text-base leading-7 text-gray-600">Pemprov</dt>
                  <dd class="order-first text-3xl font-bold tracking-tight text-gray-900 sm:text-5xl">34</dd>
                </div>
              </dl>

              <div class="mt-6 flex items-center justify-center gap-x-6 py-5">
                <button type="button" class="rounded-md bg-rose-700 px-6 py-3 text-lg font-semibold text-white shadow-sm hover:bg-rose-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-rose-700">Lihat Selengkapnya</button>
                </div>

            </div>
          </div>

          <div class="bg-white py-24 sm:py-20">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
              <div class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-10 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-5">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/transistor-logo-gray-900.svg" alt="Transistor" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/reform-logo-gray-900.svg" alt="Reform" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/tuple-logo-gray-900.svg" alt="Tuple" width="158" height="48">
                <img class="col-span-2 max-h-12 w-full object-contain sm:col-start-2 lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/savvycal-logo-gray-900.svg" alt="SavvyCal" width="158" height="48">
                <img class="col-span-2 col-start-2 max-h-12 w-full object-contain sm:col-start-auto lg:col-span-1" src="https://tailwindui.com/img/logos/158x48/statamic-logo-gray-900.svg" alt="Statamic" width="158" height="48">
              </div>
            </div>
          </div>

          <footer><br>
            <div class="flex items-center justify-center gap-x-6 pt-5 pb-2 font-bold text-xl text-rose-700">
              <div>Home</div>
              <div>About</div>
              <div>Login</div>
            </div>
            <span class="flex items-center justify-center font-light text-lg">&copy;Copyright 2024 LAJAR All rights reserved.</span>
          </footer>

        <main>
          <div class="mx-auto max-w-7xl py-5 sm:px-6 lg:px-8">
            <!-- Your content -->
          </div>
        </main>
      </div>


</body>
</html>
