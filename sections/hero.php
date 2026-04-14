<!-- 1. Hero Section -->
<section class="relative pt-32 pb-16 md:pt-48 md:pb-32 px-6 max-w-[1400px] mx-auto min-h-[90vh] flex flex-col justify-center overflow-hidden">
    <div class="animate-fade-up max-w-5xl relative z-10">
        <h1 class="font-display text-5xl md:text-[5rem] lg:text-[5rem] tracking-tight font-medium leading-[0.97] mb-8">
            <?= $t['hero']['h1'] ?> <br class="hidden md:block">
            <span class="text-slate-400 dark:text-slate-600"><?= $t['hero']['h1_sub'] ?></span>
        </h1>
        <p class="hero-desc text-xl md:text-3xl text-slate-500 dark:text-slate-400 max-w-3xl leading-relaxed mb-12 font-normal">
            <?= $t['hero']['p'] ?>
        </p>
        <div class="flex flex-col sm:flex-row gap-4 items-center mb-16">
            <a href="#contact" class="w-full sm:w-auto inline-flex items-center justify-center bg-[#2D2D2D] text-white text-lg font-medium py-4 px-8 rounded-[1rem] hover:bg-[#3a3a3a] hover:scale-105 transition-all duration-300">
                <?= $t['hero']['cta1'] ?>
            </a>
            <a href="#work" class="w-full sm:w-auto inline-flex items-center justify-center text-slate-900 dark:text-white text-lg font-medium py-4 px-8 rounded-[1rem] hover:bg-slate-100 dark:hover:bg-white/5 transition-colors duration-300">
                <?= $t['hero']['cta2'] ?>
            </a>
        </div>

        <!-- Trust signals -->
        <div class="flex flex-col sm:flex-row gap-6 sm:gap-10 items-start sm:items-center">
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-blue-50 dark:bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                    <i data-lucide="check-circle" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
                </div>
                <span class="text-base font-medium text-slate-700 dark:text-slate-300"><?= $t['hero']['trust1'] ?></span>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-blue-50 dark:bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                    <i data-lucide="trending-up" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
                </div>
                <span class="text-base font-medium text-slate-700 dark:text-slate-300"><?= $t['hero']['trust2'] ?></span>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-9 h-9 bg-blue-50 dark:bg-blue-500/10 rounded-xl flex items-center justify-center flex-shrink-0">
                    <i data-lucide="globe" class="w-5 h-5 text-blue-600 dark:text-blue-400"></i>
                </div>
                <span class="text-base font-medium text-slate-700 dark:text-slate-300"><?= $t['hero']['trust3'] ?></span>
            </div>
        </div>
    </div>
    
    <!-- Abstract background shape -->
    <div class="absolute top-1/2 right-0 -translate-y-1/2 w-[600px] h-[600px] bg-blue-500/20 dark:bg-blue-500/10 rounded-full blur-[120px] pointer-events-none -z-10"></div>
</section>
