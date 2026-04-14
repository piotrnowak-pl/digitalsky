<!-- Top language bar -->
<div id="lang-topbar" class="fixed top-0 w-full z-50 bg-[#FAFAFA]/80 dark:bg-[#0a0a0a]/90 backdrop-blur-xl border-b border-black/5 dark:border-white/5">
    <div class="flex items-center justify-center h-8 gap-0 text-[11px] text-slate-400">
        <a href="<?= $basePath ?>" class="px-2 py-0.5 rounded hover:text-slate-900 dark:hover:text-white transition-colors <?= $lang === 'en' ? 'font-semibold text-slate-900 dark:text-white' : '' ?>">EN</a>
        <span class="opacity-30">/</span>
        <a href="<?= $basePath ?>pl/" class="px-2 py-0.5 rounded hover:text-slate-900 dark:hover:text-white transition-colors <?= $lang === 'pl' ? 'font-semibold text-slate-900 dark:text-white' : '' ?>">PL</a>
        <span class="opacity-30">/</span>
        <a href="<?= $basePath ?>de/" class="px-2 py-0.5 rounded hover:text-slate-900 dark:hover:text-white transition-colors <?= $lang === 'de' ? 'font-semibold text-slate-900 dark:text-white' : '' ?>">DE</a>
        <span class="opacity-30">/</span>
        <a href="<?= $basePath ?>fr/" class="px-2 py-0.5 rounded hover:text-slate-900 dark:hover:text-white transition-colors <?= $lang === 'fr' ? 'font-semibold text-slate-900 dark:text-white' : '' ?>">FR</a>
    </div>
</div>

<!-- Main header (below topbar: top-8) -->
<header class="fixed top-8 w-full z-40 bg-[#FAFAFA]/70 dark:bg-[#0a0a0a]/80 backdrop-blur-xl transition-colors duration-500 border-b border-black/5 dark:border-white/8">
    <div class="max-w-[1400px] mx-auto px-6 h-16 flex items-center justify-between relative">
        <a href="<?= $basePath ?>" class="font-display font-medium tracking-tight text-sm z-50">
            <b>Digitalsky</b>
        </a>

        <!-- Desktop nav — centered -->
        <nav class="hidden md:flex items-center gap-5 text-xs font-normal text-slate-700 dark:text-slate-300 absolute left-1/2 -translate-x-1/2">
            <a href="#services"   class="whitespace-nowrap hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['services'] ?></a>
            <a href="#ai"         class="whitespace-nowrap hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['ai'] ?></a>
            <a href="#industries" class="whitespace-nowrap hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['industries'] ?></a>
            <a href="#process"    class="whitespace-nowrap hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['process'] ?></a>
            <a href="#why-us"     class="whitespace-nowrap hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['why'] ?></a>
            <a href="#work"       class="whitespace-nowrap hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['work'] ?></a>
            <a href="#faq"        class="whitespace-nowrap hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['faq'] ?></a>
        </nav>

        <div class="flex items-center gap-3 z-50">
            <!-- Theme Toggle -->
            <button onclick="toggleTheme()" class="text-slate-500 hover:text-blue-600 dark:hover:text-blue-400 transition-colors" aria-label="Toggle Dark Mode">
                <i data-lucide="moon" data-theme-moon class="w-5 h-5"></i>
                <i data-lucide="sun"  data-theme-sun  class="w-5 h-5" style="display:none"></i>
            </button>

            <a href="#contact" class="hidden md:inline-flex items-center justify-center bg-blue-600 text-white text-xs font-medium py-2 px-6 rounded-[1rem] hover:bg-blue-700 transition-colors duration-300"><?= $t['nav']['cta'] ?></a>

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
        <a href="#services"   onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['services'] ?></a>
        <a href="#ai"         onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['ai'] ?></a>
        <a href="#industries" onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['industries'] ?></a>
        <a href="#process"    onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['process'] ?></a>
        <a href="#why-us"     onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['why'] ?></a>
        <a href="#work"       onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['work'] ?></a>
        <a href="#faq"        onclick="closeMenu()" class="hover:text-blue-600 dark:hover:text-blue-400 transition-colors"><?= $t['nav']['faq'] ?></a>
    </nav>
    <!-- Mobile lang switcher -->
    <div class="flex items-center gap-0 text-base text-slate-400">
        <a href="<?= $basePath ?>" class="px-2 py-1 rounded hover:text-slate-900 dark:hover:text-white transition-colors <?= $lang === 'en' ? 'font-semibold text-slate-900 dark:text-white' : '' ?>">EN</a>
        <span class="opacity-30">/</span>
        <a href="<?= $basePath ?>pl/" class="px-2 py-1 rounded hover:text-slate-900 dark:hover:text-white transition-colors <?= $lang === 'pl' ? 'font-semibold text-slate-900 dark:text-white' : '' ?>">PL</a>
        <span class="opacity-30">/</span>
        <a href="<?= $basePath ?>de/" class="px-2 py-1 rounded hover:text-slate-900 dark:hover:text-white transition-colors <?= $lang === 'de' ? 'font-semibold text-slate-900 dark:text-white' : '' ?>">DE</a>
        <span class="opacity-30">/</span>
        <a href="<?= $basePath ?>fr/" class="px-2 py-1 rounded hover:text-slate-900 dark:hover:text-white transition-colors <?= $lang === 'fr' ? 'font-semibold text-slate-900 dark:text-white' : '' ?>">FR</a>
    </div>
    <a href="#contact" onclick="closeMenu()" class="mt-4 bg-blue-600 text-white text-xl font-medium py-4 px-8 rounded-[1rem] w-full max-w-sm hover:bg-blue-700 transition-colors"><?= $t['nav']['cta'] ?></a>
</div>
