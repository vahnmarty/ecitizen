
<x-slot name="header">
    <h2 class="text-xl font-semibold leading-tight text-gray-800">
        {{ __('My Reports') }}
    </h2>
</x-slot>

<div class="py-12">
    <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
        <div>
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
