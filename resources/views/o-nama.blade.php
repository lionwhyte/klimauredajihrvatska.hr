@extends('layout')

@php
$breadcrumbs = [
['title' => 'NASLOVNICA', 'url' => '/'],
['title' => 'O NAMA', 'url' => '']
];
@endphp

@section('content')

{{-- <div id="container" class="bg-red-300 h-[30px]">
    <div id="animateMe" class="opacity-0 translate-y-10>">Animated Element</div>
</div> --}}

<section class="container px-4 mx-auto grid sm:grid-cols-2 lg:grid-cols-3 gap-6 text-gray-700 mb-20">
    <div class="sm:col-span-2 lg:col-span-1">
        <img src="{{asset('/images/meeting-2284501_640.jpg.webp')}}" class="w-[30rem]">
    </div>
    <div class="space-y-4">
        <h2 class="text-2xl font-semibold">Naša povijest</h2>
        <p>Vedran Company  d.o.o. osnovan je 1996 godine te vam jamči kvalitetan savjet za kupnju uz najbolju cijenu, 
            vrlo kvalitetnu i povoljnu montažu i osiguran servis te rezervne dijelove, 
            najstariji smo i najveći klima centar u Hrvatskoj s najširim izborom raznih uređaja.</p>
        <p>Nudimo 18 proizvođača klima uređaja te montažu i servis na teritoriju čitave Hrvatske uključujući i otoke.</p>
        <p>Sve detaljnije informacije  možete  također pronaći na naše 3 web stranice:</p>
        <ul class="list-disc ml-6">
            <li><a class="text-indigo-700 hover:text-indigo-500" href="https://www.vedran-company.hr/">www.vedran-company.hr</a></li>
            <li><a class="text-indigo-700 hover:text-indigo-500" href="https://www.technoprom.hr/">www.technoprom.hr</a></li>
            <li><a class="text-indigo-700 hover:text-indigo-500" href="https://klimauredajihrvatska.hr/">www.klimauredajihrvatska.hr</a></li>
        </ul>
    </div>
    <div>
        <p class="text-xl font-semibold">Zašto smo br. 1 u Hrvatskoj - od davne 1996 g, dajemo do 7 g. garancije na klima uređaje, najširi izbor, 
            najniže cijene, preko 20000 ugradnji - otplata do 36 rata !</p>
    </div>
</section>

<section class="container px-4 mb-8 mx-auto text-gray-700 space-y-4">
    <p class="font-bold">U svim ovim navedenim mjestima imamo direktno svoje predstavnike, možemo doći na uviđaj Vašeg prostora, 
        dati Vam savjete i sugerirati što bi odgovaralo za kupnju, te na koji način bi se izvela montaža klima uređaja, 
        potpuno besplatno. Naši djelatnici su razmješteni po navedenim zonama, oni žive i rade na tim lokacijama,
        a lokacije prodaju i montažu klima uređaja su:</p>
    <p>Zagreb, Karlovac, Rijeka, Pula + cijela Istra, Umag, Poreč, Rovinj, Labin, Pazin, Buje, Zadar, Šibenik, Split, Metković,
        poluotok Pelješac, Dubrovnik, Metković, Omiš, Ploče, Makarska, Slavonski brod, Osijek, Vinkovci, Koprivnica, Požega, Virovitica, Našice, Sisak, 
        Varaždin, Bjelovar, Čakovec, Vukovar, cijela Slavonija, Rab, Hvar, Brać, Cres , Šolta , Krk, Ugljan, Pašman, Dugi otok, Korčula !<br>
        Novalja, Pag, Vir, Murter, Vodice, Biograd na moru, Pakoštane, Drage, Pirovac, Rogoznica, Primošten, Crikvenica, Senj, Lika i gorski kotar .
        Radimo i po manjim mjestima u okolici gore navedenih gradova u krugu od 100 km + otoci !</p>
</section>

