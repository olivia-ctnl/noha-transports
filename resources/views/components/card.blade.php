{{-- Card Component --}}
@props([
'title',
'description',
'layout' => 'vertical',
'number' => null,
])

<div class="
    bg-white border border-gray-200 rounded-xl p-8 shadow-sm transition-transform duration-200 hover:shadow-md hover:-translate-y-1
    animate-fadeInUp
    {{ $layout === 'vertical' ? 'flex flex-col' : 'flex items-start gap-5 md:gap-6' }}
">
    @if($layout === 'horizontal-number' && $number)
    <div
        class="flex-shrink-0 w-8 h-8 md:w-10 md:h-10 bg-[#6465a5] rounded-full flex items-center justify-center text-white font-semibold text-sm">
        {{ $number }}
    </div>
    @endif

    <div class="flex-1">
        <h3 class="text-[#6465a5] font-semibold text-xl md:text-lg mb-4 md:mb-3 leading-snug">{!! $title !!}</h3>
        <div class="text-black text-base md:text-sm leading-relaxed space-y-3">
            {!! $description !!}
        </div>
    </div>
</div>