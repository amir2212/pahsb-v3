<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="theme-color" content="#0b2036">
<meta name="description" content="Explore PAHSB historical project collection with a modern urban development finder.">
<title>Developments & Places | PAHSB Version 3</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v31.css') }}?v=3.1.0">
<link rel="stylesheet" href="{{ asset('assets/pahsb/pahsb-v34.css') }}?v=3.4.0">
<script defer src="{{ asset('assets/pahsb/pahsb-v31.js') }}?v=3.1.0"></script>
<script defer src="{{ asset('assets/pahsb/pahsb-v34.js') }}?v=3.4.0"></script>
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
   <a class="is-current" aria-current="page" href="{{ route('pahsb.projects') }}">Projects</a>
   <a href="{{ route('pahsb.news') }}">News</a>
   <div class="u31-dd u372-contact-dd"><button type="button" class="u31-dd-toggle u372-contact-toggle" aria-expanded="false" aria-controls="u372-contact-panel">Contact <span aria-hidden="true">⌄</span></button><div class="u31-dd-panel" id="u372-contact-panel"><a href="{{ route('pahsb.enquiry') }}">Enquiry</a><a href="{{ route('pahsb.registration') }}">Registration</a></div></div>
   <a class="u31-cta" href="{{ route('pahsb.enquiry') }}">Get in Touch <span aria-hidden="true">↗</span></a>
  </div>
 </nav>
</header>
<main id="main" class="v34">
@php
// This is the archived PAHSB collection: project type is not a verified status, launch date or availability.
$projects = [
 ['title'=>'Bandar Puncak Alam Seksyen 2','category'=>'residential','type'=>'Residential','image'=>'53d06664-800x480phase1-a-400x225.jpg','description'=>'A residential development recorded in the original PAHSB archive, featuring a variety of home types. Any historical development figures must be verified by PAHSB.'],
 ['title'=>'Bandar Puncak Alam Seksyen 7 & 8','category'=>'residential','type'=>'Residential','image'=>'4b5cd642-800x480phase2-a-400x225.jpg','description'=>'A residential neighbourhood development listed in archived PAHSB materials, featuring a mix of housing styles.'],
 ['title'=>'Bandar Puncak Alam Seksyen 12 & 13','category'=>'residential','type'=>'Residential','image'=>'00553f25-800x480phase3-a-400x225.jpg','description'=>'A township development described in PAHSB historical records as incorporating homes and commercial spaces.'],
 ['title'=>'UiTM Puncak Alam','category'=>'education','type'=>'Education','image'=>'0da8552d-800x480uitm-a-400x225.jpg','description'=>'An educational landmark highlighted in the PAHSB historical township project listing.'],
 ['title'=>'Public Schools','category'=>'education','type'=>'Education','image'=>'0da1de95-800x480schools-a-400x225.jpg','description'=>'Public school facilities included in the archived township showcase.'],
 ['title'=>'Golf Driving Range & Cafe','category'=>'lifestyle','type'=>'Lifestyle','image'=>'75b45a2a-800x480golfrange-a-400x225.jpg','description'=>'A leisure and recreation destination featured in historical PAHSB project materials.'],
 ['title'=>'Other Facilities','category'=>'community','type'=>'Community','image'=>'2a39ad2b-800x480facilities-a-400x225.jpg','description'=>'An overview of community amenities and everyday conveniences described in the original website archive.'],
 ['title'=>'Commercial Center','category'=>'commercial','type'=>'Commercial','image'=>'2acd6451-800x480commercial-c-400x225.jpg','description'=>'A commercial hub in the township featured in earlier PAHSB descriptions.'],
 ['title'=>'Masjid Puncak Alam','category'=>'community','type'=>'Community','image'=>'683e88da-masjid-bandar-puncak-alam-a-400x225.jpg','description'=>'A community landmark highlighted in PAHSB historical project information.'],
 ['title'=>'Surau Ar Rahimah','category'=>'community','type'=>'Community','image'=>'620dcf9c-800x480ar-rahimah-b-400x225.jpg','description'=>'A neighbourhood prayer facility in the original PAHSB township project collection.'],
];
@endphp
<section class="v34-hero" aria-labelledby="v34-title">
  <img src="{{ asset('assets/pahsb/media/467d67d3-puncak_alam_slide_d.jpg') }}" alt="Puncak Alam township development — PAHSB archive" fetchpriority="high">
  <div class="v34-hero-shade"></div>
  <div class="v34-wrap v34-hero-copy"><span class="v34-eyebrow">04 / PAHSB DEVELOPMENT ARCHIVE</span><h1 id="v34-title">Places to discover.<br><em>Connections to make.</em></h1><p>An interactive perspective on the neighbourhoods, landmarks and shared spaces featured in the PAHSB historical project collection.</p><a href="#explore" class="v34-primary">Explore the collection <span aria-hidden="true">↘</span></a></div>
  <div class="v34-hero-bottom v34-wrap"><span>URBAN / PLACE / PURPOSE</span><span>SCROLL TO EXPLORE ↓</span></div>
