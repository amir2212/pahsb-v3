<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0b2036">
<meta name="description" content="PAHSB Version 3 — Puncak Alam township news and contact experience.">
<title>News & Stories | PAHSB Version 3</title>
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
   <a class="is-current" aria-current="page" href="{{ route('pahsb.news') }}">News</a>
   <div class="u31-dd u372-contact-dd"><button type="button" class="u31-dd-toggle u372-contact-toggle" aria-expanded="false" aria-controls="u372-contact-panel">Contact <span aria-hidden="true">⌄</span></button><div class="u31-dd-panel" id="u372-contact-panel"><a href="{{ route('pahsb.enquiry') }}">Enquiry</a><a href="{{ route('pahsb.registration') }}">Registration</a></div></div>
   <a class="u31-cta" href="{{ route('pahsb.enquiry') }}">Get in Touch <span aria-hidden="true">↗</span></a>
  </div>
 </nav>
</header>
@php
$stories = [
 ['id'=>'mosque','category'=>'community','type'=>'Community','date'=>'3 December 2013','iso'=>'2013-12-03','title'=>'New Puncak Alam Mosque Completed','image'=>'cbbab8cd-masjid-bandar-puncak-alam-news-a-400x225.jpg','summary'=>'An archived milestone about the Puncak Alam mosque development. The original PAHSB website identified Puncak Alam Housing Sdn Bhd as its developer.'],
 ['id'=>'tesco','category'=>'township','type'=>'Township','date'=>'1 December 2013','iso'=>'2013-12-01','title'=>'Newly Opened Tesco in Puncak Alam','image'=>'4dd7098d-tesco-opened-news-400x225.jpg','summary'=>'The archived announcement reported the opening of Tesco Puncak Alam on 28 November 2013. Its present name and operational status have not been verified.'],
];
@endphp
<main id="main" class="v35" data-v35-news>
<section class="v35-hero" aria-labelledby="v35-hero-title">
 <img src="{{ asset('assets/pahsb/media/467d67d3-puncak_alam_slide_d.jpg') }}" alt="Puncak Alam built environment — historical image" fetchpriority="high">
 <div class="v35-overlay"></div>
 <div class="v35-shell v35-hero-content"><span class="v35-kicker">05 / STORIES &amp; MILESTONES</span><h1 id="v35-hero-title">The stories<br>behind <em>the place.</em></h1><p>Explore moments recorded in the Puncak Alam Housing historical news archive.</p><a class="v35-button" href="#v35-archive">Explore the archive <span aria-hidden="true">↘</span></a></div>
 <div class="v35-hero-meta v35-shell"><span>PAHSB / PUNCAK ALAM</span><span>ARCHIVE / 2013</span></div>
