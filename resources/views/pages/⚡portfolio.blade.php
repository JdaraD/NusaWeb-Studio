<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section 
    x-data="{
        activeTab: 'All',
        search: '',
        selectedCategory: 'All Categories',
        matches(type, category, title, tech) {
            const tabMatch = this.activeTab === 'All' || this.activeTab === type;
            const catMatch = this.selectedCategory === 'All Categories' || this.selectedCategory === category;
            const q = this.search.toLowerCase().trim();
            const searchMatch = !q || title.toLowerCase().includes(q) || tech.toLowerCase().includes(q) || category.toLowerCase().includes(q);
            return tabMatch && catMatch && searchMatch;
        }
    }"
    class="w-full text-slate-800"
>

    <!-- 1. HEADER & FILTER BAR -->
    <div class="bg-[#f6f8fa] border-b border-slate-200/70 py-10 sm:pb-12">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            
            <!-- Judul Halaman -->
            <div class="max-w-2xl mb-8 sm:mb-10">
                <p class="text-xs sm:text-sm font-semibold text-[#138A63] mb-3">
                    Portfolio &amp; Concept Showcase
                </p>
                <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-bold text-[#16375b] tracking-tight leading-[1.18] mb-4">
                    Crafted Websites, Web Apps &amp; Digital Systems
                </h1>
                <p class="text-sm sm:text-base text-slate-500 leading-relaxed">
                    Explore our curated placeholder concept projects illustrating how NusaWeb Studio designs and engineers digital solutions across industries.
                </p>
            </div>

            <!-- Kontrol Filter & Pencarian -->
            <div class="flex flex-col lg:flex-row lg:items-center justify-between gap-4 mb-4">
                
                <!-- Tab Filter Tipe Project -->
                <div class="bg-white border border-slate-200/80 rounded-xl p-1 inline-flex items-center gap-1 overflow-x-auto max-w-full shadow-2xs">
                    <template x-for="tab in ['All', 'Website', 'Web Application', 'Mobile Application']" :key="tab">
                        <button
                            type="button"
                            @click="activeTab = tab"
                            :class="activeTab === tab 
                                ? 'bg-[#123456] text-white font-semibold shadow-2xs' 
                                : 'text-slate-600 hover:text-[#16375b] hover:bg-slate-50 font-medium'"
                            class="px-3.5 py-2 rounded-lg text-xs whitespace-nowrap transition-colors cursor-pointer"
                            x-text="tab"
                        ></button>
                    </template>
                </div>

                <!-- Input Search & Dropdown Kategori -->
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 w-full lg:w-auto">
                    <!-- Search Input -->
                    <div class="relative w-full sm:w-64">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 absolute left-3.5 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.85-5.15a7 7 0 11-14 0 7 7 0 0114 0z" />
                        </svg>
                        <input 
                            type="text" 
                            x-model="search"
                            placeholder="Search project or tech..." 
                            class="w-full bg-white border border-slate-200/80 rounded-xl pl-9 pr-4 py-2 text-xs text-slate-700 placeholder:text-slate-400 focus:outline-none focus:border-[#138A63] transition-colors shadow-2xs"
                        >
                    </div>

                    <!-- Category Select -->
                    <div class="relative w-full sm:w-48">
                        <select 
                            x-model="selectedCategory"
                            aria-label="Filter by category"
                            class="w-full appearance-none bg-white border border-slate-200/80 rounded-xl pl-3.5 pr-9 py-2 text-xs text-slate-700 font-medium focus:outline-none focus:border-[#138A63] transition-colors shadow-2xs cursor-pointer"
                        >
                            <option value="All Categories">All Categories</option>
                            <option value="Company Profile Website">Company Profile Website</option>
                            <option value="E-Commerce Website">E-Commerce Website</option>
                            <option value="Landing Page">Landing Page</option>
                            <option value="Web Application">Web Application</option>
                            <option value="Dashboard & Admin Panel">Dashboard &amp; Admin Panel</option>
                            <option value="Mobile Application">Mobile Application</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 text-slate-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                        </svg>
                    </div>
                </div>
            </div>

            <!-- Keterangan Jumlah Showcase -->
            <p class="text-[11px] sm:text-xs text-slate-400">
                Showing <span class="font-semibold text-slate-600">6</span> concept showcases &middot; Clearly marked placeholder projects until live client works are added.
            </p>

        </div>
    </div>

    <!-- 2. PORTFOLIO CARDS GRID & CTA BANNER -->
    <div class="bg-white py-12 sm:py-16">
        <div class="w-[90%] lg:w-[84%] mx-auto space-y-14 sm:space-y-16">

            <!-- Grid 3 Kolom -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">

                <!-- CARD 1: Arsitektur Nusantara Corporate Concept -->
                <article 
                    x-show="matches('Website', 'Company Profile Website', 'Arsitektur Nusantara Corporate Concept', 'React TypeScript Tailwind CSS')"
                    class="bg-white border border-slate-200/80 rounded-2xl p-4 sm:p-5 flex flex-col justify-between hover:border-slate-300 hover:shadow-sm transition-all"
                >
                    <div>
                        <!-- Browser Mockup Preview -->
                        <div class="bg-[#f1f5f9] border border-slate-200/60 rounded-xl p-2.5 mb-5">
                            <div class="bg-white rounded-lg overflow-hidden border border-slate-200/70 shadow-2xs">
                                <!-- Top Bar Browser -->
                                <div class="bg-[#123456] px-2.5 py-1.5 flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-1 shrink-0">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                    </div>
                                    <span class="text-[8px] text-slate-300 truncate">Arsitektur Nusantara Corporate Con...</span>
                                    <span class="text-[7px] font-semibold tracking-wider uppercase bg-white/10 text-slate-200 px-1.5 py-0.5 rounded shrink-0">CONCEPT</span>
                                </div>
                                <!-- Isi Mini UI -->
                                <div class="p-3 bg-slate-50/70 grid grid-cols-12 gap-2.5 items-stretch min-h-[126px]">
                                    <div class="col-span-7 flex flex-col justify-between">
                                        <div>
                                            <span class="block text-[7px] font-semibold text-[#138A63] mb-1">Architectural Profile</span>
                                            <p class="text-[10px] font-bold text-[#16375b] leading-tight">
                                                Precision Structures &amp; Civic Engineering
                                            </p>
                                        </div>
                                        <div class="flex items-center gap-1.5 mt-2">
                                            <span class="bg-[#138A63] text-white text-[7px] font-medium px-2 py-1 rounded leading-tight">Explore Projects</span>
                                            <span class="bg-white border border-slate-200 text-[#16375b] text-[7px] font-medium px-2 py-1 rounded leading-tight">Company Brief</span>
                                        </div>
                                    </div>
                                    <div class="col-span-5 bg-[#123456] rounded-lg p-2.5 text-white flex flex-col justify-between">
                                        <div class="w-4 h-4 rounded bg-white/10 flex items-center justify-center text-[#20c997]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-2.5 w-2.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5" />
                                            </svg>
                                        </div>
                                        <div>
                                            <span class="block text-[6px] text-slate-300">Showcase Metric</span>
                                            <span class="block text-xs font-bold leading-tight mt-0.5">120+</span>
                                            <span class="block text-[7px] text-slate-300">Blueprints</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Info Project -->
                        <div class="flex items-center gap-1.5 text-[11px] mb-1.5">
                            <span class="font-semibold text-[#138A63]">Company Profile Website</span>
                            <span class="text-slate-300">&middot;</span>
                            <span class="text-slate-400">Placeholder Concept</span>
                        </div>
                        <h2 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            Arsitektur Nusantara Corporate Concept
                        </h2>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Editorial company profile concept crafted for architectural and engineering firms seeking high-trust project storytelling.
                        </p>
                    </div>

                    <!-- Footer Card -->
                    <div class="border-t border-slate-100 pt-3.5 mt-5 flex items-center justify-between gap-2">
                        <span class="text-[11px] text-slate-400 truncate">
                            React &middot; TypeScript &middot; Tailwind CSS &middot; ...
                        </span>
                        <a href="#" class="inline-flex items-center gap-1 bg-[#f1f5f9] hover:bg-slate-200/80 text-[#16375b] text-[11px] font-semibold px-3 py-1.5 rounded-lg shrink-0 transition-colors">
                            <span>View Project</span>
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </article>

                <!-- CARD 2: Karya Commerce Retail Storefront -->
                <article 
                    x-show="matches('Website', 'E-Commerce Website', 'Karya Commerce Retail Storefront', 'Next.js TypeScript Tailwind CSS')"
                    class="bg-white border border-slate-200/80 rounded-2xl p-4 sm:p-5 flex flex-col justify-between hover:border-slate-300 hover:shadow-sm transition-all"
                >
                    <div>
                        <!-- Browser Mockup Preview -->
                        <div class="bg-[#f1f5f9] border border-slate-200/60 rounded-xl p-2.5 mb-5">
                            <div class="bg-white rounded-lg overflow-hidden border border-slate-200/70 shadow-2xs">
                                <div class="bg-[#123456] px-2.5 py-1.5 flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-1 shrink-0">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                    </div>
                                    <span class="text-[8px] text-slate-300 truncate">Karya Commerce Retail Storefront</span>
                                    <span class="text-[7px] font-semibold tracking-wider uppercase bg-white/10 text-slate-200 px-1.5 py-0.5 rounded shrink-0">CONCEPT</span>
                                </div>
                                <div class="p-3 bg-slate-50/70 min-h-[126px] flex flex-col justify-between">
                                    <div class="flex items-center justify-between mb-2">
                                        <span class="text-[9px] font-bold text-[#16375b]">Karya Storefront</span>
                                        <span class="bg-emerald-50 text-[#138A63] border border-emerald-200/60 text-[7px] font-semibold px-1.5 py-0.5 rounded">Bag (2)</span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-1.5">
                                        <div class="bg-white border border-slate-200/70 rounded p-1.5">
                                            <div class="h-9 rounded bg-emerald-100/80 mb-1.5"></div>
                                            <p class="text-[7px] font-semibold text-[#16375b] truncate">Canvas Tote</p>
                                            <p class="text-[6px] text-slate-400">Rp 245k</p>
                                        </div>
                                        <div class="bg-white border border-slate-200/70 rounded p-1.5">
                                            <div class="h-9 rounded bg-[#123456] mb-1.5"></div>
                                            <p class="text-[7px] font-semibold text-[#16375b] truncate">Desk Lamp</p>
                                            <p class="text-[6px] text-slate-400">Rp 590k</p>
                                        </div>
                                        <div class="bg-white border border-slate-200/70 rounded p-1.5">
                                            <div class="h-9 rounded bg-emerald-100/80 mb-1.5"></div>
                                            <p class="text-[7px] font-semibold text-[#16375b] truncate">Ceramic Set</p>
                                            <p class="text-[6px] text-slate-400">Rp 380k</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-1.5 text-[11px] mb-1.5">
                            <span class="font-semibold text-[#138A63]">E-Commerce Website</span>
                            <span class="text-slate-300">&middot;</span>
                            <span class="text-slate-400">Placeholder Concept</span>
                        </div>
                        <h2 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            Karya Commerce Retail Storefront
                        </h2>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Modern direct-to-consumer e-commerce concept featuring instant variant filtering, slide-over cart, and mobile-first checkout.
                        </p>
                    </div>

                    <div class="border-t border-slate-100 pt-3.5 mt-5 flex items-center justify-between gap-2">
                        <span class="text-[11px] text-slate-400 truncate">
                            Next.js &middot; TypeScript &middot; Tailwind CSS &middot; ...
                        </span>
                        <a href="#" class="inline-flex items-center gap-1 bg-[#f1f5f9] hover:bg-slate-200/80 text-[#16375b] text-[11px] font-semibold px-3 py-1.5 rounded-lg shrink-0 transition-colors">
                            <span>View Project</span>
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </article>

                <!-- CARD 3: Surya Cloud Product Launch Page -->
                <article 
                    x-show="matches('Website', 'Landing Page', 'Surya Cloud Product Launch Page', 'React TypeScript Tailwind CSS Vite')"
                    class="bg-white border border-slate-200/80 rounded-2xl p-4 sm:p-5 flex flex-col justify-between hover:border-slate-300 hover:shadow-sm transition-all"
                >
                    <div>
                        <!-- Browser Mockup Preview -->
                        <div class="bg-[#f1f5f9] border border-slate-200/60 rounded-xl p-2.5 mb-5">
                            <div class="bg-white rounded-lg overflow-hidden border border-slate-200/70 shadow-2xs">
                                <div class="bg-[#123456] px-2.5 py-1.5 flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-1 shrink-0">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                    </div>
                                    <span class="text-[8px] text-slate-300 truncate">Surya Cloud Product Launch Page</span>
                                    <span class="text-[7px] font-semibold tracking-wider uppercase bg-white/10 text-slate-200 px-1.5 py-0.5 rounded shrink-0">CONCEPT</span>
                                </div>
                                <div class="p-3 bg-slate-50/70 min-h-[126px] flex flex-col justify-between">
                                    <div>
                                        <span class="block text-[7px] font-semibold text-[#138A63] mb-1">Cloud Infrastructure</span>
                                        <p class="text-[11px] font-bold text-[#16375b] leading-tight mb-1">
                                            Deploy regional workloads in seconds.
                                        </p>
                                        <p class="text-[7px] text-slate-400">
                                            Automated scaling, observability, and predictable flat pricing.
                                        </p>
                                    </div>
                                    <div class="grid grid-cols-3 gap-1.5 mt-2">
                                        <div class="bg-white border border-slate-200/80 rounded py-1.5 px-1 text-center text-[7px] font-semibold text-[#16375b]">99.99% SLA</div>
                                        <div class="bg-white border border-slate-200/80 rounded py-1.5 px-1 text-center text-[7px] font-semibold text-[#16375b]">&lt; 18ms Edge</div>
                                        <div class="bg-white border border-slate-200/80 rounded py-1.5 px-1 text-center text-[7px] font-semibold text-[#16375b]">SOC2 Ready</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-1.5 text-[11px] mb-1.5">
                            <span class="font-semibold text-[#138A63]">Landing Page</span>
                            <span class="text-slate-300">&middot;</span>
                            <span class="text-slate-400">Placeholder Concept</span>
                        </div>
                        <h2 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            Surya Cloud Product Launch Page
                        </h2>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Conversion-focused SaaS launch landing page structured around clear value propositions, interactive tier comparisons, and lead capture.
                        </p>
                    </div>

                    <div class="border-t border-slate-100 pt-3.5 mt-5 flex items-center justify-between gap-2">
                        <span class="text-[11px] text-slate-400 truncate">
                            React &middot; TypeScript &middot; Tailwind CSS &middot; V...
                        </span>
                        <a href="#" class="inline-flex items-center gap-1 bg-[#f1f5f9] hover:bg-slate-200/80 text-[#16375b] text-[11px] font-semibold px-3 py-1.5 rounded-lg shrink-0 transition-colors">
                            <span>View Project</span>
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </article>

                <!-- CARD 4: FlowDesk Operations Web Portal -->
                <article 
                    x-show="matches('Web Application', 'Web Application', 'FlowDesk Operations Web Portal', 'React TypeScript Node.js Express')"
                    class="bg-white border border-slate-200/80 rounded-2xl p-4 sm:p-5 flex flex-col justify-between hover:border-slate-300 hover:shadow-sm transition-all"
                >
                    <div>
                        <!-- Browser Mockup Preview -->
                        <div class="bg-[#f1f5f9] border border-slate-200/60 rounded-xl p-2.5 mb-5">
                            <div class="bg-white rounded-lg overflow-hidden border border-slate-200/70 shadow-2xs">
                                <div class="bg-[#123456] px-2.5 py-1.5 flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-1 shrink-0">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                    </div>
                                    <span class="text-[8px] text-slate-300 truncate">FlowDesk Operations Web Portal</span>
                                    <span class="text-[7px] font-semibold tracking-wider uppercase bg-white/10 text-slate-200 px-1.5 py-0.5 rounded shrink-0">CONCEPT</span>
                                </div>
                                <div class="p-2.5 bg-slate-50/70 grid grid-cols-12 gap-2 min-h-[126px]">
                                    <!-- Sidebar -->
                                    <div class="col-span-4 bg-white border border-slate-200/70 rounded p-1.5 space-y-1 text-[7px]">
                                        <div class="px-1.5 py-0.5 text-slate-400">Overview</div>
                                        <div class="px-1.5 py-0.5 bg-[#123456] text-white font-semibold rounded">Milestones</div>
                                        <div class="px-1.5 py-0.5 text-slate-400">Approvals</div>
                                        <div class="px-1.5 py-0.5 text-slate-400">Invoices</div>
                                    </div>
                                    <!-- Main Panel -->
                                    <div class="col-span-8 bg-white border border-slate-200/70 rounded p-2 flex flex-col justify-between">
                                        <div class="flex items-center justify-between mb-1.5">
                                            <span class="text-[8px] font-bold text-[#16375b]">Active Sprint Queue</span>
                                            <span class="text-[7px] font-semibold text-[#138A63]">6 On Track</span>
                                        </div>
                                        <div class="space-y-1 text-[7px]">
                                            <div class="flex items-center justify-between bg-slate-50 px-1.5 py-1 rounded border border-slate-100">
                                                <span class="text-[#16375b] font-medium">API Gateway v2</span>
                                                <span class="bg-emerald-50 text-[#138A63] px-1 rounded font-semibold">Approved</span>
                                            </div>
                                            <div class="flex items-center justify-between bg-slate-50 px-1.5 py-1 rounded border border-slate-100">
                                                <span class="text-[#16375b] font-medium">Client Portal QA</span>
                                                <span class="text-slate-400">In Review</span>
                                            </div>
                                            <div class="flex items-center justify-between bg-slate-50 px-1.5 py-1 rounded border border-slate-100">
                                                <span class="text-[#16375b] font-medium">Billing Sync</span>
                                                <span class="text-slate-400">In Review</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-1.5 text-[11px] mb-1.5">
                            <span class="font-semibold text-[#138A63]">Web Application</span>
                            <span class="text-slate-300">&middot;</span>
                            <span class="text-slate-400">Placeholder Concept</span>
                        </div>
                        <h2 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            FlowDesk Operations Web Portal
                        </h2>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Unified client &amp; internal operations web application concept for tracking project milestones, approvals, and automated billing.
                        </p>
                    </div>

                    <div class="border-t border-slate-100 pt-3.5 mt-5 flex items-center justify-between gap-2">
                        <span class="text-[11px] text-slate-400 truncate">
                            React &middot; TypeScript &middot; Node.js &middot; Expres...
                        </span>
                        <a href="#" class="inline-flex items-center gap-1 bg-[#f1f5f9] hover:bg-slate-200/80 text-[#16375b] text-[11px] font-semibold px-3 py-1.5 rounded-lg shrink-0 transition-colors">
                            <span>View Project</span>
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </article>

                <!-- CARD 5: Metrika BI Control Suite -->
                <article 
                    x-show="matches('Web Application', 'Dashboard & Admin Panel', 'Metrika BI Control Suite', 'React TypeScript Tailwind CSS Recharts')"
                    class="bg-white border border-slate-200/80 rounded-2xl p-4 sm:p-5 flex flex-col justify-between hover:border-slate-300 hover:shadow-sm transition-all"
                >
                    <div>
                        <!-- Browser Mockup Preview -->
                        <div class="bg-[#f1f5f9] border border-slate-200/60 rounded-xl p-2.5 mb-5">
                            <div class="bg-white rounded-lg overflow-hidden border border-slate-200/70 shadow-2xs">
                                <div class="bg-[#123456] px-2.5 py-1.5 flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-1 shrink-0">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                    </div>
                                    <span class="text-[8px] text-slate-300 truncate">Metrika BI Control Suite</span>
                                    <span class="text-[7px] font-semibold tracking-wider uppercase bg-white/10 text-slate-200 px-1.5 py-0.5 rounded shrink-0">CONCEPT</span>
                                </div>
                                <div class="p-2.5 bg-slate-50/70 min-h-[126px] flex flex-col justify-between gap-2">
                                    <!-- Top KPIs -->
                                    <div class="grid grid-cols-3 gap-1.5">
                                        <div class="bg-white border border-slate-200/70 rounded p-1.5">
                                            <span class="block text-[6px] text-slate-400">Revenue MTD</span>
                                            <span class="text-[9px] font-bold text-[#16375b]">Rp 428M</span>
                                        </div>
                                        <div class="bg-white border border-slate-200/70 rounded p-1.5">
                                            <span class="block text-[6px] text-slate-400">Fulfillment</span>
                                            <span class="text-[9px] font-bold text-[#138A63]">98.4%</span>
                                        </div>
                                        <div class="bg-white border border-slate-200/70 rounded p-1.5">
                                            <span class="block text-[6px] text-slate-400">Active Branches</span>
                                            <span class="text-[9px] font-bold text-[#16375b]">14</span>
                                        </div>
                                    </div>
                                    <!-- Mini Bar Chart -->
                                    <div class="bg-white border border-slate-200/70 rounded p-2 flex items-end justify-between gap-1.5 h-16">
                                        <span class="w-full bg-[#334e68] rounded-t h-6"></span>
                                        <span class="w-full bg-[#334e68] rounded-t h-8"></span>
                                        <span class="w-full bg-[#334e68] rounded-t h-7"></span>
                                        <span class="w-full bg-[#334e68] rounded-t h-10"></span>
                                        <span class="w-full bg-[#334e68] rounded-t h-9"></span>
                                        <span class="w-full bg-[#138A63] rounded-t h-11"></span>
                                        <span class="w-full bg-[#138A63] rounded-t h-10"></span>
                                        <span class="w-full bg-[#138A63] rounded-t h-12"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-1.5 text-[11px] mb-1.5">
                            <span class="font-semibold text-[#138A63]">Dashboard &amp; Admin Panel</span>
                            <span class="text-slate-300">&middot;</span>
                            <span class="text-slate-400">Placeholder Concept</span>
                        </div>
                        <h2 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            Metrika BI Control Suite
                        </h2>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Executive analytics and admin control panel concept with tabular financial figures, multi-branch KPIs, and clean data filtering.
                        </p>
                    </div>

                    <div class="border-t border-slate-100 pt-3.5 mt-5 flex items-center justify-between gap-2">
                        <span class="text-[11px] text-slate-400 truncate">
                            React &middot; TypeScript &middot; Tailwind CSS &middot; R...
                        </span>
                        <a href="#" class="inline-flex items-center gap-1 bg-[#f1f5f9] hover:bg-slate-200/80 text-[#16375b] text-[11px] font-semibold px-3 py-1.5 rounded-lg shrink-0 transition-colors">
                            <span>View Project</span>
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </article>

                <!-- CARD 6: NusaPay Field Companion App -->
                <article 
                    x-show="matches('Mobile Application', 'Mobile Application', 'NusaPay Field Companion App', 'React Native TypeScript Node.js')"
                    class="bg-white border border-slate-200/80 rounded-2xl p-4 sm:p-5 flex flex-col justify-between hover:border-slate-300 hover:shadow-sm transition-all"
                >
                    <div>
                        <!-- Browser Mockup Preview -->
                        <div class="bg-[#f1f5f9] border border-slate-200/60 rounded-xl p-2.5 mb-5">
                            <div class="bg-white rounded-lg overflow-hidden border border-slate-200/70 shadow-2xs">
                                <div class="bg-[#123456] px-2.5 py-1.5 flex items-center justify-between gap-2">
                                    <div class="flex items-center gap-1 shrink-0">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                        <span class="w-1.5 h-1.5 rounded-full bg-white/30"></span>
                                    </div>
                                    <span class="text-[8px] text-slate-300 truncate">NusaPay Field Companion App</span>
                                    <span class="text-[7px] font-semibold tracking-wider uppercase bg-white/10 text-slate-200 px-1.5 py-0.5 rounded shrink-0">CONCEPT</span>
                                </div>
                                <div class="p-3 bg-slate-50/70 min-h-[126px] flex items-center justify-center gap-3">
                                    <!-- Mobile Screen 1 -->
                                    <div class="w-24 bg-white border-2 border-[#123456] rounded-xl p-2 flex flex-col justify-between h-24 shadow-2xs">
                                        <div>
                                            <span class="block text-[6px] text-slate-400">Field Orders</span>
                                            <span class="text-[9px] font-bold text-[#16375b]">24 Today</span>
                                        </div>
                                        <span class="block w-full text-center bg-[#138A63] text-white text-[6px] font-semibold py-1 rounded">
                                            Open View
                                        </span>
                                    </div>
                                    <!-- Mobile Screen 2 -->
                                    <div class="w-24 bg-white border-2 border-[#123456] rounded-xl p-2 flex flex-col justify-between h-24 shadow-2xs">
                                        <div>
                                            <span class="block text-[6px] text-slate-400">Sync Status</span>
                                            <span class="text-[9px] font-bold text-[#138A63]">Offline Ready</span>
                                        </div>
                                        <span class="block w-full text-center bg-emerald-50 text-[#138A63] text-[6px] font-semibold py-1 rounded">
                                            Open View
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-1.5 text-[11px] mb-1.5">
                            <span class="font-semibold text-[#138A63]">Mobile Application</span>
                            <span class="text-slate-300">&middot;</span>
                            <span class="text-slate-400">Placeholder Concept</span>
                        </div>
                        <h2 class="text-base font-bold text-[#16375b] leading-snug mb-2">
                            NusaPay Field Companion App
                        </h2>
                        <p class="text-xs text-slate-500 leading-relaxed">
                            Cross-platform mobile application concept for field sales and logistics teams featuring offline-resilient sync and instant invoicing.
                        </p>
                    </div>

                    <div class="border-t border-slate-100 pt-3.5 mt-5 flex items-center justify-between gap-2">
                        <span class="text-[11px] text-slate-400 truncate">
                            React Native &middot; TypeScript &middot; Node.js &middot; ...
                        </span>
                        <a href="#" class="inline-flex items-center gap-1 bg-[#f1f5f9] hover:bg-slate-200/80 text-[#16375b] text-[11px] font-semibold px-3 py-1.5 rounded-lg shrink-0 transition-colors">
                            <span>View Project</span>
                            <span aria-hidden="true">&rarr;</span>
                        </a>
                    </div>
                </article>

            </div>

            <!-- 3. BOTTOM CTA BANNER -->
            <div class="bg-[#123456] rounded-2xl p-7 sm:p-10 lg:px-12 lg:py-10 text-white flex flex-col lg:flex-row items-start lg:items-center justify-between gap-6">
                <div class="max-w-xl space-y-2">
                    <h2 class="text-xl sm:text-2xl font-bold tracking-tight text-white">
                        Looking for a custom build tailored to your industry?
                    </h2>
                    <p class="text-xs sm:text-sm text-slate-300 leading-relaxed">
                        Share your requirements and our team will prepare a scope proposal and timeline estimate.
                    </p>
                </div>

                <a href="https://wa.me/6281234567890" class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs sm:text-sm font-medium px-5 py-3 rounded-lg shadow-sm transition-colors w-full sm:w-auto shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                        <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                    </svg>
                    <span>Pesan Sekarang via WhatsApp</span>
                </a>
            </div>

        </div>
    </div>

</section>