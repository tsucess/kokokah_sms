@props([
    'title' => '',
    'value' => '',
    'icon' => '',
    'trend' => null,
    'trendLabel' => '',
    'trendUp' => true
])

<div class="bg-white rounded-lg border border-gray-200 p-6">
    <div class="flex items-start justify-between">
        <div class="flex-1">
            <p class="text-sm font-medium text-gray-600 mb-2">{{ $title }}</p>
            <p class="text-3xl font-bold text-gray-900">{{ $value }}</p>
            
            @if($trend)
                <div class="flex items-center mt-2">
                    @if($trendUp)
                        <svg class="w-4 h-4 text-green-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
                        </svg>
                        <span class="text-sm font-medium text-green-600">{{ $trend }}</span>
                    @else
                        <svg class="w-4 h-4 text-red-500 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                        </svg>
                        <span class="text-sm font-medium text-red-600">{{ $trend }}</span>
                    @endif
                    <span class="text-sm text-gray-500 ml-1">{{ $trendLabel }}</span>
                </div>
            @endif
        </div>
        
        @if($icon)
            <div class="ml-4">
                {!! $icon !!}
            </div>
        @endif
    </div>
</div>

