<?php

return [
    /*
    | English / Bangla strings for the About page.
    | Every visible string on the page lives here so the page is fully
    | translatable through the project's existing translation helpers
    | (trans('about.key') / __('about.key')).
    */

    'title'             => 'About TriProof AI',
    'tagline'           => 'Trust and authenticity for every unit, from factory to buyer.',
    'mission_title'     => 'Our Mission',
    'mission_intro'     => 'TriProof AI exists to stop the counterfeit goods that erode trust between Bangladeshi factories and the global buyers who depend on the products they make.',
    'mission_intro_2'   => 'Every unit is signed with a cryptographic signature under a quota-locked purchase order, so authenticity stays provable at the point of sale even without a network connection.',
    'mission_intro_3'   => 'Our tools turn that single signature into a full trust story: offline verification, clone-scan detection, precision recalls, rework lineage, and compliance guidance in the buyer\'s language.',
    'mission_points'    => [
        'Quota-locked serial issuance',
        'Offline Ed25519 verification',
        'Clone-scan detection',
        'Precision batch recalls',
        'Rework lineage',
        'Bilingual compliance guidance',
    ],

    'how_title'         => 'How It Works',
    'how_intro'         => 'The product runs on three steps. Each step reuses the same signed unit, so trust is never rebuilt by hand.',
    'how_sign'          => 'Sign',
    'how_verify'        => 'Verify',
    'how_audit'         => 'Audit & Recall',
    'how_steps'         => [
        'A purchase order locks the unit into a quota and the scanner attaches an Ed25519 signature that only that order can authorise.',
        'Any buyer or auditor verifies the label instantly, online or offline, and the system flags clone scans in real time.',
        'When a batch is suspect, TriProof runs a precision recall, reconstructs rework lineage, and issues bilingual compliance guidance in seconds.',
    ],

    'tech_title'        => 'Tech Stack',
    'tech_description'  => 'Every tool below already lives in the repository. Nothing experimental was added for this page.',
    'tech'              => [
        'Laravel 12',
        'PHP sodium / Ed25519',
        'MySQL & MariaDB',
        'Tailwind CSS 4',
        'Chart.js',
        'Leaflet',
        'Kotlin Android scanner',
        'AI layer (OpenAI-compatible / Gemini, deterministic fallback)',
    ],

    'team_title'        => 'Meet the Team',
    'team_lead'         => 'Team Lead',

    'member_role_feroz_mahmud'     => 'Team Lead and Full Stack Developer',
    'member_bio_feroz_mahmud'      => 'Leads the build, owns the full stack, and keeps the API, verification and UI consistent across the product.',
    'member_role_shabayeat_al_hossain' => 'Full Stack Developer & Domain Expert',
    'member_bio_shabayeat_al_hossain' => 'Builds the core authenticity and verification flows and translates supply-chain domain needs into product features.',
    'member_role_remon_islam'      => 'AI & ML Engineer',
    'member_bio_remon_islam'       => 'Ships the AI layer using OpenAI-compatible / Gemini model access, with a deterministic fallback so guidance never fails.',
    'member_role_masrurul_hasan_maktum' => 'Developer & Tester',
    'member_bio_masrurul_hasan_maktum' => 'Writes the day-to-day features and the tests that keep them reliable across the stack.',
    'member_role_golam_rabbani'    => 'DevOps Engineer',
    'member_bio_golam_rabbani'     => 'Owns deployment, CI/CD, server setup, and keeping the platform reliable in production.',

    'proof_title'       => 'Built Together',
    'proof_text'        => [
        'TriProof AI is not the work of a single person. It was designed, built, tested and shipped collaboratively by all five of us, across the frontend, the backend, the scanner app and the operations pipeline.',
        'If a claim does not trace back to a signed unit, it does not ship. We hold ourselves to that same standard on the product as we do on the code.',
    ],
    'cta_text'          => 'Log in to the verifier',
    'cta_note'          => 'For verified buyers and partner accounts only.',
    'cta_alt'           => 'Open the verifier page',
    'no_team_message'   => 'The team has not been added to this list yet.',
];
