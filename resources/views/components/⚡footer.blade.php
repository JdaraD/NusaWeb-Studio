<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<footer class="bg-[#123456] text-white pt-14 pb-8 w-full relative">
    <div class="w-[84%] mx-auto">
        
        <!-- Bagian Atas: 4 Kolom Utama -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-12 gap-10 pb-12">
            
            <!-- Kolom 1: Brand, Deskripsi & Sosial Media -->
            <div class="lg:col-span-4 space-y-5">
                <a href="#" class="inline-flex items-center gap-3">
                    <div class="flex p-1.5 bg-white rounded-lg shadow-sm">
                        <img src="{{ asset('img/logo.png') }}" alt="NusaWeb Studio Logo" class="h-6 w-6 object-contain">
                    </div>
                    <span class="text-lg font-bold tracking-tight">
                        <span class="text-white">NusaWeb</span>
                        <span class="text-[#20c997]">Studio</span>
                    </span>
                </a>

                <p class="text-slate-300 text-xs sm:text-sm leading-relaxed pr-4">
                    NusaWeb Studio is a digital agency crafting modern websites, web applications, mobile apps, and tailored software systems built to accelerate business growth.
                </p>

                <div class="flex flex-wrap items-center gap-3 text-xs text-slate-400 pt-1">
                    <a href="#" class="hover:text-white transition-colors">LinkedIn</a>
                    <span>&middot;</span>
                    <a href="#" class="hover:text-white transition-colors">Instagram</a>
                    <span>&middot;</span>
                    <a href="#" class="hover:text-white transition-colors">GitHub</a>
                    <span>&middot;</span>
                    <a href="#" class="hover:text-white transition-colors">Dribbble</a>
                </div>
            </div>

            <!-- Kolom 2: Navigation -->
            <div class="lg:col-span-2 lg:pl-4">
                <h3 class="text-sm font-semibold text-white mb-4">Navigation</h3>
                <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">Home</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">About</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">Services</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">Portfolio</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">Contact</a></li>
                </ul>
            </div>

            <!-- Kolom 3: Services -->
            <div class="lg:col-span-3">
                <h3 class="text-sm font-semibold text-white mb-4">Services</h3>
                <ul class="space-y-3 text-xs sm:text-sm text-slate-300">
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">Website Development</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">Company Profile Website</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">E-Commerce Development</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">Web Application Development</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">Custom Software Development</a></li>
                    <li><a href="#" class="hover:text-[#20c997] transition-colors">UI/UX Design</a></li>
                </ul>
            </div>

            <!-- Kolom 4: Contact Studio -->
            <div class="lg:col-span-3">
                <h3 class="text-sm font-semibold text-white mb-4">Contact Studio</h3>
                <ul class="space-y-3 text-xs sm:text-sm text-slate-300 mb-6">
                    <li class="flex items-center gap-2.5">
                        <!-- Icon Email -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#20c997] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:hello@nusaweb.studio" class="hover:text-white transition-colors">hello@nusaweb.studio</a>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <!-- Icon WhatsApp -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#20c997] shrink-0 fill-current" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                        </svg>
                        <a href="https://wa.me/6281234567890" class="hover:text-white transition-colors">+62 812-3456-7890</a>
                    </li>
                    <li class="flex items-center gap-2.5">
                        <!-- Icon Lokasi -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#20c997] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Bogor, Indonesia</span>
                    </li>
                </ul>

                <a href="https://wa.me/6281234567890" class="inline-flex items-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs font-medium px-4 py-2.5 rounded-lg shadow-sm transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                    </svg>
                    <span>Pesan Sekarang via WhatsApp</span>
                </a>
            </div>
        </div>

        <!-- Bagian Bawah: Garis Pemisah & Copyright -->
        <div class="border-t border-white/10 pt-6 flex flex-col sm:flex-row items-center justify-between gap-4 text-xs text-slate-400">
            <p>&copy; 2026 NusaWeb Studio. All rights reserved.</p>
            <p>Mon &ndash; Fri &middot; 09:00 &ndash; 18:00 WIB</p>
        </div>

    </div>

    <!-- Floating WhatsApp Button (Pojok Kanan Bawah) -->
    <a href="https://wa.me/6281234567890" aria-label="Chat WhatsApp" class="fixed bottom-6 right-6 z-50 flex items-center justify-center w-12 h-12 bg-[#16a34a] hover:bg-[#15803d] text-white rounded-full shadow-lg transition-transform hover:scale-105">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 fill-current" viewBox="0 0 24 24">
            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
        </svg>
    </a>
</footer>