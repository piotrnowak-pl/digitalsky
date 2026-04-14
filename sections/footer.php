<!-- Footer -->
<footer class="py-12 border-t border-white/10 bg-[#111111]">
    <div class="max-w-[1400px] mx-auto px-6 flex flex-col gap-10">
        <!-- SEO content row -->
        <div class="text-xs text-slate-500 leading-relaxed max-w-4xl mx-auto text-center">
            <?= $t['footer']['seo'] ?>
        </div>

        <!-- Footer nav — centered row -->
        <nav class="flex flex-wrap justify-center gap-6 text-sm font-normal text-slate-400">
            <a href="#services"   class="hover:text-white transition-colors"><?= $t['nav']['services'] ?></a>
            <a href="#industries" class="hover:text-white transition-colors"><?= $t['nav']['industries'] ?></a>
            <a href="#process"    class="hover:text-white transition-colors"><?= $t['nav']['process'] ?></a>
            <a href="#why-us"     class="hover:text-white transition-colors"><?= $t['nav']['why'] ?></a>
            <a href="#work"       class="hover:text-white transition-colors"><?= $t['nav']['work'] ?></a>
            <a href="#faq"        class="hover:text-white transition-colors"><?= $t['nav']['faq'] ?></a>
        </nav>

        <div class="flex flex-col md:flex-row justify-between items-center gap-8">
            <div>
                <div class="font-display font-medium tracking-tight text-xl text-white mb-2">
                    <b>Digitalsky</b>
                </div>
                <div class="flex flex-col sm:flex-row gap-3 text-sm text-slate-500">
                    <?php $footerEmail = $lang === 'pl' ? 'biuro@digitalsky.pl' : 'contact@digitalsky.pl'; ?>
                    <a href="mailto:<?= $footerEmail ?>" class="hover:text-slate-300 transition-colors flex items-center gap-1.5">
                        <i data-lucide="mail" class="w-3.5 h-3.5"></i>
                        <?= $footerEmail ?>
                    </a>
                    <a href="tel:+48506323709" class="hover:text-slate-300 transition-colors flex items-center gap-1.5">
                        <i data-lucide="phone" class="w-3.5 h-3.5"></i>
                        +48 506 323 709
                    </a>
                </div>
            </div>
            
            <div class="text-sm text-slate-500 font-normal">
                <?= $t['footer']['since'] ?>
            </div>
        </div>
    </div>
</footer>
