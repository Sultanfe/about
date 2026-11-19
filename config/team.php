<?php

return [
    /*
    |--------------------------------------------------------------------------
    | TriProof AI — About / Meet the Team
    |--------------------------------------------------------------------------
    | The team definition lives in one place so the "Meet the Team" section
    | can be edited without touching a Blade view. Each member may set the
    | optional `photo` key to a path/URL when a headshot is available, in
    | which case that image is shown; otherwise the card falls back to the
    | member's initials. The `github`/`linkedin` keys are intentionally
    | left empty below — social icons are rendered only when a real value
    | is provided. We do not invent profile URLs.
    */

    'members' => [
        [
            'name'     => 'Feroz Mahmud',
            'role'     => 'Team Lead and Full Stack Developer',
            'lead'     => true,
            'initials' => 'FM',
            'bio'      => 'Leads the build, owns the full stack, and keeps the API, verification and UI consistent across the product.',
            'github'   => '',
            'linkedin' => '',
            'photo'    => 'C:\Users\fmsho\OneDrive\Pictures\Saved Pictures\475058070_1148152726663200_2582878226787507074_n.jpg',
        ],
        [
            'name'     => 'Shafayet Al Hossain',
            'role'     => 'Full Stack Developer & Domain Expert',
            'lead'     => false,
            'initials' => 'SAH',
            'bio'      => 'Builds the core authenticity and verification flows and translates supply-chain domain needs into product features.',
            'github'   => '',
            'linkedin' => '',
            'photo'    => '',
        ],
        [
            'name'     => 'Remon Islam',
            'role'     => 'AI & ML Engineer',
            'lead'     => false,
            'initials' => 'RI',
            'bio'      => 'Ships the AI layer using OpenAI-compatible / Gemini model access, with a deterministic fallback so guidance never fails.',
            'github'   => '',
            'linkedin' => '',
            'photo'    => 'C:\Users\fmsho\OneDrive\Pictures\Saved Pictures\Screenshots 1\remon_isalm.png',
        ],
        [
            'name'     => 'Masrurul Hasan Maktum',
            'role'     => 'Developer & Tester',
            'lead'     => false,
            'initials' => 'MH',
            'bio'      => 'Writes the day-to-day features and the tests that keep them reliable across the stack.',
            'github'   => '',
            'linkedin' => '',
            'photo'    => 'C:\Users\fmsho\Downloads\Mashrurul_hasan.jpg',
        ],
        [
            'name'     => 'Golam Rabbani',
            'role'     => 'DevOps Engineer',
            'lead'     => false,
            'initials' => 'GR',
            'bio'      => 'Owns deployment, CI/CD, server setup, and keeping the platform reliable in production.',
            'github'   => '',
            'linkedin' => '',
            'photo'    => 'C:\Users\fmsho\Downloads\golam_rabbani.jpg',
        ],
    ],
];
