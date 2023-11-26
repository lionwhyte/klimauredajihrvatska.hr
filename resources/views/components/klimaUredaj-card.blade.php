@props(['klimaUredaj'])

@php
$slike = explode(',', $klimaUredaj->slike);

@endphp

<x-card> {{-- x-card je importana komponenta od card.blade.php a child sadržaj od ispod će biti ubačen u njegov slot--}}
    <div class="grid md:grid-cols-3 md:space-x-6">
        <a href="/klima-uredaji/{{$klimaUredaj->slug}}">
            <img class="w-96 md:col-span-1" 
                src="{{ asset('images/' . $klimaUredaj->brend . '/' . (isset($slike[2]) && !empty($slike[2]) ? $slike[2] : $slike[0])) }}" alt="{{ $klimaUredaj->naslov }}" />
        </a>
       
        <div class="md:col-span-2">
            <h3 class="text-2xl">
                <a href="/klima-uredaji/{{$klimaUredaj->slug}}">{{$klimaUredaj->naslov}}</a> {{-- moze se pisati $listing['title'] ali $listing->title je preferiran način--}}
            </h3>
            {{-- <x-listing-tags :tagsCsv="$listing->tags" /> --}}

            <ul id="specifikacije" class="mt-3">
                <li>
                    <span>Učinak hlađenja:</span>
                    <span>{{$klimaUredaj->ucinak_hladenja_kw}} kW</span>
                </li>
                <li>
                    <span>Učinak grijanja:</span>
                    <span>{{$klimaUredaj->ucinak_grijanja_kw}} kW</span>
                </li>
                <li>
                    <span>Energetski razred:</span>
                    <span>{{$klimaUredaj->energetski_razred_hladenja}}</span>
                </li>
                <li>
                    <span>Veličina prostora (m2):</span>
                    <span>{{$klimaUredaj->velicina_prostora_m2}}</span>
                </li>
            </ul>
            
            <div class="text-xl font-bold mt-4"><span>{{$klimaUredaj->cijena}}</span><span>€</span></div>
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
                class="inline-block space-x-2 mt-2 bg-green-500 hover:bg-green-700 text-white text-center font-semibold py-2 px-4 rounded transition duration-150" id="dodatni-popust">
                <i class="fa-solid fa-money-bill"></i><span>ŽELIM DODATNI POPUST</span>
            </a>
            {{-- <a href="{{ route('cart.add', ['id' => $klimaUredaj->id]) }}" --}}
            <br>
            <a href="#"
                class="inline-block space-x-2 mt-2 bg-gray-700 hover:bg-gray-900 text-white text-center font-semibold py-2 px-4 transition duration-150" id="dodaj-u-kosaricu">
                <i class="fa-solid fa-bag-shopping"></i><span>DODAJ U KOŠARICU</span>
            </a>
            
        </div>
    </div>
</x-card>