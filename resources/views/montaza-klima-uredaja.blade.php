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
    <h3 class="text-2xl text-sky-600 text-center">ČESTO POSTAVLJANA PITANJA U VEZI SA<br>
        INSTALACIJOM KLIMA UREĐAJA</h3>

    <ul class="space-y-6 ml-8">
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Koliko udaljena unutarnja jedinica mora biti od stropa?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Unutarnja jedinica s gornje strane kroz rešetke treba izvlačiti zrak iz prostorije da se hladi ili zagrijava, 
                    tako da bi bilo poželjno da bude udaljena od stropa oko 10 cm</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Treba li unutarnja jedinica imati nagib na jednu stranu zbog curenja vode ili ne?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Unutarnja jedinica trebala bi biti postavljena u razini, a kadica za prijem vode unutar klime je pod određenim padom.</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    S koje strane cijevi mogu izaći iz unutarnje jedinice?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Cijevi, tj. Instalacija iz klima uređaja, može ići lijevo, desno ispod klima uređaja i izravno iz klima uređaja kroz zid. 
                Nakon napuštanja klima uređaja lijevo i desno, cijevi se mogu saviti prema gore, što se ne odnosi na crijevo za odvod kondenzata. 
                Duž cijele rute mora imati pad, osim ako nema ugrađene pumpe za kondenzat </p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Može li se unutarnja klima spustiti s stropa?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Ako situacija zahtijeva klimatizaciju, moguće je objesiti “L” profile na strop tako da nema udaljenosti od stropa i 
                da stoji normalno u odnosu na strop.</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Može li se kabel za napajanje produžiti?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Kabel za napajanje može se produžiti kabelom odgovarajućeg presjeka (npr. 1,5 mm za 12-inčne klima uređaje) tako da je sklop unutar klima uređaja, 
                a produžetak je pravilno spojen i izoliran.</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Kolika može biti udaljenost, tj. duljina instalacije između unutarnje i vanjske jedinice?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Preporučena udaljenost između unutarnje i vanjske jedinice je do 10 m, iako u ekstremnim slučajevima kada smo na to prisiljeni ugradnja može biti i dulja. 
                    Klima uređaj tvornički je napunjen freonom za ugradnju do 5 m</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Može li vanjska jedinica biti viša ili niža od unutarnje?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Vanjska jedinica može biti i niža i viša od unutarnje, ako je viša, na cjevovodu treba napraviti sifon svakih 3 m kako se ulje iz kompresora ne 
                bi vratilo u unutarnju jedinicu.</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Može li vanjska jedinica biti na zatvorenoj terasi ili na tavanu?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Vanjska jedinica mora imati izmjenu zraka pa mora biti i na otvorenom</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Mora li vanjska jedinica biti udaljena od zida?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Mora biti udaljeno od zida kako bi mogao povući zrak s stražnje strane klima uređaja 
                (pogreške se posebno rade pri izradi fasada na zidu gdje je klima uređaj već postavljen, a stiropor sužava prostor između klima uređaja i zida)</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Može li se vanjski klima uređaj postaviti na pod bez zidnog držača?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Vanjska jedinica se također može postaviti na pod, ali s razmacima od oko 10 cm, tako da voda može isplivati iz klima uređaja kada se zagrijava</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Može li crijevo za kondenzat biti u oluku ili boci?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Crijevo za odvod kondenzata može se staviti u oluk (treba ga lijepo pričvrstiti tako da se ne opušta na vrućini i ne okreće se uzbrdo), 
                a u bocu se može, ali brzo se napuni. ali na vrhu spremnika koji će se redovito prazniti</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Hoće li se instalacija vidjeti?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Instalacija se može montirati u zid, prolaziti kroz pregrade od gipsa, a najbolje je to učiniti kada se stan obnavlja ili kada se gradi novi. 
                Kada postavljate slike tako da znate gdje prolaze sutra. Instalacija se može prekriti i ukrasnim pvc kanalima. To su radovi koji se doplaćuju.</p>
            </div>
        </li>
        <li class="p-4 rounded  border-solid border-2 border-sky-500">
            <button class="toggle text-start" onclick="toggleDetails(this)">
                <span class="toggle-icon">
                    <i class="fas fa-plus"></i>
                    <i class="fas fa-minus hidden"></i>
                </span>
                <span class="text-sky-700 hover:text-sky-500 text-lg font-semibold">
                    Može li vanjska jedinica biti na krovu?
                </span>
                <span class="text-sm">
                    (prikaži više...)
                </span>
            </button>
            <div class="content hidden mt-6 space-y-4">
                <p class="font-semibold ml-6">Kad to zahtijevaju situacije, vanjsku jedinicu možete postaviti na krov posebnim potporama ili ako postoje mogućnosti za naslon ili neki betonski sim. 
                Ove instalacije su malo zahtjevnije i skuplje.</p>
            </div>
        </li>
    </ul>

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