<!-- 1. Hero Section -->
<section class="relative pt-12 pb-2 md:pt-0 md:pb-12 px-6 max-w-[1400px] mx-auto min-h-[90vh] flex flex-col justify-center overflow-hidden mt-16 md:mt-0">
    <div class="animate-fade-up max-w-5xl relative z-10">

        <!-- H1 rotator — fixed height set by JS to prevent layout shift -->
        <div id="hero-h1-wrap" class="relative mb-8" style="min-height:1px">
            <?php
            $slides = [
                ['h1' => $t['hero']['h1'],   'sub' => $t['hero']['h1_sub']],
                ['h1' => $t['hero']['h1_2'],  'sub' => $t['hero']['h1_sub_2']],
                ['h1' => $t['hero']['h1_3'],  'sub' => $t['hero']['h1_sub_3']],
            ];
            foreach ($slides as $i => $slide):
            ?>
            <h1
                class="hero-slide font-display text-[2.1rem] md:text-[5rem] lg:text-[5rem] tracking-tight font-medium leading-[1.05] md:leading-[0.97] [overflow-wrap:anywhere] <?= $i === 0 ? 'hero-slide--active' : '' ?>"
                aria-hidden="<?= $i === 0 ? 'false' : 'true' ?>"
                data-slide="<?= $i ?>"
            >
                <?= $slide['h1'] ?>
                <div class="text-slate-400 dark:text-slate-600" style="margin-top:15px"><?= $slide['sub'] ?></div>
            </h1>
            <?php endforeach; ?>
        </div>

        <p class="hero-desc text-base text-slate-500 dark:text-slate-400 max-w-4xl leading-relaxed mb-12 font-normal">
            <?= $t['hero']['p'] ?>
        </p>
        <div class="flex flex-row flex-wrap gap-4 items-center justify-start mb-16">
            <a href="#contact" class="inline-flex items-center justify-center bg-[#2D2D2D] text-white text-lg font-medium py-4 px-8 rounded-[1rem] hover:bg-[#3a3a3a] hover:scale-105 transition-all duration-300">
                <?= $t['hero']['cta1'] ?>
            </a>
            <a href="#work" class="inline-flex items-center justify-center gap-2 text-slate-700 dark:text-slate-300 text-lg font-medium py-4 px-8 rounded-[1rem] border border-slate-200 dark:border-white/10 hover:border-slate-400 dark:hover:border-white/25 hover:bg-slate-50 dark:hover:bg-white/5 transition-all duration-300">
                <i data-lucide="play-circle" class="w-5 h-5 opacity-60"></i>
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
