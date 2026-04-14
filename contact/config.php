<?php
// ── Site configuration ─────────────────────────────────────────────────────
// Edit this file when moving to a new domain or changing contact details.
// Do NOT put secrets (SMTP passwords) here — use environment variables instead.

return [
    // Brand
    'company_name'       => 'Digitalsky',
    'company_name_upper' => 'DIGITALSKY',
    'site_url'           => 'https://digitalsky.pl',

    // Contact
    'contact_email'  => 'contact@digitalsky.pl',
    'contact_phone'  => '+48 506 323 709',
    'noreply_email'  => 'noreply@digitalsky.pl',

    // Mail — admin inbox that receives all form submissions
    'admin_email'    => 'contact@digitalsky.pl',

    // Checksum salt — change this to any random string, keep secret
    // Must match between contact/config.php (PHP) and the JS that reads it via index.php
    'checksum_salt'  => 'dsky2026xK9m',
];
