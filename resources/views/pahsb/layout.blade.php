<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="description" content="Puncak Alam Housing Sdn Bhd — corporate website redesign preview.">
<title>@yield('title', 'PAHSB | Puncak Alam Housing Sdn Bhd')</title>
<link rel="stylesheet" href="{{ asset('assets/pahsb/site.css') }}?v=3.2">
    <link rel="stylesheet" href="{{ asset('assets/pahsb/phase34.css') }}?v=3.4">
<link rel="stylesheet" href="{{ asset('assets/pahsb/navbar-v61.css') }}?v=6.1">
<!-- PAHSB V2.6 UI POLISH --><link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v26.css') }}?v=2.6">
<!-- PAHSB V2.7 NAV --><link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v27-nav.css') }}?v=2.7">
<!-- PAHSB V2.8 POLISH --><link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v28-polish.css') }}?v=2.8.0">
<!-- PAHSB V2.9 EDITORIAL FOOTER --><link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v29-footer.css') }}?v=2.9">
</head>
<body>
<header class="header p61-header v27-header"><div class="wrap navline p61-line">
<a class="brand p61-brand" href="{{ route('pahsb.home') }}" aria-label="PAHSB Homepage">
@if(config('pahsb.logo'))<img src="{{ asset(config('pahsb.logo')) }}" alt="PAHSB logo">@endif
<strong>PAHSB<small>PUNCAK ALAM HOUSING</small></strong></a>
<button id="navToggle" class="menuToggle p61-toggle" type="button" aria-label="Toggle navigation" aria-controls="mainNav" aria-expanded="false">Menu <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h16"/></svg></button>
<nav class="nav p61-nav" id="mainNav" aria-label="Main navigation">
<a href="{{ route('pahsb.home') }}" @if(request()->routeIs('pahsb.home')) aria-current="page" @endif>Home</a>
<div class="dropdown p61-dropdown">
<button type="button" class="dropbtn p61-dropbtn @if(request()->routeIs('pahsb.about')) active @endif" aria-expanded="false" aria-controls="p61-about-panel">About <svg class="p61-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></button>
<div class="dropcontent p61-panel" id="p61-about-panel">
<a href="{{ route('pahsb.about','overview') }}" @if(request()->is('about/overview')) aria-current="page" @endif>Overview</a>
<a href="{{ route('pahsb.about','board-of-directors') }}" @if(request()->is('about/board-of-directors')) aria-current="page" @endif>Board of Directors</a>
<a href="{{ route('pahsb.about','vision-mission') }}" @if(request()->is('about/vision-mission')) aria-current="page" @endif>Vision &amp; Mission</a>
<a href="{{ route('pahsb.about','puncak-alam-township') }}" @if(request()->is('about/puncak-alam-township')) aria-current="page" @endif>Puncak Alam Township</a>
</div></div>
<a href="{{ route('pahsb.projects') }}" @if(request()->routeIs('pahsb.projects')) aria-current="page" @endif>Projects</a>
<a href="{{ route('pahsb.news') }}" @if(request()->routeIs('pahsb.news')) aria-current="page" @endif>News</a>
<div class="dropdown p61-dropdown">
<button type="button" class="dropbtn p61-dropbtn @if(request()->routeIs('pahsb.enquiry') || request()->routeIs('pahsb.registration')) active @endif" aria-expanded="false" aria-controls="p61-contact-panel">Contact <svg class="p61-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg></button>
<div class="dropcontent p61-panel" id="p61-contact-panel">
<a href="{{ route('pahsb.enquiry') }}" @if(request()->routeIs('pahsb.enquiry')) aria-current="page" @endif>Enquiry</a>
<a href="{{ route('pahsb.registration') }}" @if(request()->routeIs('pahsb.registration')) aria-current="page" @endif>Registration</a>
</div></div>
<a class="navCta p61-cta" href="{{ route('pahsb.enquiry') }}">Get in touch <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="M6 18 18 6M8 6h10v10"/></svg></a>
</nav></div></header>

<main>@yield('content')</main>
@include('pahsb.partials.footer-v29')
<script src="{{ asset('assets/pahsb/site.js') }}?v=3.2" defer></script>
    <script defer src="{{ asset('assets/pahsb/phase34.js') }}?v=3.4"></script>
<script src="{{ asset('assets/pahsb/navbar-v61.js') }}?v=6.1" defer></script>
<script src="{{ asset('assets/pahsb/pahsb-v26.js') }}?v=2.6" defer></script>
</body></html>
