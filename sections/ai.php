<!-- AI Integration Section -->
<section id="ai" class="py-24 md:py-32 relative overflow-hidden bg-white dark:bg-[#050505]">

    <!-- Ambient background glow -->
    <div class="absolute inset-0 pointer-events-none">
        <div class="absolute top-0 left-1/4 w-[600px] h-[600px] bg-blue-500/10 dark:bg-blue-500/8 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-1/4 w-[500px] h-[500px] bg-sky-500/8 dark:bg-sky-500/6 rounded-full blur-[120px]"></div>
    </div>

    <div class="max-w-[1400px] mx-auto px-6 relative z-10">

        <!-- Header -->
        <div class="text-center mb-16 md:mb-20 max-w-4xl mx-auto">
            <span class="inline-flex items-center gap-2 text-xs font-semibold uppercase tracking-widest text-blue-600 dark:text-blue-400 mb-6 bg-blue-50 dark:bg-blue-500/10 px-4 py-2 rounded-full border border-blue-100 dark:border-blue-500/20">
                <i data-lucide="sparkles" class="w-3.5 h-3.5"></i>
                <?= $t['ai']['tag'] ?>
            </span>
            <h2 class="font-display text-4xl md:text-6xl tracking-tight font-medium mb-4">
                <?= $t['ai']['h2'] ?><br>
                <span class="text-slate-400 dark:text-slate-600"><?= $t['ai']['h2_sub'] ?></span>
            </h2>
            <p class="text-xl text-slate-500 dark:text-slate-400 font-normal leading-normal max-w-3xl mx-auto mt-6">
                <?= $t['ai']['p'] ?>
            </p>
        </div>

        <!-- 6-pillar bento grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5 mb-20">

            <!-- Pillar 1: AI CRM — hero gradient card -->
            <div class="group relative bg-gradient-to-br from-blue-600 via-blue-700 to-sky-800 text-white rounded-[1rem] p-8 flex flex-col hover:-translate-y-1 hover:shadow-2xl hover:shadow-blue-500/25 transition-all duration-300 overflow-hidden">
                <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top_right,rgba(255,255,255,0.12),transparent_60%)] pointer-events-none"></div>
                <div class="w-12 h-12 bg-white/15 rounded-2xl flex items-center justify-center mb-6 relative z-10">
                    <i data-lucide="brain-circuit" class="w-6 h-6 text-white"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3 relative z-10"><?= $t['ai']['pillar1_h'] ?></h3>
                <p class="text-base opacity-90 font-normal leading-normal relative z-10"><?= $t['ai']['pillar1_p'] ?></p>
                <!-- decorative circuit dots -->
                <div class="absolute -bottom-4 -right-4 w-32 h-32 opacity-10">
                    <svg viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="16" cy="16" r="4" fill="white"/><circle cx="64" cy="16" r="4" fill="white"/><circle cx="112" cy="16" r="4" fill="white"/>
                        <circle cx="16" cy="64" r="4" fill="white"/><circle cx="64" cy="64" r="6" fill="white"/><circle cx="112" cy="64" r="4" fill="white"/>
                        <circle cx="16" cy="112" r="4" fill="white"/><circle cx="64" cy="112" r="4" fill="white"/><circle cx="112" cy="112" r="4" fill="white"/>
                        <line x1="16" y1="16" x2="64" y2="16" stroke="white" stroke-width="1.5"/><line x1="64" y1="16" x2="112" y2="16" stroke="white" stroke-width="1.5"/>
                        <line x1="16" y1="64" x2="64" y2="64" stroke="white" stroke-width="1.5"/><line x1="64" y1="64" x2="112" y2="64" stroke="white" stroke-width="1.5"/>
                        <line x1="16" y1="16" x2="16" y2="64" stroke="white" stroke-width="1.5"/><line x1="16" y1="64" x2="16" y2="112" stroke="white" stroke-width="1.5"/>
                        <line x1="64" y1="16" x2="64" y2="64" stroke="white" stroke-width="1.5"/><line x1="112" y1="64" x2="112" y2="112" stroke="white" stroke-width="1.5"/>
                    </svg>
                </div>
            </div>

            <!-- Pillar 2: Process Automation -->
            <div class="bg-slate-50 dark:bg-[#0f0f0f] border border-black/5 dark:border-white/8 rounded-[1rem] p-8 flex flex-col hover:-translate-y-1 hover:shadow-xl dark:hover:shadow-blue-900/10 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="workflow" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['ai']['pillar2_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['ai']['pillar2_p'] ?></p>
            </div>

            <!-- Pillar 3: Translators -->
            <div class="bg-slate-50 dark:bg-[#0f0f0f] border border-black/5 dark:border-white/8 rounded-[1rem] p-8 flex flex-col hover:-translate-y-1 hover:shadow-xl dark:hover:shadow-blue-900/10 transition-all duration-300">
                <div class="w-12 h-12 bg-sky-50 dark:bg-sky-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="languages" class="w-6 h-6 text-sky-600 dark:text-sky-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['ai']['pillar3_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['ai']['pillar3_p'] ?></p>
            </div>

            <!-- Pillar 4: Predictive Analytics -->
            <div class="bg-slate-50 dark:bg-[#0f0f0f] border border-black/5 dark:border-white/8 rounded-[1rem] p-8 flex flex-col hover:-translate-y-1 hover:shadow-xl dark:hover:shadow-blue-900/10 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="chart-line" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['ai']['pillar4_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['ai']['pillar4_p'] ?></p>
            </div>

            <!-- Pillar 5: Smart Search -->
            <div class="bg-slate-50 dark:bg-[#0f0f0f] border border-black/5 dark:border-white/8 rounded-[1rem] p-8 flex flex-col hover:-translate-y-1 hover:shadow-xl dark:hover:shadow-blue-900/10 transition-all duration-300">
                <div class="w-12 h-12 bg-sky-50 dark:bg-sky-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="search-code" class="w-6 h-6 text-sky-600 dark:text-sky-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['ai']['pillar5_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['ai']['pillar5_p'] ?></p>
            </div>

            <!-- Pillar 6: Custom AI Assistants -->
            <div class="bg-slate-50 dark:bg-[#0f0f0f] border border-black/5 dark:border-white/8 rounded-[1rem] p-8 flex flex-col hover:-translate-y-1 hover:shadow-xl dark:hover:shadow-blue-900/10 transition-all duration-300">
                <div class="w-12 h-12 bg-blue-50 dark:bg-blue-500/10 rounded-2xl flex items-center justify-center mb-6">
                    <i data-lucide="bot" class="w-6 h-6 text-blue-600 dark:text-blue-400"></i>
                </div>
                <h3 class="font-display text-xl font-medium mb-3"><?= $t['ai']['pillar6_h'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal leading-normal"><?= $t['ai']['pillar6_p'] ?></p>
            </div>
        </div>

        <!-- ── Diagram: How AI plugs into your stack ─────────────── -->
        <div class="bg-slate-50 dark:bg-[#0f0f0f] border border-black/5 dark:border-white/8 rounded-[1rem] p-8 md:p-14 mb-12">
            <div class="text-center mb-10">
                <h3 class="font-display text-2xl md:text-3xl font-medium tracking-tight mb-3"><?= $t['ai']['flow_title'] ?></h3>
                <p class="text-base text-slate-500 dark:text-slate-400 font-normal max-w-2xl mx-auto"><?= $t['ai']['flow_sub'] ?></p>
            </div>

            <!-- SVG Architecture Diagram -->
            <div class="w-full overflow-x-auto">
                <svg viewBox="0 0 900 340" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-[900px] mx-auto block" aria-label="AI integration architecture diagram" role="img">
                    <defs>
                        <!-- Input node gradient (slate) -->
                        <linearGradient id="aiGradSlate" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#f1f5f9"/>
                            <stop offset="100%" stop-color="#e2e8f0"/>
                        </linearGradient>
                        <linearGradient id="aiGradSlateDark" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#1e1e1e"/>
                            <stop offset="100%" stop-color="#161616"/>
                        </linearGradient>
                        <!-- AI core gradient (blue → sky) -->
                        <linearGradient id="aiGradBlue" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#2563eb"/>
                            <stop offset="100%" stop-color="#0369a1"/>
                        </linearGradient>
                        <!-- Output gradient (blue-600 → blue-800) -->
                        <linearGradient id="aiGradBlueOut" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#3b82f6"/>
                            <stop offset="100%" stop-color="#1d4ed8"/>
                        </linearGradient>
                        <!-- Arrow marker -->
                        <marker id="arrowBlue" markerWidth="8" markerHeight="8" refX="6" refY="3" orient="auto">
                            <path d="M0,0 L0,6 L8,3 z" fill="#2563eb" fill-opacity="0.7"/>
                        </marker>
                        <marker id="arrowBlueOut" markerWidth="8" markerHeight="8" refX="6" refY="3" orient="auto">
                            <path d="M0,0 L0,6 L8,3 z" fill="#3b82f6" fill-opacity="0.8"/>
                        </marker>
                        <!-- Glow filter -->
                        <filter id="aiGlow" x="-30%" y="-30%" width="160%" height="160%">
                            <feGaussianBlur stdDeviation="6" result="blur"/>
                            <feMerge><feMergeNode in="blur"/><feMergeNode in="SourceGraphic"/></feMerge>
                        </filter>
                        <style>
                            .ai-node-bg { fill: url(#aiGradSlate); stroke: #cbd5e1; }
                            .ai-node-text { fill: #0f172a; }
                            .ai-node-sub { fill: #64748b; }
                            .ai-line { stroke: #2563eb; stroke-opacity: 0.35; }
                            .ai-line-out { stroke: #3b82f6; stroke-opacity: 0.4; }
                            /* Tailwind dark class override */
                            .dark .ai-node-bg { fill: #1a1a1a; stroke: #2d2d2d; }
                            .dark .ai-node-text { fill: #f1f5f9; }
                            .dark .ai-node-sub { fill: #94a3b8; }
                            .dark .ai-line { stroke-opacity: 0.25; }
                        </style>
                    </defs>

                    <!-- ── Input nodes (left column) ── -->
                    <!-- CRM -->
                    <rect x="20" y="30" width="170" height="70" rx="14" class="ai-node-bg" stroke-width="1.5"/>
                    <text x="56" y="62" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" class="ai-node-text"><?= htmlspecialchars($t['ai']['node_crm']) ?></text>
                    <text x="56" y="80" font-family="General Sans,sans-serif" font-size="11" class="ai-node-sub">Salesforce · HubSpot · custom</text>
                    <rect x="30" y="48" width="18" height="18" rx="5" fill="#2563eb" fill-opacity="0.15"/>
                    <text x="34" y="62" font-family="sans-serif" font-size="13" fill="#2563eb">⬡</text>

                    <!-- ERP / DB -->
                    <rect x="20" y="135" width="170" height="70" rx="14" class="ai-node-bg" stroke-width="1.5"/>
                    <text x="56" y="167" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" class="ai-node-text"><?= htmlspecialchars($t['ai']['node_erp']) ?></text>
                    <text x="56" y="185" font-family="General Sans,sans-serif" font-size="11" class="ai-node-sub">PostgreSQL · MySQL · REST</text>
                    <rect x="30" y="153" width="18" height="18" rx="5" fill="#0284c7" fill-opacity="0.15"/>
                    <text x="34" y="167" font-family="sans-serif" font-size="13" fill="#0284c7">◈</text>

                    <!-- Email / Comms -->
                    <rect x="20" y="240" width="170" height="70" rx="14" class="ai-node-bg" stroke-width="1.5"/>
                    <text x="56" y="269" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" class="ai-node-text"><?= htmlspecialchars($t['ai']['node_email']) ?></text>
                    <text x="56" y="287" font-family="General Sans,sans-serif" font-size="11" class="ai-node-sub">Gmail · Outlook · Slack</text>
                    <rect x="30" y="256" width="18" height="18" rx="5" fill="#0ea5e9" fill-opacity="0.15"/>
                    <text x="34" y="270" font-family="sans-serif" font-size="13" fill="#0ea5e9">✉</text>

                    <!-- ── Arrows: inputs → AI core ── -->
                    <line x1="192" y1="65" x2="330" y2="155" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlue)" class="ai-line"/>
                    <line x1="192" y1="170" x2="330" y2="170" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlue)" class="ai-line"/>
                    <line x1="192" y1="275" x2="330" y2="185" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlue)" class="ai-line"/>

                    <!-- ── AI Core ── -->
                    <rect x="330" y="100" width="240" height="140" rx="20" fill="url(#aiGradBlue)" filter="url(#aiGlow)" stroke="#60a5fa" stroke-width="1.5"/>
                    <!-- Outer pulse ring -->
                    <rect x="320" y="90" width="260" height="160" rx="24" fill="none" stroke="#2563eb" stroke-width="1" stroke-opacity="0.3" stroke-dasharray="6 5"/>
                    <!-- Icon circle -->
                    <circle cx="450" cy="148" r="30" fill="rgba(255,255,255,0.12)"/>
                    <text x="450" y="156" text-anchor="middle" font-family="sans-serif" font-size="24" fill="white">✦</text>
                    <!-- Label -->
                    <text x="450" y="205" text-anchor="middle" font-family="Satoshi,sans-serif" font-size="16" font-weight="600" fill="white"><?= htmlspecialchars($t['ai']['node_ai']) ?></text>
                    <!-- Sublabel -->
                    <text x="450" y="225" text-anchor="middle" font-family="General Sans,sans-serif" font-size="11" fill="rgba(255,255,255,0.75)">GPT-4 · Claude · Fine-tuned LLM</text>

                    <!-- ── Arrows: AI core → outputs ── -->
                    <line x1="571" y1="155" x2="690" y2="65" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlueOut)" class="ai-line-out"/>
                    <line x1="571" y1="170" x2="690" y2="170" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlueOut)" class="ai-line-out"/>
                    <line x1="571" y1="185" x2="690" y2="275" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlueOut)" class="ai-line-out"/>

                    <!-- ── Output nodes (right column) ── -->
                    <!-- Automated Actions -->
                    <rect x="690" y="30" width="190" height="70" rx="14" fill="url(#aiGradBlueOut)" stroke="#1d4ed8" stroke-width="1.5"/>
                    <text x="726" y="62" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" fill="white"><?= htmlspecialchars($t['ai']['node_out1']) ?></text>
                    <text x="726" y="80" font-family="General Sans,sans-serif" font-size="11" fill="rgba(255,255,255,0.7)">triggers · webhooks · tasks</text>
                    <circle cx="710" cy="65" r="10" fill="rgba(255,255,255,0.15)"/>
                    <text x="706" y="70" font-family="sans-serif" font-size="12" fill="white">⚡</text>

                    <!-- Insights & Alerts -->
                    <rect x="690" y="135" width="190" height="70" rx="14" fill="url(#aiGradBlueOut)" stroke="#1d4ed8" stroke-width="1.5"/>
                    <text x="726" y="167" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" fill="white"><?= htmlspecialchars($t['ai']['node_out2']) ?></text>
                    <text x="726" y="185" font-family="General Sans,sans-serif" font-size="11" fill="rgba(255,255,255,0.7)">dashboards · email · Slack</text>
                    <circle cx="710" cy="170" r="10" fill="rgba(255,255,255,0.15)"/>
                    <text x="706" y="175" font-family="sans-serif" font-size="12" fill="white">◎</text>

                    <!-- Translations -->
                    <rect x="690" y="240" width="190" height="70" rx="14" fill="url(#aiGradBlueOut)" stroke="#1d4ed8" stroke-width="1.5"/>
                    <text x="726" y="269" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" fill="white"><?= htmlspecialchars($t['ai']['node_out3']) ?></text>
                    <text x="726" y="287" font-family="General Sans,sans-serif" font-size="11" fill="rgba(255,255,255,0.7)">EN · PL · DE · FR · +</text>
                    <circle cx="710" cy="275" r="10" fill="rgba(255,255,255,0.15)"/>
                    <text x="706" y="280" font-family="sans-serif" font-size="12" fill="white">🌐</text>
                </svg>
            </div>
        </div>

        <!-- ── CTA strip ─────────────────────────────────────────── -->
        <div class="relative rounded-[1rem] overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-sky-800 p-10 md:p-14 text-white text-center">
            <!-- texture overlay -->
            <div class="absolute inset-0 opacity-10 pointer-events-none" style="background-image:radial-gradient(circle at 1px 1px, white 1px, transparent 0);background-size:28px 28px;"></div>
            <div class="relative z-10 max-w-2xl mx-auto">
                <h3 class="font-display text-2xl md:text-4xl font-medium tracking-tight mb-4">
                    <?= $t['ai']['cta_h'] ?>
                </h3>
                <p class="text-lg opacity-85 font-normal mb-8 leading-normal">
                    <?= $t['ai']['cta_p'] ?>
                </p>
                <a href="#contact" class="inline-flex items-center gap-2 bg-white text-blue-700 font-semibold text-base py-4 px-8 rounded-[1rem] hover:bg-blue-50 hover:scale-105 transition-all duration-300 shadow-lg shadow-blue-900/30">
                    <i data-lucide="sparkles" class="w-4 h-4"></i>
                    <?= $t['ai']['cta_btn'] ?>
                </a>
            </div>
        </div>

    </div>
</section>
