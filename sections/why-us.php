<!-- 6. Why DIGITALSKY Section -->
<section id="why-us" class="py-24 md:py-32 bg-white dark:bg-[#050505]">
    <div class="max-w-[1400px] mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-6">
                <?= $t['why']['h2'] ?>
            </h2>
            <p class="text-xl text-slate-500 dark:text-slate-400 max-w-2xl mx-auto font-normal"><?= $t['why']['sub'] ?></p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="user-check" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['why']['card1_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['why']['card1_p'] ?></p>
            </div>

            <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="target" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['why']['card2_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['why']['card2_p'] ?></p>
            </div>

            <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="handshake" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['why']['card3_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['why']['card3_p'] ?></p>
            </div>

            <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="zap" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['why']['card4_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['why']['card4_p'] ?></p>
            </div>

            <div class="bg-slate-50 dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="building-2" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['why']['card5_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['why']['card5_p'] ?></p>
            </div>

            <div class="bg-blue-600 text-white rounded-[1rem] p-8 hover:-translate-y-1 hover:shadow-lg hover:shadow-blue-600/20 transition-all duration-300 flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 bg-white/10 rounded-2xl flex items-center justify-center mb-6">
                        <i data-lucide="shield-check" class="w-6 h-6 text-white"></i>
                    </div>
                    <h3 class="font-display text-xl font-medium mb-3"><?= $t['why']['card6_h'] ?></h3>
                    <p class="text-base opacity-90 font-normal leading-normal"><?= $t['why']['card6_p'] ?></p>
                </div>
                <a href="#contact" class="mt-8 inline-flex items-center gap-2 text-white font-medium text-base hover:gap-4 transition-all duration-200">
                    <?= $t['why']['card6_cta'] ?> <i data-lucide="arrow-right" class="w-4 h-4"></i>
                </a>
            </div>
        </div>
    </div>
</section>
