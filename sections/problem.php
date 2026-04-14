<!-- 2. Immersive Visual / Problem Section -->
<section class="pt-8 pb-24 px-6 max-w-[1400px] mx-auto">
    <div class="bg-slate-100 dark:bg-[#141414] rounded-[1rem] md:rounded-[1rem] p-8 md:p-16 lg:p-24 overflow-hidden relative group border border-transparent dark:border-white/8">
        <div class="relative z-10">
            <h2 class="font-display text-4xl md:text-5xl lg:text-6xl tracking-tight font-medium mb-6 text-center lg:text-left text-slate-900 dark:text-white mix-blend-difference">
                <?= $t['problem']['h2'] ?>
            </h2>
            <p class="text-xl text-slate-600 dark:text-slate-300 mb-4 mix-blend-difference font-normal text-center lg:text-left max-w-2xl"><?= $t['problem']['p1'] ?></p>
            <p class="text-lg text-slate-500 dark:text-slate-400 mb-10 font-normal text-center lg:text-left max-w-2xl"><?= $t['problem']['p2'] ?></p>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10">
                    <i data-lucide="folder-x" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                    <span class="font-medium text-base"><?= $t['problem']['bullet1'] ?></span>
                </div>
                <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10">
                    <i data-lucide="link-2-off" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                    <span class="font-medium text-base"><?= $t['problem']['bullet2'] ?></span>
                </div>
                <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10">
                    <i data-lucide="bar-chart-2" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                    <span class="font-medium text-base"><?= $t['problem']['bullet3'] ?></span>
                </div>
                <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10">
                    <i data-lucide="package-x" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                    <span class="font-medium text-base"><?= $t['problem']['bullet4'] ?></span>
                </div>
                <div class="flex items-center gap-4 bg-white/50 dark:bg-white/[0.05] backdrop-blur-md p-4 rounded-2xl border border-white/20 dark:border-white/10 md:col-span-2 md:max-w-[50%]">
                    <i data-lucide="cpu" class="w-6 h-6 text-blue-600 dark:text-blue-400 flex-shrink-0"></i>
                    <span class="font-medium text-base"><?= $t['problem']['bullet5'] ?></span>
                </div>
            </div>
        </div>
        
        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&amp;w=2000&amp;auto=format&amp;fit=crop" class="absolute inset-0 w-full h-full object-cover opacity-30 dark:opacity-40 mix-blend-overlay group-hover:scale-105 transition-transform duration-1000 grayscale" alt="Dashboard">
    </div>
</section>