<section class="px-6 py-20 grid sm:grid-cols-2 lg:grid-cols-4 gap-6 text-gray-700 bg-slate-200">
    <h2 class="sm:col-span-2 lg:col-span-4 text-center text-2xl font-semibold">NAŠE POSEBNOSTI</h2>
    <div class="p-8 space-y-4 bg-white">
        <div class="text-4xl"><i class="fa-solid fa-phone"></i></div>
        <h3 class="text-xl font-semibold">SLUŽBA ZA KORISNIKE</h3>
        <p class="font-semibold">Učinkovitost rješenja te zadovoljstvo i uspjeh naših klijenata je naš uspjeh. 
            Sa svim našim klijentima njegujemo partnerski i iskren odnos kojemu smo maksimalno posvećeni tijekom cjelokupne suradnje.</p>
    </div>
    <div class="p-8 space-y-4 bg-white">
        <div class="text-4xl"><i class="fa-solid fa-truck"></i></div>
        <h3 class="text-xl font-semibold">BESPLATNA DOSTAVA & POVRAT</h3>
        <p class="font-semibold">Za narudžbe čija je vrijednost veća od 300,00 € nakon obračunatih popusta: besplatna dostava na području cijele RH (otoci sa nadoplatom).</p>
    </div>
    <div class="p-8 space-y-4 bg-white">
        <div class="text-4xl"><i class="fa-solid fa-money-bill"></i></div>
        <h3 class="text-xl font-semibold">JAMSTVO</h3>
        <p class="font-semibold">Svi naši klima uređaji imaju 3 do 7 godina jamstva ovisno o proizvođaču i modelu klima uređaja, 
            koje pokriva kompletan klima uređaj, montažu i sve njegove komponente. 
            Naknadno, za Hyundai zidne klima uređaje stambene serije nudimo posebnu pogodnost produljenog jamstva po sistemu 5 te 10 godina jamstva na kompresor.</p>
    </div>
    <div class="p-8 space-y-4 bg-white">
        <div class="text-4xl"><i class="fa-solid fa-screwdriver-wrench"></i></div>
        <h3 class="text-xl font-semibold">MONTAŽA ZA CIJELU HRVATSKU</h3>
        <p class="font-semibold">Razvili smo dugotrajne partnerske odnose te kroz edukaciju i podršku stvorili mrežu od preko 50+ radnih 
            timova koja vam može pružiti personaliziranu pomoć i ekskluzivnu uslugu u svim većim gradovima i mjestima, 
            uključujući okolicu i otoke na teritoriju cijele Hrvatske.</p>
    </div>
</section>

<section class="container mx-auto px-4 py-20 grid md:grid-cols-2 gap-6 text-gray-500">
    <div>
        <p class="font-bold">Tko smo mi?</p>
        <h2 class="text-4xl text-sky-500 mb-10">Usredotočeni smo na stvaranje vrijednosti i rješavanje poslovnih izazova kroz isporuku modernih usluga i rješenja.</h2>
        <p class="font-semibold">Gradimo partnerski odnos u pronalaženju rješenja. Kupac postaje partner u oblikovanju proizvoda i usluga.</p>
    </div>
    <div>
        <img src="{{asset('/images/it-generic-6.jpg.webp')}}">
    </div>
</section>

<section class="container mx-auto px-4 text-gray-700">
    <hr class="my-2 mb-20">
    <p class="text-center mb-10 font-semibold">ZASTUPAMO PROIZVOĐAČE KLIMA UREĐAJA - IMAMO U PONUDI KOMPLETAN NJIHOV ASORTIMAN TE SMO I OVLAŠTENI SERVIS ZA BRENDOVE: Daikin, Midea, Gree, Haier, Maxon,
        Panasonic, Fujitsu, Toshiba, Mitsubishi, Samsung, Lg, Korel, Hitachi, Azuri, Vivax, Quadro, Tesla, Sinclair, Bergen, Vaillant , Airwell, Hyundai - Vivax.</p>
    <p class="text-center font-bold text-gray-400">Zastupamo</p>
    <h2 class="text-center text-3xl mb-20 font-bold text-sky-500">Brendove</h2>
    <div class="mx-auto grid sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <img src="{{asset('/images/vox-logo-400x147.jpg')}}" alt="vox-logo" class="mx-auto">
        <img src="{{asset('/images/tesla-logo-1.png.webp')}}" alt="tesla-logo" class="mx-auto">
        <img src="{{asset('/images/vivax-logo-270x470.jpg')}}" alt="vivax-logo" class="mx-auto">
        <img src="{{asset('/images/toshiba-logo-270x470.jpg')}}" alt="toshiba-logo" class="mx-auto">
        <img src="{{asset('/images/samsung-logo-270x470.jpg')}}" alt="samsung-logo" class="mx-auto">
        <img src="{{asset('/images/qzen-logo-270x470.png')}}" alt="qzen-logo" class="mx-auto">
        <img src="{{asset('/images/mitsubishi-electric-logo-270x470.jpg')}}" alt="mitsubishi-electric-logo" class="mx-auto">
        <img src="{{asset('/images/midea-logo-270x470.jpg')}}" alt="midea-logo" class="mx-auto">
        <img src="{{asset('/images/maxon-logo-270x470.jpg')}}" alt="maxon-logo" class="mx-auto">
        <img src="{{asset('/images/lg-logo-270x470.jpg')}}" alt="lg-logo" class="mx-auto">
        <img src="{{asset('/images/korel-logo-270x470.jpg')}}" alt="korel-logo" class="mx-auto">
        <img src="{{asset('/images/hyundai-logo-270x470.jpg')}}" alt="hyundai-logo" class="mx-auto">
        <img src="{{asset('/images/hitachi-logo-270x470.jpg')}}" alt="hitachi-logo" class="mx-auto">
        <img src="{{asset('/images/haier-logo-270x470.jpg')}}" alt="haier-logo" class="mx-auto">
        <img src="{{asset('/images/gree-logo-270x470.jpg')}}" alt="gree-logo" class="mx-auto">
        <img src="{{asset('/images/fujitsu-logo-270x470.jpg')}}" alt="fujitsu-logo" class="mx-auto">
        <img src="{{asset('/images/daikin-logo-270x470.jpg')}}" alt="daikin-logo" class="mx-auto">
        <img src="{{asset('/images/azuri-logo-270x470.jpg')}}" alt="azuri-logo" class="mx-auto">
    </div>
