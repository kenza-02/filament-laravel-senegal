@php
    $isCollapsed = \Filament\Facades\Filament::isSidebarCollapsibleOnDesktop();
@endphp 

<img 
    src="{{ asset('images/laravelsn.jpg') }}" 
    alt="Logo de Mon École" 
    style="
        height: {{ $isCollapsed ? '2.5rem' : '1.75rem' }}; 
        max-width: 100%; 
        {{ $isCollapsed ? 'width: 2.5rem;' : '' }}
    " 
    class="dark:invert"
/>