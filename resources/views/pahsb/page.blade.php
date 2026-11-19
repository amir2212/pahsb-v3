@extends('pahsb.layout')
@php
$labels=['overview'=>'Overview','board-of-directors'=>'Board of Directors','vision-mission'=>'Vision & Mission','puncak-alam-township'=>'Puncak Alam Township','projects'=>'Projects','news'=>'News','enquiry'=>'Enquiry','registration'=>'Registration'];
$name=$labels[$section] ?? 'PAHSB';
$blocks=config('pahsb.pages.'.$section, []);
$photo=config('pahsb.pageImages.'.$section);
@endphp
@section('title', $name.' | PAHSB')
@section('content')
<section class="pageHero"><div class="wrap"><a class="crumb" href="{{ route('pahsb.home') }}">Home</a><span class="crumb"> / {{ $name }}</span><div class="eyebrow light">PUNCAK ALAM HOUSING SDN BHD</div><h1>{{ $name }}</h1></div></section>
<div class="wrap contentWrap"><div class="reviewNote"><strong>Content review:</strong> Text and project classifications below were extracted from the original PAHSB website on 12 November 2026. Historical figures, leadership information, project status and contact details require company verification before publication.</div>
@if($photo)<figure class="pagePhoto"><img src="{{ asset($photo) }}" alt="{{ $name }}" onerror="this.style.display='none'"></figure>@endif
<div class="richContent">
@if($section === 'projects')
<div class="eyebrow">ORIGINAL WEBSITE PROJECT ARCHIVE</div>
<div class="projectGrid">@php($i=0)
@foreach($blocks as $block)
@if($block['type']==='h3' && $block['text'] !== 'About PAHSB')
<article class="projectItem"><div class="cardImage">@if(config('pahsb.projectsImages.'.$i))<img src="{{ asset(config('pahsb.projectsImages.'.$i)) }}" alt="{{ $block['text'] }}" loading="lazy" onerror="this.style.display='none'">@endif</div><div class="cardBody"><span class="mini">PROJECT / FACILITY ARCHIVE</span><h3>{{ $block['text'] }}</h3></div></article>@php($i++)
@endif
@endforeach</div>
<div class="prose">@foreach($blocks as $block)@if($block['type']==='h3')<h3>{{ $block['text'] }}</h3>@elseif($block['type']==='p')<p>{{ $block['text'] }}</p>@endif @endforeach</div>
@elseif($section === 'registration' || $section === 'enquiry')
<div class="prose">@foreach($blocks as $block)@if($block['type']==='h3')<h2>{{ $block['text'] }}</h2>@elseif($block['type']==='p')<p>{{ $block['text'] }}</p>@endif @endforeach</div>
<div class="reviewNote">This is a content-only redesign preview. No personal-data registration or enquiry form has been activated. Forms require approval, consent language, validation, secure storage and delivery configuration.</div>
@else
<div class="prose">@foreach($blocks as $block)@if($block['type']==='h3')<h2>{{ $block['text'] }}</h2>@elseif($block['type']==='p')<p>{{ $block['text'] }}</p>@elseif($block['type']==='li')<p class="fact">{{ $block['text'] }}</p>@endif @endforeach</div>
@endif
</div><div class="sourceNote">Original source: <a href="{{ config('pahsb.source') }}" target="_blank" rel="noopener">puncakalam.my</a> · Local development preview.</div></div>
@endsection
