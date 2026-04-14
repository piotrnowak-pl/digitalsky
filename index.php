<?php
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
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class'
        }
    </script>
    <script src="https://unpkg.com/lucide@latest"></script>
    
    <style>
        @import url('https://api.fontshare.com/v2/css?f[]=satoshi@400,500&f[]=general-sans@400,500&display=swap');
        
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
                font-size: 1.3rem;
                line-height: 1.75rem;
            }
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

        document.getElementById('contact-form').addEventListener('submit', async function(e) {
            e.preventDefault();
            const btn    = document.getElementById('form-submit-btn');
            const status = document.getElementById('form-status');
            const name     = document.getElementById('name').value.trim();
            const company  = document.getElementById('company').value.trim();
            const email    = document.getElementById('email').value.trim();
            const message  = document.getElementById('message').value.trim();
            const website  = document.getElementById('hp-website').value.trim(); // honeypot

            status.className = '';
            status.textContent = '';
            if (!name || !email || !message) {
                status.textContent = _t.valReq;
                status.className = 'mt-4 text-center text-sm text-red-500 font-medium';
                return;
            }
            const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRx.test(email)) {
                status.textContent = _t.valEmail;
                status.className = 'mt-4 text-center text-sm text-red-500 font-medium';
                return;
            }

            btn.disabled = true;
            btn.textContent = _t.sending;

            try {
                const res = await fetch('send.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({ name, company, email, message, website })
                });
                const data = await res.json();
                if (data.ok) {
                    status.innerHTML = '&#10003; ' + _t.success;
                    status.className = 'mt-4 text-center text-sm text-green-600 dark:text-green-400 font-medium';
                    document.getElementById('contact-form').reset();
                } else {
                    throw new Error(data.error || 'Unknown error');
                }
            } catch (err) {
                status.textContent = _t.error;
                status.className = 'mt-4 text-center text-sm text-red-500 font-medium';
            } finally {
                btn.disabled = false;
                btn.textContent = _t.submit;
            }
        });
    </script>

</body></html>
