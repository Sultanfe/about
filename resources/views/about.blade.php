@extends('layouts.app')

@php
    // Member names stay in English; roles are rendered in the active
    // locale through the translation files.
@endphp

@section('title', trans('about.title'))
@section('description', trans('about.tagline'))

@section('content')
<section class="max-w-3xl">
    <!-- 1. Hero -->
    <header class="px-4 pb-10 pt-16 sm:px-6 sm:pt-20 lg:px-8">
        <p class="text-sm font-semibold uppercase tracking-wide text-sky-700">
            {{ trans('about.team_title') }}
        </p>
        <h1 class="mt-2 text-3xl font-extrabold tracking-tight text-slate-900 sm:text-4xl lg:text-5xl">
            {{ trans('about.title') }}
        </h1>
        <p class="mt-4 text-lg leading-relaxed text-slate-600">
            {{ trans('about.tagline') }}
        </p>
    </header>

    <!-- 2. Our Mission -->
    <section class="mt-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-slate-900">
            {{ trans('about.mission_title') }}
        </h2>

        <p class="mt-4 leading-relaxed text-slate-600">
            {{ trans('about.mission_intro') }}
        </p>
        <p class="mt-3 leading-relaxed text-slate-600">
            {{ trans('about.mission_intro_2') }}
        </p>
        <p class="mt-3 leading-relaxed text-slate-600">
            {{ trans('about.mission_intro_3') }}
        </p>

        <div class="mt-8 grid gap-3 sm:grid-cols-2">
            @foreach (trans('about.mission_points') as $point)
                <div class="flex items-start gap-3 rounded-xl bg-slate-50 p-4">
                    <span class="flex h-6 w-6 flex-shrink-0 items-center justify-center rounded-full bg-sky-100 text-sky-700 text-xs font-bold" aria-hidden="true">&#10003;</span>
                    <span class="text-sm font-medium text-slate-700">{{ $point }}</span>
                </div>
            @endforeach
        </div>
    </section>
    <!-- 3. How It Works -->
    <section class="mt-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-slate-900">
            {{ trans('about.how_title') }}
        </h2>
        <p class="mt-3 max-w-2xl text-slate-600">
            {{ trans('about.how_intro') }}
        </p>

        <div class="mt-8 grid gap-6 md:grid-cols-3">
            <div class="border border-slate-200 rounded-2xl p-6">
                <span class="text-xs font-semibold uppercase tracking-wide text-sky-700">
                    {{ trans('about.how_sign') }}
                </span>
                <h3 class="mt-2 text-lg font-bold text-slate-900">Sign</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                    {{ trans('about.how_steps.0') }}
                </p>
            </div>

            <div class="border border-slate-200 rounded-2xl p-6">
                <span class="text-xs font-semibold uppercase tracking-wide text-sky-700">
                    {{ trans('about.how_verify') }}
                </span>
                <h3 class="mt-2 text-lg font-bold text-slate-900">Verify</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                    {{ trans('about.how_steps.1') }}
                </p>
            </div>

            <div class="border border-slate-200 rounded-2xl p-6">
                <span class="text-xs font-semibold uppercase tracking-wide text-sky-700">
                    {{ trans('about.how_audit') }}
                </span>
                <h3 class="mt-2 text-lg font-bold text-slate-900">Audit / Recall</h3>
                <p class="mt-2 text-sm leading-relaxed text-slate-600">
                    {{ trans('about.how_steps.2') }}
                </p>
            </div>
        </div>
    </section>

    <!-- 4. Tech Stack -->
    <section class="mt-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-slate-900">
            {{ trans('about.tech_title') }}
        </h2>
        <p class="mt-2 max-w-2xl text-slate-600">
            {{ trans('about.tech_description') }}
        </p>

        <div class="mt-6 flex flex-wrap gap-2">
            @foreach (trans('about.tech') as $tech)
                <span class="rounded-full bg-slate-100 px-3 py-1.5 text-xs font-medium text-slate-700">
                    {{ $tech }}
                </span>
            @endforeach
        </div>
    </section>

    <!-- 5. Meet the Team -->
    <section class="mt-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-slate-900">
            {{ trans('about.team_title') }}
        </h2>
        <p class="mt-3 max-w-2xl text-slate-600">
            A small, purpose-built team. Every card below is one of the five people who made the platform.
        </p>

        <div class="mt-8 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($team as $member)
                @php($memberSlug = strtolower(str_replace(' ', '_', $member['name'])))
                <article class="flex flex-col rounded-2xl border border-slate-200 bg-white p-6 shadow-sm transition hover:shadow-md">
                    <!-- Avatar (swap `photo` in config/team.php later) -->
                    <div class="flex justify-center">
                        @if (!empty($member['photo']))
                            <img
                                src="{{ $member['photo'] }}"
                                alt="{{ $member['name'] }} avatar"
                                class="h-20 w-20 rounded-full object-cover"
                            >
                        @else
                            <span class="flex h-20 w-20 items-center justify-center rounded-full bg-sky-600 text-lg font-bold text-white">
                                {{ $member['initials'] }}
                            </span>
                        @endif
                    </div>

                    <h3 class="mt-4 text-lg font-bold text-slate-900">{{ $member['name'] }}</h3>
                    @if ($member['lead'])
                        <p class="mt-1 text-xs font-semibold uppercase tracking-wide text-amber-700">Team Lead</p>
                    @endif
                    <p class="text-sm font-medium text-slate-700">
                        {{ trans('about.member_role_' . $memberSlug) }}
                    </p>

                    <p class="mt-2 text-sm leading-relaxed text-slate-600">
                        {{ trans('about.member_bio_' . $memberSlug) }}
                    </p>

                    <div class="mt-4 flex items-center gap-2">
                        @if (!empty($member['github']))
                            <a
                                href="{{ $member['github'] }}"
                                class="text-xs font-medium text-sky-700 transition hover:text-sky-600"
                                aria-label="GitHub profile of {{ $member['name'] }}"
                            >
                                GitHub
                            </a>
                        @endif
                        @if (!empty($member['linkedin']))
                            <a
                                href="{{ $member['linkedin'] }}"
                                class="text-xs font-medium text-sky-700 transition hover:text-sky-600"
                                aria-label="LinkedIn profile of {{ $member['name'] }}"
                            >
                                LinkedIn
                            </a>
                        @endif
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <!-- 6. Team Proof / Built Together -->
    <section class="mt-12 px-4 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold tracking-tight text-slate-900">
            {{ trans('about.proof_title') }}
        </h2>

        <div class="mt-4 max-w-2xl space-y-3 text-slate-600 leading-relaxed">
            @foreach (trans('about.proof_text') as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach
        </div>

        <div class="mt-8 flex flex-wrap items-center justify-between gap-4">
            <p class="text-sm text-slate-500">
                {{ trans('about.cta_note') }}
            </p>
            <a
                href="{{ route('login') }}"
                class="inline-flex items-center rounded-xl bg-sky-600 px-5 py-2.5 text-sm font-semibold text-white shadow-sm transition hover:bg-sky-700 focus:outline-offset-2 focus-visible:ring-2 focus-visible:ring-sky-600"
            >
                {{ trans('about.cta_text') }}
                <svg class="ml-2 h-4 w-4" viewBox="0 0 20 20" fill="none" aria-hidden="true">
                    <path
                        d="M3.5 10h13m0 0l-3.5-3.5m3.5 3.5l-3.5 3.5"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    />
                </svg>
            </a>
        </div>
    </section>
</section>
@endsection

