
<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('My Reports') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
        <div id="grid-view">
            <div class="grid grid-cols-3 gap-6">
                @foreach($reports as $report)
                <div wire:key="report-{{ $report->id }}" class="bg-white border rounded-lg shadow-md">
                    <div class="px-6 py-6 space-y-2">
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-red-700">
                                <path fill-rule="evenodd" d="M12.963 2.286a.75.75 0 00-1.071-.136 9.742 9.742 0 00-3.539 6.177A7.547 7.547 0 016.648 6.61a.75.75 0 00-1.152-.082A9 9 0 1015.68 4.534a7.46 7.46 0 01-2.717-2.248zM15.75 14.25a3.75 3.75 0 11-7.313-1.172c.628.465 1.35.81 2.133 1a5.99 5.99 0 011.925-3.545 3.75 3.75 0 013.255 3.717z" clip-rule="evenodd" />
                              </svg>
                              
                            <p class="text-sm">{{ $report->description }}</p>
                        </div>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-blue-700">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                              </svg>
                              
                            <p class="text-sm">{{ $report->created_at->format('F d Y h:i a') }}</p>
                        </div>
                        <div class="flex gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 text-green-700">
                                <path fill-rule="evenodd" d="M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                              </svg>
                              
                            <p class="text-sm">{{ $report->address }}</p>
                        </div>

                        <div class="pt-3">
                            <div class="flex gap-2 px-2 py-1 text-xs text-red-500 border border-red-100 rounded-lg bg-red-50">
                                <span class="self-center w-2 h-2 bg-red-700 rounded-full animate-pulse"></span>
                                Pending Verification
                            </div>
                        </div>
                    </div>
                    
                </div>
                @endforeach
            </div>
        </div>
        <div class="hidden" id="list-view">
            <div class="space-y-4">
                @foreach($reports as $report)
                <div wire:key="report-{{ $report->id }}" class="px-4 py-4 bg-white border">
                    <div class="flex justify-between">
                        <div>
                            <div class="flex gap-2">
                                <span>Type:</span>
                                <p>{{ $report->type->description }}</p>
                            </div>
                            <div class="flex gap-2">
                                <span>Date:</span>
                                <p>{{ $report->created_at->format('F d Y h:i a') }}</p>
                            </div>
                            <div class="flex gap-2">
                                <span>Details:</span>
                                <p>{{ $report->description }}</p>
                            </div>
                        </div>
                        <div>
                            <div class="px-8 py-4 text-red-300 border border-red-300 rounded-lg bg-red-50">
                                Pending Verification
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
