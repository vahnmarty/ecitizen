<div class="hidden lg:absolute lg:inset-0 lg:block" aria-hidden="true">
    <svg class="absolute top-0 transform translate-x-64 -translate-y-8 left-1/2" width="640"
        height="784" fill="none" viewBox="0 0 640 784">
        <defs>
            <pattern id="9ebea6f4-a1f5-4d96-8c4e-4c2abf658047" x="118" y="0" width="20"
                height="20" patternUnits="userSpaceOnUse">
                <rect x="0" y="0" width="4" height="4" class="text-gray-200"
                    fill="currentColor" />
            </pattern>
        </defs>
        <rect y="72" width="640" height="640" class="text-gray-50" fill="currentColor" />
        <rect x="118" width="404" height="784"
            fill="url(#9ebea6f4-a1f5-4d96-8c4e-4c2abf658047)" />
    </svg>
</div>

<div class="relative pt-6 pb-16 sm:pb-24 lg:pb-32">
    <div>
        <nav class="relative flex items-center justify-between px-4 mx-auto max-w-7xl sm:px-6"
            aria-label="Global">
            <div class="flex items-center flex-1">
                <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                        <span class="sr-only">Your Company</span>
                        <img class="w-auto h-8 sm:h-10"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </a>
                    <div class="flex items-center -mr-2 md:hidden">
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                            aria-expanded="false">
                            <span class="sr-only">Open main menu</span>
                            <!-- Heroicon name: outline/bars-3 -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="hidden md:ml-10 md:block md:space-x-10">
                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Product</a>

                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Features</a>

                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Marketplace</a>

                    <a href="#" class="font-medium text-gray-500 hover:text-gray-900">Company</a>
                </div>
            </div>
            <div class="hidden text-right md:block">
                <span class="inline-flex rounded-md shadow-md ring-1 ring-black ring-opacity-5">
                    <a href="#"
                        class="inline-flex items-center px-4 py-2 text-base font-medium text-indigo-600 bg-white border border-transparent rounded-md hover:bg-gray-50">Log
                        in</a>
                </span>
            </div>
        </nav>

        <!--
Mobile menu, show/hide based on menu open state.

Entering: "duration-150 ease-out"
From: "opacity-0 scale-95"
To: "opacity-100 scale-100"
Leaving: "duration-100 ease-in"
From: "opacity-100 scale-100"
To: "opacity-0 scale-95"
-->
        <div class="absolute inset-x-0 top-0 z-10 p-2 transition origin-top-right transform md:hidden">
            <div class="overflow-hidden bg-white rounded-lg shadow-md ring-1 ring-black ring-opacity-5">
                <div class="flex items-center justify-between px-5 pt-4">
                    <div>
                        <img class="w-auto h-8"
                            src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                            alt="">
                    </div>
                    <div class="-mr-2">
                        <button type="button"
                            class="inline-flex items-center justify-center p-2 text-gray-400 bg-white rounded-md hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                            <span class="sr-only">Close main menu</span>
                            <!-- Heroicon name: outline/x-mark -->
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:bg-gray-50 hover:text-gray-900">Product</a>

                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:bg-gray-50 hover:text-gray-900">Features</a>

                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:bg-gray-50 hover:text-gray-900">Marketplace</a>

                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-700 rounded-md hover:bg-gray-50 hover:text-gray-900">Company</a>
                </div>
                <a href="#"
                    class="block w-full px-5 py-3 font-medium text-center text-indigo-600 bg-gray-50 hover:bg-gray-100">Log
                    in</a>
            </div>
        </div>
    </div>