</section>
<section class="v35-intro v35-shell"><div class="v35-section-label"><span>/ 01 — A RECORD OF PLACE</span><span>HISTORICAL MATERIAL</span></div><div class="v35-intro-grid"><h2>Local moments.<br><em>Lasting memories.</em></h2><div><p>These articles preserve selected announcements from the original PAHSB website. They are shared as archived material rather than current news.</p><div class="v35-info"><strong>Archived stories — December 2013</strong><span>Details, business names and development status require company verification before any official publication.</span></div></div></div></section>
<section class="v35-archive" id="v35-archive"><div class="v35-shell"><div class="v35-section-label"><span>/ 02 — EXPLORE STORIES</span><span>2013 ARCHIVE</span></div><div class="v35-section-heading"><h2>Discover our <em>archive.</em></h2><span class="v35-number"><b id="v35-count">2</b> / 02</span></div>
 <div class="v35-controls"><div class="v35-filters" role="group" aria-label="Filter news stories"><button type="button" data-v35-filter="all" class="is-active" aria-pressed="true">All stories</button><button type="button" data-v35-filter="community" aria-pressed="false">Community</button><button type="button" data-v35-filter="township" aria-pressed="false">Township</button></div><label class="v35-search"><span class="v35-sr">Search archived news</span><span aria-hidden="true">⌕</span><input type="search" id="v35-search" placeholder="Search the archive..." autocomplete="off"></label></div>
 <p class="v35-result-text" id="v35-status" aria-live="polite">Showing 2 of 2 archived stories</p>
 <div class="v35-stories">@foreach($stories as $index=>$story)
  <article class="v35-story" data-v35-category="{{ $story['category'] }}" data-v35-text="{{ strtolower($story['title'].' '.$story['category'].' '.$story['summary']) }}"><button type="button" class="v35-open" aria-label="Read {{ $story['title'] }}" data-title="{{ $story['title'] }}" data-category="{{ $story['type'] }}" data-date="{{ $story['date'] }}" data-summary="{{ $story['summary'] }}" data-image="{{ asset('assets/pahsb/media/'.$story['image']) }}"><span class="v35-image"><img src="{{ asset('assets/pahsb/media/'.$story['image']) }}" alt="Historical news image: {{ $story['title'] }}" loading="lazy"><span class="v35-image-index">{{ str_pad($index+1,2,'0',STR_PAD_LEFT) }}</span><span class="v35-image-arrow" aria-hidden="true">↗</span></span><span class="v35-story-body"><span class="v35-story-meta"><span>{{ strtoupper($story['type']) }}</span><time datetime="{{ $story['iso'] }}">{{ $story['date'] }}</time></span><strong>{{ $story['title'] }}</strong><span class="v35-story-summary">{{ $story['summary'] }}</span><span class="v35-read">Read archived story ↗</span></span></button></article>
 @endforeach</div><div class="v35-empty" id="v35-empty" hidden><h3>No stories found.</h3><p>Try a different search or category.</p><button type="button" id="v35-reset">Reset filters ↗</button></div>
 <p class="v35-disclaimer">News dates are historical (2013). This collection is a local design preview, not an updated official news service. <a href="https://puncakalam.my/news/" target="_blank" rel="noopener noreferrer">Original source ↗</a></p></div></section>
<section class="v35-next"><div class="v35-shell v35-next-grid"><div><span class="v35-kicker">/ 03 — EXPLORE FURTHER</span><h2>More to <em>discover.</em></h2></div><div><p>Discover the people, places and developments that form the Puncak Alam story.</p><a href="{{ route('pahsb.projects') }}">Explore developments ↗</a></div></div></section>
</main>
<div class="v35-modal" id="v35-modal" hidden><div class="v35-modal-shade" data-v35-close></div><div class="v35-dialog" role="dialog" aria-modal="true" aria-labelledby="v35-modal-title" tabindex="-1"><button type="button" data-v35-close class="v35-modal-close" aria-label="Close story">×</button><img id="v35-modal-image" src="" alt=""><div class="v35-modal-body"><span id="v35-modal-meta"></span><h2 id="v35-modal-title"></h2><p id="v35-modal-text"></p><small>Archived PAHSB news summary — not a current announcement.</small><button type="button" class="v35-modal-back" data-v35-close>← Back to stories</button></div></div></div>
<footer class="u31-footer"><div class="u31-container"><div class="u31-footer-top"><a class="u31-footer-wordmark" href="{{ route('pahsb.home') }}">PAHSB<span>.</span></a><div class="u31-footer-nav"><a href="{{ route('pahsb.about', ['section'=>'overview']) }}">About</a><a href="{{ route('pahsb.projects') }}">Developments</a><a href="{{ route('pahsb.news') }}">Stories</a><a href="{{ route('pahsb.registration') }}">Register Interest</a><a href="{{ route('pahsb.enquiry') }}">Enquiry</a></div></div><div class="u31-footer-base"><span>© {{ date('Y') }} Puncak Alam Housing Sdn Bhd</span><span>Version 3 design concept · Local development preview · Not an official launch</span><a href="#top">Back to top ↑</a></div></div></footer>
<script src="{{ asset('assets/pahsb/pahsb-v372-nav.js') }}?v=3.7.2" defer></script>
</body></html>
