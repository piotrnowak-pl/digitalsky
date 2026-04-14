<?php 
    $cfg = require __DIR__ . '/../contact/config.php';
    $contactEmail = $lang === 'pl' ? 'biuro@digitalsky.pl' : $cfg['contact_email'];
?>
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
        <!-- Honeypot -->
        <input type="text" id="hp-website" name="website" tabindex="-1" autocomplete="off" aria-hidden="true" style="position:absolute;left:-9999px;top:-9999px;width:1px;height:1px;opacity:0;pointer-events:none;">
        <!-- Checksum token (filled by JS before submit) -->
        <input type="hidden" id="form-token" name="token">

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="name" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_name'] ?> <span class="text-blue-500">*</span></label>
                <input type="text" id="name" name="name" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="<?= htmlspecialchars($t['contact']['placeholder_name']) ?>">
            </div>
            <div>
                <label for="company" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_company'] ?></label>
                <input type="text" id="company" name="company" class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="<?= htmlspecialchars($t['contact']['placeholder_company']) ?>">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div>
                <label for="email" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_email'] ?> <span class="text-blue-500">*</span></label>
                <input type="email" id="email" name="email" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="jane@acme.com">
            </div>
            <div>
                <label for="phone" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_phone'] ?></label>
                <input type="tel" id="phone" name="phone" class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none font-normal" placeholder="<?= htmlspecialchars($t['contact']['placeholder_phone']) ?>">
            </div>
        </div>

        <!-- Preferred contact method -->
        <div>
            <p class="block text-sm font-medium mb-3 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_preferred'] ?></p>
            <div class="flex flex-wrap gap-3" role="radiogroup" aria-label="<?= htmlspecialchars($t['contact']['label_preferred']) ?>">

                <!-- Email -->
                <label class="preferred-radio flex items-center gap-2.5 cursor-pointer px-4 py-2.5 rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-[#111] transition-all duration-200 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-50 dark:has-[:checked]:bg-blue-500/10 has-[:checked]:text-blue-600 dark:has-[:checked]:text-blue-400">
                    <input type="radio" name="preferred_contact" value="email" checked class="sr-only">
                    <i data-lucide="mail" class="w-4 h-4 shrink-0"></i>
                    <span class="text-sm font-medium"><?= $t['contact']['pref_email'] ?></span>
                </label>

                <!-- Phone -->
                <label class="preferred-radio flex items-center gap-2.5 cursor-pointer px-4 py-2.5 rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-[#111] transition-all duration-200 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-50 dark:has-[:checked]:bg-blue-500/10 has-[:checked]:text-blue-600 dark:has-[:checked]:text-blue-400">
                    <input type="radio" name="preferred_contact" value="phone" class="sr-only">
                    <i data-lucide="phone" class="w-4 h-4 shrink-0"></i>
                    <span class="text-sm font-medium"><?= $t['contact']['pref_phone'] ?></span>
                </label>

                <!-- WhatsApp -->
                <label class="preferred-radio flex items-center gap-2.5 cursor-pointer px-4 py-2.5 rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-[#111] transition-all duration-200 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-50 dark:has-[:checked]:bg-blue-500/10 has-[:checked]:text-blue-600 dark:has-[:checked]:text-blue-400">
                    <input type="radio" name="preferred_contact" value="whatsapp" class="sr-only">
                    <i data-lucide="message-circle" class="w-4 h-4 shrink-0"></i>
                    <span class="text-sm font-medium"><?= $t['contact']['pref_whatsapp'] ?></span>
                </label>

                <!-- Telegram -->
                <label class="preferred-radio flex items-center gap-2.5 cursor-pointer px-4 py-2.5 rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-[#111] transition-all duration-200 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-50 dark:has-[:checked]:bg-blue-500/10 has-[:checked]:text-blue-600 dark:has-[:checked]:text-blue-400">
                    <input type="radio" name="preferred_contact" value="telegram" class="sr-only">
                    <i data-lucide="send" class="w-4 h-4 shrink-0"></i>
                    <span class="text-sm font-medium"><?= $t['contact']['pref_telegram'] ?></span>
                </label>

                <!-- Signal -->
                <label class="preferred-radio flex items-center gap-2.5 cursor-pointer px-4 py-2.5 rounded-xl border border-slate-200 dark:border-white/10 bg-slate-50 dark:bg-[#111] transition-all duration-200 has-[:checked]:border-blue-500 has-[:checked]:bg-blue-50 dark:has-[:checked]:bg-blue-500/10 has-[:checked]:text-blue-600 dark:has-[:checked]:text-blue-400">
                    <input type="radio" name="preferred_contact" value="signal" class="sr-only">
                    <i data-lucide="shield" class="w-4 h-4 shrink-0"></i>
                    <span class="text-sm font-medium"><?= $t['contact']['pref_signal'] ?></span>
                </label>

            </div>
        </div>

        <div>
            <label for="message" class="block text-sm font-medium mb-2 text-slate-600 dark:text-slate-300"><?= $t['contact']['label_msg'] ?> <span class="text-blue-500">*</span></label>
            <textarea id="message" name="message" rows="4" required class="w-full bg-slate-50 dark:bg-[#111] border border-transparent focus:border-blue-500 rounded-xl py-3 px-4 text-slate-900 dark:text-white focus:ring-4 focus:ring-blue-500/10 transition-all outline-none resize-none font-normal"             placeholder="<?= $t['contact']['placeholder_msg'] ?>"></textarea>
        </div>

        <button type="submit" id="form-submit-btn" class="w-full bg-[#2D2D2D] text-white font-medium py-4 rounded-xl hover:bg-[#3a3a3a] transition-all duration-300 text-base flex items-center justify-center gap-2">
            <i data-lucide="send" class="w-4 h-4"></i>
            <?= $t['contact']['submit'] ?>
        </button>

        <!-- Status messages -->
        <div id="form-status" class="hidden"></div>

        <div class="pt-4 border-t border-black/5 dark:border-white/5 flex flex-col sm:flex-row items-center justify-center gap-4 text-sm text-slate-500">
            <span><?= $t['contact']['or'] ?></span>
            <a href="mailto:<?= htmlspecialchars($contactEmail) ?>" class="flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:underline font-medium">
                <i data-lucide="mail" class="w-4 h-4"></i>
                <?= htmlspecialchars($contactEmail) ?>
            </a>
            <a href="tel:<?= htmlspecialchars(str_replace(' ', '', $cfg['contact_phone'])) ?>" class="flex items-center gap-2 text-blue-600 dark:text-blue-400 hover:underline font-medium">
                <i data-lucide="phone" class="w-4 h-4"></i>
                <?= htmlspecialchars($cfg['contact_phone']) ?>
            </a>
        </div>
    </form>
</section>