</section>
<section class="v34-intro v34-wrap"><div class="v34-rule"><span>/ 01 — THE DEVELOPMENT PICTURE</span><span>PUNCAK ALAM / SELANGOR</span></div><div class="v34-intro-grid"><h2>Beyond structures.<br><em>Places with purpose.</em></h2><div><p>A community is built around places to live, learn, connect and spend time together.</p><p>Discover ten entries drawn from the earlier PAHSB project website. These are archival subjects, not a statement of current development status or availability.</p></div></div></section>
<section class="v34-collection" id="explore" aria-labelledby="v34-collection-title"><div class="v34-wrap">
  <div class="v34-rule"><span>/ 02 — EXPLORE THE COLLECTION</span><span>HISTORICAL PAHSB RECORDS</span></div>
  <div class="v34-heading"><h2 id="v34-collection-title">Find your<br><em>next perspective.</em></h2><div class="v34-count"><strong id="v34-count">{{ count($projects) }}</strong><span>ARCHIVE ENTRIES</span></div></div>
  <div class="v34-controls"><div class="v34-filters" role="group" aria-label="Filter development types"><button type="button" class="is-active" data-filter="all" aria-pressed="true">All places</button><button type="button" data-filter="residential" aria-pressed="false">Residential</button><button type="button" data-filter="education" aria-pressed="false">Education</button><button type="button" data-filter="commercial" aria-pressed="false">Commercial</button><button type="button" data-filter="community" aria-pressed="false">Community</button><button type="button" data-filter="lifestyle" aria-pressed="false">Lifestyle</button></div><label class="v34-search"><span class="v34-sr">Search the project archive</span><span aria-hidden="true">⌕</span><input type="search" id="v34-search" placeholder="Search places or names..." autocomplete="off"></label></div>
  <p class="v34-results" id="v34-results" aria-live="polite">Showing {{ count($projects) }} archived entries</p>
  <div class="v34-grid" id="v34-grid">
  @foreach($projects as $index => $project)
    <article class="v34-card" data-category="{{ $project['category'] }}" data-query="{{ strtolower($project['title'].' '.$project['type'].' '.$project['description']) }}">
      <button type="button" class="v34-open" aria-label="View details for {{ $project['title'] }}" data-title="{{ $project['title'] }}" data-type="{{ $project['type'] }}" data-description="{{ $project['description'] }}" data-image="{{ asset('assets/pahsb/media/'.$project['image']) }}">
      <span class="v34-photo"><img src="{{ asset('assets/pahsb/media/'.$project['image']) }}" alt="{{ $project['title'] }} — archive photograph" loading="lazy"><span class="v34-index">{{ str_pad($index+1, 2, '0', STR_PAD_LEFT) }}</span><span class="v34-card-arrow" aria-hidden="true">↗</span></span>
      <span class="v34-card-meta">{{ strtoupper($project['type']) }} <span>PAHSB ARCHIVE</span></span><strong>{{ $project['title'] }}</strong><span class="v34-discover">Explore details ↗</span></button>
    </article>
  @endforeach
  </div>
  <div class="v34-empty" id="v34-empty" hidden><h3>No matching places.</h3><p>Try a different keyword or category.</p><button type="button" id="v34-reset">Reset all filters ↗</button></div>
  <div class="v34-disclaimer">PAHSB historical website archive · Project names, descriptions and locations must be verified with the company before publication. Filters indicate types only, not completed, active, future, available or for-sale status.</div>
</div></section>
<section class="v34-break"><img src="{{ asset('assets/pahsb/media/f283245e-bandar-puncak-alam-residentials.jpg') }}" loading="lazy" alt="Residential neighbourhoods of Puncak Alam — historic PAHSB archive"><div class="v34-break-panel"><span class="v34-eyebrow">/ 03 — THE PLACES BETWEEN</span><h2>Built for<br><em>everyday life.</em></h2><p>Continue exploring the connections that make up Puncak Alam's township story.</p><a href="{{ route('pahsb.about', ['section'=>'puncak-alam-township']) }}">Discover the township ↗</a></div></section>
<section class="v34-next"><div class="v34-wrap v34-next-grid"><div><span class="v34-eyebrow">/ 04 — CONTINUE THE CONVERSATION</span><h2>Interested in<br><em>knowing more?</em></h2></div><div><p>Explore the archived information or send an enquiry through the local PAHSB form.</p><a href="{{ route('pahsb.enquiry') }}">Get in touch ↗</a></div></div></section>
</main>
<div class="v34-modal" id="v34-modal" role="presentation" hidden><div class="v34-backdrop" data-close></div><div class="v34-dialog" role="dialog" aria-modal="true" aria-labelledby="v34-modal-title" tabindex="-1"><button class="v34-close" type="button" aria-label="Close details" data-close>×</button><img id="v34-modal-image" src="" alt=""><div class="v34-dialog-copy"><span id="v34-modal-type"></span><h2 id="v34-modal-title"></h2><p id="v34-modal-description"></p><p class="v34-dialog-note">Historical archive entry. PAHSB has not verified current status, pricing or availability.</p><button type="button" data-close class="v34-back">← Back to collection</button></div></div></div>
<footer class="u31-footer"><div class="u31-container"><div class="u31-footer-top"><a class="u31-footer-wordmark" href="{{ route('pahsb.home') }}">PAHSB<span>.</span></a><div class="u31-footer-nav"><a href="{{ route('pahsb.about', ['section'=>'overview']) }}">About</a><a href="{{ route('pahsb.projects') }}">Developments</a><a href="{{ route('pahsb.news') }}">Stories</a><a href="{{ route('pahsb.registration') }}">Register Interest</a><a href="{{ route('pahsb.enquiry') }}">Enquiry</a></div></div><div class="u31-footer-base"><span>© {{ date('Y') }} Puncak Alam Housing Sdn Bhd</span><span>Version 3 design concept · Local development preview · Not an official launch</span><a href="#top">Back to top ↑</a></div></div></footer>
<script src="{{ asset('assets/pahsb/pahsb-v372-nav.js') }}?v=3.7.2" defer></script>
</body></html>
