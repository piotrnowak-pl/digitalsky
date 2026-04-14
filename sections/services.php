<!-- 3. Services (Modern Bento) -->
<section id="services" class="py-24 px-6 max-w-[1400px] mx-auto">
    <div class="mb-16 md:mb-24 text-center max-w-3xl mx-auto">
        <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-6">
            <?= $t['services']['h2'] ?>
        </h2>
        <p class="text-2xl text-slate-500 dark:text-slate-400 font-normal"><?= $t['services']['sub'] ?></p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 auto-rows-[24rem]">
        <!-- Bento 1 -->
        <div class="md:col-span-2 bg-white dark:bg-[#161616] border border-black/5 dark:border-white/10 rounded-[1rem] p-10 flex flex-col justify-between hover:shadow-xl dark:hover:shadow-blue-900/10 hover:-translate-y-1 transition-all duration-500">
            <div>
                <div class="w-14 h-14 bg-blue-50 dark:bg-blue-500/15 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="layout-grid" class="w-7 h-7 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-3xl md:text-4xl tracking-tight font-medium mb-4"><?= $t['services']['bento1_h'] ?></h3>
                <p class="text-lg text-slate-500 dark:text-slate-400 max-w-md leading-normal font-normal"><?= $t['services']['bento1_p'] ?></p>
            </div>
        </div>
        
        <!-- Bento 2 -->
        <div class="md:col-span-1 bg-gradient-to-br from-[#2a2a2a] via-[#222222] to-[#1a1a1a] text-white rounded-[1rem] p-10 flex flex-col justify-between hover:shadow-xl hover:shadow-black/30 hover:-translate-y-1 transition-all duration-500 border border-white/5">
            <div>
                <i data-lucide="users" class="w-10 h-10 mb-6 opacity-90"></i>
                <h3 class="font-display text-3xl tracking-tight font-medium mb-4"><?= $t['services']['bento2_h'] ?></h3>
                <p class="text-lg opacity-90 leading-normal font-normal"><?= $t['services']['bento2_p'] ?></p>
            </div>
        </div>

        <!-- Bento 3 -->
        <div class="md:col-span-1 bg-white dark:bg-[#161616] border border-black/5 dark:border-white/10 rounded-[1rem] p-10 flex flex-col justify-between hover:shadow-xl dark:hover:shadow-blue-900/10 hover:-translate-y-1 transition-all duration-500">
            <div>
                <div class="w-14 h-14 bg-blue-50 dark:bg-blue-500/15 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="cloud" class="w-7 h-7 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-3xl tracking-tight font-medium mb-4"><?= $t['services']['bento3_h'] ?></h3>
                <p class="text-lg text-slate-500 dark:text-slate-400 leading-normal font-normal"><?= $t['services']['bento3_p'] ?></p>
            </div>
        </div>

        <!-- Bento 4 -->
        <div class="md:col-span-2 bg-slate-50 dark:bg-[#1a1a1a] border border-black/5 dark:border-white/10 rounded-[1rem] p-10 flex flex-col justify-between relative overflow-hidden hover:shadow-xl dark:hover:shadow-blue-900/10 hover:-translate-y-1 transition-all duration-500">
            <div class="relative z-10">
                <div class="w-14 h-14 bg-white dark:bg-[#272727] shadow-sm rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="link" class="w-7 h-7 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-3xl md:text-4xl tracking-tight font-medium mb-4"><?= $t['services']['bento4_h'] ?></h3>
                <p class="text-lg text-slate-600 dark:text-slate-400 max-w-md leading-normal font-normal"><?= $t['services']['bento4_p'] ?></p>
            </div>
            <!-- Abstract geometric element -->
            <div class="absolute -bottom-20 -right-20 w-80 h-80 bg-blue-500/10 dark:bg-blue-500/10 rounded-full blur-3xl z-0 pointer-events-none"></div>
        </div>
    </div>
</section>
