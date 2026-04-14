<!-- 9. Final CTA / Contact Form -->
<section id="contact" class="py-32 px-6 max-w-4xl mx-auto text-center">
    <h2 class="font-display text-5xl md:text-7xl tracking-tight font-medium mb-6">
        <?= $t['contact']['h2'] ?>
    </h2>
    <p class="text-xl text-slate-500 dark:text-slate-400 mb-4 font-normal">
        <?= $t['contact']['p1'] ?>
    </p>
    <p class="text-lg text-slate-400 dark:text-slate-500 mb-16 font-normal max-w-2xl mx-auto">
        <?= $t['contact']['p2'] ?>
    </p>

    <form id="contact-form" class="space-y-6 text-left bg-white dark:bg-[#0A0A0A] p-8 md:p-12 rounded-[1rem] shadow-xl shadow-black/5 dark:shadow-none border border-black/5 dark:border-white/5">
        <!-- Honeypot: hidden from humans, bots fill it — name "website" is bait -->
        <input type="text" id="hp-website" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;top:-9999px;width:1px;height:1px;opacity:0;pointer-events:none;">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_name'] ?></label>
                <input type="text" id="name" name="name" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="Jane Doe">
            </div>
            <div>
                <label for="company" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_company'] ?></label>
                <input type="text" id="company" name="company" class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="Acme Corp">
            </div>
        </div>
        <div>
            <label for="email" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_email'] ?></label>
            <input type="email" id="email" name="email" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="jane@acme.com">
        </div>
        <div>
            <label for="message" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_msg'] ?></label>
            <textarea id="message" name="message" rows="4" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none resize-none font-normal" placeholder="<?= htmlspecialchars($t['contact']['placeholder_msg']) ?>"></textarea>
        </div>
        <button type="submit" id="form-submit-btn" class="w-full bg-[#2D2D2D] text-white font-medium py-4 rounded-xl hover:bg-[#3a3a3a] transition-all duration-300 text-base">
            <?= $t['contact']['submit'] ?>
        </button>
        <div id="form-status" class=""></div>

        <div class="pt-4 border-t border-black/5 dark:border-white/5 flex flex-col sm:flex-row items-center justify-center gap-4 text-sm text-slate-500">
            <span><?= $t['contact']['or'] ?></span>
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
