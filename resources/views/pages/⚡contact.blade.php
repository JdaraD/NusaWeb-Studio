<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<section class="w-full text-slate-800">

    <!-- 1. HERO HEADER -->
    <div class="bg-[#f6f8fa] border-b border-slate-200/70 py-10">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            <div class="max-w-2xl">
                <p class="text-xs sm:text-sm font-semibold text-[#138A63] mb-3">
                    Start a Conversation
                </p>
                <h1 class="text-3xl sm:text-4xl lg:text-[42px] font-bold text-[#16375b] tracking-tight leading-[1.18] mb-4">
                    Let&rsquo;s Discuss Your Next Digital Project
                </h1>
                <p class="text-sm sm:text-base text-slate-500 leading-relaxed">
                    Submit your project brief below for a structured estimate, or reach us directly on WhatsApp for rapid consultation.
                </p>
            </div>
        </div>
    </div>

    <!-- 2. PROJECT INQUIRY FORM & STUDIO CONTACT DETAILS -->
    <div class="bg-white py-14 sm:py-20">
        <div class="w-[90%] lg:w-[84%] mx-auto">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-7 lg:gap-8 items-start">

                <!-- Kolom Kiri: Project Inquiry Form -->
                <div class="lg:col-span-7 bg-white border border-slate-200/80 rounded-2xl p-6 sm:p-8 shadow-2xs">
                    <div class="border-b border-slate-100 pb-4 mb-6">
                        <h2 class="text-lg sm:text-xl font-bold text-[#16375b]">
                            Project Inquiry Form
                        </h2>
                        <p class="text-xs text-slate-400 mt-1">
                            Fields marked with * are required.
                        </p>
                    </div>

                    <form action="#" method="POST" class="space-y-4 sm:space-y-5">
                        @csrf
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-5">
                            <!-- Full Name -->
                            <div>
                                <label for="full_name" class="block text-xs font-semibold text-[#16375b] mb-1.5">
                                    Full Name <span class="text-[#138A63]">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="full_name" 
                                    name="full_name" 
                                    required
                                    placeholder="e.g. Andi Pratama"
                                    class="w-full bg-white border border-slate-200/90 rounded-lg px-3.5 py-2.5 text-xs sm:text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none focus:border-[#138A63] transition-colors"
                                >
                            </div>

                            <!-- Email Address -->
                            <div>
                                <label for="email" class="block text-xs font-semibold text-[#16375b] mb-1.5">
                                    Email Address <span class="text-[#138A63]">*</span>
                                </label>
                                <input 
                                    type="email" 
                                    id="email" 
                                    name="email" 
                                    required
                                    placeholder="you@company.com"
                                    class="w-full bg-white border border-slate-200/90 rounded-lg px-3.5 py-2.5 text-xs sm:text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none focus:border-[#138A63] transition-colors"
                                >
                            </div>

                            <!-- Phone / WhatsApp -->
                            <div>
                                <label for="phone" class="block text-xs font-semibold text-[#16375b] mb-1.5">
                                    Phone / WhatsApp <span class="text-[#138A63]">*</span>
                                </label>
                                <input 
                                    type="tel" 
                                    id="phone" 
                                    name="phone" 
                                    required
                                    placeholder="+62 812 xxxx xxxx"
                                    class="w-full bg-white border border-slate-200/90 rounded-lg px-3.5 py-2.5 text-xs sm:text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none focus:border-[#138A63] transition-colors"
                                >
                            </div>

                            <!-- Company Name -->
                            <div>
                                <label for="company" class="block text-xs font-semibold text-[#16375b] mb-1.5">
                                    Company Name <span class="font-normal text-slate-400">(Optional)</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="company" 
                                    name="company"
                                    placeholder="PT / Studio / Brand Name"
                                    class="w-full bg-white border border-slate-200/90 rounded-lg px-3.5 py-2.5 text-xs sm:text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none focus:border-[#138A63] transition-colors"
                                >
                            </div>

                            <!-- Service Interested In -->
                            <div>
                                <label for="service" class="block text-xs font-semibold text-[#16375b] mb-1.5">
                                    Service Interested In <span class="text-[#138A63]">*</span>
                                </label>
                                <div class="relative">
                                    <select 
                                        id="service" 
                                        name="service" 
                                        required
                                        class="w-full appearance-none bg-white border border-slate-200/90 rounded-lg pl-3.5 pr-9 py-2.5 text-xs sm:text-sm text-slate-700 focus:outline-none focus:border-[#138A63] transition-colors cursor-pointer"
                                    >
                                        <option value="Website Development" selected>Website Development</option>
                                        <option value="Company Profile Website">Company Profile Website</option>
                                        <option value="E-Commerce Development">E-Commerce Development</option>
                                        <option value="Web Application Development">Web Application Development</option>
                                        <option value="Custom Software Development">Custom Software Development</option>
                                        <option value="UI/UX Design">UI/UX Design</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>

                            <!-- Estimated Budget -->
                            <div>
                                <label for="budget" class="block text-xs font-semibold text-[#16375b] mb-1.5">
                                    Estimated Budget <span class="font-normal text-slate-400">(Optional)</span>
                                </label>
                                <div class="relative">
                                    <select 
                                        id="budget" 
                                        name="budget"
                                        class="w-full appearance-none bg-white border border-slate-200/90 rounded-lg pl-3.5 pr-9 py-2.5 text-xs sm:text-sm text-slate-500 focus:outline-none focus:border-[#138A63] transition-colors cursor-pointer"
                                    >
                                        <option value="" selected>Select estimated range</option>
                                        <option value="Rp 5 Juta - Rp 15 Juta">Rp 5 Juta &ndash; Rp 15 Juta</option>
                                        <option value="Rp 15 Juta - Rp 35 Juta">Rp 15 Juta &ndash; Rp 35 Juta</option>
                                        <option value="Rp 35 Juta - Rp 75 Juta">Rp 35 Juta &ndash; Rp 75 Juta</option>
                                        <option value="> Rp 75 Juta">&gt; Rp 75 Juta</option>
                                    </select>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-slate-400 absolute right-3 top-1/2 -translate-y-1/2 pointer-events-none" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <!-- Project Description -->
                        <div>
                            <label for="description" class="block text-xs font-semibold text-[#16375b] mb-1.5">
                                Project Description <span class="text-[#138A63]">*</span>
                            </label>
                            <textarea 
                                id="description" 
                                name="description" 
                                rows="4" 
                                required
                                placeholder="Describe your business goals, target launch timeline, and key features needed..."
                                class="w-full bg-white border border-slate-200/90 rounded-lg px-3.5 py-2.5 text-xs sm:text-sm text-slate-700 placeholder:text-slate-400 focus:outline-none focus:border-[#138A63] transition-colors resize-y"
                            ></textarea>
                        </div>

                        <!-- Submit & WhatsApp Buttons -->
                        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-2">
                            <button 
                                type="submit" 
                                class="inline-flex items-center justify-center gap-2 bg-[#123456] hover:bg-[#0d2640] text-white text-xs sm:text-sm font-medium px-5 py-3 rounded-lg shadow-2xs transition-colors cursor-pointer"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8" />
                                </svg>
                                <span>Submit Project Inquiry</span>
                            </button>

                            <a 
                                href="https://wa.me/6281234567890" 
                                class="inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs sm:text-sm font-medium px-5 py-3 rounded-lg shadow-2xs transition-colors"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                                </svg>
                                <span>Pesan Sekarang via WhatsApp</span>
                            </a>
                        </div>
                    </form>
                </div>

                <!-- Kolom Kanan: Instant Consultation & Studio Details -->
                <div class="lg:col-span-5 space-y-6">

                    <!-- Card 1: Instant Consultation -->
                    <div class="bg-[#123456] rounded-2xl p-6 sm:p-7 text-white shadow-2xs">
                        <p class="text-xs font-medium text-[#20c997] mb-2">
                            Instant Consultation
                        </p>
                        <h2 class="text-lg sm:text-xl font-bold leading-snug text-white mb-2.5">
                            Prefer chatting directly on WhatsApp?
                        </h2>
                        <p class="text-xs sm:text-sm text-slate-300 leading-relaxed mb-6">
                            Skip long email chains. Start a structured WhatsApp consultation with our team right away.
                        </p>
                        <a 
                            href="https://wa.me/6281234567890" 
                            class="w-full inline-flex items-center justify-center gap-2 bg-[#138A63] hover:bg-[#0f7050] text-white text-xs sm:text-sm font-medium py-3 px-4 rounded-lg shadow-sm transition-colors"
                        >
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 fill-current" viewBox="0 0 24 24">
                                <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                            </svg>
                            <span>Pesan Sekarang via WhatsApp</span>
                        </a>
                    </div>

                    <!-- Card 2: Studio Contact Details -->
                    <div class="bg-[#f6f8fa] border border-slate-200/80 rounded-2xl p-6 sm:p-7">
                        <h2 class="text-base sm:text-lg font-bold text-[#16375b] mb-5">
                            Studio Contact Details
                        </h2>

                        <ul class="space-y-4">
                            <!-- Email -->
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                                <div>
                                    <span class="block text-[11px] text-slate-400">Email</span>
                                    <a href="mailto:hello@nusaweb.studio" class="text-xs sm:text-sm font-semibold text-[#16375b] hover:text-[#138A63] transition-colors">
                                        hello@nusaweb.studio
                                    </a>
                                </div>
                            </li>

                            <!-- WhatsApp Business -->
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-1 fill-current" viewBox="0 0 24 24">
                                    <path d="M12.031 6.172c-3.181 0-5.767 2.586-5.768 5.766-.001 1.298.38 2.27 1.019 3.287l-.582 2.128 2.182-.573c.978.58 1.911.928 3.145.929 3.178 0 5.767-2.587 5.768-5.766.001-3.187-2.575-5.77-5.764-5.771zm3.392 8.244c-.144.405-.837.774-1.17.824-.299.045-.677.063-1.092-.069-.252-.08-.575-.187-.988-.365-1.739-.751-2.874-2.502-2.961-2.617-.087-.116-.708-.94-.708-1.793s.448-1.273.607-1.446c.159-.173.346-.217.462-.217l.332.006c.106.005.249-.04.39.298.144.347.491 1.2.534 1.287.043.087.072.188.014.304-.058.116-.087.188-.173.289l-.26.304c-.087.086-.177.18-.076.354.101.174.449.741.964 1.201.662.591 1.221.774 1.394.86s.274.072.376-.043c.101-.116.433-.506.549-.68.116-.173.231-.145.39-.087s1.011.477 1.184.564.289.13.332.202c.045.072.045.419-.1.824zm-3.423-14.416c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm.029 18.88c-1.161 0-2.305-.292-3.318-.844l-3.677.964.984-3.595c-.607-1.052-.927-2.246-.926-3.468.001-3.825 3.113-6.937 6.937-6.937 1.856.001 3.598.723 4.907 2.034 1.31 1.311 2.031 3.054 2.03 4.908-.001 3.825-3.113 6.938-6.937 6.938z"/>
                                </svg>
                                <div>
                                    <span class="block text-[11px] text-slate-400">WhatsApp Business</span>
                                    <a href="https://wa.me/6281234567890" class="text-xs sm:text-sm font-semibold text-[#16375b] hover:text-[#138A63] transition-colors">
                                        +62 812-3456-7890
                                    </a>
                                </div>
                            </li>

                            <!-- Location -->
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                                <div>
                                    <span class="block text-[11px] text-slate-400">Location</span>
                                    <p class="text-xs sm:text-sm font-semibold text-[#16375b]">
                                        Jakarta &amp; Bandung, Indonesia
                                    </p>
                                </div>
                            </li>

                            <!-- Working Hours -->
                            <li class="flex items-start gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-[#138A63] shrink-0 mt-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.8">
                                    <circle cx="12" cy="12" r="9" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 7v5l3 2" />
                                </svg>
                                <div>
                                    <span class="block text-[11px] text-slate-400">Working Hours</span>
                                    <p class="text-xs sm:text-sm font-semibold text-[#16375b]">
                                        Mon &ndash; Fri &middot; 09:00 &ndash; 18:00 WIB
                                    </p>
                                </div>
                            </li>
                        </ul>

                        <!-- Social Links -->
                        <div class="border-t border-slate-200/80 mt-5 pt-4 flex flex-wrap items-center gap-2.5 text-xs font-medium text-[#16375b]">
                            <a href="#" class="hover:text-[#138A63] transition-colors">LinkedIn</a>
                            <span class="text-slate-300">&middot;</span>
                            <a href="#" class="hover:text-[#138A63] transition-colors">Instagram</a>
                            <span class="text-slate-300">&middot;</span>
                            <a href="#" class="hover:text-[#138A63] transition-colors">GitHub</a>
                            <span class="text-slate-300">&middot;</span>
                            <a href="#" class="hover:text-[#138A63] transition-colors">Dribbble</a>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <!-- 3. FREQUENTLY ASKED QUESTIONS (FAQ ACCORDION) -->
    <div x-data="{ activeFaq: 1 }" class="bg-[#f6f8fa] border-t border-slate-200/70 py-14 sm:py-20">
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
                                Fill out the Project Inquiry Form above or click the WhatsApp consultation button. Our team will review your goals and respond within one business day with recommended next steps.
                            </p>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>

</section>