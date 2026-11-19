<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PAHSB website redesign concept">
    <title>PAHSB | Building Communities, Shaping Tomorrow</title>
    <link rel="stylesheet" href="{{ asset('css/pahsb-home.css') }}?v=2">
</head>
<body>
<header class="header">
    <div class="nav-container">
        <a class="logo" href="#top" aria-label="PAHSB home"><span class="logo-symbol">P</span><span>PAHSB<small>Puncak Alam Housing</small></span></a>
        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="nav-links">â˜° <span class="sr-only">Toggle navigation</span></button>
        <nav class="nav-links" id="nav-links" aria-label="Main navigation">
            <a href="#about">About</a><a href="#township">Township</a><a href="#projects">Projects</a><a href="#news">News</a><a class="nav-cta" href="#contact">Get in Touch â†—</a>
        </nav>
    </div>
</header>
<main id="top">
    <section class="hero" aria-labelledby="hero-title">
        <div class="hero-photo" aria-hidden="true"></div>
        <div class="hero-content container">
            <div class="eyebrow"><span class="line"></span> PUNCAK ALAM HOUSING SDN BHD</div>
            <h1 id="hero-title">Building communities.<br><em>Shaping tomorrow.</em></h1>
            <p>A fresh digital experience showcasing the vision, development and future of Puncak Alam.</p>
            <div class="hero-buttons"><a class="btn btn-primary" href="#projects">Explore Our Projects <span>â†—</span></a><a class="btn btn-outline" href="#about">Discover PAHSB</a></div>
        </div>
        <div class="hero-bottom container"><span>EST. IN MALAYSIA Â· CORPORATE WEBSITE CONCEPT</span><span>SCROLL TO EXPLORE â†“</span></div>
    </section>
    <section class="intro section container" id="about">
        <div class="section-label"><span class="dot"></span> 01 / ABOUT PAHSB</div>
        <div class="intro-grid"><h2>Places that connect<br><span>people and possibilities.</span></h2><div><p>Explore the story behind Puncak Alam Housing and the township community it serves. This redesigned layout brings key company information into a clearer, more engaging experience.</p><a class="text-link" href="#township">Explore our township <span>â†—</span></a></div></div>
    </section>
    <section class="township section" id="township"><div class="container township-grid"><div><div class="section-label light"><span class="dot"></span> 02 / OUR TOWNSHIP</div><h2>Designed for<br>everyday living.</h2><p>Discover places, amenities and connections that make a township more than a location.</p><a class="btn btn-light" href="#projects">View Developments â†—</a></div><div class="township-visual"><span class="visual-tag">PUNCAK ALAM Â· MALAYSIA</span></div></div></section>
    <section class="section projects container" id="projects"><div class="section-label"><span class="dot"></span> 03 / OUR DEVELOPMENTS</div><div class="section-head"><h2>Explore our <span>projects.</span></h2><p>A more visual way to browse existing, upcoming and completed developments.</p></div><div class="project-grid"><article class="project-card"><div class="project-art art-one"><span class="project-label">PROJECT CATEGORY</span></div><div class="project-info"><div><h3>Current Projects</h3><p>Development showcase</p></div><span>â†—</span></div></article><article class="project-card"><div class="project-art art-two"><span class="project-label">PROJECT CATEGORY</span></div><div class="project-info"><div><h3>Completed Projects</h3><p>Development showcase</p></div><span>â†—</span></div></article><article class="project-card"><div class="project-art art-three"><span class="project-label">PROJECT CATEGORY</span></div><div class="project-info"><div><h3>Upcoming Projects</h3><p>Development showcase</p></div><span>â†—</span></div></article></div><p class="demo-note">Design preview only â€” project photographs, names, and details will be replaced with verified PAHSB content.</p></section>
    <section class="news-band" id="news"><div class="container news-inner"><div><div class="section-label light"><span class="dot"></span> 04 / LATEST UPDATES</div><h2>Stories from our community.</h2><p>News and announcements will appear here when approved content is available.</p></div><a class="btn btn-light" href="#contact">Contact Us â†—</a></div></section>
</main>
<footer id="contact"><div class="container footer-top"><div><a class="logo footer-logo" href="#top"><span class="logo-symbol">P</span><span>PAHSB<small>Puncak Alam Housing</small></span></a><p>Building communities. Shaping tomorrow.</p></div><div class="footer-links"><a href="#about">About</a><a href="#township">Township</a><a href="#projects">Projects</a><a href="#news">News</a></div></div><div class="container footer-bottom"><span>Â© {{ date('Y') }} PAHSB. Design concept for internal review.</span><span>LOCAL DEVELOPMENT PREVIEW</span></div></footer>
<script>
const toggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.nav-links');
toggle.addEventListener('click', () => { const isOpen = nav.classList.toggle('open'); toggle.setAttribute('aria-expanded', String(isOpen)); });
nav.querySelectorAll('a').forEach(a => a.addEventListener('click', () => { nav.classList.remove('open'); toggle.setAttribute('aria-expanded', 'false'); }));
</script>
</body>
</html>
