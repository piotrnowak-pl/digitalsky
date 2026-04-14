<!DOCTYPE html>
<html lang="en" class="scroll-smooth"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Custom Software Development for SMEs | Process Automation | DIGITALSKY</title>
    <meta name="description" content="Bespoke web applications, CRM systems, API integrations and process automation for production, services and e-commerce businesses. Software built around YOUR business.">
    <meta name="keywords" content="custom software development, bespoke software development, process automation for SMEs, business workflow automation, tailored CRM systems, web application development, API integrations">
    <link rel="canonical" href="https://digitalsky.pl/">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://digitalsky.pl/">
    <meta property="og:title" content="Custom Software Development for SMEs | DIGITALSKY">
    <meta property="og:description" content="Bespoke web applications, CRM systems, API integrations and process automation. Software built around YOUR business.">
    <meta property="og:image" content="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Custom Software Development for SMEs | DIGITALSKY">
    <meta name="twitter:description" content="Bespoke web applications, CRM systems, API integrations and process automation. Software built around YOUR business.">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop">

    <!-- Schema.org -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "DIGITALSKY",
      "url": "https://digitalsky.pl",
      "email": "contact@digitalsky.pl",
      "telephone": "+48506323709",
      "description": "Custom software development, bespoke web applications, CRM systems and process automation for SMEs in production, services and e-commerce.",
      "foundingDate": "2016",
      "areaServed": ["PL","EU","US"],
      "serviceType": ["Custom Software Development","Process Automation","API Integration","CRM Development","SaaS Development"],
      "priceRange": "$$"
    }
    </script>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        @import url('https://api.fontshare.com/v2/css?f[]=satoshi@400,500&f[]=general-sans@400,500&display=swap');
        
        body {
            font-family: 'General Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6, .font-display {
            font-family: 'Satoshi', sans-serif;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up {
            animation: fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @media (min-width: 768px) {
            .hero-desc {
                font-size: 1.3rem;
                line-height: 1.75rem;
            }
        }
    </style>

    <script>
        const _initDark = localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);
        if (_initDark) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        // Set initial icon visibility after lucide renders (deferred to DOMContentLoaded)
        document.addEventListener('DOMContentLoaded', function() {
            const isDark = document.documentElement.classList.contains('dark');
            document.querySelectorAll('[data-theme-moon]').forEach(el => el.style.display = isDark ? 'none' : '');
            document.querySelectorAll('[data-theme-sun]').forEach(el  => el.style.display = isDark ? '' : 'none');
        });

        function toggleTheme() {
            const isDark = document.documentElement.classList.contains('dark');
            if (isDark) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
            // Update lucide icon manually (static SVGs don't react to class changes on <html>)
            const moonIcons = document.querySelectorAll('[data-theme-moon]');
            const sunIcons  = document.querySelectorAll('[data-theme-sun]');
            if (isDark) {
                moonIcons.forEach(el => el.style.display = '');
                sunIcons.forEach(el  => el.style.display = 'none');
            } else {
                moonIcons.forEach(el => el.style.display = 'none');
                sunIcons.forEach(el  => el.style.display = '');
            }
        }

        let isMenuOpen = false;
        function toggleMenu() {
            const menu = document.getElementById('mobile-menu');
            const body = document.body;
            isMenuOpen = !isMenuOpen;
            
            if (isMenuOpen) {
                menu.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-8');
                menu.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
                body.classList.add('overflow-hidden');
            } else {
                menu.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
                menu.classList.add('opacity-0', 'pointer-events-none', 'translate-y-8');
                body.classList.remove('overflow-hidden');
            }
        }

        function closeMenu() {
            if (isMenuOpen) toggleMenu();
        }
    </script>
</head>
<body class="bg-[#FAFAFA] text-slate-900 antialiased selection:bg-blue-600 selection:text-white dark:selection:bg-blue-500 dark:selection:text-black transition-colors duration-500 dark:bg-[#0a0a0a] dark:text-slate-50">

    <!-- Header -->
    <header class="fixed top-0 w-full z-50 bg-[#FAFAFA]/70 dark:bg-[#0a0a0a]/80 backdrop-blur-xl transition-colors duration-500 border-b border-black/5 dark:border-white/8">
        <div class="max-w-[1400px] mx-auto px-6 h-16 flex items-center justify-between relative">
            <a href="#" class="font-display font-medium tracking-tight text-xl z-50">
                <b>Digitalsky</b>
            </a>
            
            <!-- Desktop Minimalist Menu — centered to full header width -->
            <nav class="hidden md:flex items-center gap-8 text-base font-normal text-slate-500 dark:text-slate-400 absolute left-1/2 -translate-x-1/2">
                <a href="#services"   class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-services">Services</a>
                <a href="#industries" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-industries">Industries</a>
                <a href="#process"    class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-process">Process</a>
                <a href="#why-us"     class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-why">Why Us</a>
                <a href="#work"       class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-work">Work</a>
                <a href="#faq"        class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-faq">FAQ</a>
            </nav>

            <div class="flex items-center gap-4 z-50">
                <!-- Language toggle -->
                <div class="hidden md:flex items-center gap-1 text-sm text-slate-400">
                    <button id="lang-en" class="px-2 py-1 rounded hover:text-slate-900 dark:hover:text-white transition-colors font-semibold text-slate-900 dark:text-white">EN</button>
                    <span class="opacity-30">|</span>
                    <button id="lang-pl" class="px-2 py-1 rounded hover:text-slate-900 dark:hover:text-white transition-colors">PL</button>
                </div>

                <!-- Theme Toggle -->
                <button onclick="toggleTheme()" class="text-slate-500 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" aria-label="Toggle Dark Mode">
                    <i data-lucide="moon" data-theme-moon class="w-5 h-5"></i>
                    <i data-lucide="sun"  data-theme-sun  class="w-5 h-5" style="display:none"></i>
                </button>

                <a href="#contact" class="hidden md:inline-flex items-center justify-center bg-blue-600 text-white text-base font-medium py-2 px-6 rounded-[1rem] hover:bg-blue-700 transition-colors duration-300" data-i18n="nav-cta">Let's talk.</a>

                <!-- Mobile Menu Button -->
                <button onclick="toggleMenu()" class="md:hidden text-slate-900 dark:text-white p-2 -mr-2">
                    <i data-lucide="menu" class="w-6 h-6"></i>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div id="mobile-menu" class="fixed inset-0 z-40 bg-white/90 dark:bg-[#0a0a0a]/98 backdrop-blur-3xl flex-col items-center justify-center gap-10 px-6 text-center transition-all duration-700 ease-[cubic-bezier(0.16,1,0.3,1)] opacity-0 pointer-events-none translate-y-8 flex">
        <nav class="flex flex-col gap-8 text-4xl font-display font-medium tracking-tight">
            <a href="#services"   onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-services">Services</a>
            <a href="#industries" onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-industries">Industries</a>
            <a href="#process"    onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-process">Process</a>
            <a href="#why-us"     onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-why">Why Us</a>
            <a href="#work"       onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-work">Work</a>
            <a href="#faq"        onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors" data-i18n="nav-faq">FAQ</a>
        </nav>
        <!-- Mobile lang toggle -->
        <div class="flex items-center gap-3 text-lg text-slate-400">
            <button id="lang-en-mob" class="px-3 py-1 rounded hover:text-slate-900 dark:hover:text-white transition-colors">EN</button>
            <span class="opacity-30">|</span>
            <button id="lang-pl-mob" class="px-3 py-1 rounded hover:text-slate-900 dark:hover:text-white transition-colors">PL</button>
        </div>
        <a href="#contact" onclick="closeMenu()" class="mt-4 bg-blue-600 text-white text-xl font-medium py-4 px-8 rounded-[1rem] w-full max-w-sm hover:bg-blue-700 transition-colors" data-i18n="nav-cta">Let's talk.</a>
    </div>

    <main>
        <!-- 1. Hero Section -->
        <section class="relative pt-32 pb-16 md:pt-48 md:pb-32 px-6 max-w-[1400px] mx-auto min-h-[90vh] flex flex-col justify-center overflow-hidden">
            <div class="animate-fade-up max-w-5xl relative z-10">
                <h1 class="font-display text-5xl md:text-[5rem] lg:text-[5rem] tracking-tight font-medium leading-[0.97] mb-8" data-i18n="hero-h1">
                    Custom software built around your business. <br class="hidden md:block">
                    <span class="text-slate-400 dark:text-slate-600">Not the other way around.</span>
                </h1>
                <p class="hero-desc text-xl md:text-3xl text-slate-500 dark:text-slate-400 max-w-3xl leading-relaxed mb-12 font-normal" data-i18n="hero-p">
                    Struggling with chaotic processes, disconnected systems, and outdated software holding your growth back? <b>Digitalsky</b> designs custom web applications, process automation, and system integrations that fit <em>exactly</em> how your business works.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 items-center mb-16">
                    <a href="#contact" class="w-full sm:w-auto inline-flex items-center justify-center bg-[#2D2D2D] text-white text-lg font-medium py-4 px-8 rounded-[1rem] hover:bg-[#3a3a3a] hover:scale-105 transition-all duration-300" data-i18n="hero-cta1">
                        Let's Talk
                    </a>
                    <a href="#work" class="w-full sm:w-auto inline-flex items-center justify-center text-slate-900 dark:text-white text-lg font-medium py-4 px-8 rounded-[1rem] hover:bg-slate-100 dark:hover:bg-white/5 transition-colors duration-300" data-i18n="hero-cta2">
                        See case studies
                    </a>
                </div>

                <!-- Trust signals -->
                <div class="flex flex-col sm:flex-row gap-6 sm:gap-10 items-start sm:items-center">
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 bg-blue-50 dark:bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="check-circle" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <span class="text-base font-medium text-slate-700 dark:text-slate-300" data-i18n="trust-1">12+ custom systems delivered</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 bg-blue-50 dark:bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="trending-up" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <span class="text-base font-medium text-slate-700 dark:text-slate-300" data-i18n="trust-2">300% average process efficiency gain</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-9 h-9 bg-blue-50 dark:bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                            <i data-lucide="globe" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <span class="text-base font-medium text-slate-700 dark:text-slate-300" data-i18n="trust-3">Serving EU &amp; US SMEs since 2016</span>
                    </div>
                </div>
            </div>
            
            <!-- Abstract background shape -->
            <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[600px] h-[600px] bg-blue-500/20 dark:bg-blue-500/10 rounded-full blur-[120px] pointer-events-none -z-10"></div>
        </section>

        <!-- 2. Immersive Visual / Problem Section -->
        <section class="py-24 px-6 max-w-[1400px] mx-auto">
            <div class="bg-slate-100 dark:bg-[#141414] rounded-[1rem] md:rounded-[1rem] p-8 md:p-16 lg:p-24 overflow-hidden relative group border border-transparent dark:border-white/8">
                <div class="relative z-10">
                    <h2 class="font-display text-4xl md:text-5xl lg:text-6xl tracking-tight font-medium mb-6 text-center lg:text-left text-slate-900 dark:text-white mix-blend-difference" data-i18n="problem-h2">
                        Your Business Deserves Better Than Generic Software
                    </h2>
                    <p class="text-xl text-slate-600 dark:text-slate-300 mb-4 mix-blend-difference font-normal text-center lg:text-left max-w-2xl" data-i18n="problem-p1">Most SMEs face the same chaos — and most off-the-shelf tools make it worse, not better.</p>
                    <p class="text-lg text-slate-500 dark:text-slate-400 mb-10 font-normal text-center lg:text-left max-w-2xl" data-i18n="problem-p2">You're not alone. But you <em>can</em> fix it — with software designed around the way you actually work.</p>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10">
                            <i data-lucide="folder-x" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                            <span class="font-medium text-base">Manual workflows wasting hours every day</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10">
                            <i data-lucide="link-2-off" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                            <span class="font-medium text-base">Legacy systems that don't talk to each other</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10">
                            <i data-lucide="bar-chart-2" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                            <span class="font-medium text-base">Poor data flow blocking real-time decisions</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10">
                            <i data-lucide="package-x" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                            <span class="font-medium text-base">Custom needs crushed by off-the-shelf tools</span>
                        </div>
                        <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10 md:col-span-2 md:max-w-[50%]">
                            <i data-lucide="cpu" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                            <span class="font-medium text-base">No clear path to AI-ready, scalable processes</span>
                        </div>
                    </div>
                </div>
                
                <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&amp;w=2000&amp;auto=format&amp;fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-40 mix-blend-overlay group-hover:scale-105 transition-transform duration-1000 grayscale" alt="Dashboard">
            </div>
        </section>

        <!-- 3. Services (Modern Bento) -->
        <section id="services" class="py-24 px-6 max-w-[1400px] mx-auto">
            <div class="mb-16 md:mb-24 text-center max-w-3xl mx-auto">
                <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-6" data-i18n="services-h2">
                    Custom Solutions That Actually Work
                </h2>
                <p class="text-2xl text-slate-500 dark:text-slate-400 font-normal" data-i18n="services-sub">We don't sell hours. We deliver automated, flawless systems — fully owned by your business.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-[24rem]">
                <!-- Bento 1 -->
                <div class="md:col-span-2 bg-white dark:bg-[#161616] border border-black/5 dark:border-white/10 rounded-[1rem] p-10 flex flex-col justify-between hover:shadow-xl dark:hover:shadow-blue-900/10 hover:-translate-y-1 transition-all duration-500">
                    <div>
                        <div class="w-14 h-14 bg-blue-50 dark:bg-blue-500/15 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="layout-grid" class="w-7 h-7 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="font-display text-3xl md:text-4xl tracking-tight font-medium mb-4">Admin Panels &amp; Internal Tools</h3>
                        <p class="text-lg text-slate-500 dark:text-slate-400 max-w-md leading-normal font-normal">Built for your exact workflows, not generic templates. Manage data securely with bespoke interfaces designed purely for speed and your team's daily reality — not someone else's idea of how you should work.</p>
                    </div>
                </div>
                
                <!-- Bento 2 -->
                <div class="md:col-span-1 bg-gradient-to-br from-[#2a2a2a] via-[#222222] to-[#1a1a1a] text-white rounded-[1rem] p-10 flex flex-col justify-between hover:shadow-xl hover:shadow-black/30 hover:-translate-y-1 transition-all duration-500 border border-white/5">
                    <div>
                        <i data-lucide="users" class="w-10 h-10 mb-6 opacity-90"></i>
                        <h3 class="font-display text-3xl tracking-tight font-medium mb-4">Tailored CRM Systems</h3>
                        <p class="text-lg opacity-90 leading-normal font-normal">Data flows designed completely around your unique customer journey. Stop forcing your business into Salesforce boxes. Own a CRM that actually reflects how you sell and serve.</p>
                    </div>
                </div>

                <!-- Bento 3 -->
                <div class="md:col-span-1 bg-white dark:bg-[#161616] border border-black/5 dark:border-white/10 rounded-[1rem] p-10 flex flex-col justify-between hover:shadow-xl dark:hover:shadow-blue-900/10 hover:-translate-y-1 transition-all duration-500">
                    <div>
                        <div class="w-14 h-14 bg-blue-50 dark:bg-blue-500/15 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="cloud" class="w-7 h-7 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="font-display text-3xl tracking-tight font-medium mb-4">SaaS Applications</h3>
                        <p class="text-lg text-slate-500 dark:text-slate-400 leading-normal font-normal">Scalable platforms completely owned by your business, ready for market. From MVP to full product — built to grow with you.</p>
                    </div>
                </div>

                <!-- Bento 4 -->
                <div class="md:col-span-2 bg-slate-50 dark:bg-[#1a1a1a] border border-black/5 dark:border-white/10 rounded-[1rem] p-10 flex flex-col justify-between relative overflow-hidden hover:shadow-xl dark:hover:shadow-blue-900/10 hover:-translate-y-1 transition-all duration-500">
                    <div class="relative z-10">
                        <div class="w-14 h-14 bg-white dark:bg-[#272727] shadow-sm rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="link" class="w-7 h-7 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="font-display text-3xl md:text-4xl tracking-tight font-medium mb-4">API Integrations</h3>
                        <p class="text-lg text-slate-600 dark:text-slate-400 max-w-md leading-normal font-normal">Connecting your existing tools so data moves effortlessly between systems. Eliminate double-entry, sync platforms automatically in real-time, and stop losing hours to copy-paste work that software should handle.</p>
                    </div>
                    <!-- Abstract geometric element -->
                    <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-blue-500/10 dark:bg-blue-500/10 rounded-full blur-3xl z-0 pointer-events-none"></div>
                </div>
            </div>
        </section>

        <!-- 4. Industries Section -->
        <section id="industries" class="py-24 md:py-32 bg-white dark:bg-[#0d0d0d]">
            <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-6 text-center lg:text-left" data-i18n="industries-h2">
                        Partnering With <br>Growing Businesses
                    </h2>
                    <p class="text-xl text-slate-500 dark:text-slate-400 mb-16 text-center lg:text-left font-normal" data-i18n="industries-sub-p">Every industry has its own chaos. We've seen it — and built systems that tame it.</p>
                    
                    <div class="space-y-10">
                        <div class="group cursor-default border-l-2 border-transparent hover:border-blue-600 pl-6 transition-all duration-300">
                            <h3 class="font-display text-2xl md:text-3xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors" data-i18n="ind-prod-h">Production</h3>
                            <p class="text-lg text-slate-500 dark:text-slate-400 font-normal" data-i18n="ind-prod-p">Manufacturing execution systems, inventory automation, and shop-floor dashboards that connect your machinery data with your planning teams — in real time.</p>
                        </div>
                        <div class="group cursor-default border-l-2 border-transparent hover:border-blue-600 pl-6 transition-all duration-300">
                            <h3 class="font-display text-2xl md:text-3xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors" data-i18n="ind-svc-h">Services</h3>
                            <p class="text-lg text-slate-500 dark:text-slate-400 font-normal" data-i18n="ind-svc-p">Client portals, automated scheduling, billing workflows, and service CRMs that eliminate double-entry and give your team more time to actually serve clients.</p>
                        </div>
                        <div class="group cursor-default border-l-2 border-transparent hover:border-blue-600 pl-6 transition-all duration-300">
                            <h3 class="font-display text-2xl md:text-3xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors" data-i18n="ind-ecom-h">E-commerce</h3>
                            <p class="text-lg text-slate-500 dark:text-slate-400 font-normal" data-i18n="ind-ecom-p">Custom checkouts, multi-platform inventory sync, and order automation that removes the manual work between your store, warehouse, and fulfilment.</p>
                        </div>
                        <div class="group cursor-default border-l-2 border-transparent hover:border-blue-600 pl-6 transition-all duration-300">
                            <h3 class="font-display text-2xl md:text-3xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors" data-i18n="ind-start-h">Startups</h3>
                            <p class="text-lg text-slate-500 dark:text-slate-400 font-normal" data-i18n="ind-start-p">MVP platforms built to validate fast and scale without rebuilding. From idea to working product — with the technical foundation that grows with your business.</p>
                        </div>
                    </div>
                </div>
                
                <div class="relative h-[600px] rounded-[1rem] overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&amp;w=2000&amp;auto=format&amp;fit=crop" class="absolute inset-0 w-full h-full object-cover scale-105 hover:scale-100 transition-transform duration-1000 grayscale opacity-90" alt="Growth and Analytics">
                    <div class="absolute inset-0 bg-blue-600/10 mix-blend-overlay"></div>
                </div>
            </div>
        </section>

        <!-- 5. Process Section -->
        <section id="process" class="py-24 md:py-32 px-6 max-w-[1400px] mx-auto">
            <div class="text-center mb-16 md:mb-24">
                <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-6" data-i18n="process-h2">
                    How We Work — Simple, Direct, Effective
                </h2>
                <p class="text-xl text-slate-500 dark:text-slate-400 max-w-2xl mx-auto font-normal" data-i18n="process-sub">No long onboarding. No agency layers. No miscommunication. Just a clear path from problem to working solution.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-4 relative">
                <!-- Decorative line for desktop -->
                <div class="hidden md:block absolute top-[63px] left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent -z-10"></div>

                <div class="flex flex-col items-center text-center">
                    <span class="font-display text-6xl text-blue-100 dark:text-blue-400/20 font-medium mb-6">01</span>
                    <h3 class="font-display text-2xl tracking-tight font-medium mb-3">Discovery</h3>
                    <p class="text-base text-slate-500 dark:text-slate-400 px-4 font-normal">We listen, map your current chaos, and meticulously analyze your data flows — before writing a single line of code.</p>
                </div>
                
                <div class="flex flex-col items-center text-center">
                    <span class="font-display text-6xl text-blue-100 dark:text-blue-400/20 font-medium mb-6">02</span>
                    <h3 class="font-display text-2xl tracking-tight font-medium mb-3">Strategy</h3>
                    <p class="text-base text-slate-500 dark:text-slate-400 px-4 font-normal">Propose exact solutions with clear architecture backed by testable prototypes you can evaluate in week one.</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <span class="font-display text-6xl text-blue-100 dark:text-blue-900/40 font-medium mb-6">03</span>
                    <h3 class="font-display text-2xl tracking-tight font-medium mb-3">Build</h3>
                    <p class="text-base text-slate-500 dark:text-slate-400 px-4 font-normal">Iterative delivery with your feedback guiding every step. You see real progress — not a black box that opens after months.</p>
                </div>

                <div class="flex flex-col items-center text-center">
                    <span class="font-display text-6xl text-blue-100 dark:text-blue-900/40 font-medium mb-6">04</span>
                    <h3 class="font-display text-2xl tracking-tight font-medium mb-3">Launch &amp; Scale</h3>
                    <p class="text-base text-slate-500 dark:text-slate-400 px-4 font-normal">Full SLA, monitoring, and continuous product evolution. We stay with you — support, improvements, and scaling as you grow.</p>
                </div>
            </div>

            <!-- Founder-led callout -->
            <div class="mt-20 bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-10 md:p-14 text-center max-w-3xl mx-auto">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                    <i data-lucide="user-check" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-2xl md:text-3xl tracking-tight font-medium mb-4">Founder-led delivery</h3>
                <p class="text-lg text-slate-500 dark:text-slate-400 font-normal leading-normal">You work directly with the senior expert who designs and builds your solution. No account managers, no junior handoffs, no miscommunication between what you ask and what gets built. Just results.</p>
            </div>
        </section>

        <!-- 6. Why DIGITALSKY Section -->
        <section id="why-us" class="py-24 md:py-32 bg-white dark:bg-[#050505]">
            <div class="max-w-[1400px] mx-auto px-6">
                <div class="text-center mb-16">
                    <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-6" data-i18n="why-h2">
                        Why Partner With <b>Digitalsky</b>
                    </h2>
                    <p class="text-xl text-slate-500 dark:text-slate-400 max-w-2xl mx-auto font-normal" data-i18n="why-sub">Not a software house. A focused technology partner — with skin in the game on your success.</p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="user-check" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="font-display text-xl font-medium mb-3" data-i18n="why-card1-h">Direct senior expertise</h3>
                        <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal" data-i18n="why-card1-p">You work with the person who codes your solution — not a project manager relaying messages to a team you'll never meet.</p>
                    </div>

                    <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="target" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="font-display text-xl font-medium mb-3" data-i18n="why-card2-h">Business-first approach</h3>
                        <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal" data-i18n="why-card2-p">We fix processes, not just write code. Every line of software we build is justified by a real business outcome — time saved, errors eliminated, revenue unlocked.</p>
                    </div>

                    <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="handshake" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="font-display text-xl font-medium mb-3" data-i18n="why-card3-h">Long-term partnership</h3>
                        <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal" data-i18n="why-card3-p">Support, SLA, and product evolution included. We don't disappear after launch — we grow with you as your business scales and your needs evolve.</p>
                    </div>

                    <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="zap" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="font-display text-xl font-medium mb-3" data-i18n="why-card4-h">No agency overhead</h3>
                        <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal" data-i18n="why-card4-p">Competitive pricing and fast decisions. Without layers of account managers, sales reps, and middle managers, your budget goes into building — not overhead.</p>
                    </div>

                    <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                            <i data-lucide="building-2" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                        </div>
                        <h3 class="font-display text-xl font-medium mb-3" data-i18n="why-card5-h">Proven for SMEs</h3>
                        <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal" data-i18n="why-card5-p">We understand your scale and constraints. Since 2016 we've worked exclusively with growing businesses — we know what works at your size and what's just expensive overkill.</p>
                    </div>

                    <div class="bg-blue-600 text-white rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-600/20 transition-all duration-300 flex flex-col justify-between">
                        <div>
                            <div class="w-12 h-12 bg-white/10 rounded-2xl flex items-center justify-center mb-6">
                                <i data-lucide="shield-check" class="w-6 h-6 text-white"></i>
                            </div>
                            <h3 class="font-display text-xl font-medium mb-3" data-i18n="why-card6-h">You own everything</h3>
                            <p class="text-base opacity-90 font-normal leading-normal" data-i18n="why-card6-p">Full source code ownership, no vendor lock-in. Your system, your data, your IP — from day one.</p>
                        </div>
                        <a href="#contact" class="mt-8 inline-flex items-center gap-2 text-white font-medium text-base hover:gap-4 transition-all duration-200" data-i18n="why-card6-cta">
                            Start a conversation <i data-lucide="arrow-right" class="w-4 h-4"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. Work / Case Studies -->
        <section id="work" class="py-24 px-6 bg-[#050505] text-white">
            <div class="max-w-[1400px] mx-auto">
                <div class="mb-16 text-center">
                    <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-4" data-i18n="work-h2">
                        Real Results for Real Businesses
                    </h2>
                    <p class="text-xl text-slate-400 mb-8 font-normal max-w-2xl mx-auto" data-i18n="work-sub">Every number below represents hours saved, errors eliminated, and frustration removed from real teams.</p>
                    <a href="#contact" class="inline-flex items-center gap-2 text-base font-medium text-blue-500 hover:text-blue-400 transition-colors">
                        Discuss your project
                        <i data-lucide="arrow-right" class="w-5 h-5"></i>
                    </a>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Card 1 -->
                    <div class="bg-white/[0.02] rounded-[1rem] p-10 backdrop-blur-md border border-white/5 hover:border-white/10 hover:bg-white/[0.04] transition-all duration-500">
                        <div class="text-sm font-medium px-4 py-1.5 bg-blue-500/10 text-blue-400 rounded-full inline-block mb-8" data-i18n="cs1-tag">E-commerce</div>
                        <h3 class="font-display text-2xl tracking-tight font-medium mb-3" data-i18n="cs1-h">Inventory Automation</h3>
                        <p class="text-base text-slate-400 mb-4 font-normal" data-i18n="cs1-p1">A growing e-commerce business was managing stock across 5 platforms using Excel spreadsheets — leading to constant overselling, returns, and angry customers.</p>
                        <p class="text-base text-slate-500 mb-12 font-normal" data-i18n="cs1-p2">We replaced the entire manual process with a real-time API sync engine. Orders, stock levels, and fulfilment now update automatically across all channels.</p>
                        <div class="pt-6 border-t border-white/10">
                            <p class="font-display text-5xl font-medium mb-2 text-white">92%</p>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-medium" data-i18n="cs1-stat">Stock error reduction</p>
                        </div>
                    </div>

                    <!-- Card 2 -->
                    <div class="bg-white/[0.02] rounded-[1rem] p-10 backdrop-blur-md border border-white/5 hover:border-white/10 hover:bg-white/[0.04] transition-all duration-500">
                        <div class="text-sm font-medium px-4 py-1.5 bg-blue-500/10 text-blue-400 rounded-full inline-block mb-8" data-i18n="cs2-tag">Production</div>
                        <h3 class="font-display text-2xl tracking-tight font-medium mb-3" data-i18n="cs2-h">Production Scheduling System</h3>
                        <p class="text-base text-slate-400 mb-4 font-normal" data-i18n="cs2-p1">A mid-size manufacturer was spending 40+ hours per week on manual production scheduling in spreadsheets — with planners constantly firefighting errors.</p>
                        <p class="text-base text-slate-500 mb-12 font-normal" data-i18n="cs2-p2">We built a custom dashboard directly integrated with their machinery APIs, giving real-time visibility and automated schedule generation.</p>
                        <div class="pt-6 border-t border-white/10">
                            <p class="font-display text-5xl font-medium mb-2 text-white">40h</p>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-medium" data-i18n="cs2-stat">Saved every week</p>
                        </div>
                    </div>

                    <!-- Card 3 -->
                    <div class="bg-white/[0.02] rounded-[1rem] p-10 backdrop-blur-md border border-white/5 hover:border-white/10 hover:bg-white/[0.04] transition-all duration-500">
                        <div class="text-sm font-medium px-4 py-1.5 bg-blue-500/10 text-blue-400 rounded-full inline-block mb-8" data-i18n="cs3-tag">Services</div>
                        <h3 class="font-display text-2xl tracking-tight font-medium mb-3" data-i18n="cs3-h">Service Business CRM</h3>
                        <p class="text-base text-slate-400 mb-4 font-normal" data-i18n="cs3-p1">A service company was onboarding new clients over 2 days using emails, PDFs, and manual data entry — creating errors and a poor first impression.</p>
                        <p class="text-base text-slate-500 mb-12 font-normal" data-i18n="cs3-p2">We built a tailored CRM with automated onboarding flows matching their exact service delivery workflow. New clients are now active in 15 minutes.</p>
                        <div class="pt-6 border-t border-white/10">
                            <p class="font-display text-5xl font-medium mb-2 text-white">15m</p>
                            <p class="text-sm text-slate-500 uppercase tracking-widest font-medium" data-i18n="cs3-stat">Onboarding time (was 2 days)</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 8. FAQ Section -->
        <section id="faq" class="py-24 md:py-32 px-6 max-w-4xl mx-auto">
            <div class="text-center mb-16">
                <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-4" data-i18n="faq-h2">
                    Frequently Asked Questions
                </h2>
                <p class="text-lg text-slate-500 dark:text-slate-400 font-normal" data-i18n="faq-sub">The questions every SME asks before starting a custom software project.</p>
            </div>

            <div class="space-y-3" id="faq-list">

                <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
                    <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                        <span class="font-display text-lg font-medium pr-8">How long does custom development take?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal">Most projects take <strong>4–12 weeks</strong> depending on scope. A focused internal tool or API integration is typically live in 4–6 weeks. A more complex CRM or SaaS platform with multiple integrations takes 8–12 weeks. We always prototype in <strong>week one</strong> — so you see real progress immediately and can course-correct early rather than late.</p>
                    </div>
                </div>

                <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
                    <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                        <span class="font-display text-lg font-medium pr-8">How much does custom software cost?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal">Cost depends entirely on what you need built. Targeted integrations and internal tools are often comparable to — or less than — a year's subscription to a generic platform that only partly solves your problem. We work on a <strong>fixed-scope, fixed-price basis</strong>: after the free process audit you receive a clear proposal with no hourly billing surprises. We'll always tell you honestly if an off-the-shelf solution would serve you better.</p>
                    </div>
                </div>

                <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
                    <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                        <span class="font-display text-lg font-medium pr-8">What technologies do you use?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal">We use <strong>PHP / Laravel</strong> for robust backend systems, and <strong>Svelte or Angular</strong> on the frontend — chosen based on your project's needs, not our preference. We're deliberately framework-agnostic and avoid technology overload: no unnecessary complexity, no trendy stacks that become a maintenance burden. The goal is a system your team can actually use and trust long-term.</p>
                    </div>
                </div>

                <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
                    <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                        <span class="font-display text-lg font-medium pr-8">Who owns the code after delivery?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal"><strong>You own everything — 100%.</strong> Full source code, database structure, documentation. No vendor lock-in, no licensing fees, no dependency on us to keep your system running. You can take it to any developer in the future. We believe that's the only ethical way to work with a client.</p>
                    </div>
                </div>

                <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
                    <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                        <span class="font-display text-lg font-medium pr-8">Do you offer ongoing support after launch?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal">Yes — we offer <strong>on-demand support</strong> without a mandatory monthly retainer. If something breaks, you call us. If you need a new feature, we scope it and build it. No paying for support you don't use. For business-critical systems we can arrange a formal SLA with defined response times — discuss this during the audit.</p>
                    </div>
                </div>

                <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
                    <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                        <span class="font-display text-lg font-medium pr-8">Can you work with our existing systems?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal">Absolutely. Most engagements start with existing tools — ERP systems, legacy databases, third-party platforms, or even well-established Excel workflows. We connect, extend, or replace them based on what makes sense. You don't need to rebuild from scratch. We work with your reality, not a blank-slate ideal.</p>
                    </div>
                </div>

                <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
                    <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                        <span class="font-display text-lg font-medium pr-8">What's the process for getting started?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal">Three steps: <strong>(1) Free 30-minute process audit</strong> — we map your workflows and identify the highest-impact areas. <strong>(2) Custom proposal</strong> with clear scope, timeline, and fixed price — usually delivered within 3 business days. <strong>(3) Prototype in week one</strong> — a working proof-of-concept before any significant investment is made. No commitment until you're confident it's the right direction.</p>
                    </div>
                </div>

                <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
                    <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                        <span class="font-display text-lg font-medium pr-8">Do we need an in-house IT team to use or manage the system?</span>
                        <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
                    </button>
                    <div class="faq-answer hidden px-6 pb-6">
                        <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal">No. We build systems designed to be operated by your existing team without technical knowledge. Admin interfaces are straightforward, documentation is included, and we handle hosting, updates, and infrastructure on your behalf. If you ever want to bring it in-house, everything is documented and transferable.</p>
                    </div>
                </div>

            </div>
        </section>

        <!-- 9. Final CTA / Contact Form -->
        <section id="contact" class="py-32 px-6 max-w-4xl mx-auto text-center">
            <h2 class="font-display text-5xl md:text-7xl tracking-tight font-medium mb-6" data-i18n="contact-h2">
                Ready to Fix Your Process Chaos?
            </h2>
            <p class="text-xl text-slate-500 dark:text-slate-400 mb-4 font-normal" data-i18n="contact-p1">
                We'd love to hear about you and your business.
            </p>
            <p class="text-lg text-slate-400 dark:text-slate-500 mb-16 font-normal max-w-2xl mx-auto" data-i18n="contact-p2">
                Tell us what you're working on — we'll show you exactly how we can help. No commitment, no pressure.
            </p>

            <form id="contact-form" class="space-y-6 text-left bg-white dark:bg-[#0A0A0A] p-8 md:p-12 rounded-[1rem] shadow-xl shadow-black/5 dark:shadow-none border border-black/5 dark:border-white/5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300" data-i18n="form-label-name">Name</label>
                        <input type="text" id="name" name="name" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="Jane Doe">
                    </div>
                    <div>
                        <label for="company" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300" data-i18n="form-label-company">Company</label>
                        <input type="text" id="company" name="company" class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="Acme Corp">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300" data-i18n="form-label-email">Work Email</label>
                    <input type="email" id="email" name="email" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="jane@acme.com">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300" data-i18n="form-label-msg">Your biggest process bottleneck</label>
                    <textarea id="message" name="message" rows="4" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none resize-none font-normal" data-i18n="form-placeholder-msg" data-i18n-attr="placeholder" placeholder="Tell us what's slowing your team down — Excel hell, disconnected systems, manual data entry…"></textarea>
                </div>
                <button type="submit" id="form-submit-btn" class="w-full bg-[#2D2D2D] text-white font-medium py-4 rounded-xl hover:bg-[#3a3a3a] transition-all duration-300 text-base" data-i18n="form-submit">
                    Let's start the conversation
                </button>
                <div id="form-status" class=""></div>

                <div class="pt-4 border-t border-black/5 dark:border-white/5 flex flex-col sm:flex-row items-center justify-center gap-4 text-sm text-slate-500">
                    <span data-i18n="contact-or">Or contact us directly:</span>
                    <a href="mailto:contact@digitalsky.pl" class="flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:underline font-medium">
                        <i data-lucide="mail" class="w-4 h-4"></i>
                        contact@digitalsky.pl
                    </a>
                    <a href="tel:+48506323709" class="flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:underline font-medium">
                        <i data-lucide="phone" class="w-4 h-4"></i>
                        +48 506 323 709
                    </a>
                </div>
            </form>
        </section>
    </main>

    <!-- Footer -->
    <footer class="py-12 border-t border-white/10 bg-[#111111]">
        <div class="max-w-[1400px] mx-auto px-6 flex flex-col gap-10">
            <!-- SEO content row -->
            <div class="text-xs text-slate-500 leading-relaxed max-w-4xl mx-auto text-center">
                <b>Digitalsky</b> — custom software development for SMEs in Poland, EU and the US since 2016. We specialise in bespoke web application development, business process automation, API integrations, tailored CRM systems and internal admin tools. Our clients operate in manufacturing, e-commerce, professional services and the startup sector. We use PHP / Laravel backends and Svelte or Angular frontends, chosen to match your project — not to follow trends. All source code is fully owned by you from day one, with no vendor lock-in. Looking for a software development partner who understands small and medium businesses? Contact us at <a href="mailto:contact@digitalsky.pl" class="text-slate-500 hover:text-slate-300 transition-colors">contact@digitalsky.pl</a>.
            </div>

            <!-- Footer nav — centered row -->
            <nav class="flex flex-wrap justify-center gap-6 text-sm font-normal text-slate-400">
                <a href="#services"   class="hover:text-white transition-colors" data-i18n="nav-services">Services</a>
                <a href="#industries" class="hover:text-white transition-colors" data-i18n="nav-industries">Industries</a>
                <a href="#process"    class="hover:text-white transition-colors" data-i18n="nav-process">Process</a>
                <a href="#why-us"     class="hover:text-white transition-colors" data-i18n="nav-why">Why Us</a>
                <a href="#work"       class="hover:text-white transition-colors" data-i18n="nav-work">Work</a>
                <a href="#faq"        class="hover:text-white transition-colors" data-i18n="nav-faq">FAQ</a>
            </nav>

            <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div>
                <div class="font-display font-medium tracking-tight text-xl text-white mb-2">
                    <b>Digitalsky</b>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 text-sm text-slate-500">
                    <a href="mailto:contact@digitalsky.pl" class="hover:text-slate-300 transition-colors flex items-center gap-1.5">
                        <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                        contact@digitalsky.pl
                    </a>
                    <a href="tel:+48506323709" class="hover:text-slate-300 transition-colors flex items-center gap-1.5">
                        <i data-lucide="phone" class="w-3.5 h-3.5"></i>
                        +48 506 323 709
                    </a>
                </div>
            </div>
            
            <div class="text-sm text-slate-500 font-normal">
                <b>Digitalsky</b> since 2016
            </div>
        </div>
        </div>
    </footer>

    <script>
        lucide.createIcons({
            attrs: {
                'stroke-width': 1.5
            }
        });

        /* ── FAQ accordion ───────────────────────────────── */
        function toggleFaq(btn) {
            const answer = btn.nextElementSibling;
            const icon   = btn.querySelector('.faq-icon');
            const isOpen = !answer.classList.contains('hidden');

            // close all
            document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => {
                i.setAttribute('data-lucide', 'plus');
                i.style.transform = 'rotate(0deg)';
            });

            if (!isOpen) {
                answer.classList.remove('hidden');
                icon.setAttribute('data-lucide', 'minus');
                icon.style.transform = 'rotate(0deg)';
            }
            lucide.createIcons({ attrs: { 'stroke-width': 1.5 } });
        }

        /* ── Contact form ────────────────────────────────── */
        document.getElementById('contact-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn    = document.getElementById('form-submit-btn');
            const status = document.getElementById('form-status');
            const name    = document.getElementById('name').value.trim();
            const company = document.getElementById('company').value.trim();
            const email   = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();

            // basic validation
            status.className = '';
            status.textContent = '';
            if (!name || !email || !message) {
                status.textContent = 'Please fill in your name, email and project details.';
                status.className = 'mt-4 text-center text-sm text-red-500 font-medium';
                return;
            }
            const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRx.test(email)) {
                status.textContent = 'Please enter a valid email address.';
                status.className = 'mt-4 text-center text-sm text-red-500 font-medium';
                return;
            }

            btn.disabled = true;
            btn.textContent = 'Sending…';

            try {
                const res = await fetch('send.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name, company, email, message })
                });
                const data = await res.json();
                if (data.ok) {
                    status.textContent = '✓ Message sent! We\'ll get back to you within 1 business day.';
                    status.className = 'mt-4 text-center text-sm text-green-600 dark:text-green-400 font-medium';
                    document.getElementById('contact-form').reset();
                } else {
                    throw new Error(data.error || 'Unknown error');
                }
            } catch (err) {
                status.textContent = 'Something went wrong. Please email us directly at contact@digitalsky.pl';
                status.className = 'mt-4 text-center text-sm text-red-500 font-medium';
            } finally {
                btn.disabled = false;
                btn.textContent = currentLang === 'pl' ? 'Zacznijmy rozmowę' : "Let's start the conversation";
            }
        });

        /* ── Language toggle ─────────────────────────────── */
        let currentLang = localStorage.getItem('lang') || 'en';

        const translations = {
            en: {
                'nav-services':   'Services',
                'nav-industries': 'Industries',
                'nav-process':    'Process',
                'nav-why':        'Why Us',
                'nav-work':       'Work',
                'nav-faq':        'FAQ',
                'nav-cta':        "Let's talk.",
                'hero-h1':        'Custom software built around your business. <span class="text-slate-400 dark:text-slate-600">Not the other way around.</span>',
                'hero-p':         'Struggling with chaotic processes, disconnected systems, and outdated software holding your growth back? <b>Digitalsky</b> designs custom web applications, process automation, and system integrations that fit <em>exactly</em> how your business works.',
                'hero-cta1':      'Let\'s Talk',
                'hero-cta2':      'See case studies',
                'trust-1':        '12+ custom systems delivered',
                'trust-2':        '300% average process efficiency gain',
                'trust-3':        'Serving EU &amp; US SMEs since 2016',
                'problem-h2':     'Your Business Deserves Better Than Generic Software',
                'problem-p1':     'Most SMEs face the same chaos — and most off-the-shelf tools make it worse, not better.',
                'problem-p2':     "You're not alone. But you <em>can</em> fix it — with software designed around the way you actually work.",
                'services-h2':    'Custom Solutions That Actually Work',
                'services-sub':   "We don't sell hours. We deliver automated, flawless systems — fully owned by your business.",
                'industries-h2':  'Partnering With Growing Businesses',
                'industries-sub': "Every industry has its own chaos. We've seen it — and built systems that tame it.",
                'process-h2':     'How We Work — Simple, Direct, Effective',
                'process-sub':    'No long onboarding. No agency layers. No miscommunication. Just a clear path from problem to working solution.',
                'why-h2':         'Why Partner With <b>Digitalsky</b>',
                'why-sub':        'Not a software house. A focused technology partner — with skin in the game on your success.',
                'work-h2':        'Real Results for Real Businesses',
                'work-sub':       'Every number below represents hours saved, errors eliminated, and frustration removed from real teams.',
                'faq-h2':         'Frequently Asked Questions',
                'faq-sub':        'The questions every SME asks before starting a custom software project.',
                'contact-h2':     'Ready to Fix Your Process Chaos?',
                'contact-p1':     "We'd love to hear about you and your business.",
                'contact-p2':     "Tell us what you're working on — we'll show you exactly how we can help. No commitment, no pressure.",
                'form-label-name':    'Name',
                'form-label-company': 'Company',
                'form-label-email':   'Work Email',
                'form-label-msg':     'Your biggest process bottleneck',
                'form-placeholder-msg': "Tell us what's slowing your team down — Excel hell, disconnected systems, manual data entry…",
                'form-submit':        "Let's start the conversation",
                'contact-or':         'Or contact us directly:',
                // Industries
                'industries-sub-p':"Every industry has its own chaos. We've seen it — and built systems that tame it.",
                'ind-prod-h':      'Production',
                'ind-prod-p':      'Manufacturing execution systems, inventory automation, and shop-floor dashboards that connect your machinery data with your planning teams — in real time.',
                'ind-svc-h':       'Services',
                'ind-svc-p':       'Client portals, automated scheduling, billing workflows, and service CRMs that eliminate double-entry and give your team more time to actually serve clients.',
                'ind-ecom-h':      'E-commerce',
                'ind-ecom-p':      'Custom checkouts, multi-platform inventory sync, and order automation that removes the manual work between your store, warehouse, and fulfilment.',
                'ind-start-h':     'Startups',
                'ind-start-p':     'MVP platforms built to validate fast and scale without rebuilding. From idea to working product — with the technical foundation that grows with your business.',
                // Why Us cards
                'why-card1-h':     'Direct senior expertise',
                'why-card1-p':     'You work with the person who codes your solution — not a project manager relaying messages to a team you\'ll never meet.',
                'why-card2-h':     'Business-first approach',
                'why-card2-p':     'We fix processes, not just write code. Every line of software we build is justified by a real business outcome — time saved, errors eliminated, revenue unlocked.',
                'why-card3-h':     'Long-term partnership',
                'why-card3-p':     'Support, SLA, and product evolution included. We don\'t disappear after launch — we grow with you as your business scales and your needs evolve.',
                'why-card4-h':     'No agency overhead',
                'why-card4-p':     'Competitive pricing and fast decisions. Without layers of account managers, sales reps, and middle managers, your budget goes into building — not overhead.',
                'why-card5-h':     'Proven for SMEs',
                'why-card5-p':     'We understand your scale and constraints. Since 2016 we\'ve worked exclusively with growing businesses — we know what works at your size and what\'s just expensive overkill.',
                'why-card6-h':     'You own everything',
                'why-card6-p':     'Full source code ownership, no vendor lock-in. Your system, your data, your IP — from day one.',
                'why-card6-cta':   'Start a conversation <i data-lucide="arrow-right" class="w-4 h-4"></i>',
                // Case Studies
                'cs1-tag':  'E-commerce',
                'cs1-h':    'Inventory Automation',
                'cs1-p1':   'A growing e-commerce business was managing stock across 5 platforms using Excel spreadsheets — leading to constant overselling, returns, and angry customers.',
                'cs1-p2':   'We replaced the entire manual process with a real-time API sync engine. Orders, stock levels, and fulfilment now update automatically across all channels.',
                'cs1-stat': 'Stock error reduction',
                'cs2-tag':  'Production',
                'cs2-h':    'Production Scheduling System',
                'cs2-p1':   'A mid-size manufacturer was spending 40+ hours per week on manual production scheduling in spreadsheets — with planners constantly firefighting errors.',
                'cs2-p2':   'We built a custom dashboard directly integrated with their machinery APIs, giving real-time visibility and automated schedule generation.',
                'cs2-stat': 'Saved every week',
                'cs3-tag':  'Services',
                'cs3-h':    'Service Business CRM',
                'cs3-p1':   'A service company was onboarding new clients over 2 days using emails, PDFs, and manual data entry — creating errors and a poor first impression.',
                'cs3-p2':   'We built a tailored CRM with automated onboarding flows matching their exact service delivery workflow. New clients are now active in 15 minutes.',
                'cs3-stat': 'Onboarding time (was 2 days)',
            },
            pl: {
                'nav-services':   'Services',
                'nav-industries': 'Industries',
                'nav-process':    'Process',
                'nav-why':        'Why Us',
                'nav-work':       'Work',
                'nav-faq':        'FAQ',
                'nav-cta':        "Let's talk.",
                'hero-h1':        'Custom software built around your business. <span class="text-slate-400 dark:text-slate-600">Not the other way around.</span>',
                'hero-p':         'Struggling with chaotic processes, disconnected systems, and outdated software holding your growth back? <b>Digitalsky</b> designs custom web applications, process automation, and system integrations that fit <em>exactly</em> how your business works.',
                'hero-cta1':      "Let's Talk",
                'hero-cta2':      'See case studies',
                'trust-1':        '12+ custom systems delivered',
                'trust-2':        '300% average process efficiency gain',
                'trust-3':        'Serving EU &amp; US SMEs since 2016',
                'problem-h2':     'Your Business Deserves Better Than Generic Software',
                'problem-p1':     'Most SMEs face the same chaos — and most off-the-shelf tools make it worse, not better.',
                'problem-p2':     "You're not alone. But you <em>can</em> fix it — with software designed around the way you actually work.",
                'services-h2':    'Custom Solutions That Actually Work',
                'services-sub':   "We don't sell hours. We deliver automated, flawless systems — fully owned by your business.",
                'industries-h2':  'Partnering With Growing Businesses',
                'industries-sub': "Every industry has its own chaos. We've seen it — and built systems that tame it.",
                'process-h2':     'How We Work — Simple, Direct, Effective',
                'process-sub':    'No long onboarding. No agency layers. No miscommunication. Just a clear path from problem to working solution.',
                'why-h2':         'Why Partner With <b>Digitalsky</b>',
                'why-sub':        'Not a software house. A focused technology partner — with skin in the game on your success.',
                'work-h2':        'Real Results for Real Businesses',
                'work-sub':       'Every number below represents hours saved, errors eliminated, and frustration removed from real teams.',
                'faq-h2':         'Frequently Asked Questions',
                'faq-sub':        'The questions every SME asks before starting a custom software project.',
                'contact-h2':     'Ready to Fix Your Process Chaos?',
                'contact-p1':     "We'd love to hear about you and your business.",
                'contact-p2':     "Tell us what you're working on — we'll show you exactly how we can help. No commitment, no pressure.",
                'form-label-name':    'Name',
                'form-label-company': 'Company',
                'form-label-email':   'Work Email',
                'form-label-msg':     'Your biggest process bottleneck',
                'form-placeholder-msg': "Tell us what's slowing your team down — Excel hell, disconnected systems, manual data entry…",
                'form-submit':        "Let's start the conversation",
                'contact-or':         'Or contact us directly:',
                // Industries
                'industries-sub-p': "Every industry has its own chaos. We've seen it — and built systems that tame it.",
                'ind-prod-h':      'Production',
                'ind-prod-p':      'Manufacturing execution systems, inventory automation, and shop-floor dashboards that connect your machinery data with your planning teams — in real time.',
                'ind-svc-h':       'Services',
                'ind-svc-p':       'Client portals, automated scheduling, billing workflows, and service CRMs that eliminate double-entry and give your team more time to actually serve clients.',
                'ind-ecom-h':      'E-commerce',
                'ind-ecom-p':      'Custom checkouts, multi-platform inventory sync, and order automation that removes the manual work between your store, warehouse, and fulfilment.',
                'ind-start-h':     'Startups',
                'ind-start-p':     'MVP platforms built to validate fast and scale without rebuilding. From idea to working product — with the technical foundation that grows with your business.',
                // Why Us cards
                'why-card1-h':     'Direct senior expertise',
                'why-card1-p':     "You work with the person who codes your solution — not a project manager relaying messages to a team you'll never meet.",
                'why-card2-h':     'Business-first approach',
                'why-card2-p':     'We fix processes, not just write code. Every line of software we build is justified by a real business outcome — time saved, errors eliminated, revenue unlocked.',
                'why-card3-h':     'Long-term partnership',
                'why-card3-p':     "Support, SLA, and product evolution included. We don't disappear after launch — we grow with you as your business scales and your needs evolve.",
                'why-card4-h':     'No agency overhead',
                'why-card4-p':     'Competitive pricing and fast decisions. Without layers of account managers, sales reps, and middle managers, your budget goes into building — not overhead.',
                'why-card5-h':     'Proven for SMEs',
                'why-card5-p':     "We understand your scale and constraints. Since 2016 we've worked exclusively with growing businesses — we know what works at your size and what's just expensive overkill.",
                'why-card6-h':     'You own everything',
                'why-card6-p':     'Full source code ownership, no vendor lock-in. Your system, your data, your IP — from day one.',
                'why-card6-cta':   'Start a conversation <i data-lucide="arrow-right" class="w-4 h-4"></i>',
                // Case Studies
                'cs1-tag':  'E-commerce',
                'cs1-h':    'Inventory Automation',
                'cs1-p1':   'A growing e-commerce business was managing stock across 5 platforms using Excel spreadsheets — leading to constant overselling, returns, and angry customers.',
                'cs1-p2':   'We replaced the entire manual process with a real-time API sync engine. Orders, stock levels, and fulfilment now update automatically across all channels.',
                'cs1-stat': 'Stock error reduction',
                'cs2-tag':  'Production',
                'cs2-h':    'Production Scheduling System',
                'cs2-p1':   'A mid-size manufacturer was spending 40+ hours per week on manual production scheduling in spreadsheets — with planners constantly firefighting errors.',
                'cs2-p2':   'We built a custom dashboard directly integrated with their machinery APIs, giving real-time visibility and automated schedule generation.',
                'cs2-stat': 'Saved every week',
                'cs3-tag':  'Services',
                'cs3-h':    'Service Business CRM',
                'cs3-p1':   'A service company was onboarding new clients over 2 days using emails, PDFs, and manual data entry — creating errors and a poor first impression.',
                'cs3-p2':   'We built a tailored CRM with automated onboarding flows matching their exact service delivery workflow. New clients are now active in 15 minutes.',
                'cs3-stat': 'Onboarding time (was 2 days)',
            }
        };

        function applyLang(lang) {
            currentLang = lang;
            localStorage.setItem('lang', lang);
            const t = translations[lang];
            document.querySelectorAll('[data-i18n]').forEach(el => {
                const key = el.getAttribute('data-i18n');
                if (!t[key]) return;
                const attr = el.getAttribute('data-i18n-attr');
                if (attr) {
                    el.setAttribute(attr, t[key]);
                } else {
                    el.innerHTML = t[key];
                }
            });
            // update all lang toggle buttons (desktop + mobile)
            ['lang-en', 'lang-en-mob'].forEach(id => {
                const el = document.getElementById(id);
                if (!el) return;
                el.classList.toggle('font-semibold', lang === 'en');
                el.classList.toggle('text-slate-900', lang === 'en');
                el.classList.toggle('dark:text-white', lang === 'en');
            });
            ['lang-pl', 'lang-pl-mob'].forEach(id => {
                const el = document.getElementById(id);
                if (!el) return;
                el.classList.toggle('font-semibold', lang === 'pl');
                el.classList.toggle('text-slate-900', lang === 'pl');
                el.classList.toggle('dark:text-white', lang === 'pl');
            });
            document.documentElement.lang = lang;
        }

        document.getElementById('lang-en').addEventListener('click', () => applyLang('en'));
        document.getElementById('lang-pl').addEventListener('click', () => applyLang('pl'));
        document.getElementById('lang-en-mob').addEventListener('click', () => { applyLang('en'); closeMenu(); });
        document.getElementById('lang-pl-mob').addEventListener('click', () => { applyLang('pl'); closeMenu(); });
        applyLang(currentLang);
    </script>

</body></html>