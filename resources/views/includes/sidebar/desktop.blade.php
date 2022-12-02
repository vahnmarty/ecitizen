<div class="hidden md:fixed md:inset-y-0 md:flex md:w-64 md:flex-col">
    <div class="flex flex-col flex-1 min-h-0 bg-gray-800">
        <div class="flex items-center flex-shrink-0 h-16 px-4 bg-gray-900">
            <a href="{{ route('dashboard') }}">
                <x-application-logo class="block w-auto h-10 text-white fill-current" />
            </a>
        </div>
        <div class="flex flex-col flex-1 overflow-y-auto">
            <nav class="flex-1 px-2 py-4 space-y-1">

                <x-sidebar-menu-item link="dashboard">
                    <x-heroicon-s-home class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" />
                    Dashboard
                </x-sidebar-menu-item>

                <x-sidebar-menu>
                    <x-slot name="parent">
                        <x-sidebar-menu-item link="#">
                            <x-heroicon-s-chart-bar
                                class="flex-shrink-0 w-6 h-6 mr-3 text-gray-400 group-hover:text-gray-300" />
                            Reports
                        </x-sidebar-menu-item>
                    </x-slot>
                    <x-slot name="children">
                        <x-sidebar-menu-item link="{{ route('dashboard') }}">
                            Transaction Report
                        </x-sidebar-menu-item>
                    </x-slot>
                </x-sidebar-menu>

            </nav>
        </div>
    </div>
</div>
