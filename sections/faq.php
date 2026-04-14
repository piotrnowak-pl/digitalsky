<!-- 8. FAQ Section -->
<section id="faq" class="py-24 md:py-32 px-6 max-w-4xl mx-auto">
    <div class="text-center mb-16">
        <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-4">
            <?= $t['faq']['h2'] ?>
        </h2>
        <p class="text-lg text-slate-500 dark:text-slate-400 font-normal"><?= $t['faq']['sub'] ?></p>
    </div>

    <div class="space-y-3" id="faq-list">
        <?php for ($i = 1; $i <= 8; $i++): ?>
        <div class="faq-item bg-white dark:bg-[#0A0A0A] border border-black/5 dark:border-white/5 hover:border-black/20 dark:hover:border-white/15 rounded-[1rem] overflow-hidden transition-colors">
            <button onclick="toggleFaq(this)" class="w-full flex items-center justify-between p-6 text-left transition-colors">
                <span class="font-display text-lg font-medium pr-8"><?= $t['faq']['q' . $i] ?></span>
                <i data-lucide="plus" class="w-5 h-5 text-blue-600 dark:text-blue-400 flex-shrink-0 faq-icon transition-transform duration-300"></i>
            </button>
            <div class="faq-answer hidden px-6 pb-6">
                <p class="text-sm text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['faq']['a' . $i] ?></p>
            </div>
        </div>
        <?php endfor; ?>
    </div>
</section>
