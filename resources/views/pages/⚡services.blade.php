<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section x-data="{ activeService: 'service-01' }" class="w-full text-slate-800">

    <!-- 1. HERO & SERVICE NAVIGATION PILLS -->
    <div class="bg-[#f6f8fa] border-b border-slate-200/70 py-10">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            
            <!-- Judul Halaman -->
            <div class="max-w-2xl mb-8 sm:mb-10">
                <p class="text-xs sm:text-sm font-semibold text-[#138A63] mb-3">
                    Capabilities &amp; Services
                </p>
                <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-bold text-[#16375b] tracking-tight leading-[1.18] mb-4">
                    Digital Engineering Tailored to Your Business Stage
                </h1>
                <p class="text-sm sm:text-base text-slate-500 leading-relaxed">
                    From high-trust corporate websites to full-stack web applications and custom operational software, every service is designed to ship reliably and scale with your team.
                </p>
            </div>

            <!-- Anchor Quick Navigation Pills -->
            <div class="flex flex-wrap items-center gap-2.5">
                <a 
                    href="#service-01" 
                    @click="activeService = 'service-01'"
                    :class="activeService === 'service-01' 
                        ? 'bg-[#123456] text-white border-[#123456] shadow-2xs' 
                        : 'bg-white text-[#16375b] border-slate-200/90 hover:border-slate-300 hover:bg-slate-50'"
                    class="px-4 py-2 rounded-lg border text-xs font-medium transition-colors"
                >
                    01. Website Development
                </a>
                <a 
                    href="#service-02" 
                    @click="activeService = 'service-02'"
                    :class="activeService === 'service-02' 
                        ? 'bg-[#123456] text-white border-[#123456] shadow-2xs' 
                        : 'bg-white text-[#16375b] border-slate-200/90 hover:border-slate-300 hover:bg-slate-50'"
                    class="px-4 py-2 rounded-lg border text-xs font-medium transition-colors"
                >
                    02. Company Profile Website
                </a>
                <a 
                    href="#service-03" 
                    @click="activeService = 'service-03'"
                    :class="activeService === 'service-03' 
                        ? 'bg-[#123456] text-white border-[#123456] shadow-2xs' 
                        : 'bg-white text-[#16375b] border-slate-200/90 hover:border-slate-300 hover:bg-slate-50'"
                    class="px-4 py-2 rounded-lg border text-xs font-medium transition-colors"
                >
                    03. E-Commerce Development
                </a>
                <a 
                    href="#service-04" 
                    @click="activeService = 'service-04'"
                    :class="activeService === 'service-04' 
                        ? 'bg-[#123456] text-white border-[#123456] shadow-2xs' 
                        : 'bg-white text-[#16375b] border-slate-200/90 hover:border-slate-300 hover:bg-slate-50'"
                    class="px-4 py-2 rounded-lg border text-xs font-medium transition-colors"
                >
                    04. Web Application Development
                </a>
                <a 
                    href="#service-05" 
                    @click="activeService = 'service-05'"
                    :class="activeService === 'service-05' 
                        ? 'bg-[#123456] text-white border-[#123456] shadow-2xs' 
                        : 'bg-white text-[#16375b] border-slate-200/90 hover:border-slate-300 hover:bg-slate-50'"
                    class="px-4 py-2 rounded-lg border text-xs font-medium transition-colors"
                >
                    05. Custom Software Development
                </a>
                <a 
                    href="#service-06" 
                    @click="activeService = 'service-06'"
                    :class="activeService === 'service-06' 
                        ? 'bg-[#123456] text-white border-[#123456] shadow-2xs' 
                        : 'bg-white text-[#16375b] border-slate-200/90 hover:border-slate-300 hover:bg-slate-50'"
                    class="px-4 py-2 rounded-lg border text-xs font-medium transition-colors"
                >
                    06. UI/UX Design
                </a>
            </div>

        </div>
    </div>

    <!-- 2. DAFTAR DETAIL 6 LAYANAN -->
    <div class="bg-white divide-y divide-slate-200/70">

        <!-- ==================== SERVICE 01 ==================== -->
        <div id="service-01" class="scroll-mt-24 py-14 sm:py-20">
            <div class="w-[90%] lg:w-[84%] mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                    
                    <!-- Kolom Kiri: Ringkasan Layanan -->
                    <div class="lg:col-span-5">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg bg-emerald-50 text-[#138A63] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <circle cx="12" cy="12" r="9" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.6 9h16.8M3.6 15h16.8M12 3a14.5 14.5 0 010 18M12 3a14.5 14.5 0 000 18" />
                                </svg>
                            </div>
                            <span class="text-xs font-mono font-semibold text-[#138A63]">Service 01.</span>
                        </div>

                        <h2 class="text-2xl sm:text-[26px] font-bold text-[#16375b] tracking-tight mb-3.5">
                            Website Development
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mb-5">
                            We engineer fast, accessible, and SEO-structured websites tailored to modern business goals. Every build prioritizes Core Web Vitals, clean semantic markup, intuitive content management, and frictionless conversion paths across desktop and mobile.
                        </p>

                        <p class="text-[11px] leading-relaxed mb-6">
                            <span class="font-semibold text-[#16375b]">Core Stack:</span>
                            <span class="text-slate-400">React &middot; Next.js &middot; TypeScript &middot; Tailwind CSS &middot; Node.js</span>
                        </p>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs font-medium px-4 py-2.5 rounded-lg shadow-2xs transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                                </svg>
                                <span>Pesan Layanan</span>
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 border border-slate-200/90 text-[#16375b] text-xs font-medium px-4 py-2.5 rounded-lg transition-colors">
                                <span>Request Consultation</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Kolom Kanan: Benefits, Features, Process, Concept -->
                    <div class="lg:col-span-7 space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Main Benefits -->
                            <div class="bg-[#f6f8fa] border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Main Benefits</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Sub-second page transitions and Core Web Vitals optimization</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Clean semantic SEO architecture built for organic discoverability</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Responsive grid systems verified across phones, tablets, and desktops</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Seamless WhatsApp, CRM, and lead capture integration</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Features & Deliverables -->
                            <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Features &amp; Deliverables</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Responsive Multi-Device Frontend</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Technical SEO &amp; OpenGraph Setup</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>CMS / Editable Content Architecture</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Analytics &amp; Conversion Tracking</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Deployment &amp; SSL Configuration</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Delivery Process -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-4">Delivery Process</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">01.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Information architecture &amp; sitemap planning</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">02.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Custom visual direction &amp; interactive prototypes</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">03.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Component engineering &amp; performance tuning</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">04.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Cross-browser QA &amp; production launch</p>
                                </div>
                            </div>
                        </div>

                        <!-- Relevant Concept Examples -->
                        <div class="bg-emerald-50/70 border border-emerald-200/70 rounded-xl px-5 py-3.5 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <span class="block text-[11px] font-medium text-[#138A63] mb-1">Relevant Concept Examples</span>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs font-semibold text-[#16375b]">
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">Arsitektur Nusantara Corporate Concept</a>
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">Surya Cloud Product Launch Page</a>
                                </div>
                            </div>
                            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-[#16375b] hover:text-[#138A63] shrink-0 transition-colors">
                                <span>View Portfolio</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ==================== SERVICE 02 ==================== -->
        <div id="service-02" class="scroll-mt-24 py-14 sm:py-20">
            <div class="w-[90%] lg:w-[84%] mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                    
                    <!-- Kolom Kiri -->
                    <div class="lg:col-span-5">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg bg-emerald-50 text-[#138A63] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                                </svg>
                            </div>
                            <span class="text-xs font-mono font-semibold text-[#138A63]">Service 02.</span>
                        </div>

                        <h2 class="text-2xl sm:text-[26px] font-bold text-[#16375b] tracking-tight mb-3.5">
                            Company Profile Website
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mb-5">
                            Your corporate website is often the first touchpoint for partners, investors, and enterprise clients. We design editorial-grade company profiles that present your leadership, services, certifications, and case studies with unmistakable polish.
                        </p>

                        <p class="text-[11px] leading-relaxed mb-6">
                            <span class="font-semibold text-[#16375b]">Core Stack:</span>
                            <span class="text-slate-400">TypeScript &middot; React &middot; Tailwind CSS &middot; Headless CMS &middot; Cloudflare</span>
                        </p>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs font-medium px-4 py-2.5 rounded-lg shadow-2xs transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                                </svg>
                                <span>Pesan Layanan</span>
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 border border-slate-200/90 text-[#16375b] text-xs font-medium px-4 py-2.5 rounded-lg transition-colors">
                                <span>Request Consultation</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="lg:col-span-7 space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Main Benefits -->
                            <div class="bg-[#f6f8fa] border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Main Benefits</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Executive-ready brand storytelling and visual hierarchy</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Structured service and portfolio showcases for B2B buyers</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Multi-channel inquiry capture via form and direct WhatsApp</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Easy internal content updates without developer bottlenecks</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Features & Deliverables -->
                            <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Features &amp; Deliverables</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Custom Brand-Aligned Design System</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Executive About, Services &amp; Case Study Pages</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Interactive Contact &amp; Consultation Funnel</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Performance &amp; Accessibility Audit</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Delivery Process -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-4">Delivery Process</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">01.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Brand audit &amp; editorial copy structuring</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">02.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Visual identity translation into web layouts</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">03.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Responsive frontend &amp; CMS integration</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">04.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Stakeholder review &amp; launch handover</p>
                                </div>
                            </div>
                        </div>

                        <!-- Relevant Concept Examples -->
                        <div class="bg-emerald-50/70 border border-emerald-200/70 rounded-xl px-5 py-3.5 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <span class="block text-[11px] font-medium text-[#138A63] mb-1">Relevant Concept Examples</span>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs font-semibold text-[#16375b]">
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">Arsitektur Nusantara Corporate Concept</a>
                                </div>
                            </div>
                            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-[#16375b] hover:text-[#138A63] shrink-0 transition-colors">
                                <span>View Portfolio</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ==================== SERVICE 03 ==================== -->
        <div id="service-03" class="scroll-mt-24 py-14 sm:py-20">
            <div class="w-[90%] lg:w-[84%] mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                    
                    <!-- Kolom Kiri -->
                    <div class="lg:col-span-5">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg bg-emerald-50 text-[#138A63] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                            </div>
                            <span class="text-xs font-mono font-semibold text-[#138A63]">Service 03.</span>
                        </div>

                        <h2 class="text-2xl sm:text-[26px] font-bold text-[#16375b] tracking-tight mb-3.5">
                            E-Commerce Development
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mb-5">
                            We build custom e-commerce platforms engineered to maximize average order value and minimize cart abandonment. From fast catalog filtering to local payment gateway and shipping integrations, every step is built for reliability.
                        </p>

                        <p class="text-[11px] leading-relaxed mb-6">
                            <span class="font-semibold text-[#16375b]">Core Stack:</span>
                            <span class="text-slate-400">Next.js &middot; TypeScript &middot; PostgreSQL &middot; Stripe / Midtrans API &middot; Redis</span>
                        </p>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs font-medium px-4 py-2.5 rounded-lg shadow-2xs transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                                </svg>
                                <span>Pesan Layanan</span>
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 border border-slate-200/90 text-[#16375b] text-xs font-medium px-4 py-2.5 rounded-lg transition-colors">
                                <span>Request Consultation</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="lg:col-span-7 space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Main Benefits -->
                            <div class="bg-[#f6f8fa] border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Main Benefits</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Frictionless product filtering, variants, and cart persistence</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Support for Indonesian &amp; global payment gateway workflows</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Mobile-first checkout UX optimized for thumb navigation</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Real-time inventory sync and order management hooks</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Features & Deliverables -->
                            <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Features &amp; Deliverables</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Custom Storefront &amp; Product Detail Experience</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Cart, Checkout &amp; Order Confirmation Flows</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Payment &amp; Shipping API Integration Architecture</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Merchant Order Management Dashboard</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Delivery Process -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-4">Delivery Process</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">01.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Catalog structure &amp; checkout funnel mapping</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">02.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">High-conversion storefront UI design</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">03.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Storefront, cart &amp; payment integration</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">04.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Load testing &amp; secure launch</p>
                                </div>
                            </div>
                        </div>

                        <!-- Relevant Concept Examples -->
                        <div class="bg-emerald-50/70 border border-emerald-200/70 rounded-xl px-5 py-3.5 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <span class="block text-[11px] font-medium text-[#138A63] mb-1">Relevant Concept Examples</span>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs font-semibold text-[#16375b]">
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">Karya Commerce Retail Storefront</a>
                                </div>
                            </div>
                            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-[#16375b] hover:text-[#138A63] shrink-0 transition-colors">
                                <span>View Portfolio</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ==================== SERVICE 04 ==================== -->
        <div id="service-04" class="scroll-mt-24 py-14 sm:py-20">
            <div class="w-[90%] lg:w-[84%] mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                    
                    <!-- Kolom Kiri -->
                    <div class="lg:col-span-5">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg bg-emerald-50 text-[#138A63] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 3L2 8l10 5 10-5-10-5zM2 13l10 5 10-5M2 18l10 5 10-5" />
                                </svg>
                            </div>
                            <span class="text-xs font-mono font-semibold text-[#138A63]">Service 04.</span>
                        </div>

                        <h2 class="text-2xl sm:text-[26px] font-bold text-[#16375b] tracking-tight mb-3.5">
                            Web Application Development
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mb-5">
                            Beyond static websites, NusaWeb Studio engineers stateful web applications—client portals, booking engines, SaaS workspaces, and real-time analytics dashboards—with clean API contracts, role-based access, and maintainable TypeScript codebases.
                        </p>

                        <p class="text-[11px] leading-relaxed mb-6">
                            <span class="font-semibold text-[#16375b]">Core Stack:</span>
                            <span class="text-slate-400">React &middot; TypeScript &middot; Node.js &middot; Express &middot; PostgreSQL</span>
                        </p>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs font-medium px-4 py-2.5 rounded-lg shadow-2xs transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                                </svg>
                                <span>Pesan Layanan</span>
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 border border-slate-200/90 text-[#16375b] text-xs font-medium px-4 py-2.5 rounded-lg transition-colors">
                                <span>Request Consultation</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="lg:col-span-7 space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Main Benefits -->
                            <div class="bg-[#f6f8fa] border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Main Benefits</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Predictable state architecture and responsive real-time UI</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Role-based access control and secure authentication</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Modular REST / GraphQL API design ready for mobile expansion</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Automated testing and clean documentation for internal teams</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Features & Deliverables -->
                            <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Features &amp; Deliverables</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Full-Stack Web Application Architecture</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Authentication &amp; Role Permissions</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Interactive Dashboards &amp; Data Tables</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>REST API &amp; Database Schema Design</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Delivery Process -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-4">Delivery Process</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">01.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Workflow &amp; data modeling workshop</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">02.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Interactive wireframe &amp; UX validation</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">03.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Iterative sprint development &amp; API testing</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">04.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Staging verification &amp; cloud deployment</p>
                                </div>
                            </div>
                        </div>

                        <!-- Relevant Concept Examples -->
                        <div class="bg-emerald-50/70 border border-emerald-200/70 rounded-xl px-5 py-3.5 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <span class="block text-[11px] font-medium text-[#138A63] mb-1">Relevant Concept Examples</span>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs font-semibold text-[#16375b]">
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">FlowDesk Operations Web Portal</a>
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">Metrika BI Control Suite</a>
                                </div>
                            </div>
                            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-[#16375b] hover:text-[#138A63] shrink-0 transition-colors">
                                <span>View Portfolio</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ==================== SERVICE 05 ==================== -->
        <div id="service-05" class="scroll-mt-24 py-14 sm:py-20">
            <div class="w-[90%] lg:w-[84%] mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                    
                    <!-- Kolom Kiri -->
                    <div class="lg:col-span-5">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg bg-emerald-50 text-[#138A63] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <span class="text-xs font-mono font-semibold text-[#138A63]">Service 05.</span>
                        </div>

                        <h2 class="text-2xl sm:text-[26px] font-bold text-[#16375b] tracking-tight mb-3.5">
                            Custom Software Development
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mb-5">
                            When off-the-shelf software forces your team into workarounds, we build bespoke software that mirrors your actual business logic. From automated reporting pipelines to multi-branch operational hubs, we deliver clean, extensible systems.
                        </p>

                        <p class="text-[11px] leading-relaxed mb-6">
                            <span class="font-semibold text-[#16375b]">Core Stack:</span>
                            <span class="text-slate-400">TypeScript &middot; Node.js &middot; PostgreSQL &middot; Docker &middot; REST / Webhooks</span>
                        </p>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs font-medium px-4 py-2.5 rounded-lg shadow-2xs transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                                </svg>
                                <span>Pesan Layanan</span>
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 border border-slate-200/90 text-[#16375b] text-xs font-medium px-4 py-2.5 rounded-lg transition-colors">
                                <span>Request Consultation</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="lg:col-span-7 space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Main Benefits -->
                            <div class="bg-[#f6f8fa] border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Main Benefits</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Eliminates manual spreadsheet handoffs and duplicate entry</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Connects legacy databases, ERPs, and third-party APIs</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Zero per-seat SaaS licensing lock-in as your team scales</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Built with strict security, audit logs, and backup readiness</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Features & Deliverables -->
                            <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Features &amp; Deliverables</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>System Architecture &amp; Technical Blueprint</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Bespoke Backend Services &amp; Integrations</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Admin &amp; Operational Control Interfaces</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Technical Documentation &amp; Team Training</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Delivery Process -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-4">Delivery Process</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">01.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Operational bottleneck &amp; workflow audit</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">02.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Domain architecture &amp; integration spec</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">03.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Modular engineering &amp; automated validation</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">04.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Parallel rollout &amp; post-launch support</p>
                                </div>
                            </div>
                        </div>

                        <!-- Relevant Concept Examples -->
                        <div class="bg-emerald-50/70 border border-emerald-200/70 rounded-xl px-5 py-3.5 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <span class="block text-[11px] font-medium text-[#138A63] mb-1">Relevant Concept Examples</span>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs font-semibold text-[#16375b]">
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">FlowDesk Operations Web Portal</a>
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">NusaPay Field Companion App</a>
                                </div>
                            </div>
                            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-[#16375b] hover:text-[#138A63] shrink-0 transition-colors">
                                <span>View Portfolio</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- ==================== SERVICE 06 ==================== -->
        <div id="service-06" class="scroll-mt-24 py-14 sm:py-20">
            <div class="w-[90%] lg:w-[84%] mx-auto">
                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                    
                    <!-- Kolom Kiri -->
                    <div class="lg:col-span-5">
                        <div class="flex items-center gap-3 mb-4">
                            <div class="w-9 h-9 rounded-lg bg-emerald-50 text-[#138A63] flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" />
                                </svg>
                            </div>
                            <span class="text-xs font-mono font-semibold text-[#138A63]">Service 06.</span>
                        </div>

                        <h2 class="text-2xl sm:text-[26px] font-bold text-[#16375b] tracking-tight mb-3.5">
                            UI/UX Design
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed mb-5">
                            Great software starts with clarity. Our design practice pairs user research, information architecture, and refined visual systems to turn complex workflows into intuitive interfaces that users understand immediately.
                        </p>

                        <p class="text-[11px] leading-relaxed mb-6">
                            <span class="font-semibold text-[#16375b]">Core Stack:</span>
                            <span class="text-slate-400">Figma &middot; Design Tokens &middot; Interactive Prototyping &middot; Accessibility Audit</span>
                        </p>

                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3">
                            <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs font-medium px-4 py-2.5 rounded-lg shadow-2xs transition-colors">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                                </svg>
                                <span>Pesan Layanan</span>
                            </a>
                            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-1.5 bg-white hover:bg-slate-50 border border-slate-200/90 text-[#16375b] text-xs font-medium px-4 py-2.5 rounded-lg transition-colors">
                                <span>Request Consultation</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                    <!-- Kolom Kanan -->
                    <div class="lg:col-span-7 space-y-4">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <!-- Main Benefits -->
                            <div class="bg-[#f6f8fa] border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Main Benefits</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Reduces engineering rework via validated clickable prototypes</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Consistent component libraries ready for multi-platform scale</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>WCAG AA contrast and accessible interaction patterns</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <span>Distinctive brand expression without visual clutter</span>
                                    </li>
                                </ul>
                            </div>

                            <!-- Features & Deliverables -->
                            <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                                <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-3.5">Features &amp; Deliverables</h3>
                                <ul class="space-y-2.5 text-xs text-slate-600 leading-relaxed">
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>User Flows &amp; Information Architecture</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Wireframes &amp; Interactive Figma Prototypes</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Production UI Design System &amp; Tokens</span>
                                    </li>
                                    <li class="flex items-start gap-2.5">
                                        <span class="w-1.5 h-1.5 rounded-full bg-[#16375b] shrink-0 mt-1.5"></span>
                                        <span>Responsive Breakpoint Specifications</span>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Delivery Process -->
                        <div class="bg-white border border-slate-200/80 rounded-2xl p-5 sm:p-6">
                            <h3 class="text-xs sm:text-sm font-bold text-[#16375b] mb-4">Delivery Process</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-4">
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">01.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">User interviews &amp; journey mapping</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">02.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Low-fidelity structural wireframing</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">03.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">High-fidelity UI &amp; design system creation</p>
                                </div>
                                <div>
                                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-1.5">04.</span>
                                    <p class="text-xs text-slate-500 leading-relaxed">Usability testing &amp; developer handoff</p>
                                </div>
                            </div>
                        </div>

                        <!-- Relevant Concept Examples -->
                        <div class="bg-emerald-50/70 border border-emerald-200/70 rounded-xl px-5 py-3.5 flex flex-col sm:flex-row sm:items-center justify-between gap-2">
                            <div>
                                <span class="block text-[11px] font-medium text-[#138A63] mb-1">Relevant Concept Examples</span>
                                <div class="flex flex-wrap items-center gap-x-4 gap-y-1 text-xs font-semibold text-[#16375b]">
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">Surya Cloud Product Launch Page</a>
                                    <a href="{{ route('portfolio') }}" class="underline underline-offset-2 hover:text-[#138A63] transition-colors">Metrika BI Control Suite</a>
                                </div>
                            </div>
                            <a href="{{ route('portfolio') }}" class="inline-flex items-center gap-1 text-xs font-semibold text-[#16375b] hover:text-[#138A63] shrink-0 transition-colors">
                                <span>View Portfolio</span>
                                <span aria-hidden="true">&rarr;</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <!-- 3. FREQUENTLY ASKED QUESTIONS (FAQ ACCORDION) -->
    <div x-data="{ activeFaq: 1 }" class="bg-white border-t border-slate-200/70 py-14 sm:py-20">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-start">

                <!-- Kolom Kiri -->
                <div class="lg:col-span-4">
                    <p class="text-xs font-semibold text-[#138A63] mb-2">
                        Project Clarity
                    </p>
                    <h2 class="text-2xl sm:text-3xl font-bold text-[#16375b] tracking-tight leading-snug mb-3">
                        Frequently Asked Questions
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Clear answers on timelines, deliverables, ownership, and how we collaborate from discovery to launch.
                    </p>
                </div>

                <!-- Kolom Kanan: Accordion List -->
                <div class="lg:col-span-8 bg-white border border-slate-200/80 rounded-2xl divide-y divide-slate-200/70 shadow-2xs overflow-hidden">

                    <!-- FAQ 01 -->
                    <div class="p-5 sm:p-6">
                        <button 
                            type="button" 
                            @click="activeFaq = activeFaq === 1 ? null : 1"
                            class="w-full flex items-start justify-between gap-4 text-left cursor-pointer"
                        >
                            <div class="flex items-start gap-3">
                                <span class="text-xs font-mono font-semibold text-[#138A63] mt-0.5">01.</span>
                                <span class="text-xs sm:text-sm font-bold text-[#16375b] leading-snug">
                                    How long does it take to build a company profile website or custom web application?
                                </span>
                            </div>
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                :class="activeFaq === 1 ? 'rotate-180' : ''"
                                class="h-4 w-4 text-slate-400 shrink-0 mt-0.5 transition-transform duration-200" 
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="activeFaq === 1" x-collapse class="pl-7 pr-6 pt-3">
                            <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                                A refined company profile or landing page typically takes 2&ndash;4 weeks from discovery to launch. Custom e-commerce stores and multi-role web applications range from 5&ndash;10 weeks depending on integrations and feature complexity. Every project starts with a fixed milestone schedule.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 02 -->
                    <div class="p-5 sm:p-6">
                        <button 
                            type="button" 
                            @click="activeFaq = activeFaq === 2 ? null : 2"
                            class="w-full flex items-start justify-between gap-4 text-left cursor-pointer"
                        >
                            <div class="flex items-start gap-3">
                                <span class="text-xs font-mono font-semibold text-[#138A63] mt-0.5">02.</span>
                                <span class="text-xs sm:text-sm font-bold text-[#16375b] leading-snug">
                                    How do pricing and payment milestones work at NusaWeb Studio?
                                </span>
                            </div>
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                :class="activeFaq === 2 ? 'rotate-180' : ''"
                                class="h-4 w-4 text-slate-400 shrink-0 mt-0.5 transition-transform duration-200" 
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="activeFaq === 2" x-collapse class="pl-7 pr-6 pt-3">
                            <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                                We operate on transparent fixed-scope proposals broken into clear milestone payments—typically 40% kickoff deposit, 30% upon design and staging sign-off, and 30% prior to production deployment.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 03 -->
                    <div class="p-5 sm:p-6">
                        <button 
                            type="button" 
                            @click="activeFaq = activeFaq === 3 ? null : 3"
                            class="w-full flex items-start justify-between gap-4 text-left cursor-pointer"
                        >
                            <div class="flex items-start gap-3">
                                <span class="text-xs font-mono font-semibold text-[#138A63] mt-0.5">03.</span>
                                <span class="text-xs sm:text-sm font-bold text-[#16375b] leading-snug">
                                    Will our team be able to update website text, portfolio items, or products independently?
                                </span>
                            </div>
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                :class="activeFaq === 3 ? 'rotate-180' : ''"
                                class="h-4 w-4 text-slate-400 shrink-0 mt-0.5 transition-transform duration-200" 
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="activeFaq === 3" x-collapse class="pl-7 pr-6 pt-3">
                            <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                                Yes. Every website or application includes an intuitive admin dashboard tailored to your content structure, complete with a hands-on walkthrough session and documentation for your team.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 04 -->
                    <div class="p-5 sm:p-6">
                        <button 
                            type="button" 
                            @click="activeFaq = activeFaq === 4 ? null : 4"
                            class="w-full flex items-start justify-between gap-4 text-left cursor-pointer"
                        >
                            <div class="flex items-start gap-3">
                                <span class="text-xs font-mono font-semibold text-[#138A63] mt-0.5">04.</span>
                                <span class="text-xs sm:text-sm font-bold text-[#16375b] leading-snug">
                                    Do you handle UI/UX design as well as frontend and backend development?
                                </span>
                            </div>
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                :class="activeFaq === 4 ? 'rotate-180' : ''"
                                class="h-4 w-4 text-slate-400 shrink-0 mt-0.5 transition-transform duration-200" 
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="activeFaq === 4" x-collapse class="pl-7 pr-6 pt-3">
                            <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                                Absolutely. Our team covers end-to-end delivery from wireframing and high-fidelity UI/UX design to full-stack engineering, database architecture, API integrations, and cloud deployment.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 05 -->
                    <div class="p-5 sm:p-6">
                        <button 
                            type="button" 
                            @click="activeFaq = activeFaq === 5 ? null : 5"
                            class="w-full flex items-start justify-between gap-4 text-left cursor-pointer"
                        >
                            <div class="flex items-start gap-3">
                                <span class="text-xs font-mono font-semibold text-[#138A63] mt-0.5">05.</span>
                                <span class="text-xs sm:text-sm font-bold text-[#16375b] leading-snug">
                                    What happens after the website or application goes live?
                                </span>
                            </div>
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                :class="activeFaq === 5 ? 'rotate-180' : ''"
                                class="h-4 w-4 text-slate-400 shrink-0 mt-0.5 transition-transform duration-200" 
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="activeFaq === 5" x-collapse class="pl-7 pr-6 pt-3">
                            <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                                You receive 100% source-code ownership alongside a complimentary post-launch warranty period for bug fixes and performance monitoring. Optional ongoing maintenance retainers are also available.
                            </p>
                        </div>
                    </div>

                    <!-- FAQ 06 -->
                    <div class="p-5 sm:p-6">
                        <button 
                            type="button" 
                            @click="activeFaq = activeFaq === 6 ? null : 6"
                            class="w-full flex items-start justify-between gap-4 text-left cursor-pointer"
                        >
                            <div class="flex items-start gap-3">
                                <span class="text-xs font-mono font-semibold text-[#138A63] mt-0.5">06.</span>
                                <span class="text-xs sm:text-sm font-bold text-[#16375b] leading-snug">
                                    How do I start a project consultation with NusaWeb Studio?
                                </span>
                            </div>
                            <svg 
                                xmlns="http://www.w3.org/2000/svg" 
                                :class="activeFaq === 6 ? 'rotate-180' : ''"
                                class="h-4 w-4 text-slate-400 shrink-0 mt-0.5 transition-transform duration-200" 
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"
                            >
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                            </svg>
                        </button>
                        <div x-show="activeFaq === 6" x-collapse class="pl-7 pr-6 pt-3">
                            <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                                Fill out the Project Inquiry Form on our Contact page or click the WhatsApp consultation button. Our team will review your goals and respond within one business day with recommended next steps.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>