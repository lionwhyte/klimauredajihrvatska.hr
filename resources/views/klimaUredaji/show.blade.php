@extends('layout')
@section('content')
{{-- @include('partials._search')  --}}

@php
    $breadcrumbs = [
            ['title' => 'NASLOVNICA', 'url' => '/'],
            ['title' => 'KLIMA UREĐAJI', 'url' => '/klima-uredaji'],
            ['title' => strtoupper($klimaUredaj->slug), 'url' => '']
        ];

    $slike = explode(',', $klimaUredaj->slike);
@endphp

<div class="mx-4 mx-auto px-4 mt-4">
    <x-card>
        <div class="flex flex-col">
            <div class="grid md:grid-cols-3 md:space-x-8">
                <div class="md:col-span-1 overflow-hidden">
                    <x-klimaUredajCarousel :klimaUredaj="$klimaUredaj" />
                    
                </div>
                <div class="md:col-span-2">
                    <h3 class="text-3xl">{{$klimaUredaj->naslov}}</h3>

                    {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}

                    <div class="text-lg text-sm mt-4 mb-2">
                        <span class="font-bold">SKU: </span><span>{{$klimaUredaj->slug}}</span>
                    </div>
                    <div class="text-lg text-sm">
                        <span class="font-bold">Kategorija: </span>
                        <span><a href="/klima-uredaji" class="hover:text-slate-700">Klima uređaji</a></span>
                    </div>
                    <div class="text-2xl font-bold mt-4"><span>{{$klimaUredaj->cijena}}</span><span>€</span></div>
                    @php
                        if ($klimaUredaj->ucinak_hladenja_kw >= 7) {
                            $zatrazi_cjenik_link = "/kompletan-cjenik-klima-7kw-za-prostore-od-60-90-m2";
                        } elseif ($klimaUredaj->ucinak_hladenja_kw >= 5) {
                            $zatrazi_cjenik_link = "/kompletan-cjenik-klima-5kw-za-prostore-od-40-60-m2";
                        } elseif ($klimaUredaj->ucinak_hladenja_kw >= 3.5) {
                            $zatrazi_cjenik_link = "/kompletan-cjenik-klima-35kw-za-prostore-od-25-40-m2";
                        } elseif ($klimaUredaj->ucinak_hladenja_kw >= 2.5) {
                            $zatrazi_cjenik_link = "/kompletan-cjenik-klima-25kw-za-prostore-od-7-25-m2";
                        }
                    @endphp
                    <a href={{$zatrazi_cjenik_link}} 
                        class="inline-block space-x-2 mt-2 bg-green-500 hover:bg-green-700 text-white font-semibold py-2 px-4 rounded transition duration-150" id="dodatni-popust">
                        <i class="fa-solid fa-money-bill"></i><span>ŽELIM DODATNI POPUST</span>
                    </a>
                    <br>
                    {{-- <a href="{{ route('cart.add', ['id' => $klimaUredaj->id]) }}" --}}
                    <hr class="my-4">
                    <div class="flex items-center mt-2">
                        <span class="mr-2 font-semibold">Količina:</span>
                        <input type="number" min="1" max="10" value="1" class="border border-gray-300 p-2 w-16">
                    </div>
                    <a href="#"
                        class="inline-block space-x-2 mt-2 bg-gray-700 hover:bg-gray-900 text-white font-semibold py-2 px-4 transition duration-150" id="dodaj-u-kosaricu">
                        <i class="fa-solid fa-bag-shopping"></i><span>DODAJ U KOŠARICU</span>
                    </a>
                    <hr class="my-4">
                    <div>
                        <a href="https://www.facebook.com/people/Vedran-Company-Technoprom/100048825046617/"><i class="fa-brands fa-facebook text-blue-500 hover:text-blue-600 text-3xl"></i></a>
                        <a href="mailto:luka.technoprom@gmail.com"><i class="fa-solid fa-envelope text-red-500 hover:text-red-600 text-3xl"></i></a>
                    </div>
                    <ul class="grid sm:grid-cols-4 mt-8 max-w-xl mx-auto space-y-12 sm:space-y-0">
                        <li class="mx-auto text-center">
                            <img class="mx-auto h-12" src="{{ asset('images/ucinak-hladenja_5a2a794525dfd.png')}}" alt="ucinak-hladenja">
                            <p class="font-semibold text-gray-500">{{$klimaUredaj->ucinak_hladenja_kw}}</p>
                            <p class="mt-2 font-semibold text-gray-500">Učinak hlađenja <br>(kw)</p>
                        </li>
                        <li class="mx-auto text-center">
                            <img class="mx-auto h-12" src="{{ asset('images/ucin_grijanja.png')}}" alt="ucin_grijanja">
                            <p class="font-semibold text-gray-500">{{$klimaUredaj->ucinak_grijanja_kw}}</p>
                            <p class="mt-2 font-semibold text-gray-500">Učinak grijanja <br>(kw)</p>
                        </li>
                        <li class="mx-auto text-center">
                            <img class="mx-auto h-12" src="{{ asset('images/energetski_razred.png')}}" alt="energetski_razred">
                            <p class="font-semibold text-gray-500">{{$klimaUredaj->energetski_razred_hladenja}}</p>
                            <p class="mt-2 font-semibold text-gray-500">Energetski razred</p>
                        </li>
                        <li class="mx-auto text-center">
                            <img class="mx-auto h-12" src="{{ asset('images/velicina_prostora.png')}}" alt="velicina_prostora">
                            <p class="font-semibold text-gray-500">{{$klimaUredaj->velicina_prostora_m2}}</p>
                            <p class="mt-2 font-semibold text-gray-500">Veličina prostora <br>(m2)</p>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="border border-gray-200 w-full mb-4 mt-6"></div>
            
            <div id="opis-proizvoda">
                <!-- Tabs -->
                <div class="flex space-x-2">
                    <button onclick="showTab('opisContent')" class="font-semibold py-2 px-4 bg-gray-300 hover:bg-gray-400 border-b-4 border-sky-500" id="opisContentButton">
                        OPIS
                    </button>
                    <button onclick="showTab('informacijeContent')" class="font-semibold py-2 px-4 bg-gray-300 hover:bg-gray-400" id="informacijeContentButton">
                        DODATNE INFORMACIJE
                    </button>
                </div>
                <hr class="mb-10">
            
                <!-- Tab Content -->
                <div id="opisContent" class="tab-content">
                    <!-- Opis Content Goes Here -->
                    <p>{!! $klimaUredaj->opis !!}</p>
                </div>
            
                <div id="informacijeContent" class="hidden tab-content">
                    <x-klimaUredajSpecifikacije-tablica :klimaUredaj="$klimaUredaj" />
                </div>
            </div>
        </div>
    </x-card>
    <div class="my-16">
        <h2 class="text-2xl font-semibold mb-2 text-indigo-700">POVEZANI PROIZVODI</h2>
        <hr class="mb-8">
        <div class="grid md:grid-cols-2 gap-8">
            @foreach ($relatedProducts as $klimaUredaj)
                <!-- Display related product details here -->
                <x-klimaUredaj-card :klimaUredaj="$klimaUredaj" />
                <!-- Add other details as needed -->
            @endforeach
        </div>
    </div>
</div>
@endsection