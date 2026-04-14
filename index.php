<?php
// ── Site config ────────────────────────────────────────────────
$cfg = require __DIR__ . '/contact/config.php';

// ── Base path (auto-detect subdirectory) ───────────────────────
// Works at root (production) and in subdirectory (dev: /sky/digitalsky/)
$scriptDir = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$basePath  = rtrim($scriptDir, '/') . '/';   // e.g. "/" or "/sky/digitalsky/"

// ── Language detection ─────────────────────────────────────────
// Rule: URL is the single source of truth.
//   - /pl/, /de/, /fr/  → that language
//   - / (no lang param) → always EN
// On first visit to /, detect preferred language and redirect if != en.
$supported = ['en', 'pl', 'de', 'fr'];
$langFromUrl = isset($_GET['lang']) && in_array($_GET['lang'], $supported) ? $_GET['lang'] : null;

if ($langFromUrl) {
    // Explicit language in URL — use it
    $lang = $langFromUrl;
} else {
    // Root URL (no lang param) — only redirect on first visit (no cookie set yet).
    // If a cookie exists the user has already made a choice — always render EN at root.
    $hasCookie = isset($_COOKIE['lang']) && in_array($_COOKIE['lang'], $supported);

    if (!$hasCookie) {
        // First visit: detect via Accept-Language and redirect if non-EN
        $browserLang = isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])
            ? strtolower(substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2))
            : '';
        if (in_array($browserLang, $supported) && $browserLang !== 'en') {
            header('Location: ' . $basePath . $browserLang . '/', true, 302);
            exit;
        }
    }

    // Render EN (user chose EN explicitly, or browser is EN, or cookie already set)
    $lang = 'en';
}

// Save preference in cookie (30 days)
setcookie('lang', $lang, time() + 86400 * 30, '/');

// ── Load translations (with EN fallback) ───────────────────────
$en = json_decode(file_get_contents(__DIR__ . '/lang/en.json'), true);
if ($lang === 'en') {
    $t = $en;
} else {
    $current = json_decode(file_get_contents(__DIR__ . '/lang/' . $lang . '.json'), true);
    // Deep merge: current language on top of EN fallback
    $t = array_replace_recursive($en, $current ?: []);
}

// ── Fix typographic widows ──────────────────────────────────────
// Replaces the space after short words (1–3 chars) with &nbsp;
// so they never hang alone at the start of a new line.
function fix_widows(mixed $value): mixed {
    if (is_string($value)) {
        return preg_replace('/(\s)(\S{1,3})\s+/u', '$1$2&nbsp;', $value);
    }
    if (is_array($value)) {
        return array_map('fix_widows', $value);
    }
    return $value;
}
$t = fix_widows($t);

