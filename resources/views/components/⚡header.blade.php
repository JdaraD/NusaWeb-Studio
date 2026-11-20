<?php

use Livewire\Component;

new class extends Component
{
    public function menus(): array
    {
        return [
            ['label' => 'Home', 'route' => 'beranda', 'active' => 'beranda'],
            ['label' => 'About', 'route' => 'about', 'active' => 'about'],
            ['label' => 'Services', 'route' => 'services', 'active' => 'services*'],
            ['label' => 'Portfolio', 'route' => 'portfolio', 'active' => 'portfolio*'],
            ['label' => 'Contact', 'route' => 'contact', 'active' => 'contact'],
        ];
    }
};
?>

<header class="fixed top-0 left-0 right-0 z-50 h-20 w-full bg-white/90 backdrop-blur-md border-b border-slate-200/50">
    <div class="flex items-center justify-center w-full h-full bg-linear-to-t from-[rgba(73,39,161,0.2)] from-[0.77%] to-[rgba(160,169,217,0.2)] to-[99.54%]">
        <div class="flex w-[90%] lg:w-[84%] h-full items-center justify-between">
            
            <!-- 01: Logo & Brand -->
            <a href="{{ route('beranda') }}" wire:navigate class="flex gap-3 items-center h-full w-auto">
                <div class="flex p-2 bg-gray-200 shadow-sm rounded-lg shrink-0">
                    <img src="{{ asset('img/logo.png') }}" alt="NusaWeb Studio Logo" class="h-7 w-7 object-contain">
                </div>
                <h2 class="text-lg font-bold tracking-tight">
                    <span class="text-[#16375b]">NusaWeb</span>
                    <span class="text-[#138A63]">Studio</span>
                </h2>
            </a>

            <!-- 02: Navigation Links -->
            <nav class="hidden md:flex items-center gap-8 text-sm font-medium">
                @foreach ($this->menus() as $menu)
                    @php
                        $isActive = request()->routeIs($menu['active']);
                    @endphp
                    <a 
                        href="{{ route($menu['route']) }}" 
                        wire:navigate
                        @class([
                            'pb-1 border-b-2 transition-colors',
                            'text-[#16375b] font-semibold border-[#138A63]' => $isActive,
                            'text-slate-600 border-transparent hover:text-[#16375b]' => ! $isActive,
                        ])
                    >
                        {{ $menu['label'] }}
                    </a>
                @endforeach
            </nav>

            <!-- 03: CTA Button -->
            <div>
                <a href="https://wa.me/6281234567890" class="inline-flex items-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs sm:text-sm font-medium px-4 sm:px-5 py-2.5 rounded-lg shadow-sm transition-colors">
                    <!-- Icon WhatsApp (SVG) -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current shrink-0" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                    </svg>
                    <span>Let's Talk</span>
                </a>
            </div>

        </div>
    </div>
</header>