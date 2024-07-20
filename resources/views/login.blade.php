<!DOCTYPE html>
<html lang="en" class="h-full bg-white">
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
                      <button type="button" @click="isOpen = !isOpen" class="relative rounded-full bg-rose-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
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


            <div class="flex min-h-full flex-col justify-center px-6 py-40 lg:px-8">
                <div class="sm:mx-auto sm:w-full sm:max-w-sm">
                <img class="mx-auto h-10 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="Your Company">
                <h2 class="mt-10 text-center text-2xl font-bold leading-9 tracking-tight text-gray-900">Sign in to your account</h2>
                </div>

                <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                  <div class="bg-white shadow py-10 px-10 rounded-lg">
                <form class="space-y-6" action="#" method="POST">
                    <div>
                    <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                    <div class="mt-2">
                        <input id="email" name="email" type="email" autocomplete="email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-700 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                    <div>
                    <div class="flex items-center justify-between">
                        <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                        <div class="text-sm">
                        <a href="#" class="font-semibold text-rose-700 hover:text-rose-600">Forgot password?</a>
                        </div>
                    </div>
                    <div class="mt-2">
                        <input id="password" name="password" type="password" autocomplete="current-password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-rose-700 sm:text-sm sm:leading-6">
                    </div>
                    </div>

                    <div>
                    <button type="submit" class="flex w-full justify-center rounded-md bg-rose-700 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-rose-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
                    </div>

                    <div class="text-center">
                      <span class="text-gray-500 text-light">Or Continue with</span>
                    </div>

                    <div class="grid gap-4 grid-cols-2 grid-rows-1">
                      <button class="bg-rose-700 sm:py-3 rounded-lg text-white font-bold">Google</button>
                      <button class="bg-blue-500 sm:py-3 rounded-lg text-white font-bold">Facebook</button>
                    </div>

                </form>
                </div>
            </div>
            </div>


</body>
</html>