// ── Canonical URL helper ───────────────────────────────────────
$baseUrl = 'https://digitalsky.pl';
$canonical = $lang === 'en' ? $baseUrl . '/' : $baseUrl . '/' . $lang . '/';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" class="scroll-smooth"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($t['meta']['title']) ?></title>
    <meta name="description" content="<?= htmlspecialchars($t['meta']['description']) ?>">
    <link rel="canonical" href="<?= $canonical ?>">
    <link rel="sitemap" type="application/xml" href="/sitemap.xml">

    <!-- hreflang for all language versions -->
    <link rel="alternate" hreflang="en" href="<?= $baseUrl ?>/">
    <link rel="alternate" hreflang="pl" href="<?= $baseUrl ?>/pl/">
    <link rel="alternate" hreflang="de" href="<?= $baseUrl ?>/de/">
    <link rel="alternate" hreflang="fr" href="<?= $baseUrl ?>/fr/">
    <link rel="alternate" hreflang="x-default" href="<?= $baseUrl ?>/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?= $canonical ?>">
    <meta property="og:title" content="<?= htmlspecialchars($t['meta']['og_title']) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($t['meta']['description']) ?>">
    <meta property="og:image" content="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?= htmlspecialchars($t['meta']['og_title']) ?>">
    <meta name="twitter:description" content="<?= htmlspecialchars($t['meta']['description']) ?>">
    <meta name="twitter:image" content="https://images.unsplash.com/photo-1551288049-bebda4e38f71?q=80&w=1200&auto=format&fit=crop">

    <!-- Schema.org -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ProfessionalService",
      "name": "DIGITALSKY",
      "url": "https://digitalsky.pl",
      "email": "contact@digitalsky.pl",
      "telephone": "+48506323709",
      "description": "<?= htmlspecialchars($t['meta']['description']) ?>",
      "foundingDate": "2016",
      "areaServed": ["PL","EU","US"],
      "serviceType": ["Custom Software Development","Process Automation","API Integration","CRM Development","SaaS Development"],
      "priceRange": "$$"
    }
    </script>
    
    <script src="<?= $basePath ?>static/js/tailwind.js"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <script src="<?= $basePath ?>static/js/lucide.js"></script>
    
    <style>
        @import url('<?= $basePath ?>static/css/fonts.css');
        
        body {
            font-family: 'General Sans', sans-serif;
        }
        h1, h2, h3, h4, h5, h6, .font-display {
            font-family: 'Satoshi', sans-serif;
        }
        
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        @keyframes fadeUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fade-up {
            animation: fadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
        }

        @media (min-width: 768px) {
            .hero-desc {
                font-size: 1.75rem;
                line-height: 2.7rem;
            }
        }

        /* Hero H1 rotator */
        #hero-h1-wrap {
            position: relative;
            overflow: hidden;
        }
        .hero-slide {
            position: absolute;
            top: 50%;
            left: 0;
            width: 100%;
            transform: translateY(-50%) translateX(100%);
            opacity: 0;
            transition: transform 600ms cubic-bezier(0.4, 0, 0.2, 1), opacity 600ms ease;
            pointer-events: none;
        }
        .hero-slide--active {
            opacity: 1;
            transform: translateY(-50%) translateX(0);
            pointer-events: auto;
        }
        .hero-slide--exit {
            opacity: 0;
            transform: translateY(-50%) translateX(-100%);
        }
    </style>

    <script>
        const _initDark = localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches);
        if (_initDark) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const isDark = document.documentElement.classList.contains('dark');
            document.querySelectorAll('[data-theme-moon]').forEach(el => el.style.display = isDark ? 'none' : '');
            document.querySelectorAll('[data-theme-sun]').forEach(el  => el.style.display = isDark ? '' : 'none');
        });

        function toggleTheme() {
            const isDark = document.documentElement.classList.contains('dark');
            if (isDark) {
                document.documentElement.classList.remove('dark');
                localStorage.theme = 'light';
            } else {
                document.documentElement.classList.add('dark');
                localStorage.theme = 'dark';
            }
            const moonIcons = document.querySelectorAll('[data-theme-moon]');
            const sunIcons  = document.querySelectorAll('[data-theme-sun]');
            if (isDark) {
                moonIcons.forEach(el => el.style.display = '');
                sunIcons.forEach(el  => el.style.display = 'none');
            } else {
                moonIcons.forEach(el => el.style.display = 'none');
                sunIcons.forEach(el  => el.style.display = '');
            }
        }

        let isMenuOpen = false;
        function toggleMenu() {
            const menu    = document.getElementById('mobile-menu');
            const topbar  = document.getElementById('lang-topbar');
            const body    = document.body;
            isMenuOpen = !isMenuOpen;
            
            if (isMenuOpen) {
                menu.classList.remove('opacity-0', 'pointer-events-none', 'translate-y-8');
                menu.classList.add('opacity-100', 'pointer-events-auto', 'translate-y-0');
                body.classList.add('overflow-hidden');
                if (topbar) topbar.classList.add('hidden');
            } else {
                menu.classList.remove('opacity-100', 'pointer-events-auto', 'translate-y-0');
                menu.classList.add('opacity-0', 'pointer-events-none', 'translate-y-8');
                body.classList.remove('overflow-hidden');
                if (topbar) topbar.classList.remove('hidden');
            }
        }

        function closeMenu() {
            if (isMenuOpen) toggleMenu();
        }
    </script>