</section>
    
<section class="container mx-auto px-4 grid md:grid-cols-3 gap-12 my-24 text-gray-700">
    <div>
        <h2 class="text-3xl font-semibold mb-6">Što naši klijenti kažu o nama?</h2>
        <p class="font-semibold">Učinkovitost rješenja te zadovoljstvo i uspjeh naših klijenata je naš uspjeh. 
            Sa svim našim klijentima njegujemo partnerski i iskren odnos kojemu smo maksimalno posvećeni tijekom cjelokupne suradnje.</p>
    </div>
    <div class="md:col-span-2">
        <p class="font-italic font-semibold text-xl">
            <i>
                "Pohvalila bih sve! I brzinu i stručnost, ljubaznost, pristupačnost i naravno cijenu koja je bila povoljnija od svih, 
            ali kvaliteta je bila neupitna. Ništa nas nije zasmetalo, čak su više puta dolazili vidjeti urede kako bi se kvalitetno pripremili i znali organizirati rad, 
            kako sebi tako i našim zaposlenima i stvarno su bili tihi, brzi i efikasni."
            </i>
        </p>
        <div class="flex items-center space-x-4">
            <span>
                <a href="https://kompare.hr/o-nama/">
                    <img src="{{asset('/images/helena.png.webp')}}" class="w-16 rounded-full">
                </a>
            </span>
            <span>
                <a href="https://kompare.hr/o-nama/" class="block font-bold">Helena Zagorac</a>
                <a href="https://kompare.hr/o-nama/" class="block text-sm font-semibold">Voditeljica ureda uprave kompare.hr</a>
            </span>
        </div>
    </div>
</section>

<section class="px-4 py-20 bg-gray-900 grid sm:grid-cols-2 lg:grid-cols-4 gap-12 my-24 text-white text-center">
    <div>
        <div class="text-5xl">26+</div>
        <div class="text-3xl">Godine iskustva</div>
    </div>
    <div>
        <div class="text-5xl">50+</div>
        <div class="text-3xl">Timova</div>
    </div>
    <div>
        <div class="text-5xl">2000+</div>
        <div class="text-3xl">Godišnjih montaža</div>
    </div>
    <div>
        <div class="text-5xl">200+</div>
        <div class="text-3xl">Tisuća zadovoljnih klijenata</div>
    </div>
</section>

<section class="container mx-auto px-4 grid sm:grid-cols-2 lg:grid-cols-3 gap-12 text-gray-700 mb-20">
        <div class="space-y-6">
            <img src="{{asset('/images/it-generic-7.jpg')}}">
            <h2 class="text-2xl text-sky-500">NAŠA MISIJA</h2>
            <h3 class="text-xl">Naša tehnologija je inovativna. Sada i u budućnosti.</h3>
            <p>Ono što nas još čini iznimnim je visoka razina inovativnosti: reinvestiramo više od 5 posto našeg prometa u istraživanje i
                 razvoj ponude proizvoda i usluga. Jamčimo tehnologiju koja je i ostaje inovativna duži niz godina ...</p>
        </div>
        <div class="space-y-6">
            <img src="{{asset('/images/it-generic-8.jpg')}}">
            <h2 class="text-2xl text-sky-500">NAŠA VIZIJA</h2>
            <h3 class="text-xl">Optimizirani smo za sve zadane uvijete.</h3>
            <p>Bilo da se radi o mobilnoj ili stacionarnoj klimatizaciji, za iznajmljivanje ili za prodaju, prijenosnu mjernu tehnologiju za klimu,
                 kvalitetu i kontrolu emisija ili proizvode koji osiguravaju kvalitetu vode technoprom.hr radi u različitim područjima. 
                 I svaki od njih je stručnjak u svom području. Rezultat takvoga međusobnog djelovanja je: stručno znanje, visokokvalitetni proizvodi i
                  sveobuhvatna ponuda pouzdanih usluga - kao individualno ili cjelovito rješenje!</p>
        </div>
        <div class="space-y-6">
            <img src="{{asset('/images/it-generic-9.jpg')}}">
            <h2 class="text-2xl text-sky-500">KARIJERA</h2>
            <h3 class="text-xl">Postani dio našeg tima!</h3>
            <p>Važno je da želiš biti dio našeg tima i da je za tebe, kao i za nas, kupac uvijek na prvom mjestu.</p>
        </div>
</section>
@include('partials._blogLinkovi')
@endsection