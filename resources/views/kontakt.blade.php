@extends('layout')


@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'KONTAKT', 'url' => '']
        ];
@endphp

@section('content')
<section class="flex flex-col lg:flex-row space-y-6 lg:space-y-0 space-x-0 lg:space-x-4 justify-between items-start px-6 py-20 bg-gray-300 text-slate-800">
    <section class="w-full lg:w-1/2 bg-gray-200 px-2 py-4 rounded">
        <h2 class="mb-3 text-2xl font-semibold">Molimo Vas da ispunite ovaj kontakt obrazac :</h2>
        <p class="mb-6 font-semibold">Kontaktirati ćemo vas čim prije moguće.</p>
        @include('partials._kontakt-forma')
    </section>
    <section class="w-full lg:w-1/2 font-semibold space-y-4 py-4">
        <h2 class="mb-3 text-3xl">Budite slobodni kontaktirati nas.</h2>
        <p>Vedran Company  d.o.o.  osnovan je davne 1996 godine te Vam jamči kvalitetan savjet za kupnju uz najbolje cijene i česte akcije . Imamo vrlo kvalitetnu i povoljnu montažu na području cijele Hrvatske te osiguran servis i rezervne dijelove . Najstariji smo i najveći klima centar u Hrvatskoj  s najširim izborom raznih uređaja po akcijskim cijenama .</p>
        <p>Sa našim radnim timovima (preko 50+ ekipa), vršimo usluge prodaje, montaže i servisa  u svim većim i manjim gradovima na području Hrvatske, uključujući i otoke. Naši radni timovi se nalaze vrlo blizu vaših adresa te mogu  vrlo brzo u slučaju bilo koje potrebe izaći na teren te riješiti bilo koju potrebnu situaciju.</p>
        <p>Radimo na lokacijama: Zagreb, Karlovac,  Varaždin, Čakovec, Koprivnica,  Bjelovar, Sisak,  Požega, Virovitica, Osijek, Slavonski brod, + cijela slavonija, Pula, + cijela Istra, Rijeka, Zadar, Biograd na moru,  Šibenik,  Trogir, Split, Dubrovnik,  Korčula, Brač, Hvar,  Lošinj, + Cres, Rab, Krk, otok Ugljan, i otok Pašman, Novalja, Murter, Pag, Senj, Karlobag, Makarska, Ploče, Metković, poluotok Pelješac, te sva manja mjesta u krugu od 150 km od navedenih lokacija. </p>
        <p>
            <address>
                <p>Vedran Company d.o.o.</p>
                <p class="space-x-1"><i class="fa-solid fa-phone"></i><a class="text-indigo-500" href="tel:+385951230003">095/123 0003</a></p>
            </address>
        </p>
        <p>
            U slučaju da se odmah ne javimo zbog momentalne gužve, molim Vas da nam odmah pošaljete SMS ili E-MAIL, i mi ćemo Vas u kratkom roku povratno kontaktirati.
        </p>
        <p>
            E-MAIL:<br>
            <a class="text-indigo-500" href="mailto:luka.technoprom@gmail.com">luka.technoprom@gmail.com</a>
        </p>
        <img class="w-2/3 lg:w-96" src="{{asset('images/people-contact-page-300x200.jpg.webp')}}">
        <div class="details">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span>
                    Mjesta u kojem vršimo usluge prodaje , montaže i servisa u svim većim i manjim gradovima na području Hrvatske, uključujući i otoke.
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6">
                Prodaja montaža i servis akcija klima uređaji Zagreb, Karlovac, Varaždin, Čakovec, Koprivnica, Bjelovar, Sisak, Požega, Virovitica, Osijek, Slavonski brod + cijela Slavonija, Pula + cijela Istra, Rijeka, Zadar, Biograd na moru, Šibenik, Trogir, Split, Dubrovnik, Korčula, Brač, Hvar, Lošinj, Cres, Rab, Krk, otok Ugljan i Pašman, Novalja, Murter, Pag, Senj, Karlobag, Makarska, Ploče, Metković, poluotok Pelješac, te sva manja mjesta u krugu od 150 km od navedenih lokacija. Pod nazivom klima uređaji akcija, možete naći sve ponude.
            </div>
        </div>
        
    </section>
</section>
    
@endsection