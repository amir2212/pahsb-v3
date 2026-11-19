@php($isEnquiry = $formType === 'enquiry')
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0b2036">
<meta name="description" content="PAHSB Version 3 — Puncak Alam township news and contact experience.">
<title>{{ $isEnquiry ? 'Contact & Enquiry' : 'Register Interest' }} | PAHSB Version 3</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v31.css') }}?v=3.1.0">
<link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v35.css') }}?v=3.5.0">
<script defer src="{{ asset('assets/pahsb/pahsb-v31.js') }}?v=3.1.0"></script>
<script defer src="{{ asset('assets/pahsb/pahsb-v35.js') }}?v=3.5.0"></script>
<link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v36.css') }}?v=3.6.0">
<script defer src="{{ asset('assets/pahsb/pahsb-v36.js') }}?v=3.6.0"></script>
<link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v37-nav.css') }}?v=3.7.0">
<link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v371-nav.css') }}?v=3.7.1">
<link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v372-nav.css') }}?v=3.7.2">
</head>
<body class="urban31">
<a class="u31-skip" href="#main">Skip to content</a>
<header class="u31-header u371-header u372-header" id="top">
 <div class="u31-topline"><span>PAHSB / PUNCAK ALAM</span><span>ARCHITECTURAL PERSPECTIVE <i></i> VERSION 03</span></div>
 <nav class="u31-nav" aria-label="Main navigation">
  <a class="u31-brand" href="{{ route('pahsb.home') }}" aria-label="PAHSB Home"><span class="u31-brand-mark"><img src="{{ asset('assets/pahsb/media/f5b358b6-logo-puncak-alam.png') }}" alt="" width="53" height="53"></span><span><strong>PAHSB</strong><small>PUNCAK ALAM HOUSING</small></span></a>
  <button class="u31-menu-toggle" type="button" aria-expanded="false" aria-controls="u31-menu" aria-label="Toggle navigation"><span></span><span></span><span></span></button>
  <div class="u31-links" id="u31-menu">
   <a href="{{ route('pahsb.home') }}">Home</a>
   <div class="u31-dd"><button type="button" class="u31-dd-toggle" aria-expanded="false" aria-controls="u372-about-panel">About <span aria-hidden="true">⌄</span></button><div class="u31-dd-panel" id="u372-about-panel"><a href="{{ route('pahsb.about', ['section'=>'overview']) }}">Company Overview</a><a href="{{ route('pahsb.about', ['section'=>'board-of-directors']) }}">Board of Directors</a><a href="{{ route('pahsb.about', ['section'=>'vision-mission']) }}">Vision &amp; Mission</a><a href="{{ route('pahsb.about', ['section'=>'puncak-alam-township']) }}">Puncak Alam Township</a></div></div>
   <a href="{{ route('pahsb.projects') }}">Projects</a>
   <a href="{{ route('pahsb.news') }}">News</a>
   <div class="u31-dd u372-contact-dd"><button type="button" class="u31-dd-toggle u372-contact-toggle" aria-current="page" aria-expanded="false" aria-controls="u372-contact-panel">Contact <span aria-hidden="true">⌄</span></button><div class="u31-dd-panel" id="u372-contact-panel"><a href="{{ route('pahsb.enquiry') }}">Enquiry</a><a href="{{ route('pahsb.registration') }}">Registration</a></div></div>
   <a class="u31-cta" href="{{ route('pahsb.enquiry') }}">Get in Touch <span aria-hidden="true">↗</span></a>
  </div>
 </nav>
