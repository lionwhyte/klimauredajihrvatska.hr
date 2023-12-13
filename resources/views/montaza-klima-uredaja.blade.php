@extends('layout')

@php
$breadcrumbs = [
['title' => 'NASLOVNICA', 'url' => '/'],
['title' => 'MONTAŽA KLIMA UREĐAJA', 'url' => '']
];
@endphp

@section('content')
<section class="container mx-auto space-y-12 mb-20 px-4">
    <p>Vedran Company
        – Klima uređaji Hrvatska savjetuje. Prilikom izbora klima uređaja treba obratiti pozornost na veličinu i snagu klima uređaja. 
        Svaki klima uređaj mora biti namijenjen za prostoriju u koju ga se namjerava postaviti. Kako bi se izračunao raspon snage u kw, 
        broj kvadratnih metara prostora se podijeli sa deset za hlađenje i sedam za grijanje. Parametri koji čine razliku između veličine i 
        snage klima uređaja su sljedeći: položaj prostorije, toplinska izolacija kuće ili stana, električni uređaji u prostoriji, 
        broj ljudi koji koriste klimatizirane uređaje, te kvaliteta površina izrađenih od stakla u prostoriji.</p>
    <p>
        <strong>Obavljamo montažu klima uređaja u svim mjestima i gradovima u RH, sa pedeset (50) radnih timova na raspolaganju raspoređeni po 
            čitavom teritoriju RH – IZLAZAK NA TEREN VRLO BRZO BEZ DODATNIH TROŠKOVA  –
            095/123-0003 , luka.technoprom@gmail.com </strong>
    </p>
    
    @include('partials._montaza-klima-uredaja')

    <div class="su-youtube su-u-responsive-media-yes">
        <iframe
            data-lazyloaded="1"
            src="https://www.youtube.com/embed/FKPVQe9anXs?"
            style="width: 476.156px; height: 267.838px"
            title=""
            data-src="https://www.youtube.com/embed/FKPVQe9anXs?"
            frameborder="0"
            allowfullscreen="allowfullscreen"
            data-aspectratio="0.5625"
            data-oldwidth="547.188"
            data-ll-status="loaded"
            class="entered litespeed-loaded mx-auto"
        ></iframe
        ><noscript
            ><iframe
                style="width: 476.156px; height: 267.838px"
                title=""
                src="https://www.youtube.com/embed/FKPVQe9anXs?"
                frameborder="0"
                allowfullscreen="allowfullscreen"
                data-aspectratio="0.5625"
                data-oldwidth="547.188"
            ></iframe
        ></noscript>
    </div>
</section>
@endsection