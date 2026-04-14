<!-- 5. Process Section -->
<section id="process" class="py-24 md:py-32 px-6 max-w-[1400px] mx-auto">
    <div class="text-center mb-16 md:mb-24">
        <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-6">
            <?= $t['process']['h2'] ?>
        </h2>
        <p class="text-xl text-slate-500 dark:text-slate-400 max-w-2xl mx-auto font-normal"><?= $t['process']['sub'] ?></p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-4 gap-12 md:gap-4 relative">
        <!-- Decorative line for desktop -->
        <div class="hidden md:block absolute top-[63px] left-0 w-full h-px bg-gradient-to-r from-transparent via-blue-500/20 to-transparent -z-10"></div>

        <div class="flex flex-col items-center text-center">
            <span class="font-display text-6xl text-blue-100 dark:text-blue-400/20 font-medium mb-6">01</span>
            <h3 class="font-display text-2xl tracking-tight font-medium mb-3"><?= $t['process']['step1_h'] ?></h3>
            <p class="text-base text-slate-500 dark:text-slate-400 px-4 font-normal"><?= $t['process']['step1_p'] ?></p>
        </div>
        
        <div class="flex flex-col items-center text-center">
            <span class="font-display text-6xl text-blue-100 dark:text-blue-400/20 font-medium mb-6">02</span>
            <h3 class="font-display text-2xl tracking-tight font-medium mb-3"><?= $t['process']['step2_h'] ?></h3>
            <p class="text-base text-slate-500 dark:text-slate-400 px-4 font-normal"><?= $t['process']['step2_p'] ?></p>
        </div>

        <div class="flex flex-col items-center text-center">
            <span class="font-display text-6xl text-blue-100 dark:text-blue-900/40 font-medium mb-6">03</span>
            <h3 class="font-display text-2xl tracking-tight font-medium mb-3"><?= $t['process']['step3_h'] ?></h3>
            <p class="text-base text-slate-500 dark:text-slate-400 px-4 font-normal"><?= $t['process']['step3_p'] ?></p>
        </div>

        <div class="flex flex-col items-center text-center">
            <span class="font-display text-6xl text-blue-100 dark:text-blue-900/40 font-medium mb-6">04</span>
            <h3 class="font-display text-2xl tracking-tight font-medium mb-3"><?= $t['process']['step4_h'] ?></h3>
            <p class="text-base text-slate-500 dark:text-slate-400 px-4 font-normal"><?= $t['process']['step4_p'] ?></p>
        </div>
    </div>

    <!-- Founder-led callout -->
    <div class="mt-20 bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-10 md:p-14 text-center max-w-3xl mx-auto">
        <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6 mx-auto">
            <i data-lucide="user-check" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
        </div>
        <h3 class="font-display text-2xl md:text-3xl tracking-tight font-medium mb-4"><?= $t['process']['founder_h'] ?></h3>
        <p class="text-lg text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['process']['founder_p'] ?></p>
    </div>
</section>
