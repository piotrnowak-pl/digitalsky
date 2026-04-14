<!-- 4. Industries Section -->
<section id="industries" class="py-24 md:py-32 bg-white dark:bg-[#0d0d0d]">
    <div class="max-w-[1400px] mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
        <div>
            <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-6 text-center lg:text-left">
                <?= $t['industries']['h2'] ?>
            </h2>
            <p class="text-xl text-slate-500 dark:text-slate-400 mb-16 text-center lg:text-left font-normal"><?= $t['industries']['sub'] ?></p>
            
            <div class="space-y-10">
                <div class="group cursor-default border-l-2 border-transparent hover:border-blue-600 pl-6 transition-all duration-300">
                    <h3 class="font-display text-2xl md:text-3xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors"><?= $t['industries']['prod_h'] ?></h3>
                    <p class="text-lg text-slate-500 dark:text-slate-400 font-normal"><?= $t['industries']['prod_p'] ?></p>
                </div>
                <div class="group cursor-default border-l-2 border-transparent hover:border-blue-600 pl-6 transition-all duration-300">
                    <h3 class="font-display text-2xl md:text-3xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors"><?= $t['industries']['svc_h'] ?></h3>
                    <p class="text-lg text-slate-500 dark:text-slate-400 font-normal"><?= $t['industries']['svc_p'] ?></p>
                </div>
                <div class="group cursor-default border-l-2 border-transparent hover:border-blue-600 pl-6 transition-all duration-300">
                    <h3 class="font-display text-2xl md:text-3xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors"><?= $t['industries']['ecom_h'] ?></h3>
                    <p class="text-lg text-slate-500 dark:text-slate-400 font-normal"><?= $t['industries']['ecom_p'] ?></p>
                </div>
                <div class="group cursor-default border-l-2 border-transparent hover:border-blue-600 pl-6 transition-all duration-300">
                    <h3 class="font-display text-2xl md:text-3xl font-medium mb-2 group-hover:text-blue-600 dark:group-hover:text-blue-400 transition-colors"><?= $t['industries']['start_h'] ?></h3>
                    <p class="text-lg text-slate-500 dark:text-slate-400 font-normal"><?= $t['industries']['start_p'] ?></p>
                </div>
            </div>
        </div>
        
        <div class="relative h-[600px] rounded-[1rem] overflow-hidden shadow-2xl">
            <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&amp;w=2000&amp;auto=format&amp;fit=crop" class="absolute inset-0 w-full h-full object-cover scale-105 hover:scale-100 transition-transform duration-1000 grayscale opacity-90" alt="Growth and Analytics">
            <div class="absolute inset-0 bg-blue-600/10 mix-blend-overlay"></div>
        </div>
    </div>
</section>