</header>
<main id="main" class="v35 v35-contact">
<section class="v35-contact-hero"><div class="v35-contact-image"><img src="{{ asset('assets/pahsb/media/3a160c4e-puncak-alam-residentials.jpg') }}" alt="Puncak Alam neighbourhood from historical PAHSB photographs" fetchpriority="high"></div><div class="v35-shell v35-contact-hero-copy"><span class="v35-kicker">{{ $isEnquiry ? '05 / START A CONVERSATION' : '05 / REGISTER YOUR INTEREST' }}</span><h1>{{ $isEnquiry ? 'A conversation starts' : 'Discover what comes' }}<br><em>{{ $isEnquiry ? 'something new.' : 'next.' }}</em></h1><p>{{ $isEnquiry ? 'Ask about PAHSB and the Puncak Alam township through this local development enquiry form.' : 'Register your interest in Puncak Alam within our local website prototype.' }}</p><a class="v35-button" href="#v35-form">{{ $isEnquiry ? 'Send an enquiry' : 'Register interest' }} ↘</a></div></section>
<section class="v35-form-section" id="v35-form"><div class="v35-shell"><div class="v35-section-label"><span>/ {{ $isEnquiry ? '01 — ENQUIRY' : '02 — REGISTRATION' }}</span><span>LOCAL WEBSITE PREVIEW</span></div><div class="v35-form-grid"><aside class="v35-form-side"><h2>Let's make<br><em>connections.</em></h2><p>Have a question or want to express interest? Choose the right form below and send a test submission.</p><div class="v35-contact-switch"><a href="{{ route('pahsb.enquiry') }}" @if($isEnquiry) aria-current="page" class="is-active" @endif><span>01 / General enquiry</span><b aria-hidden="true">↗</b></a><a href="{{ route('pahsb.registration') }}" @if(!$isEnquiry) aria-current="page" class="is-active" @endif><span>02 / Register interest</span><b aria-hidden="true">↗</b></a></div><div class="v35-form-location"><strong>Puncak Alam Housing Sdn Bhd</strong><p>Bandar Puncak Alam, 42300 Puncak Alam, Selangor Darul Ehsan.</p><small>Historical contact details are subject to verification.</small></div></aside>
<div class="v35-form-card"><span class="v35-kicker">{{ $isEnquiry ? 'YOUR ENQUIRY' : 'YOUR INTEREST' }}</span><h2>{{ $isEnquiry ? 'Tell us how we can help.' : 'Start your next chapter.' }}</h2><p class="v35-form-description">This form is for local testing. Information stays in the local SQLite database; no email is sent or official registration created.</p>
@if(session('pahsb_success'))<div class="v35-alert v35-success" role="status">{{ session('pahsb_success') }}</div>@endif
@if($errors->any())<div class="v35-alert v35-errors" role="alert"><strong>Please correct the following:</strong><ul>@foreach($errors->all() as $error)<li>{{ $error }}</li>@endforeach</ul></div>@endif
<form method="POST" action="{{ $isEnquiry ? route('pahsb.enquiry.store') : route('pahsb.registration.store') }}" class="v35-form">@csrf
<div class="v35-honeypot" aria-hidden="true"><label>Website<input name="website" type="text" tabindex="-1" autocomplete="off"></label></div>
<div class="v35-fields"><label>Full name <b>*</b><input type="text" name="name" value="{{ old('name') }}" placeholder="Your full name" maxlength="120" autocomplete="name" required @error('name') aria-invalid="true" @enderror></label><label>Email address <b>*</b><input type="email" name="email" value="{{ old('email') }}" placeholder="you@example.com" maxlength="190" autocomplete="email" required @error('email') aria-invalid="true" @enderror></label><label>Phone number <b>*</b><input type="tel" name="phone" value="{{ old('phone') }}" placeholder="e.g. +60 12 345 6789" maxlength="30" autocomplete="tel" required @error('phone') aria-invalid="true" @enderror></label>
@if($isEnquiry)<label>Subject <b>*</b><input type="text" name="subject" value="{{ old('subject') }}" placeholder="Enquiry subject" maxlength="180" required @error('subject') aria-invalid="true" @enderror></label>@else<label>Area of interest <b>*</b><select name="project_interest" required @error('project_interest') aria-invalid="true" @enderror><option value="">Select an option</option><option value="residential" @selected(old('project_interest')==='residential')>Residential</option><option value="commercial" @selected(old('project_interest')==='commercial')>Commercial</option><option value="general" @selected(old('project_interest')==='general')>General updates</option></select></label>@endif</div>
<label class="v35-message">{{ $isEnquiry ? 'Your message' : 'Additional notes' }} @if($isEnquiry)<b>*</b>@else<span>(optional)</span>@endif<textarea name="message" rows="5" maxlength="3000" placeholder="Write your message here..." @if($isEnquiry) minlength="10" required @endif @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea></label>
<label class="v35-consent"><input type="checkbox" name="consent" value="1" required @checked(old('consent'))><span>I agree to this information being stored for local testing. I will not enter real customer details.</span></label><button type="submit" class="v35-submit">{{ $isEnquiry ? 'Send enquiry' : 'Register interest' }} <span aria-hidden="true">↗</span></button><p class="v35-form-note">Local redesign prototype only. Not an official PAHSB submission channel.</p></form>
</div></div></div></section></main>
<footer class="u31-footer"><div class="u31-container"><div class="u31-footer-top"><a class="u31-footer-wordmark" href="{{ route('pahsb.home') }}">PAHSB<span>.</span></a><div class="u31-footer-nav"><a href="{{ route('pahsb.about', ['section'=>'overview']) }}">About</a><a href="{{ route('pahsb.projects') }}">Developments</a><a href="{{ route('pahsb.news') }}">Stories</a><a href="{{ route('pahsb.registration') }}">Register Interest</a><a href="{{ route('pahsb.enquiry') }}">Enquiry</a></div></div><div class="u31-footer-base"><span>© {{ date('Y') }} Puncak Alam Housing Sdn Bhd</span><span>Version 3 design concept · Local development preview · Not an official launch</span><a href="#top">Back to top ↑</a></div></div></footer>
<script src="{{ asset('assets/pahsb/pahsb-v372-nav.js') }}?v=3.7.2" defer></script>
</body></html>
