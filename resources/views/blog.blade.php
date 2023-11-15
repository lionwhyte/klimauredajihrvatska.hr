@extends('layout')

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'NOVOSTI', 'url' => '']
        ];
@endphp


@section('content')
    <div class="container px-4 mx-auto grid grid-cols-4 gap-8 text-gray-700 mb-10">
        <section class="col-span-4 md:col-span-3">
            <article class="space-y-6">
                <h2 class="font-semibold text-2xl">Klime akcija</h2>
                <p>Manje Potražite više o Akcija klima uređaja Vrhunski klima uređaji na akciji Dobrodošli u Klima uređaji Hrvatska, 
                gdje vam donosimo vrhunske klima uređaje u prodaji po najnižim cijenama na tržištu. Iskoristite naše ekskluzivne kodove kupona "klime akcija" 
                za rasprodaju klima uređaja kako biste ostvarili još više ušteda. Vjerujemo da svatko zaslužuje pristup kvalitetnim klimatizacijskim...</p>
                <p class="text-sm font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/klime-akcija">PROČITAJ VIŠE +</a></p>
            </article>
            <hr class="my-6">
            <article class="space-y-6">
                <img src="{{asset('/images/rashladni-uredaji_1400xr-1140x445.png')}}">
                <h2 class="font-semibold text-2xl">Rashladni uređaji - Što su, kako rade i koji odabrati?</h2>
                <p>Manje Rashladni uređaji - Što su, kako rade i koji odabrati? Kada su u pitanju rashladni uređaji i sustavi klimatizacije, 
                    postoji širok raspon dostupnih opcija. Od kojih svaka ima svoje prednosti i nedostatke. Razumijevanje različitih vrsta i
                     njihovih značajki važno je pri odabiru pravog sustava za vaše potrebe. Prozorski klima uređaji: Ove jedinice...</p>
                <p class="text-sm font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/rashladni-uredaji-sto-su-kako-rade-i-koji-odabrati">PROČITAJ VIŠE +</a></p>
            </article>
            <hr class="my-6">
            <article class="space-y-6">
                <img src="{{asset('/images/Savjeti-za-ekonomicnu-upotrebu-klima-uredjaja-Featured-960x445.png')}}">
                <h2 class="font-semibold text-2xl">Odabir klima uređaja - ultimativni vodič</h2>
                <p>Od odabira klima uređaja savršenog proizvoda za vaš dom ili ured, do pravilnog postavljanja, evo vašeg vodiča.</p>
                <p class="text-sm font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/odabir-klima-uredaja">PROČITAJ VIŠE +</a></p>
            </article>
            <hr class="my-6">
            <article class="space-y-6">
                <img src="{{asset('/images/klima-uredaji-hero-banner.webp')}}">
                <h2 class="font-semibold text-2xl">Klima uređaji novosti</h2>
                <p>Glavne razlike između različitih vrsta klima uređaja svode se na način hlađenja i njihovu energetsku učinkovitost. 
                    Prozorske jedinice najčešći su tip i lako se postavljaju, ali možda nisu tako učinkovite kao split sustavi ili prijenosne jedinice. 
                    Split sustavi su skuplji unaprijed, ali mogu hladiti veća područja s većom učinkovitosti, dok...</p>
                <p class="text-sm font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/klima-uredaji-novosti">PROČITAJ VIŠE +</a></p>
            </article>
            <hr class="my-6">
            <article class="space-y-6">
                <img src="{{asset('/images/zubadan_kuca_5df8c45fbd899.png.webp')}}">
                <h2 class="font-semibold text-2xl">Dizalica topline - sve što trebate znati!</h2>
                <p>Renovirate staro ili gradite novo i želite osigurati što manje buduće troškove grijanja kroz moderna rješenja? Bez brige, 
                    na ste pravom mjestu.  Neovisno o tome da li već znate nešto o ovoj temi ili ste tek nedavno saznali o dizalicama topline 
                    (toplinske pumpe zrak-voda), potrudit ćemo se unaprijed odgovoriti na većinu vaših pitanja i...</p>
                <p class="text-sm font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/dizalica-topline">PROČITAJ VIŠE +</a></p>
            </article>
            <hr class="my-6">
            <article class="space-y-6">
                <img src="{{asset('/images/fotolia-123425441-1400-5b170a2de3b3a-1400xr_5ef9913f5ac11_1400xr-1140x445.jpg')}}">
                <h2 class="font-semibold text-2xl">Kako odabrati idealan klima uređaj?</h2>
                <p>Osim osnova klimatizacije, s vama ćemo podijeliti nekoliko korisnih savjeta, kako bi vam se odužili za vaše utrošeno vrijeme.</p>
                <p class="text-sm font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/idealan-klima-uredaj">PROČITAJ VIŠE +</a></p>
            </article>
            <hr class="my-6">
        </section>
        <aside class="space-y-4 hidden md:block" id="aside-blog-links">
            <h3 class="text-2xl font-bold">Potražite savjet!</h3>
            <p class="font-semibold text-indigo-700 hover:text-indigo-500"><a href="/kontakt">Zatražite sastanak !</a></p>
            <hr class="my-6">
            <h2 class="text-2xl font-bold">Korisne informacije</h2>
            <p class="font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/klime-akcija">Klime Akcija</a></p>
            <p class="font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/rashladni-uredaji-sto-su-kako-rade-i-koji-odabrati">Rashladni uređaji - Što su, kako rade i koji odabrati?</a></p>
            <p class="font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/odabir-klima-uredaja">Odabir klima uređaja - ultimativni vodič</a></p>
            <p class="font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/klima-uredaji-novosti">Klima uređaji novosti</a></p>
            <p class="font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/dizalica-topline">Dizalica topline - sve što trebate znati!</a></p>
            <p class="font-semibold text-indigo-700 hover:text-indigo-500"><a href="/blog/idealan-klima-uredaj">Kako odabrati idealan klima uređaj?</a></p>
        </aside>
    </div>
@endsection