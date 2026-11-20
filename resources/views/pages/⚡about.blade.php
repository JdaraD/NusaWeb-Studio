<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section class="w-full text-slate-800">

    <!-- 1. HERO & STUDIO BLUEPRINT -->
    <div class="bg-white">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            
            <!-- Intro Header -->
            <div class="max-w-3xl mb-12 sm:mb-14">
                <p class="text-xs sm:text-sm font-semibold text-[#138A63] mb-3">
                    About NusaWeb Studio
                </p>
                <h1 class="text-3xl sm:text-4xl lg:text-[44px] font-bold text-[#16375b] tracking-tight leading-[1.18] mb-5">
                    A Modern Digital Agency Built Around Craft, Clarity, and Code.
                </h1>
                <p class="text-sm sm:text-base text-slate-500 leading-relaxed">
                    NusaWeb Studio is a specialized digital agency uniting architectural UI/UX craft with reliable full-stack engineering. We partner with ambitious businesses to replace outdated web presences and manual workflows with fast, scalable digital products.
                </p>
            </div>

            <!-- Studio Blueprint Dark Banner -->
            <div class="relative overflow-hidden bg-[#123456] rounded-2xl p-6 sm:p-10 lg:p-12 text-white shadow-sm">
                <!-- Aksen vertikal halus di sisi kiri -->
                <div class="hidden sm:block absolute inset-y-0 left-0 w-4 bg-white/3"></div>

                <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-center">
                    <!-- Kolom Kiri -->
                    <div class="lg:col-span-5 space-y-4">
                        <p class="text-xs font-medium text-[#20c997]">
                            Studio Blueprint
                        </p>
                        <h2 class="text-xl sm:text-2xl font-bold leading-snug text-white">
                            Where Brand Precision Meets Production Engineering
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                            Every engagement pairs design directors directly with full-stack TypeScript engineers—eliminating translation loss between mockup and live deployment.
                        </p>
                    </div>

                    <!-- Kolom Kanan: 2x2 Feature Cards -->
                    <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Card 1 -->
                        <div class="bg-white/6 border border-white/10 rounded-xl p-5 space-y-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#20c997]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 3L2 8l10 5 10-5-10-5zM2 13l10 5 10-5M2 18l10 5 10-5" />
                            </svg>
                            <div>
                                <h3 class="text-sm font-semibold text-white">Design Systems</h3>
                                <p class="text-xs text-slate-300 mt-0.5">Tokenized UI components</p>
                            </div>
                        </div>

                        <!-- Card 2 -->
                        <div class="bg-white/6 border border-white/10 rounded-xl p-5 space-y-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#20c997]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <circle cx="12" cy="12" r="9" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.6 9h16.8M3.6 15h16.8M12 3a14.5 14.5 0 010 18M12 3a14.5 14.5 0 000 18" />
                            </svg>
                            <div>
                                <h3 class="text-sm font-semibold text-white">Web &amp; SaaS</h3>
                                <p class="text-xs text-slate-300 mt-0.5">Full-stack TypeScript</p>
                            </div>
                        </div>

                        <!-- Card 3 -->
                        <div class="bg-white/6 border border-white/10 rounded-xl p-5 space-y-2.5">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-[#20c997]" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                <rect x="7" y="2" width="10" height="20" rx="2" />
                                <path stroke-linecap="round" d="M12 18h.01" />
                            </svg>
                            <div>
                                <h3 class="text-sm font-semibold text-white">Mobile Ready</h3>
                                <p class="text-xs text-slate-300 mt-0.5">Thumb-first UX flows</p>
                            </div>
                        </div>

                        <!-- Card 4 (Highlighted Green) -->
                        <div class="bg-[#138A63] rounded-xl p-5 space-y-2.5 shadow-sm">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6" />
                            </svg>
                            <div>
                                <h3 class="text-sm font-semibold text-white">Built to Convert</h3>
                                <p class="text-xs text-emerald-100 mt-0.5">Measurable ROI focus</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- 2. OUR VISION & OUR MISSION -->
    <div class="bg-[#f6f8fa] border-y border-slate-200/60 py-14 sm:py-20">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">
                
                <!-- Our Vision Card -->
                <div class="lg:col-span-5 bg-white rounded-2xl border border-slate-200/80 p-7 sm:p-8 shadow-2xs">
                    <div class="w-9 h-9 rounded-lg bg-emerald-50 text-[#138A63] flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <circle cx="12" cy="12" r="9" />
                            <polygon points="16.24 7.76 14.12 14.12 7.76 16.24 9.88 9.88 16.24 7.76" />
                        </svg>
                    </div>
                    <h2 class="text-lg sm:text-xl font-bold text-[#16375b] mb-3">Our Vision</h2>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        To become the trusted digital engineering partner for forward-thinking businesses across Indonesia and Southeast Asia—known for precision craft, honest communication, and measurable product impact.
                    </p>
                </div>

                <!-- Our Mission Card -->
                <div class="lg:col-span-7 bg-white rounded-2xl border border-slate-200/80 p-7 sm:p-8 shadow-2xs">
                    <div class="w-9 h-9 rounded-lg bg-[#16375b] text-white flex items-center justify-center mb-5">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 3L2 8l10 5 10-5-10-5zM2 13l10 5 10-5M2 18l10 5 10-5" />
                        </svg>
                    </div>
                    <h2 class="text-lg sm:text-xl font-bold text-[#16375b] mb-4">Our Mission</h2>
                    <ul class="space-y-3.5 text-xs sm:text-sm text-slate-600 leading-relaxed">
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Design human-centered interfaces that communicate brand authority and clarity from the first interaction.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Engineer clean, maintainable, and scalable web and mobile software built on proven modern standards.</span>
                        </li>
                        <li class="flex items-start gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <span>Align every line of code and pixel directly with tangible business growth and operational efficiency.</span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

    <!-- 3. CORE VALUES THAT GUIDE EVERY BUILD -->
    <div class="bg-white py-14 sm:py-20">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            
            <div class="mb-10">
                <p class="text-xs font-semibold text-[#138A63] mb-2">Studio Principles</p>
                <h2 class="text-2xl sm:text-3xl font-bold text-[#16375b] tracking-tight">
                    Core Values That Guide Every Build
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5 sm:gap-6">
                <!-- Value 01 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 hover:border-slate-300 transition-colors">
                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-2.5">01.</span>
                    <h3 class="text-base sm:text-lg font-bold text-[#16375b] mb-2">Clarity Over Complexity</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        We strip away unnecessary jargon and visual noise so both users and business owners achieve goals faster.
                    </p>
                </div>

                <!-- Value 02 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 hover:border-slate-300 transition-colors">
                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-2.5">02.</span>
                    <h3 class="text-base sm:text-lg font-bold text-[#16375b] mb-2">Engineering Rigor</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        Clean TypeScript architecture, accessibility standards, and performance budgets are built in from day one—not bolted on later.
                    </p>
                </div>

                <!-- Value 03 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 hover:border-slate-300 transition-colors">
                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-2.5">03.</span>
                    <h3 class="text-base sm:text-lg font-bold text-[#16375b] mb-2">Partnership Mindset</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        We work alongside your team like an embedded product unit, giving proactive advice on scope, ROI, and scalability.
                    </p>
                </div>

                <!-- Value 04 -->
                <div class="bg-white rounded-2xl border border-slate-200/80 p-6 sm:p-7 hover:border-slate-300 transition-colors">
                    <span class="block text-xs font-mono font-semibold text-[#138A63] mb-2.5">04.</span>
                    <h3 class="text-base sm:text-lg font-bold text-[#16375b] mb-2">Long-Term Maintainability</h3>
                    <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                        We deliver documented codebases and intuitive admin tools that continue serving your business years after launch.
                    </p>
                </div>
            </div>

        </div>
    </div>

    <!-- 4. DIGITAL INNOVATION APPROACH -->
    <div class="bg-[#f6f8fa] border-y border-slate-200/60 py-14 sm:py-20">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                
                <!-- Kolom Kiri -->
                <div class="lg:col-span-5 space-y-6">
                    <div>
                        <p class="text-xs font-semibold text-[#138A63] mb-2">Digital Innovation Approach</p>
                        <h2 class="text-2xl sm:text-3xl font-bold text-[#16375b] tracking-tight leading-snug mb-4">
                            Practical Innovation Anchored in Real Operations
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            We never chase fleeting technical hype. Instead, we combine battle-tested modern frameworks, disciplined UI systems, and structured discovery to launch software your customers and staff enjoy using from day one.
                        </p>
                    </div>

                    <!-- Transparent Collaboration Box -->
                    <div class="bg-white rounded-xl border border-slate-200/80 p-5">
                        <div class="flex items-center gap-2 text-[#16375b] font-semibold text-xs sm:text-sm mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                            <span>Transparent Collaboration</span>
                        </div>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Direct communication channels, staging previews every sprint, and full source-code ownership upon project completion.
                        </p>
                    </div>
                </div>

                <!-- Kolom Kanan: 2x2 Tech Stack & Discipline Cards -->
                <div class="lg:col-span-7 grid grid-cols-1 sm:grid-cols-2 gap-5">
                    <!-- Tech Card 1 -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 p-6">
                        <h3 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            Frontend &amp; Experience Engineering
                        </h3>
                        <p class="text-[11px] font-medium text-[#138A63] mb-3">
                            React &middot; Next.js &middot; TypeScript &middot; Tailwind CSS &middot; Motion
                        </p>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Pixel-accurate responsive interfaces, accessibility compliance, and Core Web Vitals tuning.
                        </p>
                    </div>

                    <!-- Tech Card 2 -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 p-6">
                        <h3 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            Backend &amp; Custom Systems
                        </h3>
                        <p class="text-[11px] font-medium text-[#138A63] mb-3">
                            Node.js &middot; Express &middot; PostgreSQL &middot; REST &amp; Webhook APIs
                        </p>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Secure business logic, role-based access control, payment gateways, and third-party ERP integrations.
                        </p>
                    </div>

                    <!-- Tech Card 3 -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 p-6">
                        <h3 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            Mobile &amp; Cross-Platform Apps
                        </h3>
                        <p class="text-[11px] font-medium text-[#138A63] mb-3">
                            React Native &middot; PWA Architecture &middot; Offline Sync
                        </p>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Thumb-friendly mobile applications engineered for field operations and consumer engagement.
                        </p>
                    </div>

                    <!-- Tech Card 4 -->
                    <div class="bg-white rounded-2xl border border-slate-200/80 p-6">
                        <h3 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            Product UI/UX &amp; Design Systems
                        </h3>
                        <p class="text-[11px] font-medium text-[#138A63] mb-3">
                            Figma &middot; Design Tokens &middot; Interactive Prototyping
                        </p>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            End-to-end user flows, scalable component libraries, and conversion-focused wireframes.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- 5. INTEGRATED TEAMS & BOTTOM CTA BANNER -->
    <div class="bg-white py-14 sm:py-20">
        <div class="w-[90%] lg:w-[84%] mx-auto space-y-14 sm:space-y-16">
            
            <!-- Multidisciplinary Teams -->
            <div>
                <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-10">
                    <div>
                        <p class="text-xs font-semibold text-[#138A63] mb-2">Multidisciplinary Practice</p>
                        <h2 class="text-2xl sm:text-3xl font-bold text-[#16375b] tracking-tight">
                            Integrated Product, Design &amp; Engineering Teams
                        </h2>
                    </div>
                    <div class="inline-flex items-center gap-2 text-xs text-slate-500">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>Dedicated pod assigned per engagement</span>
                    </div>
                </div>

                <!-- 3 Team Cards -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Team 1 -->
                    <div class="bg-[#f6f8fa] rounded-2xl border border-slate-200/80 p-6 sm:p-7">
                        <span class="block text-[11px] font-mono font-semibold tracking-wider text-[#138A63] uppercase mb-3">
                            UX &middot; UI
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-[#16375b] mb-2">
                            Creative &amp; UX Direction
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            Brand translation, information architecture, typography, and conversion-centered interface systems.
                        </p>
                    </div>

                    <!-- Team 2 -->
                    <div class="bg-[#f6f8fa] rounded-2xl border border-slate-200/80 p-6 sm:p-7">
                        <span class="block text-[11px] font-mono font-semibold tracking-wider text-[#138A63] uppercase mb-3">
                            FE &middot; BE
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-[#16375b] mb-2">
                            Full-Stack Web Engineering
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            Modern TypeScript frontends, clean API services, database design, and cloud deployment.
                        </p>
                    </div>

                    <!-- Team 3 -->
                    <div class="bg-[#f6f8fa] rounded-2xl border border-slate-200/80 p-6 sm:p-7">
                        <span class="block text-[11px] font-mono font-semibold tracking-wider text-[#138A63] uppercase mb-3">
                            PM &middot; QA
                        </span>
                        <h3 class="text-base sm:text-lg font-bold text-[#16375b] mb-2">
                            Product Strategy &amp; QA
                        </h3>
                        <p class="text-xs sm:text-sm text-slate-500 leading-relaxed">
                            Requirement discovery, milestone governance, cross-device quality assurance, and launch readiness.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Ready to Partner CTA Banner -->
            <div class="bg-[#123456] rounded-2xl p-7 sm:p-10 lg:px-12 lg:py-10 text-white flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                <div class="max-w-xl space-y-2">
                    <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-white">
                        Ready to Partner with NusaWeb Studio?
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Tell us about your business goals and let&rsquo;s map the ideal digital solution together.
                    </p>
                </div>

                <div class="flex flex-wrap items-center gap-3 w-full sm:w-auto">
                    <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs sm:text-sm font-medium px-5 py-3 rounded-lg shadow-sm transition-colors w-full sm:w-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                            <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                        </svg>
                        <span>Pesan Sekarang via WhatsApp</span>
                    </a>

                    <a href="{{ route('contact') }}" class="inline-flex items-center justify-center gap-2 bg-white/10 hover:bg-white/15 border border-white/15 text-white text-xs sm:text-sm font-medium px-5 py-3 rounded-lg transition-colors w-full sm:w-auto">
                        <span>Start a Project</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </a>
                </div>
            </div>

        </div>
    </div>

</section>