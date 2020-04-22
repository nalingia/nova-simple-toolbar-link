<a href="{{ $href }}" class="cursor-pointer flex items-center font-normal dim text-white mb-6 text-base no-underline" target="{{ !is_null($target) ? $target : '_self' }}">
    @if(!isset($icon) || is_null($icon))
        <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
            <path fill="var(--sidebar-icon)" d="M19.48 13.03A4 4 0 0 1 16 19h-4a4 4 0 1 1 0-8h1a1 1 0 0 0 0-2h-1a6 6 0 1 0 0 12h4a6 6 0 0 0 5.21-8.98L21.2 12a1 1 0 1 0-1.72 1.03zM4.52 10.97A4 4 0 0 1 8 5h4a4 4 0 1 1 0 8h-1a1 1 0 0 0 0 2h1a6 6 0 1 0 0-12H8a6 6 0 0 0-5.21 8.98l.01.02a1 1 0 1 0 1.72-1.03z"></path>
        </svg>
    @else
        {!! $icon !!}
    @endif
    <span class="sidebar-label">
        {{ $name }}
    </span>
</a>