</head>
<body class="bg-[#FAFAFA] text-slate-900 antialiased selection:bg-blue-600 selection:text-white dark:selection:bg-blue-500 dark:selection:text-black transition-colors duration-500 dark:bg-[#0a0a0a] dark:text-slate-50">

    <?php include __DIR__ . '/sections/header.php'; ?>

    <main>
        <?php include __DIR__ . '/sections/hero.php'; ?>
        <?php include __DIR__ . '/sections/problem.php'; ?>
        <?php include __DIR__ . '/sections/services.php'; ?>
        <?php include __DIR__ . '/sections/ai.php'; ?>
        <?php include __DIR__ . '/sections/industries.php'; ?>
        <?php include __DIR__ . '/sections/process.php'; ?>
        <?php include __DIR__ . '/sections/why-us.php'; ?>
        <?php include __DIR__ . '/sections/case-studies.php'; ?>
        <?php include __DIR__ . '/sections/faq.php'; ?>
        <?php include __DIR__ . '/sections/contact.php'; ?>
    </main>

    <?php include __DIR__ . '/sections/footer.php'; ?>

    <script>
        lucide.createIcons({
            attrs: {
                'stroke-width': 1.5
            }
        });

        /* ── FAQ accordion ───────────────────────────────── */
        function toggleFaq(btn) {
            const answer = btn.nextElementSibling;
            const icon   = btn.querySelector('.faq-icon');
            const isOpen = !answer.classList.contains('hidden');

            // close all
            document.querySelectorAll('.faq-answer').forEach(a => a.classList.add('hidden'));
            document.querySelectorAll('.faq-icon').forEach(i => {
                i.setAttribute('data-lucide', 'plus');
                i.style.transform = 'rotate(0deg)';
            });

            if (!isOpen) {
                answer.classList.remove('hidden');
                icon.setAttribute('data-lucide', 'minus');
                icon.style.transform = 'rotate(0deg)';
            }
            lucide.createIcons({ attrs: { 'stroke-width': 1.5 } });
        }

        /* ── Contact form ────────────────────────────────── */
        const _t = {
            sending:    <?= json_encode($t['contact']['sending']) ?>,
            success:    <?= json_encode($t['contact']['success']) ?>,
            error:      <?= json_encode($t['contact']['error']) ?>,
            submit:     <?= json_encode($t['contact']['submit']) ?>,
            valReq:     <?= json_encode($t['contact']['validation_required']) ?>,
            valEmail:   <?= json_encode($t['contact']['validation_email']) ?>
        };
        const _sendUrl  = <?= json_encode($basePath . 'contact/send.php') ?>;
        const _csalt    = <?= json_encode($cfg['checksum_salt']) ?>;

        // Checksum: simple hash of salt+name+email+message (djb2-style, 32-bit)
        function formChecksum(name, email, message) {
            const str = _csalt + '|' + name.toLowerCase() + '|' + email.toLowerCase() + '|' + message.length;
            let h = 5381;
            for (let i = 0; i < str.length; i++) {
                h = ((h << 5) + h) ^ str.charCodeAt(i);
                h = h >>> 0; // keep 32-bit unsigned
            }
            return h.toString(16);
        }

        // Status helpers
        function showSuccess(msg) {
            const s = document.getElementById('form-status');
            s.className = '';
            s.innerHTML = `
                <div class="mt-4 flex items-start gap-4 bg-green-50 dark:bg-green-500/10 border border-green-200 dark:border-green-500/20 rounded-[1rem] p-5 text-left">
                    <div class="w-10 h-10 rounded-xl bg-green-100 dark:bg-green-500/20 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-green-600 dark:text-green-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"/></svg>
                    </div>
                    <div>
                        <p class="font-semibold text-green-800 dark:text-green-300 font-display text-base">${msg}</p>
                    </div>
                </div>`;
            s.classList.remove('hidden');
            s.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        function showError(msg) {
            const s = document.getElementById('form-status');
            s.className = '';
            s.innerHTML = `
                <div class="mt-4 flex items-start gap-4 bg-red-50 dark:bg-red-500/10 border border-red-200 dark:border-red-500/20 rounded-[1rem] p-5 text-left">
                    <div class="w-10 h-10 rounded-xl bg-red-100 dark:bg-red-500/20 flex items-center justify-center shrink-0">
                        <svg class="w-5 h-5 text-red-600 dark:text-red-400" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M12 8v4m0 4h.01"/></svg>
                    </div>
                    <div>
                        <p class="font-semibold text-red-800 dark:text-red-300 font-display text-base">${msg}</p>
                    </div>
                </div>`;
            s.classList.remove('hidden');
            s.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
        }

        document.getElementById('contact-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn       = document.getElementById('form-submit-btn');
            const name      = document.getElementById('name').value.trim();
            const company   = document.getElementById('company').value.trim();
            const email     = document.getElementById('email').value.trim();
            const phone     = document.getElementById('phone').value.trim();
            const message   = document.getElementById('message').value.trim();
            const website   = document.getElementById('hp-website').value.trim();
            const preferred = document.querySelector('input[name="preferred_contact"]:checked')?.value || 'email';

            document.getElementById('form-status').classList.add('hidden');

            if (!name || !email || !message) { showError(_t.valReq); return; }
            const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRx.test(email)) { showError(_t.valEmail); return; }

            // Compute & inject checksum token
            document.getElementById('form-token').value = formChecksum(name, email, message);

            btn.disabled = true;
            btn.innerHTML = `<svg class="animate-spin w-4 h-4" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"/><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8v8z"/></svg> ${_t.sending}`;

            try {
                const res = await fetch(_sendUrl, {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name, company, email, phone, message, website, preferred,
                                          token: document.getElementById('form-token').value })
                });
                const data = await res.json();
                if (data.ok) {
                    showSuccess(_t.success);
                    document.getElementById('contact-form').reset();
                } else {
                    throw new Error(data.error || 'Unknown error');
                }
            } catch (err) {
                showError(_t.error);
            } finally {
                btn.disabled = false;
                btn.innerHTML = `<svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg> ${_t.submit}`;
            }
        });

        /* ── Hero H1 rotator ─────────────────────────────── */
        (function() {
            const wrap = document.getElementById('hero-h1-wrap');
            if (!wrap) return;
            const slides = Array.from(wrap.querySelectorAll('.hero-slide'));
            if (slides.length < 2) return;

            function measureWrap() {
                let maxH = 0;
                slides.forEach(s => {
                    s.style.cssText = 'position:relative !important; opacity:1 !important; transform:none !important; visibility:visible !important;';
                    if (s.offsetHeight > maxH) maxH = s.offsetHeight;
                    s.style.cssText = '';
                });
                wrap.style.height = (maxH + 32) + 'px';
            }

            measureWrap();

            // Re-measure on resize (debounced)
            let resizeTimer;
            window.addEventListener('resize', function() {
                clearTimeout(resizeTimer);
                resizeTimer = setTimeout(measureWrap, 100);
            });

            // Initial state: slide 0 visible at translateX(0), rest at translateX(100%)
            slides.forEach((s, i) => {
                if (i === 0) {
                    s.classList.add('hero-slide--active');
                    s.setAttribute('aria-hidden', 'false');
                } else {
                    s.classList.remove('hero-slide--active');
                    s.setAttribute('aria-hidden', 'true');
                }
            });

            let current = 0;
            let busy = false;

            function goToNext() {
                if (busy) return;
                busy = true;

                const prev = current;
                const next = (current + 1) % slides.length;
                const prevSlide = slides[prev];
                const nextSlide = slides[next];

                // Exit prev to the left
                prevSlide.classList.add('hero-slide--exit');
                prevSlide.classList.remove('hero-slide--active');
                prevSlide.setAttribute('aria-hidden', 'true');

                // Enter next from the right
                nextSlide.classList.add('hero-slide--active');
                nextSlide.setAttribute('aria-hidden', 'false');

                setTimeout(function() {
                    // Reset prev: remove exit, back to waiting-on-right state
                    prevSlide.classList.remove('hero-slide--exit');
                    current = next;
                    busy = false;
                }, 600);
            }

            setInterval(goToNext, 5000);
        })();
    </script>

</body></html>
