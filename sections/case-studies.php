<!-- 7. Work / Case Studies -->
<section id="work" class="py-24 px-6 bg-[#050505] text-white">
    <div class="max-w-[1400px] mx-auto">
        <div class="mb-16 text-center">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-4">
                <?= $t['cases']['h2'] ?>
            </h2>
            <p class="text-xl text-slate-400 mb-8 font-normal max-w-2xl mx-auto"><?= $t['cases']['sub'] ?></p>
            <a href="#contact" class="inline-flex items-center gap-2 text-base font-medium text-blue-500 hover:text-blue-400 transition-colors">
                <?= $t['cases']['discuss'] ?>
                <i data-lucide="arrow-right" class="w-5 h-5"></i>
            </a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white/[0.02] rounded-[1rem] p-10 backdrop-blur-md border border-white/5 hover:border-white/10 hover:bg-white/[0.04] transition-all duration-500">
                <div class="text-sm font-medium px-4 py-1.5 bg-blue-500/10 text-blue-400 rounded-full inline-block mb-8"><?= $t['cases']['cs1_tag'] ?></div>
                <h3 class="font-display text-2xl tracking-tight font-medium mb-3"><?= $t['cases']['cs1_h'] ?></h3>
                <p class="text-base text-slate-400 mb-4 font-normal"><?= $t['cases']['cs1_p1'] ?></p>
                <p class="text-base text-slate-500 mb-12 font-normal"><?= $t['cases']['cs1_p2'] ?></p>
                <div class="pt-6 border-t border-white/10">
                    <p class="font-display text-5xl font-medium mb-2 text-white">92%</p>
                    <p class="text-sm text-slate-500 uppercase tracking-widest font-medium"><?= $t['cases']['cs1_stat'] ?></p>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="bg-white/[0.02] rounded-[1rem] p-10 backdrop-blur-md border border-white/5 hover:border-white/10 hover:bg-white/[0.04] transition-all duration-500">
                <div class="text-sm font-medium px-4 py-1.5 bg-blue-500/10 text-blue-400 rounded-full inline-block mb-8"><?= $t['cases']['cs2_tag'] ?></div>
                <h3 class="font-display text-2xl tracking-tight font-medium mb-3"><?= $t['cases']['cs2_h'] ?></h3>
                <p class="text-base text-slate-400 mb-4 font-normal"><?= $t['cases']['cs2_p1'] ?></p>
                <p class="text-base text-slate-500 mb-12 font-normal"><?= $t['cases']['cs2_p2'] ?></p>
                <div class="pt-6 border-t border-white/10">
                    <p class="font-display text-5xl font-medium mb-2 text-white">40h</p>
                    <p class="text-sm text-slate-500 uppercase tracking-widest font-medium"><?= $t['cases']['cs2_stat'] ?></p>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="bg-white/[0.02] rounded-[1rem] p-10 backdrop-blur-md border border-white/5 hover:border-white/10 hover:bg-white/[0.04] transition-all duration-500">
                <div class="text-sm font-medium px-4 py-1.5 bg-blue-500/10 text-blue-400 rounded-full inline-block mb-8"><?= $t['cases']['cs3_tag'] ?></div>
                <h3 class="font-display text-2xl tracking-tight font-medium mb-3"><?= $t['cases']['cs3_h'] ?></h3>
                <p class="text-base text-slate-400 mb-4 font-normal"><?= $t['cases']['cs3_p1'] ?></p>
                <p class="text-base text-slate-500 mb-12 font-normal"><?= $t['cases']['cs3_p2'] ?></p>
                <div class="pt-6 border-t border-white/10">
                    <p class="font-display text-5xl font-medium mb-2 text-white">15m</p>
                    <p class="text-sm text-slate-500 uppercase tracking-widest font-medium"><?= $t['cases']['cs3_stat'] ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
