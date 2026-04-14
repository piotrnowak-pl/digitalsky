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

            <!-- ── MOBILE layout (hidden on md+): inputs → AI → outputs stacked ── -->
            <div class="md:hidden flex flex-col gap-2">

                <!-- Input group label -->
                <div class="text-[10px] font-semibold uppercase tracking-widest text-slate-400 dark:text-slate-500 px-1 mb-1">Inputs</div>

                <!-- Input nodes — light grey, dark text -->
                <div class="flex items-center gap-3 bg-gradient-to-br from-slate-100 to-slate-200 dark:from-slate-800 dark:to-slate-700 border border-slate-200 dark:border-slate-600 rounded-[1rem] px-5 py-4">
                    <div class="w-9 h-9 rounded-xl bg-slate-300/60 dark:bg-slate-600 flex items-center justify-center shrink-0">
                        <i data-lucide="users" class="w-4 h-4 text-slate-600 dark:text-slate-300"></i>
                    </div>
                    <div>
                        <div class="text-sm font-semibold font-display leading-tight text-slate-800 dark:text-slate-100"><?= htmlspecialchars($t['ai']['node_crm']) ?></div>
                        <div class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Salesforce · HubSpot · inne...</div>
                    </div>
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-br from-slate-100 to-slate-200 dark:from-slate-800 dark:to-slate-700 border border-slate-200 dark:border-slate-600 rounded-[1rem] px-5 py-4">
                    <div class="w-9 h-9 rounded-xl bg-slate-300/60 dark:bg-slate-600 flex items-center justify-center shrink-0">
                        <i data-lucide="database" class="w-4 h-4 text-slate-600 dark:text-slate-300"></i>
                    </div>
                    <div>
                        <div class="text-sm font-semibold font-display leading-tight text-slate-800 dark:text-slate-100"><?= htmlspecialchars($t['ai']['node_erp']) ?></div>
                        <div class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">PostgreSQL · MySQL · REST</div>
                    </div>
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-br from-slate-100 to-slate-200 dark:from-slate-800 dark:to-slate-700 border border-slate-200 dark:border-slate-600 rounded-[1rem] px-5 py-4">
                    <div class="w-9 h-9 rounded-xl bg-slate-300/60 dark:bg-slate-600 flex items-center justify-center shrink-0">
                        <i data-lucide="mail" class="w-4 h-4 text-slate-600 dark:text-slate-300"></i>
                    </div>
                    <div>
                        <div class="text-sm font-semibold font-display leading-tight text-slate-800 dark:text-slate-100"><?= htmlspecialchars($t['ai']['node_email']) ?></div>
                        <div class="text-[11px] text-slate-500 dark:text-slate-400 mt-0.5">Gmail · Outlook · Slack</div>
                    </div>
                </div>

                <!-- Connector — bidirectional, grey -->
                <div class="flex flex-col items-center py-1">
                    <i data-lucide="chevron-up" class="w-5 h-5 text-slate-400 dark:text-slate-500"></i>
                    <div class="w-1 h-6 bg-slate-400 dark:bg-slate-500 rounded-full"></div>
                    <i data-lucide="chevron-down" class="w-5 h-5 text-slate-400 dark:text-slate-500"></i>
                </div>

                <!-- AI Core -->
                <div class="relative rounded-[1rem] overflow-hidden bg-gradient-to-br from-blue-600 via-blue-700 to-sky-800 p-7 text-white text-center shadow-lg shadow-blue-500/20">
                    <div class="absolute inset-0 bg-[radial-gradient(ellipse_at_top,rgba(255,255,255,0.15),transparent_65%)] pointer-events-none"></div>
                    <!-- dashed pulse ring -->
                    <div class="absolute inset-2 rounded-[0.75rem] border border-white/10 border-dashed pointer-events-none"></div>
                    <div class="relative z-10">
                        <div class="w-14 h-14 rounded-2xl bg-white/15 flex items-center justify-center mx-auto mb-3 ring-1 ring-white/20">
                            <i data-lucide="cpu" class="w-7 h-7 text-white"></i>
                        </div>
                        <div class="font-display text-base font-semibold mb-1"><?= htmlspecialchars($t['ai']['node_ai']) ?></div>
                        <div class="text-[11px] opacity-70 tracking-wide">GPT-4 · Claude · Fine-tuned LLM</div>
                    </div>
                </div>

                <!-- Connector — bidirectional, blue -->
                <div class="flex flex-col items-center py-1">
                    <i data-lucide="chevron-up" class="w-5 h-5 text-blue-500/70"></i>
                    <div class="w-1 h-6 bg-blue-500/60 rounded-full"></div>
                    <i data-lucide="chevron-down" class="w-5 h-5 text-blue-500/70"></i>
                </div>

                <!-- Output group label -->
                <div class="text-[10px] font-semibold uppercase tracking-widest text-slate-400 dark:text-slate-500 px-1 mb-1">Outputs</div>

                <!-- Output nodes — blue gradient, white text -->
                <div class="flex items-center gap-3 bg-gradient-to-br from-blue-600 via-blue-700 to-sky-800 text-white rounded-[1rem] px-5 py-4">
                    <div class="w-9 h-9 rounded-xl bg-white/15 flex items-center justify-center shrink-0">
                        <i data-lucide="zap" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <div class="text-sm font-semibold font-display leading-tight"><?= htmlspecialchars($t['ai']['node_out1']) ?></div>
                        <div class="text-[11px] opacity-70 mt-0.5">triggers · webhooks · tasks</div>
                    </div>
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-br from-blue-600 via-blue-700 to-sky-800 text-white rounded-[1rem] px-5 py-4">
                    <div class="w-9 h-9 rounded-xl bg-white/15 flex items-center justify-center shrink-0">
                        <i data-lucide="bar-chart-2" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <div class="text-sm font-semibold font-display leading-tight"><?= htmlspecialchars($t['ai']['node_out2']) ?></div>
                        <div class="text-[11px] opacity-70 mt-0.5">dashboards · email · Slack</div>
                    </div>
                </div>
                <div class="flex items-center gap-3 bg-gradient-to-br from-blue-600 via-blue-700 to-sky-800 text-white rounded-[1rem] px-5 py-4">
                    <div class="w-9 h-9 rounded-xl bg-white/15 flex items-center justify-center shrink-0">
                        <i data-lucide="languages" class="w-4 h-4"></i>
                    </div>
                    <div>
                        <div class="text-sm font-semibold font-display leading-tight"><?= htmlspecialchars($t['ai']['node_out3']) ?></div>
                        <div class="text-[11px] opacity-70 mt-0.5">EN · PL · DE · FR · +</div>
                    </div>
                </div>
            </div>

            <!-- ── DESKTOP SVG (hidden on mobile) ── -->
            <div class="hidden md:block w-full overflow-x-auto">
                <svg viewBox="0 0 900 380" xmlns="http://www.w3.org/2000/svg" class="w-full max-w-[900px] mx-auto block" aria-label="AI integration architecture diagram" role="img">
                    <defs>
                        <!-- Input node gradient — light grey -->
                        <linearGradient id="aiGradGrey" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#f1f5f9"/>
                            <stop offset="100%" stop-color="#e2e8f0"/>
                        </linearGradient>
                        <!-- AI core gradient -->
                        <linearGradient id="aiGradBlue" x1="0%" y1="0%" x2="100%" y2="100%">
                            <stop offset="0%" stop-color="#2563eb"/>
                            <stop offset="100%" stop-color="#0369a1"/>
                        </linearGradient>
                        <!-- Output gradient -->
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
                            .ai-line { stroke: #2563eb; stroke-opacity: 0.35; }
                            .ai-line-out { stroke: #3b82f6; stroke-opacity: 0.4; }
                            .dark .ai-line { stroke-opacity: 0.25; }
                            .ai-in-text { fill: #1e293b; }
                            .ai-in-sub  { fill: #64748b; }
                        </style>
                    </defs>

                    <!-- ── Input nodes — light grey gradient, same size as output nodes (190×90) ── -->
                    <!-- CRM — users icon — box centre Y=65+10=75 (y=20, h=90) -->
                    <rect x="20" y="20" width="190" height="90" rx="14" fill="url(#aiGradGrey)" stroke="#cbd5e1" stroke-width="1.5"/>
                    <text x="62" y="68" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" class="ai-in-text"><?= htmlspecialchars($t['ai']['node_crm']) ?></text>
                    <text x="62" y="86" font-family="General Sans,sans-serif" font-size="11" class="ai-in-sub">Salesforce · HubSpot · inne...</text>
                    <circle cx="36" cy="65" r="15" fill="rgba(100,116,139,0.15)"/>
                    <!-- lucide users — 18×18, centred in circle: translate(36-9, 65-9)=translate(27,56) -->
                    <g transform="translate(27,56) scale(0.9)" stroke="#475569" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        <path d="M16 11c1.7 0 3-1.3 3-3s-1.3-3-3-3"/><path d="M19 16c0-1.9-1.3-3.5-3-4"/><circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/>
                    </g>

                    <!-- ERP / DB — database icon — box centre Y=190 (y=145, h=90) -->
                    <rect x="20" y="145" width="190" height="90" rx="14" fill="url(#aiGradGrey)" stroke="#cbd5e1" stroke-width="1.5"/>
                    <text x="62" y="187" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" class="ai-in-text"><?= htmlspecialchars($t['ai']['node_erp']) ?></text>
                    <text x="62" y="205" font-family="General Sans,sans-serif" font-size="11" class="ai-in-sub">PostgreSQL · MySQL · REST</text>
                    <circle cx="36" cy="190" r="15" fill="rgba(100,116,139,0.15)"/>
                    <!-- lucide database — translate(27,181) -->
                    <g transform="translate(27,181) scale(0.9)" stroke="#475569" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        <ellipse cx="8" cy="4" rx="7" ry="2.5"/><path d="M1 4v6c0 1.4 3.1 2.5 7 2.5s7-1.1 7-2.5V4"/><path d="M1 10v6c0 1.4 3.1 2.5 7 2.5s7-1.1 7-2.5v-6"/>
                    </g>

                    <!-- Email / Comms — mail icon — box centre Y=315 (y=270, h=90) -->
                    <rect x="20" y="270" width="190" height="90" rx="14" fill="url(#aiGradGrey)" stroke="#cbd5e1" stroke-width="1.5"/>
                    <text x="62" y="312" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" class="ai-in-text"><?= htmlspecialchars($t['ai']['node_email']) ?></text>
                    <text x="62" y="330" font-family="General Sans,sans-serif" font-size="11" class="ai-in-sub">Gmail · Outlook · Slack</text>
                    <circle cx="36" cy="315" r="15" fill="rgba(100,116,139,0.15)"/>
                    <!-- lucide mail — translate(27,306) -->
                    <g transform="translate(27,306) scale(0.9)" stroke="#475569" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        <rect x="1" y="2" width="16" height="13" rx="2"/><path d="M1 5l7 5 7-5"/>
                    </g>

                    <!-- ── Arrows: inputs → AI core ── -->
                    <line x1="212" y1="65"  x2="340" y2="170" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlue)" class="ai-line"/>
                    <line x1="212" y1="190" x2="340" y2="190" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlue)" class="ai-line"/>
                    <line x1="212" y1="315" x2="340" y2="210" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlue)" class="ai-line"/>

                    <!-- ── AI Core — centred vertically in 380px viewBox ── -->
                    <rect x="340" y="110" width="220" height="160" rx="20" fill="url(#aiGradBlue)" filter="url(#aiGlow)" stroke="#60a5fa" stroke-width="1.5"/>
                    <rect x="330" y="100" width="240" height="180" rx="24" fill="none" stroke="#2563eb" stroke-width="1" stroke-opacity="0.3" stroke-dasharray="6 5"/>
                    <circle cx="450" cy="168" r="30" fill="rgba(255,255,255,0.12)"/>
                    <text x="450" y="176" text-anchor="middle" font-family="sans-serif" font-size="24" fill="white">✦</text>
                    <text x="450" y="222" text-anchor="middle" font-family="Satoshi,sans-serif" font-size="16" font-weight="600" fill="white"><?= htmlspecialchars($t['ai']['node_ai']) ?></text>
                    <text x="450" y="242" text-anchor="middle" font-family="General Sans,sans-serif" font-size="11" fill="rgba(255,255,255,0.75)">GPT-4 · Claude · Fine-tuned LLM</text>

                    <!-- ── Arrows: AI core → outputs ── -->
                    <line x1="561" y1="170" x2="688" y2="65"  stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlueOut)" class="ai-line-out"/>
                    <line x1="561" y1="190" x2="688" y2="190" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlueOut)" class="ai-line-out"/>
                    <line x1="561" y1="210" x2="688" y2="315" stroke-width="1.5" stroke-dasharray="5 4" marker-end="url(#arrowBlueOut)" class="ai-line-out"/>

                    <!-- ── Output nodes (190×90) ── -->
                    <!-- Automated Actions — zap icon — box centre Y=65 (y=20, h=90) -->
                    <rect x="688" y="20" width="190" height="90" rx="14" fill="url(#aiGradBlueOut)" stroke="#1d4ed8" stroke-width="1.5"/>
                    <text x="726" y="62" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" fill="white"><?= htmlspecialchars($t['ai']['node_out1']) ?></text>
                    <text x="726" y="80" font-family="General Sans,sans-serif" font-size="11" fill="rgba(255,255,255,0.7)">triggers · webhooks · tasks</text>
                    <circle cx="708" cy="65" r="15" fill="rgba(255,255,255,0.15)"/>
                    <!-- lucide zap — translate(708-9, 65-9)=translate(699,56) -->
                    <g transform="translate(699,56) scale(0.9)" stroke="white" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        <path d="M13 2L4.5 13H11L9 22l8.5-11H12L13 2z"/>
                    </g>

                    <!-- Insights & Alerts — bar-chart-2 icon — box centre Y=190 (y=145, h=90) -->
                    <rect x="688" y="145" width="190" height="90" rx="14" fill="url(#aiGradBlueOut)" stroke="#1d4ed8" stroke-width="1.5"/>
                    <text x="726" y="187" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" fill="white"><?= htmlspecialchars($t['ai']['node_out2']) ?></text>
                    <text x="726" y="205" font-family="General Sans,sans-serif" font-size="11" fill="rgba(255,255,255,0.7)">dashboards · email · Slack</text>
                    <circle cx="708" cy="190" r="15" fill="rgba(255,255,255,0.15)"/>
                    <!-- lucide bar-chart-2 — translate(699,181) -->
                    <g transform="translate(699,181) scale(0.9)" stroke="white" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        <line x1="6" y1="16" x2="6" y2="8"/><line x1="10" y1="16" x2="10" y2="3"/><line x1="14" y1="16" x2="14" y2="11"/><line x1="3" y1="16" x2="17" y2="16"/>
                    </g>

                    <!-- Translations — globe icon — box centre Y=315 (y=270, h=90) -->
                    <rect x="688" y="270" width="190" height="90" rx="14" fill="url(#aiGradBlueOut)" stroke="#1d4ed8" stroke-width="1.5"/>
                    <text x="726" y="312" font-family="Satoshi,sans-serif" font-size="13" font-weight="500" fill="white"><?= htmlspecialchars($t['ai']['node_out3']) ?></text>
                    <text x="726" y="330" font-family="General Sans,sans-serif" font-size="11" fill="rgba(255,255,255,0.7)">EN · PL · DE · FR · +</text>
                    <circle cx="708" cy="315" r="15" fill="rgba(255,255,255,0.15)"/>
                    <!-- lucide globe — translate(699,306) -->
                    <g transform="translate(699,306) scale(0.9)" stroke="white" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" fill="none">
                        <circle cx="9" cy="9" r="8"/><path d="M1 9h16"/><path d="M9 1a13 13 0 0 1 3 8 13 13 0 0 1-3 8 13 13 0 0 1-3-8 13 13 0 0 1 3-8z"/>
                    </g>
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
